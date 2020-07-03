<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
		<?php if ($_SERVER['REQUEST_URI'] == '/wordpress/') {
			echo '<link rel="stylesheet" type="text/css" href="wp-content/themes/twentytwenty/components/css/bulma.min.css"><link rel="stylesheet" type="text/css" href="wp-content/themes/twentytwenty/components/css/page.css"><link rel="stylesheet" type="text/css" href="wp-content/themes/twentytwenty/components/css/querys.css">';
			echo "<style>#landing > div > div.notification.is-primary.is-light > button{margin:0.5rem 2rem!important;}</style>";
		}?>
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<?php if ($_SERVER['REQUEST_URI'] != '/wordpress/') {
			require("./components/nav.php");
		} ?>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
