<?php
/**
 * 404 template.
 *
 * @package Leto_Starter
 */

get_header();
?>

<main id="leto-primary" class="leto-main" role="main">
	<div class="leto-container">
		<div class="leto-layout">
			<div class="leto-content">
				<section class="leto-no-results">
					<header>
						<h1 class="page-title"><?php esc_html_e( '404 — Page not found', 'leto-starter' ); ?></h1>
					</header>

					<div class="page-content">
						<p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'leto-starter' ); ?></p>
						<?php get_search_form(); ?>
					</div>
				</section>
			</div><!-- .leto-content -->
		</div><!-- .leto-layout -->
	</div><!-- .leto-container -->
</main>

<?php
get_footer();
