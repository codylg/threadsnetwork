<?php
/**
 * Template part for displaying list of post results
 *
 * @package threadsnetwork
 */

?>

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


		 if( $wp_query->post_count >= 6 ):

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
					<?php
					get_template_part( 'template-parts/newsletter-signup-form' );
					get_template_part( 'template-parts/social-links' );
			endif;

		else :
			get_template_part( 'template-parts/content-thumbnail', get_post_type() );
		endif;

	endwhile;
	?>
	</div>
	<?php

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
