<?php $search_term = get_search_query(); ?>
<section class="search">

	<?php get_template_part('includes/part', 'search-bar'); ?>

	<h2>Search Results for: <?php echo $search_term; ?></h2>

	<?php
	$args = array(
		's' => $search_term,
	);

	$query = new WP_Query($args);


	if ($query->have_posts()) {

		while ($query->have_posts()) {
			$query->the_post();			

			get_template_part('includes/part', 'article');
		}
	} else {
	?>
		<h1>No Results Found</h1>
		<p>Sorry, but nothing matched your search terms. Please try again.</p>
	<?php
	}
	wp_reset_postdata();
	?>

	<?php get_template_part('includes/part', 'search-tag'); ?>

	<?php get_template_part('includes/part', 'search-category'); ?>

	<?php get_template_part('includes/part', 'search-author'); ?>

</section>