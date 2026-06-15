<?php
/**
 * Auto-generate FAQPage JSON-LD schema from $faqs array
 *
 * Usage: Include this file AFTER defining the $faqs array.
 * It will append FAQPage schema to $schemaMarkup variable.
 *
 * Expected format:
 * $faqs = [
 *     ['q' => 'Question text?', 'a' => 'Answer text.'],
 *     ...
 * ];
 */

if (isset($faqs) && is_array($faqs) && count($faqs) > 0) {
    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => []
    ];

    foreach ($faqs as $faq) {
        if (isset($faq['q']) && isset($faq['a'])) {
            $faqSchema['mainEntity'][] = [
                '@type' => 'Question',
                'name' => strip_tags($faq['q']),
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => strip_tags($faq['a'])
                ]
            ];
        }
    }

    if (count($faqSchema['mainEntity']) > 0) {
        $faqSchemaJson = json_encode($faqSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        if (!isset($schemaMarkup)) {
            $schemaMarkup = '';
        }
        $schemaMarkup .= "\n" . '<script type="application/ld+json">' . "\n" . $faqSchemaJson . "\n" . '</script>';
    }
}
?>
