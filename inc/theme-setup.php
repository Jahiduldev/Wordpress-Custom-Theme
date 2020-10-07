<?php

$locations = array(
		'header_menu'  => __('Desktop Header Menu', 'shikkhanschool' ),
		'footer_menu' => __( 'Desktop Footer Menu', 'shikkhanschool' ),
	);

register_nav_menus($locations);


// add_theme_support( 'post-thumbnails', array(
//     'height' => 960,
//     'width'  => 640,
// ) );

add_theme_support( 'post-thumbnails');
add_image_size('photo_garllery',640,640, true);


