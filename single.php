<?php
get_header();

use SEVEN_TECH\Content\Content;

include get_template_directory() . '/Router/Router.php';

$content = new Content;

$page = $_SERVER['REQUEST_URI'];

$pageContent = $content->getPageContent($page);
$title = $pageContent['title'];
$pageContentArray = $pageContent['content'];
?>

<section class="post">

    <h2 class="post-name title"><?php echo $title; ?></h2>

    <?php foreach ($pageContentArray as $content) : ?>
        <?php echo $content; ?>
    <?php endforeach; ?>

    <?php get_template_part('includes/part', 'tag-list'); ?>

    <?php get_template_part('includes/part', 'category'); ?>

    <?php get_template_part('includes/part', 'author'); ?>

    <?php
    $args = array(
        'before'           => '<div class="pagination">' . __('Pages:', 'textdomain'),
        'after'            => '</div>',
        'link_before'      => '<span>',
        'link_after'       => '</span>',
        'next_or_number'   => 'number',
        'separator'        => ' ',
        'nextpagelink'     => __('Next page', 'textdomain'),
        'previouspagelink' => __('Previous page', 'textdomain'),
        'pagelink'         => '%',
        'echo'             => 1
    );
    wp_link_pages($args); ?>

</section>

<?php get_footer(); ?>