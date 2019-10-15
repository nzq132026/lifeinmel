<?php
/*
 * Template Name: Place
 * Template Post Type: post, page, product
 */
?>
   <?php     
    get_header();
    the_post();
    ?>

  <!-- Main Header Section -->
  <section id="main-header">
    <div class="rev_slider_wrapper">
      <div id="slider16" class="rev_slider" data-version="5.4.7">
        <ul>
          <?php if( have_rows('main_header') ): ?>
          <li data-transition="fade" data-filmstrip='{
          "direction":"right-to-left",
          "filter": "none",
          "times": "80,80,80,80",
          "imgs":[ 
            <?php while( have_rows('main_header') ): the_row();
              $image = get_sub_field('header_bg');
              ?>
              {"url": "<?php echo $image; ?>", "alt": ""},
              <?php endwhile; ?>
              {"url": "<?php the_field('main_header_last_slide'); ?>", "alt": ""} 
          ]}'>
          
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/dummy.png" alt="" />
            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
           data-x="['center','center','center','center']"  
           data-y="['middle','middle','middle','middle']"  
          data-width="full"
          data-height="full"
          data-whitespace="nowrap"
          data-type="shape" 
          data-basealign="slide" 
          data-responsive_offset="on" 
          data-frames='[{"delay":10,"speed":600,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":600,"frame":"999","to":"opacity:0;","ease":"Power4.easeOut"}]'
          data-textAlign="['inherit','inherit','inherit','inherit']"
          data-lasttriggerstate="reset"
          style="z-index: 5;background-color:rgba(21,21,21, 0.5);"> </div>
            <div class="tp-caption font-title tp-resizeme" 
           data-x="['center','center','center','center']"  
           data-y="['middle','middle','middle','middle']"  
          data-fontsize="['140','140','110','70']"
          data-lineheight="['150','150','120','80']"
          data-whitespace="nowrap"
          data-type="text" 
          data-basealign="slide" 
          data-responsive_offset="on" 
          data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"frame":"999","to":"opacity:0;fb:20px;","ease":"Power4.easeOut"}]'
          data-textAlign="['center','center','center','center']"
          data-lasttriggerstate="reset"
          style="z-index: 6; color: rgba(255,255,255,0.6);"><?php the_field('header_title'); ?><br />
            <?php the_field('header_subtitle'); ?></div>
          </li>
        <?php endif; ?>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
      <!-- /.rev_slider --> 
    </div>
  </section>

  <!-- Dynamic Map Section -->
  <section id="dynamic-map">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <div class="row">
          <div class="col-md-4">
            <h2 class="section-title">My Specialties</h2>
            <p class="lead larger">I'd like to give you a unique photography experience, capture your products with excellent composition and lighting skills.</p>
            <p>Etiam porta sem malesuada magna mollis euismod. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          </div>
          <!--/column -->
          <div class="col-md-8 pl-md-5">
            <div class="row text-center">
              <div class="col-md-6"> <span class="icon icon-color color-default fs-48 mb-20"><i class="si-cafe_fork-spoon-knife"></i></span>
                <h5>Food Photography</h5>
                <p>Nulla vitae elit libero commodo non porta venanatis gravida eget metus egestas.</p>
              </div>
              <!--/column -->
              <div class="col-md-6"> <span class="icon icon-color color-default fs-48 mb-20"><i class="si-spa_perfume"></i></span>
                <h5>Product Photograph</h5>
                <p>Nulla vitae elit libero commodo non porta venanatis gravida eget metus egestas.</p>
              </div>
              <!--/column -->
              <div class="space30 d-none d-md-block"></div>
              <div class="col-md-6"> <span class="icon icon-color color-default fs-48 mb-20"><i class="si-cafe_coctail-drink"></i></span>
                <h5>Event Photography</h5>
                <p>Nulla vitae elit libero commodo non porta venanatis gravida eget metus egestas.</p>
              </div>
              <!--/column -->
              <div class="col-md-6"> <span class="icon icon-color color-default fs-48 mb-20"><i class="si-food_mini-cake"></i></span>
                <h5>Pastry Photography</h5>
                <p>Nulla vitae elit libero commodo non porta venanatis gravida eget metus egestas.</p>
              </div>
              <!--/column --> 
            </div>
            <!--/.row --> 
          </div>
          <!--/column --> 
        </div>
        <!--/.row --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Gallery Section-->
  <section id="gallery">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="space30"></div>
      <div id="cube-grid-full-large-filter" class="cbp-filter-container text-center">
        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All</div>
        <div data-filter=".iphone" class="cbp-filter-item">iPhone</div>
        <div data-filter=".DSLR" class="cbp-filter-item">Camera</div>
        <div data-filter=".views" class="cbp-filter-item">Views</div>
        <div data-filter=".things" class="cbp-filter-item">Things</div>
        <div data-filter=".people" class="cbp-filter-item">People</div>
      </div>
      <div class="clearfix"></div>
      <div class="space20"></div>
      <?php if( have_rows('gallery') ): ?>
      <div id="cube-grid-full-large" class="cbp light-gallery">
        <?php while( have_rows('gallery') ): the_row();
            $image = get_sub_field('image');
            $category = get_sub_field('category');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
            ?>

        <!-- Gallery item -->
        <div class="cbp-item <?php echo $category; ?>">
          <figure class="overlay overlay1"><a href="<?php echo $image['url']; ?>"><img src="<?php echo $image['url']; ?>" alt="" />
            <div id="caption<?php echo $image['id']; ?>" class="d-none">
              <p><?php echo $description; ?></p>
            </div>
            </a>
            <figcaption class="d-flex text-left">
              <div class="align-self-end mt-auto">
                <h5><?php echo $title; ?></h5>
                <p><?php echo $description; ?></p>
              </div>
            </figcaption>
          </figure>
        </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
    </div>
  </section>

  <!-- Recent Blogs Section -->
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