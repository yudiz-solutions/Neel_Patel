<?php
/* Template Name: About */
get_header();
$banner_grp = get_field('banner_grp');
$common_grp = get_field('common_grp');
?>

<!--========= BANNER SECTION STARTS =========-->
<div class="home-banner">
    <div class="banner"
        style="background: #5C5C5C url('<?= $banner_grp['img']['url'] ?>') no-repeat center center / cover;">
        <div class="container">
            <h1>
                <?= $banner_grp['heading']; ?>
            </h1>
        </div>
    </div>
</div>
<!--========= BANNER SECTION ENDS =========-->

<main>

    <!--========= COMMON SECTION STARTS =========-->
    <?php if (!empty($common_grp)) { ?>
        <section class="common-section about-section">
            <div class="container">
                <div class="row">
                    <?php if (!empty($common_grp['img_heading'])) { ?>
                        <div class="col-sm-6">
                            <div class="bg-img-block">
                                <div class="heading-block">
                                    <h2>
                                        <?= $common_grp['img_heading']; ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-sm-6">
                        <div class="desc-block">
                            <?php if (!empty($common_grp['subheading'])) { ?>
                                <h3>
                                    <?= $common_grp['subheading']; ?>
                                </h3>
                            <?php } ?>

                            <?php if (!empty($common_grp['content'])) { ?>
                                <p>
                                    <?= $common_grp['content']; ?>
                                </p>
                            <?php } ?>
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