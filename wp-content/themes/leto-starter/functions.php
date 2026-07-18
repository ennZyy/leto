<?php
/**
 * Leto Starter theme functions and definitions.
 *
 * @package Leto_Starter
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'LETO_STARTER_VERSION' ) ) {
	define( 'LETO_STARTER_VERSION', '1.0.0' );
}

if ( ! defined( 'LETO_STARTER_DIR' ) ) {
	define( 'LETO_STARTER_DIR', trailingslashit( get_template_directory() ) );
}

if ( ! defined( 'LETO_STARTER_URI' ) ) {
	define( 'LETO_STARTER_URI', trailingslashit( get_template_directory_uri() ) );
}

if ( ! function_exists( 'leto_starter_setup' ) ) :
	/**
	 * Register theme features and translation support.
	 */
	function leto_starter_setup() {
		load_theme_textdomain( 'leto-starter', LETO_STARTER_DIR . 'languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 60,
				'width'       => 200,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'editor-styles' );
		add_theme_support(
			'post-formats',
			array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' )
		);

		register_nav_menus(
			array(
				'primary'  => esc_html__( 'Primary', 'leto-starter' ),
				'footer-1' => esc_html__( 'Footer: Посёлок', 'leto-starter' ),
				'footer-2' => esc_html__( 'Footer: Застройщик', 'leto-starter' ),
				'footer-3' => esc_html__( 'Footer: Ещё', 'leto-starter' ),
			)
		);

		add_image_size( 'leto-starter-entry', 1200, 600, true );
	}
endif;
add_action( 'after_setup_theme', 'leto_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 */
function leto_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'leto_starter_content_width', 1200 );
}
add_action( 'after_setup_theme', 'leto_starter_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function leto_starter_enqueue_assets() {
	wp_enqueue_style(
		'leto-starter-style',
		LETO_STARTER_URI . 'style.css',
		array(),
		LETO_STARTER_VERSION
	);

	wp_enqueue_style(
		'leto-starter-fonts',
		'https://fonts.googleapis.com/css2?family=Pacifico&text=' . rawurlencode( 'Лето' ) . '&display=swap',
		array(),
		null
	);

	wp_enqueue_script(
		'leto-starter-navigation',
		LETO_STARTER_URI . 'assets/js/navigation.js',
		array(),
		LETO_STARTER_VERSION,
		true
	);

	wp_enqueue_script(
		'leto-starter-modal',
		LETO_STARTER_URI . 'assets/js/modal.js',
		array(),
		LETO_STARTER_VERSION,
		true
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'leto_starter_enqueue_assets' );

/**
 * Register widget areas.
 */
function leto_starter_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'leto-starter' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Main widget area, shown alongside posts and pages.', 'leto-starter' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'leto_starter_widgets_init' );

/**
 * Adds custom classes to the array of body classes.
 */
function leto_starter_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( is_active_sidebar( 'sidebar-1' ) && ( is_archive() || is_single() ) ) {
		$classes[] = 'has-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'leto_starter_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function leto_starter_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'leto_starter_pingback_header' );

/**
 * Filter the excerpt length.
 */
function leto_starter_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'leto_starter_excerpt_length' );

/**
 * Filter the excerpt "read more" string.
 */
function leto_starter_excerpt_more( $more ) {
	return ' &hellip;';
}
add_filter( 'excerpt_more', 'leto_starter_excerpt_more' );

/**
 * Add preconnect hints for Google Fonts to improve performance.
 */
function leto_starter_resource_hints( $hints, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$hints[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'leto_starter_resource_hints', 10, 2 );

/**
 * Fallback content for the footer navigation menus.
 *
 * Mirrors the three columns from the design so the footer looks correct
 * out of the box, even before menus are assigned in Appearance → Menus.
 * Replace the labels and links with real entries when the project is set up.
 *
 * @param array $args wp_nav_menu arguments.
 */
function leto_starter_footer_menu_fallback( $args ) {
	$fallbacks = array(
		'footer-1' => array(
			'О посёлке'       => '#',
			'Очереди'         => '#',
			'Карта участков'  => '#',
			'Условия покупки' => '#',
		),
		'footer-2' => array(
			'О компании'    => '#',
			'Проекты домов' => '#',
			'Отзывы'        => '#',
			'Блог'          => '#',
		),
		'footer-3' => array(
			'Экоферма'                    => '#',
			'Глэмпинг'                    => '#',
			'Контакты'                    => '#',
			'Политика конфиденциальности' => '#',
		),
	);

	$location = isset( $args['theme_location'] ) ? $args['theme_location'] : '';
	if ( empty( $fallbacks[ $location ] ) ) {
		return;
	}

	$list_class = 'leto-footer-menu leto-footer-menu--' . sanitize_html_class( $location );
	echo '<ul class="' . esc_attr( $list_class ) . '">';
	foreach ( $fallbacks[ $location ] as $label => $url ) {
		printf(
			'<li><a href="%s">%s</a></li>',
			esc_url( $url ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/**
 * Create (once) the Contact Form 7 form used inside the tour modal.
 *
 * Runs on the wpcf7 plugin activation so the form exists with a known ID
 * that header.php can reference. The form is skipped if CF7 is not active.
 */
function leto_starter_register_tour_cf7_form() {
	if ( ! class_exists( 'WPCF7_ContactForm' ) ) {
		return;
	}

	$slug    = 'leto-tour-form';
	$form_id = (int) get_option( 'leto_starter_tour_cf7_id' );

	if ( $form_id && get_post( $form_id ) ) {
		return;
	}

	$args = array(
		'post_type'    => 'wpcf7_contact_form',
		'post_status'  => 'publish',
		'post_title'   => esc_html__( 'Запись на экскурсию', 'leto-starter' ),
		'meta_input'   => array(
			'_form'    => implode( "\n", array(
				'<label> ' . esc_html__( 'Ваше имя', 'leto-starter' ) . ' [text* your-name autocomplete:name] </label>',
				'<label> ' . esc_html__( 'Телефон', 'leto-starter' ) . ' [tel* your-phone tel autocomplete:tel] </label>',
				'<label> ' . esc_html__( 'Удобная дата', 'leto-starter' ) . ' [date your-date] </label>',
				'<label> ' . esc_html__( 'Комментарий', 'leto-starter' ) . ' [textarea your-message] </label>',
				'[submit "' . esc_html__( 'Записаться', 'leto-starter' ) . '"]',
			) ),
			'_mail'    => array(
				'subject'        => sprintf( '[%s] ' . esc_html__( 'Заявка на экскурсию', 'leto-starter' ), get_bloginfo( 'name' ) ),
				'sender'         => sprintf( '%s <%s>', get_bloginfo( 'name' ), get_option( 'admin_email' ) ),
				'body'           => implode( "\n", array(
					esc_html__( 'Имя:', 'leto-starter' ) . ' [your-name]',
					esc_html__( 'Телефон:', 'leto-starter' ) . ' [your-phone]',
					esc_html__( 'Дата:', 'leto-starter' ) . ' [your-date]',
					esc_html__( 'Комментарий:', 'leto-starter' ) . ' [your-message]',
				) ),
				'recipient'      => get_option( 'admin_email' ),
				'additional_headers' => '',
				'attachments'    => '',
				'use_html'       => 0,
				'exclude_blank'  => 0,
			),
			'_messages' => array(),
		),
	);

	$form_id = wp_insert_post( $args );

	if ( $form_id && ! is_wp_error( $form_id ) ) {
		update_option( 'leto_starter_tour_cf7_id', $form_id );
	}
}
add_action( 'activate_contact-form-7/wp-contact-form-7.php', 'leto_starter_register_tour_cf7_form' );

/**
 * Return the ID of the tour Contact Form 7 form.
 *
 * @return int
 */
function leto_starter_cf7_tour_form_id() {
	$form_id = (int) get_option( 'leto_starter_tour_cf7_id' );

	if ( ! $form_id && class_exists( 'WPCF7_ContactForm' ) ) {
		leto_starter_register_tour_cf7_form();
		$form_id = (int) get_option( 'leto_starter_tour_cf7_id' );
	}

	return $form_id;
}
