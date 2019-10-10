<?php
/*
 * Template Name: About Page
 */
?>
    <?php     
    get_header();
    the_post();
    ?>
  <!-- Main Header Section -->
  <section id="main-header">
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bg4.jpg">
      <div class="container inner pt-120 pb-120 text-center">
        <h1 class="heading mb-0">About Us</h1>
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Intro Section -->
  <section id="intro">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <h2 class="section-title mb-40 text-center">Who is Behind All This?</h2>
        <div class="row">
          <div class="col-lg-6 text-md-center">
            <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/about3.jpg" alt=""></figure>
          </div>
          <!-- /column -->
          <div class="space30 d-block d-lg-none d-xl-none"></div>
          <div class="col-lg-6">
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Vestibulum id ligula.</p>
            <blockquote class="bordered">
              <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula lacinia odio sem nec elit.</p>
              <footer class="blockquote-footer">Connor Gibson</footer>
            </blockquote>
            <p>Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies.</p>
            <ul class="social social-color social-s mb-15">
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-flickr"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            </ul>
          </div>
          <!-- /column --> 
        </div>
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Counter Section -->
  <section id="counter">
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bg5.jpg">
      <div class="container inner pt-120 pb-120">
        <div class="row counter">
          <div class="col-md-3 text-center">
            <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-photo_camera"></i> </div>
            <h3 class="value">7518</h3>
            <p class="text-uppercase color-dark mb-0">Shots Taken</p>
          </div>
          <!--/column -->
          <div class="col-md-3 text-center">
            <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-cafe_hot-coffee"></i> </div>
            <h3 class="value">3472</h3>
            <p class="text-uppercase color-dark mb-0">Cups of Coffee</p>
          </div>
          <!--/column -->
          <div class="col-md-3 text-center">
            <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-electronics_tv"></i> </div>
            <h3 class="value">2184</h3>
            <p class="text-uppercase color-dark mb-0">Movies Watched</p>
          </div>
          <!--/column -->
          <div class="col-md-3 text-center">
            <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-sports_medal-2"></i> </div>
            <h3 class="value">4523</h3>
            <p class="text-uppercase color-dark mb-0">Awards Won</p>
          </div>
          <!--/column --> 
        </div>
        <!--/.row --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Equipment Section -->
  <section id="equipment">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <h2 class="section-title mb-40 text-center">Happy Customers</h2>
        <div class="swiper-container-wrapper swiper-col3" data-aos="fade">
          <div class="swiper-container text-center">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="box box-border">
                  <blockquote class="icon icon-top">
                    <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula lacinia odio sem nec elit.</p>
                    <footer class="blockquote-footer">Connor Gibson</footer>
                  </blockquote>
                </div>
                <!-- /.box --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <div class="box box-border">
                  <blockquote class="icon icon-top">
                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio, dapibus ac facilisis in, egestas eget quam aenean lacinia.</p>
                    <footer class="blockquote-footer">Coriss Ambady</footer>
                  </blockquote>
                </div>
                <!-- /.box --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <div class="box box-border">
                  <blockquote class="icon icon-top">
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam integer. Curabitur blandit tempus.</p>
                    <footer class="blockquote-footer">Barclay Widerski</footer>
                  </blockquote>
                </div>
                <!-- /.box --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <div class="box box-border">
                  <blockquote class="icon icon-top">
                    <p>Donec ullamcorper nulla non metus auctor fringilla. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean lacinia bibendum nulla sed consectetur. Porta ac consectetur.</p>
                    <footer class="blockquote-footer">Connor Gibson</footer>
                  </blockquote>
                </div>
                <!-- /.box --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <div class="box box-border">
                  <blockquote class="icon icon-top">
                    <p>Donec id elit non mi porta gravida at eget metus. Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla.</p>
                    <footer class="blockquote-footer">Coriss Ambady</footer>
                  </blockquote>
                </div>
                <!-- /.box --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <div class="box box-border">
                  <blockquote class="icon icon-top">
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                    <footer class="blockquote-footer">Barclay Widerski</footer>
                  </blockquote>
                </div>
                <!-- /.box --> 
              </div>
              <!-- /.swiper-slide --> 
            </div>
            <!-- /.swiper-wrapper --> 
          </div>
          <!-- .swiper-container -->
          <div class="swiper-pagination gap-large"></div>
        </div>
        <!-- .swiper-container-wrapper --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>

<?php get_footer();