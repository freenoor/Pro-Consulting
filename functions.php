<?php
/**
 * Loads scripts
 * css
 * js
 * bootstrap
 */
function style_on_load()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0.2', 'all');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '2.0.2', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/styles/style.css', array(), '1.0.2', 'all');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/style.css', array(), '1.0.2', 'all');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/swiper/css/swiper.min.css', array(), '1.0.2', 'all');
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/swiper/js/swiper.min.js', array(), true);
    wp_enqueue_script('jquery-min.js', get_template_directory_uri() . '/assets/jquery/jquery.min.js', array(), '1.12.0', 'all');
    wp_enqueue_script('jquery-waypoints.js', get_template_directory_uri() . '/assets/jquery/jquery.waypoints.js', array(), true);
    wp_enqueue_script('jquery-counterup.js', get_template_directory_uri() . '/assets/jquery/jquery.counterup.js', array(), true);

}
add_action('wp_enqueue_scripts', 'style_on_load');


register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
));


add_theme_support("custom-logo");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");


function strappress_widgets_init()
{
register_sidebar(array(
    'name' => esc_html__('Direction', 'strappress'),
    'id' => 'directions_map',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Logo', 'strappress'),
    'id' => 'widget-1',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Phone Numbers', 'strappress'),
    'id' => 'widget-2',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Email', 'strappress'),
    'id' => 'widget-3',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Address', 'strappress'),
    'id' => 'widget-4',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Our Services', 'strappress'),
    'id' => 'widget-5',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Links', 'strappress'),
    'id' => 'widget-6',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Footer Contacts', 'strappress'),
    'id' => 'widget-7',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Contact Form', 'strappress'),
    'id' => 'contactform',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Footer Copyright', 'strappress'),
    'id' => 'widget-9',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
register_sidebar(array(
    'name' => esc_html__('Single Page Button', 'strappress'),
    'id' => 'all_servicesbutton',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
));
}
add_action('widgets_init', 'strappress_widgets_init');

//Custom Post Types


function custom_post_type(){
    
    $labels_frontpage = array(
        'name' => 'Shërbimet',
    );
    register_post_type('services', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
			'page-attributes',
        ),
        'menu_position' => 6,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-cart',
    ));
    $labels_frontpage = array(
        'name' => 'Partnerët',
    );
    register_post_type('partners', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-rest-api',
    ));
    $labels_frontpage = array(
        'name' => 'Testimonials',
    );
    register_post_type('testimonials', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-groups',
    ));
    $labels_frontpage = array(
        'name' => 'Percentage',
    );
    register_post_type('percentage', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-chart-area',
    ));

    $labels_frontpage = array(
        'name' => 'Slider',
    );
    register_post_type('sliderhome', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
    ));
}
add_action('init', 'custom_post_type');


//Ajax Request

function blog_scripts() {
    // Register the script
    wp_register_script( 'custom-script', get_stylesheet_directory_uri(). '/assets/js/custom.js', array('jquery'), false, true );
 
    // Localize the script with new data
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'load_more_posts' ),
    );
    wp_localize_script( 'custom-script', 'blog', $script_data_array );
 
    // Enqueued script with localized data.
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );
add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');



