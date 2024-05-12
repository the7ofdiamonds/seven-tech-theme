<?php get_header();?>
    <section class="page">
        <h1 class="title"><?php the_title();?></h1>

        <?php get_template_part('includes/part', 'content');?>
        
    </section>
<?php get_footer();?>