<?php $tags = get_tags(); ?>

<div class="tax-list">

    <h2 class="title">Search by Tag</h2>

    <div class="tax-row">
        <?php
        if (!empty($tags)) {
            foreach ($tags as $tag) {
                $tag_link = get_tag_link($tag->term_id);
        ?>
                <button class="tax-term" onclick="window.location.href='<?php echo esc_url($tag_link) ?>'">
                    <h3>#<?php echo $tag->name ?></h3>
                </button>
        <?php
            }
        } else {
            echo 'No tags found.';
        }
        ?>
    </div>
</div>