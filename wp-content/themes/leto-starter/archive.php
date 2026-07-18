<?php
/**
 * Archive template.
 *
 * @package Leto_Starter
 */

get_header();
?>

<main id="leto-primary" class="leto-main" role="main">
	<div class="leto-container">
		<div class="leto-layout <?php echo is_active_sidebar( 'sidebar-1' ) ? 'leto-layout--with-sidebar' : ''; ?>">
			<div class="leto-content">

				<?php if ( have_posts() ) : ?>

					<header class="leto-page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="leto-taxonomy-description">', '</div>' );
						?>
					</header>

					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-parts/content', get_post_type() );
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
