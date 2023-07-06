<?php
/* Template Name: Team */
get_header();
$banner_grp = get_field('banner_grp');
$common_repeater = get_field('common_repeater');
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
    <?php
    if (!empty($common_repeater)) {
        foreach ($common_repeater as $value) { ?>
            <section class="common-section member-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                <?php if (!empty($value['img'])) { ?>
                                    <div class="col-sm-5">
                                        <div class="team-box"
                                            style="background: #015e7d url('<?php echo $value['img']['url']; ?>') no-repeat center center / cover;">
                                        </div>
                                    </div>
                                <?php } ?>

                                <div class="col-sm-7">
                                    <div class="member-title">
                                        <?php if (!empty($value['name'])) { ?>
                                            <h3>
                                                <?php echo $value['name']; ?>
                                            </h3>
                                        <?php } ?>
                                        <?php if (!empty($value['designation'])) { ?>
                                            <p>
                                                <?php echo $value['designation']; ?>
                                            </p>
                                        <?php } ?>
                                    </div>
                                    <?php if (!empty($value['intro'])) { ?>
                                        <p>
                                            <?php echo $value['intro']; ?>
                                        </p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }
    } ?>

    <!--========= ASSESMENT SECTION STARTS =========-->
    <?php
    do_action('insert_assessment_section');
    ?>
    <!--========= ASSESMENT SECTION ENDS =========-->
</main>

<!--========= FOOTER SECTION STARTS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->