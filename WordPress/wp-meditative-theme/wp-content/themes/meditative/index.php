<?php
get_header();
$banner_grp = get_field('banner_grp');
$yoga_type_repeater = get_field('yoga_type_repeater');
$yoga_exp_grp = get_field('yoga_exp_grp');
$our_class_repeater = get_field('our_class_repeater');
$story_section_grp = get_field('story_section_grp');
$counter_repeater = get_field('counter_repeater');
$recent_post_repeater = get_field('recent_post_repeater');
$latest_photos_grp = get_field('latest_photos_grp');
?>

<main data-barba="container" data-barba-namespace="classes">
  <!-- ======== BANNER SECTION STARTS ======== -->
  <section class="banner">
    <div class="slider">
      <div class="left-arrow">
        <img src="<?php echo $banner_grp['arrow']['url']; ?>" alt="<?php echo $banner_grp['arrow']['alt']; ?>" />
      </div>

      <div class="right-arrow">
        <img src="<?php echo $banner_grp['arrow']['url']; ?>" alt="<?php echo $banner_grp['arrow']['alt']; ?>" />
      </div>

      <div class="slides">
        <img src="<?php echo $banner_grp['gallery_1']['url']; ?>"
          alt="<?php echo $banner_grp['gallery_1']['alt']; ?>" />

        <img src="<?php echo $banner_grp['gallery_2']['url']; ?>"
          alt="<?php echo $banner_grp['gallery_2']['alt']; ?>" />

        <img src="<?php echo $banner_grp['gallery_3']['url']; ?>"
          alt="<?php echo $banner_grp['gallery_3']['alt']; ?>" />

        <img src="<?php echo $banner_grp['gallery_4']['url']; ?>"
          alt="<?php echo $banner_grp['gallery_4']['alt']; ?>" />

        <img src="<?php echo $banner_grp['gallery_5']['url']; ?>"
          alt="<?php echo $banner_grp['gallery_5']['alt']; ?>" />
      </div>

      <div class="banner-content">
        <h1>
          <?php echo $banner_grp['heading']; ?>
        </h1>
        <p>
          <?php echo $banner_grp['paragraph']; ?>
        </p>
        <button class="btn">
          <!-- Dynamic Button Link is available -->
          View Our Works
        </button>
      </div>
    </div>
  </section>
  <!-- ======== BANNER SECTION ENDSs ======== -->

  <!-- ======== YOGA TYPES SECTION STARTS ======== -->
  <section class="yoga-types">
    <div class="container">
      <div class="yoga wow animate__animated animate__fadeInUp">
        <?php foreach ($yoga_type_repeater as $key_yoga_type) {
          ?>
          <div class="yoga-type">
            <div class="yoga-image">
              <img src="<?php echo $key_yoga_type['yoga_type_img']['url']; ?>"
                alt="<?php echo $key_yoga_type['yoga_type_img']['alt']; ?>" />
            </div>
            <h1>
              <?php echo $key_yoga_type['yoga_type_heading']; ?>
            </h1>
            <p>
              <?php echo $key_yoga_type['yoga_type_para']; ?>
            </p>
            <button class="learn-more">
              Learn More <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        <?php }
        ?>
      </div>
    </div>
  </section>
  <!-- ======== YOGA TYPES SECTION ENDS ======== -->

  <!-- ======== YOGA EXPERIENCE SECTION STARTS ======== -->
  <section class="yoga-experience" id="trainer">
    <div class="container">
      <div class="experience-title">
        <h1>Experience of Yoga</h1>
      </div>
      <div class="experience">
        <!-- left side -->
        <div class="exp-lft wow animate__animated animate__fadeInLeft">
          <?php foreach ($yoga_exp_grp['left_repeater'] as $key_left_yoga_exp) { ?>
            <div class="exp">
              <div class="lft-content">
                <h1>
                  <?php echo $key_left_yoga_exp['heading']; ?>
                </h1>
                <p>
                  <?php echo $key_left_yoga_exp['para']; ?>
                </p>
              </div>
              <div class="lft-img">
                <img src="<?php echo $key_left_yoga_exp['logo']['url']; ?>"
                  alt="<?php echo $key_left_yoga_exp['logo']['alt']; ?>" />
              </div>
            </div>
          <?php } ?>
        </div>


        <!-- middle image -->
        <div class="exp-img wow animate__animated animate__fadeInUpBig">
          <img src="<?php echo $yoga_exp_grp['middle_img']['url']; ?>"
            alt="<?php echo $yoga_exp_grp['middle_img']['alt']; ?>" />
        </div>

        <!-- right side -->
        <div class="exp-rgt wow animate__animated animate__fadeInRight">
          <?php foreach ($yoga_exp_grp['right_repeater'] as $key_right_yoga_exp) { ?>
            <div class="exp">
              <div class="rgt-img">
                <img src="<?php echo $key_right_yoga_exp['logo']['url']; ?>"
                  alt="<?php echo $key_right_yoga_exp['logo']['alt']; ?>" />
              </div>
              <div class="rgt-content">
                <h1>
                  <?php echo $key_right_yoga_exp['heading']; ?>
                </h1>
                <p>
                  <?php echo $key_right_yoga_exp['para']; ?>
                </p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== YOGA EXPERIENCE SECTION ENDS ======== -->

  <!-- ======== CLASSES SECTION STARTS ======== -->
  <section class="classes" id="classes">
    <div class="container">
      <div class="classes-title">
        <h1>Our Classes</h1>
      </div>
      <div class="class-grid wow animate__animated animate__fadeInUpBig">

        <?php
        foreach ($our_class_repeater as $key_our_class) {
          ?>
          <div class="class">
            <div class="class-img">
              <a href="<?php echo $key_our_class['image_anchor_tag']['url']; ?>">
                <img class="class-img" src="<?php echo $key_our_class['image']['url']; ?>"
                  alt="<?php echo $key_our_class['image']['alt']; ?>" />
              </a>
            </div>
            <h2><a
                href="<?php echo $key_our_class['heading_anchor_tag']['url']; ?> target='<?php echo $key_our_class['heading_anchor_tag']['target']; ?>'"><?php echo $key_our_class['heading_anchor_tag']['title']; ?></a></h2>
            <p>
              <?php echo $key_our_class['paragraph']; ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- ======== CLASSES SECTION ENDS ======== -->

  <!-- ======== TIME TABLE SECTION STARTS ======== -->
  <!-- REMAINING -->
  <section class="time-table" id="schedule">
    <div class="container wow animate__animated animate__zoomIn">
      <div class="time-table-title">
        <h1>Class Time Table</h1>
      </div>
      <div class="class-time-table">
        <table class="table">
          <tr class="days">
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
          </tr>
          <!-- first row -->
          <tr>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-1.jpg " alt="classes-1" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-2.jpg " alt="classes-2" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-3.jpg " alt="classes-3" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
          </tr>
          <!-- second row -->
          <tr>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-4.jpg " alt="classes-4" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-5.jpg " alt="classes-5" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-7.jpg " alt="classes-7" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-6.jpg " alt="classes-6" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
          </tr>
          <!-- third row -->
          <tr>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-1.jpg " alt="classes-1" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-2.jpg " alt="classes-2" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-3.jpg " alt="classes-3" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
          </tr>
          <!-- fourth row -->
          <tr>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-4.jpg " alt="classes-4" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-5.jpg " alt="classes-5" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-6.jpg " alt="classes-6" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-7.jpg " alt="classes-7" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
          </tr>
          <!-- fifth row -->
          <tr>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-2.jpg " alt="classes-2" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-4.jpg " alt="classes-4" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-6.jpg " alt="classes-6" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-1.jpg " alt="classes-1" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="images/classes-5.jpg " alt="classes-5" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
          </tr>
          <!-- last row -->
          <tr class="months">
            <th>
              <a href="#"><i class="fas fa-arrow-left"></i> September</a>
            </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>
              <a href="#">November <i class="fas fa-arrow-right"></i></a>
            </th>
          </tr>
        </table>
      </div>
    </div>
  </section>
  <!-- ======== TIME TABLE SECTION ENDS ======== -->

  <!-- ======== STORY SECTION STARTS ======== -->
  <section>
    <div class="container">
      <div class="stories wow animate__animated animate__zoomIn">
        <div class="stories-title">
          <h4>
            <?php echo $story_section_grp['subheading']; ?>
          </h4>
          <h1>
            <?php echo $story_section_grp['heading']; ?>
          </h1>
        </div>
        <div class="class-stories">
          <?php foreach ($story_section_grp['story_section_repeater'] as $key_story_section) { ?>
            <div class="story">
              <div class="quotes"><i class="fas fa-quote-left"></i></div>
              <p>
                <?php echo $key_story_section['content']; ?>
              </p>
              <div class="person">
                <img src="<?php echo $key_story_section['image']['url']; ?>"
                  alt="<?php echo $key_story_section['image']['alt']; ?>" />
                <div class="person-name">
                  <h3>
                    <?php echo $key_story_section['name']; ?>
                  </h3>
                  <p>
                    <?php echo $key_story_section['role']; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== STORY SECTION ENDS ======== -->

  <!-- ======== COUNTER SECTION STARTS ======== -->
  <section>
    <div class="counter-bg">
      <div class="container">
        <div class="counter">
          <?php foreach ($counter_repeater as $keys_counter) { ?>
            <div class="counts">
              <h1>
                <span class="customer-counter">
                  <?php echo $keys_counter['count']; ?>
                </span>
              </h1>
              <p>
                <?php echo $keys_counter['label']; ?>
              </p>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== COUNTER SECTION EDNS ======== -->

  <!-- ======== RECENT POSTS SECTION STARTS ======== -->
  <section class="recent-posts">
    <div class="container">
      <div class="classes-title">
        <h1>Recent Posts</h1>
      </div>
      <div class="posts wow animate__animated animate__zoomIn">

        <?php foreach ($recent_post_repeater as $key_recent_post) { ?>
          <div class="post">
            <div class="post-img">
              <img src="<?php echo $key_recent_post['image']['url']; ?>"
                alt="<?php echo $key_recent_post['image']['alt']; ?>" />
            </div>
            <p>
              <?php echo $key_recent_post['details']; ?>
              <i class="fas fa-comment-alt"></i>
            </p>
            <h3><a href="<?php echo $key_recent_post['heading_anchor']['url']; ?>"
                target="<?php echo $key_recent_post['heading_anchor']['target']; ?>"><?php echo $key_recent_post['heading_anchor']['title']; ?></a></h3>
            <p>
              <?php echo $key_recent_post['excerpt']; ?>
            </p>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- ======== RECENT POSTS SECTION ENDS ======== -->

  <!-- ======== LASTEST PHOTOS SECTION STARTS ======== -->
  <section class="latest-photos-section">
    <div class="classes-title">
      <h1>
        <?php echo $latest_photos_grp['heading']; ?>
      </h1>
    </div>
    <div class="latest-photos wow animate__animated animate__slideInUp">
      <?php foreach ($latest_photos_grp['image_repeater'] as $keys_latest_photos) { ?>
        <div class="photo">
          <a data-fancybox="gallery" href="<?php echo $keys_latest_photos['image_link']['url']; ?>">
            <img src="<?php echo $keys_latest_photos['image']['url']; ?>"
              alt="<?php echo $keys_latest_photos['image']['alt']; ?>" />
          </a>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- ======== LASTEST PHOTOS SECTION ENDS ======== -->

</main>

<?php
get_footer();
?>