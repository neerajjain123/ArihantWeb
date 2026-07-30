<?php
/**
 * Auth helpers for account pages.
 *
 *   require_once __DIR__ . '/includes/auth.php';
 *   auth_require_login();          // redirects guests to /login?redirect=<current>
 *   $user = auth_user($pdo);       // full user row for the logged-in user
 */

if (!function_exists('auth_start_session')) {
    function auth_start_session(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_set_cookie_params([
                'lifetime' => 0,
                'path'     => '/',
                'secure'   => !empty($_SERVER['HTTPS']),
                'httponly' => true,
                'samesite' => 'Lax',
            ]);
            session_start();
        }
    }
}

if (!function_exists('auth_safe_redirect_path')) {
    /**
     * Only allow internal, relative redirect targets (no scheme, no host,
     * no protocol-relative //evil.com). Returns '' when unsafe/empty.
     */
    function auth_safe_redirect_path(?string $path): string
    {
        $path = trim((string) $path);
        if ($path === '' || $path[0] === '\\') return '';
        if (str_starts_with($path, '//')) return '';
        if (preg_match('#^[a-z][a-z0-9+.-]*:#i', $path)) return ''; // has a scheme
        // Normalise: allow "dashboard", "/dashboard", "my-bookings?x=1"
        return ltrim($path, '/');
    }
}

if (!function_exists('auth_require_login')) {
    function auth_require_login(): void
    {
        auth_start_session();
        if (!isset($_SESSION['user_id'])) {
            $current = $_SERVER['REQUEST_URI'] ?? '';
            $target = 'login';
            $safe = auth_safe_redirect_path($current);
            if ($safe !== '') {
                $target .= '?redirect=' . urlencode($safe);
            }
            header('Location: ' . $target);
            exit();
        }
    }
}

if (!function_exists('auth_user')) {
    function auth_user(PDO $pdo): ?array
    {
        auth_start_session();
        if (!isset($_SESSION['user_id'])) return null;
        $stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
        $stmt->execute([$_SESSION['user_id']]);
        $user = $stmt->fetch();
        return $user ?: null;
    }
}
