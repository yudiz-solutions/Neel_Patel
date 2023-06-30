<?php
get_header();
$banner_grp = get_field('banner_grp');
$yoga_type_repeater = get_field('yoga_type_repeater');
$yoga_exp_grp = get_field('yoga_exp_grp');
$our_class_repeater = get_field('our_class_repeater');
$story_section_grp = get_field('story_section_grp');
$counter_repeater = get_field('counter_repeater');
$recent_posts_heading = get_field('recent_posts_heading');
$recent_post_repeater = get_field('recent_post_repeater');
$latest_photos_grp = get_field('latest_photos_grp');
?>

<main data-barba="container" data-barba-namespace="classes">

  <!-- ======== BANNER SECTION STARTS ======== -->
  <?php if (!empty($banner_grp['arrow'])) { ?>
    <section class="banner">
      <div class="slider">

        <?php if (!empty($banner_grp['arrow'])) { ?>
          <div class="left-arrow">
            <img src="<?php echo $banner_grp['arrow']['url']; ?>" alt="<?php echo $banner_grp['arrow']['alt']; ?>" />
          </div>

          <div class="right-arrow">
            <img src="<?php echo $banner_grp['arrow']['url']; ?>" alt="<?php echo $banner_grp['arrow']['alt']; ?>" />
          </div>
        <?php } ?>

        <div class="slides">
          <?php if (!empty($banner_grp['gallery_1'])) { ?>
            <img src="<?php echo $banner_grp['gallery_1']['url']; ?>"
              alt="<?php echo $banner_grp['gallery_1']['alt']; ?>" />
          <?php } ?>

          <?php if (!empty($banner_grp['gallery_2'])) { ?>
            <img src="<?php echo $banner_grp['gallery_2']['url']; ?>"
              alt="<?php echo $banner_grp['gallery_2']['alt']; ?>" />
          <?php } ?>

          <?php if (!empty($banner_grp['gallery_3'])) { ?>
            <img src="<?php echo $banner_grp['gallery_3']['url']; ?>"
              alt="<?php echo $banner_grp['gallery_3']['alt']; ?>" />
          <?php } ?>

          <?php if (!empty($banner_grp['gallery_4'])) { ?>
            <img src="<?php echo $banner_grp['gallery_4']['url']; ?>"
              alt="<?php echo $banner_grp['gallery_4']['alt']; ?>" />
          <?php } ?>

          <?php if (!empty($banner_grp['gallery_5'])) { ?>
            <img src="<?php echo $banner_grp['gallery_5']['url']; ?>"
              alt="<?php echo $banner_grp['gallery_5']['alt']; ?>" />
          <?php } ?>
        </div>

        <div class="banner-content">
          <?php if (!empty($banner_grp['heading'])) { ?>
            <h1>
              <?php echo $banner_grp['heading']; ?>
            </h1>
          <?php } ?>

          <?php if (!empty($banner_grp['paragraph'])) { ?>
            <p>
              <?php echo $banner_grp['paragraph']; ?>
            </p>
          <?php } ?>

          <button class="btn">
            <!-- Dynamic Button Link is available -->
            View Our Works
          </button>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- ======== BANNER SECTION ENDSs ======== -->

  <!-- ======== YOGA TYPES SECTION STARTS ======== -->
  <?php if (!empty($yoga_type_repeater)) { ?>
    <section class="yoga-types">
      <div class="container">
        <div class="yoga wow animate__animated animate__fadeInUp">
          <?php foreach ($yoga_type_repeater as $key_yoga_type) {
            ?>
            <div class="yoga-type">
              <?php if (!empty($key_yoga_type['yoga_type_img'])) { ?>
                <div class="yoga-image">
                  <img src="<?php echo $key_yoga_type['yoga_type_img']['url']; ?>"
                    alt="<?php echo $key_yoga_type['yoga_type_img']['alt']; ?>" />
                </div>
              <?php } ?>

              <?php if (!empty($key_yoga_type['yoga_type_heading'])) { ?>
                <h1>
                  <?php echo $key_yoga_type['yoga_type_heading']; ?>
                </h1>
              <?php } ?>

              <?php if (!empty($key_yoga_type['yoga_type_para'])) { ?>
                <p>
                  <?php echo $key_yoga_type['yoga_type_para']; ?>
                </p>
              <?php } ?>

              <button class="learn-more">
                Learn More <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          <?php }
          ?>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- ======== YOGA TYPES SECTION ENDS ======== -->

  <!-- ======== YOGA EXPERIENCE SECTION STARTS ======== -->
  <?php if (!empty($yoga_exp_grp)) { ?>
    <section class="yoga-experience" id="trainer">
      <div class="container">
        <?php if (!empty($yoga_exp_grp['heading'])) { ?>
          <div class="experience-title">
            <h1>
              <?php echo $yoga_exp_grp['heading']; ?>
            </h1>
          </div>
        <?php } ?>

        <div class="experience">
          <!-- left side -->
          <?php if (!empty($yoga_exp_grp['left_repeater'])) { ?>
            <div class="exp-lft wow animate__animated animate__fadeInLeft">
              <?php foreach ($yoga_exp_grp['left_repeater'] as $key_left_yoga_exp) { ?>
                <div class="exp">
                  <div class="lft-content">
                    <?php if (!empty($key_left_yoga_exp['heading'])) { ?>
                      <h1>
                        <?php echo $key_left_yoga_exp['heading']; ?>
                      </h1>
                    <?php } ?>

                    <?php if (!empty($key_left_yoga_exp['para'])) { ?>
                      <p>
                        <?php echo $key_left_yoga_exp['para']; ?>
                      </p>
                    <?php } ?>
                  </div>

                  <div class="lft-img">
                    <?php if (!empty($key_left_yoga_exp['logo'])) { ?>
                      <img src="<?php echo $key_left_yoga_exp['logo']['url']; ?>"
                        alt="<?php echo $key_left_yoga_exp['logo']['alt']; ?>" />
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>

          <!-- middle image -->
          <?php if (!empty($yoga_exp_grp['middle_img'])) { ?>
            <div class="exp-img wow animate__animated animate__fadeInUpBig">
              <img src="<?php echo $yoga_exp_grp['middle_img']['url']; ?>"
                alt="<?php echo $yoga_exp_grp['middle_img']['alt']; ?>" />
            </div>
          <?php } ?>

          <!-- right side -->
          <?php if (!empty($yoga_exp_grp['right_repeater'])) { ?>
            <div class="exp-rgt wow animate__animated animate__fadeInRight">
              <?php foreach ($yoga_exp_grp['right_repeater'] as $key_right_yoga_exp) { ?>
                <div class="exp">
                  <?php if (!empty($key_right_yoga_exp['logo'])) { ?>
                    <div class="rgt-img">
                      <img src="<?php echo $key_right_yoga_exp['logo']['url']; ?>"
                        alt="<?php echo $key_right_yoga_exp['logo']['alt']; ?>" />
                    </div>
                  <?php } ?>

                  <div class="rgt-content">
                    <?php if (!empty($key_right_yoga_exp['heading'])) { ?>
                      <h1>
                        <?php echo $key_right_yoga_exp['heading']; ?>
                      </h1>
                    <?php } ?>

                    <?php if (!empty($key_right_yoga_exp['para'])) { ?>
                      <p>
                        <?php echo $key_right_yoga_exp['para']; ?>
                      </p>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- ======== YOGA EXPERIENCE SECTION ENDS ======== -->

  <!-- ======== CLASSES SECTION STARTS ======== -->
  <?php if (!empty($our_class_repeater)) { ?>
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
              <?php if (!empty($key_our_class['image_anchor_tag'])) { ?>
                <div class="class-img">
                  <a href="<?php echo $key_our_class['image_anchor_tag']['url']; ?>">

                    <?php if (!empty($key_our_class['image'])) { ?>
                      <img class="class-img" src="<?php echo $key_our_class['image']['url']; ?>"
                        alt="<?php echo $key_our_class['image']['alt']; ?>" />
                    <?php } ?>

                  </a>
                </div>
              <?php } ?>

              <?php if (!empty($key_our_class['heading_anchor_tag'])) { ?>
                <h2>
                  <a
                    href="<?php echo $key_our_class['heading_anchor_tag']['url']; ?> target='<?php echo $key_our_class['heading_anchor_tag']['target']; ?>'"><?php echo $key_our_class['heading_anchor_tag']['title']; ?>
                  </a>
                </h2>
              <?php } ?>

              <?php if (!empty($key_our_class['paragraph'])) { ?>
                <p>
                  <?php echo $key_our_class['paragraph']; ?>
                </p>
              <?php } ?>

            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
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
  <?php if (!empty($story_section_grp)) { ?>
    <section>
      <div class="container">
        <div class="stories wow animate__animated animate__zoomIn">
          <div class="stories-title">
            <?php if (!empty($story_section_grp['subheading'])) { ?>
              <h4>
                <?php echo $story_section_grp['subheading']; ?>
              </h4>
            <?php } ?>

            <?php if (!empty($story_section_grp['heading'])) { ?>
              <h1>
                <?php echo $story_section_grp['heading']; ?>
              </h1>
            <?php } ?>
          </div>

          <?php if (!empty($story_section_grp['story_section_repeater'])) { ?>
            <div class="class-stories">
              <?php foreach ($story_section_grp['story_section_repeater'] as $key_story_section) { ?>
                <div class="story">
                  <div class="quotes"><i class="fas fa-quote-left"></i></div>
                  <?php if (!empty($key_story_section['content'])) { ?>
                    <p>
                      <?php echo $key_story_section['content']; ?>
                    </p>
                  <?php } ?>

                  <div class="person">
                    <?php if (!empty($key_story_section['image'])) { ?>
                      <img src="<?php echo $key_story_section['image']['url']; ?>"
                        alt="<?php echo $key_story_section['image']['alt']; ?>" />
                      <div class="person-name">
                      <?php } ?>

                      <?php if (!empty($key_story_section['name'])) { ?>
                        <h3>
                          <?php echo $key_story_section['name']; ?>
                        </h3>
                      <?php } ?>

                      <?php if (!empty($key_story_section['role'])) { ?>
                        <p>
                          <?php echo $key_story_section['role']; ?>
                        </p>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- ======== STORY SECTION ENDS ======== -->

  <!-- ======== COUNTER SECTION STARTS ======== -->
  <?php if ($counter_repeater) { ?>
    <section>
      <div class="counter-bg">
        <div class="container">
          <div class="counter">
            <?php foreach ($counter_repeater as $keys_counter) { ?>
              <div class="counts">
                <?php if ($keys_counter['count']) { ?>
                  <h1>
                    <span class="customer-counter">
                      <?php echo $keys_counter['count']; ?>
                    </span>
                  </h1>
                <?php } ?>

                <?php if ($keys_counter['label']) { ?>
                  <p>
                    <?php echo $keys_counter['label']; ?>
                  </p>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- ======== COUNTER SECTION EDNS ======== -->

  <!-- ======== RECENT POSTS SECTION STARTS ======== -->
  <?php if (!empty($recent_posts_heading) || !empty($recent_post_repeater)) { ?>
    <section class="recent-posts">
      <div class="container">
        <div class="classes-title">
          <?php if (!empty($recent_posts_heading)) { ?>
            <h1>
              <?php echo $recent_posts_heading; ?>
            </h1>
          <?php } ?>
        </div>

        <?php if (!empty($recent_post_repeater)) { ?>
          <div class="posts wow animate__animated animate__zoomIn">
            <?php foreach ($recent_post_repeater as $key_recent_post) { ?>
              <div class="post">
                <?php if (!empty($key_recent_post['image'])) { ?>
                  <div class="post-img">
                    <img src="<?php echo $key_recent_post['image']['url']; ?>"
                      alt="<?php echo $key_recent_post['image']['alt']; ?>" />
                  </div>
                <?php } ?>

                <?php if (!empty($key_recent_post['details'])) { ?>
                  <p>
                    <?php echo $key_recent_post['details']; ?>
                    <i class="fas fa-comment-alt"></i>
                  </p>
                <?php } ?>

                <?php if (!empty($key_recent_post['heading_anchor'])) { ?>
                  <h3>
                    <a href="<?php echo $key_recent_post['heading_anchor']['url']; ?>"
                      target="<?php echo $key_recent_post['heading_anchor']['target']; ?>"><?php echo $key_recent_post['heading_anchor']['title']; ?>
                    </a>
                  </h3>
                <?php } ?>

                <?php if (!empty($key_recent_post['excerpt'])) { ?>
                  <p>
                    <?php echo $key_recent_post['excerpt']; ?>
                  </p>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php } ?>
  <!-- ======== RECENT POSTS SECTION ENDS ======== -->

  <!-- ======== LASTEST PHOTOS SECTION STARTS ======== -->
  <?php if (!empty($latest_photos_grp)) { ?>
    <section class="latest-photos-section">
      <div class="classes-title">
        <?php if (!empty($latest_photos_grp['heading'])) { ?>
          <h1>
            <?php echo $latest_photos_grp['heading']; ?>
          </h1>
        <?php } ?>
      </div>

      <?php if (!empty($latest_photos_grp['image_repeater'])) { ?>
        <div class="latest-photos wow animate__animated animate__slideInUp">
          <?php foreach ($latest_photos_grp['image_repeater'] as $keys_latest_photos) { ?>
            <div class="photo">
              <?php if (!empty($keys_latest_photos['image']) || !empty($keys_latest_photos['image_link'])) { ?>
                <a data-fancybox="gallery" href="<?php echo $keys_latest_photos['image_link']['url']; ?>">
                  <img src="<?php echo $keys_latest_photos['image']['url']; ?>"
                    alt="<?php echo $keys_latest_photos['image']['alt']; ?>" />
                </a>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </section>
  <?php } ?>
  <!-- ======== LASTEST PHOTOS SECTION ENDS ======== -->
</main>

<?php
get_footer();
?>