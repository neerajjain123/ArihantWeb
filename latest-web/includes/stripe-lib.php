<?php
/**
 * Minimal Stripe API client (no SDK needed — plain HTTPS calls).
 * Requires STRIPE_SECRET_KEY in .env (sk_test_... for testing, sk_live_... for production).
 */

require_once __DIR__ . '/env.php';

/**
 * @return array [ok(bool), data(array)] — data is the decoded Stripe response.
 */
function stripe_request(string $method, string $path, array $params = []): array
{
    env_load();
    $key = env('STRIPE_SECRET_KEY');
    if (!$key) {
        error_log('[stripe] STRIPE_SECRET_KEY missing in .env');
        return [false, ['error' => ['message' => 'Payment service not configured.']]];
    }

    $ch = curl_init('https://api.stripe.com/v1/' . ltrim($path, '/'));
    $opts = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPAUTH       => CURLAUTH_BASIC,
        CURLOPT_USERPWD        => $key . ':',
        CURLOPT_TIMEOUT        => 20,
    ];
    if (strtoupper($method) === 'POST') {
        $opts[CURLOPT_POST] = true;
        $opts[CURLOPT_POSTFIELDS] = http_build_query($params);
    }
    curl_setopt_array($ch, $opts);
    $body = curl_exec($ch);
    $err  = curl_error($ch);
    $code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    if ($body === false) {
        error_log('[stripe] curl error: ' . $err);
        return [false, ['error' => ['message' => 'Could not reach payment service.']]];
    }
    $data = json_decode($body, true);
    if (!is_array($data)) {
        return [false, ['error' => ['message' => 'Invalid payment service response.']]];
    }
    return [$code >= 200 && $code < 300, $data];
}
