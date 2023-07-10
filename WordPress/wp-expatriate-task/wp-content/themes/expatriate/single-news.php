<?php
get_header();
$news_banner_grp = get_field('news_post_grp', 'option');
$news_pt_grp = get_field('news_pt_grp');
$temp = get_field('news_grp');
global $post;
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
    <section class="common-section article-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 right-border">
                    <div class="article-detail-inner">

                        <!-- BREADCRUMB STARTS -->
                        <?php do_action('insert_breadcrumb'); ?>
                        <!-- BREADCRUMB ENDS -->

                        <h5 class="article-title">
                            <?php echo $post->post_title; ?>
                        </h5>

                        <!-- NEWS FEATURE IMAGE CSS -->
                        <style>
                            .featured-articles {
                                margin: 24px 0 12px;
                                background: url("<?php echo get_the_post_thumbnail_url(); ?>") no-repeat center center / cover;
                                height: 320px;
                                border-radius: 2px;
                            }
                        </style>
                        <!------------------------------>

                        <div class="featured-articles feature1">
                        </div>
                        <div class="articles-meta">
                            <p class="item-meta">
                                <span class="category">
                                    <?php
                                    echo (get_the_terms($post->ID, 'news-category'))[0]->name;
                                    ?>
                                </span>
                                <?php echo get_the_date('M j, Y', $post->ID); ?>
                            </p>

                            <div class="social-share-block">
                                <p class="share-label">SHARE</p>
                                <ul class="social-share-menu">
                                    <?php dynamic_sidebar('social-icons'); ?>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                        if (!empty($news_pt_grp['post_content'])) { ?>
                            <div class="articles-content">
                                <?php echo $news_pt_grp['post_content']; ?>
                            </div>
                        <?php } ?>
                        <div class="articles-footer-meta">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="articles-tags">
                                        <?php
                                        if (!empty($news_pt_grp['tag_field_repeater'])) {
                                            foreach ($news_pt_grp['tag_field_repeater'] as $tag_val) { ?>
                                                <li><a href="<?php echo $tag_val['tag_link']['url']; ?>"><?php echo $tag_val['tag_link']['title']; ?></a></li>
                                            <?php }
                                        } ?>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-share-block">
                                        <p class="share-label">share</p>
                                        <ul class="social-share-menu">
                                            <?php dynamic_sidebar('social-icons'); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky_item" class="col-sm-4">
                    <div class="sidebar">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#popular">Popular</a></li>
                            <li><a data-toggle="tab" href="#recommended">Recommended</a></li>
                        </ul>
                        <div class="tab-content">

                            <!-- ////////// POPULAR POST BY VIEWS //////////////// -->

                            <div id="popular" class="tab-pane fade in active">
                                <?php
                                $popular_posts_args = array(
                                    'post_type' => 'news',
                                    'meta_key' => 'wp_post_views_count',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'DESC',
                                    'posts_per_page' => '5'
                                );

                                $popular_posts = new WP_Query($popular_posts_args);

                                if ($popular_posts->have_posts()) {
                                    while ($popular_posts->have_posts()) {
                                        $popular_posts->the_post();
                                        ?>
                                        <div class="article-tab-item">
                                            <div class="article-img">
                                                <img class="full-img" src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="article-img">
                                            </div>
                                            <div class="article-desc">
                                                <h4>
                                                    <a href="<?php echo get_the_permalink(); ?>">
                                                        <?php echo get_the_excerpt(); ?>
                                                    </a>
                                                </h4>
                                                <p class="item-meta">
                                                    <span class="category">
                                                        <?php echo (get_the_terms(get_the_ID(), 'news-category'))[0]->name; ?>
                                                    </span>
                                                    <?php echo get_the_date('M j, Y', get_the_ID()); ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                }
                                ?>
                            </div>

                            <!-- ////////// RECOMMENDED //////////////// -->

                            <div id="recommended" class="tab-pane fade">
                                <?php
                                $recommended_post_args = array(
                                    'post_type' => 'news',
                                    'numberposts' => '4',
                                    'orderby' => 'modified',
                                    'order' => 'ASC',
                                );

                                $recommended_post = new WP_Query($recommended_post_args);

                                if ($recommended_post->have_posts()) {
                                    while ($recommended_post->have_posts()) {
                                        $popular_posts->the_post();
                                        ?>
                                        <div class="article-tab-item">
                                            <div class="article-img">
                                                <img class="full-img" src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="article-img">
                                            </div>
                                            <div class="article-desc">
                                                <h4>
                                                    <a href="<?php echo get_the_permalink(); ?>">
                                                        <?php echo get_the_excerpt(); ?>
                                                    </a>
                                                </h4>
                                                <p class="item-meta">
                                                    <span class="category">
                                                        <?php echo (get_the_terms(get_the_ID(), 'news-category'))[0]->name; ?>
                                                    </span>
                                                    <?php echo get_the_date('M j, Y', get_the_ID()); ?>
                                                </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php
                                    }
                                    wp_reset_postdata();
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--========= ASSESMENT SECTION STARTS =========-->
    <?php
    do_action('insert_assessment_section');
    ?>
    <!--========= ASSESMENT SECTION ENDS =========-->
</main>
<!--========= FOOTER SECTION STARTS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->