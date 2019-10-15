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
    <div class="wrapper image-wrapper bg-image inverse-text background-overlay" data-image-src="<?php the_field('header_bg'); ?>">
      <div class="container inner pt-250 pb-120 text-center">
        <h1 class="heading mb-0">About Me</h1>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
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
            <figure><img src="<?php the_field('feature_img'); ?>" alt=""></figure>
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
            <ul class="social social-color social-m">
              <li><a href="https://weibo.com/shippo0714"><i class="fa fa-weibo"></i></a></li>
              <li><a href="https://www.facebook.com/Neil132026"><i class="fa fa-facebook-f"></i></a></li>
              <li><a href="https://www.instagram.com/ailurophile_n/"><i class="fa fa-instagram"></i></a></li>
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
            <?php 
              $now = time();
              $your_date = strtotime("2010-01-26");
              $datediff = $now - $your_date;
             ?>
            <h3 class="value"><?php echo round($datediff/86408); ?></h3>
            <p class="text-uppercase color-dark mb-0">Days in Melbourne</p>
          </div>
          <!--/column -->
          <div class="col-md-3 text-center">
            <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-cafe_hot-coffee"></i> </div>
            <h3 class="value"><?php the_field('shutter_count'); ?></h3>
            <p class="text-uppercase color-dark mb-0">Shutter count</p>
          </div>
          <!--/column -->
          <div class="col-md-3 text-center">
            <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-electronics_tv"></i> </div>
            <h3 class="value"><?php the_field('pictures'); ?></h3>
            <p class="text-uppercase color-dark mb-0">Pictures taken</p>
          </div>
          <!--/column -->
          <div class="col-md-3 text-center">
            <div class="icon fs-54 icon-color color-dark mb-15"> <i class="si-sports_medal-2"></i> </div>
            <?php 
              $now = time();
              $cat_date = strtotime("2018-10-06");
              $datediff = $now - $cat_date;
             ?>
            <h3 class="value"><?php echo round($datediff/86408); ?></h3>
            <p class="text-uppercase color-dark mb-0">Days cat aged</p>
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
        <h2 class="section-title color-dark mb-20 text-center">Things I use to record life..</h2>
        <p class="text-center">Hello! I'm Julia Brailie, I'm specializing in wedding and portrait photography,<br class="d-none d-md-block" />
          based in London. I love to turn ideas into beautiful things.</p>
          <div class="space60 d-none d-md-block"></div>
          <?php if( have_rows('equipments') ): ?>
            <div class="row">
              <?php while( have_rows('equipments') ): the_row();
                $equip_img = get_sub_field('equip_img');
                $title = get_sub_field('title');
                $subtitle = get_sub_field('subtitle');
                $lead_text = get_sub_field('lead_text');
                $text = get_sub_field('text');
                ?>
              <div class="col-md-4 pl-md-5 text-center">
                <img class="avatar avatar-egg mb-30" style="filter: grayscale(100%);" src="<?php echo $equip_img; ?>"/>
                <h4><?php echo $title; ?></h4>
                <p><?php echo $subtitle; ?></p>
              </div>
              <div class="col-md-8 pl-md-5 justify-content-center"> 
                <p class="lead larger"><?php echo $lead_text; ?></p>
                <p><?php echo $text; ?></p><br><br>
              </div>
              <div class="space30 d-none d-md-block"></div>
              <?php endwhile; ?>
            </div>
           <?php endif; ?>
              <!--/.row --> 
            </div>
            <!--/column --> 
          </div>
        <!--/.row --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>

<?php get_footer();