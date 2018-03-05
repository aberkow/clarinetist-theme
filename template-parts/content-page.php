<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clarinetist
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php 
			if (!is_front_page()) {
				the_title( '<h1 class="entry-title">', '</h1>' ); 
			}			
		?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if (!is_front_page()) {
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clarinetist' ),
				'after'  => '</div>',
			) );
		}
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
