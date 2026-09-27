<?php
/**
 * Session cart helpers. Cart lines live in $_SESSION['cart'].
 * Each line: key, product_id, variant_id, title, travel_date,
 *            adults, children, pickup_zone, pickup_fee, unit_adult,
 *            unit_child, line_total.
 */

require_once __DIR__ . '/catalog.php';

function cart_start(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_set_cookie_params([
            'lifetime' => 0, 'path' => '/',
            'secure' => !empty($_SERVER['HTTPS']),
            'httponly' => true, 'samesite' => 'Lax',
        ]);
        session_start();
    }
    if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
}

function cart_items(): array
{
    cart_start();
    return $_SESSION['cart'];
}

function cart_count(): int
{
    return count(cart_items());
}

function cart_total(): int
{
    return array_sum(array_column(cart_items(), 'line_total'));
}

/**
 * Validate + add a line. Returns [ok(bool), message(string)].
 */
function cart_add(array $in): array
{
    cart_start();

    $product = catalog_get((string) ($in['product_id'] ?? ''));
    if (!$product) return [false, 'Unknown product.'];

    $variantId = (string) ($in['variant_id'] ?? '');
    $variant = $product['variants'][$variantId] ?? null;
    if (!$variant) return [false, 'Please choose a package.'];

    $zoneId = (string) ($in['pickup_zone'] ?? 'central');
    $zone = $product['pickup_zones'][$zoneId] ?? null;
    if (!$zone) return [false, 'Please choose a pickup area.'];

    $adults = max(0, min(20, (int) ($in['adults'] ?? 0)));
    $children = max(0, min(20, (int) ($in['children'] ?? 0)));
    if ($adults + $children < 1) return [false, 'Please add at least one guest.'];
    if ($adults < 1) return [false, 'At least one adult is required.'];

    $date = (string) ($in['travel_date'] ?? '');
    $d = DateTime::createFromFormat('Y-m-d', $date);
    if (!$d || $d->format('Y-m-d') !== $date) return [false, 'Please pick a valid date.'];
    if ($d <= (new DateTime())->setTime(0, 0)) return [false, 'Please pick a future date.'];

    $lineTotal = $adults * $variant['adult'] + $children * $variant['child'] + $zone['fee'];

    $_SESSION['cart'][bin2hex(random_bytes(6))] = [
        'product_id'  => $product['id'],
        'variant_id'  => $variantId,
        'title'       => $product['title'] . ' — ' . $variant['title'],
        'travel_date' => $date,
        'adults'      => $adults,
        'children'    => $children,
        'pickup_zone' => $zoneId,
        'pickup_fee'  => $zone['fee'],
        'unit_adult'  => $variant['adult'],
        'unit_child'  => $variant['child'],
        'line_total'  => $lineTotal,
    ];
    return [true, 'Added to cart.'];
}

function cart_remove(string $key): void
{
    cart_start();
    unset($_SESSION['cart'][$key]);
}

function cart_clear(): void
{
    cart_start();
    $_SESSION['cart'] = [];
}
