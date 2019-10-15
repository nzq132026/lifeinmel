<?php
/*
 * Template Name: Contact Page
 */
?>
    <?php     
    get_header();
    the_post();
    ?>
    
  <!-- Main Header Section -->
  <section id="main-header">
    <div class="wrapper image-wrapper bg-image inverse-text overlay3" data-image-src="<?php the_field('header_bg'); ?>">
      <div class="container inner pt-250 pb-120 text-center">
        <h1 class="heading mb-0">Want to have a chat?</h1>
        <p>Leave me a message about your thoughts, and I will get back to you.</p>
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Form Section -->
  <section id="form">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <h2 class="section-title">Get in Touch with me</h2>
            <p>Tell me what is on your mind, any thoughts, ideas, suggestions to help me improve, and I will get back to you as soon as I can.</p>
            <div class="space10"></div>
            <div class="form-container">
              <form action="<?php echo get_stylesheet_directory_uri(); ?>/contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate>
                <div class="row text-center">
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your name" required="required">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Your e-mail" required="required">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-12">
                    <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                    <div class="space20"></div>
                    <button type="submit" class="btn btn-full-rounded" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Send</button>
                    <footer class="notification-box"></footer>
                  </div>
                  <!--/column --> 
                </div>
                <!--/.row -->
              </form>
              <!--/.vanilla-form --> 
            </div>
            <!--/.form-container --> 
          </div>
          <!--/column -->
          <aside class="col-md-4 sidebar">
            <div class="sidebox widget">
              <div id="map" class="mt-40 mb-40" style="height: 250px"></div>
                <div style="display:none">
                  <div class="controls zoom-control">
                    <button class="zoom-control-in" title="Zoom In">+</button>
                    <button class="zoom-control-out" title="Zoom Out">−</button>
                  </div>
                  <div class="controls maptype-control maptype-control-is-map">
                    <button class="maptype-control-map"
                            title="Show road map">Map</button>
                    <button class="maptype-control-satellite"
                            title="Show satellite imagery">Satellite</button>
                  </div>
                  <div class="controls fullscreen-control">
                    <button title="Toggle Fullscreen">
                      <div class="fullscreen-control-icon fullscreen-control-top-left"></div>
                      <div class="fullscreen-control-icon fullscreen-control-top-right"></div>
                      <div class="fullscreen-control-icon fullscreen-control-bottom-left"></div>
                      <div class="fullscreen-control-icon fullscreen-control-bottom-right"></div>
                    </button>
                  </div>
                </div>
              <h5 class="widget-title">Address</h5>
              <ul class="icon-list">
                <li><i class="fa fa-map"></i><?php the_field('address'); ?></li>
                <li><i class="fa fa-envelope"></i><a href="mailto:first.last@email.com" class="nocolor"><?php the_field('email'); ?></a></li>
                <li><i class="fa fa-phone-square"></i><?php the_field('phone'); ?></li>
              </ul>
            </div>
            <!-- /.widget --> 
          </aside>
          <!-- /column .sidebar --> 
        </div>
        <!--/.row --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>


<?php get_footer();