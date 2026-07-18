<?php
/**
 * Template Name: Контакты
 * Description: Шаблон страницы «Контакты» с формой записи на экскурсию.
 *
 * @package Leto_Starter
 */

add_filter( 'body_class', function ( $classes ) {
	$classes[] = 'leto-page-kontakty';
	return $classes;
} );

get_header();
?>

<?php get_template_part( 'template-parts/kontakty-contacts' ); ?>

<?php
get_footer();
