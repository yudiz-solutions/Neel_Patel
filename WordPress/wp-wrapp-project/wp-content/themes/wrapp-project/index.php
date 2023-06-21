<?php
get_header();

//Getting Dynamic Data
$after_nav_grp = get_field("after_nav_grp");
$content_box = get_field("content_box");
$brainstorm_grp = get_field("brainstorm_grp");
$find_similar_grp = get_field('find_similar_grp');
$business_grp = get_field('business_group');
$building_ideas_grp = get_field('building_ideas_group');
?>

<!-- After nav section -->
<?php if (!empty($after_nav_grp)) { ?>
    <section class="afternav-section" id="after-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php if (!empty($after_nav_grp['heading'])) { ?>
                        <h1>
                            <?php echo $after_nav_grp['heading']; ?>
                        </h1>
                    <?php } ?>

                    <?php if (!empty($after_nav_grp['paragraph'])) { ?>
                        <p>
                            <?php echo $after_nav_grp['paragraph']; ?>
                        </p>
                    <?php } ?>

                    <?php if (!empty($after_nav_grp['button'])) { ?>
                        <a href="<?php echo $after_nav_grp["button"]["url"] ?>"
                            target="<?php echo $after_nav_grp["button"]["target"] ?>" class="btn">
                            <?php echo $after_nav_grp["button"]["title"] ?>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <div class="watch-demo text-center">
                <?php if (!empty($after_nav_grp['button'])) { ?>
                    <figure>
                        <img src="<?php echo $after_nav_grp['watch_demo_image']['url']; ?>"
                            alt="<?php echo $after_nav_grp['watch_demo_image']['alt']; ?>">
                    </figure>
                <?php } ?>

                <a href="<?php echo $after_nav_grp["main_href"] ?>" data-src="<?php echo $after_nav_grp["data_src_url"] ?>"
                    data-fancybox>

                    <?php if (!empty($after_nav_grp['button'])) { ?>
                        <img src="<?php echo $after_nav_grp["watch_demo_icon"]["url"]; ?>"
                            alt="<?php echo $after_nav_grp["watch_demo_icon"]["alt"]; ?>">
                    <?php } ?>

                    <?php echo $after_nav_grp["watch_btn_link_text"]; ?>
                </a>
            </div>
        </div>
    </section>
<?php } ?>
<!-- After nav section ends-->

<!-- content-box section -->
<?php if (!empty($content_box)) { ?>
    <section class="content-box" id="content-box">
        <div class="container">
            <div class="innercontainer">
                <div class="row">
                    <?php
                    foreach ($content_box as $keys) { ?>
                        <div class="col-md-6 col-sm-12 col-lg-3">
                            <div class="content-1">
                                <figure>
                                    <img src="<?php echo $keys['column_block_image']['url']; ?>"
                                        alt="<?php echo $keys['column_block_image']['alt']; ?>">
                                </figure>
                                <h3>
                                    <?php
                                    echo $keys['column_block_heading'];
                                    ?>
                                </h3>
                                <p>
                                    <?php echo $keys['column_block_paragraph']; ?>
                                </p>
                            </div>
                        </div>
                        <!-- Cols ends -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- content-box section ends-->

<!-- brainstorm section-->
<?php if (!empty($brainstorm_grp)) { ?>
    <section class="brainstorm" id="brainstorm">
        <div class="brainstorm-wrapper">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-img">
                    <?php if (!empty($brainstorm_grp['brainstorm_image'])) { ?>
                        <figure>
                            <img src="<?php echo $brainstorm_grp['brainstorm_image']['url']; ?>"
                                alt="<?php echo $brainstorm_grp['brainstorm_image']['alt']; ?>">
                        </figure>
                    <?php } ?>
                </div>

                <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-text">
                    <div class="brainright">
                        <?php if (!empty($brainstorm_grp['brainstorm_subheading'])) { ?>
                            <h4>
                                <?php echo $brainstorm_grp['brainstorm_subheading']; ?>
                            </h4>
                        <?php } ?>

                        <?php if (!empty($brainstorm_grp['brainstorm_heading'])) { ?>
                            <h2>
                                <?php echo $brainstorm_grp['brainstorm_heading']; ?>
                            </h2>
                        <?php } ?>

                        <?php if (!empty($brainstorm_grp['brainstorm_paragraph'])) { ?>
                            <p>
                                <?php echo $brainstorm_grp['brainstorm_paragraph']; ?>
                            </p>
                        <?php } ?>

                        <?php if (!empty($brainstorm_grp['brainstorm_btn'])) { ?>
                            <a href="<?php echo $brainstorm_grp['brainstorm_btn']['url']; ?>" class="btn"><?php echo $brainstorm_grp['brainstorm_btn']['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if (!empty($brainstorm_grp['brainstorm_gallery'])) { ?>
            <div class="row bottompart">
                <div class="col-md-12">
                    <div class="row">
                        <?php foreach ($brainstorm_grp['brainstorm_gallery'] as $key => $gallery_key) {
                            if (($key == 0) || ($key == 2)) {
                                ?>
                                <div class="col-md-4 col-sm-12 col-12">
                                    <img src="<?php echo $gallery_key['url']; ?>" alt=" <?php echo $gallery_key['alt']; ?>">
                                </div>
                            <?php } else { ?>
                                <div class="col-md-2 col-sm-12 col-12">
                                    <img src="<?php echo $gallery_key['url']; ?>" alt=" <?php echo $gallery_key['alt']; ?>">
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
<?php } ?>
<!-- brainstorm section ends-->

<!-- find similar section starts-->
<section class="find-similar" id="find-similar">
    <div class="container">
        <?php if (!empty($find_similar_grp)) { ?>
            <div class="find-top text-center common-padding">
                <h2>
                    <?php echo $find_similar_grp['heading']; ?>
                </h2>
                <p>
                    <?php echo $find_similar_grp['paragraph']; ?>
                </p>
            </div>
        <?php } ?>

        <!-- CUSTOM POST -->
        <div class="find-similar-parent single-item">
            <?php
            $args = array(
                'post_type' => array('story'),
                'post_status' => array('publish'),
            );

            $post_data_loop = new WP_Query($args);
            while ($post_data_loop->have_posts()) {
                $post_data_loop->the_post();
                ?>
                <div class="inner-find-similar mx-3">
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                            <figure>
                                <?php $img = wp_get_attachment_image_src(get_post_thumbnail_id($post_data_loop->ID), 'medium'); ?>
                                <img src="<?php echo $img[0]; ?>" alt="">
                            </figure>
                        </div>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                            <div class="text-content">
                                <h4>
                                    <?php
                                    $heading = get_the_terms(get_the_ID(), 'story-category');
                                    foreach ($heading as $key => $cat) {
                                        echo $cat->name;
                                    }
                                    ?>
                                </h4>
                                <p>
                                    <?php
                                    the_excerpt();
                                    ?>
                                </p>
                                <a href="<?php the_permalink() ?>">Read Full Story</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- find similar section ends-->

<!-- get your business section -->
<?php if (!empty($brainstorm_grp)) { ?>
    <section class="growfast" id="growfast">
        <div class="container">
            <div class="grow-wrapper">
                <div class="grow-top text-center common-padding">
                    <?php if (!empty($business_grp['upper_heading'])) { ?>
                        <h2>
                            <?php echo $business_grp['upper_heading']; ?>
                        </h2>
                    <?php } ?>

                    <?php if (!empty($business_grp['upper_paragraph'])) { ?>
                        <p>
                            <?php echo $business_grp['upper_paragraph']; ?>
                        </p>
                    <?php } ?>

                    <?php if (!empty($business_grp['upper_btn'])) { ?>
                        <a href="<?php echo $business_grp['upper_btn']['url']; ?>" class="btn"
                            target="<?php echo $business_grp['upper_btn']['target']; ?>">
                            <?php echo $business_grp['upper_btn']['title']; ?>
                        </a>
                    <?php } ?>
                </div>

                <div class="row right-grow-side">
                    <div class="col-md-12 col-lg-12 col-12 col-xl-6 only-for-position">
                        <?php if (!empty($business_grp['desktop_image'])) { ?>
                            <img src="<?php echo $business_grp['desktop_image']['url']; ?>"
                                alt="<?php echo $business_grp['desktop_image']['alt']; ?>">
                        <?php } ?>

                        <?php if (!empty($business_grp['logo'])) { ?>
                            <img src="<?php echo $business_grp['logo']['url']; ?>"
                                alt="<?php echo $business_grp['logo']['alt']; ?>">
                        <?php } ?>

                        <?php if (!empty($business_grp['post_image'])) { ?>
                            <img src="<?php echo $business_grp['post_image']['url']; ?>"
                                alt="<?php echo $business_grp['post_image']['alt']; ?>">
                        <?php } ?>
                    </div>
                    <div class="col-md-12 col-lg-12 col-12 col-xl-6 align-self-center">
                        <?php if (!empty($business_grp['subheading'])) { ?>
                            <h4>
                                <?php echo $business_grp['subheading']; ?>
                            </h4>
                        <?php } ?>

                        <?php if (!empty($business_grp['heading'])) { ?>
                            <h2>
                                <?php echo $business_grp['heading']; ?>
                            </h2>
                        <?php } ?>

                        <?php if (!empty($business_grp['paragraph'])) { ?>
                            <p>
                                <?php echo $business_grp['paragraph']; ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- get your business ends -->

<!-- start building ideas starts -->
<?php if (!empty($building_ideas_grp)) { ?>
    <section class="brainstorm-now common-padding" id="building-ideas">
        <div class="container">
            <div class="row">
                <div class="co-md-12 text-center">
                    <?php if (!empty($building_ideas_grp['subheading'])) { ?>
                        <h4>
                            <?php
                            echo $building_ideas_grp['subheading'];
                            ?>
                        </h4>
                    <?php } ?>

                    <?php if (!empty($building_ideas_grp['heading'])) { ?>
                        <h2>
                            <?php echo $building_ideas_grp['heading']; ?>
                        </h2>
                    <?php } ?>

                    <?php if (!empty($building_ideas_grp['paragraph'])) { ?>
                        <p>
                            <?php echo $building_ideas_grp['paragraph']; ?>
                        </p>
                    <?php } ?>

                    <?php if (!empty($building_ideas_grp['button'])) { ?>
                        <a href="<?php echo $building_ideas_grp['button']['url']; ?>" class="btn"
                            target="<?php echo $building_ideas_grp['button']['target']; ?>"><?php echo $building_ideas_grp['button']['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- start building ideas ends -->

<?php
get_footer();
?>