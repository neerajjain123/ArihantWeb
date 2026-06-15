<?php
/**
 * Contact form endpoint.
 *
 * Hardened during 2026-05 review:
 *   - SMTP credentials moved to .env (no more hard-coded passwords).
 *   - Debug array stripped from production responses (controlled by APP_DEBUG).
 *   - CORS locked to ALLOWED_ORIGINS (defaults to same-origin only).
 *   - Honeypot field ("website") rejects bots.
 *   - Per-IP rate limit using a flat file (5 requests / 10 minutes).
 *   - htmlspecialchars-then-validate ordering fixed for email field.
 */

require_once __DIR__ . '/env.php';
env_load();

$appDebug = env('APP_DEBUG', '0') === '1';

// --- CORS: same-origin by default ---
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
$allowedOrigins = array_filter(array_map('trim', explode(',', env('ALLOWED_ORIGINS', 'https://arihantlink.com'))));
if ($origin !== '' && in_array($origin, $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: ' . $origin);
    header('Vary: Origin');
}
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-CSRF-Token');
header('Content-Type: application/json; charset=utf-8');

// Hide internals.
ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

$request_method = $_SERVER['REQUEST_METHOD'] ?? 'DIRECT';

if ($request_method === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($request_method === 'DIRECT' || php_sapi_name() === 'cli') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

if ($request_method !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// --- Origin / Referer enforcement ---
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$validReferer = false;
foreach ($allowedOrigins as $allowed) {
    if ($referer !== '' && str_starts_with($referer, $allowed)) {
        $validReferer = true;
        break;
    }
}
// Also accept same-origin POSTs that lack a Referer (some browsers strip it on HTTPS).
if (!$validReferer && $origin !== '' && !in_array($origin, $allowedOrigins, true)) {
    error_log('[send-contact-email] Rejected origin: ' . $origin);
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Forbidden.']);
    exit;
}

// --- Per-IP rate limit (5 requests / 600 seconds) ---
$rateLimitDir = sys_get_temp_dir() . '/arihant_ratelimit';
if (!is_dir($rateLimitDir)) {
    @mkdir($rateLimitDir, 0700, true);
}
$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$rlFile = $rateLimitDir . '/contact_' . md5($ip);
$rlMax = 5;
$rlWindow = 600;
$now = time();
$hits = [];
if (is_file($rlFile)) {
    $hits = array_filter(
        array_map('intval', explode(',', (string) @file_get_contents($rlFile))),
        fn($t) => $t > ($now - $rlWindow)
    );
}
if (count($hits) >= $rlMax) {
    http_response_code(429);
    echo json_encode([
        'success' => false,
        'message' => 'Too many requests. Please try again in a few minutes or contact us on WhatsApp.'
    ]);
    exit;
}
$hits[] = $now;
@file_put_contents($rlFile, implode(',', $hits), LOCK_EX);

// --- Load PHPMailer ---
$autoload_path = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload_path)) {
    error_log('[send-contact-email] PHPMailer autoload missing: ' . $autoload_path);
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Mail service unavailable. Please contact us on WhatsApp.']);
    exit;
}
require $autoload_path;

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

    // Honeypot: real users don't fill the "website" field.
    if (!empty($input['website'])) {
        http_response_code(200);
        // Pretend success so bots don't retry.
        echo json_encode(['success' => true, 'message' => 'Thank you.']);
        exit;
    }

    // Validate required fields.
    $required = ['name', 'email', 'subject', 'message'];
    foreach ($required as $field) {
        if (empty($input[$field])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => "Missing required field: $field"]);
            exit;
        }
    }

    // Sanitize: validate email FIRST (don't htmlspecialchars before validating),
    // then htmlspecialchars only when composing the message body.
    $email_raw = trim((string) $input['email']);
    $email = filter_var($email_raw, FILTER_VALIDATE_EMAIL);
    if (!$email) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid email address. Please check and try again.']);
        exit;
    }

    $name    = htmlspecialchars(trim((string) $input['name']), ENT_QUOTES, 'UTF-8');
    $phone   = htmlspecialchars(trim((string) ($input['phone'] ?? 'Not provided')), ENT_QUOTES, 'UTF-8');
    $subject = htmlspecialchars(trim((string) $input['subject']), ENT_QUOTES, 'UTF-8');
    $message = htmlspecialchars(trim((string) $input['message']), ENT_QUOTES, 'UTF-8');

    $email_subject = 'Contact Form: ' . $subject;
    $email_body = <<<EOT
Dear Arihant Travel Team,

A new contact form submission has been received:

CUSTOMER DETAILS:
Name: $name
Email: $email
Phone: $phone
Subject: $subject

MESSAGE:
$message

Please respond to the customer within 24 hours.

Best regards,
Arihant Travel Website
EOT;

    // SMTP from env.
    $smtpHost   = env('SMTP_HOST', 'smtp.hostinger.com');
    $smtpPort   = (int) env('SMTP_PORT', '465');
    $smtpSecure = env('SMTP_SECURE', 'ssl');
    $smtpUser   = env('SMTP_USER');
    $smtpPass   = env('SMTP_PASS');
    $smtpFrom   = env('SMTP_FROM', 'contact@arihantlink.com');
    $smtpFromNm = env('SMTP_FROM_NAME', 'Arihant Travel');
    $adminTo    = env('ADMIN_NOTIFY_INBOX', 'contact@arihantlink.com');

    if (!$smtpUser || !$smtpPass) {
        error_log('[send-contact-email] SMTP credentials not configured in .env');
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Mail service unavailable. Please contact us on WhatsApp.']);
        exit;
    }

    $mail_sent = false;
    $phpmailer_error = null;
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

        $mail->Subject = $email_subject;
        $mail->Body    = $email_body;

        $mail->send();
        $mail_sent = true;
    } catch (Exception $e) {
        $phpmailer_error = $e->getMessage();
        error_log('[send-contact-email] PHPMailer error: ' . $phpmailer_error);
        // Fallback to native mail().
        $headers = "From: $smtpFrom\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";
        $mail_sent = @mail($adminTo, $email_subject, $email_body, $headers);
    }

    if ($mail_sent) {
        // Customer confirmation (best effort, don't fail the request if this fails).
        $customer_subject = 'Thank you for contacting Arihant Travel';
        $customer_body = <<<EOT
Dear $name,

Thank you for contacting Arihant Travel.

We have received your message regarding: $subject

Our team will review your inquiry and get back to you within 24 hours. For anything urgent, WhatsApp us on +971 58 594 5007.

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
            error_log('[send-contact-email] customer confirm failed: ' . $e->getMessage());
        }

        $response = [
            'success' => true,
            'message' => "Thank you. Your message has been sent. We'll reply within 24 hours.",
        ];
        if ($appDebug) {
            $response['debug'] = ['phpmailer' => $phpmailer_error ? 'fallback used' : 'ok'];
        }
        echo json_encode($response);
        exit;
    }

    http_response_code(500);
    $response = [
        'success' => false,
        'message' => 'Sorry, the message could not be sent. Please WhatsApp us on +971 58 594 5007.'
    ];
    if ($appDebug) {
        $response['debug'] = ['phpmailer_error' => $phpmailer_error];
    }
    echo json_encode($response);
    exit;

} catch (Throwable $e) {
    error_log('[send-contact-email] Unhandled: ' . $e->getMessage());
    http_response_code(500);
    $response = ['success' => false, 'message' => 'An unexpected error occurred. Please try again later.'];
    if ($appDebug) {
        $response['debug'] = ['exception' => $e->getMessage()];
    }
    echo json_encode($response);
    exit;
}
