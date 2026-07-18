<?php
/**
 * Template for displaying single posts.
 *
 * @package Leto_Starter
 */

get_header();
?>

<main id="leto-primary" class="leto-main" role="main">
	<div class="leto-container">
		<div class="leto-layout <?php echo is_active_sidebar( 'sidebar-1' ) ? 'leto-layout--with-sidebar' : ''; ?>">
			<div class="leto-content">

				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'single' );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'leto-starter' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'leto-starter' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
				?>

			</div><!-- .leto-content -->

			<?php get_sidebar(); ?>
		</div><!-- .leto-layout -->
	</div><!-- .leto-container -->
</main>

<?php
get_footer();
