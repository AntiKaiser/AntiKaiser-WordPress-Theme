<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AntiKaiser
 */
?>

		</div><!-- .site-content .wrap -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="grid-container">
			<?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
			<?php endif; // end footer widget area ?>
			<?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
			<?php endif; // end footer widget area ?>
			<?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
			<?php endif; // end footer widget area ?>
			<?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>
			<?php endif; // end footer widget area ?>
		</div><!-- .grid-container -->
		<div class="site-info">
			<div class="grid-container">
				&copy; 2014 AntiKaiser, Inc. All Rights Reserved.
			</div><!-- .grid-container -->
		</div><!-- .site-info -->
		</div><!-- .site-footer .wrap -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>