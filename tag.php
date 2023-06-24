<?php get_header(); ?>

<section class="tag">

    <h2 class="title">
        Matches for the tag: <?php echo single_tag_title('', false); ?>
    </h2>

    <?php
    $args = array(
        'post_type' => array('post', 'portfolio', 'services'),
        'tag' => get_queried_object()->slug
    );

    $posts = get_posts($args);

    if ($posts) {

        foreach ($posts as $post) {
            include get_template_directory() . '/includes/part-article.php';
        }
    } else {
    ?>
        <div class="card">
            <p>There are no post with that tag.</p>
        </div>
    <?php
    }
    ?>
</section>

<?php get_footer(); ?>