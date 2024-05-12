<?php get_header(); ?>

<section class="category">

    <h2 class="title">
        Matches for the category: <span><?php echo single_cat_title('', false); ?></span>
    </h2>

    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => get_queried_object()->slug
    );

    $posts = get_posts($args);

    if (is_array($posts)) :

        foreach ($posts as $post) :

            include get_template_directory() . '/includes/part-article.php';

        endforeach; else : ?>
        <div class="card">
            <p>There are no post in this category.</p>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>