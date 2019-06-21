<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="gridwp-grid-post <?php echo esc_attr( gridwp_post_grid_cols() ); ?>">
<div class="gridwp-grid-post-inside">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(gridwp_get_option('hide_thumbnail')) ) { ?>
    <div class="gridwp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail(gridwp_grid_thumb_style(), array('class' => 'gridwp-grid-post-thumbnail-img')); ?></a>
        <?php gridwp_grid_postmeta(); ?>
        <?php if ( !(gridwp_get_option('hide_post_categories_home')) ) { gridwp_grid_cats(); } ?>
    </div>
    <?php } else { ?>
    <div class="gridwp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-4.jpg' ); ?>" class="gridwp-grid-post-thumbnail-img"/></a>
        <?php gridwp_grid_postmeta(); ?>
        <?php if ( !(gridwp_get_option('hide_post_categories_home')) ) { gridwp_grid_cats(); } ?>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="gridwp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'gridwp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-4.jpg' ); ?>" class="gridwp-grid-post-thumbnail-img"/></a>
        <?php gridwp_grid_postmeta(); ?>
        <?php if ( !(gridwp_get_option('hide_post_categories_home')) ) { gridwp_grid_cats(); } ?>
    </div>
    <?php } ?>

    <div class="gridwp-grid-post-details">
    <?php the_title( sprintf( '<h3 class="gridwp-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
    </div>

</div>
</div>