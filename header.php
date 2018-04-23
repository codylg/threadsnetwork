<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package threadsnetwork
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'threadsnetwork' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			get_template_part( 'template-parts/brisbane-logo' );
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif; ?>
		</div><!-- .site-branding -->

		<div class="site-header-links">
			<ul>
				<li>
					<a href="#" target="_blank">Melbourne</a>
				</li>
				<li>
					<a href="#" target="_blank">Sydney</a>
				</li>
				<li>
					<a href="#" target="_blank">Perth</a>
				</li>
				<li>
					<a class="site-header-search-toggle" onclick="toggleSearchField();"><?php get_template_part( 'template-parts/icons/search' );?></a>
				</li>
			</ul>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div id="page-header-search" class="page-header-search hidden">
			<?php get_search_form(); ?>
		</div>
