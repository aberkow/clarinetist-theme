<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package clarinetist
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>
			<h1 class="page-title">Recordings</h1>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
			?>
			<div class="recording-wrapper">
				<div class="featured-image-wrapper">
					<?php the_post_thumbnail('medium'); ?>
				</div>
				<div class="recording-description">
					<?php
						$title = get_the_title();
						$link = get_post_permalink();
						echo "<h2><a href='$link'>$title</a></h2>";
						$just_the_text = wp_trim_words(get_the_content(), 999999);
						echo "<p>$just_the_text</p>";
					?>
				</div>
			</div>
		<?php		
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
