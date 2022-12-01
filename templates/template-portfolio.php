<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

    <section id="portfolio" class="portfolio">

        <h2 class="title">    
        
            <?php the_title(); ?>
        </h2>

        <?php get_template_part('includes/part', 'portfolio');?>

    </section>

<?php get_footer(); ?>