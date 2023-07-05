<?php
/* Template Name: Packages */
get_header();
?>

<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('images/home-slide1.jpg') no-repeat center center / cover;">
        <div class="container">
            <h1>our Packages</h1>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <section class="common-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="package-box">
                                <h5>Pre Arrival Services</h5>
                                <div class="package-price"><span>$1800</span></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="package-box">
                                <h5>Post Arrival Services</h5>
                                <div class="package-price"><span>$1800</span></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="package-box">
                                <h5>Discounted package for <br><em>[ Pre- Arrival <strong>+</strong> Post- Arrival
                                        ]</em><br> Services</h5>
                                <div class="package-price"><span>$3000</span></div>
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
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>
<!--******************* Footer Section End ******************-->