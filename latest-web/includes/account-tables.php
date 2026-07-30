<?php
/**
 * Ensures account-related tables exist. Idempotent (CREATE TABLE IF NOT EXISTS).
 * Requires $pdo (include db-config.php first).
 */

function ensure_account_tables(PDO $pdo): void
{
    static $done = false;
    if ($done) return;
    $done = true;

    try {
        $pdo->exec("CREATE TABLE IF NOT EXISTS bookings (
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
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $pdo->exec("CREATE TABLE IF NOT EXISTS wishlist (
            id INT AUTO_INCREMENT PRIMARY KEY,
            user_id INT NOT NULL,
            item_slug VARCHAR(190) NOT NULL,
            item_title VARCHAR(190) NOT NULL,
            item_url VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            UNIQUE KEY uniq_user_item (user_id, item_slug),
            INDEX idx_user (user_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $pdo->exec("CREATE TABLE IF NOT EXISTS password_resets (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(190) NOT NULL,
            token_hash CHAR(64) NOT NULL,
            expires_at DATETIME NOT NULL,
            used TINYINT(1) NOT NULL DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_email (email),
            INDEX idx_token (token_hash)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    } catch (Throwable $e) {
        error_log('[account-tables] ' . $e->getMessage());
    }
}
