<?php
/**
 * Template part: Payment options section for "Условия" page.
 *
 * Three cards: installments, mortgage, legal support.
 *
 * @package Leto_Starter
 */

$leto_usl_payments = array(
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
		'icon'  => 'scales',
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
<section class="leto-usl-payment" aria-label="Способы покупки">
	<div class="leto-container">

		<div class="leto-usl-payment__grid">
			<?php foreach ( $leto_usl_payments as $payment ) : ?>
				<article class="leto-usl-payment-card">
					<span class="leto-usl-payment-card__icon" aria-hidden="true">
						<?php if ( 'percent' === $payment['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<line x1="19" y1="5" x2="5" y2="19"/>
								<circle cx="6.5" cy="6.5" r="2.5"/>
								<circle cx="17.5" cy="17.5" r="2.5"/>
							</svg>
						<?php elseif ( 'building' === $payment['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<rect x="4" y="3" width="16" height="18" rx="1"/>
								<path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/>
								<path d="M10 21v-3h4v3"/>
							</svg>
						<?php elseif ( 'scales' === $payment['icon'] ) : ?>
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 3v18"/>
								<path d="M5 7l7-4 7 4"/>
								<path d="M5 7v4a7 7 0 0 0 3.5 6"/>
								<path d="M19 7v4a7 7 0 0 1-3.5 6"/>
								<path d="M2 17h4"/>
								<path d="M18 17h4"/>
							</svg>
						<?php endif; ?>
					</span>
					<h3 class="leto-usl-payment-card__title"><?php echo esc_html( $payment['title'] ); ?></h3>
					<p class="leto-usl-payment-card__desc"><?php echo esc_html( $payment['desc'] ); ?></p>
					<ul class="leto-usl-payment-card__list">
						<?php foreach ( $payment['items'] as $item ) : ?>
							<li class="leto-usl-payment-card__item">
								<span class="leto-usl-payment-card__check" aria-hidden="true">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
										<polyline points="20 6 9 17 4 12"/>
									</svg>
								</span>
								<?php echo esc_html( $item ); ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
