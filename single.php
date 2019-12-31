<?php get_header(); ?>

 

   <section class="wp-news_single-post" <?php post_class(); ?>>
      <div class="container">
         <div class="row"> 
         <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 p-0">
                     <div class="wp-news_post-date">
                         <i class="fas fa-user"><span>ডেস্ক</span></i>
                         <i class="far fa-clock"><span>১৫ ডিসেম্বর ২০১৯, ০০:০০</span></i> 
                         <i class="fas fa-print"></i> 
                     </div><!--/.wp-news_post-date-->
                     <?php while(have_posts()) : the_post(); ?>
                     <div class="wp-news_single-content"> 

                         <div class="post-image "> 
                         	<?php 
                         	    if (has_post_thumbnail()) {
                                     the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid img-thumbnail', 'title' => 'Feature image']);
                                     }  
 								?>  
                             <!--  <img src="https://via.placeholder.com/1920x1080" alt="wpnews" class="img-fluid img-thumbnail"> -->
                             <p class="post-image-details">লেগ স্পিনার আমিনুল প্রথম ম্যাচে ভালো করেছেন। কিন্তু বাকিদের অবস্থা কি! ফাইল ছবি, প্রথম আলো</p> 
                         </div> 
                          <p class="wp-news_post-content"> 
                         	 <?php the_content(); ?>   
                         </p>
                       <?php endwhile; ?> 

                         <div class="single-post-share">  
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-pinterest-p"></i>
                            <i class="fas fa-print"></i>
                         </div><!--/.single-post-share-->
                         <div class="single-post-comments">   
                         </div><!--/.single-post-comments-->
                         
             
                         
                     </div><!--/..wp-news_single-content-->
                     <div class="single-post_more-posts">
                         <div class="row">
                             <div class="col-md-12 p-1">
                                <h2 class="single-post_more-title">প্রথম পাতা থেকে</h2>  
                             </div>



 
                             </div>


                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                             <div class="col-md-3 p-1">
                                  <div class="single-post_more-post">
                                    <a href="post.html">
                                      <img src="https://via.placeholder.com/370x250" alt="wpnews" class="img-fluid img-thumbnail">
                                      <h3 class="featured-post-title">ছেলে হত্যার বিচার দেখে যেতে পারলেন না অধ্যাপক অজয় রায়.</h3> 
                                    </a>
                                  </div>
                             </div>
                         </div>
                       
                     </div><!--/.single-post_more-post--> 
                </div><!--/.col-md-12-->
                <div class="col-md-12">
                  
                </div><!--/.col-md-12-->
              
            </div> 
         </div>
         <div class="col-md-4">
               <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active top-tab-title" data-toggle="tab" href="#awTab1">সর্বাধিক পঠিত</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link top-tab-title" data-toggle="tab" href="#awTab2"> সাম্প্রতিক খবর</a>
                    </li> 
                     
                  </ul>
                
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div id="awTab1" class="tab-pane active"><br>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

 

 

                    </div> <!--/.end first content-->
                    <div id="awTab2" class="tab-pane"><br>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

                      <a href="post.html">
                        
                       <div class="row">
                         <div class="col-xl-5 col-md-6 col-4 margin-bt">
                             <div class="tab-thumbs-wpnews">
                                <img class="img-fluid img-thumbnail" src="https://via.placeholder.com/200x120" alt="wpnews"> 
                             </div>
                         </div><!--/.col-md-4-->
                         <div class="col-xl-7 col-md-6 col-8">
                             <div class="tab-title-wpnews">
                                 <h3>ম্যাচে মাত্র একটিতে জয় পাওয়া ওয়েস্ট হ্যাম</h3> 
                             </div>
                         </div>
                         <!--/.end content block--> 
                       </div>

                      </a>

 

 
                   </div><!--/.end second tab-->
 
                   
                  </div>
            </div>
           
         </div>
         </div>
         
      </div>
   </section>
    <!--/============ wp-news_single-post    ===========  -->  

 
 

 
 
 

    
 

<?php get_footer(); ?>