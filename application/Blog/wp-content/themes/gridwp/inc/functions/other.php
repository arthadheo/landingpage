<?php
/**
* More Custom Functions
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function gridwp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $gridwp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $gridwp_logo = wp_get_attachment_image_src( $gridwp_custom_logo_id , 'full' );
    return $gridwp_logo[0];
}

// Category ids in post class
function gridwp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'gridwp_category_id_class');

// Change excerpt more word
function gridwp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'gridwp_excerpt_more');

// Adds custom classes to the array of body classes.
function gridwp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'gridwp-group-blog';
    }

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'gridwp-layout-full-width';
    }

    if ( is_404() ) {
        $classes[] = 'gridwp-layout-full-width';
    }

    if ( !is_active_sidebar( 'gridwp-home-bottom-widgets' ) && !is_active_sidebar( 'gridwp-single-bottom-widgets' ) && !is_active_sidebar( 'gridwp-singular-bottom-widgets' ) && !is_active_sidebar( 'gridwp-bottom-widgets' ) ) {
        $classes[] = 'gridwp-no-bottom-widgets';
    }

    return $classes;
}
add_filter( 'body_class', 'gridwp_body_classes' );


function gridwp_post_style() {
       $post_style = 'grid';
       return $post_style;
}


function gridwp_grid_thumb_style() {
       $thumb_style = 'gridwp-square-image';
       return $thumb_style;
}


function gridwp_post_grid_cols() {
       $post_column = 'gridwp-3-col';
       return $post_column;
}

function gridwp_header_image() {
    if ( get_header_image() ) : ?>
    <div class="gridwp-header-image clearfix">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridwp-header-img-link">
        <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="gridwp-header-img"/>
    </a>
    </div>
    <?php endif;
}

function gridwp_featured_header_image() {
    if ( gridwp_get_option('disable_featured_header') ) { return; }
    if( is_singular() ) {
        if ( has_post_thumbnail() ) {
            if ( !(gridwp_get_option('hide_thumbnail_single')) ) {
                    if ( gridwp_get_option('thumbnail_link') == 'no' ) { ?>
                        <div class="gridwp-header-image clearfix">
                        <?php the_post_thumbnail('gridwp-header-image', array('class' => 'gridwp-header-img')); ?>
                        </div>
                    <?php } else { ?>
                        <div class="gridwp-header-image clearfix">
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="gridwp-header-img-link"><?php the_post_thumbnail('gridwp-header-image', array('class' => 'gridwp-header-img')); ?></a>
                        </div>
            <?php   }
            } else {
                    gridwp_header_image();
            }
        } else {
                gridwp_header_image();
        }
    } else {
        gridwp_header_image();
    }
}