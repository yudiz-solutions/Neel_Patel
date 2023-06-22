<?php
get_header();

//========DYNAMIC DATA========//
//Slider-1 Data
$slider_1_group = get_field("slider_1_grp");

//Slider-2 Data
$subheading2 = get_field("subheading-2");
$designation2 = get_field("designation-2");
$city = get_field("city");
$slider_img_2 = get_field("slider-img-2", get_the_ID());
$hire_me_2 = get_field("hire_me_2");
$my_work_2 = get_field("my_work_2");

//About Me Section Data
$about_me_img = get_field("about_me_image", get_the_ID());
$about_me_para = get_field("about_me_para");
$about_me_name = get_field("about_me_name");
$about_me_address = get_field("about_me_address");
$about_me_pincode = get_field("about_me_pincode");
$about_me_email = get_field("about_me_email");
$about_me_phone = get_field("about_me_phone");
$download_cv = get_field("download_cv");

//Resume Section Data
$resume_para = get_field("resume_para");

//interest Section Data
$interest_para = get_field("interest_para");


//Technical Skills Section Data
$t_skill_para = get_field("t_skill_para");

//Soft Skills Section Data
$s_skill_para = get_field("s_skill_para");

//Counter Section Data
$no_of_awards = get_field("no_of_awards");
$no_of_projects = get_field("no_of_projects");

//Freelancing Section data
$available_for_freelancing = get_field("available_for_freelancing");
$freelancing_bg = get_field("freelancing_bg", get_the_ID());
$freelancing_para = get_field("freelancing_para");
$freelancing_hire_me = get_field("freelancing_hire_me");

//Contact Me Section data
$contact_me_para = get_field("contact_me_para");
$contact_me_address = get_field("contact_me_address");
$contact_me_contact_number = get_field("contact_me_contact_number");
$contact_me_email = get_field("contact_me_email");
$contact_me_website = get_field("contact_me_website");
$contact_me_image = get_field("contact_me_image", get_the_ID());
$want_contact_form = get_field("want_contact_form");
?>

<!--=====================-->
<!--=====BODY STARTS=====-->
<!--=====================-->

<!--=== SLIDER SECTION STARTS===-->
<section id="home-section" class="hero">
    <div class="home-slider  owl-carousel">

        <!-- Slider-Content-1 -->
        <?php if ($slider_1_group) { ?>
            <div class="slider-item ">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">

                        <?php
                        if (!empty($slider_1_group['slider-img']['url'])) { ?>
                            <div class="one-third js-fullheight order-md-last img"
                                style="background-image:url(<?php echo $slider_1_group['slider-img']['url']; ?>) ">
                                <div class="overlay"></div>
                            </div>
                        <?php } ?>

                        <div class="one-forth d-flex  align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">

                                <?php if (!empty($slider_1_group['subheading'])) { ?>
                                    <span class="subheading">
                                        <?php echo $slider_1_group['subheading']; ?>
                                    </span>
                                <?php } ?>

                                <?php if (!empty($slider_1_group['name'])) { ?>
                                    <h1 class="mb-4 mt-3 name">I'm <span>
                                            <?php echo $slider_1_group['name']; ?>
                                        </span></h1>
                                <?php } ?>

                                <?php if (!empty($slider_1_group['designation'])) { ?>
                                    <h2 class="mb-4 designation">
                                        <?php echo $slider_1_group['designation']; ?>
                                    </h2>
                                <?php } ?>

                                <p>
                                    <?php if (!empty($slider_1_group['hire_me_btn'])) { ?>
                                        <a href="<?php echo $slider_1_group['hire_me_btn']['url']; ?>"
                                            class="btn btn-primary py-3 px-4"
                                            target="<?php echo $slider_1_group['hire_me_btn']['target']; ?>"><?php echo $slider_1_group['hire_me_btn']['title']; ?></a>
                                    <?php } ?>

                                    <?php if (!empty($slider_1_group['my_work_btn'])) { ?>
                                        <a href="<?php echo $slider_1_group['my_work_btn']['url']; ?>"
                                            class="btn btn-white btn-outline-white py-3 px-4"
                                            target="<?php echo $slider_1_group['my_work_btn']['target']; ?>"><?php echo $slider_1_group['my_work_btn']['title']; ?></a>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <!-- Slider-Content-1 -->
        <?php if ($subheading2 || $designation2 || $city) { ?>
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true"><br />

                        <?php if (isset($slider_img_2)) { ?>
                            <div class="one-third js-fullheight order-md-last img"
                                style="background-image:url(<?php echo $slider_img_2['url']; ?>">
                                <div class="overlay"></div>
                            </div>
                        <?php } ?>

                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">

                                <?php if (isset($subheading2)) { ?>
                                    <span class="subheading">
                                        <?php echo $subheading2; ?>
                                    </span>
                                <?php } ?>

                                <?php if (isset($designation2)) { ?>
                                    <h1 class="mb-4 mt-3">I'm a <span>
                                            <?php echo $designation2; ?>
                                        </span> based in
                                        <?php
                                        if (isset($city)) {
                                            echo $city;
                                        }
                                        ?>
                                    </h1>
                                <?php } ?>

                                <p>
                                    <?php if (isset($hire_me_2)) { ?>
                                        <a href="<?php echo $hire_me_2["url"]; ?>" class="btn btn-primary py-3 px-4"
                                            target="<?php echo $hire_me_2["target"]; ?>"><?php echo $hire_me_2["title"]; ?></a>
                                    <?php } ?>

                                    <?php if (isset($my_work_2)) { ?>
                                        <a href="<?php echo $my_work_2["url"]; ?>"
                                            class="btn btn-white btn-outline-white py-3 px-4"
                                            target="<?php echo $my_work_2["target"]; ?>"><?php echo $my_work_2["title"]; ?></a>
                                    <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!--=== SLIDER SECTION ENDS===-->

<!--=== ABOUT ME SECTION STARTS===-->
<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-5 d-flex">
                <div class="img-about img d-flex align-items-stretch">
                    <div class="overlay"></div>
                    <?php if (isset($about_me_img)) { ?>
                        <div class="img d-flex align-self-stretch align-items-center "
                            style="background-image:url(<?php echo $about_me_img['url'] ?>);">
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <h1 class="big">About</h1>
                        <h2 class="mb-4">About Me</h2>

                        <?php if (isset($about_me_para)) { ?>
                            <p>
                                <?php
                                echo $about_me_para;
                                ?>
                            </p>
                        <?php } ?>

                        <ul class="about-info mt-4 px-md-0 px-2">
                            <li class="d-flex">
                                <span>Name:</span>
                                <span>
                                    <?php echo $about_me_name; ?>
                                </span>
                            </li>
                            <li class="d-flex">
                                <span>Address:</span>
                                <span>
                                    <?php echo $about_me_address; ?>
                                </span>
                            </li>
                            <li class="d-flex">
                                <span>Zip code:</span>
                                <span>
                                    <?php echo $about_me_pincode; ?>
                                </span>
                            </li>
                            <li class="d-flex">
                                <span>Email:</span>
                                <span>
                                    <?php echo $about_me_email; ?>
                                </span>
                            </li>
                            <li class="d-flex">
                                <span>Phone: </span>
                                <span>
                                    <?php echo $about_me_phone; ?>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                    <div class="text">
                        <p>
                            <a href="<?php echo $download_cv["url"]; ?>" class="btn btn-primary py-3 px-4"
                                target="<?php echo $download_cv["target"]; ?>"><?php echo $download_cv["title"]; ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== ABOUT ME SECTION ENDS===-->

<!--=== RESUME SECTION STARTS===-->
<section class="ftco-section ftco-no-pb" id="resume-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h1 class="big big-2">Resume</h1>
                <h2 class="mb-4">Resume</h2>
                <?php if (isset($resume_para)) { ?>
                    <p>
                        <?php
                        echo $resume_para;
                        ?>
                    </p>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>
                    <b>
                        Education
                    </b>
                </h3>
                <?php
                $get_education = get_field('resume_education');
                if (isset($get_education)) {
                    foreach ($get_education as $key_edu) {
                        ?>
                        <div class="resume-wrap ftco-animate">
                            <span class="date">
                                <?php echo $key_edu['edu_year']; ?>
                            </span>
                            <h2>
                                <?php echo $key_edu['edu_qualification']; ?>
                            </h2>
                            <span class="position">
                                <?php echo $key_edu['edu_position']; ?>
                            </span>
                            <p class="mt-4">
                                <?php echo $key_edu['edu_result_type']; ?>
                                :
                                <?php echo $key_edu['edu_result_score']; ?>
                            </p>
                        </div>
                        <?php
                    }
                } ?>
            </div>

            <div class="col-md-6">
                <h3>
                    <b>Work Experience</b>
                </h3>
                <?php
                $get_experience = get_field('resume_work_experience');
                if (isset($get_experience)) {
                    foreach ($get_experience as $key_exp) {
                        ?>
                        <div class="resume-wrap ftco-animate">
                            <span class="date">
                                <?php echo $key_exp['exp_year']; ?>
                            </span>
                            <h2>
                                <?php echo $key_exp['exp_title']; ?>
                            </h2>
                            <span class="position">
                                <?php echo $key_exp['exp_organization']; ?>
                            </span>
                            <p class="mt-4">
                                <?php echo $key_exp['exp_description']; ?>
                            </p>
                        </div>
                        <?php
                    }
                } ?>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 text-center ftco-animate">
                <p>
                    <a href="<?php echo $download_cv["url"]; ?>" class="btn btn-primary py-3 px-4"
                        target="<?php echo $download_cv["target"]; ?>"><?php echo $download_cv["title"]; ?></a>
                </p>
            </div>
        </div>
    </div>
</section>
<!--=== RESUME SECTION ENDS===-->

<!--=== INTERESTS SECTION STARTS===-->
<section class="ftco-section" id="services-section">
    <div class="container">
        <div class="row justify-content-center py-5 mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Interests</h1>
                <h2 class="mb-4">Interests</h2>
                <p>
                    <?php
                    if (isset($interest_para)) {
                        echo $interest_para;
                    } ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1">
                    <span class="icon">
                        <i class="flaticon-analysis"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">Programming</h3>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1">
                    <span class="icon">
                        <i class="flaticon-analysis"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">Web Design</h3>
                    </div>
                </a>
            </div>

            <div class="col-md-4 text-center d-flex ftco-animate">
                <a href="#" class="services-1">
                    <span class="icon">
                        <i class="flaticon-ideas"></i>
                    </span>
                    <div class="desc">
                        <h3 class="mb-5">Web Developing</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--=== INTERESTS SECTION ENDS===-->

<!--=== TECHNICAL SKILLS SECTION STARTS===-->
<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">Technical Skills</h2>
                <p>
                    <?php
                    if (isset($t_skill_para)) {
                        echo $t_skill_para;
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $t_skill_bar = get_field("t_skill_bar");
            if (isset($t_skill_bar)) {
                foreach ($t_skill_bar as $t_skill_keys) {
                    ?>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>
                                <?php echo $t_skill_keys['t_skill_heading']; ?>
                            </h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar"
                                    aria-valuenow="<?php echo $t_skill_keys['t_skill_expertise']; ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width:<?php echo $t_skill_keys['t_skill_expertise']; ?>%">
                                    <span>
                                        <?php echo $t_skill_keys['t_skill_expertise']; ?>%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } ?>
        </div>
    </div>
</section>
<!--=== TECHNICAL SKILLS SECTION ENDS===-->

<!--=== SOFT SKILLS SECTION STARTS===-->
<section class="ftco-section" id="skills-section">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h1 class="big big-2">Skills</h1>
                <h2 class="mb-4">Soft Skills</h2>
                <p>
                    <?php
                    if (isset($s_skill_para)) {
                        echo $s_skill_para;
                    }
                    ?>
                </p>
            </div>
        </div>
        <div class="row">
            <?php
            $s_skill_bar = get_field("s_skill_bar");
            if (isset($s_skill_bar)) {
                foreach ($s_skill_bar as $s_skill_keys) {
                    ?>
                    <div class="col-md-6 animate-box">
                        <div class="progress-wrap ftco-animate">
                            <h3>
                                <?php echo $s_skill_keys["s_skill_heading"]; ?>
                            </h3>
                            <div class="progress">
                                <div class="progress-bar color-1" role="progressbar"
                                    aria-valuenow="<?php echo $s_skill_keys["s_skill_expertise"]; ?>" aria-valuemin="0"
                                    aria-valuemax="100" style="width:<?php echo $s_skill_keys["s_skill_expertise"]; ?>%">
                                    <span>
                                        <?php echo $s_skill_keys["s_skill_expertise"]; ?>%
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } ?>
        </div>
    </div>
</section>
<!--=== SOFT SKILLS SECTION ENDS===-->

<!--=== COUNTER SECTION STARTS===-->
<?php if (isset($no_of_awards) || isset($no_of_projects)) { ?>
    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Achievements</h1>
                    <h2 class="mb-4">Achievements</h2>
                </div>
            </div>
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="<?php echo $no_of_awards; ?>">0</strong>
                            <span>Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="<?php echo $no_of_projects; ?>">0</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!--=== COUNTER SECTION ENDS===-->

<!--=== HIRE ME SECTION STARTS===-->
<?php
if ($available_for_freelancing == 1) {
    ?>
    <section class="ftco-section ftco-hireme img margin-top"
        style="background-image: url(<?php echo $freelancing_bg["url"]; ?>)">
        <!-- images/bg_1.jpg -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> for freelancing</h2>
                    <p>
                        <?php
                        if (isset($freelancing_para)) {
                            echo $freelancing_para;
                        }
                        ?>
                    </p>
                    <p class="mb-0"><a href="<?php echo $freelancing_hire_me['url']; ?>"
                            target="<?php echo $freelancing_hire_me['target']; ?>" class="btn btn-primary py-3 px-5"><?php echo $freelancing_hire_me["title"]; ?></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!--=== HIRE ME SECTION ENDS===-->

<!--=== CONTACT ME SECTION STARTS===-->
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Contact</h1>
                <h2 class="mb-4">Contact Me</h2>
                <p>
                    <?php
                    if (isset($contact_me_para)) {
                        $contact_me_para = get_field("contact_me_para");
                    }
                    ?>
                </p>
            </div>
        </div>

        <div class="row d-flex contact-info mb-5">
            <?php if (isset($contact_me_address)) { ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <h3 class="mb-4">Address</h3>
                        <p>
                            <?php echo $contact_me_address; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($contact_me_contact_number)) { ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <h3 class="mb-4">Contact Number</h3>
                        <p>
                            <a href="tel://<?php echo $contact_me_contact_number; ?>">
                                <?php echo $contact_me_contact_number; ?>
                            </a>
                        </p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($contact_me_email)) { ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <h3 class="mb-4">Email Address</h3>
                        <p><a href="mailto:<?php echo $contact_me_email; ?>">
                                <?php echo $contact_me_email; ?>
                            </a></p>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($contact_me_website)) { ?>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <h3 class="mb-4">Website</h3>
                        <p><a href="<?php echo $contact_me_website; ?>">
                                <?php echo $contact_me_website; ?>
                            </a></p>
                    </div>
                </div>
            <?php } ?>
        </div>

        <?php if ($want_contact_form == 1) { ?>
            <div class="row no-gutters block-9">
                <div class="col-md-6 d-flex">
                    <div class="img" style="background-image: url(<?php if (isset($contact_me_image)) {
                        echo $contact_me_image['url'];
                    } ?>)">
                    </div>
                </div>
                <div class="col-md-6 order-md-last d-flex">
                    <?php echo get_field('contact_form'); ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!--=== CONTACT ME SECTION ENDS===-->

<?php
get_footer();
?>