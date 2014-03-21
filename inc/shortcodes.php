<?php
class wsf_shortcode {
  function __construct() {
     add_shortcode( 'wsf-gallery', array( $this, 'shortcode_gallery' ) );
  }

  function shortcode_gallery( $atts ) {
    extract( shortcode_atts( array(
      'gallery_id' => 0,
    ), $atts ) );
    

    $images_repeater = get_field( 'image', $gallery_id );
    
    if ( empty( $images_repeater ) || !is_array( $images_repeater ) ) {
      return false;
    }

    $return = '';
        $return .= '<ul id="myGallery">';
        foreach( $images_repeater as $image ) {
              $return .= '<li><img src"' . $image['image']['sizes']['medium'] . '" data-description="' . $image['description'] . '"/></li>';
        }
        $return .= "</ul>";
    return $return;

  }
}