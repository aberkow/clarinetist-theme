<?php

the_title();

$test = get_fields();
echo "<pre>";
var_dump($test);
echo "</pre>";


$location = get_field('event_location');

if( !empty($location) ):
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>

<style type="text/css">
/*
.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

 fixes potential theme css conflict 
.acf-map img {
   max-width: inherit !important;
}
*/
</style>

