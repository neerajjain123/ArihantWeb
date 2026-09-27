<?php
/**
 * Shop tables (orders + order_items). Idempotent.
 */

function ensure_shop_tables(PDO $pdo): void
{
    static $done = false;
    if ($done) return;
    $done = true;

    try {
        $pdo->exec("CREATE TABLE IF NOT EXISTS orders (
            id INT AUTO_INCREMENT PRIMARY KEY,
            order_ref VARCHAR(24) NOT NULL UNIQUE,
            user_id INT DEFAULT NULL,
            name VARCHAR(120) NOT NULL,
            email VARCHAR(190) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            hotel VARCHAR(190) DEFAULT NULL,
            notes TEXT,
            total_aed INT NOT NULL,
            status VARCHAR(20) NOT NULL DEFAULT 'pending',
            stripe_session_id VARCHAR(120) DEFAULT NULL,
            paid_at DATETIME DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            INDEX idx_email (email),
            INDEX idx_status (status),
            INDEX idx_created (created_at)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

        $pdo->exec("CREATE TABLE IF NOT EXISTS order_items (
            id INT AUTO_INCREMENT PRIMARY KEY,
            order_id INT NOT NULL,
            product_id VARCHAR(60) NOT NULL,
            variant_id VARCHAR(60) NOT NULL,
            title VARCHAR(190) NOT NULL,
            travel_date DATE NOT NULL,
            adults INT NOT NULL DEFAULT 1,
            children INT NOT NULL DEFAULT 0,
            pickup_zone VARCHAR(60) DEFAULT NULL,
            pickup_fee INT NOT NULL DEFAULT 0,
            unit_adult INT NOT NULL,
            unit_child INT NOT NULL,
            line_total INT NOT NULL,
            INDEX idx_order (order_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
    } catch (Throwable $e) {
        error_log('[shop-tables] ' . $e->getMessage());
    }
}
