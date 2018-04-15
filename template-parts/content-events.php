<?php
/*
display: grid;
grid-template-columns: repeat(6, 1fr);
grid-template-rows: repeat(8, 200px);
grid-gap: 1rem;
grid-auto-rows: minmax(200px, auto);

h1 {
	grid-column: 3 / 7;
font-size: 7rem;
margin: 0;
align-self: center;
}

month {
	font-size: 6rem;
margin: 0;
align-self: center;
grid-row: 1 / 2;
grid-column: 1 / 2;
justify-self: right;
}

day {
	font-size: 6rem;
align-self: center;
margin: 0;
grid-column: 2 / 3;
grid-row: 1 / 1;
}

year {
	    font-size: 6rem;
    margin: 0;
    grid-column: 1 / 2;
}

time {
	    grid-row: 2 / 3;
    grid-column: 3 / 6;
    font-size: 3rem;

}

map {
	grid-column: 4 / 7;
}
*/



$event_date = get_field('event_date');
$event_date_array = explode('/', $event_date);
$month = $event_date_array[0];
$day = $event_date_array[1];
$year = $event_date_array[2];
$content = get_the_content();
?>

<div class="event-container grid-container">
	<h1><?php the_title(); ?></h1>
	<p class="event-date event-date-month"><?php echo $month; ?>/<?php echo $day; ?></p>
	<!-- <p class="event-date event-date-day"></p> -->
	<p class="event-date event-date-year"><?php echo $year; ?></p>
	<p class="event-time"><?php echo get_field('event_start_time'); ?> &rarr; <?php echo get_field('event_end_time'); ?></p>
	<p class="event-description"><?php echo $content; ?></p>
	<?php
	$location = get_field('event_location');

	if (has_post_thumbnail()) {
	?>
	<div class="featured-image-container">
		<?php the_post_thumbnail(); ?>
	</div>
	<?php
	}

	if( !empty($location) ) {
	?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
	<?php 
	}
	?>
</div>
