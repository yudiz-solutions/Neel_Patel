<?php
/* Template Name: Services */
get_header();

$service_post_grp = get_field('service_post_grp', 'option');
?>

<!--========= BANNER SECTION STARTS =========-->
<?php if (!empty($service_post_grp)) { ?>
    <div class="home-banner">
        <?php if (!empty($service_post_grp['img'])) { ?>
            <div class="banner"
                style="background: #5C5C5C url('<?= $service_post_grp['img']['url']; ?>') no-repeat center center / cover;">
            <?php } ?>

            <?php if (!empty($service_post_grp['heading'])) { ?>
                <div class="container">
                    <h1>
                        <?= $service_post_grp['heading']; ?>
                    </h1>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<!--========= BANNER SECTION ENDS =========-->

<main>
    <section class="common-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 service-sidebar">
                    <?php
                    $terms = get_terms(
                        array(
                            'taxonomy' => 'services-category',
                        )
                    );

                    $firstIteration = true;
                    ?>

                    <?php foreach ($terms as $term) {

                        $cat_class = "collapsed";
                        $post_div_class = "";

                        ?>
                        <div class="panel-group" id="accordion">
                            <div class="panel">
                                <div>
                                    <?php
                                    if ($firstIteration) {
                                        $cat_class = "";
                                        $post_div_class = "in";
                                        $firstIteration = false;
                                    }

                                    ?>
                                    <a class="<?= $cat_class; ?>" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse<?= $term->term_id; ?>">
                                        <?= $term->name; ?>
                                    </a>
                                </div>

                                <div id="collapse<?= $term->term_id; ?>"
                                    class="panel-collapse collapse <?= $post_div_class; ?>">
                                    <ul class="nav nav-tabs">
                                        <?php
                                        $acc_args = array(
                                            'post_type' => 'services',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'services-category',
                                                    'field' => 'term_id',
                                                    'terms' => $term->term_id
                                                )
                                            )
                                        );

                                        $firstIterationInner = "1";

                                        $acc_posts = new WP_Query($acc_args);
                                        if ($acc_posts->have_posts()) {
                                            while ($acc_posts->have_posts()) {
                                                $acc_posts->the_post();
                                                $post_class = "";
                                                ?>
                                                <li>
                                                    <?php
                                                    if ($firstIterationInner == "1") {
                                                        $post_class = "current";
                                                        $firstIterationInner = "0";
                                                    }
                                                    ?>

                                                    <a class="<?= $post_class; ?>" data-toggle="tab"
                                                        href="#service<?= get_the_ID(); ?>"
                                                        data-target="#service<?= get_the_ID(); ?>">
                                                        <?= get_the_title(); ?>
                                                    </a>
                                                </li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>

                <!-- //== DETAIL PAGE CODE STARTS ==// -->

                <div class="col-sm-8 col-md-9 service-content">
                    <div class="tab-content">

                        <?php
                        $detail_args = array(
                            'post_type' => 'services',
                        );

                        $firstIterationDetail = true;

                        $detail_posts = new WP_Query($detail_args);

                        if ($detail_posts->have_posts()) {
                            while ($detail_posts->have_posts()) {
                                $detail_posts->the_post();
                                $detail_class = "";

                                if ($firstIterationDetail) {
                                    $detail_class = "in active";
                                    $firstIterationDetail = false;
                                }
                                ?>
                                <div id="service<?= get_the_ID(); ?>" class="tab-pane fade <?= $detail_class; ?>">
                                    <figure>
                                        <img src="<?= get_the_post_thumbnail_url(); ?>" class="img-responsive"
                                            alt="EASI Service" />
                                    </figure>

                                    <h3>
                                        <?= get_the_title(); ?>
                                    </h3>

                                    <!-- CONTENT STARTS -->
                                    <?= get_the_content(); ?>
                                    <!-- CONTENT ENDS -->
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
                <!-- //== DETAIL PAGE CODE ENDS ==// -->

            </div>
        </div>
    </section>

    <!--========= ASSESMENT SECTION STARTS =========-->
    <?php
    do_action('insert_assessment_section');
    ?>
    <!--========= ASSESMENT SECTION ENDS =========-->
</main>

<!--========= FOOTER SECTION STARTS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->