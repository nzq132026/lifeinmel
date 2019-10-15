<?php
/*
 * Template Name: Blogs Page
 */
?>
   <?php     
    get_header();
    the_post();
    ?>

  <!-- Main Header Section -->
  <section id="main-header">
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?php the_field('header_bg'); ?>">
      <div class="col-md-6 container inner pt-250 pb-120 text-center">
        <h1 class="heading mb-0">Check my blogs</h1>
        <p>All of my blogs are related to my personal experience, either in terms of travel, life, or pieces of memories and interesting things.</p>
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Blogs Section -->
  <section id="blogs">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <div class="blog grid grid-view">
          <?php
                $args = array(
                    'category_name' => 'travel, experience, memory, life, tech',
                    'order'     => 'DESC',
                    );
                $posts = new WP_Query( $args );
                $postCount = 0;
                if($posts->have_posts()):
            ?>
          <div class="row isotope">
            <?php while ( $posts->have_posts() ) : $posts->the_post(); $postCount++; ?>
            <div class="item post grid-sizer col-md-6 col-lg-4">
              <figure class="overlay overlay3 mb-25">
                <a href="<?php the_permalink(); ?>"> 
                  <?php echo get_the_post_thumbnail($post_id, 'medium', array( 'class' => 'card-img-top' )); ?>
                </a>
                <figcaption class="d-flex">
                  <div class="align-self-center mx-auto"><i class="fa fa-link"></i></div>
                </figcaption>
              </figure>
              <div class="meta"><span class="date"><?php the_time('Y-m-d'); ?></span>
                <span class="comments"><a href="<?php the_permalink(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span>
                <span class="category"><?php the_category(', '); ?></span>
              </div>
              <h2 class="post-title text-center"><a href="<?php the_permalink(); ?>">"<?php the_title_attribute(); ?>"</a></h2>
              <div class="post-content">
                <p><?php echo apply_filters('the_content', substr(get_the_content(), 0, 270) ); ?>...</p>
                <a href="<?php the_permalink(); ?>" class="more">Read more</a> </div>
              <!-- /.post-content --> 
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <!-- /.post -->
          </div>
          <?php endif; ?>
          <!-- /.row --> 
        </div>
        <!-- /.blog -->
        <div class="space30 d-md-none"></div>
<!--         <div class="pagination bordered text-center">
          <ul>
            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div> -->
        <!-- /.pagination --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>


<?php get_footer();