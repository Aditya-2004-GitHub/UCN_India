<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * This fallback index.php allows seamless execution in hosting environments (like Plesk or cPanel)
 * whether the Document Root is set to the project root or directly to the /public directory.
 */

define('LARAVEL_START', microtime(true));

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? ''
);

// If the requested resource exists in public/, serve it directly
if ($uri !== '/' && file_exists(__DIR__ . '/public' . $uri)) {
    return false;
}

require_once __DIR__ . '/public/index.php';
