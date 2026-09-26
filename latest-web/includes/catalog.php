<?php
/**
 * Product catalog — structured activity data for the cart.
 *
 * This file is the single source of truth for bookable products. To add a new
 * activity, append an entry here — the cart, checkout and Stripe integration
 * pick it up automatically. Move to a DB table when the catalog grows.
 *
 * NOTE: child prices are estimates — adjust them to your real rates.
 */

function catalog_products(): array
{
    return [
        'desert-safari' => [
            'id'    => 'desert-safari',
            'title' => 'Dubai Desert Safari',
            'url'   => '/desert-safari',
            'variants' => [
                'standard'  => ['title' => 'Standard Evening Safari',            'adult' => 99,  'child' => 79],
                'vip'       => ['title' => 'VIP Evening Safari (Jain counter)',  'adult' => 149, 'child' => 119],
                'premium'   => ['title' => 'Premium Evening Safari (Red Dunes)', 'adult' => 199, 'child' => 159],
                'morning'   => ['title' => 'Morning Desert Safari',              'adult' => 150, 'child' => 120],
                'overnight' => ['title' => 'Overnight Desert Safari',            'adult' => 249, 'child' => 199],
                'quad'      => ['title' => 'Quad Bike Safari',                   'adult' => 350, 'child' => 350],
            ],
            'pickup_zones' => [
                'central' => ['title' => 'Central Dubai — Downtown, Marina, JBR, Bur Dubai, Deira (free)', 'fee' => 0],
                'palm'    => ['title' => 'Palm Jumeirah (+AED 50 per car)',    'fee' => 50],
                'sharjah' => ['title' => 'Sharjah / Ajman (+AED 100 per car)', 'fee' => 100],
            ],
        ],
    ];
}

function catalog_get(string $productId): ?array
{
    return catalog_products()[$productId] ?? null;
}
