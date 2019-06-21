<?php
// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------
function blacklite_gird_setup() {
    load_theme_textdomain( 'blacklite-gird', get_template_directory() . '/languages' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'blacklite-gird-thumb', 360, 240, true );
}

add_action( 'after_setup_theme', 'blacklite_gird_setup' );

function blacklite_gird_enqueue_child_styles() {
 
    wp_enqueue_style( 'blacklite-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'blacklite-gird-style', get_stylesheet_directory_uri() . '/style.css', array( 'blacklite-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'blacklite_gird_enqueue_child_styles' );

/**
 *
 * Load Google Fonts
 *
 */
function blacklite_gird_google_fonts_url(){
	
    $fonts_url  = '';
    $OpenSans = _x( 'on', 'Open Sans font: on or off', 'blacklite-gird' );
    $Kalam = _x( 'on', 'Kalam font: on or off', 'blacklite-gird' );
 
    if ( 'off' !== $OpenSans || 'off' !== $Kalam ){

        $font_families = array();
 
        if ( 'off' !== $OpenSans ) {

            $font_families[] = 'Open Sans:400,600,700';

        }
 
        if ( 'off' !== $Kalam ) {

            $font_families[] = 'Kalam:400,700';

        }
        
 
        $query_args = array(

            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

    }
 
    return esc_url_raw( $fonts_url );
}

function blacklite_gird_enqueue_googlefonts() {

    wp_enqueue_style( 'blacklite-gird-googlefonts', blacklite_gird_google_fonts_url(), array(), null );
}

add_action( 'wp_enqueue_scripts', 'blacklite_gird_enqueue_googlefonts' );