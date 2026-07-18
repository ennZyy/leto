<?php
/**
 * One-time setup script for Leto WordPress site.
 *
 * Installs WordPress, activates the Leto Starter theme, creates
 * the navigation pages, and assigns the primary menu.
 *
 * Run from the project root:  php setup.php
 * Delete this file after running.
 */

if ( php_sapi_name() !== 'cli' ) {
	die( 'This script must be run from the command line.' );
}

define( 'WP_INSTALLING', true );
require_once __DIR__ . '/wp-config.php';
require_once ABSPATH . 'wp-admin/includes/upgrade.php';

$admin_password = 'Leto2026!';

wp_install(
	'Лето',
	'admin',
	'admin@leto.example',
	true,
	'',
	$admin_password,
	'ru'
);

require_once ABSPATH . 'wp-settings.php';

switch_theme( 'leto-starter' );

$pages_data = array(
	'О посёлке'   => array(
		'slug'    => 'o-poselke',
		'content' => 'Коттеджный посёлок «Лето» — это уникальный проект загородной жизни в Нижегородской области. Собственное озеро, развитая инфраструктура и готовые участки для вашего дома.',
	),
	'Очереди'     => array(
		'slug'    => 'ocheredi',
		'content' => 'Информация об очередях застройки посёлка «Лето». Актуальные этапы строительства и сроки сдачи.',
	),
	'Застройщик'  => array(
		'slug'    => 'zastroyshchik',
		'content' => 'Центр Малоэтажного Домостроения (ЦМД) — надёжный застройщик с многолетним опытом строительства загородной недвижимости.',
	),
	'Экоферма'    => array(
		'slug'    => 'ekoferma',
		'content' => 'Экоферма на территории посёлка «Лето» — свежие продукты прямо от производителя.',
	),
	'Условия'     => array(
		'slug'    => 'usloviya',
		'content' => 'Условия покупки участков и домов в коттеджном посёлке «Лето». Ипотека, рассрочка, материнский капитал.',
	),
	'Контакты'    => array(
		'slug'    => 'kontakty',
		'content' => 'Контактная информация коттеджного посёлка «Лето».',
	),
);

$page_ids = array();
foreach ( $pages_data as $title => $data ) {
	$page_id = wp_insert_post(
		array(
			'post_title'   => $title,
			'post_content' => $data['content'],
			'post_status'  => 'publish',
			'post_type'    => 'page',
			'post_name'    => $data['slug'],
		)
	);
	if ( $page_id && ! is_wp_error( $page_id ) ) {
		$page_ids[ $title ] = $page_id;
	}
}

update_option( 'show_on_front', 'page' );
update_option( 'page_on_front', $page_ids['О посёлке'] );

wp_delete_post( 2, true ); // Remove default "Sample Page".

$menu_id = wp_create_nav_menu( 'Главное меню' );

$order = 0;
foreach ( array_keys( $pages_data ) as $title ) {
	if ( ! isset( $page_ids[ $title ] ) ) {
		continue;
	}
	wp_update_nav_menu_item(
		$menu_id,
		0,
		array(
			'menu-item-title'     => $title,
			'menu-item-object-id' => $page_ids[ $title ],
			'menu-item-object'    => 'page',
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			'menu-item-position'  => $order++,
		)
	);
}

$locations            = get_theme_mod( 'nav_menu_locations', array() );
$locations['primary'] = $menu_id;
set_theme_mod( 'nav_menu_locations', $locations );

global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );
flush_rewrite_rules();

echo "WordPress installed and configured successfully.\n";
echo "Admin URL : http://leto/wp-admin/\n";
echo "Username  : admin\n";
echo "Password  : {$admin_password}\n";
echo "Pages     : " . count( $page_ids ) . "\n";
echo "Menu      : assigned to 'primary' location\n";
