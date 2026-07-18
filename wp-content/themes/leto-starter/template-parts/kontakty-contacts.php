<?php
/**
 * Template part: Contacts section for "Контакты" page.
 *
 * Two-column layout: contact info + map + how to get there (left),
 * excursion booking form (right).
 *
 * @package Leto_Starter
 */

$leto_phone_tel   = '+70000000000';
$leto_email       = 'info@leto.example';
$leto_address     = 'Нижегородская область, Богородский район, д. Тестьяны';
$leto_maps_url    = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( $leto_address );
?>
<section id="leto-hero" class="leto-kontakty" aria-label="Контакты">
	<div class="leto-container leto-kontakty__inner">

		<div class="leto-kontakty__left">

			<h1 class="leto-kontakty__title">Как с нами связаться</h1>

			<div class="leto-kontakty__info">
				<div class="leto-kontakty__info-item">
					<span class="leto-kontakty__info-icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
						</svg>
					</span>
					<div class="leto-kontakty__info-content">
						<span class="leto-kontakty__info-label">Телефон</span>
						<a class="leto-kontakty__info-value" href="tel:<?php echo esc_attr( $leto_phone_tel ); ?>"><?php echo esc_html( $leto_phone_tel ); ?></a>
					</div>
				</div>

				<div class="leto-kontakty__info-item">
					<span class="leto-kontakty__info-icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<rect x="2" y="4" width="20" height="16" rx="2"/>
							<path d="m22 7-10 6L2 7"/>
						</svg>
					</span>
					<div class="leto-kontakty__info-content">
						<span class="leto-kontakty__info-label">Email</span>
						<a class="leto-kontakty__info-value" href="mailto:<?php echo esc_attr( $leto_email ); ?>"><?php echo esc_html( $leto_email ); ?></a>
					</div>
				</div>

				<div class="leto-kontakty__info-item">
					<span class="leto-kontakty__info-icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<path d="M20 10c0 7-8 13-8 13s-8-6-8-13a8 8 0 0 1 16 0z"/>
							<circle cx="12" cy="10" r="3"/>
						</svg>
					</span>
					<div class="leto-kontakty__info-content">
						<span class="leto-kontakty__info-label">Адрес</span>
						<span class="leto-kontakty__info-value"><?php echo esc_html( $leto_address ); ?></span>
					</div>
				</div>
			</div>

			<div class="leto-kontakty__map">
				<div class="leto-kontakty__map-placeholder">
					<span class="leto-kontakty__map-icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<path d="M20 10c0 7-8 13-8 13s-8-6-8-13a8 8 0 0 1 16 0z"/>
							<circle cx="12" cy="10" r="3"/>
						</svg>
					</span>
					<span class="leto-kontakty__map-label">Карта проезда</span>
					<span class="leto-kontakty__map-address">Нижегородская обл., Богородский р-н</span>
				</div>
			</div>

			<div class="leto-kontakty__directions">
				<h2 class="leto-kontakty__directions-title">Как добраться</h2>
				<ul class="leto-kontakty__directions-list">
					<li><strong>На машине:</strong> 40 минут от Нижнего Новгорода по трассе на Богородск</li>
					<li><strong>На автобусе:</strong> Рейсовый автобус из д. Швариха (1,8 км) до Богородска — 5 раз в день</li>
					<li><strong>Трансфер:</strong> Можем организовать встречу от Богородска или Нижнего Новгорода</li>
				</ul>
			</div>

		</div>

		<div class="leto-kontakty__right">
			<h2 class="leto-kontakty__form-title">Запишитесь на экскурсию</h2>

			<div class="leto-kontakty__form-wrapper">
				<?php
				$cf7_id = get_option( 'leto_kontakty_form_id' );
				if ( $cf7_id && function_exists( 'wpcf7' ) ) :
					echo do_shortcode( '[contact-form-7 id="' . intval( $cf7_id ) . '"]' );
				else :
				?>
					<form class="leto-kontakty__form" action="#" method="post">
						<div class="leto-kontakty__field">
							<label class="leto-kontakty__label" for="k-name">
								<svg class="leto-kontakty__label-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
								Ваше имя
							</label>
							<input class="leto-kontakty__input" type="text" id="k-name" name="name" placeholder="Как к вам обращается?" required>
						</div>
						<div class="leto-kontakty__field">
							<label class="leto-kontakty__label" for="k-phone">
								<svg class="leto-kontakty__label-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
								Телефон
							</label>
							<input class="leto-kontakty__input" type="tel" id="k-phone" name="phone" placeholder="+7(___)___-__-__" required>
						</div>
						<div class="leto-kontakty__field">
							<label class="leto-kontakty__label" for="k-date">
								<svg class="leto-kontakty__label-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
								Желаемая дата
							</label>
							<input class="leto-kontakty__input" type="date" id="k-date" name="date" required>
						</div>
						<button class="leto-kontakty__btn" type="submit">
							<svg class="leto-kontakty__btn-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 2L11 13"/><path d="M22 2L15 22 11 13 2 9z"/></svg>
							Записаться на экскурсию
						</button>
						<p class="leto-kontakty__consent">Нажимая кнопку, вы соглашаетесь на обработку персональных данных</p>
					</form>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>
