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

		<div class="thumbnail-cover"></div>

		<?php threadsnetwork_post_thumbnail(); ?>

		<div class="entry-details">

			<header class="entry-header">
				<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	 			?>
				<a href="<?php esc_url( get_permalink() ) ?>" class="thumbnail-read-link">Read&nbsp;&rarr;</a>
			</header><!-- .entry-header -->

		</div>

		<div class="entry-categories">
			<!-- <?php threadsnetwork_entry_categories(); ?> -->
		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>
