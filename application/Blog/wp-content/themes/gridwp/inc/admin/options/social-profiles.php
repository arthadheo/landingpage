<?php
/**
* Social profiles options
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridwp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_gridwp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'gridwp' ), 'panel' => 'gridwp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'gridwp_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'gridwp_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'gridwp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'gridwp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'gridwp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_vklink_control', array( 'label' => esc_html__( 'VK Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'gridwp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'gridwp_sanitize_email' ) );

    $wp_customize->add_control( 'gridwp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[telephonenumber]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'gridwp_telephonenumber_control', array( 'label' => esc_html__( 'Telephone Number', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[telephonenumber]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'gridwp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'gridwp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'gridwp' ), 'section' => 'sc_gridwp_sociallinks', 'settings' => 'gridwp_options[rsslink]', 'type' => 'text' ) );

}