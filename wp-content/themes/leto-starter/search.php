<?php
/**
 * Search results template.
 *
 * @package Leto_Starter
 */

get_header();
?>

<main id="leto-primary" class="leto-main" role="main">
	<div class="leto-container">
		<div class="leto-layout <?php echo is_active_sidebar( 'sidebar-1' ) ? 'leto-layout--with-sidebar' : ''; ?>">
			<div class="leto-content">

				<header class="leto-page-header">
					<h1 class="page-title">
						<?php
						printf(
							/* translators: %s: search query. */
							esc_html__( 'Search results for: %s', 'leto-starter' ),
							'<span>' . esc_html( get_search_query() ) . '</span>'
						);
						?>
					</h1>
				</header>

				<?php if ( have_posts() ) : ?>

					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', 'search' );
					endwhile;

					the_posts_pagination(
						array(
							'prev_text' => esc_html__( '&laquo; Previous', 'leto-starter' ),
							'next_text' => esc_html__( 'Next &raquo;', 'leto-starter' ),
						)
					);
					?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</div><!-- .leto-content -->

			<?php get_sidebar(); ?>
		</div><!-- .leto-layout -->
	</div><!-- .leto-container -->
</main>

<?php
get_footer();
