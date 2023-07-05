<?php
/* Template Name: Home */
get_header();

$banner_slider_repeater = get_field('banner_slider_repeater');
$about_us_grp = get_field('about_us_grp');
$service_section_grp = get_field('service_section_grp');
$assessment_grp = get_field('assessment_grp');
$news_grp = get_field('news_grp');
$team_section_grp = get_field('team_section_grp');
?>

<!--******************* Banner Section Start *********************-->
<?php if (!empty($banner_slider_repeater)) { ?>
    <div class="home-banner">
        <div class="home-slider">
            <?php foreach ($banner_slider_repeater as $key_slider) { ?>
                <div>
                    <div class="slide"
                        style="background: #5C5C5C url('<?php echo $key_slider['banner_bg_img']['url']; ?>') no-repeat center center / cover;">
                        <div class="container">
                            <div class="slide-inner">
                                <div class="slide-content">
                                    <h1>
                                        <?php echo $key_slider['heading_normal']; ?> <span>
                                            <?php echo $key_slider['heading_highlighted']; ?>
                                        </span>
                                    </h1>
                                    <p class="tagline">
                                        <?php echo $key_slider['tagline']; ?>
                                    </p>
                                    <ul class="btn-list">
                                        <li><a href="<?php echo $key_slider['button_1']['url']; ?> "
                                                target="<?php echo $key_slider['button_1']['target']; ?>"
                                                class="theme-btn"><?php echo $key_slider['button_1']['title']; ?></a></li>
                                        <li><a href="<?php echo $key_slider['button_2']['url']; ?>"
                                                target="<?php echo $key_slider['button_2']['target']; ?>"
                                                class="theme-btn fill-btn"><?php echo $key_slider['button_2']['title']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->

<!--******************* Middle Section Start ******************-->
<main>
    <!-- ///////////////////////////////// -->
    <!-- //// ABOUT US SECTION STARTS //// -->
    <!-- ///////////////////////////////// -->
    <section class="common-section about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="bg-img-block">
                        <div class="heading-block">
                            <h2>
                                <?php echo $about_us_grp['heading']; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="desc-block">
                        <?php echo $about_us_grp['heading']; ?>
                        <p>
                            <?php echo $about_us_grp['para']; ?>
                        </p>
                        <a href="<?php echo $about_us_grp['read_more_btn']['url']; ?>"
                            target="<?php echo $about_us_grp['read_more_btn']['target']; ?>" class="theme-btn"><?php echo $about_us_grp['read_more_btn']['title']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ///////////////////////////////// -->
    <!-- //// ABOUT US SECTION ENDS //// -->
    <!-- ///////////////////////////////// -->


    <!-- ///////////////////////////////// -->
    <!-- //// SERVICE SECTION STARTS //// -->
    <!-- ///////////////////////////////// -->
    <section class="common-section services-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-push-8">
                    <div class="services-title">
                        <?php echo $service_section_grp['heading']; ?>
                        <ul class="nav common-nav">
                            <li class="active">
                                <h3>
                                    <a data-toggle="pill" href="#pre-arrival">
                                        <?php echo $service_section_grp['category_1']; ?>
                                    </a>
                                </h3>
                            </li>
                            <li>
                                <h3>
                                    <a data-toggle="pill" href="#post-arrival">
                                        <?php echo $service_section_grp['category_2']; ?>
                                    </a>
                                </h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="tab-content">
                        <div id="pre-arrival" class="tab-pane fade in active">
                            <div class="row">
                                <?php foreach ($service_section_grp['cat1_showcase'] as $key_service_1) { ?>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="service-item">
                                            <img src="<?php echo $key_service_1['service_img']['url']; ?>"
                                                alt="<?php echo $key_service_1['service_img']['alt']; ?>">
                                            <div class="bottom-block">
                                                <p>
                                                    <?php echo $key_service_1['service_title']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="post-arrival" class="tab-pane fade">
                            <div class="row">
                                <?php foreach ($service_section_grp['cat2_showcase'] as $key_service_2) { ?>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="service-item">
                                            <img src="<?php echo $key_service_2['service_img']['url']; ?>"
                                                alt="<?php echo $key_service_2['service_img']['url']; ?>">
                                            <div class="bottom-block">
                                                <p>
                                                    <?php echo $key_service_1['service_title']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ///////////////////////////////// -->
    <!-- ///// SERVICE SECTION ENDS ///// -->
    <!-- ///////////////////////////////// -->


    <!-- ///////////////////////////////// -->
    <!-- //// ASSESSMENT SECTION ENDS //// -->
    <!-- ///////////////////////////////// -->
    <section class="assessment-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>
                        <?php echo $assessment_grp['heading']; ?>
                    </h2>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?php echo $assessment_grp['apply_now_btn']['url']; ?>"
                        target="<?php echo $assessment_grp['apply_now_btn']['target']; ?>" class="theme-btn white-btn">
                        <?php echo $assessment_grp['apply_now_btn']['title']; ?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- ///////////////////////////////// -->
    <!-- //// ASSESSMENT SECTION ENDS //// -->
    <!-- ///////////////////////////////// -->


    <!-- ///////////////////////////////// -->
    <!-- //// NEWS SECTION STARTS //// -->
    <!-- ///////////////////////////////// -->
    <section class="common-section home-news-section">
        <div class="container">
            <div class="home-news-list">
                <div class="col-sm-3">
                    <div class="news-box news-list-title">
                        <div class="news-desc">
                            <h2>
                                <?php echo $news_grp['heading']; ?>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="news-box"
                        style="background: url('<?php echo $news_grp['news_1_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p>
                                <?php echo $news_grp['news_1_grp']['tagline']; ?>
                            </p>
                            <h5><a href="<?php echo $news_grp['news_1_grp']['description']['url']; ?>"
                                    target="<?php echo $news_grp['news_1_grp']['description']['target']; ?>"><?php echo $news_grp['news_1_grp']['description']['title']; ?></a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="news-box"
                        style="background: url('<?php echo $news_grp['news_2_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p>
                                <?php echo $news_grp['news_2_grp']['tagline']; ?>
                            </p>
                            <h5>
                                <a href="<?php echo $news_grp['news_2_grp']['description']['url']; ?>"
                                    target="<?php echo $news_grp['news_2_grp']['description']['target']; ?>">
                                    <?php echo $news_grp['news_2_grp']['description']['title']; ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="news-box"
                        style="background: url('<?php echo $news_grp['news_3_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p>
                                <?php echo $news_grp['news_3_grp']['tagline']; ?>
                            </p>
                            <h5>
                                <a href="<?php echo $news_grp['news_3_grp']['description']['url']; ?>"
                                    target="<?php echo $news_grp['news_3_grp']['description']['target']; ?>">
                                    <?php echo $news_grp['news_3_grp']['description']['title']; ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="news-box"
                        style="background: url('<?php echo $news_grp['news_4_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p>
                                <?php echo $news_grp['news_4_grp']['tagline']; ?>
                            </p>
                            <h5>
                                <a href="<?php echo $news_grp['news_4_grp']['description']['url']; ?>"
                                    target="<?php echo $news_grp['news_4_grp']['description']['target']; ?>">
                                    <?php echo $news_grp['news_4_grp']['description']['title']; ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="<?php echo $news_grp['more_news_btn']['url']; ?>"
                    target="<?php echo $news_grp['more_news_btn']['target']; ?>" class="theme-btn"><?php echo $news_grp['more_news_btn']['title']; ?></a>
            </div>

        </div>
    </section>
    <!-- ///////////////////////////////// -->
    <!-- //// NEWS SECTION ENDS //// -->
    <!-- ///////////////////////////////// -->


    <!-- ///////////////////////////////// -->
    <!-- //// TEAM SECTION STARTS //// -->
    <!-- ///////////////////////////////// -->
    <section class="common-section home-team-section">
        <div class="container">
            <div class="text-center">
                <h2>
                    <?php echo $team_section_grp['heading']; ?>
                </h2>
            </div>
            <div class="row">
                <?php foreach ($team_section_grp['repeater'] as $key_team) { ?>
                    <div class="col-sm-4">
                        <div class="team-box"
                            style="background: #015e7d url('<?php echo $key_team['team_img']['url']; ?>') no-repeat center center / cover;">
                            <div class="team-desc">
                                <h3>
                                    <?php echo $key_team['team_heading']; ?>
                                </h3>
                                <p>
                                    <?php echo $key_team['team_para']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="text-center">
                <a href="<?php echo $team_section_grp['button']['url']; ?>"
                    target="<?php echo $team_section_grp['button']['target']; ?>" class="theme-btn white-btn"><?php echo $team_section_grp['button']['title']; ?></a>
            </div>
        </div>
    </section>
    <!-- ///////////////////////////////// -->
    <!-- //// TEAM SECTION ENDS //// -->
    <!-- ///////////////////////////////// -->
</main>
<!--******************* Middle Section End ******************-->

<!--******************* Footer Section Starts ******************-->
<?php get_footer(); ?>
<!--******************* Footer Section Ends ******************-->