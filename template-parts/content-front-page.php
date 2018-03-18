<?php
  $content = get_the_content();
  $first_letter = substr($content, 0, 1);
  $content = substr($content, 1);
  $featured_image_color = get_field('featured_image_color');
  $featured_image_opacity = get_field('featured_image_opacity');
  $featured_image_mix_mode = get_field('featured_image_mix_mode');

  echo "<style id='headshot-style'>";
  echo "#home-headshot {background-color:$featured_image_color;filter: opacity:$featured_image_opacity%;}";
  echo "#home-headshot img {mix-blend-mode:$featured_image_mix_mode;}";
  echo "</style>";
?>

<div id="home-wrapper">
  <div id="home-quote">
    <p><span><?php echo $first_letter; ?></span><?php echo $content; ?></p>
  </div>		
  <div id="home-headshot">
    <?php the_post_thumbnail(); ?>
  </div>
</div>