<?php

// Change all instances of THEMENAME to your theme name.
if ( ! function_exists( 'conditions_setup' ) ) :
 
   function conditions_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo' );

     register_nav_menus( array(
      'menu-main' => 'Main Menu',
      'menu-footer' => 'Secondary Menu',
      'menu-social' => 'Social Menu',
      ) );
   }
 
endif;
 
add_action('after_setup_theme', 'conditions_setup');

function themename_custom_logo_setup() {
   $defaults = array(
       'height'               => 400,
       'width'                => 400,
       'flex-height'          => true,
       'flex-width'           => true,
       'header-text'          => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
   );

   add_theme_support( 'custom-logo', $defaults );
}
 
function conditions_scripts_styles(){
   wp_enqueue_style('conditions_style', get_stylesheet_uri());
   wp_enqueue_style('conditions_fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css');
   wp_enqueue_style('conditions_googlefont', 'https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@300&family=Montserrat&family=Newsreader&family=Rubik', array(), null);
   wp_enqueue_script('conditions_script_navigation_js', get_template_directory_uri() . '/js/scripts.js', array(), null, true);
   wp_enqueue_script('conditions_email', 'https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js');
}
 
add_action('wp_enqueue_scripts', 'conditions_scripts_styles');
