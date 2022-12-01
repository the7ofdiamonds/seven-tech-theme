<?php get_header();?>
<section>
    <h1 class="title"><?php the_title();?></h1>

    <?php get_template_part('includes/section', 'content');?>
    
    <?php if (comments_open()):
        comments_template(); 
    endif; ?>
</section>
<?php get_footer();?>