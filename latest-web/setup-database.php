<?php
/**
 * One-time database setup — creates all tables the site needs (idempotent,
 * safe to re-run; uses CREATE TABLE IF NOT EXISTS everywhere).
 *
 * Run it:
 *   Local/UAT : php setup-database.php   (or open http://localhost/setup-database.php)
 *   Production: via CLI only, or temporarily set $allowWeb = true below.
 *
 * Tables: users, bookings, wishlist, password_resets, leads.
 */

$allowWeb = true; // set to false after first run if you keep this file on prod

$isCli = (php_sapi_name() === 'cli');
$host  = strtolower($_SERVER['HTTP_HOST'] ?? '');
$isProdHost = str_contains($host, 'arihantlink.com');

if (!$isCli && (!$allowWeb || $isProdHost && !isset($_GET['confirm']))) {
    http_response_code(403);
    die($isProdHost
        ? "On production, run from CLI or add ?confirm=1 to the URL.\n"
        : "Web access disabled. Run: php setup-database.php\n");
}

header('Content-Type: text/plain; charset=utf-8');

require __DIR__ . '/includes/db-config.php'; // provides $pdo, loads .env / .env.uat

echo "Connected to database.\n\n";

$tables = [

'users' => "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(120) NOT NULL,
    email VARCHAR(190) NOT NULL UNIQUE,
    phone VARCHAR(30) DEFAULT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

'bookings' => "CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT DEFAULT NULL,
    name VARCHAR(120) NOT NULL,
    email VARCHAR(190) NOT NULL,
    phone VARCHAR(30) DEFAULT NULL,
    package VARCHAR(190) NOT NULL,
    guests INT NOT NULL DEFAULT 1,
    travel_date DATE DEFAULT NULL,
    price_aed INT DEFAULT NULL,
    total_aed INT DEFAULT NULL,
    dietary VARCHAR(190) DEFAULT NULL,
    message TEXT,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_user (user_id),
    INDEX idx_created (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

'wishlist' => "CREATE TABLE IF NOT EXISTS wishlist (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    item_slug VARCHAR(190) NOT NULL,
    item_title VARCHAR(190) NOT NULL,
    item_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY uniq_user_item (user_id, item_slug),
    INDEX idx_user (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

'password_resets' => "CREATE TABLE IF NOT EXISTS password_resets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(190) NOT NULL,
    token_hash CHAR(64) NOT NULL,
    expires_at DATETIME NOT NULL,
    used TINYINT(1) NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_token (token_hash)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

'leads' => "CREATE TABLE IF NOT EXISTS leads (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

];

// Shop tables (orders + order_items) share definitions with the live code.
require_once __DIR__ . '/includes/shop-tables.php';
ensure_shop_tables($pdo);
echo "[OK]   orders + order_items (via shop-tables)\n";

$ok = 0;
foreach ($tables as $name => $sql) {
    try {
        $pdo->exec($sql);
        // Verify + report row count.
        $count = $pdo->query("SELECT COUNT(*) AS c FROM `$name`")->fetch()['c'];
        echo "[OK]   $name (rows: $count)\n";
        $ok++;
    } catch (Throwable $e) {
        echo "[FAIL] $name — " . $e->getMessage() . "\n";
    }
}

echo "\n$ok/" . count($tables) . " tables ready.\n";
echo "\nDone. You can leave this file in place (it is idempotent), but on\n";
echo "production consider deleting it or setting \$allowWeb = false.\n";
