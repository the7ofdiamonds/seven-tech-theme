<?php get_header();?>
    <section id="project" class="project">
    <h2 class="title"><?php the_title(); ?></h2>
        <?php

        get_post();

        if ( have_posts() ) : while ( have_posts() ) : the_post();
        ?>	
        
            <?php get_template_part('includes/part', 'gallery');?>


            <div class="project-type card">
                <p>Project Type: <?php echo get_post_meta(get_the_id(), '_project_type', true); ?></p>
            </div>

            <div class="project-description card">
            <?php echo wp_strip_all_tags( get_the_content() ); ?>
            </div>

            <div class="project-action-button">
                <a href="<?php echo get_post_meta(get_the_id(), '_project_link', true); ?>">
                    <button class="project-button"><h3>
                        <?php echo get_post_meta(get_the_id(), '_project_button', true); ?>
                    </h3></button>
                </a>
            </div>
        </div>
        <?php endwhile; else: endif;?>
    </div>
    </section>
<?php get_footer();?>