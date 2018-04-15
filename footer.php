<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clarinetist
 */

$site_name = get_bloginfo();
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="widget-area">
			<?php
				for ($i = 0; $i < 5; $i++) {
					$current = $i;
					dynamic_sidebar('footer-' . $i);
				}
			?>
		</div>
		<div class="site-info">
			<p><?php echo $site_name; ?> - Copyright <?php echo date("Y"); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
