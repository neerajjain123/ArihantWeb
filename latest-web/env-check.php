<?php
/**
 * TEMPORARY diagnostic — upload, open in browser, then DELETE from the server.
 * Usage: https://arihantlink.com/env-check.php?key=arihant-diag-2026
 * Shows which .env file was found and whether the DB connects. Never prints secrets.
 */

if (($_GET['key'] ?? '') !== 'arihant-diag-2026') {
    http_response_code(404);
    exit('Not found');
}

header('Content-Type: text/plain; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '0');

echo "=== Environment check ===\n\n";
echo "HTTP_HOST      : " . ($_SERVER['HTTP_HOST'] ?? '(none)') . "\n";
echo "DOCUMENT_ROOT  : " . ($_SERVER['DOCUMENT_ROOT'] ?? '(none)') . "\n";
$isProd = str_contains(strtolower($_SERVER['HTTP_HOST'] ?? ''), 'arihantlink.com');
echo "Detected env   : " . ($isProd ? 'PRODUCTION (will read .env)' : 'LOCAL/UAT (will read .env.uat first)') . "\n\n";

$aboveRoot = dirname($_SERVER['DOCUMENT_ROOT'] ?? __DIR__);
$projRoot  = __DIR__;
$paths = [
    "$aboveRoot/.env"     => 'above docroot: .env',
    "$projRoot/.env"      => 'project root : .env',
    "$aboveRoot/.env.uat" => 'above docroot: .env.uat',
    "$projRoot/.env.uat"  => 'project root : .env.uat',
];
echo "--- .env file locations ---\n";
foreach ($paths as $p => $label) {
    $exists = is_file($p) ? 'EXISTS' : 'missing';
    $readable = is_readable($p) ? ', readable' : (is_file($p) ? ', NOT READABLE (check permissions)' : '');
    echo str_pad($label, 26) . ": $exists$readable\n";
}

echo "\n--- Loaded configuration (values hidden) ---\n";
require_once __DIR__ . '/includes/env.php';
env_load();
foreach (['DB_HOST', 'DB_NAME', 'DB_USER'] as $k) {
    echo str_pad($k, 10) . ": " . (env($k) ?? '(not set)') . "\n";
}
echo "DB_PASS   : " . (env('DB_PASS') ? 'SET (' . strlen((string) env('DB_PASS')) . ' chars)' : '*** NOT SET — this causes the 503 ***') . "\n";
echo "SMTP_PASS : " . (env('SMTP_PASS') ? 'SET' : 'not set') . "\n";

echo "\n--- Database connection test ---\n";
if (!env('DB_PASS')) {
    echo "Skipped — DB_PASS not loaded. Fix the .env location/permissions above.\n";
} else {
    try {
        $pdo = new PDO(
            'mysql:host=' . env('DB_HOST') . ';dbname=' . env('DB_NAME') . ';charset=utf8mb4',
            env('DB_USER'), env('DB_PASS'),
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_TIMEOUT => 5]
        );
        $ver = $pdo->query('SELECT VERSION()')->fetchColumn();
        echo "SUCCESS — connected to MySQL $ver\n";
        $tables = $pdo->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN);
        echo 'Tables (' . count($tables) . '): ' . implode(', ', $tables) . "\n";
    } catch (PDOException $e) {
        // Error codes only — no credentials in output.
        echo "FAILED — " . $e->getCode() . ': ';
        $msg = $e->getMessage();
        if (str_contains($msg, 'Access denied'))            echo "Access denied — wrong DB_USER or DB_PASS.\n";
        elseif (str_contains($msg, 'Unknown database'))     echo "Unknown database — check DB_NAME.\n";
        elseif (str_contains($msg, 'getaddrinfo'))          echo "Host not found — check DB_HOST.\n";
        elseif (str_contains($msg, 'timed out'))            echo "Connection timeout — check DB_HOST / firewall.\n";
        else                                                echo "Connection error (see server error log for detail).\n";
    }
}

echo "\n*** Delete this file from the server when done. ***\n";
