<?php

function wkode_files(){
    wp_enqueue_style('wkode_main_styles', get_stylesheet_uri());
    wp_enqueue_script('main-js', get_theme_file_uri('/dist/main.js'), NULL, '1.0', true);
    wp_enqueue_script('owl-js', get_theme_file_uri('/node_modules/owl.carousel/dist/owl.carousel.min.js'), NULL, '1.0', true);
    wp_localize_script('main-js', 'WKodeData', array(
        'root_url' => get_site_url()
    ));
    wp_enqueue_script('wkode-font_awesome', '//kit.fontawesome.com/fde7c29e46.js', NULL, '1.0', true);
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/main.css');
    wp_enqueue_style('owl-css', get_template_directory_uri() . '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');
}

add_action('wp_enqueue_scripts', 'wkode_files');

function wkode_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('cursoImageList', 265, 342, true);
    add_image_size('ProductImageList', 500, 500, true);
    add_image_size('ProductImageList2', 385, 250, true);
    add_image_size('instrutoresImage', 1500, 682, true);
    add_image_size('ProductImageSingle', 800, 1000, true);
}
add_action('after_setup_theme', 'wkode_features');

require_once( 'inc/theme-setup.php' );