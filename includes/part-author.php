<div class="user-card card">

    <div class="left">
        <div class="user-role">

            <h4><?php
                $author = get_userdata($post->post_author);
                $authorRoles = $author->roles;

                foreach ($authorRoles as $roles) {
                    echo ucfirst($roles);
                }
                ?></h4>
        </div>

        <div class="user-pic">

            <a href="<?php echo get_author_posts_url($post->post_author); ?>">
                <?php echo get_avatar($post->post_author) ?>
            </a>
        </div>

        <div class="user-name">

            <h3><?php
                $firstName = get_the_author_meta('user_firstname', $post->post_author);
                $lastName = get_the_author_meta('user_lastname', $post->post_author);

                echo "$firstName $lastName"
                ?></h3>
        </div>
    </div>

    <div class="right">
        <div class="user-bio">

            <p><?php
                the_author_meta('description', $post->post_author);
                ?></p>
        </div>

        <div class="user-contact">

            <button onclick="window.open('mailto:<?php echo get_the_author_meta('email', $post->post_author); ?>')">
                <h3>Hire
                    <?php the_author_meta('user_firstname', $post->post_author); ?>
                </h3>
            </button>
        </div>
    </div>
</div>