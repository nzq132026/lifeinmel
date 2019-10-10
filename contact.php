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
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bg4.jpg">
      <div class="container inner pt-120 pb-120 text-center">
        <h1 class="heading mb-0">About Us</h1>
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Form Section -->
  <section id="form">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <div class="row">
          <div class="col-md-8">
            <h2 class="section-title">Get in Touch</h2>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat.</p>
            <div class="space10"></div>
            <div class="form-container">
              <form action="contact/vanilla-form.php" method="post" class="vanilla vanilla-form" novalidate>
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
                  <div class="col-md-6 pr-10">
                    <div class="form-group">
                      <input type="tel" class="form-control" name="tel" placeholder="Phone">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-md-6 pl-10">
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <!--/.form-group --> 
                  </div>
                  <!--/column -->
                  <div class="col-12">
                    <textarea name="message" class="form-control" rows="3" placeholder="Type your message here..." required></textarea>
                    <div class="space20"></div>
                    <button type="submit" class="btn btn-full-rounded" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">Submit</button>
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
              <h5 class="widget-title">Address</h5>
              <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Sed posuere consectetur est at lobortis. Morbi leo risus, porta ac consectetur.</p>
              <ul class="icon-list">
                <li><i class="fa fa-map"></i>Moonshine St. 14/05 Light City</li>
                <li><i class="fa fa-envelope"></i><a href="mailto:first.last@email.com" class="nocolor">first.last@email.com</a></li>
                <li><i class="fa fa-phone-square"></i>+00 (123) 456 78 90 </li>
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