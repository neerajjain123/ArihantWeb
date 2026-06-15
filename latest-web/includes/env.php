<?php
/**
 * Lightweight .env loader.
 *
 * Loads key=value pairs from a .env file into $_ENV / getenv().
 * Looks for the .env file ABOVE the document root (preferred) and
 * falls back to the project root for environments that can't host
 * outside-of-webroot files.
 *
 * Usage:
 *   require_once __DIR__ . '/env.php';
 *   env_load();
 *   $dbPass = env('DB_PASS');
 *
 * Security:
 *   - Never commit a real .env file. .gitignore must exclude it.
 *   - Web access to .env is blocked via .htaccess (FilesMatch \.env$).
 */

if (!function_exists('env_load')) {
    function env_load(): void
    {
        static $loaded = false;
        if ($loaded) {
            return;
        }

        // Preferred locations, in order. First match wins.
        $candidates = [
            // One level above document root (recommended on Hostinger if accessible).
            dirname($_SERVER['DOCUMENT_ROOT'] ?? __DIR__ . '/..') . '/.env',
            // Project root (still readable, but at least .htaccess blocks web access).
            __DIR__ . '/../.env',
        ];

        foreach ($candidates as $path) {
            if (!is_string($path) || !is_readable($path)) {
                continue;
            }
            $lines = @file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if ($lines === false) {
                continue;
            }
            foreach ($lines as $line) {
                $trim = trim($line);
                if ($trim === '' || $trim[0] === '#') {
                    continue;
                }
                if (!str_contains($trim, '=')) {
                    continue;
                }
                [$key, $value] = explode('=', $trim, 2);
                $key = trim($key);
                $value = trim($value);
                // Strip surrounding quotes if any.
                if (
                    (str_starts_with($value, '"') && str_ends_with($value, '"')) ||
                    (str_starts_with($value, "'") && str_ends_with($value, "'"))
                ) {
                    $value = substr($value, 1, -1);
                }
                if ($key === '' || isset($_ENV[$key])) {
                    continue;
                }
                $_ENV[$key] = $value;
                putenv("$key=$value");
            }
            break; // stop after first found .env
        }

        $loaded = true;
    }
}

if (!function_exists('env')) {
    function env(string $key, ?string $default = null): ?string
    {
        env_load();
        $val = $_ENV[$key] ?? getenv($key);
        if ($val === false || $val === null || $val === '') {
            return $default;
        }
        return (string) $val;
    }
}
