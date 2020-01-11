<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wp News - Professional WordPress Theme For News Publisher</title>
    
 
  

    <?php wp_head();?>

</head>
<body <?php body_class(); ?>>
    <header class="header-area-one">
          <div class="container">
             <div class="header-top-one desktop-version"> 
                <div class="row padding-tb"> 
                    <div class="col-xl-3 col-md-3 col-6">
                        <div class="logo-area-one">
                            <!-- <h1>WP News <br/> <span>Wordpress news template</span></h1> -->
                            <a href="#"> <h1> <img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/logo.png" alt="wpnews"/><br/>  </h1> </a>
                            <h5> The News Publisher For Everyone</h5>
                        </div><!--/.logo-->
                    </div><!--/.end col md 6-->
                    <div class="col-xl-8 col-md-7 col-2">

                       <?php wp_nav_menu( array(
                         'container'       => 'div',
                         'container_class' => 'main-menu-one',
                         'theme_location'  => 'wp_main-menu'
                       ));
                       ?> 
                    </div><!--/.end col md 8-->

                    <div class="col-xl-1 col-md-2 col-4 header-top-right-side text-right">
                        <span class="flymenu-icon"><i class="fa fa-bars"></i></span>
                        <span class="top-search-icon"><i class="fa fa-search"></i></span> 
                    </div><!--/.end col md 1--> 
                </div> <!--/.row-->  
            
             <div class="wpnews-search-box">
                <div class="container text-center">
                      <input type="search" class="nav-search-box" placeholder="কি খুঁজতে চান">
                      <span class="top-search-icon"><i class="fa fa-search"></i></span> 
                     <span class="close-search-box"><i class="fa fa-times"></i></span>
                  
                </div>
              </div><!--/.wpnews-search-boxp-->  
            </div> <!--/.header top one-->
           </div>
        <div class="fly-menu">   
           <div class="fly-menu-wrapper"> 
             <div class="container"> 

                <div class="row padding-tb">
                    <div class="col-xl-3 col-md-3 col-6">
                        <div class="logo-area-one">
                            <!-- <h1>WP News <br/> <h5>Wordpress news template</h5></h1> -->
                            <a href="#"> <h1> <img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/logo.png" alt="wpnews"/><br/>  </h1> </a>
                             <h5> The News Publisher For Everyone</h5>
                        </div><!--/.logo-->
                    </div><!--/.end col md 6-->
                    <div class="col-xl-8 col-md-7 col-1"> 
                    </div><!--/.end col md 8--> 
                    <div class="col-xl-1 col-md-2 col-5 header-top-right-side text-right">
                       <span class="close-fly-menu flymenu-icon"><i class="fa fa-times"></i></span>  
                       <span class="top-search-icon"><i class="fa fa-search"></i></span>  
                    </div><!--/.end col md 1-->  
                </div> <!--/.row-->

                 <div class="row">
                    <div class="col-md-12">
                       <div class="fly-menu-top">


                       <?php wp_nav_menu( array(

                             'theme_location'  => 'wp_flying-menu', 
                             'container'       => false,
                             'container_class' => '',
                             'container_id'    => '',
                             'menu'            => '',
                             'menu_class'      => 'menu',
                             'menu_id'         => '',
                             'echo'            => true,
                             'fallback_cb'     => 'wp_page_menu',
                             'before'          => '',
                             'after'           => '', 
                             'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                             'item_spacing'    => 'preserve',
                             'depth'           => 0,
                             'walker'          => '',
                       ));
                       ?> 


                       </div>  <!--fly-menu-top-->
                     </div>
                     <div class="col-md-12">
                         <div class="row fly-menu-bottom">
                            <div class="col-xl-8 col-md-12 col-12">
                               <div class="row">                            
                                    <div class="col-xl-3 col-md-4 col-6 p-0">
                                    <a href="#">
                                    <span><i class="fas fa-file-alt"></i></span>আজকের পত্রিকা 
                                    </a> 
                                    </div>
                                    
                                    <div class="col-xl-3 col-md-4 col-6 p-0">
                                    <a href="#">
                                    <span><i class="fas fa-file-contract"></i>ই-পেপার </span>
                                    </a> 
                                    </div>
                                    
                                    <div class="col-xl-3 col-md-4 col-6 p-0"> 
                                    <a href="#">
                                    <span><i class="fas fa-images"></i></span>ছবিু 
                                    </a> 
                                    </div>
                                    
                                    <div class="col-xl-3 col-md-4 col-6 p-0">
                                    <a href="#">
                                    <span><i class="fas fa-video"></i></span>ভিডিও 
                                    </a> 
                                    </div>
                                    
                                    <div class="col-xl-3 col-md-4 col-6 p-0"> 
                                    <a href="archive.html">
                                    <span><i class="fas fa-file-archive"></i></span>আর্কাইভ 
                                    </a>
                                    </div>
                                    
                                    <div class="col-xl-3 col-md-4 col-6 p-0">      
                                    <a href="archive.html">
                                    <span><i class="fas fa-bullhorn"></i></span>বিজ্ঞাপন 
                                    </a> 
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-4">  </div>   
                         </div> 
                     </div>
                 </div><!--/.flying-header-top-one--> 
               
                 <div class="row">
                    <div class="col-md-12">
                      <div class="fly-menu-buttom">
                      </div><!--/.fly-menu-buttom--> 
                 </div>
               </div>

             </div>   
           </div><!--/.fly-menu-wrapper--> 
        </div><!--/.fly-menu-->
        <div class="container">
          
 <div class="mobile-menu">
     <div class="row mobile-menu-head">
        <div class="col-sm-6 col-6">
          
                        <div class="logo-area-one">
                            <!-- <h1>WP News <br/> <h5>Wordpress news template</h5></h1> -->
                            <a href="#"> <h1> <img src="<?php echo esc_url(get_stylesheet_directory_uri());?>/assets/images/logo.png" alt="wpnews"/><br/>  </h1> </a>
                            <h5> The News Publisher For Everyone</h5>
                        </div><!--/.logo-->
        </div>
        <div class="col-sm-6 col-6 mobile-icon">
              <span class="float-right open-mobile-menu"><i class="fa fa-bars"></i></span>  
         <!--      <span class="float-right close-mobile-menu"><i class="fa fa-times"></i></span> -->  
        </div>
     </div>
     <div class="row">
        <div class="col-md-12">
             <div class="mobile-full-menu">
               <ul id="nagigation">
                 <li style="cursor: pointer !important;"><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#" class="dropdown-open">বাংলাদেশ >></a>
 
          <ul class="dropdown-mobile-menu">
            <li><a href="">Item 11</a></li>
            <li><a href="">Item 12</a></li>
            <li><a href="">Item 13</a></li>
            <li><a href="">Item 14</a></li>
          </ul>

                 </li>

                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li> 
                 <li><a href="#">বাংলাদেশ</a></li>  
               </ul> 
             </div>
 
        </div>
       
     </div>
 
  </div><!--/.mobile-menu-->
 
      </div><!--/.container-->
               
        </div>
        </div>

        <div class="container">
                  <div class="news-ticker">
                       <div class="row">
                               
                            <div class="col-xl-1 col-md-2 col-3 pr-0" > 
                               <h3 class="news-ticker-title">সর্বশেষ</h3>  
                            </div>

                             <div class="col-xl-11 col-md-10 col-9 pl-0"> 
                                 <div id="ticker-box"> 
                                 <ul>
                                  <li><a href="#">১৬ ডিসেম্বগান ব্যবহার করতে হবে। এই মোখিক নির সর্বোচ্চ পর্যায়ের ব্যক্তিরা তাদের ভাষণের শুরুতে ও শেষে জয় বাংলা স্লোগান দেবে</a></li>
                                  <li><a href="#">১৬ ডিসেম্বগান ব্যবহার করতে হবে। এই মোখিক নির সর্বোচ্চ পর্যায়ের  ব্যক্তিরা তাদের ভাষণের শুরুতে ও শেষে জয় বাংলা স্লোগান দেবে</a></li>
                                  <li><a href="#">১৬ ডিসেম্বগান ব্যবহার করতে হবে। এই মোখিক নির সর্বোচ্চ পর্যায়ের ব্যক্তিরা তাদের ভাষণের শুরুতে ও শেষে জয় বাংলা স্লোগান দেবে</a></li> 
                                 </ul>
                                 </div>
                              </div> 
                     </div> 
                 </div>
        </div><!--/.news-ticker--> 



        <div class="header-bottom-one margin-tb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="date-area">
                            <p> ঢাকা  বুধবার, ২০ ফেব্রুয়ারি ২০১৯, ৮ ফাল্গুন ১৪২৫, ১৪ জমাদিউস সানি ১৪৪০	 আপডেট ১ ঘন্টা ৫৪ মিনিট আগে</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-1">
                        <div class="horizontal-ad-section">
                          <img class="img-thumbnail" src="https://via.placeholder.com/500x70" alt="wpnews"> 
                        </div>
                    </div>
 
                </div><!--/.row-->
            </div>
            <!--/.end col md 6-->
          </div>
        </div>
        <!--/.header bottom area one-->
    </header>
    <!--/============ End Header ===========  -->