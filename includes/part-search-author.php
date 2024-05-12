<?php
use SEVEN_TECH\User\User;

$user = new User;

$args = array(
    'role'   => 'author',
    'orderby' => 'display_name',
);

$authors = $user->getUsers($args);
?>

<div class="author-list">
    <h2 class="title">Search by Author</h2>

    <?php
    if (is_array($authors)) : ?>
        <div class="author-row">

            <?php foreach ($authors as $author) : ?>
                <button class="search-author-btn author-btn">
                    <h3 class="search-author-name author-name" onclick="window.location.href='<?php echo $author['user_url']; ?>';">
                        <?php echo $author['full_name']; ?>
                    </h3>
                </button>
            <?php endforeach; else : ?>
            <div class="card">
                <p>There are no authors to display.</p>
            </div>
        </div>

    <?php endif; ?>
</div>