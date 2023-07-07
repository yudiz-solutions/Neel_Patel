<?php
/* Template Name: Packages */
get_header();
$banner_grp = get_field('banner_grp');
$packages_repeater = get_field('packages_repeater');
?>

<!--========= BANNER SECTION STARTS =========-->
<?php if (!empty($banner_grp)) { ?>
    <div class="home-banner">

        <?php if (!empty($banner_grp['img'])) { ?>
            <div class="banner"
                style="background: #5C5C5C url('<?php echo $banner_grp['img']['url']; ?>') no-repeat center center / cover;">
            <?php } ?>

            <?php if (!empty($banner_grp['heading'])) { ?>
                <div class="container">
                    <h1>
                        <?php echo $banner_grp['heading']; ?>
                    </h1>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<!--========= BANNER SECTION ENDS =========-->

<main>
    <!--========= COMMON SECTION STARTS =========-->
    <?php if (!empty($packages_repeater)) { ?>
        <section class="common-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <?php
                            foreach ($packages_repeater as $key => $val) {
                                if ($key == 0 || $key % 2 != 0) {
                                    ?>
                                    <div class="col-sm-6">
                                        <div class="package-box">
                                            <?php if (!empty($val['title'])) { ?>
                                                <h5>
                                                    <?php echo $val['title']; ?>
                                                </h5>
                                            <?php }

                                            if (!empty($val['price'])) {
                                                ?>
                                                <div class="package-price">
                                                    <?php echo $val['price']; ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <?php
                                } elseif ($key != 0 && $key % 2 == 0) {
                                    ?>

                                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="package-box">
                                            <?php if (!empty($val['title'])) { ?>
                                                <h5>
                                                    <?php echo $val['title']; ?>
                                                </h5>
                                            <?php }

                                            if (!empty($val['price'])) {
                                                ?>
                                                <div class="package-price">
                                                    <?php echo $val['price']; ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
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