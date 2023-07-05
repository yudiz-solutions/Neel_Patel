<?php
/* Template Name: About */
get_header();
$banner_grp = get_field('banner_grp');
$common_grp = get_field('common_grp');
?>

<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner"
        style="background: #5C5C5C url('<?php echo $banner_grp['img']['url'] ?>') no-repeat center center / cover;">
        <div class="container">
            <h1>
                <?php echo $banner_grp['heading']; ?>
            </h1>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->

<!--******************* Middle Section Start ******************-->
<main>

    <!--========= COMMON SECTION STARTS =========-->
    <section class="common-section about-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="bg-img-block">
                        <div class="heading-block">
                            <h2>
                                <?php echo $common_grp['img_heading']; ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="desc-block">
                        <h3>
                            <?php echo $common_grp['subheading']; ?>
                        </h3>
                        <p>
                            <?php echo $common_grp['content']; ?>
                        </p>
                    </div>
                </div>
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
<!--******************* Middle Section End ******************-->

<!--******************* Footer Section Starts ******************-->
<?php get_footer(); ?>
<!--******************* Footer Section Ends ******************-->