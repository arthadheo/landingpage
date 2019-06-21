<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package GridWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div><!--/#gridwp-content-wrapper -->
</div><!--/#gridwp-wrapper -->
</div>

<div class="gridwp-outer-wrapper">
<?php gridwp_bottom_wide_widgets(); ?>
</div>

<?php if ( !(gridwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'gridwp-footer-1' ) || is_active_sidebar( 'gridwp-footer-2' ) || is_active_sidebar( 'gridwp-footer-3' ) || is_active_sidebar( 'gridwp-footer-4' ) ) : ?>
<div class='clearfix' id='gridwp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='gridwp-container clearfix'>
<div class="gridwp-outer-wrapper">

<div class='gridwp-footer-block-1'>
<?php dynamic_sidebar( 'gridwp-footer-1' ); ?>
</div>

<div class='gridwp-footer-block-2'>
<?php dynamic_sidebar( 'gridwp-footer-2' ); ?>
</div>

<div class='gridwp-footer-block-3'>
<?php dynamic_sidebar( 'gridwp-footer-3' ); ?>
</div>

<div class='gridwp-footer-block-4'>
<?php dynamic_sidebar( 'gridwp-footer-4' ); ?>
</div>

</div>
</div><!--/#gridwp-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>

<div class='clearfix' id='gridwp-footer'>
<div class='gridwp-foot-wrap gridwp-container'>
<div class="gridwp-outer-wrapper">
<?php if ( gridwp_get_option('footer_text') ) : ?>
  <p class='gridwp-copyright'><?php echo esc_html(gridwp_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='gridwp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'gridwp' ), esc_html(date_i18n(__('Y','gridwp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='gridwp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'gridwp' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div><!--/#gridwp-footer -->
</div>

<?php wp_footer(); ?>
</body>
</html>