<?php
/*
 * Template Name: Blog
 * Template Post Type: post, page, product
 */
?>
   <?php     
    get_header();
    the_post();
    ?>

  <body>

  <!-- Main Header Section -->
  <section id="main-header">
    <div class="wrapper image-wrapper bg-image inverse-text fixed" data-image-src="<?php echo the_post_thumbnail_url('full'); ?>">
      <div class="container inner pt-250 pb-120 text-center">
        <h1 class="heading mb-0"><?php echo get_the_title(); ?></h1>
      </div>
      <!-- /.container --> 
    </div>
  </section>

  <!-- Single Blog Section -->
  <section id="single-blog">
    <div class="wrapper dark-wrapper inverse-text">
      <div class="container inner">
        <div class="row">
          <div class="col-md-8">
            <div class="blog classic-view">
              <div class="post">
                <h1 class="post-title text-center"><?php echo get_the_title(); ?></h1>
                <div class="meta text-center">
                  <span class="date"><?php echo get_the_date(); ?></span>
                  <span class="author">By <?php echo get_the_author(); ?></span>
                  <span class="comments"><a href="#comments"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></a></span>
                  <span class="category"><?php the_category(', '); ?></span>
                </div>
                <?php echo get_the_content(); ?>
                <!-- /.post-content --> 
              </div>
              <!-- /.post -->
              <div class="divider-icon"><i class="fa fa-pencil"></i></div>
              <div class="post-nav-wrapper">
                <div class="post-nav prev">
                  <div class="meta"><i class="fa fa-angle-double-left"></i>See other articles</div>
                  <h4><a href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID ); ?>">"<?php echo get_the_title( get_adjacent_post(false,'',true)->ID ); ?>"</a></h4>
                </div>
                <div class="post-nav next">
                  <div class="meta">Next Article<i class="fa fa-angle-double-right"></i></div>
                  <h4><a href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID ); ?>">"<?php echo get_the_title( get_adjacent_post(false,'',false)->ID ); ?>"</a></h4>
                </div>
              </div>
              <!-- /.post-nav -->

              <div class="divider-icon"><i class="fa fa-pencil"></i></div>
              <div id="comments">
                <h4><?php comments_number('No Comment', '1 Comment','% Comments'); ?> on "<?php echo get_the_title(); ?>"</h4>
                <ol id="singlecomments" class="commentlist">
                  <?php $args = array(
                        'post_id' => $post->ID, // use post_id, not post_ID
                    );
                   ?>
                  <?php foreach (get_comments($args) as $comment): ?>
                  <li>
                    <div class="message">
                      <div class="user icon icon-round"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/user/u<?php echo rand(1,5); ?>.png" /></div>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#"><?php echo $comment->comment_author; ?></a></h6>
                          <div class="meta"> <span class="date"><?php comment_time('d/m/Y g:i a'); ?></span></div>
                        </div>
                        <?php echo $comment->comment_content; ?>
                      </div>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ol>
              </div>
              <!-- /#comments -->
              <div class="divider-icon"><i class="fa fa-pencil"></i></div>
              <h4><?php comment_form_title('Tell me what you think!'); ?></h4>
              <p>Your email address will not be published. Required fields are marked *</p>
              <div class="space20"></div>
              <?php comment_form(); ?>
              <!-- /.comment-form --> 
            </div>
            <!-- /.blog --> 
          </div>

          <!--Blog Widgets -->
          <aside class="col-md-4 sidebar">
            <!-- About Me Widget --> 
            <div class="sidebox widget">
              <h3 class="widget-title" style="text-align: center;"><?php the_field('feature_title'); ?></h3>
              <figure class="mb-20"><img src="<?php the_field('feature_img'); ?>" alt="" /></figure>
              <p><?php the_field('feature'); ?></p>
                <ul class="social social-color social-m">
                  <li><a href="https://weibo.com/shippo0714"><i class="fa fa-weibo"></i></a></li>
                  <li><a href="https://www.facebook.com/Neil132026"><i class="fa fa-facebook-f"></i></a></li>
                  <li><a href="https://www.instagram.com/ailurophile_n/"><i class="fa fa-instagram"></i></a></li>
                </ul>
              <div class="clearfix"></div>
            </div>
            <!-- Popular Post Widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Popular Posts</h3>
              <?php
                  $args = array(
                      'category_name' => 'travel, experience, memory, life, tech',
                      'order'     => 'DESC',
                      'post_per_page' => 3
                      );
                  $posts = new WP_Query( $args );
                  $postCount = 0;
                  if($posts->have_posts()):
              ?>
              <ul class="image-list">
                <?php while ( $posts->have_posts() ) : $posts->the_post(); $postCount++; ?>
                <li>
                  <figure>
                    <a href="<?php the_permalink(); ?>">
                      <?php echo get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'object-fit-cover' )); ?>
                    </a>
                  </figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="<?php the_permalink(); ?>">"<?php the_title_attribute(); ?>"</a> </h6>
                    <div class="meta"><span class="date"><?php the_time('F j, Y'); ?></span><span class="comments"><a href="<?php the_permalink(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></span></div>
                  </div>
                </li>
              <?php endwhile; ?>
              </ul>
            <?php endif ?>

              <!-- /.image-list --> 
            </div>
            <!-- Instagram Feed Widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Instagram</h3>
              <div class="tiles tiles-s">
                <div id="instafeed-widget" class="items row"></div>
              </div>
              <!--/.tiles --> 
            </div>   
          </aside>
          <!-- /column .sidebar --> 
        </div>
        <!--/.row --> 
      </div>
      <!-- /.container --> 
    </div>
  </section>



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->


<?php get_footer();