<?php
/**
 * Wishlist API — JSON endpoint for add/remove/toggle.
 * POST { action: 'toggle'|'add'|'remove', slug, title, url }
 * Requires a logged-in session; returns 401 + login URL otherwise.
 */

require_once __DIR__ . '/auth.php';
auth_start_session();

header('Content-Type: application/json; charset=utf-8');
ini_set('display_errors', '0');
ini_set('log_errors', '1');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed.']);
    exit;
}

// Same-origin check via Referer (consistent with other endpoints).
require_once __DIR__ . '/env.php';
env_load();
$allowedOrigins = array_filter(array_map('trim', explode(',', env('ALLOWED_ORIGINS', 'https://arihantlink.com'))));
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$validReferer = false;
foreach ($allowedOrigins as $allowed) {
    if ($referer !== '' && str_starts_with($referer, $allowed)) { $validReferer = true; break; }
}
if (!$validReferer) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Forbidden.']);
    exit;
}

if (!isset($_SESSION['user_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'login' => true, 'message' => 'Please log in to save tours.']);
    exit;
}

try {
    $input = json_decode(file_get_contents('php://input'), true);
    if (!is_array($input)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid request.']);
        exit;
    }

    $action = (string) ($input['action'] ?? 'toggle');
    $slug   = trim((string) ($input['slug'] ?? ''));
    $title  = trim((string) ($input['title'] ?? ''));
    $url    = trim((string) ($input['url'] ?? ''));

    // Slug: conservative charset; URL: internal paths only.
    if ($slug === '' || !preg_match('/^[a-z0-9\-\/]{1,190}$/i', $slug)) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Invalid item.']);
        exit;
    }
    $url = auth_safe_redirect_path($url);
    if ($url === '') { $url = $slug; }
    $title = mb_substr($title !== '' ? $title : $slug, 0, 190);

    require_once __DIR__ . '/db-config.php';
    require_once __DIR__ . '/account-tables.php';
    ensure_account_tables($pdo);

    $uid = (int) $_SESSION['user_id'];

    $exists = $pdo->prepare('SELECT id FROM wishlist WHERE user_id = ? AND item_slug = ?');
    $exists->execute([$uid, $slug]);
    $row = $exists->fetch();

    if ($action === 'remove' || ($action === 'toggle' && $row)) {
        if ($row) {
            $del = $pdo->prepare('DELETE FROM wishlist WHERE id = ?');
            $del->execute([$row['id']]);
        }
        echo json_encode(['success' => true, 'saved' => false]);
        exit;
    }

    if (!$row) {
        $ins = $pdo->prepare('INSERT INTO wishlist (user_id, item_slug, item_title, item_url) VALUES (?, ?, ?, ?)');
        $ins->execute([$uid, $slug, htmlspecialchars($title, ENT_QUOTES, 'UTF-8'), $url]);
    }
    echo json_encode(['success' => true, 'saved' => true]);
    exit;

} catch (Throwable $e) {
    error_log('[wishlist-api] ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Something went wrong.']);
    exit;
}
