<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

if ($_SERVER['REQUEST_URI'] != '/wordpress/') {
	require './components/foot.php';
}


wp_footer(); 
?>
		<script src="wp-content/themes/twentytwenty/components/js/page.js"></script>
	</body>
</html>