<?php

 
 add_theme_support( 'title-tag' );
 load_theme_textdomain("wp-news"); 
 add_theme_support("post-thumbnails");


 

 function themename_custom_logo_setup() {
 $defaults = array(
		'height'      => 50,
		'width'       => 400,
		'flex-height' => false,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
 );
   add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



	 

require get_template_directory().'/inc/wp-news_assets.php'; 
	 

 


