<?php
/**
 * Template part: Guarantees section for "Застройщикам" page.
 *
 * Centered header with document icon and a list of guarantee items.
 *
 * @package Leto_Starter
 */

$leto_dp_guarantees = array(
	'Все документы проходят государственную регистрацию в Росреестре',
	'Право собственности на участок переходит после регистрации договора',
	'Гарантия 5 лет на все конструкции домов, построенных ЦМД',
	'Инженерные сети (газ, свет, дороги) — до начала продаж участков',
	'Прозрачные договоры без скрытых комиссий и платежей',
);
?>
<section class="leto-dp-guarantees" aria-label="Гарантии и документы">
	<div class="leto-container">

		<div class="leto-dp-guarantees__header">
			<div class="leto-dp-guarantees__eyebrow">
				<svg class="leto-dp-guarantees__eyebrow-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
					<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
					<polyline points="14 2 14 8 20 8"/>
					<line x1="16" y1="13" x2="8" y2="13"/>
					<line x1="16" y1="17" x2="8" y2="17"/>
					<polyline points="10 9 9 9 8 9"/>
				</svg>
				Гарантии и документы
			</div>

			<h2 class="leto-dp-guarantees__title">Ваша безопасность - наш приоритет</h2>
		</div>

		<div class="leto-dp-guarantees__list">
			<?php foreach ( $leto_dp_guarantees as $guarantee ) : ?>
				<div class="leto-dp-guarantees-item">
					<span class="leto-dp-guarantees-item__check" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
							<polyline points="20 6 9 17 4 12"/>
						</svg>
					</span>
					<span class="leto-dp-guarantees-item__text"><?php echo esc_html( $guarantee ); ?></span>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
