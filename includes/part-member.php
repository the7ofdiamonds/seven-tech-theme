<div class="member-card card">

    <h3 class="member-title">
        <?php echo get_post_meta(get_the_id(), 'member_title', true); ?>
    </h3>
    <div class="member-photo photo-link">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>
        </a>
    </div>
    <h4 class="member-name">
    <?php echo get_post_meta(get_the_id(), 'member_name', true); ?>
    </h4>
    <div class="member-about">
        <?php the_excerpt();?>
    </div>
</div>    