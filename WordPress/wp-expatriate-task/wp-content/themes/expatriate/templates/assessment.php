<?php
/* Template Name: Assessment */
get_header();
$banner_grp = get_field('banner_grp');
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
    <section class="common-section">
        <div class="container">
            <!-- CONTACT FORM 7 -->
            <?php echo apply_shortcodes('[contact-form-7 id="252" title="Assessment Section Form"]'); ?>
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