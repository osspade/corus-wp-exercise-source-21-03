<?php

  add_action( 'init', 'slickGallery' ); 
  add_action( 'wp_enqueue_scripts', 'slickGalleryScripts' );

  
  function slickGalleryScripts(){
    wp_enqueue_style( 'slider1', get_template_directory_uri() . '/components/slick-slider/slick.css',false,'1.1','all');
    wp_enqueue_style( 'slider2', get_template_directory_uri() . '/components/slick-slider/slick-theme.css',false,'1.1','all');
    wp_enqueue_style( 'slider3', get_template_directory_uri() . '/style.css',false,'1.1','all');
  
    wp_enqueue_script( 'slider4', "//code.jquery.com/jquery-1.11.0.min.js", false, 1.1, true);
    wp_enqueue_script( 'slider5', "//code.jquery.com/jquery-migrate-1.2.1.min.js", false, 1.1, true);
    wp_enqueue_script( 'slider6', get_template_directory_uri() . '/components/slick-slider/slick.min.js', false, 1.1, true);
    wp_enqueue_script( 'slider7', get_template_directory_uri() . '/custom.js', false, 1.1, true);
  
  }

function slickGallery() {
    register_post_type( 'gallery', array(
      'labels'        => array(
        'name'               => _x( 'Galleries', '' ),
        'singular_name'      => _x( 'Gallery', '' ),
        'add_new'            => _x( 'Add New', 'gallery' ),
        'add_new_item'       => __( 'Add New ' ),
        'edit_item'          => __( 'Edit' ),
        'new_item'           => __( 'New' ),
        'all_items'          => __( 'All' ),
        'view_item'          => __( 'View' ),
        'search_items'       => __( 'Search' ),
        'not_found'          => __( 'No such galleries found' ),
        'not_found_in_trash' => __( 'Not found in Trash' ), 
        'parent_item_colon'  => '*',
        'menu_name'          => 'Corus Gallery'
      ),
      'description'   => 'Description',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title' ),
      'has_archive'   => true,
    ));

  }

  function slider($postID){
     echo '<div class="slider">';
    foreach(get_fields($postID) as $slider ){          
      echo '<img src="'.$slider['sizes']['medium'].'" alt="" />';
   }
   echo '</div>';

  }


  


