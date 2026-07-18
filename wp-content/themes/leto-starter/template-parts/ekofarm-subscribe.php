<?php
/**
 * Template part: Subscribe section for "Экоферма" page.
 *
 * @package Leto_Starter
 */
?>
<section class="leto-ef-subscribe" aria-label="Подписка на «Фермерский ящик»">
	<div class="leto-container leto-ef-subscribe__inner">

		<div class="leto-ef-subscribe__header">
			<div class="leto-ef-subscribe__eyebrow">
				<svg class="leto-ef-subscribe__eyebrow-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
					<path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/>
					<path d="M3 6h18"/>
					<path d="M16 10a4 4 0 0 1-8 0"/>
				</svg>
			</div>

			<h2 class="leto-ef-subscribe__title">Подписка на «Фермерский ящик»</h2>

			<p class="leto-ef-subscribe__desc">Каждую неделю или раз в две недели - свежие продукты прямо к вашему дому</p>
		</div>

		<div class="leto-ef-subscribe__form-wrapper">
			<?php
			$cf7_id = get_option( 'leto_ef_subscribe_form_id' );
			if ( $cf7_id && function_exists( 'wpcf7' ) ) :
				echo do_shortcode( '[contact-form-7 id="' . intval( $cf7_id ) . '"]' );
			else :
			?>
				<form class="leto-ef-subscribe__form" action="#" method="post">
					<div class="leto-ef-subscribe__field">
						<label class="leto-ef-subscribe__label" for="ef-name">Ваше имя</label>
						<input class="leto-ef-subscribe__input" type="text" id="ef-name" name="name" placeholder="Ваше имя" required>
					</div>
					<div class="leto-ef-subscribe__field">
						<label class="leto-ef-subscribe__label" for="ef-phone">Телефон</label>
						<input class="leto-ef-subscribe__input" type="tel" id="ef-phone" name="phone" placeholder="+7(___)___-__-__" required>
					</div>
					<div class="leto-ef-subscribe__field">
						<span class="leto-ef-subscribe__label">Периодичность</span>
						<div class="leto-ef-subscribe__radios">
							<label class="leto-ef-subscribe__radio">
								<input type="radio" name="periodicity" value="weekly" checked>
								<span class="leto-ef-subscribe__radio-mark"></span>
								Раз в неделю
							</label>
							<label class="leto-ef-subscribe__radio">
								<input type="radio" name="periodicity" value="biweekly">
								<span class="leto-ef-subscribe__radio-mark"></span>
								Раз в 2 недели
							</label>
						</div>
					</div>
					<button class="leto-ef-subscribe__btn" type="submit">Подписаться</button>
				</form>
			<?php endif; ?>
		</div>

	</div>
</section>
