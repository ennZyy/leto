<?php
/**
 * Queues and plots section.
 *
 * Four cards describing the construction queues and the types of plots
 * available in the settlement. The data is hard-coded for now — replace
 * with a Customizer/repeater field (or a custom post type) when the
 * project is ready.
 *
 * @package Leto_Starter
 */

$leto_queues = array(
	array(
		'badge' => '1 очередь',
		'title' => 'ЛЕТО',
		'desc'  => 'Участки с подведенными коммуникациями, центральная часть поселка, вид на озеро',
		'price' => 'от 80 000 ₽ за сотку',
		'icon'  => 'home',
	),
	array(
		'badge' => '2 очередь',
		'title' => 'ЛЕТО 2',
		'desc'  => 'Просторные участки до 12 соток, лесная зона, тихий район',
		'price' => '2-3 секторы: от 45 000 ₽ за сотку',
		'icon'  => 'tree',
	),
	array(
		'badge' => '3 очередь',
		'title' => 'Квартал ЛЕТО в Тестьянах',
		'desc'  => 'Компактные участки в историческом месте, рядом с храмом и родником',
		'price' => 'от 55 000 ₽ за сотку',
		'icon'  => 'building',
	),
	array(
		'badge' => '4 очередь',
		'title' => 'ЛЕТО Инвест',
		'desc'  => 'Инвестиционные участки под сдачу в аренду, высокая доходность',
		'price' => 'от 100 000 ₽ за сотку',
		'icon'  => 'chart',
	),
);
?>
<section class="leto-queues" aria-label="Очереди и участки">
	<div class="leto-container">

		<header class="leto-queues__header">
			<h2 class="leto-queues__title">Очереди и участки</h2>
			<p class="leto-queues__subtitle">Выберете свою очередь застройки - от участков у озера до инвестиционных предложений</p>
		</header>

		<div class="leto-queues__grid">
			<?php foreach ( $leto_queues as $queue ) : ?>
				<article class="leto-queue-card">
					<div class="leto-queue-card__image">
						<span class="leto-queue-card__badge"><?php echo esc_html( $queue['badge'] ); ?></span>
					</div>
					<div class="leto-queue-card__body">
						<h3 class="leto-queue-card__title">
							<span class="leto-queue-card__icon" aria-hidden="true">
								<?php if ( 'home' === $queue['icon'] ) : ?>
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 10.5 12 3l9 7.5"/><path d="M5 9.5V21h14V9.5"/><path d="M10 21v-6h4v6"/></svg>
								<?php elseif ( 'tree' === $queue['icon'] ) : ?>
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 6 9h3l-4 6h4l-3 5h12l-3-5h4l-4-6h3z"/><path d="M12 20v2"/></svg>
								<?php elseif ( 'building' === $queue['icon'] ) : ?>
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M8 7h2M14 7h2M8 11h2M14 11h2M8 15h2M14 15h2"/><path d="M10 21v-3h4v3"/></svg>
								<?php elseif ( 'chart' === $queue['icon'] ) : ?>
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17 9 11l4 4 8-8"/><path d="M14 7h7v7"/></svg>
								<?php endif; ?>
							</span>
							<span class="leto-queue-card__title-text"><?php echo esc_html( $queue['title'] ); ?></span>
						</h3>
						<p class="leto-queue-card__desc"><?php echo esc_html( $queue['desc'] ); ?></p>
						<p class="leto-queue-card__price"><?php echo esc_html( $queue['price'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
