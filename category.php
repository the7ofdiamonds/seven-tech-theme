<?php get_header(); ?>

<section class="category">

    <h2 class="title">
        Matches for the category: <?php echo single_cat_title('', false); ?>
    </h2>

    <?php
    $args = array(
        'post_type' => array('post', 'portfolio', 'services'),
        'category_name' => get_queried_object()->slug
    );

    $posts = get_posts($args);

    if ($posts) {

        foreach ($posts as $post) {
            include get_template_directory() . '/includes/part-article.php';
        }
    } else {
    ?>
        <div class="card">
            <p>There are no post in this category.</p>
        </div>
    <?php
    }
    ?>
</section>

<?php get_footer(); ?>