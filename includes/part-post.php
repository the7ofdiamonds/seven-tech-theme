<div class="post">

  <div class="post-card card">

    <a href="<?php the_permalink($post->ID); ?>">
      <div class="post-featured-image">
        <?php if (has_post_thumbnail()) {
          echo get_the_post_thumbnail($post->ID);
        } else { ?>
          <img src="<?php echo get_site_icon_url(); ?>" alt="<?php the_title(); ?>" />
        <?php } ?>
      </div>
    </a>

    <h3 class='post-name'><?php echo get_the_title($post->ID); ?></h3>

    <div class="post-description-short">
      <?php echo get_the_excerpt($post->ID); ?>
    </div>
  </div>
</div>