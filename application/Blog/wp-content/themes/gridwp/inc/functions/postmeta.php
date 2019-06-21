<?php
/**
* Post meta functions
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'gridwp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function gridwp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'gridwp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="gridwp-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'gridwp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'gridwp_grid_cats' ) ) :
function gridwp_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'gridwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridwp-grid-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'gridwp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'gridwp_grid_postmeta' ) ) :
function gridwp_grid_postmeta() { ?>
    <?php if ( !(gridwp_get_option('hide_post_author_home')) || !(gridwp_get_option('hide_posted_date_home')) || !(gridwp_get_option('hide_comments_link_home')) ) { ?>
    <div class="gridwp-grid-post-footer">
    <?php if ( !(gridwp_get_option('hide_post_author_home')) ) { ?><span class="gridwp-grid-post-author gridwp-grid-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(gridwp_get_option('hide_posted_date_home')) ) { ?><span class="gridwp-grid-post-date gridwp-grid-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(gridwp_get_option('hide_comments_link_home')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="gridwp-grid-post-comment gridwp-grid-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'gridwp' ), esc_attr__( '1 Comment', 'gridwp' ), esc_attr__( '% Comments', 'gridwp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'gridwp_single_cats' ) ) :
function gridwp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'gridwp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="gridwp-entry-meta-single gridwp-entry-meta-single-top"><span class="gridwp-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'gridwp' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'gridwp_single_postmeta' ) ) :
function gridwp_single_postmeta() { ?>
    <?php if ( !(gridwp_get_option('hide_post_author')) || !(gridwp_get_option('hide_posted_date')) || !(gridwp_get_option('hide_comments_link')) || !(gridwp_get_option('hide_post_edit')) ) { ?>
    <div class="gridwp-entry-meta-single">
    <?php if ( !(gridwp_get_option('hide_post_author')) ) { ?><span class="gridwp-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(gridwp_get_option('hide_posted_date')) ) { ?><span class="gridwp-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(gridwp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="gridwp-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( esc_attr__( 'Leave a comment', 'gridwp' ), esc_attr__( '1 Comment', 'gridwp' ), esc_attr__( '% Comments', 'gridwp' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(gridwp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( esc_html__( 'Edit', 'gridwp' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;