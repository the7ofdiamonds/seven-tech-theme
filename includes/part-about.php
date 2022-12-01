<div class="about-card card">
    <?php
        $page = get_post();
        
        if ($page) {
            echo apply_filters('the_content', $page->post_content);
        }
    ?>
</div>