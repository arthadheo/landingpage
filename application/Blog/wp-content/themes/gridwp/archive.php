<?php
/**
* The template for displaying archive pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="gridwp-main-wrapper clearfix" id="gridwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="gridwp-main-wrapper-inside clearfix">

<?php gridwp_top_widgets(); ?>

<div class="gridwp-posts-wrapper" id="gridwp-posts-wrapper">

<div class="gridwp-posts">

<header class="page-header">
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
</header>

<div class="gridwp-posts-content">

<?php if (have_posts()) : ?>

    <div class="gridwp-posts-container">
    <?php $gridwp_total_posts = $wp_query->post_count; ?>
    <?php $gridwp_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', gridwp_post_style() ); ?>

    <?php $gridwp_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php gridwp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#gridwp-posts-wrapper -->

<?php gridwp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#gridwp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>