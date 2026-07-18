<?php
/**
 * Template part: Products section for "Экоферма" page.
 *
 * @package Leto_Starter
 */

$leto_ef_products = array(
	array(
		'icon'  => 'egg',
		'name'  => 'Яйца куриные (10 шт)',
		'price' => '180 ₽',
	),
	array(
		'icon'  => 'bread',
		'name'  => 'Хлеб на закваске',
		'price' => '120 ₽',
	),
	array(
		'icon'  => 'milk',
		'name'  => 'Молоко фермерское (1 л)',
		'price' => '150 ₽',
	),
	array(
		'icon'  => 'honey',
		'name'  => 'Мёд (250 г)',
		'price' => '350 ₽',
	),
	array(
		'icon'  => 'vegs',
		'name'  => 'Овощи сезонные (набор)',
		'price' => '250 ₽',
	),
	array(
		'icon'  => 'pie',
		'name'  => 'Пироги домашние',
		'price' => 'от 200 ₽',
	),
);
?>
<section class="leto-ef-products" aria-label="Продукция и цены">
	<div class="leto-container">

		<div class="leto-ef-products__header">
			<h2 class="leto-ef-products__title">Продукция и цены</h2>
			<p class="leto-ef-products__subtitle">Вся продукция — свежая, натуральная, с доставкой до участка</p>
		</div>

		<div class="leto-ef-products__list">
			<?php foreach ( $leto_ef_products as $product ) : ?>
				<div class="leto-ef-products-item">
					<span class="leto-ef-products-item__icon" aria-hidden="true">
						<?php if ( 'egg' === $product['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<ellipse cx="12" cy="14" rx="7" ry="8"/>
								<path d="M12 6V2"/>
							</svg>
						<?php elseif ( 'bread' === $product['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2"/>
								<path d="M12 6c-2.2 0-4 1.8-4 4v2c0 2.2 1.8 4 4 4s4-1.8 4-4v-2c0-2.2-1.8-4-4-4z"/>
							</svg>
						<?php elseif ( 'milk' === $product['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M8 2h8l2 6H6l2-6z"/>
								<path d="M6 8v10a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V8"/>
								<path d="M10 2v2h4V2"/>
							</svg>
						<?php elseif ( 'honey' === $product['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M7 20h10"/>
								<path d="M10 20c5.5-2.5.8-6.4 3-10"/>
								<path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/>
								<path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/>
							</svg>
						<?php elseif ( 'vegs' === $product['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M7 20h10"/>
								<path d="M10 20c5.5-2.5.8-6.4 3-10"/>
								<path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/>
								<path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/>
							</svg>
						<?php elseif ( 'pie' === $product['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2"/>
								<path d="M12 6c-2.2 0-4 1.8-4 4v2c0 2.2 1.8 4 4 4s4-1.8 4-4v-2c0-2.2-1.8-4-4-4z"/>
							</svg>
						<?php endif; ?>
					</span>
					<span class="leto-ef-products-item__name"><?php echo esc_html( $product['name'] ); ?></span>
					<span class="leto-ef-products-item__price"><?php echo esc_html( $product['price'] ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
