<?php
/**
 * Hero section template part.
 *
 * Renders the first screen (hero) used on the front page and other pages.
 * The content is hardcoded for now — replace with Customizer fields, custom
 * fields, or block markup when the project is ready.
 *
 * @package Leto_Starter
 */
?>
<section id="leto-hero" class="leto-hero" aria-label="Главный экран">
	<div class="leto-container leto-hero__inner">

		<div class="leto-hero__video">
			<div class="leto-hero__video-placeholder" role="img" aria-label="Место для видео">
				<span class="leto-hero__video-label">Место для видео</span>
			</div>
		</div>

		<div class="leto-hero__text">
			<h1 class="leto-hero__title">Коттеджный посёлок «ЛЕТО»</h1>
			<p class="leto-hero__subtitle">Собственное озеро, природа Нижегородской области и готовые участки для вашего дома - в 30 минутах от Нижнего Новгорода</p>
			<div class="leto-hero__actions">
				<a class="leto-hero__btn leto-hero__btn--primary" href="<?php echo esc_url( home_url( '/usloviya/' ) ); ?>">Выбрать участок</a>
				<a class="leto-hero__btn leto-hero__btn--outline" href="<?php echo esc_url( home_url( '/kontakty/' ) ); ?>">
					<svg class="leto-hero__btn-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="currentColor">
						<path d="M8 5v14l11-7z"/>
					</svg>
					Записаться на экскурсию
				</a>
			</div>
		</div>

	</div>
</section>
