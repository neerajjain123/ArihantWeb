<?php
/**
 * Lead magnet capture endpoint (UAE Visa Checklist download).
 *
 * Security parity with send-email.php:
 *   - CORS locked to ALLOWED_ORIGINS.
 *   - Honeypot field "website".
 *   - Per-IP rate limit (5 / 600s).
 *   - Leads stored in DB (table auto-created) + admin notification email.
 *   - Checklist PDF emailed to the lead and download URL returned.
 */

require_once __DIR__ . '/env.php';
env_load();

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
$allowedOrigins = array_filter(array_map('trim', explode(',', env('ALLOWED_ORIGINS', 'https://arihantlink.com'))));
if ($origin !== '' && in_array($origin, $allowedOrigins, true)) {
    header('Access-Control-Allow-Origin: ' . $origin);
    header('Vary: Origin');
}
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
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
    error_log('[lead-capture] Rejected origin: ' . $origin);
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Forbidden.']);
    exit;
}

// Per-IP rate limit.
$rateLimitDir = sys_get_temp_dir() . '/arihant_ratelimit';
if (!is_dir($rateLimitDir)) { @mkdir($rateLimitDir, 0700, true); }
$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
$rlFile = $rateLimitDir . '/lead_' . md5($ip);
$rlMax = 5; $rlWindow = 600; $now = time();
$hits = is_file($rlFile)
    ? array_filter(array_map('intval', explode(',', (string) @file_get_contents($rlFile))), fn($t) => $t > ($now - $rlWindow))
    : [];
if (count($hits) >= $rlMax) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Too many requests. Please try again in a few minutes.']);
    exit;
}
$hits[] = $now;
@file_put_contents($rlFile, implode(',', $hits), LOCK_EX);

$downloadUrl = 'https://arihantlink.com/downloads/uae-visa-checklist-2026.pdf';

try {
    $json_input = file_get_contents('php://input');
    $input = json_decode($json_input, true);
    if (json_last_error() !== JSON_ERROR_NONE || !is_array($input)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid request.']);
        exit;
    }

    if (!empty($input['website'])) {
        // Honeypot — pretend success.
        echo json_encode(['success' => true, 'download' => $downloadUrl]);
        exit;
    }

    $name = trim((string) ($input['name'] ?? ''));
    $email_raw = trim((string) ($input['email'] ?? ''));
    $whatsapp = trim((string) ($input['whatsapp'] ?? ''));

    if ($name === '' || $email_raw === '') {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Please enter your name and email.']);
        exit;
    }
    $email = filter_var($email_raw, FILTER_VALIDATE_EMAIL);
    if (!$email) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid email address.']);
        exit;
    }

    $name     = htmlspecialchars(mb_substr($name, 0, 100), ENT_QUOTES, 'UTF-8');
    $whatsapp = htmlspecialchars(mb_substr($whatsapp, 0, 30), ENT_QUOTES, 'UTF-8');
    $source   = htmlspecialchars(mb_substr(trim((string) ($input['source'] ?? 'uae-visa')), 0, 120), ENT_QUOTES, 'UTF-8');

    // --- Store lead in DB (best effort — never block the download on DB issues).
    try {
        require_once __DIR__ . '/db-config.php'; // provides $pdo
        $pdo->exec("CREATE TABLE IF NOT EXISTS leads (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(190) NOT NULL,
            whatsapp VARCHAR(30) DEFAULT NULL,
            lead_magnet VARCHAR(60) NOT NULL DEFAULT 'visa-checklist',
            source_page VARCHAR(120) DEFAULT NULL,
            ip VARCHAR(45) DEFAULT NULL,
            status VARCHAR(20) NOT NULL DEFAULT 'new',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_email (email),
            INDEX idx_created (created_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $stmt = $pdo->prepare(
            "INSERT INTO leads (name, email, whatsapp, lead_magnet, source_page, ip) VALUES (?, ?, ?, 'visa-checklist', ?, ?)"
        );
        $stmt->execute([$name, $email, $whatsapp !== '' ? $whatsapp : null, $source, $ip]);
    } catch (Throwable $dbErr) {
        error_log('[lead-capture] DB save failed: ' . $dbErr->getMessage());
    }

    // --- Emails (best effort).
    require __DIR__ . '/vendor/autoload.php';

    $smtpHost   = env('SMTP_HOST', 'smtp.hostinger.com');
    $smtpPort   = (int) env('SMTP_PORT', '465');
    $smtpSecure = env('SMTP_SECURE', 'ssl');
    $smtpUser   = env('SMTP_USER');
    $smtpPass   = env('SMTP_PASS');
    $smtpFrom   = env('SMTP_FROM', 'contact@arihantlink.com');
    $smtpFromNm = env('SMTP_FROM_NAME', 'Arihant Travels');
    $adminTo    = env('ADMIN_NOTIFY_INBOX', 'contact@arihantlink.com');

    if ($smtpUser && $smtpPass) {
        // Customer email with the checklist link.
        try {
            $cmail = new PHPMailer\PHPMailer\PHPMailer(true);
            $cmail->isSMTP();
            $cmail->Host       = $smtpHost;
            $cmail->SMTPAuth   = true;
            $cmail->Username   = $smtpUser;
            $cmail->Password   = $smtpPass;
            $cmail->SMTPSecure = $smtpSecure;
            $cmail->Port       = $smtpPort;
            $cmail->setFrom($smtpFrom, $smtpFromNm);
            $cmail->addAddress($email, $name);
            $cmail->Subject = 'Your Free UAE Visa Document Checklist 2026 - Arihant Travels';
            $cmail->Body    = "Dear $name,\n\n"
                . "Thank you for downloading the UAE Visa Document Checklist 2026.\n\n"
                . "Download it here: $downloadUrl\n\n"
                . "Ready to apply? Just send your passport copy on WhatsApp (+971 58 594 5007) "
                . "and we'll reply with a quote and the exact document list for your case within minutes. "
                . "Most visas are approved in 24-72 hours.\n\n"
                . "Best regards,\nArihant Travels Team\ncontact@arihantlink.com\nhttps://arihantlink.com/uae-visa";
            $cmail->send();
        } catch (Throwable $e) {
            error_log('[lead-capture] customer mail failed: ' . $e->getMessage());
        }

        // Admin notification.
        try {
            $amail = new PHPMailer\PHPMailer\PHPMailer(true);
            $amail->isSMTP();
            $amail->Host       = $smtpHost;
            $amail->SMTPAuth   = true;
            $amail->Username   = $smtpUser;
            $amail->Password   = $smtpPass;
            $amail->SMTPSecure = $smtpSecure;
            $amail->Port       = $smtpPort;
            $amail->setFrom($smtpFrom, $smtpFromNm);
            $amail->addAddress($adminTo);
            $amail->addReplyTo($email, $name);
            $amail->Subject = 'New Visa Checklist Lead: ' . $name;
            $amail->Body    = "New lead magnet download (UAE Visa Checklist):\n\n"
                . "Name: $name\nEmail: $email\nWhatsApp: " . ($whatsapp !== '' ? $whatsapp : 'Not provided')
                . "\nSource page: $source\n\nFollow up within 24 hours for best conversion.";
            $amail->send();
        } catch (Throwable $e) {
            error_log('[lead-capture] admin mail failed: ' . $e->getMessage());
        }
    } else {
        error_log('[lead-capture] SMTP credentials missing in .env — emails skipped.');
    }

    echo json_encode([
        'success' => true,
        'download' => $downloadUrl,
        'message' => 'Your checklist is ready! We have also emailed you the download link.',
    ]);
    exit;

} catch (Throwable $e) {
    error_log('[lead-capture] Unhandled: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'An unexpected error occurred. Please try again.']);
    exit;
}
