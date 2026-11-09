
<?php

function ecolife_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    register_nav_menus(array(
        'primary' => 'Menu Utama'
    ));
}
add_action('after_setup_theme', 'ecolife_setup');


function ecolife_assets() {
    wp_enqueue_style(
        'ecolife-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'ecolife_assets');


function ecolife_create_default_pages() {
    $pages = array(
        'about' => 'Tentang Kami',
        'contact' => 'Kontak'
    );

    foreach ($pages as $slug => $title) {
        if (!get_page_by_path($slug)) {
            wp_insert_post(array(
                'post_title'  => $title,
                'post_name'   => $slug,
                'post_status' => 'publish',
                'post_type'   => 'page'
            ));
        }
    }
}
add_action('init', 'ecolife_create_default_pages');
