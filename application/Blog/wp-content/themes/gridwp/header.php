<?php
/**
* The header for GridWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class('gridwp-animated gridwp-fadein'); ?> id="gridwp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php if ( !(gridwp_get_option('hide_top_bar')) ) { ?>
<div class="gridwp-outer-wrapper">
<div class="gridwp-top-social-bar">
<?php if ( !(gridwp_get_option('hide_header_social_buttons')) ) { gridwp_header_social_buttons(); } ?>

<div id="gridwp-search-overlay-wrap" class="gridwp-search-overlay">
  <span class="gridwp-search-closebtn" title="<?php esc_attr_e('Close Search','gridwp'); ?>">&#xD7;</span>
  <div class="gridwp-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
</div>
</div>
</div>
<?php } ?>

<div class="gridwp-outer-wrapper">
<div class="gridwp-container" id="gridwp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="gridwp-head-content clearfix" id="gridwp-head-content">

<?php if ( !(gridwp_get_option('hide_header_content')) ) { ?>
<div class="gridwp-header-inside clearfix">

<div id="gridwp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="gridwp-logo-img-link">
        <img src="<?php echo esc_url( gridwp_custom_logo() ); ?>" alt="" class="gridwp-logo-img"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="gridwp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="gridwp-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#gridwp-logo -->

<div id="gridwp-header-banner">
<?php if ( !(gridwp_get_option('disable_secondary_menu')) ) { ?>
<div class="gridwp-container gridwp-secondary-menu-container clearfix">
<div class="gridwp-secondary-menu-container-inside clearfix">

<nav class="gridwp-nav-secondary" id="gridwp-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'gridwp-menu-secondary-navigation', 'menu_class' => 'gridwp-secondary-nav-menu gridwp-menu-secondary', 'fallback_cb' => 'gridwp_top_fallback_menu', ) ); ?>
</nav>

</div>
</div>
<?php } ?>
</div><!--/#gridwp-header-banner -->

</div>
<?php } ?>

<?php gridwp_featured_header_image(); ?>

</div><!--/#gridwp-head-content -->
</div><!--/#gridwp-header -->
</div>

<div class="gridwp-outer-wrapper">
<div class="gridwp-container gridwp-primary-menu-container clearfix">
<div class="gridwp-primary-menu-container-inside clearfix">
<?php if ( !(gridwp_get_option('disable_primary_menu')) ) { ?>
<nav class="gridwp-nav-primary" id="gridwp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'gridwp-menu-primary-navigation', 'menu_class' => 'gridwp-nav-primary-menu gridwp-menu-primary', 'fallback_cb' => 'gridwp_fallback_menu', ) ); ?>
</nav>
<?php } ?>
</div>
</div>
</div>

<div class="gridwp-outer-wrapper">
<?php gridwp_top_wide_widgets(); ?>
</div>

<div class="gridwp-outer-wrapper">
<div class="gridwp-container clearfix" id="gridwp-wrapper">
<div class="gridwp-content-wrapper clearfix" id="gridwp-content-wrapper">