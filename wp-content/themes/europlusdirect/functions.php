<?php

// Add custom functions
require_once( 'includes/custom-functions.php' ); 


// Add theme support post thumbnails
add_theme_support('post-thumbnails');

// WP menus
add_theme_support( 'menus' );


// Add image sizes
add_image_size( 'slide', 1920, 1200, true );
add_image_size( 'large-image', 620, 370, true );
add_image_size( 'medium-image', 410, 246, true );
set_post_thumbnail_size( 150, 150,false); 

add_editor_style('css/style.css');
add_editor_style('css/editor-style.css');

// Change default excerpt
function new_excerpt_more( $more ) {
	//return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
	return '&hellip;';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

add_filter("gform_confirmation_anchor", create_function("","return false;"));



function get_excerpt($post,$count){

  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'&hellip;';
  return $excerpt;
}


add_filter('manage_post_posts_columns', 'posts_columns_head', 10);
add_action('manage_post_posts_custom_column', 'posts_columns_content', 10, 2);


 function posts_columns_head($defaults) {
    $defaults['featured']  = 'Featured';
    $defaults['popular'] = 'Most Popular';
    return $defaults;
}
 
function posts_columns_content($column_name, $post_ID) {
    if ($column_name == 'featured') {
        $featured = get_field('featured_post',$post_ID) ? 'Yes' : 'No';
        echo $featured;
    }
    if ($column_name == 'popular') {
         $popular = get_field('popular_post',$post_ID) ? 'Yes' : 'No';
        echo $popular;
    }
}
