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

<!--========= BANNER SECTION STARTS =========-->
<?php if (!empty($banner_slider_repeater)) { ?>
    <div class="home-banner">
        <div class="home-slider">
            <?php foreach ($banner_slider_repeater as $key_slider) { ?>
                <div>
                    <div class="slide"
                        style="background: #5C5C5C url('<?= $key_slider['banner_bg_img']['url']; ?>') no-repeat center center / cover;">
                        <div class="container">
                            <div class="slide-inner">
                                <div class="slide-content">
                                    <?php if (!empty($key_slider['heading_normal']) || !empty($key_slider['heading_highlighted'])) { ?>
                                        <h1>
                                            <?= $key_slider['heading_normal']; ?> <span>
                                                <?= $key_slider['heading_highlighted']; ?>
                                            </span>
                                        </h1>
                                    <?php } ?>

                                    <?php if (!empty($key_slider['tagline'])) { ?>
                                        <p class="tagline">
                                            <?= $key_slider['tagline']; ?>
                                        </p>
                                    <?php } ?>

                                    <ul class="btn-list">
                                        <?php if (!empty($key_slider['button_1'])) { ?>
                                            <li>
                                                <a href="<?= $key_slider['button_1']['url']; ?> "
                                                    target="<?= $key_slider['button_1']['target']; ?>"
                                                    class="theme-btn"><?= $key_slider['button_1']['title']; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        <?php if (!empty($key_slider['button_2'])) { ?>
                                            <li>
                                                <a href="<?= $key_slider['button_2']['url']; ?>"
                                                    target="<?= $key_slider['button_2']['target']; ?>"
                                                    class="theme-btn fill-btn"><?= $key_slider['button_2']['title']; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
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
<!--========= BANNER SECTION ENDS =========-->

<main>
    <!----------------------------------->
    <!------ ABOUT US SECTION STARTS----->
    <!----------------------------------->
    <?php if (!empty($about_us_grp)) { ?>
    <section class="common-section about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="bg-img-block">
                        <div class="heading-block">
                            <?php if (!empty($about_us_grp['heading'])) { ?>
                            <h2>
                                <?= $about_us_grp['heading']; ?>
                            </h2>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="desc-block">
                        <?php if (!empty($about_us_grp['para'])) { ?>
                        <p>
                            <?= $about_us_grp['para']; ?>
                        </p>
                        <?php } ?>

                        <?php if (!empty($about_us_grp['read_more_btn'])) { ?>
                        <a href="<?= $about_us_grp['read_more_btn']['url']; ?>"
                            target="<?= $about_us_grp['read_more_btn']['target']; ?>" class="theme-btn"><?= $about_us_grp['read_more_btn']['title']; ?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!----------------------------------->
    <!------- ABOUT US SECTION ENDS ----->
    <!----------------------------------->

    <!------------------------------------->
    <!------ SERVICE SECTION STARTS-------->
    <!------------------------------------->
    <?php if (!empty($service_section_grp)) { ?>
    <section class="common-section services-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-push-8">
                    <div class="services-title">
                        <?php
                        if (!empty($service_section_grp['heading'])) {
                            echo $service_section_grp['heading'];
                        }

                        if (!empty($service_section_grp['category_1']) || !empty($service_section_grp['category_2'])) { ?>
                        <ul class="nav common-nav">
                            <?php if (!empty($service_section_grp['category_1'])) { ?>
                            <li class="active">
                                <h3>
                                    <a data-toggle="pill" href="#pre-arrival">
                                        <?= $service_section_grp['category_1']; ?>
                                    </a>
                                </h3>
                            </li>
                            <?php } ?>

                            <?php if (!empty($service_section_grp['category_2'])) { ?>
                            <li>
                                <h3>
                                    <a data-toggle="pill" href="#post-arrival">
                                        <?= $service_section_grp['category_2']; ?>
                                    </a>
                                </h3>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-sm-8 col-sm-pull-4">
                    <div class="tab-content">
                        <?php if (!empty($service_section_grp['cat1_showcase'])) { ?>
                        <div id="pre-arrival" class="tab-pane fade in active">
                            <div class="row">
                                <?php foreach ($service_section_grp['cat1_showcase'] as $key_service_1) { ?>
                                <div class="col-sm-6 col-md-3">
                                    <div class="service-item">
                                        <?php if (!empty($key_service_1['service_img'])) { ?>
                                        <img src="<?= $key_service_1['service_img']['url']; ?>"
                                            alt="<?= $key_service_1['service_img']['alt']; ?>">
                                        <?php } ?>

                                        <?php if (!empty($key_service_1['service_title'])) { ?>
                                        <div class="bottom-block">
                                            <p>
                                                <?= $key_service_1['service_title']; ?>
                                            </p>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>

                        <?php if (!empty($service_section_grp['cat2_showcase'])) { ?>
                        <div id="post-arrival" class="tab-pane fade">
                            <div class="row">
                                <?php foreach ($service_section_grp['cat2_showcase'] as $key_service_2) { ?>
                                <div class="col-sm-6 col-md-3">
                                    <div class="service-item">
                                        <?php if (!empty($key_service_2['service_img'])) { ?>
                                        <img src="<?= $key_service_2['service_img']['url']; ?>"
                                            alt="<?= $key_service_2['service_img']['url']; ?>">
                                        <?php } ?>

                                        <?php if (!empty($key_service_2['service_img'])) { ?>
                                        <div class="bottom-block">
                                            <p>
                                                <?= $key_service_2['service_title']; ?>
                                            </p>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <!------------------------------------->
    <!-------- SERVICE SECTION ENDS-------->
    <!------------------------------------->

    <!----------------------------------->
    <!---- ASSESSMENT SECTION ENDS ------>
    <!----------------------------------->
    <?php
    do_action('insert_assessment_section');
    ?>
    <!----------------------------------->
    <!----- ASSESSMENT SECTION ENDS ----->
    <!----------------------------------->

    <!----------------------------------->
    <!-------- NEWS SECTION STARTS------->
    <!----------------------------------->
    <?php if (!empty($news_grp)) { ?>
    <section class="common-section home-news-section">
        <div class="container">
            <div class="home-news-list">
                <?php if (!empty($news_grp['heading'])) { ?>
                <div class="col-sm-3">
                    <div class="news-box news-list-title">
                        <div class="news-desc">
                            <h2>
                                <?= $news_grp['heading']; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="col-sm-6">
                    <div class="news-box"
                        style="background: url('<?= $news_grp['news_1_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <?php if (!empty($news_grp['news_1_grp']['tagline'])) { ?>
                            <p>
                                <?= $news_grp['news_1_grp']['tagline']; ?>
                            </p>
                            <?php
                            }
                            if ($news_grp['news_1_grp']['description']) { ?>
                            <h5>
                                <a href="<?= $news_grp['news_1_grp']['description']['url']; ?>"
                                    target="<?= $news_grp['news_1_grp']['description']['target']; ?>"><?= $news_grp['news_1_grp']['description']['title']; ?>
                                </a>
                            </h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="news-box"
                        style="background: url('<?= $news_grp['news_2_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <?php if (!empty($news_grp['news_2_grp']['tagline'])) { ?>
                            <p>
                                <?= $news_grp['news_2_grp']['tagline']; ?>
                            </p>
                            <?php
                            }

                            if (!empty($news_grp['news_2_grp']['description'])) {
                                ?>
                            <h5>
                                <a href="<?= $news_grp['news_2_grp']['description']['url']; ?>"
                                    target="<?= $news_grp['news_2_grp']['description']['target']; ?>">
                                    <?= $news_grp['news_2_grp']['description']['title']; ?>
                                </a>
                            </h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="news-box"
                        style="background: url('<?= $news_grp['news_3_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <?php if (!empty($news_grp['news_3_grp']['tagline'])) { ?>
                            <p>
                                <?= $news_grp['news_3_grp']['tagline']; ?>
                            </p>
                            <?php
                            }

                            if (!empty($news_grp['news_3_grp']['description'])) {
                                ?>
                            <h5>
                                <a href="<?= $news_grp['news_3_grp']['description']['url']; ?>"
                                    target="<?= $news_grp['news_3_grp']['description']['target']; ?>">
                                    <?= $news_grp['news_3_grp']['description']['title']; ?>
                                </a>
                            </h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="news-box"
                        style="background: url('<?= $news_grp['news_4_grp']['news_image']['url']; ?>') no-repeat center center / cover;">
                        <div class="news-desc">
                            <?php if (!empty($news_grp['news_4_grp']['tagline'])) { ?>
                            <p>
                                <?= $news_grp['news_4_grp']['tagline']; ?>
                            </p>
                            <?php
                            }

                            if (!empty($news_grp['news_4_grp']['description'])) {
                                ?>
                            <h5>
                                <a href="<?= $news_grp['news_4_grp']['description']['url']; ?>"
                                    target="<?= $news_grp['news_4_grp']['description']['target']; ?>">
                                    <?= $news_grp['news_4_grp']['description']['title']; ?>
                                </a>
                            </h5>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php if (!empty($news_grp['more_news_btn'])) { ?>
            <div class="text-center">
                <a href="<?= $news_grp['more_news_btn']['url']; ?>"
                    target="<?= $news_grp['more_news_btn']['target']; ?>" class="theme-btn"><?= $news_grp['more_news_btn']['title']; ?></a>
            </div>
            <?php } ?>
        </div>
    </section>
    <?php } ?>
    <!----------------------------------->
    <!-------- NEWS SECTION ENDS--------->
    <!----------------------------------->

    <!------------------------------------->
    <!-------- TEAM SECTION STARTS--------->
    <!------------------------------------->

    <?php if (!empty($team_section_grp)) { ?>
    <section class="common-section home-team-section">
        <div class="container">
            <?php if (!empty($team_section_grp['heading'])) { ?>
            <div class="text-center">
                <h2>
                    <?= $team_section_grp['heading']; ?>
                </h2>
            </div>
            <?php } ?>

            <?php if (!empty($team_section_grp['repeater'])) { ?>
            <div class="row">
                <?php foreach ($team_section_grp['repeater'] as $key_team) { ?>
                <div class="col-sm-4">
                    <div class="team-box"
                        style="background: #015e7d url('<?= $key_team['team_img']['url']; ?>') no-repeat center center / cover;">
                        <div class="team-desc">
                            <?php if (!empty($key_team['team_heading'])) { ?>
                            <h3>
                                <?= $key_team['team_heading']; ?>
                            </h3>
                            <?php }

                            if (!empty($key_team['team_para'])) { ?>
                            <p>
                                <?= $key_team['team_para']; ?>
                            </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } ?>

            <?php if (!empty($team_section_grp['button'])) { ?>
            <div class="text-center">
                <a href="<?= $team_section_grp['button']['url']; ?>"
                    target="<?= $team_section_grp['button']['target']; ?>" class="theme-btn white-btn"><?= $team_section_grp['button']['title']; ?></a>
            </div>
            <?php } ?>
        </div>
    </section>
    <?php } ?>
    <!----------------------------------->
    <!-------- TEAM SECTION ENDS--------->
    <!----------------------------------->

</main>
<!----------------------------------->
<!-------- FOOTER SECTION ENDS ------>
<!----------------------------------->
<?php get_footer(); ?>
<!----------------------------------->
<!-------- FOOTER SECTION ENDS ------>
<!----------------------------------->