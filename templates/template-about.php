<?php
/*
Template Name: About
*/
?>

<?php get_header();?>

    <section class='about'>

        <h2 class="title">    
        
            <?php the_title(); ?>
        </h2>

        <?php get_template_part('includes/part', 'about');?>
    

    </section>
    
<?php get_footer();?>