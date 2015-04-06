<?php
/**
 * AntiKaiser functions and definitions
 *
 * @package AntiKaiser
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'AntiKaiser2014_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function AntiKaiser2014_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on AntiKaiser, use a find and replace
	 * to change 'AntiKaiser2014' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'AntiKaiser2014', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'AntiKaiser2014' ),
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'AntiKaiser2014_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
}
endif; // AntiKaiser2014_setup
add_action( 'after_setup_theme', 'AntiKaiser2014_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function AntiKaiser2014_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'AntiKaiser2014' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'AntiKaiser2014' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget grid-25 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'AntiKaiser2014' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget grid-25 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'AntiKaiser2014' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget grid-25 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'AntiKaiser2014' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget grid-25 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'AntiKaiser2014_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function AntiKaiser2014_scripts() {
	wp_enqueue_style( 'AntiKaiser2014-style', get_stylesheet_uri() );

	wp_enqueue_script( 'AntiKaiser2014-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'AntiKaiser2014-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'AntiKaiser2014_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

//Fixes blog menu highlight bug
function dtbaker_wp_nav_menu_objects($sorted_menu_items, $args){
    // check if the current page is really a blog post.
    global $wp_query;
    global $post;
    $current_page = $post;
    if(!empty($wp_query->queried_object_id)){
        if($current_page && $current_page->post_type=='post'){
            //yes!
        }else{
            $current_page = false;
        }
    }else{
        $current_page = false;
    }
 
    $home_page_id = (int) get_option( 'page_for_posts' );
    foreach($sorted_menu_items as $id => $menu_item){
        if ( ! empty( $home_page_id ) && 'post_type' == $menu_item->type && empty( $wp_query->is_page ) && $home_page_id == $menu_item->object_id ){
            if(!$current_page){
                foreach($sorted_menu_items[$id]->classes as $classid=>$classname){
                    if($classname=='current_page_parent'){
                        unset($sorted_menu_items[$id]->classes[$classid]);
                    }
                }
            }
        }
    }
    return $sorted_menu_items;
}
add_filter('wp_nav_menu_objects','dtbaker_wp_nav_menu_objects',10,2);

/**
* Remove JetPack sharing buttons from post excerpt
*/

add_action('init','jp_remove_excerpt_share');

function jp_remove_excerpt_share() {
if ( has_filter( 'the_excerpt', 'sharing_display' ) ) {
remove_filter( 'the_excerpt', 'sharing_display', 19 );
}
}

add_filter('nav_menu_css_class', 'current_type_nav_class', 10, 2);
function current_type_nav_class($classes, $item) {
    // Get post_type for this post
    $post_type = get_query_var('post_type');

    // Go to Menus and add a menu class named: {custom-post-type}-menu-item
    // This adds a 'current_page_parent' class to the parent menu item
    if( in_array( $post_type.'-menu-item', $classes ) )
        array_push($classes, 'current_page_parent');

    return $classes;
}

?>