<?php
/* Template Name: Investor */
get_header();

$banner_grp = get_field('banner_grp');
$content = get_field("content");
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
    <?php if (!empty($content)) { ?>
        <section class="common-section">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h3>
                            <?php echo $content; ?>
                        </h3>
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