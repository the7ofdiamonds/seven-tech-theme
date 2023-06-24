<?php $tags = get_the_tags($post->ID); ?>
<ul class="tag-list">

    <?php
    if ($tags) {
        foreach ($tags as $tag) {
            $tag_link = get_tag_link($tag->term_id);
    ?>
            <li>
                <button class="tag-btn" onclick="window.location.href='<?php echo esc_url($tag_link) ?>'">
                    <h3><?php echo $tag->name ?></h3>
                </button>
            </li>
    <?php
        }
    } else {
        echo 'No tags found.';
    }
    ?>
</ul>