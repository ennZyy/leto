<?php
/**
 * Testimonials section template part.
 *
 * Carousel of resident reviews with prev/next navigation and
 * pagination dots. The carousel behaviour is handled in
 * assets/js/navigation.js (via the [data-testimonials-carousel]
 * data attribute).
 *
 * @package Leto_Starter
 */

$leto_testimonials = array(
	array(
		'quote' => 'Переехали в «ЛЕТО» три года назад и ни разу не пожалели. Природа, свежий воздух, озеро в шаговой доступности. Дети в восторге от глэмпинга, а мы с женой — от тишины и спокойствия.',
		'name'  => 'Алексей Морозов',
		'role'  => 'Житель посёлка, участок №47',
	),
	array(
		'quote' => 'ЦМД построил наш дом под ключ за 8 месяцев. Качество на высоте, все коммуникации проведены, документы в порядке. Соседи тоже довольны — общаемся, помогаем друг другу.',
		'name'  => 'Екатерина Соколова',
		'role'  => 'Жительница посёлка, участок №12',
	),
	array(
		'quote' => 'Покупали участок как инвестицию. За два года стоимость выросла заметно. Плюс экосистема посёлка — экоферма, глэмпинг, озеро — даёт стабильный поток арендаторов и гостей.',
		'name'  => 'Дмитрий Волков',
		'role'  => 'Инвестор, участок №89',
	),
	array(
		'quote' => 'Живём в «ЛЕТО» уже пятый год. За это время посёлок вырос, появились новые соседи, инфраструктура. Самое главное — здесь безопасно, дети гуляют одни, все друг друга знают.',
		'name'  => 'Мария Петрова',
		'role'  => 'Жительница посёлка, участок №34',
	),
	array(
		'quote' => 'Идеальное место для тех, кто устал от города. Приезжаю на выходные — рыбалка, прогулки, баня. Свежие продукты с экофермы прямо к дому. Что ещё нужно для счастья?',
		'name'  => 'Сергей Лебедев',
		'role'  => 'Житель посёлка, участок №56',
	),
);
?>
<section class="leto-testimonials" aria-label="Отзывы жителей">
	<div class="leto-container">

		<h2 class="leto-testimonials__title">Отзывы жителей</h2>

		<div class="leto-testimonials__carousel" data-testimonials-carousel>

			<div class="leto-testimonials__track">
				<?php foreach ( $leto_testimonials as $index => $testimonial ) : ?>
					<article class="leto-testimonial-slide" data-slide="<?php echo esc_attr( $index ); ?>"<?php echo 0 === $index ? '' : ' hidden'; ?>>
						<div class="leto-testimonial">
							<div class="leto-testimonial__content">
								<svg class="leto-testimonial__quote" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
									<path d="M3 21c3 0 7-1 7-8V5H3v8h4c0 4-1 5-3 5v3zm11 0c3 0 7-1 7-8V5h-7v8h4c0 4-1 5-3 5v3z"/>
								</svg>
								<blockquote class="leto-testimonial__text">
									<?php echo esc_html( $testimonial['quote'] ); ?>
								</blockquote>
							</div>
							<div class="leto-testimonial__author">
								<span class="leto-testimonial__name"><?php echo esc_html( $testimonial['name'] ); ?></span>
								<span class="leto-testimonial__role"><?php echo esc_html( $testimonial['role'] ); ?></span>
							</div>
						</div>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="leto-testimonials__nav">
				<button class="leto-testimonials__arrow" type="button" data-testimonials-prev aria-label="Предыдущий отзыв">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
						<polyline points="15 18 9 12 15 6"/>
					</svg>
				</button>
				<button class="leto-testimonials__arrow" type="button" data-testimonials-next aria-label="Следующий отзыв">
					<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
						<polyline points="9 18 15 12 9 6"/>
					</svg>
				</button>
			</div>

		</div>

		<div class="leto-testimonials__dots" role="tablist">
			<?php foreach ( $leto_testimonials as $index => $testimonial ) : ?>
				<button
					class="leto-testimonials__dot<?php echo 0 === $index ? ' is-active' : ''; ?>"
					type="button"
					data-testimonials-dot="<?php echo esc_attr( $index ); ?>"
					aria-label="Отзыв <?php echo esc_attr( $index + 1 ); ?>"
					role="tab"
					aria-selected="<?php echo 0 === $index ? 'true' : 'false'; ?>"
				></button>
			<?php endforeach; ?>
		</div>

	</div>
</section>
