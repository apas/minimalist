<?php

add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) ) {
  $content_width = 900;
}

add_action('after_setup_theme', 'minimalist_theme_setup');
 
/**
 * Load translations for wpdocs_theme
 */
function minimalist_theme_setup(){
    load_theme_textdomain('minimalist', get_template_directory() . '/languages');
}

/**
 * Register menus to use in backend.
 *
 */
function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu', 'minimalist' ),
      'sidebar-menu' => __( 'Sidebar Menu', 'minimalist' ),
      'footer-menu' => __( 'Footer Menu', 'minimalist' )
    )
  );
}
add_action( 'init', 'register_menus' );

/**
 * Register sidebars and widgetized areas.
 *
 */
function my_widgets_init() {
 
    register_sidebar( array(
        'name' => 'Main Sidebar',
        'id' => 'main_sidebar',
        'before_widget' => '<aside',
        'after_widget' => '</aside>',
        'before_title' => '<h4 class="rounded">',
        'after_title' => '</h4>',
    ) );
}
add_action( 'widgets_init', 'my_widgets_init' );

?>