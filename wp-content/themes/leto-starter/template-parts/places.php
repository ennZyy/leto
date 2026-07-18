<?php
/**
 * Power places section template part.
 *
 * Five "power places" (landmarks, nature sites, etc.) near the
 * settlement, displayed as image cards in a 3x2 grid (last row
 * has 2 cards).
 *
 * @package Leto_Starter
 */

$leto_places = array(
	array(
		'number' => '1',
		'title'  => 'Река Ока',
		'image'  => 'assets/images/place-1.jpg',
		'icon'   => 'mountain',
	),
	array(
		'number' => '2',
		'title'  => 'Свято-Троицкий монастырь',
		'image'  => 'assets/images/place-2.jpg',
		'icon'   => 'church',
	),
	array(
		'number' => '3',
		'title'  => 'Горнолыжный курорт',
		'image'  => 'assets/images/place-3.jpg',
		'icon'   => 'snow',
	),
	array(
		'number' => '4',
		'title'  => 'Нижегородский кремль',
		'image'  => 'assets/images/place-4.jpg',
		'icon'   => 'castle',
	),
	array(
		'number' => '5',
		'title'  => 'Озеро Светлояр',
		'image'  => 'assets/images/place-5.jpg',
		'icon'   => 'leaf',
	),
);
?>
<section class="leto-places" aria-label="Места силы рядом с поселком">
	<div class="leto-container">

		<header class="leto-places__header">
			<h2 class="leto-places__title">5 мест силы рядом с поселком</h2>
			<p class="leto-places__subtitle">Нижегородская область богата уникальными местами. Все они - в доступности от вашего нового дома.</p>
		</header>

		<div class="leto-places__grid">
			<?php foreach ( $leto_places as $place ) : ?>
				<article class="leto-place-card">
					<div class="leto-place-card__image" style="background-image: url('<?php echo esc_url( LETO_STARTER_URI . $place['image'] ); ?>');">
						<span class="leto-place-card__number" aria-hidden="true"><?php echo esc_html( $place['number'] ); ?></span>
					</div>
					<div class="leto-place-card__overlay">
						<span class="leto-place-card__icon" aria-hidden="true">
							<?php if ( 'mountain' === $place['icon'] ) : ?>
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m3 20 6-11 4 7 3-5 5 9z"/></svg>
							<?php elseif ( 'church' === $place['icon'] ) : ?>
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V10l7-5 7 5v11"/><path d="M9 21v-6h6v6"/><path d="M12 5V3"/></svg>
							<?php elseif ( 'snow' === $place['icon'] ) : ?>
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20M5 5l14 14M19 5 5 19"/><path d="M12 5l-2-2 2-2 2 2zM12 19l-2 2 2 2 2-2zM5 12l-2-2 2-2 2 2zM19 12l-2-2 2-2 2 2z"/></svg>
							<?php elseif ( 'castle' === $place['icon'] ) : ?>
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21V8l4 2V8l4 2V8l2 2 2-2v2l4-2v2l4-2v13z"/><path d="M9 21v-5h6v5"/></svg>
							<?php elseif ( 'leaf' === $place['icon'] ) : ?>
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M11 20A7 7 0 0 1 4 13c0-2.5 1.5-5 4-7 4-3 9-3 13-3-1 4-1 9-3 13-2 2.5-4.5 4-7 4z"/><path d="M2 22 8 16"/></svg>
							<?php endif; ?>
						</span>
						<span class="leto-place-card__title"><?php echo esc_html( $place['title'] ); ?></span>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
