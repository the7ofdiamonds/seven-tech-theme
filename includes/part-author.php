<div class="author-card card">

    <div class="left">
        <a href="<?php echo get_author_posts_url($post->post_author); ?>">
        <?php echo get_avatar( $post->post_author ) ?>
        </a>
        <?php $firstName = get_the_author_meta('user_firstname', $post->post_author);
                $lastName = get_the_author_meta('user_lastname', $post->post_author);
        ?>

        <h4><?php echo "$firstName $lastName" ?></h4>

        <p><?php 
        $author = get_userdata($post->post_author);
        $authorRoles = $author->roles;

        foreach($authorRoles as $roles) {
            echo ucfirst($roles);
        }
        ?></p>
    </div>
    <div class="right">
        <h3 class="about-title">About 
        <?php the_author_meta('user_firstname', $post->post_author); ?>
        </h3>
        <p><?php the_author_meta('description', $post->post_author); ?></p>

        <button onclick="window.open('mailto:<?php echo get_the_author_meta('email', $post->post_author); ?>')">
            <h3>Hire
                <?php the_author_meta('user_firstname', $post->post_author); ?>
            </h3>
        </button>
    </div>
</div>
