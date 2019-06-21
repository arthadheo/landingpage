<?php
/**
* The template for displaying full-width post.
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*
* Template Name: Full Width, no sidebar
* Template Post Type: post
*/

get_header(); ?>

<div class="gridwp-main-wrapper clearfix" id="gridwp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="gridwp-main-wrapper-inside clearfix">

<?php gridwp_top_widgets(); ?>

<div class="gridwp-posts-wrapper" id="gridwp-posts-wrapper">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'singlefull' ); ?>

    <?php the_post_navigation(array('prev_text' => esc_html__( '&larr; %title', 'gridwp' ), 'next_text' => esc_html__( '%title &rarr;', 'gridwp' ))); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#gridwp-posts-wrapper -->

<?php gridwp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#gridwp-main-wrapper -->

<?php get_footer(); ?>