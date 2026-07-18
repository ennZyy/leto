<?php
/**
 * Front page template.
 *
 * Renders the hero section followed by the page content.
 * WordPress automatically uses this file when a static page is set
 * as the front page (Settings → Reading → Your homepage displays).
 *
 * @package Leto_Starter
 */

get_header();
?>

<?php get_template_part( 'template-parts/hero' ); ?>
<?php get_template_part( 'template-parts/queues' ); ?>
<?php get_template_part( 'template-parts/lake' ); ?>
<?php get_template_part( 'template-parts/glamping' ); ?>
<?php get_template_part( 'template-parts/ecofarm' ); ?>
<?php get_template_part( 'template-parts/places' ); ?>
<?php get_template_part( 'template-parts/developer' ); ?>
<?php get_template_part( 'template-parts/testimonials' ); ?>
<?php get_template_part( 'template-parts/purchase' ); ?>

<?php
get_footer();
