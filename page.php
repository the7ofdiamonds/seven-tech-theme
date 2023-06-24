<?php get_header();?>
    <section>
        <h1 class="title"><?php the_title();?></h1>

        <?php get_template_part('includes/part', 'content');?>
        
        <?php get_the_comments_navigation(); ?>

        <!-- <?php echo wp_list_comments(); ?> -->

        <?php comments_template(); ?>

        <?php the_posts_navigation(); ?>

        <?php wp_link_pages(); ?>

    </section>
<?php get_footer();?>