<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rebalance
 */
?>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'rebalance' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'rebalance' ), 'WordPress' ); ?></a>
					<br>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'rebalance' ), 'Rebalance', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->

		</div><!-- .col-width -->
	</div><!-- #content -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>