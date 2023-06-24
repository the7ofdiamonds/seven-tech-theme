<?php
$default_image_url = get_template_directory_uri() . '/assets/default-image.png';
$post_thumbnail = get_the_post_thumbnail($post->ID);
?>

<article class="post">

  <div class="post-card card">

    <div class="post-featured-image">
      <a href="<?php the_permalink($post->ID); ?>">
        <?php
        if (has_post_thumbnail()) {
          echo $post_thumbnail;
        } else {
        ?>
          <img src="<?php echo $default_image_url ?>" alt="">
        <?php
        }
        ?>
      </a>
    </div>

    <?php include  'part-details.php'; ?>
  </div>
</article>