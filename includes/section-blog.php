<section class='blog'>
    <?php
    // Get all registered post types
    $post_types = get_post_types(['public' => true], 'objects');

    foreach ($post_types as $post_type) {
        $args = array(
            'post_type' => $post_type->name,
        );

        $posts = get_posts($args);

        if ($posts) {
            foreach ($posts as $post) {
                // Include your template part here
                include get_template_directory() . '/includes/part-article.php';
            }
        }
    }
    ?>
</section>
