<?php
// =============================================================================
//  UAE VISA PRICES — the single source of truth for every visa price on the site.
//
//  Change a price HERE and every page that uses this file updates. Never type a
//  visa price directly into a page again.
//
//  price_aed      Standard processing, all-in (government fee + service fee).
//                 null = not confirmed yet -> the site shows "Get a quote".
//  express_aed    24-48 hour express price. null = express not offered / not confirmed.
//  price_inr      Optional rupee price for the India city pages. null = show AED only.
//  price_prefix   'From' when the final price can vary (nationality, duration...).
//  confirmed      true once the owner has confirmed the price (all confirmed
//                 2026-09-26; null prices/express are still open).
// =============================================================================

$visaPricesUpdated = '2026-09-26';

$visaTypes = [

    // ---- Coming to the UAE --------------------------------------------------
    'tourist-30-single' => [
        'group' => 'visit', 'name' => '30-day tourist visa', 'entries' => 'Single entry',
        'stay' => '30 days', 'processing' => '3–4 working days', 'icon' => 'fa-plane-arrival',
        'price_aed' => 350, 'express_aed' => 650, 'price_prefix' => 'From', 'price_inr' => 7900,
        'url' => '/uae-visa#tourist-30', 'popular' => true, 'confirmed' => true,
    ],
    'tourist-30-multi' => [
        'group' => 'visit', 'name' => '30-day multiple-entry visa', 'entries' => 'Multiple entry',
        'stay' => '30 days', 'processing' => '3–4 working days', 'icon' => 'fa-exchange-alt',
        'price_aed' => 750, 'express_aed' => 950, 'price_prefix' => 'From',
        'url' => '/30-days-multiple-entry-uae-visa', 'confirmed' => true,
    ],
    'tourist-60-single' => [
        'group' => 'visit', 'name' => '60-day tourist visa', 'entries' => 'Single entry',
        'stay' => '60 days', 'processing' => '3–4 working days', 'icon' => 'fa-calendar-alt',
        'price_aed' => 700, 'express_aed' => 850, 'price_prefix' => 'From',
        'url' => '/60-days-single-entry-uae-visa', 'confirmed' => true,
    ],
    'tourist-60-multi' => [
        'group' => 'visit', 'name' => '60-day multiple-entry visa', 'entries' => 'Multiple entry',
        'stay' => '60 days', 'processing' => '3–4 working days', 'icon' => 'fa-globe-asia',
        'price_aed' => 850, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-visa#tourist-60', 'confirmed' => true,
    ],
    'gcc-resident' => [
        'group' => 'visit', 'name' => 'GCC resident e-visa', 'entries' => 'Single entry',
        'stay' => '30 days', 'processing' => '24–48 hours', 'icon' => 'fa-id-card',
        'price_aed' => 350, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-visa#gcc-evisa', 'confirmed' => true,
    ],

    // ---- Already in the UAE -------------------------------------------------
    'inside-extension' => [
        'group' => 'inside', 'name' => 'Tourist visa extension', 'entries' => 'Single-entry visas only',
        'stay' => '+30 days', 'processing' => '2–3 working days', 'icon' => 'fa-redo',
        // Rules (owner, 2026-09-26): 30-day single entry -> up to 2 extensions;
        // 60-day single entry -> 1 extension; multiple-entry visas -> no extension.
        // Price is per extension. Not the same thing as A2A.
        'price_aed' => 1000, 'express_aed' => null, 'price_prefix' => '', 'note' => 'Per extension, no exit needed',
        'url' => '/uae-visa#extensions', 'popular' => true, 'confirmed' => true,
    ],
    'a2a-60' => [
        // A2A: fly to Kish Island, one night, return next day on a new
        // 60-day visa. NOT an inside-country extension.
        'group' => 'inside', 'name' => 'A2A visa (new 60 days)', 'entries' => '1 night on Kish Island', 'note' => 'Includes flights, hotel and visa',
        'stay' => 'New 60-day visa', 'processing' => 'Back the next day', 'icon' => 'fa-redo-alt',
        'price_aed' => 1500, 'express_aed' => 1800, 'price_prefix' => 'From',
        'url' => '/uae-a2a-visa-extension-60-days', 'confirmed' => true,
    ],

    // ---- Layover ------------------------------------------------------------
    'transit-48' => [
        'group' => 'transit', 'name' => '48-hour transit visa', 'entries' => 'Single entry',
        'stay' => '48 hours', 'processing' => '2–3 working days', 'icon' => 'fa-hourglass-half',
        'price_aed' => 200, 'express_aed' => null, 'price_prefix' => '',
        'note' => 'Free if your airline applies for you',
        'url' => '/uae-48-hour-transit-visa', 'confirmed' => true,
    ],
    'transit-96' => [
        'group' => 'transit', 'name' => '96-hour transit visa', 'entries' => 'Single entry',
        'stay' => '96 hours', 'processing' => '2–3 working days', 'icon' => 'fa-clock',
        'price_aed' => 250, 'express_aed' => 450, 'price_prefix' => 'From', 'price_inr' => 5700,
        'url' => '/uae-96-hour-transit-visa', 'confirmed' => true,
    ],

    // ---- Live and work in the UAE (price varies a lot — shown as "from") ----
    'parent-visit' => [
        'group' => 'residence', 'name' => "Parents' visit visa", 'entries' => 'Single entry, sponsored by you',
        'stay' => '60 days', 'processing' => '3–4 working days', 'icon' => 'fa-user-friends',
        // Per parent. For UAE residents bringing their parents on a visit.
        'price_aed' => 550, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-family-visa-dubai', 'confirmed' => true,
    ],
    'job-seeker' => [
        'group' => 'residence', 'name' => 'Job seeker visa', 'entries' => '60, 90 or 120 days',
        'stay' => '60–120 days', 'processing' => 'Varies', 'icon' => 'fa-briefcase',
        'price_aed' => 1200, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-job-seeker-visa', 'confirmed' => true,
    ],
    'family' => [
        'group' => 'residence', 'name' => 'Family visa', 'entries' => 'Per dependent',
        'stay' => '2 years', 'processing' => 'Varies', 'icon' => 'fa-users',
        'price_aed' => 1500, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-family-visa-dubai', 'confirmed' => true,
    ],
    'green' => [
        'group' => 'residence', 'name' => 'Green visa', 'entries' => 'No employer needed',
        'stay' => '5 years', 'processing' => 'Varies', 'icon' => 'fa-leaf',
        'price_aed' => 2500, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-green-visa', 'confirmed' => true,
    ],
    'golden' => [
        'group' => 'residence', 'name' => 'Golden visa', 'entries' => 'Renewable',
        'stay' => '10 years', 'processing' => 'Varies', 'icon' => 'fa-award',
        'price_aed' => 4000, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-golden-visa', 'confirmed' => true,
    ],
    'five-year-multi' => [
        'group' => 'residence', 'name' => '5-year multi-entry visa', 'entries' => 'Multiple entry',
        'stay' => '90 days per visit', 'processing' => 'Varies', 'icon' => 'fa-passport',
        // No fixed price: it depends on the applicant. Always "Get a quote".
        'price_aed' => null, 'express_aed' => null, 'price_prefix' => 'From',
        'url' => '/uae-visa#multi-entry', 'confirmed' => true,
    ],
];

$visaGroups = [
    'visit'     => ['label' => 'Visiting the UAE',        'icon' => 'fa-plane'],
    'inside'    => ['label' => 'Already in the UAE',      'icon' => 'fa-map-marker-alt'],
    'transit'   => ['label' => 'Layover in Dubai',        'icon' => 'fa-suitcase-rolling'],
    'residence' => ['label' => 'Live or work in the UAE', 'icon' => 'fa-home'],
];

// "From AED 350" / "AED 200" / "Get a quote"
function visa_price_label($key, $field = 'price_aed')
{
    global $visaTypes;
    $v = $visaTypes[$key] ?? null;
    if (!$v || $v[$field] === null) {
        return 'Get a quote';
    }
    $prefix = $field === 'price_aed' ? trim($v['price_prefix']) : 'From';
    return trim($prefix . ' AED ' . number_format($v[$field]));
}

function visa_price($key, $field = 'price_aed')
{
    global $visaTypes;
    return $visaTypes[$key][$field] ?? null;
}

function visa_whatsapp_link($key)
{
    global $visaTypes;
    $name = $visaTypes[$key]['name'] ?? 'UAE visa';
    return 'https://wa.me/971585945007?text=' . rawurlencode("Hi Arihant Travels, I want to apply for a {$name}.");
}

// schema.org Offer objects for every visa with a known price.
function visa_schema_offers()
{
    global $visaTypes;
    $offers = [];
    foreach ($visaTypes as $v) {
        if ($v['price_aed'] === null) {
            continue;
        }
        $offers[] = [
            '@type' => 'Offer',
            'name' => 'UAE ' . $v['name'],
            'price' => (string) $v['price_aed'],
            'priceCurrency' => 'AED',
            'availability' => 'https://schema.org/InStock',
            'url' => 'https://arihantlink.com' . strtok($v['url'], '#'),
        ];
    }
    return $offers;
}

// Answer for the "How much does a UAE tourist visa cost?" FAQ, built only from
// prices that are set. $bold wraps prices in <strong> for the visible FAQ.
function visa_cost_answer($bold = false)
{
    $w = function ($t) use ($bold) { return $bold ? "<strong>$t</strong>" : $t; };
    $parts = [];
    foreach (['tourist-30-single' => 'A 30-day single-entry tourist visa',
              'tourist-60-multi'  => 'A 60-day multiple-entry visa',
              'transit-96'        => 'A 96-hour transit visa'] as $key => $label) {
        $p = visa_price($key);
        if ($p !== null) {
            $parts[] = $label . ' starts at ' . $w('AED ' . number_format($p)) . '.';
        }
    }
    $parts[] = 'Final price depends on nationality and processing speed.';
    return implode(' ', $parts);
}

// "From ₹7,900 (AED 350)" when a rupee price is set, otherwise "From AED 850".
// $short = true gives just "₹7,900" / "AED 850" for compact tables.
function visa_price_inr_label($key, $short = false)
{
    global $visaTypes;
    $v = $visaTypes[$key] ?? null;
    if (!$v || $v['price_aed'] === null) {
        return 'Get a quote';
    }
    $inr = $v['price_inr'] ?? null;
    if ($short) {
        return $inr ? '₹' . number_format($inr) : 'AED ' . number_format($v['price_aed']);
    }
    if (!$inr) {
        return visa_price_label($key);
    }
    return trim($v['price_prefix'] . ' ₹' . number_format($inr) . ' (AED ' . number_format($v['price_aed']) . ')');
}
