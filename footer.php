<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intimate
 */
global $intimate_theme_options;
$copyright = wp_kses_post($intimate_theme_options['intimate-footer-copyright']);
$enable_missed = absint($intimate_theme_options['intimate_enable_missed_post_front']);

if ( is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4') ) {
	$count = 0;
	for ( $i = 1; $i <= 4; $i++ )
	{
		if ( is_active_sidebar( 'footer-' . $i ) )
		{
			$count++;
		}
	}
	
	$footer_col= 4;
	if( $count == 4 )
	{
		$footer_col= 4;
	}
	elseif( $count == 3)
	{
		$footer_col= 3;
	}
	elseif( $count == 2)
	{
		$footer_col= 2;
	}
	elseif( $count == 1)
	{
		$footer_col= 1;
	}
}
?>
<?php if(is_active_sidebar('before-footer-area')){ ?>
	<div class="before-footer-area slider-below-widget-wrapper">
		<div class="container">
			<?php dynamic_sidebar( 'before-footer-area' ); ?>
		</div>
	</div>
<?php } ?>
<?php if ($enable_missed == 1 && (is_home() || is_front_page() ) )  { ?>
	<section class="promo-missed-wrapper">
		<?php
		
            /*
            * you may have missed
            */
            do_action('intimate_front_page_you_missed_hook');
            ?>
        </section>
    <?php } ?>
    <div class="footer-wrap">
    	<div class="container-fluid">
    		<div class="row">
    			<?php
    			for ( $i = 1; $i <= 4 ; $i++ ){
    				if ( is_active_sidebar( 'footer-' . $i ) )
    				{
    					?>
    					<div class="footer-col-<?php echo $footer_col; ?>">
    						<div class="footer-top-box wow fadeInUp">
    							<?php dynamic_sidebar( 'footer-' . $i ); ?>
    						</div>
    					</div>
    					<?php
    				}
    			}
    			?>
    		</div>
    	</div>
    	<footer class="site-footer">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6">
    					<div class="copyright">
    						<?php echo $copyright; ?>
    					</div>
    					<div class="site-info">
    						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'intimate' ) ); ?>">
    							<?php
    							/* translators: %s: CMS name, i.e. WordPress. */
    							printf( esc_html__( 'Proudly powered by %s', 'intimate' ), 'WordPress' );
    							?>
    						</a>
    						<span class="sep"> | </span>
    						<?php
    						/* translators: 1: Theme name, 2: Theme author. */
    						printf( esc_html__( 'Theme: %1$s by %2$s.', 'intimate' ), 'Intimate', '<a href="https://www.templatesell.com/">Template Sell</a>' );
    						?>
    					</div>
    				</div>
    				<div class="col-md-6">
    					<?php
    					if (has_nav_menu('footer')) {
    						wp_nav_menu( array(
    							'theme_location' => 'footer',
    							'menu_id'        => '',
    							'container' => 'ul',
    							'menu_class'      => 'footer-menu'
    						) );
    					} ?>
    				</div>
    			</div>
    		</div>
    	</footer>
    	<?php do_action('intimate_go_to_top_hook'); ?>
    </div>
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>