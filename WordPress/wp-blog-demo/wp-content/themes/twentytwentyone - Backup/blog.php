<?php
/* Template Name: Blog */

get_header();


echo "Blog.php Template";

/////////////////////////////

$args = array(
    'post_type' => 'blog',
    'post_per_page' => 5,
    // 'paged' => $_POST['paged'],
);

$query = new WP_Query($args);

// echo "<pre>";
// print_r($query);
// echo "</pre>";
$response = "";

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="display_blog" style="text-align:center">
            <?php
            the_title("<h3>", "</h3>");
            the_post_thumbnail(array(500, 500));
            the_content("<p>", "</p>");
            ?>
        </div>
        <?php
    }
}

if ($query->max_num_pages > 1) { ?>
    <div class="display_blog" style="text-align:center">
        <button class="load_more">More Blogs</button>
    </div>
<?php
}
get_footer();
?>