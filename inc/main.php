<?php
class wsf_main {
  function __construct() {
    add_action('init', array( $this, 'image_sizes' ), 40 );
    add_action( 'init', array( $this, 'enqueue' ), 30 );
  }

  function image_sizes() {
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'slider_thumb', '164', '164', true ); 
    add_image_size( 'slider_thumb', '900', '598', true ); 
  }

  function enqueue() {
    wp_enqueue_script( 
      'galleria', 
      WSF_PORTFOLIO_URL . '/offwhite/js/jquery.galleryview-3.0-dev.js' , 
      array( 'jquery' ), 
      '1.0.0', 
      true
    );

    wp_enqueue_style( 
      'galleria',
       WSF_PORTFOLIO_URL . '/offwhite/css/jquery.galleryview-3.0-dev.css',
       false,
       '1.0.0',
       'all'
    );
  }
}