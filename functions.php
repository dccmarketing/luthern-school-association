<?php
/* Functions used for LSA */

// Registering a new thumbnail size for use on the home page

/*if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'featured-img', 580, 254, true );	
}
*/

add_filter( 'show_admin_bar', '__return_false' ); 


//______________________________________________________________________________
// Returns top level parent - even from grandchild, great-grandchild pages
// $pageid - the current post's id
// 
function get_top_ancestor($pageid) {
	$current = get_post($pageid);
	if (!$current->post_parent) {
		return $current->ID;
	} else {
		return get_top_ancestor($current->post_parent);
	}
}