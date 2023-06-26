// function enqueuing_script()
// {

// wp_register_script('my_loadmore', get_stylesheet_directory_uri() . '/loadmore.js', array('jquery'), true);
// wp_enqueue_script('my_loadmore');
// }
// add_action('wp_enqueue_scripts', 'enqueuing_script');

// function load_more()
// {
// ?>
<!-- // 	<div class="blog-list"> -->
<?php
// 		$blogs = new WP_Query([
// 			'post_type' => 'blog',
// 			'posts_per_page' => 3,
// 			'paged' => $_POST['paged']
// 		]);

// 		if ($blogs->have_posts()) { ?>
<?php
// 			while ($blogs->have_posts()) {
// 				$blogs->the_post();
// 				get_template_part('parts/card', 'blog');
// 				?>

<!-- // 				<div class="blog-body" style="text-align: center">
// 					<h3>
// 						<?php //the_title(); ?>
// 					</h3>
// 					<?php //the_post_thumbnail(array(500, 500)); ?>
// 					<p>
// 						<?php //the_content(); ?>
// 					</p>
// 				</div> sdhfksdjfksdfskfjb -->
<?php //}
// 			?>
<!-- // 		</div> -->
<?php
// 		}
// 		wp_reset_postdata();
// }

// add_action('wp_ajax_loadmore', 'load_more');
// add_action('wp_ajax_nopriv_loadmore', 'load_more');

// function localize()
// {
// 	wp_localize_script(
// 		'my_loadmore',
// 		'localURL',
// 		array(
// 			'ajaxURL' => admin_url('admin-ajax.php'),
// 		)
// 	);
// }

// add_action('wp_enqueue_script', 'localize');