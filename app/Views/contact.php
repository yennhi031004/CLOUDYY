<?php
 require_once "header.php"
 
?>




<section class="contact-section text-center">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="item">
              <div class="item-icon"><span class="icon-phone"></span></div><!-- /.item-icon -->
              <div class="item-details">
                <h4 class="item-title">Điện thoại</h4><!-- /.item-title -->
                <span class="details">
                  +84 374 842 834 (Office Time: 09:00 - 16:00)<br>
                  +84 396 733 639 (24 Hours)
                </span><!-- /.details -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="item-icon"><span class="icon-map-pin"></span></div><!-- /.item-icon -->
              <div class="item-details">
                <h4 class="item-title">Địa chỉ</h4><!-- /.item-title -->
                <span class="details">
                 9A/L2 Hà Thị Khiêm , phường Trung Mỹ Tây, quận 12<br>
                  TP Hồ Chí Minh
                </span><!-- /.details -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="item-icon"><span class="icon-envelope"></span></div><!-- /.item-icon -->
              <div class="item-details">
                <h4 class="item-title">Email</h4><!-- /.item-title -->
                <span class="details">
                  <a href="#">support@deerphungstore.com</a>
                  <a href="#">hello@deerphungstore.com</a>
                </span><!-- /.details -->
              </div>
            </div>
          </div>
        </div><!-- /.row -->

        <div class="section-padding">
          <div class="section-top">
            <h2 class="section-title">Xin chào<span></span></h2><!-- /.section-title -->
          </div><!-- /.section-top -->

          <p class="section-description">
          Đối với tác giả đất không khỏi sân hận cũng không sân hận trang điểm. Tuy nhiên, đó không phải là vấn đề sống còn của tác giả về bóng đá trên sân. Hạm đội im lặng, đồng đội hướng về bờ
          </p><!-- /.section-description -->

          <form action="#" method="post" class="wpcf7-form contact-form">
            <div class="contact-input-fields">
              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="name">Your Name*</label>
                  <input type="text" id="name" name="name" value="" class="wpcf7-form-control" required="">
                </span>
              </p>
              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="email">Your Email*</label>
                  <input type="email" id="email" name="email" value="" class="wpcf7-form-control" required="">
                </span>
              </p>
              <p>
                <span class="wpcf7-form-control-wrap">
                  <label for="url">Your URL</label>
                  <input type="url" id="url" name="url" value="" class="wpcf7-form-control">
                </span>
              </p>
            </div><!-- /.contact-input-fields -->

            <p>
              <span class="wpcf7-form-control-wrap">
                <label for="message">Your Message*</label>
                <textarea id="message" name="message" class="wpcf7-form-control" required=""></textarea>
              </span>
            </p>

            <p class="choose-table-form"> 
              <input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit"> 
            </p>
          </form><!-- /.contact-form -->
        </div><!-- /.section-padding -->

        <div id="google-map">
          <div class="map-container">
            <div id="googleMaps" class="google-map-container"></div>
          </div><!-- /.map-container -->
        </div><!-- /#google-map-->

      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.contact-section -->




 



  <script src="public/layout/assets/js/plugins.js"></script>
  <script src="public/layout/assets/js/main.js"></script>
  <script src="public/layout/assets/js/gmap3.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

  <script type="text/javascript">

    jQuery(document).ready(function($) {
      "use strict";


      /*----------- Google Map - with support of gmaps.js ----------------*/
      function isMobile() {
        return ('ontouchstart' in document.documentElement);
      }

      function init_gmap() {
        if ( typeof google == 'undefined' ) return;
        var options = {
          center: {lat: -37.834812, lng: 144.963055},
          zoom: 15,
          mapTypeControl: true,
          mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
          },
          navigationControl: true,
          scrollwheel: false,
          streetViewControl: true,
          styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#cdcdcd"},{"visibility":"on"}]}]
        }

        if (isMobile()) {
          options.draggable = false;
        }

        $('#googleMaps').gmap3({
          map: {
            options: options
          },
          marker: {
            latLng: [-37.834812, 144.963055],
            options: { icon: 'images/map-icon.png' }
          }
        });
      }

      init_gmap();

    });
  </script>
<?php

require_once "footer.php"
?>