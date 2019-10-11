<?php
/*
 * Template Name: Home Page
 */
?>
   <?php     
    get_header();
    the_post();
    ?>

  <!-- Main slider header Section -->
  <section id="main-header">
    <div class="rev_slider_wrapper fullscreen-container">
      <div id="slider" class="rev_slider fullscreenbanner" data-version="5.4.7">
        <?php if( have_rows('main_header') ): ?>
        <ul>
          <?php while( have_rows('main_header') ): the_row();
            $image = get_sub_field('header_bg');
            $subtitle = get_sub_field('subtitle');
            $title = get_sub_field('title');
            $link = get_sub_field('link');
            $button = get_sub_field('button');
            ?>
          <li data-transition="fade" data-thumb="<?php echo $image; ?>"><img src="<?php echo $image; ?>" alt="" />
            <div class="tp-caption font-weight-600 text-uppercase color-white text-center" 
              data-x="center"
              data-y="middle" 
              data-voffset="['-75','-75','-75','-75']"
              data-fontsize="['18','18','18','18']"
              data-lineheight="['28','28','28','28']"
              data-width="['600','600','600','600']"
              data-textAlign="['center','center','center','center']"
              data-whitespace="['normal','normal','normal','normal']"
              data-frames='[{"from":"y:-50px;sX:2;sY:2;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' 
              data-startslide="0" 
              data-endslide="3"
              data-responsive="on" 
              data-responsive_offset="on" 
              style="z-index: 9; letter-spacing: 3px;"><?php echo $subtitle; ?>
            </div>
            <div class="tp-caption font-weight-500 color-white text-center" 
                data-x="center" 
                data-y="middle" 
                data-voffset="['0','0','0','0']"
                data-fontsize="['60','60','50','45']"
                data-lineheight="['70','70','60','55']"
                data-width="['900','900','700','700']"
                data-textAlign="['center','center','center','center']"
                data-whitespace="['normal','normal','normal','normal']"
                data-frames='[{"from":"y:-50px;sX:2;sY:2;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-startslide="0" 
                data-endslide="3"
                data-responsive="on" 
                data-responsive_offset="on" 
                style="z-index: 9;"><?php echo $title; ?>
            </div>
            <a class="tp-caption btn btn-full-rounded btn-l btn-white" 
                data-x="center" 
                data-y="middle" 
                data-voffset="['105','105','105','105']"
                data-width="['auto','auto','auto','auto']"
                data-textAlign="['center','center','center','center']"
                data-frames='[{"from":"y:-50px;sX:2;sY:2;opacity:0;","speed":1000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                data-startslide="0" 
                data-endslide="3"
                data-responsive="on" 
                data-responsive_offset="on" 
                style="z-index: 9;" href="<?php echo $link; ?>"><?php echo $button; ?>
              </a> 
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
      <!-- /.rev_slider --> 
    </div>
  </section>

  <!-- Intro Section -->
  <section id="intro">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <h2 class="color-dark mb-20 text-center">About Me</h2>
        <p class="lead text-center">Hello! I'm Julia Brailie, I'm specializing in wedding and portrait photography,<br class="d-none d-md-block" />
          based in London. I love to turn ideas into beautiful things.</p>
        <div class="space30"></div>
        <div class="row">
          <!--/column --> 
          <div class="col-lg-5">
            <h2 class="color-dark">Why Choose Me?</h2>
            <div class="space10"></div>
            <p>Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor.</p>
            <ul class="unordered-list list-default">
              <li>Donec ullamcorper nulla non metus auctor.</li>
              <li>Cras justo odio, dapibus ac facilisis.</li>
              <li>Praesent commodo cursus magna.</li>
              <li>Curabitur blandit tempus porttitor.</li>
            </ul>
          </div>
          <div class="space30 d-lg-none d-xl-none"></div>
          <!--/column -->
          <div class="col-lg-7">
            <h2 class="color-dark">A Little About Me</h2>
            <div class="space10"></div>
            <div class="row">
              <div class="col-md-5">
                <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/about14.jpg" alt=""></figure>
              </div>
              <div class="col-md-7">
                <p><span class="dropcap color-red">N</span>ulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Sed posuere consectetur est at lobortis. Nullam id dolor id nibh ultricies ut.</p>
                <footer class="blockquote-footer">Connor Gibson</footer>
              </div>
              <!-- /column --> 
            </div>
            <!-- /.row --> 
          </div>
        </div>
        <!--/.row --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Parallax Section -->
  <section id="parallax">
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bg9.jpg">
      <div class="container inner pt-120 pb-120">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="swiper-container-wrapper basic-slider">
              <div class="swiper-container text-center">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <blockquote class="icon icon-top larger">
                      <p>Consectetur adipiscing elit. Duis mollis, est non commodo luctus gestas eget quam integer. Curabitur blandit tempus rutrum faucibus.</p>
                      <footer class="blockquote-footer">Connor Gibson</footer>
                    </blockquote>
                  </div>
                  <!-- /.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="icon icon-top larger">
                      <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vestibulum id ligula porta felis euismod semper. Cras justo odio.</p>
                      <footer class="blockquote-footer">Coriss Ambady</footer>
                    </blockquote>
                  </div>
                  <!-- /.swiper-slide -->
                  <div class="swiper-slide">
                    <blockquote class="icon icon-top larger">
                      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis.</p>
                      <footer class="blockquote-footer">Barclay Widerski</footer>
                    </blockquote>
                  </div>
                  <!-- /.swiper-slide --> 
                </div>
                <!-- /.swiper-wrapper --> 
              </div>
              <!-- /.swiper-container -->
              <div class="swiper-pagination gap-small"></div>
            </div>
            <!-- .swiper-container-wrapper --> 
          </div>
          <!-- /column --> 
        </div>
        <!-- /.row --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Small Gallery Section -->
  <section id="small-gallery">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <div id="cube-grid-filter" class="cbp-filter-container text-center">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
          <div data-filter=".iphone" class="cbp-filter-item">iPhone</div>
          <div data-filter=".DSLR" class="cbp-filter-item">Camera</div>
          <div data-filter=".nature" class="cbp-filter-item">Views</div>
          <div data-filter=".object" class="cbp-filter-item">Things</div>
          <div data-filter=".cat" class="cbp-filter-item">Cat</div>
          <div data-filter=".bw" class="cbp-filter-item">B&W</div>
        </div>
        <div class="clearfix"></div>
        <div class="space20"></div>
        <?php if( have_rows('small_gallery') ): ?>
        <div id="cube-grid" class="cbp light-gallery">
          <?php while( have_rows('small_gallery') ): the_row();
            $image = get_sub_field('gallery_img');
            $category = get_sub_field('category');
            $description = get_sub_field('description');
            ?>
          <!-- Gallery item -->
          <div class="cbp-item <?php echo $category; ?>">
            <figure class="overlay overlay2"><a href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="" />
              <div id="caption<?php echo $image['id']; ?>" class="d-none">
                <p><?php echo $description; ?></p>
              </div>
              </a>
            </figure>
          </div>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <!--/.cbp -->
        <div class="space30"></div>
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Slider Section -->
  <section id="slider">
    <div class="wrapper gray-wrapper">
      <div class="instagram-wrapper">
        <div class="swiper-container-wrapper">
          <div class="swiper-container swiper-instagram2">
            <div id="instafeed4" class="swiper-wrapper"></div>
          </div>
          <!-- /.swiper-container --> 
        </div>
        <!-- /.swiper-container-wrapper --> 
        <a href="https://www.instagram.com/ailurophile_n/" target="_blank" class="btn btn-full">Follow me @ Instagram</a> </div>
      <!-- /.instagram-wrapper --> 
    </div>
  </section>

  <!-- Recent single-Blog Section -->
  <section id="recent-single-blog">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <h2 class="title-color mb-30 color-dark text-center">From My Journal</h2>
        <div class="swiper-container-wrapper swiper-col3" data-aos="fade">
          <div class="swiper-container text-center">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure class="overlay overlay2 mb-25"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/ib1.jpg" alt="" /></a></figure>
                <div class="post-content pl-10 pr-10">
                  <div class="meta"><span class="date">12 Nov 2017</span><span class="comments"><a href="#">2</a></span><span class="category"><a href="#">Simple</a></span></div>
                  <h2 class="post-title"><a href="blog-post.html">Ligula tristique quis risus eget urna mollis ornare porttitor</a></h2>
                  <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque. Nullam id dolor id nibh.</p>
                  <a href="#" class="more">Read more</a> </div>
                <!-- /.swiper-slide-content --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <figure class="overlay overlay2 mb-25"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/ib2.jpg" alt="" /></a></figure>
                <div class="post-content pl-10 pr-10">
                  <div class="meta"><span class="date">12 Nov 2017</span><span class="comments"><a href="#">4</a></span><span class="category"><a href="#">Still Life</a></span></div>
                  <h2 class="post-title"><a href="blog-post.html">Nullam id dolor elit id nibh pharetra augue venenatis faucibus</a></h2>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Integer posuere erat a ante porttitor mollis sagittis lacus ultricies vehicula.</p>
                  <a href="#" class="more">Read more</a> </div>
                <!-- /.swiper-slide-content --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <figure class="overlay overlay2 mb-25"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/ib3.jpg" alt="" /></a></figure>
                <div class="post-content pl-10 pr-10">
                  <div class="meta"><span class="date">12 Nov 2017</span><span class="comments"><a href="#">6</a></span><span class="category"><a href="#">Minimalist</a></span></div>
                  <h2 class="post-title"><a href="blog-post.html">Ultricies fusce porta elit pharetra augue faucibus vulputate</a></h2>
                  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus. Tellus vulputate non magna eget urna. Donec sed.</p>
                  <a href="#" class="more">Read more</a> </div>
                <!-- /.swiper-slide-content --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <figure class="overlay overlay2 mb-25"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/ib4.jpg" alt="" /></a></figure>
                <div class="post-content pl-10 pr-10">
                  <div class="meta"><span class="date">12 Nov 2017</span><span class="comments"><a href="#">8</a></span><span class="category"><a href="#">Urban</a></span></div>
                  <h2 class="post-title"><a href="blog-post.html">Morbi leo risus porta eget metus est non commodolacus non commodo</a></h2>
                  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Curabitur blandit tempus. Vivamus sagittis.</p>
                  <a href="#" class="more">Read more</a> </div>
                <!-- /.swiper-slide-content --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <figure class="overlay overlay2 mb-25"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/ib5.jpg" alt="" /></a></figure>
                <div class="post-content pl-10 pr-10">
                  <div class="meta"><span class="date">12 Nov 2017</span><span class="comments"><a href="#">2</a></span><span class="category"><a href="#">Pets</a></span></div>
                  <h2 class="post-title"><a href="blog-post.html">Mollis adipiscing lorem quis mollis eget lacinia faucibus vestibulum</a></h2>
                  <p>Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor rutrum faucibus dolor.</p>
                  <a href="#" class="more">Read more</a> </div>
                <!-- /.swiper-slide-content --> 
              </div>
              <!-- /.swiper-slide -->
              <div class="swiper-slide">
                <figure class="overlay overlay2 mb-25"><a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/ib6.jpg" alt="" /></a></figure>
                <div class="post-content pl-10 pr-10">
                  <div class="meta"><span class="date">12 Nov 2017</span><span class="comments"><a href="#">9</a></span><span class="category"><a href="#">Still Life</a></span></div>
                  <h2 class="post-title"><a href="blog-post.html">Fusce mattis euismod sed diam eget risus amet tempus commodo</a></h2>
                  <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Curabitur blandit tempus porttitor nullam dolor.</p>
                  <a href="#" class="more">Read more</a> </div>
                <!-- /.swiper-slide-content --> 
              </div>
              <!-- /.swiper-slide --> 
            </div>
            <!-- /.swiper-wrapper --> 
          </div>
          <!-- .swiper-container -->
          <div class="swiper-pagination gap-small"></div>
        </div>
        <!-- .swiper-container-wrapper --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>



<?php get_footer();