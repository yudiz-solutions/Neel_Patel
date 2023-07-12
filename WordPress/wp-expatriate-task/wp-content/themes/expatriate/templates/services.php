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
                    ?>

                    <?php foreach ($terms as $term) {
                        ?>
                        <div class="panel-group" id="accordion">
                            <div class="panel">
                                <div>
                                    <a data-toggle="collapse" data-parent="#accordion"
                                        href="#collapse<?= $term->term_id; ?>">
                                        <?= $term->name; ?>
                                    </a>
                                </div>

                                <div id="collapse<?= $term->term_id; ?>" class="panel-collapse">
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

                                        $acc_posts = new WP_Query($acc_args);
                                        if ($acc_posts->have_posts()) {
                                            while ($acc_posts->have_posts()) {
                                                $acc_posts->the_post();
                                                ?>
                                                <li>
                                                    <a data-toggle="tab" href="#service<?= get_the_ID(); ?>"
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

                        $detail_posts = new WP_Query($detail_args);

                        if ($detail_posts->have_posts()) {
                            while ($detail_posts->have_posts()) {
                                $detail_posts->the_post();
                                ?>
                                <div id="service<?= get_the_ID(); ?>" class="tab-pane fade">
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