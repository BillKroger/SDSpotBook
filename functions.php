<?php

// enqueue parent styles
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css?<?php echo time(); ?>',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



// Defer loading of scripts until end
if (!(is_admin() )) {
  function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return "$url' defer ";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}


//remove script version numbers
function _remove_script_version( $src ){
      $parts = explode( '?', $src );
      return $parts[0];
    }
    add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
    add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );











?>