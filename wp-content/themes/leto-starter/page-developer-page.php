<?php
/**
 * Template Name: Застройщикам
 * Description: Шаблон страницы «Застройщикам» с hero-секцией и блоками о компании.
 *
 * @package Leto_Starter
 */

add_filter( 'body_class', function ( $classes ) {
	$classes[] = 'leto-page-developer';
	return $classes;
} );

get_header();
?>

<?php get_template_part( 'template-parts/developer-page-hero' ); ?>

<?php get_template_part( 'template-parts/developer-page-about' ); ?>

<?php get_template_part( 'template-parts/developer-page-features' ); ?>

<?php get_template_part( 'template-parts/developer-page-guarantees' ); ?>

<?php get_template_part( 'template-parts/developer-page-reviews' ); ?>

<?php
get_footer();
