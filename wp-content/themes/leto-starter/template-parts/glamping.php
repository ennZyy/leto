<?php
/**
 * Glamping section template part.
 *
 * Two-column layout: an image on the left with a "test-drive" badge
 * overlapping the bottom-right corner, and a content block on the right
 * with an eyebrow label, title, description, bullet list and a CTA button.
 *
 * @package Leto_Starter
 */

$leto_glamping_features = array(
	'Уютные домики со всеми удобствами',
	'Завтрак включен в стоимость',
	'Доступ к озеру и пляжу',
	'Экскурсия по поселку бесплатно',
);
?>
<section class="leto-glamping" aria-label="Глэмпинг">
	<div class="leto-container leto-glamping__inner">

		<div class="leto-glamping__media">
			<div class="leto-glamping__image">
				<span class="leto-glamping__badge">Тест-драйв жизни в поселке</span>
			</div>
		</div>

		<div class="leto-glamping__content">

			<span class="leto-glamping__eyebrow">
				<svg class="leto-glamping__eyebrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
					<path d="M12 3 2 21h20L12 3z"/>
					<path d="M12 10v4"/>
					<path d="M12 17h.01"/>
				</svg>
				ГЛЭМПИНГ
			</span>

			<h2 class="leto-glamping__title">Попробуйте жизнь в «ЛЕТО» до покупки</h2>

			<p class="leto-glamping__desc">Хотите понять, каково это - жить в коттеджном поселке? Забронируйте домик в нашем глэмпинге «Атмосфера Виллидж» на территории поселка. Оцените природу, тишину и инфраструктуру лично.</p>

			<ul class="leto-glamping__list">
				<?php foreach ( $leto_glamping_features as $feature ) : ?>
					<li class="leto-glamping__list-item"><?php echo esc_html( $feature ); ?></li>
				<?php endforeach; ?>
			</ul>

			<a class="leto-glamping__btn" href="<?php echo esc_url( home_url( '/glamping/' ) ); ?>" target="_blank" rel="noopener noreferrer">
				<span>Забронировать домик</span>
				<svg class="leto-glamping__btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
					<path d="M7 17 17 7"/>
					<path d="M7 7h10v10"/>
				</svg>
			</a>

		</div>

	</div>
</section>
