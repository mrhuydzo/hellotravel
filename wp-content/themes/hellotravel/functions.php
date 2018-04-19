<?php
/**
 * travel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package travel
 */

if ( ! function_exists( 'travel_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function travel_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on travel, use a find and replace
		 * to change 'travel' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'travel', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'travel' ),
		) );
		register_nav_menus( array(
			'footer-menu' => esc_html__( 'Footer Menu', 'travel' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'travel_custom_background_args', array(
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
add_action( 'after_setup_theme', 'travel_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function travel_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'travel_content_width', 640 );
}
add_action( 'after_setup_theme', 'travel_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function travel_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'travel' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'travel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget_title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'travel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function travel_scripts() {
	wp_enqueue_style( 'travel-style', get_stylesheet_uri() );
	wp_register_style('travel-animate', get_template_directory_uri().'/assets/css/animate.min.css','all');
	wp_register_style('travel-style-main', get_template_directory_uri().'/assets/css/main.min.css?v='.time(),'all');

	wp_enqueue_style( 'travel-animate');
	wp_enqueue_style( 'travel-style-main');

	wp_enqueue_script( 'travel-wow', get_template_directory_uri() . '/assets/js/wow.min.js' , array('jquery') );
	wp_enqueue_script( 'travel-smooth-scroll', get_template_directory_uri() . '/assets/js/smoothscroll.js' , array('jquery') );
	wp_enqueue_script( 'travel-slick', get_template_directory_uri() . '/assets/js/slick.min.js' , array('jquery') );
	wp_enqueue_script( 'travel-main', get_template_directory_uri() . '/assets/js/main.js' , array('jquery') );
	//wp_enqueue_script( 'travel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'travel-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script ('travel-wow');
	wp_enqueue_script ('travel-smooth-scrol');
	wp_enqueue_script ('travel-slick');
	wp_enqueue_script ('travel-main');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'travel_scripts' );

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



/*
 * Breadcrums
 * */

if(!function_exists('show_bread')){
	function show_bread(){
		$urlbase = get_bloginfo('url');
		$cat_current = get_the_category();
		//$cat_current[0]->cat_ID;
		// Get the ID of a given category
		$category_id = $cat_current[0]->term_id;
		// Get the URL of this category
		$category_link = get_category_link( $category_id );
		//var_dump($category_id);die;
		if(is_category()){
			echo '<p><a href="'.$urlbase.'"<i class="glyphicon glyphicon-home"></i></a>&nbsp;→&nbsp;<a href="'.$category_link.'" title="'.$cat_current[0]->cat_name.'">'.$cat_current[0]->cat_name.'</a>';
		}elseif(is_single()){
			$title_post = get_the_title();
			/*echo '<p><a href="'.$urlbase.'"><i class="glyphicon glyphicon-home"></i></a>&nbsp;→&nbsp;<a href="'.$category_link.'" title="'.$cat_current[0]->cat_name.'">'.$cat_current[0]->cat_name.'</a>&nbsp;→&nbsp; '.$title_post.'</p>';*/
			echo '<p><a href="'.$urlbase.'"<i class="glyphicon glyphicon-home"></i></a>&nbsp;→&nbsp;<a href="'.$category_link.'" title="'.$cat_current[0]->cat_name.'">'.$cat_current[0]->cat_name.'</a>';
		}
	}
}

/*
 * Create Sidebar
 * */

/*Footer sidebar*/
register_sidebar(array(
	'name' => 'Footer sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Khu vực sidebar footer 1',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h2 class="widget_title">',
	'after_title' => '</h2>'
));

register_sidebar(array(
	'name' => 'Footer sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Khu vực sidebar footer 2',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h2 class="widget_title">',
	'after_title' => '</h2>'
));

register_sidebar(array(
	'name' => 'Footer sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Khu vực sidebar footer 3',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget_title">',
	'after_title' => '</h3>'
));

//Code phan trang
function devvn_wp_corenavi($custom_query = null, $paged = null) {
	global $wp_query;
	if($custom_query) $main_query = $custom_query;
	else $main_query = $wp_query;
	$paged = ($paged) ? $paged : get_query_var('paged');
	$big = 999999999;
	$total = isset($main_query -> max_num_pages) ? $main_query -> max_num_pages:'';
	if($total > 1) echo '<div class="paging">';
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, $paged ),
		'total' => $total,
		'mid_size' => '5', // Số trang hiển thị khi có nhiều trang trước khi hiển thị ...
		'prev_text'    => __('<i class="fas fa-angle-left"></i>','devvn'),
		'next_text'    => __('<i class="fas fa-angle-right"></i>','devvn'),
	) );
	if($total > 1) echo '</div>';
}

//Word Count
function word_count($string, $limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $limit));
}



// rewrite urls
function taxonomy_slug_rewrite($wp_rewrite) {
	$rules = array();
	$taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
	$post_types = get_post_types(array('public' => true, '_builtin' => false), 'names');
	foreach ($post_types as $post_type) {
		foreach ($taxonomies as $taxonomy) {
			if ($taxonomy->object_type[0] == $post_type) {
				$categories = get_categories(array('type' => $post_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));
				foreach ($categories as $category) {
					$rules[$post_type . '/' . $category->slug . '/?$'] = 'index.php?' . $category->taxonomy . '=' . $category->slug;
				}
			}
		}
	}
	$wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter( 'generate_rewrite_rules', 'taxonomy_slug_rewrite' );

// register Custom Post Types
function create_post_types() {

	register_post_type('tours', array(
		'labels' => array(
			'name' => 'Tours',
			'all_items' => 'All Tours'
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'tours'),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'exclude_from_search' => false
	));

}
add_action('init', 'create_post_types');


// register Taxonomies
function create_taxonomies() {
	register_taxonomy('tour-categories', array('tours'), array(
		'labels' => array(
			'name' => 'Tour Categories'
		),
		'show_ui' => true,
		'show_tagcloud' => false,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'hierarchical' => true,
		'rewrite' => array(
			'slug' => 'tours'
		)
	));

}
add_action('init', 'create_taxonomies');
error_reporting(E_ERROR | E_PARSE);