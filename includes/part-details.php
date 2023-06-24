<details>
    <summary>
        <h3 class='post-name title'><?php echo get_the_title($post->ID); ?></h3>
    </summary>

    <?php get_template_part('includes/part', 'category'); ?>

    <div class="post-description-short">
        <?php echo get_the_excerpt(); ?>
    </div>

    <?php get_template_part('includes/part', 'tag-list'); ?>
</details>