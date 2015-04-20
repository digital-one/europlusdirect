<?php

// Add custom functions
require_once( 'includes/custom-functions.php' ); 


// Add theme support post thumbnails
add_theme_support('post-thumbnails');

// WP menus
add_theme_support( 'menus' );



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

function get_translation_content($languages){
  foreach($languages as $k=>$v):
    if(ICL_LANGUAGE_CODE==$k):
      $page = get_post($v);
      $content = $page->post_content;
      return $content;
      endif;
    endforeach;
}


add_filter("gform_ajax_spinner_url", "spinner_url", 10, 2);
function spinner_url($image_src, $form){
    return get_template_directory_uri()."/images/ajax-loader.gif";
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

function gform_column_splits($content, $field, $value, $lead_id, $form_id) {
if(!is_admin()) { // only perform on the front end
    if($field['type'] == 'section') {
        $form = RGFormsModel::get_form_meta($form_id, true);

        // check for the presence of multi-column form classes
        $form_class = explode(' ', $form['cssClass']);
        $form_class_matches = array_intersect($form_class, array('two-column', 'three-column'));

        // check for the presence of section break column classes
        $field_class = explode(' ', $field['cssClass']);
        $field_class_matches = array_intersect($field_class, array('gform_column'));

        // if field is a column break in a multi-column form, perform the list split
        if(!empty($form_class_matches) && !empty($field_class_matches)) { // make sure to target only multi-column forms

            // retrieve the form's field list classes for consistency
            $form = RGFormsModel::add_default_properties($form);
            $description_class = rgar($form, 'descriptionPlacement') == 'above' ? 'description_above' : 'description_below';

            // close current field's li and ul and begin a new list with the same form field list classes
            return '</li></ul><ul class="gform_fields '.$form['labelPlacement'].' '.$description_class.' '.$field['cssClass'].'"><li class="gfield gsection empty">';

        }
    }
}
return $content;
}

add_filter('gform_field_content', 'gform_column_splits', 100, 5);
