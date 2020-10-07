<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Open Sans Family -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Roboto Family -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet">
    <title>Shikkhan School</title>
    <?php wp_head(); ?>
    </head>
    <body>
    
    <!--Header Start-->
    <div class="header-wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="logo"><a href="index.php"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.jpg" alt=""></a></div>
          </div>
          <div class="col-lg-8"> 
            
            <!--Navegation Start-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container"> <a class="navbar-brand" href="#">Menu</a>
                <div class="navbar-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                </div>


                <?php 

                    if ( has_nav_menu( 'header_menu' ) ) 
                    {
                         wp_nav_menu(array(
                            'theme_location' => 'header_menu',
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarColor01',
                            'menu_class' => 'navbar-nav mr-auto',
                            'walker' => new WP_Bootstrap_Navwalker()
                        ));
                    }



                 
                ?>


               <!--  <div class="collapse navbar-collapse" id="navbarColor01">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></li>

                    <li class="nav-item"> <a class="nav-link" href="#">About us</a> <i class="fa fa-caret-down" aria-hidden="true"></i>
                      <ul class="submenu">
                        <li><a href="about.php">About us</a></li>
                        <li><a href="#">Message from the Chairman</a></li>
                      </ul>
                    </li>


                    <li class="nav-item"> <a class="nav-link" href="about.php">Activities</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="about.php">Facilities</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="gallery.php">Photo Gallery</a> </li>

                    <li class="nav-item"> <a class="nav-link" href="contact-us.php">Contact</a> </li>
                  </ul>
                </div> -->




              </div>
            </nav>
            
            <!--Navegation End--> 
          </div>
        </div>
      </div>
    </div>
    <!--Header End--> 