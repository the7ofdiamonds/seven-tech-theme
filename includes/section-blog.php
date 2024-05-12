<section class='blog'>
    <?php
    $post_types = get_post_types(['public' => true], 'objects');

    $postTypes = [];

    foreach ($post_types as $post_type) {
        if ($post_type->name != 'page' || $post_type->name != 'attachment') {
            $post_types[] = $post_type->name;
        }
    }

    $args = array(
        'post_type' => $postTypes,
    );

    $posts = get_posts($args);

    if ($posts) :
        foreach ($posts as $post) :
            include get_template_directory() . '/includes/part-article.php';
        endforeach; else : ?>
        <h3>There are no blog posts to display.</h3>
    <?php endif; ?>
</section>