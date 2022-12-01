<?php
/*
Template Name: Team
*/
?>

<?php get_header();?>

    <section class="contact">

        <h2 class="title">    
        
            <?php the_title(); ?>
        </h2>

        <?php get_template_part('includes/part', 'team');?>

    </section>
    
<?php get_footer();?>