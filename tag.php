<?php get_header(); ?>

    <section class="tag">

        <div class="list">

        <?php

            $args = array(
                'post_type' => array('post', 'portfolio'),
                'tag' => get_queried_object()->slug
                );
        
            $posts = get_posts($args);

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
    </section>
<?php get_footer(); ?>