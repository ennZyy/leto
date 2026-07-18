<?php
/**
 * The template for displaying the footer.
 *
 * @package Leto_Starter
 */

// Brand-specific footer data. Move into the Customizer when real values are known.
$leto_phone_tel   = '+79999999999';
$leto_email       = 'example@test.ru';
$leto_address     = 'Нижегородская область, Богородский район, д. Тестьяны';
$leto_brand_short = 'Лето';
$leto_brand       = 'КП «ЛЕТО»';
$leto_maps_url    = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( $leto_address );
?>
<footer class="leto-site-footer" role="contentinfo">
	<div class="leto-container">

		<div class="leto-footer-grid">

			<div class="leto-footer-brand">
				<a class="leto-footer-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( $leto_brand_short ); ?></a>

				<p class="leto-footer-description">Коттеджный посёлок в Нижегородской области. Собственное озеро, развитая инфраструктура и готовые участки для вашего дома.</p>

				<ul class="leto-footer-contacts">
					<li class="leto-footer-contact">
						<a class="leto-footer-contact__link" href="tel:<?php echo esc_attr( $leto_phone_tel ); ?>" aria-label="<?php esc_attr_e( 'Позвонить', 'leto-starter' ); ?>">
							<svg class="leto-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
							</svg>
						</a>
					</li>
					<li class="leto-footer-contact">
						<a class="leto-footer-contact__link" href="mailto:<?php echo esc_attr( $leto_email ); ?>" aria-label="<?php esc_attr_e( 'Написать письмо', 'leto-starter' ); ?>">
							<svg class="leto-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="4" width="20" height="16" rx="2"/>
								<path d="m22 7-10 6L2 7"/>
							</svg>
						</a>
					</li>
					<li class="leto-footer-contact leto-footer-contact--address">
						<svg class="leto-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
							<path d="M20 10c0 7-8 13-8 13s-8-6-8-13a8 8 0 0 1 16 0z"/>
							<circle cx="12" cy="10" r="3"/>
						</svg>
						<a class="leto-footer-contact__text" href="<?php echo esc_url( $leto_maps_url ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $leto_address ); ?></a>
					</li>
				</ul>
			</div>

			<nav class="leto-footer-nav" aria-label="<?php esc_attr_e( 'О посёлке', 'leto-starter' ); ?>">
				<h3 class="leto-footer-nav__title"><?php esc_html_e( 'Посёлок', 'leto-starter' ); ?></h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-1',
						'container'      => false,
						'depth'          => 1,
						'fallback_cb'    => 'leto_starter_footer_menu_fallback',
					)
				);
				?>
			</nav>

			<nav class="leto-footer-nav" aria-label="<?php esc_attr_e( 'О застройщике', 'leto-starter' ); ?>">
				<h3 class="leto-footer-nav__title"><?php esc_html_e( 'Застройщик', 'leto-starter' ); ?></h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-2',
						'container'      => false,
						'depth'          => 1,
						'fallback_cb'    => 'leto_starter_footer_menu_fallback',
					)
				);
				?>
			</nav>

			<nav class="leto-footer-nav" aria-label="<?php esc_attr_e( 'Дополнительно', 'leto-starter' ); ?>">
				<h3 class="leto-footer-nav__title"><?php esc_html_e( 'Ещё', 'leto-starter' ); ?></h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer-3',
						'container'      => false,
						'depth'          => 1,
						'fallback_cb'    => 'leto_starter_footer_menu_fallback',
					)
				);
				?>
			</nav>

		</div><!-- .leto-footer-grid -->

		<div class="leto-footer-bottom">
			<p class="leto-footer-copy">
				<?php
				printf(
					/* translators: 1: current year, 2: brand name. */
					esc_html__( '© %1$s %2$s. Все права защищены.', 'leto-starter' ),
					esc_html( gmdate( 'Y' ) ),
					esc_html( $leto_brand )
				);
				?>
			</p>
			<p class="leto-footer-developer"><?php esc_html_e( 'Центр Малоэтажного Домостроения (ЦМД)', 'leto-starter' ); ?></p>
		</div>

	</div><!-- .leto-container -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
