<?php
/* Template Name: Blog */

get_header();
echo "Blog.php Template";

/////////////////////////////
?>
<div class="blog-list">
    <?php
    $args = array(
        'post_type' => 'blog',
        'post_status' => 'publish',
        'posts_per_page' => 5,
        'paged' => 2,
        // 'meta_query' => array(
        //     array(
        //         'key' => 'Custom meta',
        //         'value' => 'Meta value for blog',
        //         'compare' => '='
        //     )
        // )
    );
    $blogs = new WP_Query($args);
    // echo "<pre>";
    // print_r($blogs);
    // echo "</pre>";
    
    if ($blogs->have_posts()) { ?>
        <?php
        while ($blogs->have_posts()) {
            $blogs->the_post();
            $max_page = $blogs->max_num_pages;
            ?>
            <div class="blog-body" style="text-align: center">
                <input type="hidden" id="max-page" value=<?= $max_page ?>>
                <h3>
                    <?php the_title(); ?>
                </h3>
                <?php the_post_thumbnail(array(500, 500)); ?>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        <?php }
        ?>
    </div>
    <?php
    }
    wp_reset_postdata();
    ?>

<div class="load-more-container" style="text-align: center">
    <button id="load-more-btn">Load More </button>
</div>

<?php
get_footer();
?>