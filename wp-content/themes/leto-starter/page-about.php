<?php
/**
 * Template Name: О посёлке
 * Description: Шаблон страницы «О посёлке» с hero-секцией.
 *
 * @package Leto_Starter
 */

get_header();
?>

<section class="leto-about-hero" aria-label="О посёлке">
	<div class="leto-container leto-about-hero__inner">
		<h1 class="leto-about-hero__title">О посёлке «ЛЕТО»</h1>
		<p class="leto-about-hero__subtitle">Коттеджный посёлок в Богородском районе Нижегородской области — место, где природа, комфорт и инвестиции встречаются в одной точке.</p>
	</div>
</section>

<?php get_template_part( 'template-parts/about-location' ); ?>

<?php get_template_part( 'template-parts/about-infra' ); ?>

<?php get_template_part( 'template-parts/about-tourism' ); ?>

<?php
get_footer();
