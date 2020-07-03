<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );
error_reporting(0);
session_start();
try {
	$x = $_SESSION['x'];
} catch (Exception $e) {
	echo "<style>b{display:none;}</style>";
}
session_destroy();
/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
