<?php
/* Template Name: Blog */

get_header();


echo "Blog.php Template";

/////////////////////////////

$args = array(
    'post_type' => 'blog'
);

$query = new WP_Query($args);

// echo "<pre>";
// print_r($query);
// echo "</pre>";

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        the_title("<h3>", "</h3>");
        the_post_thumbnail(array(500, 500));
        the_content("<p>", "</p>");
    }
}

/////////////////////////////
if ($query->max_num_pages > 1) { ?>
    <button class="load_more">More</button>
    <?php
}
get_footer();
?>