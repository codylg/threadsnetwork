<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package threadsnetwork
 */

?>

<div class="content-thumbnail content-thumbnail-large" style="background-image: url('<?php the_post_thumbnail_url( 'thumb-large' ); ?>');">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="entry-details">

			<header class="entry-header">
				<?php
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	 			?>
				<a href="<?php esc_url( get_permalink() ) ?>" class="thumbnail-read-link">Read &rarr;</a>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<!-- <?php threadsnetwork_entry_categories(); ?> -->
				<!-- <?php the_excerpt() ?> -->
			</div>

		</div>

	</article><!-- #post-<?php the_ID(); ?> -->
</div>
