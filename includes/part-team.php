<div class="team">

    <?php

        $args = array('post_type'=>array('posts', 'team'), 'orderby'=>'menu_order', 'order' => 'ASC');
        
        query_posts($args);

        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
        <?php get_template_part('includes/part', 'member');?>

    <?php endwhile; else: endif;?>

</div>