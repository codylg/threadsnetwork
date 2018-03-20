<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package threadsnetwork
 */

?>

<div class="content-thumbnail">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php threadsnetwork_post_thumbnail(); ?>

		<div class="entry-details">

			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
	 			?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_excerpt() ?>
			</div>

		</div>

		<div class="entry-categories">
			<?php threadsnetwork_entry_categories(); ?>
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>
