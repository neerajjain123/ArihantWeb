<?php
/**
 * Booking form endpoint (desert safari and similar AED-denominated bookings).
 *
 * Hardened during 2026-05 review (parity with send-contact-email.php):
 *   - SMTP credentials read from .env.
 *   - CORS locked to ALLOWED_ORIGINS, defaults to same-origin.
 *   - Honeypot field "website".
 *   - Per-IP rate limit (5 / 600s).
 *   - No internal error info leaked to clients.
 */

require_once __DIR__ . '/env.php';
env_load();

$appDebug = env('APP_DEBUG', '0') === '1';

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
$allowedOrigins = array_filter(array_map('trim', explode(',', env('ALLOWED_ORIGINS', 'https://arihantlink.com'))));
if ($origin !== '' && in_array($origin, $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: ' . $origin);
    header('Vary: Origin');
}
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-CSRF-Token');
header('Content-Type: application/json; charset=utf-8');

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

$method = $_SERVER['REQUEST_METHOD'] ?? 'DIRECT';
if ($method === 'OPTIONS') { http_response_code(204); exit; }
if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Origin / Referer check.
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$validReferer = false;
foreach ($allowedOrigins as $allowed) {
    if ($referer !== '' && str_starts_with($referer, $allowed)) { $validReferer = true; break; }
}
if (!$validReferer && $origin !== '' && !in_array($origin, $allowedOrigins, true)) {
    error_log('[send-email] Rejected origin: ' . $origin);
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Forbidden.']);
    exit;
}

// Per-IP rate limit.
$rateLimitDir = sys_get_temp_dir() . '/arihant_ratelimit';
if (!is_dir($rateLimitDir)) { @mkdir($rateLimitDir, 0700, true); }
$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$rlFile = $rateLimitDir . '/booking_' . md5($ip);
$rlMax = 5; $rlWindow = 600; $now = time();
$hits = is_file($rlFile)
    ? array_filter(array_map('intval', explode(',', (string) @file_get_contents($rlFile))), fn($t) => $t > ($now - $rlWindow))
    : [];
if (count($hits) >= $rlMax) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Too many requests. Please try again in a few minutes or WhatsApp us.']);
    exit;
}
$hits[] = $now;
@file_put_contents($rlFile, implode(',', $hits), LOCK_EX);

require __DIR__ . '/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $json_input = file_get_contents('php://input');
    $input = json_decode($json_input, true);
    if (json_last_error() !== JSON_ERROR_NONE || !is_array($input)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid request.']);
        exit;
    }

    if (!empty($input['website'])) {
        // Honeypot.
        echo json_encode(['success' => true, 'message' => 'Thank you.']);
        exit;
    }

    $required = ['name', 'email', 'phone', 'guests', 'date'];
    foreach ($required as $field) {
        if (empty($input[$field])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => "Missing required field: $field"]);
            exit;
        }
    }

    $email_raw = trim((string) $input['email']);
    $email = filter_var($email_raw, FILTER_VALIDATE_EMAIL);
    if (!$email) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
        exit;
    }

    $name    = htmlspecialchars(trim((string) $input['name']), ENT_QUOTES, 'UTF-8');
    $phone   = htmlspecialchars(trim((string) $input['phone']), ENT_QUOTES, 'UTF-8');
    $guests  = max(1, intval($input['guests']));
    $date    = htmlspecialchars(trim((string) $input['date']), ENT_QUOTES, 'UTF-8');
    $dietary = htmlspecialchars(trim((string) ($input['dietary'] ?? 'Not specified')), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim((string) ($input['message'] ?? 'None')), ENT_QUOTES, 'UTF-8');

    if (strlen($phone) < 8) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Phone number is too short.']);
        exit;
    }

    $date_obj = DateTime::createFromFormat('Y-m-d', $input['date']);
    if (!$date_obj || $date_obj->format('Y-m-d') !== $input['date']) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid date format.']);
        exit;
    }
    $today = (new DateTime())->setTime(0, 0, 0);
    if ($date_obj <= $today) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Please select a future date.']);
        exit;
    }

    $package = htmlspecialchars((string) ($input['package'] ?? 'Standard Desert Safari'), ENT_QUOTES, 'UTF-8');
    $price   = max(0, intval($input['price'] ?? 99));
    $total   = $guests * $price;
    $subject = $package . ' Booking Request';

    $email_body = <<<EOT
Dear Arihant Travel Team,

A new $package booking request has been submitted:

CUSTOMER DETAILS:
Name: $name
Email: $email
Phone: $phone
Number of Guests: $guests
Preferred Date: $date
Dietary Requirements: $dietary

Additional Requirements:
$message

PACKAGE DETAILS:
Package: $package
Price: $price AED per person
Total Estimated Cost: $total AED

Please contact the customer within 2 hours.

Best regards,
Arihant Travel Website
EOT;

    $smtpHost   = env('SMTP_HOST', 'smtp.hostinger.com');
    $smtpPort   = (int) env('SMTP_PORT', '465');
    $smtpSecure = env('SMTP_SECURE', 'ssl');
    $smtpUser   = env('SMTP_USER');
    $smtpPass   = env('SMTP_PASS');
    $smtpFrom   = env('SMTP_FROM', 'contact@arihantlink.com');
    $smtpFromNm = env('SMTP_FROM_NAME', 'Arihant Travel');
    $adminTo    = env('ADMIN_NOTIFY_INBOX', 'contact@arihantlink.com');

    if (!$smtpUser || !$smtpPass) {
        error_log('[send-email] SMTP credentials missing in .env');
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Mail service unavailable. Please WhatsApp us.']);
        exit;
    }

    $mail_sent = false;
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $smtpHost;
        $mail->SMTPAuth   = true;
        $mail->Username   = $smtpUser;
        $mail->Password   = $smtpPass;
        $mail->SMTPSecure = $smtpSecure;
        $mail->Port       = $smtpPort;
        $mail->setFrom($smtpFrom, $smtpFromNm);
        $mail->addAddress($adminTo);
        $mail->addReplyTo($email, $name);
        $mail->Subject = $subject;
        $mail->Body    = $email_body;
        $mail->send();
        $mail_sent = true;
    } catch (Exception $e) {
        error_log('[send-email] PHPMailer error: ' . $e->getMessage());
        $headers = "From: $smtpFrom\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";
        $mail_sent = @mail($adminTo, $subject, $email_body, $headers);
    }

    if ($mail_sent) {
        $customer_subject = 'Your ' . $package . ' Booking Request - Arihant Travel';
        $customer_body = <<<EOT
Dear $name,

Thank you for your $package booking request.

We have received your request with the following details:
- Number of Guests: $guests
- Preferred Date: $date
- Dietary Requirements: $dietary
- Package: $package
- Estimated Cost: $total AED

Our team will review your request and get back to you within 2 hours with a personalised quote and booking confirmation.

For anything urgent, WhatsApp us on +971 58 594 5007.

Best regards,
Arihant Travel Team
contact@arihantlink.com
EOT;
        try {
            $cmail = new PHPMailer(true);
            $cmail->isSMTP();
            $cmail->Host       = $smtpHost;
            $cmail->SMTPAuth   = true;
            $cmail->Username   = $smtpUser;
            $cmail->Password   = $smtpPass;
            $cmail->SMTPSecure = $smtpSecure;
            $cmail->Port       = $smtpPort;
            $cmail->setFrom($smtpFrom, $smtpFromNm);
            $cmail->addAddress($email, $name);
            $cmail->Subject = $customer_subject;
            $cmail->Body    = $customer_body;
            $cmail->send();
        } catch (Exception $e) {
            error_log('[send-email] customer confirm failed: ' . $e->getMessage());
        }

        echo json_encode([
            'success' => true,
            'message' => "Thank you. Your booking request has been sent. We'll reply within 2 hours."
        ]);
        exit;
    }

    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sorry, the request could not be sent. Please WhatsApp us on +971 58 594 5007.']);
    exit;

} catch (Throwable $e) {
    error_log('[send-email] Unhandled: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'An unexpected error occurred.']);
    exit;
}
