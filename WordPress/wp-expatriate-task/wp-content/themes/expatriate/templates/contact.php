<?php
/* Template Name: Contact */
get_header();
$banner_grp = get_field('banner_grp');
$common_grp = get_field('common_grp');
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
  <section class="common-section contact-section">
    <div class="container-fluid">
      <div class="contact-right col-sm-6 col-sm-offset-6"></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-form">
            <?php if (!empty($common_grp['heading'])) { ?>
              <h3 class="blue-text">
                <?php echo $common_grp['heading']; ?>
              </h3>
            <?php }
            echo do_shortcode('[contact-form-7 id="256" title="Contact Us Page"]');
            ?>
          </div>
        </div>

        <div class="col-sm-6 fill-mob">
          <div class="contact-info">
            <?php if (!empty($common_grp['contact_info_grp']['heading'])) { ?>
              <h3 class="blue-text">
                <?php echo $common_grp['contact_info_grp']['heading']; ?>
              </h3>
            <?php } ?>

            <?php if (!empty($common_grp['contact_info_grp']['company_name'])) { ?>
              <h4>
                <?php echo $common_grp['contact_info_grp']['company_name']; ?>
              </h4>
            <?php } ?>

            <?php if (!empty($common_grp['contact_info_grp']['company_address'])) { ?>
              <p>
                <?php echo $common_grp['contact_info_grp']['company_address']; ?>
              </p>
            <?php } ?>

            <p>
              <?php if (!empty($common_grp['contact_info_grp']['phone_number'])) { ?>
                Phone: <a href="tel:<?php echo $common_grp['contact_info_grp']['phone_number']; ?>"><?php echo $common_grp['contact_info_grp']['phone_number'] ?></a>
              <?php } ?>
              <br>
              <?php if (!empty($common_grp['contact_info_grp']['email'])) { ?>
                Email: <a href="mailto:<?php echo $common_grp['contact_info_grp']['email']; ?>"><?php echo $common_grp['contact_info_grp']['email'] ?></a>
              <?php } ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="map">
  </section>
  <!--========= COMMON SECTION ENDS =========-->

  <!--========= ASSESMENT SECTION STARTS =========-->
  <?php
  do_action('insert_assessment_section');
  ?>
  <!--========= ASSESMENT SECTION ENDS =========-->
</main>

<!--========= FOOTER SECTION ENDS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->


<!-- Custom Map -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script> -->
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtc0b_oAykroc2auPTfMoHDcbaESZzNqk&callback=initMap"
  type="text/javascript"></script>
<script type="text/javascript">
  function initMap() {
    var mapDiv = document.getElementById('map');
    var latlng = new google.maps.LatLng(43.648636, -79.381744); //     (Latitude and Longitude of your location)
    var map = new google.maps.Map(mapDiv, {
      center: latlng,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.MAP
    });
    var marker = new google.maps.Marker({
      position: latlng,
      title: "My Location",    // Title for your location(optional)
      icon: 'images/map-marker.svg' // Map marker image(optional)
    });
    marker.setMap(map);
    map.set('styles', [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#bdbdbd"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dadada"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#c9c9c9"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      }
    ]);
  }
</script>
<!-- Sticky Js Included -->
<script type="text/javascript" src="js/sticky-kit.js"></script>
<script type="text/javascript">
  $(".assessment-section").stick_in_parent();
</script>
<!-- Sticky Js Included -->
<!--*********************** All End ************************-->
</body>

</html>