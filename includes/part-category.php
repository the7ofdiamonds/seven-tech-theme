<?php
global $post;

$terms = get_the_terms($post->ID, 'category');

if (is_array($terms)) : ?>

    <div class="tax-list">

        <h4 class="title">categories</h4>

        <div class="tax-row">
            <?php foreach ($terms as $term) :
                $termlink = get_term_link($term);
                if (!is_wp_error($termlink)) :
            ?>
                <button class="tax-term" onclick="window.location.href='<?php echo esc_url($termlink) ?>'">
                    <h3><?php echo $term->name; ?></h3>
                </button>
            <?php endif;
            endforeach; ?>
        </div>
    </div>
<?php endif;
