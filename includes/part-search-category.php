<div class="tax-list">

    <h2 class="title">Search by Category</h2>

    <div class="tax-row">
        <?php
        $categories = get_categories();

        if (!empty($categories)) {

            foreach ($categories as $category) {
                $termlink = get_term_link($category->term_id);
        ?>
                <button class="tax-term" onclick="window.location.href='<?php echo esc_url($termlink) ?>'">
                    <h3><?php echo $category->name; ?></h3>
                </button>
        <?php
            }
        } else {
            echo 'No categories found.';
        }
        ?>
    </div>
</div>