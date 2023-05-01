<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails', ['post', 'page', 'real-state', 'advante']);
add_theme_support('html5');

add_theme_support('custom-header');

add_post_type_support("page", "excerpt");


function real_state_enqueue_styles()
{
    // wp_enqueue_style ( 'custom-font-awesome', get_theme_file_uri('/css/all.min.css'), array () );
    
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
    wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/css/main.css', ['main-css'], time(), 'all');

    wp_enqueue_script( 'main.js', get_stylesheet_directory_uri() . '/assets/js/main.js', ['jquery'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'real_state_enqueue_styles');


register_nav_menus([
    'main-menu' => esc_html__('Main Menu', 'real-state'),
    'service-footer-menu' => esc_html__('Service Footer Menu', 'real-state'),
    'community-footer-menu' => esc_html__('Community Footer Menu', 'real-state'),
]);


function real_state_widgets_init()
{
    register_sidebar([
        'name' => esc_html__('Footer-1', 'real-state'),
        'id' => 'footer-1',
        'before_widget' => '<div class="follow_us_link_container">',
        'after_widget'  => '</div>',
        'before_title'  => '<p class="footerSubHeading subText1">',
        'after_title'   => '</p>',
    ]);
    
}

add_action('widgets_init', 'real_state_widgets_init');