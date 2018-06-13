<?php
/**
 * threadsnetwork functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package threadsnetwork
 */

if ( ! function_exists( 'threadsnetwork_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function threadsnetwork_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on threadsnetwork, use a find and replace
		 * to change 'threadsnetwork' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'threadsnetwork', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 800, 800, true );
		add_image_size( 'thumb-large', 1400, 1000, true );

		/**
		 * Filter the except length.
		 *
		 * @param int $length Excerpt length.
		 * @return int (Maybe) modified excerpt length.
		 */
		function wpdocs_custom_excerpt_length( $length ) {
		    return 24;
		}
		add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


		/**
		 * Filter the "read more" excerpt string link to the post.
		 *
		 * @param string $more "Read more" excerpt string.
		 * @return string (Maybe) modified "read more" excerpt string.
		 */
		function wpdocs_excerpt_more( $more ) {
		    return sprintf( '&hellip; <a class="read-more" href="%1$s">%2$s</a>',
		        get_permalink( get_the_ID() ),
		        __( 'Continue&nbsp;reading', 'textdomain' )
		    );
		}
		add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

		//Exclude pages from WordPress Search
		if (!is_admin()) {
			function wpb_search_filter($query) {
				if ($query->is_search) {
					$query->set('post_type', 'post');
				}
				return $query;
			}
			add_filter('pre_get_posts','wpb_search_filter');
		}

		update_option( 'link_manager_enabled', 0 );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'threadsnetwork_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'threadsnetwork_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function threadsnetwork_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'threadsnetwork_content_width', 640 );
}
add_action( 'after_setup_theme', 'threadsnetwork_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function threadsnetwork_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'threadsnetwork' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'threadsnetwork' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'threadsnetwork_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function threadsnetwork_scripts() {
	wp_enqueue_style( 'threadsnetwork-style', get_stylesheet_uri() );

	wp_enqueue_script( 'threadsnetwork-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'threadsnetwork-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'threadsnetwork_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// Theme customisations

function theme_customize_register( $wp_customize ) {

	// Accent color
  $wp_customize->add_setting( 'accent_color', array(
    'default'   => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'sanitize_hex_color',
  ) );

  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
    'section' => 'colors',
    'label'   => esc_html__( 'Accent colour', 'theme' ),
  ) ) );
}

add_action( 'customize_register', 'theme_customize_register' );

function theme_get_customizer_css() {
	ob_start();

	$accent_color = get_theme_mod( 'accent_color', '' );
	if ( ! empty( $accent_color ) ) {
		?>
		.site-header,
		.newsletter-prompt,
		.social-prompt,
		blockquote,
		textarea:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		article.type-page .entry-header,
		.single-post .entry-header,
		.comments-area,
		.wpcf7-form,
		table.fullcalendar.em-calendar td.eventful-today,
    table.fullcalendar.em-calendar td.eventless-today,
		#secondary {
			border-color: <?php echo $accent_color; ?>;
		}

		svg.city-logo *[stroke] {
			stroke: <?php echo $accent_color; ?>;
		}
		svg.city-logo *[fill] {
			fill: <?php echo $accent_color; ?>;
		}

		hr::before {
			color: <?php echo $accent_color; ?>;
		}

		.underline-link::before,
		.cat-links a::before,
		.entry-content a::before {
			background-color: <?php echo $accent_color; ?>;
		}

		@supports ((initial-letter: 1) or (-webkit-initial-letter: 1)) {

			.single-post .entry-content > p:first-of-type::first-letter {
				color: <?php echo $accent_color; ?>;
			}
		}

		/* $media-large */
		@media (max-width: 1100px) {

			.site-header .site-header-links {
				border-color: <?php echo $accent_color; ?>;
			}
		}
		<?php
	}

	$css = ob_get_clean();
	return $css;
}



function wpb_custom_new_menu() {
  register_nav_menus(
    array(
			'pages-menu' => esc_html__( 'Primary', 'threadsnetwork' ),
      'cities-header-menu' => __( 'Cities header' ),
      'cities-footer-menu' => __( 'Cities footer' ),
      'social-links' => __( 'Social links' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );

// add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );
// 	function add_search_box( $items, $args ) {
// 	$items .= '<li>' . get_search_form( false ) . '</li>';
// 	return $items;
// }
