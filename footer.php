<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package threadsnetwork
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer-content">
			<div>
				<a href="#">
					<?php
					get_template_part( 'template-parts/brisbane-logo' );
					?>
				</a>
			</div>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'cities-footer-menu'
			) );
			?>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'pages-menu',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<aside><span>&copy; Threads Network. All rights reserved.</span></aside>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
