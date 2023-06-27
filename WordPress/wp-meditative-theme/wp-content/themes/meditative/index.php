<?php
get_header();
$banner_grp = get_field('banner_grp');
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
        <div class="yoga-type">
          <div class="yoga-image">
            <img src="images/classes-6.jpg" alt="classes-6" />
          </div>
          <h1>Power Yoga</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est,
            dicta! Ipsam provident quaerat repellendus dolores
          </p>
          <button class="learn-more">
            Learn More <i class="fas fa-arrow-right"></i>
          </button>
        </div>
        <div class="yoga-type">
          <div class="yoga-image">
            <img src="images/classes-1.jpg" alt="classes-1" />
          </div>
          <h1>Community Class</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est,
            dicta! Ipsam provident quaerat repellendus dolores
          </p>
          <button class="learn-more">
            Learn More <i class="fas fa-arrow-right"></i>
          </button>
        </div>
        <div class="yoga-type">
          <div class="yoga-image">
            <img src="images/classes-7.jpg" alt="classes-7" />
          </div>
          <h1>Foundation Yoga</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est,
            dicta! Ipsam provident quaerat repellendus dolores
          </p>
          <button class="learn-more">
            Learn More <i class="fas fa-arrow-right"></i>
          </button>
        </div>
        <div class="yoga-type">
          <div class="yoga-image">
            <img src="images/classes-2.jpg" alt="classes-2" />
          </div>
          <h1>Parental Yoga</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est,
            dicta! Ipsam provident quaerat repellendus dolores
          </p>
          <button class="learn-more">
            Learn More <i class="fas fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </section>
  <!-- ======== YOGA TYPES SECTION ENDS ======== -->

  <section class="yoga-experience" id="trainer">
    <div class="container">
      <div class="experience-title">
        <h1>Experience of Yoga</h1>
      </div>
      <div class="experience">
        <!-- left side -->
        <div class="exp-lft wow animate__animated animate__fadeInLeft">
          <div class="exp">
            <div class="lft-content">
              <h1>Balance Body & Mind</h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Officia quidem explicabo assumenda mollitia debitis, a
                provident.
              </p>
            </div>
            <div class="lft-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
          </div>
          <div class="exp">
            <div class="lft-content">
              <h1>Healthy Daily Life</h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Officia quidem explicabo assumenda mollitia debitis, a
                provident.
              </p>
            </div>
            <div class="lft-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
          </div>
          <div class="exp">
            <div class="lft-content">
              <h1>Improves your flexibility</h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Officia quidem explicabo assumenda mollitia debitis, a
                provident.
              </p>
            </div>
            <div class="lft-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
          </div>
          <div class="exp">
            <div class="lft-content">
              <h1>Protects your spine</h1>
              <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Officia quidem explicabo assumenda mollitia debitis, a
                provident.
              </p>
            </div>
            <div class="lft-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
          </div>
        </div>

        <!-- middle image -->
        <div class="exp-img wow animate__animated animate__fadeInUpBig">
          <img src="images/services.jpg" alt="services" />
        </div>
        <!-- right side -->
        <div class="exp-rgt wow animate__animated animate__fadeInRight">
          <div class="exp">
            <div class="rgt-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
            <div class="rgt-content">
              <h1>Betters your bone health</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In
                ullam reprehenderit suscipit accusamus! Nam, sit?
              </p>
            </div>
          </div>
          <div class="exp">
            <div class="rgt-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
            <div class="rgt-content">
              <h1>Increases your blood flow</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In
                ullam reprehenderit suscipit accusamus! Nam, sit?
              </p>
            </div>
          </div>
          <div class="exp">
            <div class="rgt-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
            <div class="rgt-content">
              <h1>Keep a practice journal</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In
                ullam reprehenderit suscipit accusamus! Nam, sit?
              </p>
            </div>
          </div>
          <div class="exp">
            <div class="rgt-img">
              <img src="images/yoga-outline-removebg-preview.png" alt="yoga-outline-removebg-preview" />
            </div>
            <div class="rgt-content">
              <h1>Builds muscle strength</h1>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In
                ullam reprehenderit suscipit accusamus! Nam, sit?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- classes section -->
  <section class="classes" id="classes">
    <div class="container">
      <div class="classes-title">
        <h1>Our Classes</h1>
      </div>
      <div class="class-grid wow animate__animated animate__fadeInUpBig">
        <div class="class">
          <div class="class-img">
            <a href="class-1.html">
              <img class="exc" src="Exclude.png" alt="">
              <img class="class-img" src="images/classes-1.jpg" alt="classes-1" />
            </a>
          </div>

          <h2><a href="#">Private & Group Lessons</a></h2>
          <p>Sept. 30,2019 - 01:00pm - 03:00pm</p>
        </div>
        <div class="class">
          <div class="class-img">
            <img src="images/classes-2.jpg" alt="classes-2" />
          </div>
          <h2><a href="#">Yoga for Pregnant</a></h2>
          <p>Sept. 30,2019 - 01:00pm - 03:00pm</p>
        </div>
        <div class="class">
          <div class="class-img">
            <img src="images/classes-3.jpg" alt="classes-3" />
          </div>
          <h2><a href="#">Yoga for Beginners</a></h2>
          <p>Sept. 30,2019 - 01:00pm - 03:00pm</p>
        </div>
        <div class="class">
          <div class="class-img">
            <img src="images/classes-4.jpg" alt="classes-4" />
          </div>
          <h2><a href="#">Yoga Barre</a></h2>
          <p>Sept. 30,2019 - 01:00pm - 03:00pm</p>
        </div>
        <div class="class">
          <div class="class-img">
            <img src="images/classes-5.jpg" alt="classes-5" />
          </div>
          <h2><a href="#">Yoga Core</a></h2>
          <p>Sept. 30,2019 - 01:00pm - 03:00pm</p>
        </div>
        <div class="class">
          <div class="class-img">
            <img src="images/classes-6.jpg" alt="classes-6" />
          </div>
          <h2><a href="#">Yoga Restore</a></h2>
          <p>Sept. 30,2019 - 01:00pm - 03:00pm</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Time Table Section -->
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

  <!-- story section -->
  <section>
    <div class="container">
      <div class="stories wow animate__animated animate__zoomIn">
        <div class="stories-title">
          <h4>TESTIMONY</h4>
          <h1>Successful Stories</h1>
        </div>
        <div class="class-stories">
          <div class="story">
            <div class="quotes"><i class="fas fa-quote-left"></i></div>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi
              reiciendis iure dolore saepe, perspiciatis minima incidunt
              explicabo aperiam qui aliquid.
            </p>
            <div class="person">
              <img src="images/person_1.jpg" alt="person_1" />
              <div class="person-name">
                <h3>Kenny Buffer</h3>
                <p>Customer</p>
              </div>
            </div>
          </div>

          <div class="story">
            <div class="quotes"><i class="fas fa-quote-left"></i></div>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi
              reiciendis iure dolore saepe, perspiciatis minima incidunt
              explicabo aperiam qui aliquid.
            </p>
            <div class="person">
              <img src="images/person_2.jpg" alt="person_2" />
              <div class="person-name">
                <h3>Kenny Buffer</h3>
                <p>Customer</p>
              </div>
            </div>
          </div>

          <div class="story">
            <div class="quotes"><i class="fas fa-quote-left"></i></div>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi
              reiciendis iure dolore saepe, perspiciatis minima incidunt
              explicabo aperiam qui aliquid.
            </p>
            <div class="person">
              <img src="images/person_3.jpg" alt="person_3" />
              <div class="person-name">
                <h3>Kenny Buffer</h3>
                <p>Customer</p>
              </div>
            </div>
          </div>

          <div class="story">
            <div class="quotes"><i class="fas fa-quote-left"></i></div>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi
              reiciendis iure dolore saepe, perspiciatis minima incidunt
              explicabo aperiam qui aliquid.
            </p>
            <div class="person">
              <img src="images/person_3.jpg" alt="person_3" />
              <div class="person-name">
                <h3>Kenny Buffer</h3>
                <p>Customer</p>
              </div>
            </div>
          </div>

          <div class="story">
            <div class="quotes"><i class="fas fa-quote-left"></i></div>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi
              reiciendis iure dolore saepe, perspiciatis minima incidunt
              explicabo aperiam qui aliquid.
            </p>
            <div class="person">
              <img src="images/person_3.jpg" alt="person_3" />
              <div class="person-name">
                <h3>Kenny Buffer</h3>
                <p>Customer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- counter section -->
  <section>
    <div class="counter-bg">
      <div class="container">
        <div class="counter">
          <div class="counts">
            <h1>
              <span class="customer-counter" data-count="2500">0</span>
            </h1>
            <p>Happy Customers</p>
          </div>
          <div class="counts">
            <h1><span class="customer-counter" data-count="60">0</span></h1>
            <p>Yoga Classes</p>
          </div>
          <div class="counts">
            <h1><span class="customer-counter" data-count="50">0</span></h1>
            <p>Years of Experience</p>
          </div>
          <div class="counts">
            <h1><span class="customer-counter" data-count="100">0</span></h1>
            <p>Yoga Conducted</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Posts -->
  <section class="recent-posts">
    <div class="container">
      <div class="classes-title">
        <h1>Recent Posts</h1>
      </div>
      <div class="posts wow animate__animated animate__zoomIn">
        <div class="post">
          <div class="post-img">
            <img src="images/image_1.jpg" alt="image_1" />
          </div>
          <p>
            JULY. 14, 2019 &nbsp; ADMIN <i class="fas fa-comment-alt"></i> 3
          </p>
          <h3><a href="#">Is Wellness the new luxury</a></h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
            assumenda!
          </p>
        </div>

        <div class="post">
          <div class="post-img">
            <img src="images/image_2.jpg" alt="image_2" />
          </div>
          <p>
            JULY. 14, 2019 &nbsp; ADMIN <i class="fas fa-comment-alt"></i> 3
          </p>
          <h3><a href="#">Is Wellness the new luxury</a></h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
            assumenda!
          </p>
        </div>

        <div class="post">
          <div class="post-img">
            <img src="images/image_3.jpg" alt="image_3" />
          </div>
          <p>
            JULY. 14, 2019 &nbsp; ADMIN <i class="fas fa-comment-alt"></i> 3
          </p>
          <h3><a href="#">Is Wellness the new luxury</a></h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
            assumenda!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- latest photos -->
  <section class="latest-photos-section">
    <div class="classes-title">
      <h1>Latest Photos</h1>
    </div>
    <div class="latest-photos wow animate__animated animate__slideInUp">
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-1.jpg">
          <img src="images/gallery-1.jpg" alt="gallery-1" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-2.jpg">
          <img src="images/gallery-2.jpg" alt="gallery-2" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-3.jpg">
          <img src="images/gallery-3.jpg" alt="gallery-3" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-4.jpg">
          <img src="images/gallery-4.jpg" alt="gallery-4.jpg" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-5.jpg">
          <img src="images/gallery-5.jpg" alt="gallery-5" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-6.jpg">
          <img src="images/gallery-6.jpg" alt="gallery-6" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-7.jpg">
          <img src="images/gallery-7.jpg" alt="gallery-7" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="images/gallery-8.jpg">
          <img src="images/gallery-8.jpg" alt="gallery-8" />
        </a>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>