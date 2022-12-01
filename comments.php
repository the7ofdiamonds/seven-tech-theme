<?php
    if ( post_password_required($_post)) {
        echo get_the_password_form();
        echo "<p>Please signin to comment or reply.</p>";
    } else {
        echo "<p>Any furthur questions leave a comment or reply</p>";
    }

    //Get only the approved comments
$args = array(
    'post_id' => 8,
    'status' => 'approve',
    'reply_text' => 'Reply',
    'avatar_size' => 64,
    'format' => 'html5',
    'short_ping' => true,
    'title-reply' => '',
    'echo' => true,
);

// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
$comment_ID = get_comment_ID();

// Comment Loop
if ( $comments ) {
 foreach ( $comments as $comment ) { ?>
 <div class='comment-card card'>

    <header>
        <div class="comment-author-avatar">
            <?php echo get_avatar(get_the_author_meta( 'ID' ), 96); ?>
        </div>
        <h4 class="comment-author">
            <?php echo get_comment_author(); ?>
        </h4>
        <h4 class="comment-date">
           Commented on <?php echo get_comment_date(); ?>
        </h4>
        <h4 class="comment-time">
            @ <?php echo get_comment_time( 'h:i:s A' ); ?>
        </h4>
    </header>
    
    <p class="comment-text">
        <?php echo get_comment_text($comment); ?>
    </p>
    <footer>
    <?php 
        $args = array(
            'title_reply' => ''
        );
        echo comment_form($args);
    ?>
    </footer>
 </div>
 <?php }
} else {
 echo 'No comments found.';
}?>