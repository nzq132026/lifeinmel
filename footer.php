<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

  <!-- Footer Section -->
  <footer class="dark-wrapper inverse-text">
    <div class="sub-footer">
      <div class="container inner text-center"> <img src="#" srcset="<?php echo get_stylesheet_directory_uri(); ?>/style/images/LFIM-color.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/style/images/LFIM-color-2x.png 2x" alt="" />
        <div class="space25"></div>
        <p>© 2019 Life in Melbourne. All rights reserved. Build by Neil.</p>
        <div class="space30"></div>
        <ul class="social social-color social-m">
          <li><a href="https://weibo.com/shippo0714"><i class="fa fa-weibo"></i></a></li>
          <li><a href="https://www.facebook.com/Neil132026"><i class="fa fa-facebook-f"></i></a></li>
          <li><a href="https://www.instagram.com/ailurophile_n/"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
      <!-- /.container --> 
    </div>
    <!-- /.sub-footer --> 
  </footer>
</div>
<!-- /.content-wrapper --> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/js/jquery.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/js/popper.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/js/bootstrap.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/jquery.themepunch.tools.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/revolution-addons/filmstrip/js/revolution.addon.filmstrip.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) --> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.actions.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.carousel.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.migration.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.parallax.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/js/plugins.js"></script> 
<script src="<?php echo get_stylesheet_directory_uri(); ?>/style/js/scripts.js"></script>
<!-- Enable Page Smooth Scolliing -->
<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
</script>
<script>$('#submit').addClass('btn btn-full-rounded');</script>
<script>
  var map;
  function initMap() {
    // Styles a map in night mode.
    map = new google.maps.Map(document.querySelector('#map'), {
      center: {lat: -37.823, lng: 144.96},
      zoom: 13,
      disableDefaultUI: true,
      styles: 
      [
        {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
        {
          featureType: 'administrative.locality',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{color: '#263c3f'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{color: '#6b9a76'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [{color: '#38414e'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry.stroke',
          stylers: [{color: '#212a37'}]
        },
        {
          featureType: 'road',
          elementType: 'labels.text.fill',
          stylers: [{color: '#9ca5b3'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [{color: '#746855'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry.stroke',
          stylers: [{color: '#1f2835'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [{color: '#f3d19c'}]
        },
        {
          featureType: 'transit',
          elementType: 'geometry',
          stylers: [{color: '#2f3948'}]
        },
        {
          featureType: 'transit.station',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [{color: '#17263c'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [{color: '#515c6d'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.stroke',
          stylers: [{color: '#17263c'}]
        }
      ]
    });
    initZoomControl(map);
    initMapTypeControl(map);
    initFullscreenControl(map);
  }

  function initZoomControl(map) {
    document.querySelector('.zoom-control-in').onclick = function() {
      map.setZoom(map.getZoom() + 1);
    };
    document.querySelector('.zoom-control-out').onclick = function() {
      map.setZoom(map.getZoom() - 1);
    };
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(
        document.querySelector('.zoom-control'));
  }

  function initMapTypeControl(map) {
    var mapTypeControlDiv = document.querySelector('.maptype-control');
    document.querySelector('.maptype-control-map').onclick = function() {
      mapTypeControlDiv.classList.add('maptype-control-is-map');
      mapTypeControlDiv.classList.remove('maptype-control-is-satellite');
      map.setMapTypeId('roadmap');
    };
    document.querySelector('.maptype-control-satellite').onclick =
        function() {
      mapTypeControlDiv.classList.remove('maptype-control-is-map');
      mapTypeControlDiv.classList.add('maptype-control-is-satellite');
      map.setMapTypeId('hybrid');
    };

    map.controls[google.maps.ControlPosition.LEFT_TOP].push(
        mapTypeControlDiv);
  }

  function initFullscreenControl(map) {
    var elementToSendFullscreen = map.getDiv().firstChild;
    var fullscreenControl = document.querySelector('.fullscreen-control');
    map.controls[google.maps.ControlPosition.RIGHT_TOP].push(
        fullscreenControl);


    fullscreenControl.onclick = function() {
      if (isFullscreen(elementToSendFullscreen)) {
        exitFullscreen();
      } else {
        requestFullscreen(elementToSendFullscreen);
      }
    };

    document.onwebkitfullscreenchange =
    document.onmsfullscreenchange =
    document.onmozfullscreenchange =
    document.onfullscreenchange = function() {
      if (isFullscreen(elementToSendFullscreen)) {
        fullscreenControl.classList.add('is-fullscreen');
      } else {
        fullscreenControl.classList.remove('is-fullscreen');
      }
    };
  }

  function isFullscreen(element) {
    return (document.fullscreenElement ||
            document.webkitFullscreenElement ||
            document.mozFullScreenElement ||
            document.msFullscreenElement) == element;
  }

  function requestFullscreen(element) {
    if (element.requestFullscreen) {
      element.requestFullscreen();
    } else if (element.webkitRequestFullScreen) {
      element.webkitRequestFullScreen();
    } else if (element.mozRequestFullScreen) {
      element.mozRequestFullScreen();
    } else if (element.msRequestFullScreen) {
      element.msRequestFullScreen();
    }
  }

  function exitFullscreen() {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.msCancelFullScreen) {
      document.msCancelFullScreen();
    }
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6Pq8htyNTdlnvaRbuY8fTG8nPveT29Bk&callback=initMap" async defer></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150085147-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150085147-1');
</script>
</body>
</html>
