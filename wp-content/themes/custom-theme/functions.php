<?php
/**
 * new theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package new_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'new_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function new_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on new theme, use a find and replace
		 * to change 'new-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'new-theme', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'new-theme' ),
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
				'new_theme_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'new_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function new_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'new_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'new_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function new_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'new-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'new-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'new_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function new_theme_scripts() {
	wp_enqueue_style( 'new-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'new-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'new-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'new_theme_scripts' );

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

add_action('init', 'wpl_owt_cpt_register_movies');

function wpl_owt_cpt_register_movies() {
    $labels = array(
        'name' => __('Movies'),
        'singular_name' => __('Movie'),
        'menu_name' => __('Movies'),
        'name_admin_bar' => __('Movie'),
        'add_new' => __('Add New'),
        'add_new_item' => __('Add New Movies'),
        'new_item' => __('New Movie'),
        'edit_item' => __('Edit Movie'),
        'view_item' => __('View Movie'),
        'all_items' => __('All Movies'),
        'search_items' => __('Search Movies'),
        'parent_item_colon' => __('Parent Movies:'),
        'not_found' => __('No movies found.'),
        'not_found_in_trash' => __('No movies found in Trash.')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'book'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('movie', $args);
}

function wpl_owt_cpt_register_metabox() {

    add_meta_box("cpt-id", "Producer Details", "wpl_owt_cpt_producer_call", "movie", "side", "high");

    add_meta_box("cpt-author", "Choose Author", "wpl_owt_cpt_author_call", "movie", "side", "high");
}

add_action("add_meta_boxes", "wpl_owt_cpt_register_metabox");

function wpl_owt_cpt_producer_call($post) {
    ?>
    <p>
        <label>Name:</label>
        <?php $name = get_post_meta($post->ID, "wpl_producer_name", true) ?>
        <input type="text" value="<?php echo $name; ?>" name="txtProducerName" placeholder="Name"/>
    </p>
    <p>
        <label>Email:</label>
        <?php $email = get_post_meta($post->ID, "wpl_producer_email", true) ?>
        <input type="email" value="<?php echo $email; ?>" name="txtProducerEmail" placeholder="Email"/>
    </p>
    <?php
}

function wpl_owt_cpt_save_values($post_id, $post) {


    $txtProducerName = isset($_POST['txtProducerName']) ? $_POST['txtProducerName'] : "";
    $txtProducerEmail = isset($_POST['txtProducerEmail']) ? $_POST['txtProducerEmail'] : "";

    update_post_meta($post_id, "wpl_producer_name", $txtProducerName);
    update_post_meta($post_id, "wpl_producer_email", $txtProducerEmail);
}

add_action("save_post", "wpl_owt_cpt_save_values", 10, 2);

function wpl_owt_cpt_custom_columns($columns) {

    $columns = array(
        "cb" => "<input type='checkbox'/>",
        "title" => "Movie Title",
        "pub_email" => "Publisher Email",
        "pub_name" => "Publisher Name",
        "date" => "Date"
    );

    return $columns;
}

add_action("manage_movie_posts_columns", "wpl_owt_cpt_custom_columns");

function wpl_owt_cpt_custom_columns_data($column, $post_id) {

    switch ($column) {

        case 'pub_email':
            $publisher_email = get_post_meta($post_id, "wpl_producer_email", true);
            echo $publisher_email;
            break;
        case 'pub_name':
            $publisher_name = get_post_meta($post_id, "wpl_producer_name", true);
            echo $publisher_name;
            break;
    }
}

add_action("manage_movie_posts_custom_column", "wpl_owt_cpt_custom_columns_data", 10, 2);

add_filter("manage_edit-movie_sortable_columns", "wpl_owt_cpt_sortable_columns");

function wpl_owt_cpt_sortable_columns($columns) {

    $columns['pub_email'] = "owt_email";
    $columns["pub_name"] = "owt_name";

    return $columns;
}

function wpl_owt_cpt_author_call($post) {
    ?>
    <div>
        <label>Select Author</label>
        <select name='ddauthor'>
            <?php
            $users = get_users(array(
                "role" => "author"
            ));

            $saved_author_id = get_post_meta($post->ID, "author_id_movie", true);

            foreach ($users as $index => $user) {
                $selected = '';
                if ($saved_author_id == $user->ID) {
                    $selected = 'selected="selected"';
                }
                ?>
                <option value='<?php echo $user->ID ?>' <?php echo $selected; ?>><?php echo $user->display_name; ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <?php
}

add_action("save_post", "wpl_owt_save_author_movie", 10, 2);

function wpl_owt_save_author_movie($post_id, $post) {

    $author_id = isset($_REQUEST['ddauthor']) ? intval($_REQUEST['ddauthor']) : "";

    update_post_meta($post_id, "author_id_movie", $author_id);
}

add_action("restrict_manage_posts", "wpl_owt_author_filter_box_layout");

function wpl_owt_author_filter_box_layout() {

    global $typenow;
    if ($typenow == "movie") {

        $author_id = isset($_GET['filter_by_author']) ? intval($_GET['filter_by_author']) : "";

        wp_dropdown_users(array(
            "show_option_none" => "Select author",
            "role" => "author",
            "name" => "filter_by_author",
            "id" => "ddfilterauthorid",
            "selected" => $author_id
        ));
    }
}

add_filter("parse_query", "wpl_owt_filter_by_author");

function wpl_owt_filter_by_author($query) {

    global $typenow;
    global $pagenow;

    $author_id = isset($_GET['filter_by_author']) ? intval($_GET['filter_by_author']) : "";

    if ($typenow == "movie" && $pagenow == "edit.php" && !empty($author_id)) {

        $query->query_vars["meta_key"] = "author_id_movie";
        $query->query_vars["meta_value"] = $author_id;
    }
}

add_action('init', 'wpl_owt_create_movies_category');

function wpl_owt_create_movies_category() {
    register_taxonomy(
            'movie_category', 'movie', array(
        'label' => __('Movie Category'),
        'rewrite' => array('slug' => 'movie_category'),
        'hierarchical' => true,
            )
    );
}

add_action("restrict_manage_posts", "wpl_owt_category_filter_box");

function wpl_owt_category_filter_box() {

    global $typenow;
    $show_taxonomy = "movie_category";

    if ($typenow == "movie") {

        $selected_movie_category_id = isset($_GET[$show_taxonomy]) ? intval($_GET[$show_taxonomy]) : "";

        wp_dropdown_categories(array(
            "show_option_all" => "Show All",
            "name" => $show_taxonomy,
            "selected" => $selected_movie_category_id,
            "taxonomy" => $show_taxonomy,
            "show_count" => true
        ));
    }
}

add_filter("parse_query", "wpl_owt_parse_category_fn");

function wpl_owt_parse_category_fn($query) {

    global $typenow;
    global $pagenow;
    $post_type = "movie";
    $taxonomy = "movie_category";

    $query_variables = &$query->query_vars;

    if ($typenow == $post_type && $pagenow == "edit.php" && isset($query_variables[$taxonomy]) && is_numeric($query_variables[$taxonomy])) {

        $term_details = get_term_by("id", $query_variables[$taxonomy], $taxonomy);

        $query_variables[$taxonomy] = $term_details->slug;
    }
}
// function cptui_register_my_cpts_book() {

// 	/**
// 	 * Post Type: Book .
// 	 */

// 	$labels = [
// 		"name" => __( "Book ", "new-theme" ),
// 		"singular_name" => __( "Book", "new-theme" ),
// 		"menu_name" => __( "Book", "new-theme" ),
// 	];

// 	$args = [
// 		"label" => __( "Book ", "new-theme" ),
// 		"labels" => $labels,
// 		"description" => "",
// 		"public" => true,
// 		"publicly_queryable" => true,
// 		"show_ui" => true,
// 		"show_in_rest" => true,
// 		"rest_base" => "",
// 		"rest_controller_class" => "WP_REST_Posts_Controller",
// 		"has_archive" => false,
// 		"show_in_menu" => true,
// 		"show_in_nav_menus" => true,
// 		"delete_with_user" => false,
// 		"exclude_from_search" => false,
// 		"capability_type" => "Book",
// 		"map_meta_cap" => true,
// 		"hierarchical" => false,
// 		"rewrite" => [ "slug" => "book", "with_front" => true ],
// 		"query_var" => true,
// 		"supports" => [ "title", "editor", "thumbnail" ],
// 	];

// 	register_post_type( "book", $args );
// }

// add_action( 'init', 'cptui_register_my_cpts_book' );

