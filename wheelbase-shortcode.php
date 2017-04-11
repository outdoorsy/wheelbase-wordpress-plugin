<?php
   /*
   Plugin Name: Wheelbase Shortcode
   Plugin URI: https://www.wheelbasepro.com
   Description: Wheelbase Shortcode for shopping cart and rental pages
   Version: 1.01
   Author: Wheelbase Pro
   Author URI: https://www.wheelbasepro.com
   License: GPL2
   */

  /* Load the wheelbase script */
  add_action('wp_enqueue_scripts','wheelbase_init');

  function wheelbase_init() {
    wp_enqueue_script( 'wheelbase-book-now', "https://d3cuf6g1arkgx6.cloudfront.net/sdk/wheelbase.min.js");
  }

  /*-------------------
    Shortcodes
  ----------------------*/

  // [wheelbase owner="id" rental="rental-id" color="000000"]
  function wheelbase_func( $atts ) {

    $response = "";

    foreach ($atts as $key => $value)  {
      $response = $response . "data-" . $key . "='" . $value . "' ";
    }
    return "<div id='outdoorsy-book-now-container' " . $response . "></div>";
  }

  add_shortcode( 'wheelbase', 'wheelbase_func' );
?>