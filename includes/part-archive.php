<?php if( have_posts() ): while( have_posts() ): the_post();?>
    <h3><?php the_title(); ?></h3>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
    </a>
    <?php the_excerpt(); ?>
<?php endwhile; else: endif;?>