<?php
// Local dev router: mimics the .htaccess rule that serves /page as /page.php.
$root = $_SERVER['DOCUMENT_ROOT'];
$path = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
if ($path !== '/' && is_file($root . $path)) {
    return false;
}
$candidate = $path === '/' ? $root . '/index.php' : $root . rtrim($path, '/') . '.php';
if (is_file($candidate)) {
    $_SERVER['SCRIPT_NAME'] = substr($candidate, strlen($root));
    chdir(dirname($candidate));
    require $candidate;
    return true;
}
http_response_code(404);
require $root . '/404.php';
