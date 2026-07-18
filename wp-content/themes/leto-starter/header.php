<?php
/**
 * The header for our theme.
 *
 * @package Leto_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="leto-screen-reader-text" href="<?php echo ( is_front_page() || is_page_template() ) ? esc_url( '#leto-hero' ) : esc_url( '#leto-primary' ); ?>"><?php esc_html_e( 'Skip to content', 'leto-starter' ); ?></a>

<header class="leto-site-header" role="banner">
	<div class="leto-container leto-header-inner">

		<div class="leto-header-brand">
			<a class="leto-header-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img class="leto-header-logo__icon" src="<?php echo esc_url( LETO_STARTER_URI . 'assets/images/logo.svg' ); ?>" alt="" width="52" height="52" loading="eager">
				<span class="leto-header-logo__text">Лето</span>
			</a>
			<span class="leto-header-divider" aria-hidden="true"></span>
			<span class="leto-header-tagline">Коттеджный посёлок</span>
		</div>

		<button class="leto-menu-toggle" type="button" aria-controls="leto-primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Открыть меню', 'leto-starter' ); ?>">
			<span class="leto-menu-toggle__icon" aria-hidden="true"></span>
		</button>

		<nav class="leto-primary-nav" id="leto-primary-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'leto-starter' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_id'        => 'primary-menu',
					'fallback_cb'    => '__return_false',
				)
			);
			?>
		</nav>

		<a class="leto-header-phone" href="tel:+79999999999" aria-label="<?php esc_attr_e( 'Позвонить', 'leto-starter' ); ?>">
			<svg class="leto-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
				<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
			</svg>
		</a>
		<a class="leto-header-phone-number" href="tel:+79999999999">+7 (999) 999-99-99</a>

		<button class="leto-header-cta" type="button" data-leto-modal-open="leto-tour-modal">На экскурсию</button>

	</div>
</header>

<div class="leto-modal" id="leto-tour-modal" role="dialog" aria-modal="true" aria-labelledby="leto-tour-modal-title" hidden>
	<div class="leto-modal__overlay" data-leto-modal-close></div>
	<div class="leto-modal__dialog" role="document">
		<button class="leto-modal__close" type="button" aria-label="<?php esc_attr_e( 'Закрыть', 'leto-starter' ); ?>" data-leto-modal-close>
			<svg class="leto-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
				<path d="M18 6 6 18"/><path d="m6 6 12 12"/>
			</svg>
		</button>
		<h2 class="leto-modal__title" id="leto-tour-modal-title"><?php esc_html_e( 'Записаться на экскурсию', 'leto-starter' ); ?></h2>
		<p class="leto-modal__subtitle"><?php esc_html_e( 'Оставьте контакты — мы свяжемся с вами и согласуем удобное время.', 'leto-starter' ); ?></p>
		<?php echo do_shortcode( '[contact-form-7 id="' . absint( leto_starter_cf7_tour_form_id() ) . '" title="' . esc_attr__( 'Запись на экскурсию', 'leto-starter' ) . '"]' ); ?>
	</div>
</div>
<?php
// Note: <main> and the .leto-container wrapper are opened by each template
// (front-page.php, page.php, single.php, etc.) so the hero section can sit
// outside <main> on the front page while regular templates keep the
// container that header.php used to provide.
