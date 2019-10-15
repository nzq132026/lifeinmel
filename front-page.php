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
            <h2 class="color-dark">What is this site?</h2>
            <div class="space10"></div>
            <p>This is a personal blogging website built by Neil. It is used to record years of my life spent in Melbourne, as well as the personal experience. I will use my camera and my phone to capture as much memorable moments as I can so that things becoming meaningful in the future of my life. <br> What I will post in this site:</p>
            <ul class="unordered-list list-default">
              <li>All the photos that I took along the way.</li>
              <li>Interesting blogs about my experience.</li>
              <li>Updates of photography techiques.</li>
            </ul>
          </div>
          <div class="space30 d-lg-none d-xl-none"></div>
          <!--/column -->
          <div class="col-lg-7">
            <h2 class="color-dark">A Little About Me</h2>
            <div class="space10"></div>
            <div class="row">
              <div class="col-md-5">
                <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/portrait.jpg" alt="" style="filter: grayscale(50%);"></figure>
              </div>
              <div class="col-md-7">
                <p><span class="dropcap color-red">M</span>ulla vitae elit libero, a pharetra augue. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Sed posuere consectetur est at lobortis. Nullam id dolor id nibh ultricies ut.</p>
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
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?php the_field('parallax_bg') ?>">
      <div class="container inner pt-120 pb-120">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="swiper-container-wrapper basic-slider">
              <div class="swiper-container text-center">
                <?php if( have_rows('parallax_text') ): ?>
                <div class="swiper-wrapper">
                  <?php while( have_rows('parallax_text') ): the_row();
                      $text = get_sub_field('text');
                      $author = get_sub_field('author');
                    ?>
                    <!-- Parallax Paragraphs -->
                    <div class="swiper-slide">
                      <blockquote class="icon icon-top larger">
                        <p><?php echo $text; ?></p>
                        <footer class="blockquote-footer"><?php echo $author; ?></footer>
                      </blockquote>    
                    </div>
                  <?php endwhile; ?>
                </div>
                <?php endif; ?>
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
          <div data-filter=".iphone" class="cbp-filter-item">By iPhone</div>
          <div data-filter=".camera" class="cbp-filter-item">By Camera</div>
          <div data-filter=".views" class="cbp-filter-item">Views</div>
          <div data-filter=".things" class="cbp-filter-item">Things</div>
          <div data-filter=".people" class="cbp-filter-item">People</div>
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
        <h2 class="title-color mb-30 color-dark text-center">From my recent blogs</h2>
        <div class="swiper-container-wrapper swiper-col3" data-aos="fade">
          <div class="swiper-container text-center">
            <?php
                $args = array(
                    'category_name' => 'travel, experience, memory, life',
                    'order'     => 'DESC',
                    );
                $posts = new WP_Query( $args );
                $postCount = 0;
                if($posts->have_posts()):
            ?>
              <div class="swiper-wrapper">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); $postCount++; ?>
                <div class="swiper-slide">
                  <figure class="overlay overlay3 mb-25">
                    <a href="<?php the_permalink(); ?>"> 
                      <?php echo get_the_post_thumbnail($post_id, 'medium', array( 'class' => 'card-img-top' )); ?></a>
                      <figcaption class="d-flex">
                        <div class="align-self-center mx-auto"><i class="fa fa-link"></i></div>
                      </figcaption>
                  </figure>
                  <div class="post-content pl-10 pr-10">
                    <div class="meta">
                      <span class="date"><?php the_time('Y-m-d'); ?></span>
                      <span class="comments"><a href="<?php the_permalink(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
                      <span class="category"><?php the_category(', '); ?></span>
                    </div>
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>">"<?php the_title_attribute(); ?>"</a></h2>
                    <p><?php echo apply_filters('the_content', substr(get_the_content(), 0, 300) ); ?>...</p>
                    <a href="<?php the_permalink(); ?>" class="more">Read more</a> 
                  </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <!-- /.swiper-slide -->
              </div>
            <!-- /.swiper-wrapper --> 
          </div>
        <?php endif; ?>
          <!-- .swiper-container -->
          <div class="swiper-pagination gap-small"></div>
        </div>
        <!-- .swiper-container-wrapper --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>



<?php get_footer();