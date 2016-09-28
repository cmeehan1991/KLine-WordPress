<?php


// News and Announcements Post Type
function news_post_type() {
    register_post_type('news', array(
        'labels' => array(
            'name' => 'News & Announcements',
            'singular_name' => ('News'),
        ),
        'public' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'news'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'=>array('category')
            )
    );
    add_theme_support('post-thumbnails', array('post', 'news'));
}

add_theme_support('post-thumbnails', array('post', 'news'));
add_action('init', 'news_post_type');

//Testimonials Post Type
function testimonials_post_type() {
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => ('Testimonial'),
        ),
        'public' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonial'),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'taxonomies'=>array('category')
            )
    );
    add_theme_support('post-thumbnails', array('post', 'testimonials'));
}

add_theme_support('post-thumbnails', array('post', 'testimonials'));
add_action('init', 'testimonials_post_type');
