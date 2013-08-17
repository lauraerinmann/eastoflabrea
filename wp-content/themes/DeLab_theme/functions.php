<?php register_nav_menus(); ?> 
<?php
function delabtheme_filter_wp_title( $currenttitle, $sep, $seplocal ) {
	//gets the website name
	$site_name = get_bloginfo( 'name' );
	//add site name after current page title
	$full_title = $site_name . $currentitle;
	//if not on front_page/homepage append string description
	if( is_front_page() || is_home() ) {
	//get site description
		$site_desc = get_bloginfo( 'description' );
		//append site description to title
		$full_title .= ' ' . $sep . ' ' . $site_desc;
	}
	return $full_title;
}
//hook into wp_title
add_filter( 'wp_title', 'delabtheme_filter_wp_title', 10, 3 );

