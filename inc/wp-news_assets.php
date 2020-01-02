<?php  



		





function boxCssAndJs(){
 
	  
    wp_register_style('bootstrap','//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');            
     wp_enqueue_style('bootstrap'); 
  wp_register_style('fontawesome','//use.fontawesome.com/releases/v5.5.0/css/all.css');    
    wp_enqueue_style('fontawesome'); 
  wp_register_style('custom-fonts', get_template_directory_uri().'/html/assets/fonts/custom/custom-fonts.css',null,time());
    wp_enqueue_style('custom-fonts');

  wp_register_style('maincss', get_template_directory_uri().'/html/assets/css/style.css');        wp_enqueue_style('maincss');

  wp_register_style('font-awesome', get_template_directory_uri().'syle.css');    wp_enqueue_style('font-awesome');
 


  

	wp_enqueue_script('jqueRy','//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array('jquery'), false,true );
	wp_enqueue_script('bootstrapjs','//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',array( ), false,true );

	wp_enqueue_script('mango-ticker',get_template_directory_uri().'/assets/javascript/mango-ticker-1.0.0.js',array( ), false,true );
	wp_enqueue_script('mainjs',get_template_directory_uri().'/assets/javascript/main.js',array( ), false,true ); 
}

add_action('wp_enqueue_scripts','boxCssAndJs');