<?php

/**
 * Register menus to use in backend.
 *
 */
function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'sidebar-menu' => __( 'Sidebar Menu' ),
      'footer-menu' => __( 'Footer Menu' )
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

/**
 * new Option fields in backend in menu settings.
 *
 */
$new_general_setting = new new_general_setting();

class new_general_setting {
    function new_general_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'avatar_url', 'esc_attr' );
        add_settings_field('fav_color', '<label for="avatar_url">'.__('Avatar URL' , 'avatar_url' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'avatar_url', '' );
        echo '<input type="text" id="avatar_url" name="avatar_url" value="' . $value . '" />';
    }
}

?>