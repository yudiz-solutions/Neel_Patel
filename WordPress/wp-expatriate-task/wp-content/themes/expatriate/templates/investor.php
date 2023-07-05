<?php
/* Template Name: Investor */
get_header();
?>

<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('images/home-slide1.jpg') no-repeat center center / cover;">
        <div class="container">
            <h1>Investor Information</h1>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <section class="common-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>Expatriate Assistance Services Inc is a 100% subsidiary of GreenBank Capital Inc. GreenBank is a
                        merchant banking business listed on the Canadian Securities Exchange (CSE:GBC | OTCMKTS:GRNBF |
                        FRA:2TL), and is included in the CSE Composite Index</h3>
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
<!--******************* Footer Section Starts ******************-->
<?php get_footer(); ?>
<!--******************* Footer Section Ends ******************-->