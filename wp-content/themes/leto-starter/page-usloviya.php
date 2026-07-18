<?php
/**
 * Template Name: Условия
 * Description: Шаблон страницы «Условия покупки» с hero-секцией и блоками условий.
 *
 * @package Leto_Starter
 */

add_filter( 'body_class', function ( $classes ) {
	$classes[] = 'leto-page-usloviya';
	return $classes;
} );

get_header();
?>

<?php get_template_part( 'template-parts/usloviya-hero' ); ?>

<?php get_template_part( 'template-parts/usloviya-payment' ); ?>

<?php get_template_part( 'template-parts/usloviya-prices' ); ?>

<?php get_template_part( 'template-parts/usloviya-cta' ); ?>

<?php
get_footer();
