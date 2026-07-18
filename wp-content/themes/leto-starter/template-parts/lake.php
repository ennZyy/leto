<?php
/**
 * Lake section template part.
 *
 * Full-width section with a background image of a lake and a green
 * gradient overlay. The content (eyebrow label, title, description,
 * and stats) is positioned on the left side.
 *
 * @package Leto_Starter
 */

$leto_lake_stats = array(
	array(
		'value' => '2,5 га',
		'label' => 'Площадь озера',
	),
	array(
		'value' => '200 м',
		'label' => 'Песчаный пляж',
	),
	array(
		'value' => 'Круглый год',
		'label' => 'Доступно',
	),
);
?>
<section class="leto-lake" aria-label="Собственное озеро">
	<div class="leto-lake__overlay" aria-hidden="true"></div>

	<div class="leto-container leto-lake__inner">
		<div class="leto-lake__content">

			<span class="leto-lake__eyebrow">
				<svg class="leto-lake__eyebrow-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false">
					<path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0L12 2.69z"/>
				</svg>
				СОБСТВЕННОЕ ОЗЕРО
			</span>

			<h2 class="leto-lake__title">Ваш личный райский уголок</h2>

			<p class="leto-lake__desc">На территории посёлка расположено собственное озеро с песчаным пляжем. Купание,рыбалка, прогулка на лодке - всё это доступно жителям «ЛЕТО» круглый год. Зимой - каток и зимняя рыбалка.</p>

			<ul class="leto-lake__stats">
				<?php foreach ( $leto_lake_stats as $stat ) : ?>
					<li class="leto-lake__stat">
						<span class="leto-lake__stat-value"><?php echo esc_html( $stat['value'] ); ?></span>
						<span class="leto-lake__stat-label"><?php echo esc_html( $stat['label'] ); ?></span>
					</li>
				<?php endforeach; ?>
			</ul>

		</div>
	</div>
</section>
