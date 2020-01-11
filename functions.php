<?php



     load_theme_textdomain("wp-news"); 
     add_theme_support("post-thumbnails"); 
     add_theme_support("title-tag");                                     

 

require get_template_directory() . '/inc/wp-news_assets.php';




function wp_news_manus() {
  register_nav_menus(
    array(
      'wp_main-menu' => __( 'Main Menu' ),
      'wp_flying-menu' => __( 'Flying  Menu'),
      'wp_mobile-menu' => __( 'Mobile  Menu')
    )
  );
}
add_action( 'init', 'wp_news_manus' );


