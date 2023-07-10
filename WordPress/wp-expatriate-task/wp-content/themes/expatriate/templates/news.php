<?php
/* Template Name: News */

get_header();
$news_banner_grp = get_field('news_banner_grp', 'option');
$news_post_grp = get_field('news_post_grp', 'option');
$first_news_ID = $news_post_grp['first_news'];
$first_news_cat = get_the_terms($first_news_ID, 'news-category');
// $first_news_cat_name = $first_news_cat['name'];
// foreach ($first_news_cat as $key) {
//     echo "<pre>";
//     print_r($key->name);
//     echo "</pre>";
// }


?>

<!--========= BANNER SECTION STARTS =========-->
<?php if (!empty($news_banner_grp)) { ?>
    <div class="home-banner">
        <?php if (!empty($news_banner_grp['img'])) { ?>
            <div class="banner"
                style="background: #5C5C5C url('<?php echo $news_banner_grp['img']['url']; ?>') no-repeat center center / cover;">
            <?php } ?>

            <?php if (!empty($news_banner_grp['heading'])) { ?>
                <div class="container">
                    <h1>
                        <?php echo $news_banner_grp['heading']; ?>
                    </h1>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<!--========= BANNER SECTION ENDS =========-->

<main>
    <!--========= COMMON SECTION ENDS =========-->
    <section class="common-section">
        <div class="container">
            <div class="news-blocks">
                <!-- /************ FIRST POST STARTS ************/ -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="image-news"
                            style="background: #ccc url('<?php echo get_the_post_thumbnail_url($first_news_ID); ?>') no-repeat center center / cover;">
                            <div class="news-inner">
                                <h6>
                                    <a href="<?php the_permalink($first_news_ID); ?>">
                                        <?php echo get_the_title($first_news_ID); ?>
                                    </a>
                                </h6>
                                <p>
                                    <span class="category">
                                        <?php print_r($first_news_cat[0]->name); ?>
                                    </span>
                                    <?php
                                    echo get_the_date('M j, Y', $first_news_ID);
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /************ FIRST POST STARTS ************/ -->

                <!-- /************ POST LISTING STARTS ************/ -->
                <div class="row" id="news-list">
                    <?php
                    $post_args = array(
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'exclude' => array($first_news_ID),
                        'posts_per_page' => 4,
                        'paged' => 1
                    );

                    $get_news = get_posts($post_args);
                    $max_page = count($get_news);
                    ?>

                    <?php foreach ($get_news as $post_val) {
                        ?>
                        <input type="hidden" id="max-page" value=<?= $max_page ?>>

                        <div class="col-md-6 col-sm-12 news-side">
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="<?php echo get_the_permalink($post_val->ID); ?>" class="news-image">
                                        <img alt="news" src="<?php echo get_the_post_thumbnail_url($post_val->ID); ?>">
                                    </a>
                                </div>
                                <div class="col-sm-8 paddingl-none">
                                    <h6>
                                        <a href="<?php echo get_the_permalink($post_val->ID); ?>">
                                            <?php echo get_the_title($post_val->ID); ?>
                                        </a>
                                    </h6>

                                    <p class="meta">
                                        <span class="category">
                                            <?php
                                            $list_cat_arr = get_the_terms($post_val->ID, 'news-category');
                                            echo $list_cat_arr[0]->name; ?>
                                        </span>
                                        <?php echo get_the_date('M j, Y', $post_val->ID); ?>
                                    </p>

                                    <p>
                                        <?php echo get_the_excerpt($post_val->ID); ?>
                                        <a href="<?php echo get_the_permalink($post_val->ID); ?>" class="read-more">Read
                                            More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
                <!-- /************ POST LISTING ENDS ************/ -->
            </div>
            <div class="text-center">
                <button class="theme-btn" id="news-loadmore-btn">Load More</button>
            </div>
        </div>
    </section>
    <!--========= COMMON SECTION ENDS =========-->


    <!--========= ASSESMENT SECTION STARTS =========-->
    <?php
    do_action('insert_assessment_section');
    ?>
    <!--========= ASSESMENT SECTION ENDS =========-->
</main>

<!--========= FOOTER SECTION STARTS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->