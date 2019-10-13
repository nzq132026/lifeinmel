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
      <div class="container inner pt-120 pb-120 text-center">
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
                <h1 class="post-title text-center"><a href="blog-post.html"><?php echo get_the_title(); ?></a></h1>
                <div class="meta text-center">
                  <span class="date"><?php echo get_the_date(); ?></span>
                  <span class="author">By <?php echo get_the_author(); ?></span>
                  <span class="comments"><a href="#"><?php comments_number( '0 comment', '1 comment', '% comments' ); ?></a></span>
                  <span class="category"><?php the_category(', '); ?></span>
                </div>
                <?php echo get_the_content(); ?>
                <!-- /.post-content --> 
              </div>
              <!-- /.post -->
              <div class="divider-icon"><i class="fa fa-pencil"></i></div>
              <div class="post-nav-wrapper">
                <div class="post-nav prev">
                  <div class="meta"><i class="fa fa-angle-double-left"></i>Previous Article</div>
                  <h4><a href="#">Cursus Quam Ullamcorper Cras Ornare Etiam Aenean</a></h4>
                </div>
                <div class="post-nav next">
                  <div class="meta">Next Article<i class="fa fa-angle-double-right"></i></div>
                  <h4><a href="#">Fringilla Ligula Consectetur Ridiculus Vulputate</a></h4>
                </div>
              </div>
              <!-- /.post-nav -->
              <div class="divider-icon"><i class="fa fa-pencil"></i></div>

              <div id="comments">
                <h4><?php comments_number('No Comment', '1 Comment','% Comments'); ?> on "<?php echo get_the_title(); ?>"</h4>
                <ol id="singlecomments" class="commentlist">
                  <?php foreach (get_comments() as $comment): ?>
                  <li>
                    <div class="message">
                      <div class="user icon icon-round"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/user/u<?php echo rand(1,5); ?>.png" /></div>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#"><?php echo $comment->comment_author; ?></a></h6>
                          <div class="meta"> <span class="date"><?php comment_time('d/m/Y g:i a'); ?></span><span class="reply"><a href="#">Reply</a></span> </div>
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
              <h3 class="widget-title"><?php the_field('feature_title'); ?></h3>
              <figure class="mb-20"><img src="<?php the_field('feature_img'); ?>" alt="" /></figure>
              <p><?php the_field('feature'); ?></p>
              <ul class="social social-color social-s">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- Popular Post Widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Popular Posts</h3>
              <ul class="image-list">
                <li>
                  <figure><a href="blog-post.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/a1.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Magna Mollis Ultricies Mauris</a> </h6>
                    <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#">4</a></span></div>
                  </div>
                </li>
                <li>
                  <figure> <a href="blog-post.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/a2.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Ornare Nullam Risus Cursus</a> </h6>
                    <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#">4</a></span></div>
                  </div>
                </li>
                <li>
                  <figure><a href="blog-post.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/a3.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="post-title"> <a href="blog-post.html">Euismod Nullam Fusce Dapibus</a> </h6>
                    <div class="meta"><span class="date">12 Nov 2014</span><span class="comments"><a href="#">4</a></span></div>
                  </div>
                </li>
              </ul>
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