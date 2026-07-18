<?php
/**
 * Template for displaying single pages.
 *
 * @package Leto_Starter
 */

get_header();
?>

<main id="leto-primary" class="leto-main" role="main">
	<div class="leto-container">
		<div class="leto-layout">
			<div class="leto-content">

				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );

					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
				?>

			</div><!-- .leto-content -->
		</div><!-- .leto-layout -->
	</div><!-- .leto-container -->
</main>

<?php
get_footer();
