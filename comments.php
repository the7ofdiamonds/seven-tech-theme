<?php if ( post_password_required() ) : ?>

    <p>Please signin to comment or reply.</p>
<?php endif ?>

    <p>Any furthur questions leave a comment or reply</p>

<?php if ( have_comments() ) : ?>

<ol class="comment-list card">
    <?php 
    $args = array(
        'style' => 'li',
        'reverse_top_level' => true,
        'avatar_size' => 64,
        'format' => 'Html5'
    ); 
    
    wp_list_comments($args);
    ?>
</ol>
<?php endif ?>

<?php if ( !comments_open() && get_comments_number()) : ?>
    
    <p>Comments are closed.</p>

<?php endif ?>