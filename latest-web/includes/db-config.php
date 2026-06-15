<?php
/**
 * Database configuration.
 *
 * Credentials are loaded from a .env file (see .env.example) so that
 * secrets are not committed to source control. The legacy in-file
 * password literal has been removed.
 */

require_once __DIR__ . '/env.php';
env_load();

$db_host = env('DB_HOST', 'srv1331.hstgr.io');
$db_name = env('DB_NAME', 'u166882835_arihantdb_php');
$db_user = env('DB_USER', 'u166882835_arihanlink_usr');
$db_pass = env('DB_PASS');

if ($db_pass === null || $db_pass === '') {
    // Don't leak the reason. Log it for the operator and fail closed.
    error_log('[db-config] DB_PASS is missing. Create a .env file using .env.example as a template.');
    http_response_code(503);
    die('Service temporarily unavailable.');
}

try {
    $pdo = new PDO(
        "mysql:host=$db_host;dbname=$db_name;charset=utf8mb4",
        $db_user,
        $db_pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // Use real prepared statements; safer than emulated.
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    // Never echo the exception message in production.
    error_log('[db-config] PDO connect failed: ' . $e->getMessage());
    http_response_code(503);
    die('Service temporarily unavailable.');
}
