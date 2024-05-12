<div class="author-list">
    <h2 class="title">Search by Author</h2>

    <?php
    $authors = get_users(array(
        'role'   => 'author',
        'orderby' => 'display_name',
    ));

    if (is_array($authors)) : ?>
        <div class="author-row">

            <?php foreach ($authors as $author) :
                $author_name = $author->display_name;
                $author = get_user_by('login', $author_name);
                $user_id = $author->ID;
                $author_id = get_the_author_meta('ID', $user_id);
                $first_name = get_the_author_meta('first_name', $author_id);
                $last_name = get_the_author_meta('last_name', $author_id);
                $full_name = $first_name . ' ' . $last_name;
                $user_link = get_author_posts_url($author_id);
            ?>
                <button class="search-author-btn author-btn">
                    <h3 class="search-author-name author-name" onclick="window.location.href='<?php echo $user_link; ?>';">
                        <?php echo $full_name; ?>
                    </h3>
                </button>
            <?php endforeach; else : ?>
            <div class="card">
                <p>There are no authors to display.</p>
            </div>
        </div>

    <?php endif; ?>
</div>