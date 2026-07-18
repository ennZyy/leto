<?php
/**
 * Template part: Story section for "Экоферма" page.
 *
 * @package Leto_Starter
 */

$leto_ef_directions = array(
	array(
		'icon'  => 'plant',
		'title' => 'Растениеводство',
		'desc'  => 'Овощи, фрукты, зелень - всё без химии, на органических удобрениях.',
	),
	array(
		'icon'  => 'egg',
		'title' => 'Птицеводство',
		'desc'  => 'Куры, перепёлки, индюшки свободного выгула. Мясо и яйца высшего качества.',
	),
	array(
		'icon'  => 'bread',
		'title' => 'Семейная пекарня',
		'desc'  => 'Хлеб на закваске, булочки, пироги — по домашним рецептам Ольги.',
	),
);
?>
<section class="leto-ef-story" aria-label="История основания">
	<div class="leto-container">

		<div class="leto-ef-story__header">
			<h2 class="leto-ef-story__title">История основания</h2>
			<p class="leto-ef-story__desc">Ольга - бывший маркетолог, которая решила бросить офисную жизнь ради фермерства. На 50 сотках на территории посёлка она создаёт хозяйство, где всё натуральное: от яиц свободного выгула до хлеба на закваске.</p>
		</div>

		<div class="leto-ef-story__grid">
			<?php foreach ( $leto_ef_directions as $direction ) : ?>
				<article class="leto-ef-story-card">
					<span class="leto-ef-story-card__icon" aria-hidden="true">
						<?php if ( 'plant' === $direction['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M7 20h10"/>
								<path d="M10 20c5.5-2.5.8-6.4 3-10"/>
								<path d="M9.5 9.4c1.1.8 1.8 2.2 2.3 3.7-2 .4-3.5.4-4.8-.3-1.2-.6-2.3-1.9-3-4.2 2.8-.5 4.4 0 5.5.8z"/>
								<path d="M14.1 6a7 7 0 0 0-1.1 4c1.9-.1 3.3-.6 4.3-1.4 1-1 1.6-2.3 1.7-4.6-2.7.1-4 1-4.9 2z"/>
							</svg>
						<?php elseif ( 'egg' === $direction['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<ellipse cx="12" cy="14" rx="7" ry="8"/>
								<path d="M12 6V2"/>
							</svg>
						<?php elseif ( 'bread' === $direction['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2"/>
								<path d="M12 6c-2.2 0-4 1.8-4 4v2c0 2.2 1.8 4 4 4s4-1.8 4-4v-2c0-2.2-1.8-4-4-4z"/>
							</svg>
						<?php endif; ?>
					</span>
					<h3 class="leto-ef-story-card__title"><?php echo esc_html( $direction['title'] ); ?></h3>
					<p class="leto-ef-story-card__desc"><?php echo esc_html( $direction['desc'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
