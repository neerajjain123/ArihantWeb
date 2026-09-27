<?php
/**
 * Cart API — JSON endpoint used by the add-to-cart widget.
 * POST { action: 'add'|'count', ...line fields }
 */

require_once __DIR__ . '/env.php';
require_once __DIR__ . '/cart-lib.php';
env_load();

header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', '0');
ini_set('log_errors', '1');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Same-origin check via Referer (parity with other endpoints).
$allowedOrigins = array_filter(array_map('trim', explode(',', env('ALLOWED_ORIGINS', 'https://arihantlink.com'))));
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$ok = false;
foreach ($allowedOrigins as $a) {
    if ($referer !== '' && str_starts_with($referer, $a)) { $ok = true; break; }
}
if (!$ok) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Forbidden.']);
    exit;
}

try {
    $in = json_decode(file_get_contents('php://input'), true);
    if (!is_array($in)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid request.']);
        exit;
    }

    $action = (string) ($in['action'] ?? 'add');
    cart_start();

    if ($action === 'add') {
        [$okAdd, $msg] = cart_add($in);
        echo json_encode([
            'success' => $okAdd,
            'message' => $msg,
            'count'   => cart_count(),
            'total'   => cart_total(),
        ]);
        exit;
    }

    if ($action === 'count') {
        echo json_encode(['success' => true, 'count' => cart_count(), 'total' => cart_total()]);
        exit;
    }

    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Unknown action.']);
} catch (Throwable $e) {
    error_log('[cart-api] ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Something went wrong.']);
}
