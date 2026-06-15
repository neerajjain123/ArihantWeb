<?php
/**
 * Tiny CSRF helper.
 *
 *   require_once __DIR__ . '/includes/csrf.php';
 *   csrf_start();
 *
 *   // In a form:
 *   <input type="hidden" name="csrf_token" value="<?php echo csrf_token(); ?>">
 *
 *   // In the POST handler (before doing real work):
 *   csrf_verify_or_die();
 *
 * For JSON / fetch endpoints:
 *   - read $_SERVER['HTTP_X_CSRF_TOKEN'] in addition to $_POST['csrf_token'].
 *
 * Tokens rotate per session and are constant-time-compared.
 */

if (!function_exists('csrf_start')) {
    function csrf_start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            // Defensive cookie params (header.php should have set these already).
            session_set_cookie_params([
                'lifetime' => 0,
                'path'     => '/',
                'secure'   => !empty($_SERVER['HTTPS']),
                'httponly' => true,
                'samesite' => 'Lax',
            ]);
            session_start();
        }
        if (empty($_SESSION['_csrf'])) {
            $_SESSION['_csrf'] = bin2hex(random_bytes(32));
        }
    }
}

if (!function_exists('csrf_token')) {
    function csrf_token(): string
    {
        csrf_start();
        return $_SESSION['_csrf'];
    }
}

if (!function_exists('csrf_field')) {
    function csrf_field(): string
    {
        return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8') . '">';
    }
}

if (!function_exists('csrf_verify')) {
    function csrf_verify(): bool
    {
        csrf_start();
        $supplied = $_POST['csrf_token']
            ?? ($_SERVER['HTTP_X_CSRF_TOKEN'] ?? '');
        if (!is_string($supplied) || $supplied === '') {
            return false;
        }
        return hash_equals((string) $_SESSION['_csrf'], $supplied);
    }
}

if (!function_exists('csrf_verify_or_die')) {
    function csrf_verify_or_die(): void
    {
        if (!csrf_verify()) {
            http_response_code(403);
            // Plain response, never echo the expected token.
            echo 'Forbidden — invalid security token. Please refresh and try again.';
            exit;
        }
    }
}
