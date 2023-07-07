<?php
get_header();
$news_banner_grp = get_field('news_banner_grp', 'option');
?>

<!--========= BANNER SECTION STARTS =========-->
<?php if (!empty($news_banner_grp)) { ?>
    <div class="home-banner">
        <?php if (!empty($news_banner_grp['img'])) { ?>
            <div class="banner"
                style="background: #5C5C5C url('<?php echo $news_banner_grp['img']['url']; ?>') no-repeat center center / cover;">
            <?php } ?>

            <?php if (!empty($news_banner_grp['heading'])) { ?>
                <div class="container">
                    <h1>
                        <?php echo $news_banner_grp['heading']; ?>
                    </h1>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<!--========= BANNER SECTION ENDS =========-->

<main>
    <!--========= COMMON SECTION ENDS =========-->
    <section class="common-section">
        <div class="container">
            <div class="news-blocks">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="image-news"
                            style="background: #ccc url('images/news-feature.jpg') no-repeat center center / cover;">
                            <div class="news-inner">
                                <h6><a href="news-inner.php">Blockchain Evolution updates its 5 projects and seeks
                                        $10 Mn. funding to coincide with its CSE...</a></h6>
                                <p><span class="category">Press Releases</span> Jul 31, 2018</p>
                                <h1>THIK CHHEEEE</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 news-side">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="news-inner.html" class="news-image"><img alt="news"
                                        src="images/news-feature-sq1.jpg"></a>
                            </div>
                            <div class="col-sm-8 paddingl-none">
                                <h6><a href="news-inner.html">Blockchain Evolution updates its 5 projects and seeks
                                        $10 Mn. funding to coincide with its CSE...</a></h6>
                                <p class="meta"><span class="category">Press Releases</span> Jul 31, 2018</p>
                                <p>The Right Honourable Justin Trudeau, Prime Minister of Canada, at the New Delhi
                                    residence of His Excellency Nadir Patel, High Commissioner … <a
                                        href="news-inner.html" class="read-more">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-side">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="news-inner.html" class="news-image"><img alt="news"
                                        src="images/news-feature-sq2.jpg"></a>
                            </div>
                            <div class="col-sm-8 paddingl-none">
                                <h6><a href="news-inner.html">Blockchain Evolution updates its 5 projects and seeks
                                        $10 Mn. funding to coincide with its CSE...</a></h6>
                                <p class="meta"><span class="category">Press Releases</span> Jul 31, 2018</p>
                                <p>The Right Honourable Justin Trudeau, Prime Minister of Canada, at the New Delhi
                                    residence of His Excellency Nadir Patel, High Commissioner … <a
                                        href="news-inner.html" class="read-more">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-side">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="news-inner.html" class="news-image"><img alt="news"
                                        src="images/news-feature-sq1.jpg"></a>
                            </div>
                            <div class="col-sm-8 paddingl-none">
                                <h6><a href="news-inner.html">Blockchain Evolution updates its 5 projects and seeks
                                        $10 Mn. funding to coincide with its CSE...</a></h6>
                                <p class="meta"><span class="category">Press Releases</span> Jul 31, 2018</p>
                                <p>The Right Honourable Justin Trudeau, Prime Minister of Canada, at the New Delhi
                                    residence of His Excellency Nadir Patel, High Commissioner … <a
                                        href="news-inner.html" class="read-more">Read More</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 news-side">
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="news-inner.html" class="news-image"><img alt="news"
                                        src="images/news-feature-sq2.jpg"></a>
                            </div>
                            <div class="col-sm-8 paddingl-none">
                                <h6><a href="news-inner.html">Blockchain Evolution updates its 5 projects and seeks
                                        $10 Mn. funding to coincide with its CSE...</a></h6>
                                <p class="meta"><span class="category">Press Releases</span> Jul 31, 2018</p>
                                <p>The Right Honourable Justin Trudeau, Prime Minister of Canada, at the New Delhi
                                    residence of His Excellency Nadir Patel, High Commissioner … <a
                                        href="news-inner.html" class="read-more">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="theme-btn">Load More</a>
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