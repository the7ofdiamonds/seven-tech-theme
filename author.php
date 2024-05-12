<?php
get_header();

use SEVEN_TECH\User\User;

global $post;

$user = (new User)->getUser($post->post_author);

$avatar_url = $user['avatar_url'];
$full_name = $user['full_name'];
$email = $user['email'];
$bio = $user['bio'];
?>
<section class="author">

    <h2 class="title"><?php echo $full_name; ?></h2>

    <div class="author">
        <div class="author-info">

            <div class="author-pic card">
                <img src="<?php echo $avatar_url; ?>" />
            </div>

            <h4 class="title">author</h4>
        </div>

        <div class="author-bio card">
            <p><?php echo $bio; ?></p>
        </div>
    </div>
</section>

<?php get_footer(); ?>