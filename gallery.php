
<?php 
//Template Name: Gallery page
//Author: Jahidul Islam
get_header();

?>

<div class="inner-heading">
  <div class="container">
    <h1>Gallery</h1>
  </div>
</div>
<!-- Inner Heading end -->

  


<div class="inner-content">
  <div class="container">
    <div class="galleryWrp">
      <ul class="row">



<?php
// The Query
$query = new WP_Query(array('post_type' => 'photo_garllery'));
query_posts( $query );
while ( $query->have_posts() ) : $query->the_post();  

     
 ?>     

        <li class="col-lg-4 col-md-6">
          <div class="galleryImg">

            <?php  the_post_thumbnail(); ?>
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase"><?php  the_title(); ?></div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg01.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>

 <?php       
// The Loop

  // your post content ( title, excerpt, thumb....)
 
endwhile;

// Reset Query
wp_reset_query();
?>

<!-- 

        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg02.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg02.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="images/galleryImg06.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg06.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg04.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
                        
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg04.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg05.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg05.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg03.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg03.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg07.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg07.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg08.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg08.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="galleryImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/galleryImg09.jpg" alt="">
            <div class="jx-portfolio-hoverlayer"></div>
            <div class="jx-portfolio-hover">
              <div class="jx-portfolio-top-hover">
                <div class="jx-title jx-uppercase">Science Class</div>
              </div>
              <div class="jx-portfolio-plus-hover"> <a href="images/galleryImg09.jpg" data-fancybox="gallery">
                <div class="jx-portfolio-link fancybox"><i class="fa fa-link"></i></div>
                </a> </div>
            </div>
          </div>
        </li>

 -->


      </ul>
    </div>
  </div>
</div>
<!--Gallery End--> 
<?php get_footer();?>