<h1 class="recording-title"><?php echo the_title(); ?></h1>

<div class="recording-wrapper">
  <div class="featured-image-wrapper">
    <?php the_post_thumbnail('large'); ?>
  </div>
  <div class="recording-description">
    <?php the_content(); ?>
    <?php
      $category = get_the_category();
    
      echo "<pre>";
      var_dump($category);
      echo "</pre>";


    ?>
    <p><?php echo $category[0]['name']; ?></p>
  </div>
</div>
