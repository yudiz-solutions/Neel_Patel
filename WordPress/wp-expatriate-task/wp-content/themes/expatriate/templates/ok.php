<?php
$get_post = array(
    'post_type' => 'news',

);

$get_news = get_posts($get_post);

foreach ($get_news as $val) {
    // echo '<pre>';
    // print_r($val);
    // echo '</pre>';
    ?>
    <div class="col-md-6 col-sm-12 news-side">
        <div class="row">
            <div class="col-sm-4">
                <?php
                // $img_url = get_the_post_thumbnail_url($val->ID);
                // $url = get_the_permalink($val->ID);
                // $title = get_the_title($val->ID);
                // $category = get_the_terms($val->ID, 'news-category');
                // $excerpt = get_the_excerpt($val->ID);
                ?>
                <a href="<?php echo get_the_permalink($val->ID) ?>" class="news-image"><img alt="news"
                        src="<?php echo $get_the_post_thumbnail_url($val->ID); ?>"></a>
            </div>
            <div class="col-sm-8 paddingl-none">
                <h6>
                    <a href="<?php echo get_the_permalink($val->ID) ?>">
                        <?php echo get_the_title($val->ID); ?>
                    </a>
                </h6>
                <?php
                echo "<pre>";
                print_r($category);
                echo "</pre>";
                ?>

                <p class="meta">
                    <span class="category">
                        <?php
                        print_r($category);
                        ?>
                    </span> Jul 31, 2018
                </p>
                <p>
                    <?php echo $get_the_excerpt($val->ID); ?>
                    <a href="<?php echo get_the_permalink($val->ID) ?>" class="read-more">Read More</a>
                </p>
            </div>
        </div>
    </div>
<?php } ?>