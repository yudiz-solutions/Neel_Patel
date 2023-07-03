<?php
/* Template Name: Contact */
get_header();
?>

<!--******************* Banner Section Start *********************-->
<div class="home-banner">
  <div class="banner" style="background: #5C5C5C url('images/home-slide1.jpg') no-repeat center center / cover;">
    <div class="container">
      <h1>contact us</h1>
    </div>
  </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
  <section class="common-section contact-section">
    <div class="container-fluid">
      <div class="contact-right col-sm-6 col-sm-offset-6"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-form">
            <h3 class="blue-text">Message Us</h3>
            <form action="#" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone">
              </div>
              <div class="form-group">
                <textarea class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Submit" class="form-control button submit theme-btn">
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-6 fill-mob">
          <div class="contact-info">
            <h3 class="blue-text">Contact Info</h3>
            <h4>Expatriat Assistance Services Inc. </h4>
            <p>100 King Street West, Suite 5700 <br>Toronto, Ontario, M5X 1C7</p>
            <p>Phone: <a href="tel:(647) 931 – 9768">(647) 931 – 9768</a><br>Email: <a
                href="mailto:dw@greenbankcapitalinc.com">dw@greenbankcapitalinc.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="map"></section>
  <section class="assessment-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2>Get your free assessment done right now !</h2>
        </div>
        <div class="col-sm-6 text-right">
          <a href="assessment.html" class="theme-btn white-btn">apply now</a>
        </div>
      </div>
    </div>
  </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<footer>
  <div class="footer-inner">
    <div class="container">
      <a href="index.html" class="footer-logo"><img src="images/logo-white.png" alt="logo"></a>
      <ul>
        <li><a href="about.html">About Us</a></li>
        <li><a href="services.html">Our Services</a></li>
        <li><a href="team.html">Team</a></li>
        <li><a href="packages.html">Packages</a></li>
        <li><a href="investor.html">Investor Information</a></li>
      </ul>
      <a href="contact.html" class="theme-btn white-btn">Contact Us</a>
      <div class="clearfix"></div>
    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-sm-7">
          <p>© 2018 Expatriate Assistance Services Inc. All Rights Reserved.</p>
        </div>
        <div class="col-sm-5 footer-links">
          <ul>
            <li><a href="terms-condition.html">TERMS AND CONDITIONS</a></li>
            <li><a href="privacy-policy.html">PRIVACY POLICY</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--******************* Footer Section End ******************-->
<script type="text/javascript">
  $(window).scroll(function () {
    if ($(this).scrollTop() > 1) {
      $('header').addClass("sticky-header");
    }
    else {
      $('header').removeClass("sticky-header");
    }
  });
</script>
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