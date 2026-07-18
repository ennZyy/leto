<?php
/**
 * Developer section template part.
 *
 * Two-column top block (house image with overlay badge + content with
 * title, description and CTA) and a row of three trust cards underneath.
 *
 * @package Leto_Starter
 */

$leto_developer_features = array(
	array(
		'icon'   => 'award',
		'title'  => '15 лет на рынке',
		'desc'   => 'ЦМД - один из старейших застройщиков малоэтажного жилья в регионе',
	),
	array(
		'icon'   => 'shield',
		'title'  => 'Гарантия 5 лет',
		'desc'   => 'На все конструкции домов - официальная гарантия 5 лет',
	),
	array(
		'icon'   => 'building',
		'title'  => 'Более 500 домов',
		'desc'   => 'Построено и сдан более 500 домов в Нижегородской области',
	),
);
?>
<section class="leto-developer" aria-label="Надежный застройщик">
	<div class="leto-container">

		<div class="leto-developer__top">

			<div class="leto-developer__media">
				<div class="leto-developer__image" style="background-image: url('<?php echo esc_url( LETO_STARTER_URI . 'assets/images/developer-bg.jpg' ); ?>');" role="img" aria-label="Современный загородный дом">
					<span class="leto-developer__badge">Центр Малоэтажного Домостроения</span>
				</div>
			</div>

			<div class="leto-developer__content">
				<h2 class="leto-developer__title">Надежный застройщик с историей</h2>
				<p class="leto-developer__desc">Центр Малоэтажного Домостроения (ЦМД) - это команда профессионалов, которая строит качественное и доступное жилье с 2009 года. Мы отвечаем за каждый свой проект и дорожим репутацией.</p>
				<a class="leto-developer__btn" href="<?php echo esc_url( home_url( '/about/' ) ); ?>">Подробнее о застройщике</a>
			</div>

		</div>

		<div class="leto-developer__features">
			<?php foreach ( $leto_developer_features as $feature ) : ?>
				<article class="leto-developer-feature">
					<span class="leto-developer-feature__icon" aria-hidden="true">
						<?php if ( 'award' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="9" r="5"/><path d="m9 14-2 7 5-3 5 3-2-7"/></svg>
						<?php elseif ( 'shield' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
						<?php elseif ( 'building' === $feature['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/><path d="M10 21v-3h4v3"/></svg>
						<?php endif; ?>
					</span>
					<h3 class="leto-developer-feature__title"><?php echo esc_html( $feature['title'] ); ?></h3>
					<p class="leto-developer-feature__desc"><?php echo esc_html( $feature['desc'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
