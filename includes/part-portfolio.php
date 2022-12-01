<div class="list">

  <?php
    $args = array('post_type'=>array('posts', 'portfolio'), 'orderby'=>'menu_order', 'order' => 'ASC');
    
    query_posts($args);

    if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>

  <div class="project-card card">

    <h3 class='project-name'><?php the_title(); ?></h3>

    <div class="project-featured-image">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
      </a>
    </div>

    <div class="project-type">
      <p>Project Type: <?php echo get_post_meta(get_the_id(), '_project_type', true); ?></p>
    </div>

    <div class="project-description-short">
      <?php the_excerpt(); ?>
    </div>

    <div class="project-action">
      <a href="<?php echo get_post_meta(get_the_id(), '_project_link', true); ?>">
        <button class="project-button"><h3>
          <?php echo get_post_meta(get_the_id(), '_project_button', true); ?>
        </h3></button>
      </a>
    </div>
  </div>
  <?php endwhile; else: endif;?>
</div>