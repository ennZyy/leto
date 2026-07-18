<?php
/**
 * Template part: Features section for "Застройщикам" page.
 *
 * 6 feature cards in a 3-column grid with icons.
 *
 * @package Leto_Starter
 */

$leto_dp_features = array(
	array(
		'icon'  => 'award',
		'title' => '15 лет на рынке',
		'desc'  => 'ЦМД - один из старейших застройщиков малоэтажного жилья в регионе',
	),
	array(
		'icon'  => 'shield',
		'title' => 'Гарантия 5 лет',
		'desc'  => 'На все конструкции домов - официальная гарантия 5 лет',
	),
	array(
		'icon'  => 'building',
		'title' => 'Более 500 домов',
		'desc'  => 'Построено и сдан более 500 домов в Нижегородской области',
	),
	array(
		'icon'  => 'team',
		'title' => 'Команда профессионалов',
		'desc'  => 'Штатные архитектуры, инженеры и строители с опытом от 10 лет',
	),
	array(
		'icon'  => 'clock',
		'title' => 'Сроки без задержек',
		'desc'  => 'Средний срок строительства дома - 6 месяцев',
	),
	array(
		'icon'  => 'home',
		'title' => 'Под ключ',
		'desc'  => 'Полный цикл: от участка до готового дома с отделкой',
	),
);
?>
<section class="leto-dp-features" aria-label="Преимущества застройщика">
	<div class="leto-container">

		<div class="leto-dp-features__grid">
			<?php foreach ( $leto_dp_features as $feature ) : ?>
				<article class="leto-dp-features-card">
					<span class="leto-dp-features-card__icon" aria-hidden="true">
						<?php if ( 'award' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="9" r="5"/><path d="m9 14-2 7 5-3 5 3-2-7"/></svg>
						<?php elseif ( 'shield' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
						<?php elseif ( 'building' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/><path d="M10 21v-3h4v3"/></svg>
						<?php elseif ( 'team' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
						<?php elseif ( 'clock' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
						<?php elseif ( 'home' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
						<?php endif; ?>
					</span>
					<h3 class="leto-dp-features-card__title"><?php echo esc_html( $feature['title'] ); ?></h3>
					<p class="leto-dp-features-card__desc"><?php echo esc_html( $feature['desc'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
