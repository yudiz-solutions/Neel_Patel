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
    <?php
    // echo "<pre>";
    // print_r($packages_repeater);
    // echo "</pre>";
    
    ?>

    <section class="common-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <?php
                        $temp = count($packages_repeater);
                        // echo $temp;
                        
                        foreach ($packages_repeater as $key => $val) {
                            // echo "<pre>";
                            // print_r($key);
                            // echo "</pre>";
                        
                            if ($key = 0) {
                                ?>
                                <div class="col-sm-6">
                                    <div class="package-box">
                                        <h5>
                                            <?php echo $key; ?>
                                        </h5>
                                        <h5>
                                            <?php echo $val['title']; ?>
                                        </h5>
                                        <div class="package-price">
                                            <?php echo $val['price']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } elseif ($key % 2 != 0) {
                                ?>
                                <div class="col-sm-6">
                                    <div class="package-box">
                                        <h5>
                                            <?php echo $key; ?>
                                        </h5>
                                        <h5>
                                            <?php echo $val['title']; ?>
                                        </h5>
                                        <div class="package-price">
                                            <?php echo $val['price']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } elseif ($key % 2 == 0) {
                                ?>
                                <div class="col-sm-6 col-sm-offset-3">
                                    <div class="package-box">
                                        <h5>
                                            <?php echo $key; ?>
                                        </h5>
                                        <h5>
                                            <?php echo $val['title']; ?>
                                        </h5>
                                        <div class="package-price">
                                            <?php echo $val['price']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } ?>

                        <!-- <div class="col-sm-6">
                            <div class="package-box">
                                <h5>Post Arrival Services</h5>
                                <div class="package-price"><span>$1800</span></div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="package-box">
                                <h5>
                                    Discounted package for <br><em>[ Pre- Arrival + Post-
                                        Arrival]</em><br> Services
                                </h5>
                                <div class="package-price">
                                    <span>$3000</span>
                                </div>
                            </div>
                        </div> -->
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

<!--========= FOOTER SECTION STARTS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->