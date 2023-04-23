<?php
/**
 * Subareva functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Subareva
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function subareva_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Subareva, use a find and replace
		* to change 'subareva' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'subareva', get_template_directory() . '/languages' );

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
    // Add Post Thumbnail support
    add_theme_support( 'post-thumbnails' );


// Add styles to control column width
    add_action('admin_head', 'my_custom_table_styles');

    function my_custom_table_styles() {
        echo '<style>
   .fixed #featured_thumb {
       width:10%
   }
  </style>';
    }


//// ADD FEATURED IMAGE TO PAGES AND POSTS

// Add the posts and pages columns filter. They both use the same function.
    add_filter('manage_posts_columns', 'theme_add_post_admin_thumbnail_column', 2);
    add_filter('manage_pages_columns', 'theme_add_post_admin_thumbnail_column', 2);

// Add the column
    function theme_add_post_admin_thumbnail_column($columns)
    {

        // Check if post type is 'Product'
        global $pagenow, $typenow;
        if( 'team' === $typenow && 'edit.php' === $pagenow )
        {


            $new = array();
            foreach ($columns as $key => $title) {
                if ($key == 'title') // Put the Thumbnail column before the Author column
                {
                    $new['featured_thumb'] = __('Фотография');
                }

                $new[$key] = $title;
            }
            return $new;


        }

        else {
            return $columns;
        }



    }



// Manage Post and Page Admin Panel Columns
    add_action('manage_posts_custom_column', 'theme_show_post_thumbnail_column', 5, 2);
    add_action('manage_pages_custom_column', 'theme_show_post_thumbnail_column', 5, 2);

// Get featured-thumbnail size post thumbnail and display it
    function theme_show_post_thumbnail_column($theme_columns, $theme_id)
    {

        // Check if post type is 'Product'
        global $pagenow, $typenow;
        if( 'team' === $typenow && 'edit.php' === $pagenow )
        {


            switch ($theme_columns) {
                case 'featured_thumb':
                    if (function_exists('the_post_thumbnail')) {

                        $permalink = get_edit_post_link();

                        $thumb = get_the_post_thumbnail_url(null, 'thumbnail');

                        echo '<a href="' . $permalink . '"><img src="' . $thumb . '" style="width:80px"></a>';

                    } else {
                        echo 'Your theme doesn\'t support featured image…';
                    }

                    break;
            }

        }
        else {


            return $theme_columns;
        }


    }

//// END ADD FEATURED IMAGE TO PAGES AND POSTS

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Главное меню', 'subareva' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'subareva_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'subareva_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function subareva_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'subareva_content_width', 640 );
}
add_action( 'after_setup_theme', 'subareva_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function subareva_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'subareva' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'subareva' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'subareva_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function subareva_scripts() {
	wp_enqueue_style( 'subareva-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
	wp_style_add_data( 'subareva-style', 'rtl', 'replace' );

	wp_enqueue_script( 'subareva-scripts', get_template_directory_uri() . '/dist/js/common.js', array(), _S_VERSION, true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'subareva_scripts' );

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

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Общие настройки',
        'menu_title'	=> 'Настройки темы',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки шапки',
        'menu_title'	=> 'Шапка',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки футера',
        'menu_title'	=> 'Футер',
        'parent_slug'	=> 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Настройки контактов',
        'menu_title'	=> 'Контакты',
        'parent_slug'	=> 'theme-general-settings',
    ));
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    if(is_page( 2 ) ) {
        $classes[] = 'swiper-slide';
    }
    return $classes;
}
