<?php

require_once get_template_directory() . '/User/User.php';

use SEVEN_TECH_THEME\User\User;

$usr = new User;

get_header();

$url = $_SERVER['REQUEST_URI'];

$user = $usr->getUserBySlug($url); ?>

<section class="author">

    <?php if (is_array($user)) : ?>

        <h2 class="title"><?php echo $user['full_name']; ?></h2>

        <div class="author">
            <div class="author-info">

                <div class="author-pic card">
                    <img src="<?php echo $user['avatar_url']; ?>" />
                </div>

                <div class="author-roles-row">
                    <?php foreach ($user['roles'] as $role) : ?>
                        <h4 class="title">
                            <?php echo $role; ?>
                        </h4>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="author-bio card">
                <p><?php echo $user['bio']; ?></p>
            </div>
        </div>

    <?php else : ?>

        <div class="card">
            <p><?php echo $user; ?></p>
        </div>

    <?php endif; ?>
</section>


<?php get_footer(); ?>