<section class='blog'>
		<?php
		$args = array(
			'post_type' => ['post']
		);
		$posts = get_posts($args);


		if ($posts) {

			foreach ($posts as $post) {
		?>

				<?php include get_template_directory() . '/includes/part-article.php'; ?>

		<?php
			}
		}
		?>
</section>