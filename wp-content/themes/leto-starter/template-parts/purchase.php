<?php
/**
 * Purchase terms section template part.
 *
 * Three cards describing the available purchase options:
 * installment, mortgage, and legal support. Followed by a CTA button.
 *
 * @package Leto_Starter
 */

$leto_purchase_options = array(
	array(
		'icon'  => 'percent',
		'title' => 'Рассрочка от застройщика',
		'desc'  => 'Беспроцентная рассрочка на 12 месяцев. Первый взнос - от 30%. Без банков и переплат.',
		'items' => array(
			'Срок до 12 месяцев',
			'Без процентов',
			'Первый взнос 30%',
			'Оформление за 1 день',
		),
	),
	array(
		'icon'  => 'building',
		'title' => 'Ипотека',
		'desc'  => 'Сотрудничаем с ведущими банками. Ставка от 8% годовых. Помогаем с одобрением.',
		'items' => array(
			'Ставка от 8%',
			'Срок до 30 лет',
			'Первый взнос от 15%',
			'Маткапитал принимается',
		),
	),
	array(
		'icon'  => 'scale',
		'title' => 'Юридическое сопровождение',
		'desc'  => 'Полное юридическое сопровождение сделки. Проверка документов, регистрация права собственности.',
		'items' => array(
			'Проверка документов',
			'Регистрация в Росреестре',
			'Страхование сделки',
			'Бесплатная консультация',
		),
	),
);
?>
<section class="leto-purchase" aria-label="Условия покупки">
	<div class="leto-container">

		<header class="leto-purchase__header">
			<h2 class="leto-purchase__title">Условия покупки</h2>
			<p class="leto-purchase__subtitle">Мы сделали покупку участка максимально простой и прозрачной</p>
		</header>

		<div class="leto-purchase__grid">
			<?php foreach ( $leto_purchase_options as $option ) : ?>
				<article class="leto-purchase-card">
					<span class="leto-purchase-card__icon" aria-hidden="true">
						<?php if ( 'percent' === $option['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<line x1="19" y1="5" x2="5" y2="19"/>
								<circle cx="6.5" cy="6.5" r="2.5"/>
								<circle cx="17.5" cy="17.5" r="2.5"/>
							</svg>
						<?php elseif ( 'building' === $option['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<rect x="4" y="3" width="16" height="18" rx="1"/>
								<path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/>
								<path d="M10 21v-3h4v3"/>
							</svg>
						<?php elseif ( 'scale' === $option['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 3v18"/>
								<path d="M5 7H3l2 5h8l2-5h-2"/>
								<path d="M5 21h14"/>
								<path d="M3 12a3 3 0 0 0 6 0M15 12a3 3 0 0 0 6 0"/>
							</svg>
						<?php endif; ?>
					</span>
					<h3 class="leto-purchase-card__title"><?php echo esc_html( $option['title'] ); ?></h3>
					<p class="leto-purchase-card__desc"><?php echo esc_html( $option['desc'] ); ?></p>
					<ul class="leto-purchase-card__list">
						<?php foreach ( $option['items'] as $item ) : ?>
							<li class="leto-purchase-card__item">
								<svg class="leto-purchase-card__check" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
									<polyline points="20 6 9 17 4 12"/>
								</svg>
								<span><?php echo esc_html( $item ); ?></span>
							</li>
						<?php endforeach; ?>
					</ul>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="leto-purchase__actions">
			<a class="leto-purchase__btn" href="<?php echo esc_url( home_url( '/usloviya/' ) ); ?>">Подробнее об условиях</a>
		</div>

	</div>
</section>
