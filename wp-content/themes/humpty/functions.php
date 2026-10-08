<?php
/**
 * humpty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package humpty
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
function humpty_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on humpty, use a find and replace
		* to change 'humpty' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'humpty', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'humpty' ),
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
			'humpty_custom_background_args',
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
add_action( 'after_setup_theme', 'humpty_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function humpty_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'humpty_content_width', 640 );
}
add_action( 'after_setup_theme', 'humpty_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function humpty_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'humpty' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'humpty' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'humpty_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function humpty_scripts() {
	wp_enqueue_style( 'humpty-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'humpty-style', 'rtl', 'replace' );

	wp_enqueue_script( 'humpty-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'humpty_scripts' );

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

function cloths_enqueue_assets() {
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css' );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action( 'wp_enqueue_scripts', 'cloths_enqueue_assets' );

require_once get_template_directory() . '/inc/blocks.php';
require_once get_template_directory() . '/inc/acf-fields.php';
require_once get_template_directory() . '/inc/render-helpers.php';

// File path
// add_action('wp_head', 'show_template');
// function show_template() {
//     global $template;
//     echo basename($template);
//     echo get_theme_file_path($template);
// }

/**
 * Add Blocks To Existing Posts (Run Once)
 */
function add_blocks_to_existing_posts() {
    $posts = get_posts(array(
        'post_type'      => 'post',
        'post_status'    => 'any',
        'posts_per_page' => -1,
    ));
    foreach ($posts as $post) {
        if (get_field('blocks_added', $post->ID)) {
            continue;
        }
        $post_content = $post->post_content;
        $updated = false;
        // Contact Banner
        if (strpos($post_content, 'acf/contact-banner-section') === false) {
            $post_content = '<!-- wp:acf/contact-banner-section {"name":"acf/contact-banner-section","mode":"edit"} /-->' . "\n\n" . $post_content;
            $updated = true;
        }
        // Hero Mockup
        if (strpos($post_content, 'acf/hero-mockup-section') === false) {
            $post_content = '<!-- wp:acf/hero-mockup-section {"name":"acf/hero-mockup-section","mode":"edit"} /-->' . "\n\n" . $post_content;
            $updated = true;
        }
        // Progressive Detail
        if (strpos($post_content, 'acf/progressive-detail-section') === false) {
            $post_content .= "\n\n" . '<!-- wp:acf/progressive-detail-section {"name":"acf/progressive-detail-section","mode":"edit"} /-->';
            $updated = true;
        }

        // Mission Section
        if (strpos($post_content, 'acf/mission-section') === false) {
            $post_content .= "\n\n" . '<!-- wp:acf/mission-section {"name":"acf/mission-section","mode":"edit"} /-->';
            $updated = true;
        }

        if ($updated) {
            wp_update_post(array(
                'ID'           => $post->ID,
                'post_content' => $post_content,
            ));
            update_field('field_blocks_added', 1, $post->ID);
        }
    }
    remove_action('admin_init', 'add_blocks_to_existing_posts');
}
add_action('admin_init', 'add_blocks_to_existing_posts');

/**
 * Default Blocks For New Post (kept for Classic Editor / default_content compatibility)
 */
function default_post_blocks($content, $post) {

    if ($post->post_type !== 'post') {
        return $content;
    }
    if (!empty($content)) {
        return $content;
    }
    return '<!-- wp:acf/contact-banner-section {"name":"acf/contact-banner-section","mode":"edit"} /-->
            <!-- wp:acf/hero-mockup-section {"name":"acf/hero-mockup-section","mode":"edit"} /-->
            <!-- wp:acf/progressive-detail-section {"name":"acf/progressive-detail-section","mode":"edit"} /-->
            <!-- wp:acf/mission-section {"name":"acf/mission-section","mode":"edit"} /-->';
}
add_filter('default_content', 'default_post_blocks', 10, 2);


/**
 * Auto-insert blocks into new auto-draft posts (reliable fix for the Block Editor)
 */
function auto_insert_blocks_on_new_post($post_id, $post, $update) {

    if ($update) {
        return;
    }
    if ($post->post_type !== 'post') {
        return;
    }
    if ($post->post_status !== 'auto-draft') {
        return;
    }
    if (!empty($post->post_content)) {
        return;
    }
    // Prevent infinite loop
    remove_action('wp_insert_post', 'auto_insert_blocks_on_new_post', 10);

    $post_content = implode("\n\n", array(
        '<!-- wp:acf/contact-banner-section {"name":"acf/contact-banner-section","mode":"edit"} /-->',
        '<!-- wp:acf/hero-mockup-section {"name":"acf/hero-mockup-section","mode":"edit"} /-->',
        '<!-- wp:acf/progressive-detail-section {"name":"acf/progressive-detail-section","mode":"edit"} /-->',
        '<!-- wp:acf/mission-section {"name":"acf/mission-section","mode":"edit"} /-->',
    ));
    wp_update_post(array(
        'ID'           => $post_id,
        'post_content' => $post_content,
    ));
    update_field('field_blocks_added', 1, $post_id);
    // Re-add the action
    add_action('wp_insert_post', 'auto_insert_blocks_on_new_post', 10, 3);
}
add_action('wp_insert_post', 'auto_insert_blocks_on_new_post', 10, 3);

/**
 * Auto Check / Uncheck Checkbox
 */
function sync_blocks_added_checkbox($post_id, $post, $update) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (wp_is_post_revision($post_id)) {
        return;
    }
    if ($post->post_type !== 'post') {
        return;
    }
    $content = get_post_field('post_content', $post_id);
    $has_contact     = strpos($content, 'acf/contact-banner-section') !== false;
    $has_hero        = strpos($content, 'acf/hero-mockup-section') !== false;
    $has_progressive = strpos($content, 'acf/progressive-detail-section') !== false;
    $has_mission     = strpos($content, 'acf/mission-section') !== false;

    update_field(
        'field_blocks_added',
        ($has_contact && $has_hero && $has_progressive) ? 1 : 0,
        $post_id
    );
}
add_action('save_post_post', 'sync_blocks_added_checkbox', 20, 3);

function auto_check_blocks_added($post_id) {

    // Prevent autosave & revisions
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (wp_is_post_revision($post_id)) {
        return;
    }
    // Only for Posts
    if (get_post_type($post_id) !== 'post') {
        return;
    }
    $content = get_post_field('post_content', $post_id);
    // Check required blocks
    $has_contact     = strpos($content, 'acf/contact-banner-section') !== false;
    $has_hero        = strpos($content, 'acf/hero-mockup-section') !== false;
    $has_progressive = strpos($content, 'acf/progressive-detail-section') !== false;
    $has_mission     = strpos($content, 'acf/mission-section') !== false;

    $blocks_added = ($has_contact && $has_hero && $has_progressive) ? 1 : 0;
    // Update post meta
    update_post_meta($post_id, 'blocks_added', $blocks_added);
    // Update ACF field
    update_field('field_blocks_added', $blocks_added, $post_id);
}
add_action('save_post_post', 'auto_check_blocks_added');

// Post Checkbox Field Group
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key'   => 'group_post_blocks_added',
        'title' => 'Post Settings',
        'fields' => array(
            array(
                'key'           => 'field_blocks_added',
                'label'         => 'Blocks Added',
                'name'          => 'blocks_added',
                'type'          => 'true_false',
                'ui'            => 1,
                'ui_on_text'    => 'Yes',
                'ui_off_text'   => 'No',
                'default_value' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'post',
                ),
            ),
        ),
        'position'              => 'side',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ));
}
