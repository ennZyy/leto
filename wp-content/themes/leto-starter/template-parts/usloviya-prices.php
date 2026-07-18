<?php
/**
 * Template part: Prices section for "Условия" page.
 *
 * Table with investment potential and quote.
 *
 * @package Leto_Starter
 */

$leto_usl_rows = array(
	array(
		'name'     => '1 очередь «ЛЕТО»',
		'price'    => '80 000 ₽',
		'target'   => '—',
		'potential' => '—',
	),
	array(
		'name'     => '2 очередь (секторы 2-3)',
		'price'    => '45 000 ₽',
		'target'   => '60 000 – 80 000 ₽',
		'potential' => '+33–78%',
	),
	array(
		'name'     => '3 очередь «Тестьяны»',
		'price'    => '55 000 ₽',
		'target'   => '70 000 – 80 000 ₽',
		'potential' => '+27–45%',
	),
	array(
		'name'     => '4 очередь «ЛЕТО Инвест»',
		'price'    => '100 000 – 120 000 ₽',
		'target'   => '130 000 – 150 000 ₽',
		'potential' => '+25–30%',
	),
);
?>
<section class="leto-usl-prices" aria-label="Цены и акции">
	<div class="leto-container">

		<div class="leto-usl-prices__header">
			<h2 class="leto-usl-prices__title">Цены и акции</h2>
			<p class="leto-usl-prices__subtitle">Инвестируйте в рост - цена на участки растёт с каждой проданной очередью</p>
		</div>

		<div class="leto-usl-prices__table-wrapper">
			<table class="leto-usl-prices__table">
				<thead>
					<tr>
						<th>Очередь</th>
						<th>Цена сейчас</th>
						<th>Цель через 1–2 года</th>
						<th>Потенциал</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ( $leto_usl_rows as $row ) : ?>
						<tr>
							<td class="leto-usl-prices__name"><?php echo esc_html( $row['name'] ); ?></td>
							<td class="leto-usl-prices__price"><?php echo esc_html( $row['price'] ); ?></td>
							<td class="leto-usl-prices__target"><?php echo esc_html( $row['target'] ); ?></td>
							<td class="leto-usl-prices__potential"><?php echo esc_html( $row['potential'] ); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

		<blockquote class="leto-usl-prices__quote">
			«Вы покупаете не просто участок - вы входите в проект на стадии, когда цена гарантированно вырастет. Первая очередь уже продаётся по 80 000 ₽/сотка. Вторая очередь стартует с 45 000 ₽. Разница - 35 000 ₽ на каждой сотке. Это не гадание, а математика девелопера.»
		</blockquote>

	</div>
</section>
