<?php
get_header();
$news_banner_grp = get_field('news_post_grp', 'option');
// $news_post_grp = get_field('news_post_grp', 'option');
// $first_news = $news_post_grp['first_news'];
// ?>
//
<?php
// echo '<pre>';
// print_r($news_post_grp);
// echo '</pre>';
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
    <section class="common-section article-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 right-border">
                    <div class="article-detail-inner">
                        <h1>INNER PAGE</h1>
                        <ol class="breadcrumb">


                            <li><a href="index.html">Home</a></li>
                            <li><a href="news.html">News</a></li>
                            <li class="active">Blockchain Evolution updates its 5 projects and seeks $10 Mn. funding to
                                coincide with its CSE listing</li>
                        </ol>
                        <h5 class="article-title">Blockchain Evolution updates its 5 projects and seeks $10 Mn. funding
                            to coincide with its CSE listing</h5>
                        <div class="featured-articles feature1">
                        </div>
                        <div class="articles-meta">
                            <p class="item-meta"><span class="category">Press Releases</span> 31 Jul, 2018</p>
                            <div class="social-share-block">
                                <p class="share-label">share</p>
                                <ul class="social-share-menu">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="articles-content">
                            <p>Blockchain Evolution Inc. ("Blockchain Evolution or the Company") announces that
                                Blockchain Evolution Inc (“Blockchain Evolution”), has recently achieved several
                                critical milestones in its five-project development program, with substantial progress
                                having been made by its software team during the last four months. Blockchain Evolution
                                is now seeking $10 million funding to coincide with its proposed listing on the Canadian
                                Securities Exchange (“CSE”).</p>
                            <p>Blockchain Evolution intends to seek a $10 million private placement to provide funding
                                to complete project development and to launch the five projects in their respective
                                markets. The private placement will coincide with an application to list Blockchain
                                Evolution on the CSE. There is no guarantee that the private placement will be completed
                                or that the CSE application will be approved.</p>
                            <p>Unlike all other blockchains, which are based on anonymity, Blockchain Evolution’s unique
                                blockchain, EvolveChain, is based on each participant on the blockchain being identified
                                (per KYC banking norms), before the user can transact with others on the blockchain.
                                Each participant’s confidential personal information is kept private and secure, and in
                                a non-hackable format. A unique identifier allows the participants to access only their
                                own profiles, which they can use to transact with others on the blockchain. As a result,
                                an identifiable auditable record of transactions across the ecosystem is recorded on the
                                blockchain while maintaining the confidential KYC information of each participant in a
                                secure environment.</p>
                            <p class="bold">Xbook</p>
                            <p>Xbook is a user-permissioned social media platform empowering users to control access to
                                their personal data. 50% of all Xbook revenue is shared with Xbook users. Revenue is
                                shared pro-rata with each users’ individual views of advertising. Xbook is the answer to
                                the privacy issues that have plagued Facebook, as Xbook users will have total control of
                                any access to their data. Xbook utilizes eKYC-ID (electronic Know Your Customer
                                identification) blockchain technology to provide the critical user identification
                                infrastructure that is needed to accurately and securely record data for both users and
                                advertisers.</p>
                            <p>Xbook has three access levels, all of which are free to the user, who can upload data via
                                a mobile app. At Level One the Xbook user provides basic identification information and
                                receives a limited revenue sharing cash income stream, together with a credit balance
                                which is available when upgrading to Level Two. At Level Two the Xbook user provides
                                enhanced identification information, which can be shared with advertisers only at the
                                users’ discretion. As Level Two information is more valuable to Xbook advertisers, it
                                generates for the Xbook user a cash income stream equal to 50% of the Xbook revenue
                                attributable to that specific user. At Level Three the Xbook user provides full KYC
                                identification data (similar to the data provided when opening a bank account), and
                                thereby creates a personal online digital identity. The user digital identity is
                                recorded securely on the Xbook blockchain, and can be utilized exclusively by the user
                                for multiple commercial and governmental purposes. At all times it is the Xbook user who
                                decides who has access to partial or complete digital data.</p>
                            <p class="bold">India Healthcare Platform</p>
                            <p>The Indian government has announced a universal health care system that will initially
                                provide coverage to about 500 million citizens. Blockchain Evolution is in discussions
                                with the Government of India to provide its blockchain technology as the framework for
                                the new Indian healthcare system. EvolveChain will be utilized to record eKYC-ID patient
                                data on a centralized blockchain and the patient will grant permission to doctors,
                                hospitals, insurance companies etc to access some or all of that data on an as-needed
                                basis. A pilot scheme to provide proof-of-concept in one Indian state is intended to
                                commence during the last quarter of 2018. Blockchain Evolution has received a proposal
                                from a publicly listed Indian technology company with a market cap of $12.6 billion, to
                                acquire 15% of the Blockchain Evolution Indian healthcare project alone at a India
                                Healthcare project valuation of $43.5 million.</p>
                        </div>
                        <div class="articles-footer-meta">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="articles-tags">
                                        <li><a href="#">Cannabis</a></li>
                                        <li class="active"><a href="#">Technology</a></li>
                                        <li><a href="#">Energy</a></li>
                                        <li><a href="#">Italy</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-share-block">
                                        <p class="share-label">share</p>
                                        <ul class="social-share-menu">
                                            <li><a href="#" target="_blank"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-google-plus"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky_item" class="col-sm-4">
                    <div class="sidebar">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#popular">Popular</a></li>
                            <li><a data-toggle="tab" href="#recommended">Recommended</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="popular" class="tab-pane fade in active">
                                <div class="article-tab-item">
                                    <div class="article-img">
                                        <img class="full-img" src="images/article-img.jpg" alt="article-img">
                                    </div>
                                    <div class="article-desc">
                                        <h4><a href="article-detail.html">XsunX, Inc. (OTC Pink: XSNX) Surges 150% after
                                                Announcing Marketing Efforts are Delivering…</a></h4>
                                        <p class="item-meta"><span class="category">Press Release</span> Jun 4, 2018
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="article-tab-item">
                                    <div class="article-img">
                                        <img class="full-img" src="images/article-img1.jpg" alt="article-img">
                                    </div>
                                    <div class="article-desc">
                                        <h4><a href="article-detail.html">XsunX, Inc. (OTC Pink: XSNX) Surges 150% after
                                                Announcing Marketing Efforts are Delivering…</a></h4>
                                        <p class="item-meta"><span class="category">Press Release</span> Jun 4, 2018
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="article-tab-item">
                                    <div class="article-img">
                                        <img class="full-img" src="images/article-img2.jpg" alt="article-img">
                                    </div>
                                    <div class="article-desc">
                                        <h4><a href="article-detail.html">XsunX, Inc. (OTC Pink: XSNX) Surges 150% after
                                                Announcing Marketing Efforts are Delivering…</a></h4>
                                        <p class="item-meta"><span class="category">Press Release</span> Jun 4, 2018
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="article-tab-item">
                                    <div class="article-img">
                                        <img class="full-img" src="images/article-img3.jpg" alt="article-img">
                                    </div>
                                    <div class="article-desc">
                                        <h4><a href="article-detail.html">XsunX, Inc. (OTC Pink: XSNX) Surges 150% after
                                                Announcing Marketing Efforts are Delivering…</a></h4>
                                        <p class="item-meta"><span class="category">Press Release</span> Jun 4, 2018
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="article-tab-item">
                                    <div class="article-img">
                                        <img class="full-img" src="images/article-img4.jpg" alt="article-img">
                                    </div>
                                    <div class="article-desc">
                                        <h4><a href="article-detail.html">XsunX, Inc. (OTC Pink: XSNX) Surges 150% after
                                                Announcing Marketing Efforts are Delivering…</a></h4>
                                        <p class="item-meta"><span class="category">Press Release</span> Jun 4, 2018
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div id="recommended" class="tab-pane fade">
                                <div class="article-tab-item">
                                    <div class="article-img">
                                        <img class="full-img" src="images/article-img2.jpg" alt="article-img">
                                    </div>
                                    <div class="article-desc">
                                        <h4><a href="article-detail.html">XsunX, Inc. (OTC Pink: XSNX) Surges 150% after
                                                Announcing Marketing Efforts are Delivering…</a></h4>
                                        <p class="item-meta"><span class="category">Press Release</span> Jun 4, 2018
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="article-tab-item">
                                    <div class="article-img">
                                        <img class="full-img" src="images/article-img3.jpg" alt="article-img">
                                    </div>
                                    <div class="article-desc">
                                        <h4><a href="article-detail.html">XsunX, Inc. (OTC Pink: XSNX) Surges 150% after
                                                Announcing Marketing Efforts are Delivering…</a></h4>
                                        <p class="item-meta"><span class="category">Press Release</span> Jun 4, 2018
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
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
<!--========= FOOTER SECTION STARTS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->