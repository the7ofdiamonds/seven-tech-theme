<section class='blog'>
    <?php
    $post_types = get_post_types(['public' => true], 'objects');

    foreach ($post_types as $post_type) {
        $args = array(
            'post_type' => $post_type->name,
        );

        $posts = get_posts($args);

        if ($posts) {
            foreach ($posts as $post) {
                include get_template_directory() . '/includes/part-article.php';
            }
        }
    }
    ?>
</section>
