<?php



require_once(get_template_directory() . '/inc/enqueue.php');
require_once(get_template_directory() . '/inc/theme-setup.php');


//wp dropdown menu dynamic using nav walkar class
require get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';
require_once(get_template_directory() . '/inc/nav-walker.php');

// Hooking up our function to theme setup




// Creating a Deals Custom Post Type
function crunchify_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Photo Gallery' ),
		'singular_name'       => __( 'Deal'),
		'menu_name'           => __( 'Photo Gallery'),
		'parent_item_colon'   => __( 'Parent Deal'),
		'all_items'           => __( 'All Photo Gallery'),
		'view_item'           => __( 'View Photo'),
		'add_new_item'        => __( 'Add New Photo'),
		'add_new'             => __( 'Add New Photo'),
		'edit_item'           => __( 'Edit Photo'),
		'update_item'         => __( 'Update Photo'),
		'search_items'        => __( 'Search Photo'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);


	$args = array(
		'label'               => __( 'Photo Gallery Type'),
		'description'         => __( 'Best Crunchify Deals'),
		'labels'              => $labels,
		// 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	    'yarpp_support'       => true,

		// 'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		// 'capability_type'     => 'page'
);
register_post_type( 'photo_garllery', $args );


}
add_action( 'init', 'crunchify_deals_custom_post_type', 0 );






// // Let us create Taxonomy for Custom Post Type
// add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
 
// //create a custom taxonomy name it "type" for your posts
// function crunchify_create_deals_custom_taxonomy() {
 
//   $labels = array(
//     'name' => _x( 'Types', 'taxonomy general name' ),
//     'singular_name' => _x( 'Type', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Types' ),
//     'all_items' => __( 'All Types' ),
//     'parent_item' => __( 'Parent Type' ),
//     'parent_item_colon' => __( 'Parent Type:' ),
//     'edit_item' => __( 'Edit Type' ), 
//     'update_item' => __( 'Update Type' ),
//     'add_new_item' => __( 'Add New Type' ),
//     'new_item_name' => __( 'New Type Name' ),
//     'menu_name' => __( 'Types' ),
//   ); 	
 
//   register_taxonomy('types',array('photo_garllery'), array(
//     'hierarchical' => true,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_admin_column' => true,
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'type' ),
//   ));
// }



function custom_rest_api()
{

	register_rest_route('custom/v1','myapi', array(
		'methods' => 'GET',
		'callback' => 'custom_api_callback_function' 
		));
}
add_action('rest_api_init','custom_rest_api');


function custom_api_callback_function(){

		return rest_ensure_response("kamlah jahangir");	
}
