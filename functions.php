<?php
// exit(); 4
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

/**
 * Proper way to enqueue scripts and styles
 */
function wpi_enqueue_scripts() {

	// wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri().'/css/bootstrap-grid.min.css', array(), '5.3', 'all' );

	wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/css/style.css', array(), '1.0.0', 'all' );

	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );

	if ( is_singular() && get_option( 'thread_comments' ) ){
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'wpi_enqueue_scripts' );


function circlecube_comment_form( $args ) {

    $args['class_submit'] = 'the-btn the-btn-primary'; // since WP 4.1
    
    return $args;
    
}

add_filter( 'comment_form_defaults', 'circlecube_comment_form' );


/**
 * Register a custom post type called "WordPress services".
 *
 * @see get_post_type_labels() for label keys.
 */
function wpdocs_codex_services_init() {
	$labels = array(
		'name'               => _x( 'Services', 'Post type general name', 'textdomain' ),
		'singular_name'      => _x( 'Service', 'Post type singular name', 'textdomain' ),
		'menu_name'          => _x( 'Services', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'     => _x( 'Service', 'Add New on Toolbar', 'textdomain' ),
		'add_new'            => __( 'Add New', 'textdomain' ),
		'add_new_item'       => __( 'Add New Service', 'textdomain' ),
		'new_item'           => __( 'New Service', 'textdomain' ),
		'edit_item'          => __( 'Edit Service', 'textdomain' ),
		'view_item'          => __( 'View Service', 'textdomain' ),
		'all_items'          => __( 'All Services', 'textdomain' ),
		'search_items'       => __( 'Search Services', 'textdomain' ),
		'parent_item_colon'  => __( 'Parent Services:', 'textdomain' ),
		'not_found'          => __( 'No service found.', 'textdomain' ),
		'not_found_in_trash' => __( 'No service found in Trash.', 'textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'services', $args );
}

add_action( 'init', 'wpdocs_codex_services_init' );


add_filter(
	'rwmb_meta_boxes',
	function ( $meta_boxes ) {
		$meta_boxes[] = array(
			'title'      => 'SEO Fields',
			'post_types' => array( 'services', 'page' ),
			'fields'     => array(
				array(
					'name' => 'SEO Title',
					'id'   => 'seo-title',
					'type' => 'text',
				),
				array(
					'name' => 'SEO Description',
					'id'   => 'seo-des',
					'type' => 'textarea',
				),
				array(
					'name' => 'SEO Keywords',
					'id'   => 'seo-keywords',
					'type' => 'text',
				),
			),
		);

		return $meta_boxes;
	}
);


function add_wp_head_things() {

	global $post;

	$seo_des      = get_post_meta( $post->ID, 'seo-des', true );
	$seo_keywords = get_post_meta( $post->ID, 'seo-keywords', true );

	if ( $seo_des ) {
		?>
		<meta name="description" content="<?php echo $seo_des; ?>" />
		<meta name="keywords" content="<?php echo $seo_keywords; ?>" />	
		<?php
	}

}
add_action( 'wp_head', 'add_wp_head_things', 50 );



/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string Filtered title.
 */
function wpdocs_filter_wp_title4681231( $title ) {
	global $post;

	if ( 'services' === get_post_type( $post->ID ) || 'page' === get_post_type( $post->ID ) ) {

		$seo_title = get_post_meta( $post->ID, 'seo-title', true );

		if ( $seo_title ) {
			return $seo_title . ' | Hire Freelancer | WPIbrar';
		}
	}

	return $title;
}
add_filter( 'pre_get_document_title', 'wpdocs_filter_wp_title4681231', 9999, 2 );


/**
 * Change Posts Per Page for services Archive page.
 *
 * @param object $query data
 */
function change_services_archive_posts_per_page_454( $query ) {

	if ( $query->is_post_type_archive( 'services' ) && ! is_admin() && $query->is_main_query() ) {
		$query->set( 'posts_per_page', '-1' );
	}

	return $query;

}
add_filter( 'pre_get_posts', 'change_services_archive_posts_per_page_454' );


add_filter(
	'wp_sitemaps_add_provider',
	function( $provider, $name ) {
		if ( 'users' === $name ) {
			return false;
		}

		return $provider;
	},
	10,
	2
);


function prefix_defer_css_rel_preload( $html, $handle, $href, $media ) {
	if ( ! is_admin() ) {
		$html = '<link rel="stylesheet" href="' . $href . '" id="' . $handle . '" media="' . $media . '" type="text/css" defer />';
	}
	return $html;
}
add_filter( 'style_loader_tag', 'prefix_defer_css_rel_preload', 10, 4 );