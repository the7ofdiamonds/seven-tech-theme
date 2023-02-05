<div class="list">

  <?php    
    $posts = get_posts();

    if ( $posts ) {

      foreach($posts as $post) { 
  ?>

  <div class="post-card card">

    <h3 class='post-name'><?php echo get_the_title($post->ID); ?></h3>

    <div class="post-featured-image">
      <a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail($post->ID); ?>
      </a>
    </div>

    <div class="post-description-short">
      <?php echo get_the_excerpt($post->ID); ?>
    </div>
  </div>
  <?php
      }
    }
  ?>
</div>