<?php
/**
 * Ecofarm section template part.
 *
 * Two-column layout with content (eyebrow, title, description,
 * feature list and a subscription form) on the left and a product
 * image on the right.
 *
 * @package Leto_Starter
 */

$leto_ecofarm_features = array(
	'Натуральное молоко и меры',
	'Куриные яйца свободного выкупа',
	'Сезонные овощи без химии',
	'Мед с собственной пасеки',
);
?>
<section class="leto-ecofarm" aria-label="Экоферма Ольгино ЛЕТО">
	<div class="leto-container leto-ecofarm__inner">

		<div class="leto-ecofarm__content">

			<span class="leto-ecofarm__eyebrow">
				<svg class="leto-ecofarm__eyebrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
					<path d="M7 20h10"/>
					<path d="M10 20c5.5-2.5.8-6.4 3-10"/>
					<path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/>
					<path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/>
				</svg>
				ЭКОФЕРМА «ОЛЬГИНО ЛЕТО»
			</span>

			<h2 class="leto-ecofarm__title">Свежие фермерские продукты прямо к вашему столу</h2>

			<p class="leto-ecofarm__desc">Наша экоферма - это история любви к земле. Ольга, основательница фермы,создала хозяйство, где все натальное: молочная продукция, яйца, овощи, мед и травяные сборы.</p>

			<ul class="leto-ecofarm__features">
				<?php foreach ( $leto_ecofarm_features as $feature ) : ?>
					<li class="leto-ecofarm__feature">
						<svg class="leto-ecofarm__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
							<polyline points="20 6 9 17 4 12"/>
						</svg>
						<span><?php echo esc_html( $feature ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>

			<div class="leto-ecofarm__form-wrapper">
				<?php
				$cf7_id = get_option( 'leto_ef_subscribe_form_id' );
				if ( $cf7_id && function_exists( 'wpcf7' ) ) :
					echo do_shortcode( '[contact-form-7 id="' . intval( $cf7_id ) . '"]' );
				else :
				?>
				<form class="leto-ecofarm__form" action="#" method="post" novalidate>
					<h3 class="leto-ecofarm__form-title">
						<svg class="leto-ecofarm__form-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
							<path d="M3 7h18l-1.5 13.5a1 1 0 0 1-1 .9H5.5a1 1 0 0 1-1-.9L3 7z"/>
							<path d="M2 4h20l-1 3H3L2 4z"/>
							<path d="M9 11v3M15 11v3"/>
						</svg>
						Подписка на «Фермерский ящик»
					</h3>

					<div class="leto-ecofarm__field">
						<input class="leto-ecofarm__input" type="text" name="name" placeholder="Ваше имя" autocomplete="name" required>
					</div>

					<div class="leto-ecofarm__field">
						<input class="leto-ecofarm__input" type="tel" name="phone" placeholder="+7 (___) ___-__-__" inputmode="tel" autocomplete="tel" required>
					</div>

					<fieldset class="leto-ecofarm__fieldset">
						<legend class="leto-ecofarm__legend">Периодичность</legend>
						<div class="leto-ecofarm__radios">
							<label class="leto-ecofarm__radio">
								<input type="radio" name="period" value="week" checked>
								<span class="leto-ecofarm__radio-mark" aria-hidden="true"></span>
								<span class="leto-ecofarm__radio-label">Раз в неделю</span>
							</label>
							<label class="leto-ecofarm__radio">
								<input type="radio" name="period" value="biweek">
								<span class="leto-ecofarm__radio-mark" aria-hidden="true"></span>
								<span class="leto-ecofarm__radio-label">Раз в 2 недели</span>
							</label>
						</div>
					</fieldset>

					<button class="leto-ecofarm__submit" type="submit">Подписаться</button>
				</form>
				<?php endif; ?>
			</div>

		</div>

		<div class="leto-ecofarm__media">
			<div class="leto-ecofarm__image" role="img" aria-label="Фермерские продукты"></div>
		</div>

	</div>
</section>
