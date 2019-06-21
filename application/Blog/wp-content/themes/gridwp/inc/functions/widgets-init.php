<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridwp_widgets_init() {

register_sidebar(array(
    'id' => 'gridwp-sidebar-one',
    'name' => esc_html__( 'Main Sidebar', 'gridwp' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-side-widget gridwp-box widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-home-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'gridwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'gridwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-home-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Home Page Only)', 'gridwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of homepage.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Every Page)', 'gridwp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of every page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'gridwp' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'gridwp' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'gridwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'gridwp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-footer-1',
    'name' => esc_html__( 'Footer 1', 'gridwp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-footer-2',
    'name' => esc_html__( 'Footer 2', 'gridwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-footer-3',
    'name' => esc_html__( 'Footer 3', 'gridwp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'gridwp-footer-4',
    'name' => esc_html__( 'Footer 4', 'gridwp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'gridwp' ),
    'before_widget' => '<div id="%1$s" class="gridwp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gridwp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'gridwp_widgets_init' );


function gridwp_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridwp-home-top-fullwidth-widgets' ) || is_active_sidebar( 'gridwp-top-fullwidth-widgets' ) ) : ?>
<div class="gridwp-top-wrapper-outer clearfix">
<div class="gridwp-featured-posts-area gridwp-top-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'gridwp-home-top-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridwp-top-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function gridwp_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'gridwp-home-bottom-fullwidth-widgets' ) || is_active_sidebar( 'gridwp-bottom-fullwidth-widgets' ) ) : ?>
<div class="gridwp-bottom-wrapper-outer clearfix">
<div class="gridwp-featured-posts-area gridwp-bottom-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'gridwp-home-bottom-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridwp-bottom-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function gridwp_top_widgets() { ?>

<?php if ( is_active_sidebar( 'gridwp-home-top-widgets' ) || is_active_sidebar( 'gridwp-top-widgets' ) ) : ?>
<div class="gridwp-featured-posts-area gridwp-featured-posts-area-top clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'gridwp-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridwp-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function gridwp_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'gridwp-home-bottom-widgets' ) || is_active_sidebar( 'gridwp-bottom-widgets' ) ) : ?>
<div class='gridwp-featured-posts-area gridwp-featured-posts-area-bottom clearfix'>
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'gridwp-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'gridwp-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }