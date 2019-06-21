<?php
/**
* Upgrade to pro options
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridwp_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_gridwp_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'gridwp' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'gridwp_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new GridWP_Customize_Static_Text_Control( $wp_customize, 'gridwp_upgrade_text_control', array(
        'label'       => esc_html__( 'GridWP Pro', 'gridwp' ),
        'section'     => 'sc_gridwp_upgrade',
        'settings' => 'gridwp_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy GridWP? Upgrade to GridWP Pro now and get:', 'gridwp' ).
            '<ul class="gridwp-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Layout Options', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'News Ticker', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Page Templates', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Custom Post Templates', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Posts Grid-Layout Styles (2/3/4/5 Columns)', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Posts Grid-Thumbnails Styles (Horizontal/Square/Vertical/Auto Height)', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Featured Posts Widgets with Layout Styles (2/3/4/5 Columns) and Thumbnail Styles (Horizontal/Square/Vertical/Auto Height) : These widgets displays recent/popular/random posts or posts from a given category or tag.', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Widget Areas', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '3 Header Layouts (full-width header or logo+728x90 ad or logo+menu)', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Built-in Contact Form', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'gridwp' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'gridwp' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.GRIDWP_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To GridWP PRO', 'gridwp' ) . '</a></strong>'
    ) ) ); 

}