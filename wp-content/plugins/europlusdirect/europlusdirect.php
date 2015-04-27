<?php

/**
 * Plugin Name: Europlus Direct
 * Plugin URI: http://www.jumpresponse.co.uk
 * Description: Europlus Direct Theme
 * Version: 0.1
 * Author: Jump Response
 * Author URI: http://www.jumpresponse.co.uk
 * License: Private. Only Jump Response customers are allowed to use this plugin
 */

    class europlusdirect {

        function __construct() {

        	//register custom post types
        	add_action( 'init', array($this,'register_cpt_news'), 0 );
            add_action( 'init', array($this,'register_cpt_testimonial'), 0 );
            add_action( 'init', array($this,'register_cpt_award'), 0 );
             add_action( 'init', array($this,'register_cpt_team'), 0 );
             add_action( 'init', array($this,'register_cpt_question'), 0 );
             add_action( 'init', array($this,'register_cpt_career'), 0 );
             add_action( 'init', array($this,'register_cpt_office'), 0 );
             add_action( 'init', array($this,'register_cpt_download'), 0 );
             add_action( 'init', array($this,'register_cpt_location'), 0 );
            //register custom taxonomies
             add_action('init',array($this,'register_cptax_question_category'),0);
             add_action('init',array($this,'register_cptax_location_service'),0);
            //columns
            add_filter('manage_edit-cpt_team_columns', array($this,'add_cpt_team_columns'));   
            add_action('manage_cpt_team_posts_custom_column',  array($this,'add_cpt_team_custom_columns'),10,2); 

            add_filter('manage_edit-cpt_testimonial_columns', array($this,'add_cpt_testimonial_columns'));   
            add_action('manage_cpt_testimonial_posts_custom_column',  array($this,'add_cpt_testimonial_custom_columns'),10,2); 

            add_filter('manage_edit-cpt_award_columns', array($this,'add_cpt_award_columns'));   
            add_action('manage_cpt_award_posts_custom_column',  array($this,'add_cpt_award_custom_columns'),10,2); 

            add_filter('manage_edit-cpt_career_columns', array($this,'add_cpt_career_columns'));   
            add_action('manage_cpt_career_posts_custom_column',  array($this,'add_cpt_career_custom_columns'),10,2);

            //add_filter( 'admin_post_thumbnail_html', array($this,'add_featured_image_instruction'));

            add_action('wp_ajax_get_locations', array($this, 'ajax_get_locations'));

            //rewrites
            add_action('init', array($this,'add_cpt_news_rewrite_rules'),0);
			add_filter('query_vars',array($this, 'add_cpt_news_query_vars'),0);

			//image sizes
            add_action( 'init', array($this,'image_sizes'), 0 );
			add_filter('image_size_names_choose', array($this,'custom_image_sizes'),0);


			// Image sizes

			

            if( is_admin() ) {



            }

    }

    function ajax_get_locations(){
          if (isset($_POST['service'])):

            $service = (int)$_POST['service'];
            $country = (int)$_POST['country'];

            $args = array(
                'post_type' => 'cpt_location',
                'post_status' => 'publish',
                'numberposts' => -1,
                'orderby' => 'name',
                'order' => 'ASC'
                );
            if(!empty($country)):
                $args['include'] = $country;
            endif;
            if(!empty($service)):
            $args['tax_query'] = array(array('taxonomy'=>'cptax_location_service','field' => 'id','terms' => $service));
             endif;
        /*
                'tax_query' => array(
array(
'taxonomy' =>'category',
'field' => 'slug',
'terms' => 'evil-diaries'
)
),
*/      

        if($locations = get_posts($args)):
            $map_locations = array();
            foreach($locations as $location):
                $geocodes = get_field('location_geocodes',$location->ID);
                $quotation_delivery_times = get_field('quotation_and_delivery_times',$location->ID);
                $rssa = get_field('rssa',$location->ID);

                $map_locations[] = array(
                    'location'=>$location->post_name,
                    'lat' => $geocodes['lat'],
                    'lng' => $geocodes['lng'],
                    'quotation_delivery_times' => $quotation_delivery_times,
                    'rssa' => $rssa
                    );
                endforeach;
                //echo 'ddddd';
                  echo json_encode($map_locations);
            endif;
            endif;
         
        exit();
    }

     // Register Custom Post Type

    function register_cpt_location() {

        $labels = array(
            'name'                => _x( 'Locations', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Location', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Locations', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Location:', 'text_domain' ),
            'all_items'           => __( 'All Locations', 'text_domain' ),
            'view_item'           => __( 'View Location', 'text_domain' ),
            'add_new_item'        => __( 'Add New Location', 'text_domain' ),
            'add_new'             => __( 'Add New Location', 'text_domain' ),
            'edit_item'           => __( 'Edit Location', 'text_domain' ),
            'update_item'         => __( 'Update Location', 'text_domain' ),
            'search_items'        => __( 'Search Locations', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_location', 'text_domain' ),
            'description'         => __( 'Locations', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'locations/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_location', $args );
    }


    function register_cpt_career() {

        $labels = array(
            'name'                => _x( 'Careers', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Vacancy', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Careers', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Vacancy:', 'text_domain' ),
            'all_items'           => __( 'All Vacancies', 'text_domain' ),
            'view_item'           => __( 'View Vacancy', 'text_domain' ),
            'add_new_item'        => __( 'Add New Vacancy', 'text_domain' ),
            'add_new'             => __( 'Add New Vacancy', 'text_domain' ),
            'edit_item'           => __( 'Edit Vacancy', 'text_domain' ),
            'update_item'         => __( 'Update Vacancy', 'text_domain' ),
            'search_items'        => __( 'Search Vacancies', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_career', 'text_domain' ),
            'description'         => __( 'Careers', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'careers/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_career', $args );
    }

    function register_cpt_office() {

        $labels = array(
            'name'                => _x( 'Offices', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Office', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Offices', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Office:', 'text_domain' ),
            'all_items'           => __( 'All Offices', 'text_domain' ),
            'view_item'           => __( 'View Office', 'text_domain' ),
            'add_new_item'        => __( 'Add New Office', 'text_domain' ),
            'add_new'             => __( 'Add New Office', 'text_domain' ),
            'edit_item'           => __( 'Edit Office', 'text_domain' ),
            'update_item'         => __( 'Update Office', 'text_domain' ),
            'search_items'        => __( 'Search Offices', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_office', 'text_domain' ),
            'description'         => __( 'Offices', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'offices/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_office', $args );
    }



      function register_cpt_download() {

        $labels = array(
            'name'                => _x( 'Downloads', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Download', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Downloads', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Download:', 'text_domain' ),
            'all_items'           => __( 'All Downloads', 'text_domain' ),
            'view_item'           => __( 'View Download', 'text_domain' ),
            'add_new_item'        => __( 'Add New Download', 'text_domain' ),
            'add_new'             => __( 'Add New Download', 'text_domain' ),
            'edit_item'           => __( 'Edit Download', 'text_domain' ),
            'update_item'         => __( 'Update Download', 'text_domain' ),
            'search_items'        => __( 'Search Downloads', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_download', 'text_domain' ),
            'description'         => __( 'Downloads', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'downloads/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_download', $args );
    }


    function register_cpt_news() {

        $labels = array(
           	'name'                => _x( 'News', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'News', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'News', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Article:', 'text_domain' ),
            'all_items'           => __( 'All News', 'text_domain' ),
            'view_item'           => __( 'View News', 'text_domain' ),
            'add_new_item'        => __( 'Add New Article', 'text_domain' ),
            'add_new'             => __( 'Add New Article', 'text_domain' ),
            'edit_item'           => __( 'Edit Article', 'text_domain' ),
            'update_item'         => __( 'Update Article', 'text_domain' ),
            'search_items'        => __( 'Search News', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_news', 'text_domain' ),
            'description'         => __( 'News', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'news/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_news', $args );
    }


        function register_cpt_testimonial() {

        $labels = array(
           	'name'                => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Testimonials', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Testimonial:', 'text_domain' ),
            'all_items'           => __( 'All Testimonials', 'text_domain' ),
            'view_item'           => __( 'View Testimonial', 'text_domain' ),
            'add_new_item'        => __( 'Add New Testimonial', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Testimonial', 'text_domain' ),
            'update_item'         => __( 'Update Testimonial', 'text_domain' ),
            'search_items'        => __( 'Search Testimonials', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_testimonial', 'text_domain' ),
            'description'         => __( 'Testimonials', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 10,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'testimonials/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_testimonial', $args );
    }

     function register_cpt_award() {

        $labels = array(
            'name'                => _x( 'Awards', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Award', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Awards', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Award:', 'text_domain' ),
            'all_items'           => __( 'All Awards', 'text_domain' ),
            'view_item'           => __( 'View Award', 'text_domain' ),
            'add_new_item'        => __( 'Add New Award', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Award', 'text_domain' ),
            'update_item'         => __( 'Update Award', 'text_domain' ),
            'search_items'        => __( 'Search Awards', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_award', 'text_domain' ),
            'description'         => __( 'Awards', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 15,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'awards/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_award', $args );
    }


       function register_cpt_team() {

        $labels = array(
            'name'                => _x( 'Team', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Team', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Team Member:', 'text_domain' ),
            'all_items'           => __( 'All Team Members', 'text_domain' ),
            'view_item'           => __( 'View Team Member', 'text_domain' ),
            'add_new_item'        => __( 'Add New Team Member', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Team Member', 'text_domain' ),
            'update_item'         => __( 'Update Team Member', 'text_domain' ),
            'search_items'        => __( 'Search Team Members', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_team', 'text_domain' ),
            'description'         => __( 'Team Members', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            //'taxonomies'          => array( 'ciet_cuisine','ciet_allergen','ciet_diet' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 15,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'team/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'cpt_team', $args );
    }


  


        function register_cpt_question() {

        $labels = array(
            'name'                => _x( 'Questions', 'Post Type General Name', 'text_domain' ),
            'singular_name'       => _x( 'Question', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'           => __( 'Questions', 'text_domain' ),
            'parent_item_colon'   => __( 'Parent Question:', 'text_domain' ),
            'all_items'           => __( 'All Questions', 'text_domain' ),
            'view_item'           => __( 'View Question', 'text_domain' ),
            'add_new_item'        => __( 'Add New Question', 'text_domain' ),
            'add_new'             => __( 'Add New', 'text_domain' ),
            'edit_item'           => __( 'Edit Question', 'text_domain' ),
            'update_item'         => __( 'Update Question', 'text_domain' ),
            'search_items'        => __( 'Search Questions', 'text_domain' ),
            'not_found'           => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
        );
        $args = array(
            'label'               => __( 'cpt_question', 'text_domain' ),
            'description'         => __( 'Questions', 'text_domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail','page-attributes' ),
            'taxonomies'          => array( 'cptax_question_category','post_tag' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 15,
            'can_export'          => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'questions/archive'),
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post'
        );
        register_post_type( 'cpt_question', $args );
    }

// Register Custom Taxonomies

         function register_cptax_location_service() {

            $labels = array(
                'name'                       => _x( 'Location Services', 'Taxonomy General Name', 'text_domain' ),
                'singular_name'              => _x( 'Location Service', 'Taxonomy Singular Name', 'text_domain' ),
                'menu_name'                  => __( 'Location Service', 'text_domain' ),
                'all_items'                  => __( 'All Services', 'text_domain' ),
                'parent_item'                => __( 'Parent Service', 'text_domain' ),
                'parent_item_colon'          => __( 'Parent Service:', 'text_domain' ),
                'new_item_name'              => __( 'New Service', 'text_domain' ),
                'add_new_item'               => __( 'Add Service', 'text_domain' ),
                'edit_item'                  => __( 'Edit Service', 'text_domain' ),
                'update_item'                => __( 'Update Service', 'text_domain' ),
                'separate_items_with_commas' => __( 'Separate Services with commas', 'text_domain' ),
                'search_items'               => __( 'Search Services', 'text_domain' ),
                'add_or_remove_items'        => __( 'Add or remove Services', 'text_domain' ),
                'choose_from_most_used'      => __( 'Choose from the most used services', 'text_domain' ),
                'not_found'                  => __( 'Not Found', 'text_domain' ),
            );
            $rewrite = array(
                'slug'                       => '',
                'with_front'                 => true,
                'hierarchical'               => true,
            );
            $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => $rewrite
            );
            register_taxonomy( 'cptax_location_service', array( 'cpt_location' ), $args );

        }


        function register_cptax_question_category() {

            $labels = array(
                'name'                       => _x( 'Question Category', 'Taxonomy General Name', 'text_domain' ),
                'singular_name'              => _x( 'Question Category', 'Taxonomy Singular Name', 'text_domain' ),
                'menu_name'                  => __( 'Question Category', 'text_domain' ),
                'all_items'                  => __( 'All Categories', 'text_domain' ),
                'parent_item'                => __( 'Parent Category', 'text_domain' ),
                'parent_item_colon'          => __( 'Parent Category:', 'text_domain' ),
                'new_item_name'              => __( 'New ategory', 'text_domain' ),
                'add_new_item'               => __( 'Add Category', 'text_domain' ),
                'edit_item'                  => __( 'Edit Category', 'text_domain' ),
                'update_item'                => __( 'Update Category', 'text_domain' ),
                'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
                'search_items'               => __( 'Search Categores', 'text_domain' ),
                'add_or_remove_items'        => __( 'Add or remove Categories', 'text_domain' ),
                'choose_from_most_used'      => __( 'Choose from the most used Categories', 'text_domain' ),
                'not_found'                  => __( 'Not Found', 'text_domain' ),
            );
            $rewrite = array(
                'slug'                       => '',
                'with_front'                 => true,
                'hierarchical'               => true,
            );
            $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
                'rewrite'                    => $rewrite
            );
            register_taxonomy( 'cptax_question_category', array( 'cpt_question' ), $args );

        }


        function add_cpt_team_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Name",
           "job_title" => "Job Title",
           "date" => "Publish Date"
        );  
         return $columns;
        }

function add_cpt_team_custom_columns($column,$id){
        global $post;
        switch ($column){
            case "job_title":
           // $post = get_field('collection_brand',$id);
            echo get_field('job_title',$id);
            break;
               }
            } 


  function add_cpt_testimonial_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Reference",
           "quote" => "Quote",
           "company" => "Company",
           "date" => "Publish Date"
        );  
         return $columns;
        }

function add_cpt_testimonial_custom_columns($column,$id){
        global $post;
        switch ($column){
            case "quote":
            echo get_field('testimonial_quote',$id);
            break;
            case "company":
            echo get_field('testimonial_company',$id);
            break;
               }
            } 

  function add_cpt_award_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Title",
           "awards" => "Awards",
           "date" => "Publish Date"
        );  
         return $columns;
        }

function add_cpt_award_custom_columns($column,$id){
        global $post;
        switch ($column){
            case "awards":
            echo get_field('awards',$id);
            break;
               }
            } 

  function add_cpt_career_columns($columns){
        $columns = array(
           "cb" => "<input type=\"checkbox\" />",
           "title" => "Vacancy",
           "location" => "Location",
           "salary" => "Salary",
           "date" => "Publish Date"
        );  
         return $columns;
        }

function add_cpt_career_custom_columns($column,$id){
        global $post;
        switch ($column){
            case "location":
            echo get_field('career_location',$id);
            break;
            case "salary":
            echo get_field('career_salary',$id);
            break;
               }
            } 



        function add_cpt_news_rewrite_rules(){ 
            add_rewrite_rule('^news/archive/pge/([^/]*)/?', 'index.php?pagename=news&pge=$matches[1]','top');
		}



function add_cpt_news_query_vars($public_query_vars) {
	  $public_query_vars[] = "pge";
	return $public_query_vars; 
}

function image_sizes(){
    add_image_size( 'slide', 1920, 1200, true );
    add_image_size( 'large-image', 620, 370, true );
    add_image_size( 'medium-image', 410, 246, true );
    add_image_size( 'small-image', 210, 126, true );
    add_image_size( 'award-logo', 497, 324, true );
    set_post_thumbnail_size( 150, 150,false); 
}

function custom_image_sizes($sizes) {
	
  unset( $sizes['medium']);
    unset( $sizes['large']);
  $myimgsizes = array(
  "slide" => __("Slide"),
    "large-image" => __("Large Image"),
    "medium-image" => __("Medium Image"),
    "award-logo" => __("Award Logo")
  );
     
       $newimgsizes = array_merge($sizes, $myimgsizes);
      return $newimgsizes;
}


function add_featured_image_instruction( $content ) {
 global $post;
 $post_type = $post->post_type;
 if(is_admin()):
 if($post_type=='cpt_award'):
     return $content .= '<p>JPG, 497px width by 324px height</p>';
 endif;

 return $content;
 endif;
}

//
}
     $epd = new europlusdirect();