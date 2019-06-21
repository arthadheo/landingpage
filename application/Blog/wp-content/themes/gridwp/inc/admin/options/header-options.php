<?php
/**
* Header options
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridwp_header_options($wp_customize) {

    $wp_customize->add_section( 'sc_gridwp_header', array( 'title' => esc_html__( 'Header Options', 'gridwp' ), 'panel' => 'gridwp_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'gridwp_options[hide_top_bar]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridwp_hide_top_bar_control', array( 'label' => esc_html__( 'Hide Header Top Bar', 'gridwp' ), 'section' => 'sc_gridwp_header', 'settings' => 'gridwp_options[hide_top_bar]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridwp_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridwp_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'gridwp' ), 'section' => 'sc_gridwp_header', 'settings' => 'gridwp_options[hide_header_content]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridwp_options[disable_featured_header]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridwp_disable_featured_header_control', array( 'label' => esc_html__( 'Disable Featured Header Image', 'gridwp' ), 'section' => 'sc_gridwp_header', 'settings' => 'gridwp_options[disable_featured_header]', 'type' => 'checkbox', ) );

}