<?php get_header();?>
    <section>
        <h1 class="title"><?php the_title();?></h1>

        <?php get_template_part('includes/part', 'content');?>
        <?php get_the_comments_navigation(); ?>
        <?php echo wp_list_comments( $args ); ?>
        <?php comments_template(); ?>
        <?php the_posts_navigation(); ?>
    </section>
<?php get_footer();?>