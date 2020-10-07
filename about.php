<?php 
//Template Name: About Template
//Author: Jahidul Islam
get_header();
?>


<!--Inner Heading Start-->
<div class="inner-heading">
  <div class="container">
    <h1>About Us</h1>
  </div>
</div>
<!--Inner Heading End--> 

<!--About Start-->
<div class="about-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="title">
          <h1>Welcome To <span>Education</span></h1>
        </div>
        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac erat a diam rutrum laoreet. Cras vitae fringilla turpis. In laoreet nunc vel lacinia luctus. Nullam suscipit volutpat magna, vel tempus mauris auctor non. Duis nec orci egestas, hendrerit purus non, egestas diam. Donec viverra arcu quam, vel aliquam libero sagittis ut. Aenean non mauris vel nisl pulvinar malesuada ut non dui. </p>
        <ul class="row iconsWrp">
          <li class="col-lg-4 col-md-4">
            <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-home" aria-hidden="true"></i></a>
              <h6>Active Learning</h6>
            </div>
          </li>
          <li class="col-lg-4 col-md-4">
            <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-university" aria-hidden="true"></i></a>
              <h6>Books & Library</h6>
            </div>
          </li>
          <li class="col-lg-4 col-md-4">
            <div class="icon-box iconbox-theme-colored"> <a class="icon-wrap icon-dark icon-circled icon-border-effect effect-circled icon-lg" href="#"> <i class="fa fa-building" aria-hidden="true"></i></a>
              <h6>Learning & Fun</h6>
            </div>
          </li>
        </ul>
        <div class="readmore"><a href="#">Read More <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
      </div>
      <div class="col-lg-6">
        <div class="aboutImg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-sec-img.png" alt=""></div>
      </div>
    </div>
  </div>
</div>
<!--About End--> 
<?php get_footer();?>