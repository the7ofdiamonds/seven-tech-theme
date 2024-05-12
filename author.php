<?php
get_header();

use SEVEN_TECH\User\User;

$url = $_SERVER['REQUEST_URI'];

$user = (new User)->getUserBySlug($url);
?>
<section class="author">

    <h2 class="title"><?php echo $user['full_name']; ?></h2>

    <div class="author">
        <div class="author-info">

            <div class="author-pic card">
                <img src="<?php echo $user['avatar_url']; ?>" />
            </div>

            <h4 class="title">author</h4>
        </div>

        <div class="author-bio card">
            <p><?php echo $user['bio']; ?></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>