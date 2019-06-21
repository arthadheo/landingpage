<?php
/**
* Social buttons
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function gridwp_header_social_buttons() { ?>

<div class="gridwp-top-social-icons clearfix">
    <?php if ( gridwp_get_option('emailaddress') || gridwp_get_option('telephonenumber') ) : ?>
    <span class="gridwp-top-social-icons-left">
    <?php if ( gridwp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( gridwp_get_option('emailaddress') ); ?>" class="gridwp-social-icon-email" title="<?php esc_attr_e('Email Us','gridwp'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo esc_html( gridwp_get_option('emailaddress') ); ?></a><?php endif; ?>
    <?php if ( gridwp_get_option('telephonenumber') ) : ?>
            <a href="tel:<?php echo esc_html( gridwp_get_option('telephonenumber') ); ?>" class="gridwp-social-icon-phone" title="<?php esc_attr_e('Phone','gridwp'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo esc_html( gridwp_get_option('telephonenumber') ); ?></a><?php endif; ?>
    </span>
    <?php endif; ?>
    <span class="gridwp-top-social-icons-right">
    <?php if ( gridwp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('twitterlink') ); ?>" target="_blank" class="gridwp-social-icon-twitter" title="<?php esc_attr_e('Twitter','gridwp'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('facebooklink') ); ?>" target="_blank" class="gridwp-social-icon-facebook" title="<?php esc_attr_e('Facebook','gridwp'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('googlelink') ); ?>" target="_blank" class="gridwp-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','gridwp'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('pinterestlink') ); ?>" target="_blank" class="gridwp-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','gridwp'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('linkedinlink') ); ?>" target="_blank" class="gridwp-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','gridwp'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('instagramlink') ); ?>" target="_blank" class="gridwp-social-icon-instagram" title="<?php esc_attr_e('Instagram','gridwp'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('flickrlink') ); ?>" target="_blank" class="gridwp-social-icon-flickr" title="<?php esc_attr_e('Flickr','gridwp'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('youtubelink') ); ?>" target="_blank" class="gridwp-social-icon-youtube" title="<?php esc_attr_e('Youtube','gridwp'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('vimeolink') ); ?>" target="_blank" class="gridwp-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','gridwp'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('soundcloudlink') ); ?>" target="_blank" class="gridwp-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','gridwp'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('lastfmlink') ); ?>" target="_blank" class="gridwp-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','gridwp'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('githublink') ); ?>" target="_blank" class="gridwp-social-icon-github" title="<?php esc_attr_e('Github','gridwp'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('bitbucketlink') ); ?>" target="_blank" class="gridwp-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','gridwp'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('tumblrlink') ); ?>" target="_blank" class="gridwp-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','gridwp'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('digglink') ); ?>" target="_blank" class="gridwp-social-icon-digg" title="<?php esc_attr_e('Digg','gridwp'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('deliciouslink') ); ?>" target="_blank" class="gridwp-social-icon-delicious" title="<?php esc_attr_e('Delicious','gridwp'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('stumblelink') ); ?>" target="_blank" class="gridwp-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','gridwp'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('redditlink') ); ?>" target="_blank" class="gridwp-social-icon-reddit" title="<?php esc_attr_e('Reddit','gridwp'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('dribbblelink') ); ?>" target="_blank" class="gridwp-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','gridwp'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('behancelink') ); ?>" target="_blank" class="gridwp-social-icon-behance" title="<?php esc_attr_e('Behance','gridwp'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('vklink') ); ?>" target="_blank" class="gridwp-social-icon-vk" title="<?php esc_attr_e('VK','gridwp'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('codepenlink') ); ?>" target="_blank" class="gridwp-social-icon-codepen" title="<?php esc_attr_e('Codepen','gridwp'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('jsfiddlelink') ); ?>" target="_blank" class="gridwp-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','gridwp'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('stackoverflowlink') ); ?>" target="_blank" class="gridwp-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','gridwp'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('stackexchangelink') ); ?>" target="_blank" class="gridwp-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','gridwp'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('bsalink') ); ?>" target="_blank" class="gridwp-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','gridwp'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('slidesharelink') ); ?>" target="_blank" class="gridwp-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','gridwp'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( gridwp_get_option('skypeusername') ); ?>?chat" class="gridwp-social-icon-skype" title="<?php esc_attr_e('Skype','gridwp'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( gridwp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( gridwp_get_option('rsslink') ); ?>" target="_blank" class="gridwp-social-icon-rss" title="<?php esc_attr_e('RSS','gridwp'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
    <a href="<?php echo esc_url( '#' ); ?>" title="<?php esc_attr_e('Search','gridwp'); ?>" class="gridwp-social-search-icon"><i class="fa fa-search"></i></a>
    </span>
</div>

<?php }