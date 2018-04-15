<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package threadsnetwork
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			?>
			<div class="content-thumbnails home-page-content">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :

				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */

				 if( $wp_query->current_post == 0 || $wp_query->current_post == 3 ):
					if( $wp_query->current_post == 3 ):
						?>
						</div>
						</div>
						<?php
					endif;
					?>
					<div class="content-list-three-combo">
					<?php
					get_template_part( 'template-parts/content-thumbnail-large', get_post_type() );
 				elseif( $wp_query->current_post == 1 || $wp_query->current_post == 4 ):
					?>
					<div class="content-list-two-stacked">
					<?php
					get_template_part( 'template-parts/content-thumbnail', get_post_type() );
 				else :
 					get_template_part( 'template-parts/content-thumbnail', get_post_type() );
 		    endif;

				if( $wp_query->current_post == 5  ):
						?>
						</div>
						</div>
						<div class="mid-content-list-prompt newsletter-prompt">
						<?php
						get_template_part( 'template-parts/newsletter-signup-form' );
						?>
						</div>
						<div class="mid-content-list-prompt social-prompt">
						<?php
						get_template_part( 'template-parts/social-links' );
						?>
						</div>
						<?php
		    endif;

			endwhile;
			?>
			</div>
			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
