<?php

function wp_news_assets(){
 
	  
    wp_register_style('bootstrap','//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');           
     wp_enqueue_style('bootstrap');	  
    wp_register_style('fontawesome','//use.fontawesome.com/releases/v5.5.0/css/all.css');           
     wp_enqueue_style('fontawesome'); 
    wp_register_style('custom-fonts', get_template_directory_uri().'/html/assets/fonts/custom/custom-fonts.css');      
     wp_enqueue_style('custom-fonts'); 
    wp_register_style('main-css', get_template_directory_uri().'/html/assets/css/style.css');      
     wp_enqueue_style('main-css'); 
    wp_register_style('theme-css', get_template_directory_uri().'/style.css');      
     wp_enqueue_style('theme-css'); 


  

	  wp_enqueue_script('jqueRy','//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array('jquery'), false,true );
	  wp_enqueue_script('boot-js','//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array('jquery'), false,true ); 
	  wp_enqueue_script('mango',get_template_directory_uri().'/html/assets/javascript/mango-ticker.js',array('jquery' ), false,true );
	  wp_enqueue_script('main-js',get_template_directory_uri().'/html/assets/javascript/main.js',array( ), false,true );

 

}

add_action('wp_enqueue_scripts','wp_news_assets');