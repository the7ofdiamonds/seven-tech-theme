<div class="post-category">
    <?php
    global $post;

    $terms = get_the_terms($post->ID, 'category');
    error_log(print_r($terms, true));

    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
            $termlink = get_term_link($term);
            if (!is_wp_error($termlink)) :
            ?>
                <a class="category-link" href="<?php echo esc_url($termlink); ?>">
                    <?php echo esc_html($term->name); ?>
                </a>
            <?php endif;
        endforeach;
    endif;
    ?>
</div>
