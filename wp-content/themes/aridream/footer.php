<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aridream
 */

?>
</div><!-- .content -->
	<footer id="footerArea" class="site-footer">

	 

	<div class="site-info">
		<p class="copyright">
		<?php
		if ( get_theme_mod( 'copyright_text', '' ) <> '' ) {
			echo wp_kses_post( get_theme_mod( 'copyright_text', '' ) );
		} else {
			?>
			<span><?php bloginfo( 'name' ); ?></span> <span>&copy;&nbsp;</span><span class="copyright-year"><?php echo esc_html( date_i18n( _x( 'Y', 'copyright date format', 'aridream' ) ) ); ?></span>
			<?php
		}
		?>
		<span class="sep"> | </span>
		<?php
		esc_html_e( 'All rights reserved.', 'aridream' );
		?>
	</p>
	 
	
	
	
	
	
	<p class="copyright">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aridream' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'aridream' ), 'WordPress' );
				?>
			</a>. <?php esc_html_e('Theme by Arinio Themes','aridream'); ?>
			
                  </p>
				  
				  
	</div><!-- .site-info -->

</footer><!-- #footerArea -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
