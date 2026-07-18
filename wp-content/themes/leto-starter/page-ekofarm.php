<?php
/**
 * Template Name: Экоферма
 * Description: Шаблон страницы «Экоферма» с hero-секцией и блоками о фермерском хозяйстве.
 *
 * @package Leto_Starter
 */

get_header();
?>

<?php get_template_part( 'template-parts/ekofarm-hero' ); ?>

<?php get_template_part( 'template-parts/ekofarm-story' ); ?>

<?php get_template_part( 'template-parts/ekofarm-products' ); ?>

<?php get_template_part( 'template-parts/ekofarm-subscribe' ); ?>

<?php get_template_part( 'template-parts/ekofarm-masterclass' ); ?>

<?php
get_footer();
