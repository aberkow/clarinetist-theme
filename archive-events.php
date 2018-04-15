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
			<div class="event-archive-container grid-container">
		<?php
		if ( have_posts() ) : ?>

			<h1 class="page-title">Events</h1>

			<?php
			/* Start the Loop */
			$counter = 0;
			while ( have_posts() ) : the_post();
				$event_date = get_field('event_date');
				$event_start = get_field('event_start_time');
				$event_end = get_field('event_end_time');
				$location = get_field('event_location');
				$address = $location['address'];
				?>
					<div id="event-details_<?php echo $counter; ?>" class="event-details">
						<h2><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p><?php echo $event_date; ?></p>
						<p class="event-time"><?php echo $event_start; ?> -> <?php echo $event_end; ?></p>
						<p><?php echo $address; ?></p>
					</div>
				<?php
				$counter++;
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>		
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
