<?php
global $post;

$tags = get_the_tags($post->ID);

if (is_array($tags)) : ?>

    <div class="tax-list">

        <h4 class="title">tags</h4>

        <div class="tax-row">
            <?php foreach ($tags as $tag) :
                $tag_link = get_tag_link($tag->term_id);
                if (!is_wp_error($tag_link)) :
            ?>
                <button class="tax-term" onclick="window.location.href='<?php echo esc_url($tag_link) ?>'">
                    <h3>#<?php echo $tag->name ?></h3>
                </button>
            <?php endif;
            endforeach; ?>
        </div>
    </div>
<?php endif; ?>