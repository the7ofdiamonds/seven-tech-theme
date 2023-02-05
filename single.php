<?php get_header();?>
<section class="single-post">
    <h1 class="title"><?php the_title();?></h1>

    <?php get_template_part('includes/part', 'content');?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>></div>
    <?php if (comments_open()):
        comments_template(); 
    endif; ?>
</section>
<?php get_footer();?>