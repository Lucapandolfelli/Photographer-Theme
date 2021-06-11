<?php 

    function register_navwalker(){
        require_once get_template_directory() . '/template-parts/navbar.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    // Theme Support

    function photographer_theme_support(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'photographer_theme_support');

    function photographer_register_styles(){

        //registrar estilos
        wp_enqueue_style('photographer-style', get_template_directory_uri() . '/style.css', array('photographer-bootstrap'), '1.0,', 'all');
        wp_enqueue_style('photographer-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), '5.0.1', 'all');
        wp_enqueue_style('photographer-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3', 'all');

    }
    add_action('wp_enqueue_scripts', 'photographer_register_styles');

    function photographer_register_scripts(){

        //registrar scripts
        wp_enqueue_script('photographer-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js", array(), '5.0.1', true);
        wp_enqueue_script('photographer-poppins', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), '2.9.2', true);
        wp_enqueue_script('photographer-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);

    }
    add_action('wp_enqueue_scripts', 'photographer_register_scripts');

    // Register Menu

    function photographer_register_menus() {
        register_nav_menus(
          array(
              'main-menu' => __( 'Main Menu' )
            )
        );
    }
    add_action( 'init', 'photographer_register_menus' );

    // Thumbnails Support

    if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'category-thumb', 298, 199 );
        add_image_size( 'related_post_image', 350, 200 );
        add_image_size( 'portfolio', 400, 300 );
        add_image_size( 'portfolio-item', 298, 199 );
    }

    // The Excerpt Lenght

    function photographer_custom_the_excerpt($length){

        $length = 22;
        return $length;

    }
    add_filter('excerpt_length','photographer_custom_the_excerpt');

    // Theme Customizer
    
    require_once('includes/theme_customizer.php');

    // Register Custom Post Type

    function photographer_portfolio_custom_post_type() {

        $labels = array(
            'name'                  => _x( 'Portfolio', 'Post Type General Name', 'photographer' ),
            'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name', 'photographer' ),
            'menu_name'             => __( 'Portfolio', 'photographer' ),
            'name_admin_bar'        => __( 'Portfolio Item', 'photographer' ),
            'archives'              => __( 'Portfolio Archives', 'photographer' ),
            'attributes'            => __( 'Portfolio Attributes', 'photographer' ),
            'parent_item_colon'     => __( 'Parent Portfolio:', 'photographer' ),
            'all_items'             => __( 'All Portfolio', 'photographer' ),
            'add_new_item'          => __( 'Add New Portfolio Item', 'photographer' ),
            'add_new'               => __( 'Add New', 'photographer' ),
            'new_item'              => __( 'New Portfolio', 'photographer' ),
            'edit_item'             => __( 'Edit Portfolio', 'photographer' ),
            'update_item'           => __( 'Update Portfolio', 'photographer' ),
            'view_item'             => __( 'View Portfolio', 'photographer' ),
            'view_items'            => __( 'View Portfolio', 'photographer' ),
            'search_items'          => __( 'Search Portfolio', 'photographer' ),
            'not_found'             => __( 'Not found', 'photographer' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'photographer' ),
            'featured_image'        => __( 'Featured Image', 'photographer' ),
            'set_featured_image'    => __( 'Set featured image', 'photographer' ),
            'remove_featured_image' => __( 'Remove featured image', 'photographer' ),
            'use_featured_image'    => __( 'Use as featured image', 'photographer' ),
            'insert_into_item'      => __( 'Insert into item', 'photographer' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'photographer' ),
            'items_list'            => __( 'Portfolio list', 'photographer' ),
            'items_list_navigation' => __( 'Portfolio list navigation', 'photographer' ),
            'filter_items_list'     => __( 'Filter Portfolio list', 'photographer' ),
        );
        $args = array(
            'label'               => __('Portfolio', 'photographer'),
            'labels'              => $labels,
            'hierarchical'        => false,
            'description'         => __('Portfolio post type.', 'photographer'),
            'supports'            => array( 'title', 'thumbnail' ),
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu-icon'           => 'dashicons-images-alt2',
            'show_in_nav_menus'   => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'has_archive'         => true,
            'query_var'           => true,
            'can_export'          => true,
            'rewrite'             => true,
            'capability_type'     => 'post'
        );

        register_post_type( 'portfolio', $args );

    }
    add_action( 'init', 'photographer_portfolio_custom_post_type', 0 );

    // Register Custom Taxonomy
    function photographer_album_custom_taxonomy() {

        $labels = array(
            'name'                       => _x( 'Albums', 'Taxonomy General Name', 'photographer' ),
            'singular_name'              => _x( 'Album', 'Taxonomy Singular Name', 'photographer' ),
            'menu_name'                  => __( 'Album', 'photographer' ),
            'all_items'                  => __( 'All Albums', 'photographer' ),
            'parent_item'                => __( 'Parent Album', 'photographer' ),
            'parent_item_colon'          => __( 'Parent Album:', 'photographer' ),
            'new_item_name'              => __( 'New Album Name', 'photographer' ),
            'add_new_item'               => __( 'Add New Album', 'photographer' ),
            'edit_item'                  => __( 'Edit Album', 'photographer' ),
            'update_item'                => __( 'Update Album', 'photographer' ),
            'view_item'                  => __( 'View Album', 'photographer' ),
            'separate_items_with_commas' => __( 'Separate Albums with commas', 'photographer' ),
            'add_or_remove_items'        => __( 'Add or remove Albums', 'photographer' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'photographer' ),
            'popular_items'              => __( 'Popular Albums', 'photographer' ),
            'search_items'               => __( 'Search Albums', 'photographer' ),
            'not_found'                  => __( 'Not Found', 'photographer' ),
            'no_terms'                   => __( 'No Albums', 'photographer' ),
            'items_list'                 => __( 'Albums list', 'photographer' ),
            'items_list_navigation'      => __( 'Albums list navigation', 'photographer' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,
            'show_tagcloud'              => true,
        );
        register_taxonomy( 'album', array( 'portfolio' ), $args );

    }
    add_action( 'init', 'photographer_album_custom_taxonomy', 0 );

?>