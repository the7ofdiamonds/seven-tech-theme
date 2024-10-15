<?php

require_once get_template_directory() . '/User/User.php';

use SEVEN_TECH_THEME\User\User;

$usr = new User;

$user = $usr->getUser($post->post_author);

$user_url = $user['user_url'];
$avatar_url = $user['avatar_url'];
$full_name = $user['full_name'];
$email = $user['email'];
?>

<div class="member-card card">
    <div class="member-pic">
        <a href="<?php echo $user_url; ?>">
            <img src="<?php echo $avatar_url; ?>" alt="" />
        </a>
    </div>

    <div class="member-name">
        <h4 className="title"><?php echo $full_name; ?></h4>
    </div>

    <div class="member-contact">
        <a href="mailto:<?php echo $email; ?>">
            <i class="fa fa-envelope fa-fw"></i>
        </a>
    </div>
</div>