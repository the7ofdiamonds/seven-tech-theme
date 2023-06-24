<?php $tags = get_tags(); ?>

<div class="search-tag-card card">

    <h2>Search by Tag</h2>

    <ul class="tag-list">
        <?php
        if (!empty($tags)) {
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
</div>