<?php

/*-----------------------------------------------------------------------------------*/
/*	Adding Twitter to Profile
/*-----------------------------------------------------------------------------------*/

function sf_contact_info($contactmethods) {
    
    // Unset Irrelevant Methods
    unset($contactmethods['aim']);
    unset($contactmethods['yim']);
    unset($contactmethods['jabber']);
    
    // Set Relevant Methods
    $contactmethods['twitter'] = 'Twitter Username <span class="description">(required)</span>';
    
    // Do Work
    return $contactmethods;
}
add_filter('user_contactmethods', 'sf_contact_info');

/*-----------------------------------------------------------------------------------*/
/*	Make images responsive
/*-----------------------------------------------------------------------------------*/


function responsive_images($atts, $content = null) {
     return '<div class="image-resized">' . $content .'</div>';
}
 
add_shortcode('responsive', 'responsive_images');



/*-----------------------------------------------------------------------------------*/
/*	No Comments Please
/*-----------------------------------------------------------------------------------*/

// Posts & Pages
function sf_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action('init', 'sf_remove_comment_support');

// Admin Bar
function sf_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'sf_admin_bar_render');

/*-----------------------------------------------------------------------------------*/
/*	No Categories or Tags Please
/*-----------------------------------------------------------------------------------*/

function sf_unregister_taxonomy(){
    register_taxonomy('post_tag', array());
    register_taxonomy('category', array());
}
add_action('init', 'sf_unregister_taxonomy');

/*-----------------------------------------------------------------------------------*/
/*	No Unrequired Dashboard Widgets Please
/*-----------------------------------------------------------------------------------*/
function sf_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'sf_remove_dashboard_widgets');


/*-----------------------------------------------------------------------------------*/
/*	Retrieve Featured Images Panel
/*-----------------------------------------------------------------------------------*/

if ( function_exists( 'add_theme_support' ) ) {
add_theme_support( 'post-thumbnails' );
}

