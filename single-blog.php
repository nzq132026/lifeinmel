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
    <div class="wrapper image-wrapper bg-image inverse-text" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bg2.jpg">
      <div class="container inner pt-120 pb-120 text-center">
        <h1 class="heading mb-0">Classic Blog with Sidebar</h1>
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
                <h1 class="post-title text-center"><a href="blog-post.html">Blog post with single image</a></h1>
                <div class="meta text-center"><span class="date">12 Nov 2017</span><span class="author">By <a href="#">Brailie</a></span><span class="comments"><a href="#">2</a></span><span class="category"><a href="#">Simple</a></span></div>
                <figure class="mb-25"><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/b32.jpg" alt="" /></figure>
                <div class="post-content">
                  <p>Fusce dapibus, tellus ac cursus commodo, <a href="#" class="hover">this is a link</a> tortor mauris condimentum nibh, ut fermentum massa justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum.</p>
                  <p>Donec sed odio dui consectetur adipiscing elit. Etiam adipiscing tincidunt elit, eu convallis felis suscipit ut. Phasellus rhoncus tincidunt auctor. Nullam eu sagittis mauris. Donec non dolor ac elit aliquam tincidunt at at sapien. Aenean tortor libero, condimentum ac laoreet vitae, varius tempor nisi. Duis non arcu vel lectus urna mollis ornare vel eu leo.</p>
                  <div class="space10"></div>
                  <blockquote class="icon icon-left">
                    <p>Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                    <footer class="blockquote-footer">Very important person</footer>
                  </blockquote>
                  <div class="space10"></div>
                  <h3>Sit Vulputate Bibendum Purus</h3>
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                  <div class="space10"></div>
                  <div class="tiles light-gallery">
                    <div class="items row text-center">
                      <div class="item col-md-6">
                        <figure class="overlay overlay2"><a href="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bp1-full.jpg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bp1.jpg" alt="" /></a></figure>
                      </div>
                      <!--/column -->
                      <div class="item col-md-6">
                        <figure class="overlay overlay2"><a href="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bp2-full.jpg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/bp2.jpg" alt="" /></a></figure>
                      </div>
                      <!--/column --> 
                    </div>
                    <!--/.row --> 
                  </div>
                  <!-- /.tiles -->
                  <div class="clearfix"></div>
                  <div class="space20"></div>
                  <p>Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nullam id dolor id nibh ultricies vehicula ut id elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
                  <div class="meta tags mb-10 text-center"><a href="#">journal</a>, <a href="#">illustration</a>, <a href="#">design</a>, <a href="#">daily</a></div>
                  <ul class="social social-mute social-s text-center">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                  <!-- /.social --> 
                </div>
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
              <div class="row">
                <div class="col-md-4">
                  <figure><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/author.jpg" /></figure>
                </div>
                <!--/column -->
                <div class="col-md-8">
                  <h4>About the Author</h4>
                  <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac.</p>
                  <ul class="social social-color social-s">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
                <!--/column --> 
              </div>
              <!--/.row -->
              <div class="divider-icon"><i class="fa fa-pencil"></i></div>
              <div id="comments">
                <h4>4 Comments on "Tellus Adipiscing Nibh Mattis Ligula"</h4>
                <ol id="singlecomments" class="commentlist">
                  <li>
                    <div class="message">
                      <div class="user icon icon-round"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/u1.jpg" /></div>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#">Connor Gibson</a></h6>
                          <div class="meta"> <span class="date">January 14, 2010</span><span class="reply"><a href="#">Reply</a></span> </div>
                        </div>
                        <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Sed posuere consectetur est at lobortis. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="message">
                      <div class="user icon icon-round"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/u2.jpg" /></div>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#">Nikolas Brooten</a></h6>
                          <div class="meta"> <span class="date">February 21, 2010</span><span class="reply"><a href="#">Reply</a></span> </div>
                        </div>
                        <p>Quisque tristique tincidunt metus non aliquam. Quisque ac risus sit amet quam sollicitudin vestibulum vitae malesuada libero. Mauris magna elit, suscipit non ornare et, blandit a tellus. Pellentesque dignissim ornare elit, quis mattis eros sodales ac.</p>
                      </div>
                    </div>
                    <ul class="children">
                      <li class="bypostauthor">
                        <div class="message">
                          <div class="user icon icon-round"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/u3.jpg" /></div>
                          <div class="message-inner bypostauthor">
                            <div class="info">
                              <h6><a href="#">Pearce Frye</a></h6>
                              <div class="meta"> <span class="date">February 22, 2010</span><span class="reply"><a href="#">Reply</a></span> </div>
                            </div>
                            <p>Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Maecenas sed diam eget risus varius blandit non.</p>
                          </div>
                        </div>
                        <ul class="children">
                          <li>
                            <div class="message">
                              <div class="user icon icon-round"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/u2.jpg" /></div>
                              <div class="message-inner">
                                <div class="info">
                                  <h6><a href="#">Nikolas Brooten</a></h6>
                                  <div class="meta"> <span class="date">April 4, 2010</span><span class="reply"><a href="#">Reply</a></span> </div>
                                </div>
                                <p>Nullam id dolor id nibh ultricies vehicula ut id. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div class="message">
                      <div class="user icon icon-round"><img alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/u4.jpg" /></div>
                      <div class="message-inner">
                        <div class="info">
                          <h6><a href="#">Lou Bloxham</a></h6>
                          <div class="meta"> <span class="date">May 03, 2010</span><span class="reply"><a href="#">Reply</a></span> </div>
                        </div>
                        <p>Sed posuere consectetur est at lobortis. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                      </div>
                    </div>
                  </li>
                </ol>
              </div>
              <!-- /#comments -->
              <div class="divider-icon"><i class="fa fa-pencil"></i></div>
              <h4>Would you like to share your thoughts?</h4>
              <p>Your email address will not be published. Required fields are marked *</p>
              <div class="space20"></div>
              <form class="comment-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email*">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Website">
                </div>
                <div class="form-group">
                  <textarea name="textarea" class="form-control" rows="5" placeholder="Enter your comment here..."></textarea>
                </div>
                <button type="submit" class="btn btn-full-rounded">Submit</button>
              </form>
              <!-- /.comment-form --> 
            </div>
            <!-- /.blog --> 
          </div>
          <!--/column -->
          <aside class="col-md-4 sidebar">
            <div class="sidebox widget">
              <h3 class="widget-title">About Us</h3>
              <figure class="mb-20"><img src="<?php echo get_stylesheet_directory_uri(); ?>/style/images/art/about.jpg" alt="" /></figure>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit.</p>
              <ul class="social social-color social-s">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->
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
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Categories</h3>
              <ul class="list-group simple">
                <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#">Lifestyle</a><span class="badge badge-pill bg-default">21</span> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#">Photography</a><span class="badge badge-pill bg-default">19</span> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#">Journal</a><span class="badge badge-pill bg-default">16</span> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#">Works</a><span class="badge badge-pill bg-default">7</span> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#">Conceptual</a><span class="badge badge-pill bg-default">12</span> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><a href="#">Videography</a><span class="badge badge-pill bg-default">14</span> </li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Tags</h3>
              <ul class="list-unstyled tag-list">
                <li><a href="#" class="btn btn-full-rounded">Still Life</a></li>
                <li><a href="#" class="btn btn-full-rounded">Urban</a></li>
                <li><a href="#" class="btn btn-full-rounded">Nature</a></li>
                <li><a href="#" class="btn btn-full-rounded">Landscape</a></li>
                <li><a href="#" class="btn btn-full-rounded">Macro</a></li>
                <li><a href="#" class="btn btn-full-rounded">Fun</a></li>
                <li><a href="#" class="btn btn-full-rounded">Workshop</a></li>
                <li><a href="#" class="btn btn-full-rounded">Photography</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Instagram</h3>
              <div class="tiles tiles-s">
                <div id="instafeed-widget" class="items row"></div>
              </div>
              <!--/.tiles --> 
            </div>
            <!-- /.widget -->
            <div class="sidebox widget">
              <h3 class="widget-title">Search</h3>
              <form class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search something">
                </div>
                <!-- /.form-group -->
              </form>
              <!-- /.search-form --> 
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



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->


<?php get_footer();