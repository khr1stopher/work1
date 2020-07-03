<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
// $_SERVER['REQUEST_URI'] != "/wordpress/"
get_header();
?>
<main id="site-content" role="main">

	<?php
	switch ($_SERVER['REQUEST_URI']) {
		case '/wordpress/':
			require 'components/page.php';
			break;
		case '/wordpress/mail.php/':
			require 'components/mail.php';
			break;
		default:
			while (have_posts()) {
				the_post();
				get_template_part( 'template-parts/content', get_post_type());
			}
			break;
	}
	?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
