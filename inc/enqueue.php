<?php



if (!function_exists('shikkhanschool_css_js')) 
{
	# code...
	function shikkhanschool_css_js()
	{
		wp_enqueue_style( 'shikkhanschool_bootstrap_min_css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all' );

		wp_enqueue_style( 'shikkhanschool_font_awesome_css', get_template_directory_uri().'/assets/css/font-awesome.css', array(), '1.0.0', 'all' );

		wp_enqueue_style( 'shikkhanschool_settings', get_template_directory_uri().'/assets/rs-plugin/css/settings.css', array(), '1.0.0', 'all' );

		wp_enqueue_style( 'shikkhanschool_fancybox', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'shikkhanschool_owl_carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0.0', 'all' );
		wp_enqueue_style( 'shikkhanschool_assets_style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all' );



		//theme javascript stype support
		wp_enqueue_script( 'shikkhanschool_slim', get_template_directory_uri().'/assets/js/jquery-3.2.1.slim.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_bootstrap_min_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_themepunch_tools_min_js', get_template_directory_uri().'/assets/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_revolution', get_template_directory_uri().'/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_isotope', get_template_directory_uri().'/assets/js/isotope.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_owl_carousel', get_template_directory_uri().'/assets/js/owl.carousel.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_counter', get_template_directory_uri().'/assets/js/counter.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'shikkhanschool_script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0.0', true );





	
	}
	add_action('wp_enqueue_scripts','shikkhanschool_css_js');
}



?>