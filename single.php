<?php get_header(); ?>

<section class="post">

    <h2 class="post-name title"><?php the_title(); ?></h2>

    <?php the_content(); ?>

    <?php get_template_part('includes/part', 'tag-list'); ?>

    <?php get_template_part('includes/part', 'category'); ?>

    <?php get_template_part('includes/part', 'author'); ?>

    <?php
    $args = array(
        'before'           => '<div class="pagination">' . __('Pages:', 'textdomain'),
        'after'            => '</div>',
        'link_before'      => '<span>',
        'link_after'       => '</span>',
        'next_or_number'   => 'number',
        'separator'        => ' ',
        'nextpagelink'     => __('Next page', 'textdomain'),
        'previouspagelink' => __('Previous page', 'textdomain'),
        'pagelink'         => '%',
        'echo'             => 1
    );
    wp_link_pages($args); ?>

</section>

<?php get_footer(); ?>