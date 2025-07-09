<?php

/**
 * SMS Project Constants (Cross-platform, fallback-safe, and normalized)
 * Place this file early in your application bootstrap.
 */

if (!defined('SMS_PATHS_DEFINED')) {
    define('SMS_PATHS_DEFINED', true);

    // Normalize paths to forward slashes and trim trailing slash
    function norm_path($path)
    {
        return rtrim(str_replace('\\', '/', $path), '/');
    }

    // Determine document root and app root
    $docRoot = norm_path($_SERVER['DOCUMENT_ROOT'] ?? realpath(__DIR__ . '/../..'));
    $currentDir = norm_path(realpath(__DIR__));

    $appRoot = (strpos($currentDir, '/SMS') !== false)
        ? substr($currentDir, 0, strpos($currentDir, '/SMS') + 4)
        : $docRoot . '/SMS';

    define('APP_ROOT', $appRoot);
    define('ROOT_DIR', $currentDir . '/');

    // Protocol and host
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    define('APP_HOST', $protocol . '://' . $host);

    // Root URL relative to document root
    $relativePath = str_replace($docRoot, '', $appRoot);
    define('APP_ROOT_URL', $relativePath ?: '/SMS');

    // Core Directories
    define('APP_VIEWS', APP_ROOT . '/views');
    define('APP_PUBLIC', APP_ROOT . '/public');
    define('APP_CONFIG', APP_ROOT . '/config');
    define('APP_CONTROLLERS', APP_ROOT . '/controllers');
    define('APP_MODELS', APP_ROOT . '/models');
    define('APP_SERVICES', APP_ROOT . '/services');
    define('APP_UTILS', APP_ROOT . '/utils');
    define('APP_ROUTES', APP_ROOT . '/routes');
    define('APP_DATABASE', APP_ROOT . '/database');

    // Public Assets
    define('APP_CSS', APP_PUBLIC . '/css');
    define('APP_JS', APP_PUBLIC . '/js');
    define('APP_FONTS', APP_PUBLIC . '/fonts');
    define('APP_IMAGES', APP_PUBLIC . '/images');

    // Views
    define('APP_LAYOUT', APP_VIEWS . '/layout');
    define('APP_AUTH', APP_VIEWS . '/auth');
    define('APP_SECTIONS', APP_VIEWS . '/sections');
    define('APP_PORTALS', APP_VIEWS . '/portals');

    // Portals
    define('APP_TPORTAL', APP_PORTALS . '/tportal');
    define('APP_SPORTAL', APP_PORTALS . '/sportal');
    define('APP_STPORTAL', APP_PORTALS . '/stportal');
    define('APP_PPORTAL', APP_PORTALS . '/pportal');
    define('APP_ADMIN', APP_SPORTAL . '/admin');

    // Layout files
    define('APP_HEAD_FILE', APP_LAYOUT . '/head.php');
    define('APP_HEADER_FILE', APP_LAYOUT . '/header.php');
    define('APP_FOOTER_FILE', APP_LAYOUT . '/footer.php');

    // Config and DB
    define('APP_CONN_FILE', APP_CONFIG . '/conn.php');
    define('APP_CONFIG_FILE', APP_CONFIG . '/config.php');
    define('APP_DB', APP_DATABASE . '/caschool.sql');
    define('APP_DB_MIGRATIONS', APP_DATABASE . '/migrations');

    // Section files
    define('APP_SEC_INTRO', APP_SECTIONS . '/intro.php');
    define('APP_SEC_PORT', APP_SECTIONS . '/port.php');
    define('APP_SEC_CP_FILE', APP_SECTIONS . '/port.php');
    define('APP_SEC_QUOTE', APP_SECTIONS . '/quote.php');
    define('APP_SEC_FEATURES', APP_SECTIONS . '/features.php');
    define('APP_SEC_REVIEW', APP_SECTIONS . '/review.php');
    define('APP_SEC_CONTACT', APP_SECTIONS . '/contact.php');

    // Portal Menus
    define('APP_TPORTAL_MENU', APP_TPORTAL . '/header.php');
    define('APP_SPORTAL_MENU', APP_SPORTAL . '/header.php');
    define('APP_STPORTAL_MENU', APP_STPORTAL . '/header.php');
    define('APP_PPORTAL_MENU', APP_PPORTAL . '/header.php');
    define('APP_ADMIN_MENU', APP_ADMIN . '/header.php');

    // Public URLs for frontend use
    define('APP_PUBLIC_URL', APP_ROOT_URL . '/public');
    define('APP_VIEWS_URL', APP_ROOT_URL . '/views');
    define('APP_LAYOUT_URL', APP_VIEWS_URL . '/layout');
    define('APP_LAY', APP_VIEWS_URL . '/layout');
    define('APP_AUTH_URL', APP_VIEWS_URL . '/auth');
    define('APP_SECTIONS_URL', APP_VIEWS_URL . '/sections');
    define('APP_PORTALS_URL', APP_VIEWS_URL . '/portals');

    define('APP_TPORTAL_URL', APP_PORTALS_URL . '/tportal');
    define('APP_SPORTAL_URL', APP_PORTALS_URL . '/sportal');
    define('APP_STPORTAL_URL', APP_PORTALS_URL . '/stportal');
    define('APP_PPORTAL_URL', APP_PORTALS_URL . '/pportal');
    define('APP_ADMIN_URL', APP_SPORTAL_URL . '/admin');

    define('APP_IMAGES_URL', APP_PUBLIC_URL . '/images');
    define('APP_CSS_URL', APP_PUBLIC_URL . '/css');
    define('APP_JS_URL', APP_PUBLIC_URL . '/js');
    define('APP_CUSTOM_CSS_URL', APP_CSS_URL . '/custom-style.css');

    // Layout URL references (if dynamically included)
    define('APP_HEAD_URL', APP_LAYOUT_URL . '/head.php');
    define('APP_HEADER_URL', APP_LAYOUT_URL . '/header.php');
    define('APP_FOOTER_URL', APP_LAYOUT_URL . '/footer.php');
}
