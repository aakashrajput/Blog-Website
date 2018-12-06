<?php include ("test_post_header.php"); ?>

<div class="page-content">
          <div class="container">
              <div class="row">
                  <main class="col-sm-8 col-md-9 content p_r_40">
                      <div class="details-body">
                          <div class="post_details stickydetails">
                              <header class="details-header">
                                  <div class="post-cat"><a href="details-image.html#"><?php echo ucfirst($categories); ?></a><a href="details-image.html#"><?php echo $tags; ?></a></div>
                                  <h2><?php echo ucfirst($title); ?></h2>
                                  <div class="element-block">
                                      <div class="entry-meta">
                                          <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo "$month $day, $year"; ?></time></span>
                                          <span class="comment-link"><a href="details-image.html#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                      </div>
                                      <div class="reading-time"><span class="eta"></span> (<span class="words"></span> words)</div>
                                  </div>
                              </header>
                              <figure>
                                  <img src="assets/img/details-4.jpg" alt="" class="aligncenter img-responsive">
                              </figure>
                              <?php echo $post_data1?>
                              <!--a href="assets/img/details-2.jpg" class="fluidbox_img">
                                  <img src="assets/img/details-2.jpg" alt="Image" class="alignright img-responsive">
                              </a>
                              <p><?php echo $post_data2 ?></p>
                              <p><?php echo $post_data3 ?></p-->
                          </div>
                          <!-- /.End of post details -->
                          <div class="stickyshare">
                              <aside class="share_article">
                                  <a href="details-image.html#" class="boxed_icon facebook" data-share-url="http://mightymedia.nl" data-share-network="facebook" data-share-text="Share this awesome link on Facebook" data-share-title="Facebook Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-facebook"></i><span>28</span></a>
                                  <a href="details-image.html#" class="boxed_icon twitter" data-share-url="http://mightymedia.nl" data-share-network="twitter" data-share-text="Share this awesome link on Twitter" data-share-title="Twitter Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-twitter"></i></a>
                                  <a href="details-image.html#" class="boxed_icon google-plus" data-share-url="http://mightymedia.nl" data-share-network="googleplus" data-share-text="Share this awesome link on Google+" data-share-title="Google+ Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-google-plus"></i></a>
                                  <a href="details-image.html#" class="boxed_icon pinterest" data-share-url="http://mightymedia.nl" data-share-network="pinterest" data-share-text="Share this awesome link on Pinterest" data-share-title="Pinterest Share" data-share-via="" data-share-tags="" data-share-media=""><i class="fa fa-pinterest-p"></i></a>
                                  <a href="details-image.html#" class="boxed_icon comment"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="14" height="14" viewBox="0 0 14 14" enable-background="new 0 0 14 14" xml:space="preserve"><path d="M3.6 14c0 0-0.1 0-0.1 0 -0.1-0.1-0.2-0.2-0.2-0.3v-2.7h-2.9C0.2 11 0 10.8 0 10.6V0.4C0 0.2 0.2 0 0.4 0h13.3C13.8 0 14 0.2 14 0.4v10.2c0 0.2-0.2 0.4-0.4 0.4H6.9L3.9 13.9C3.8 14 3.7 14 3.6 14zM0.7 10.2h2.9c0.2 0 0.4 0.2 0.4 0.4v2.2l2.5-2.4c0.1-0.1 0.2-0.1 0.2-0.1h6.6v-9.5H0.7V10.2z"></path></svg><span>3</span></a>
                              </aside>
                          </div>
                          <!-- /End of share icon -->
                      </div>
                      <!-- /.End of details body -->
                      <aside class="about-author">
                          <h3>About The Author</h3>
                          <div class="author-bio">
                              <div class="author-img">
                                  <a href="details-image.html#"><img alt="Johnny Doe" src="assets/img/about-avatar.jpg" class="avatar img-responsive"></a>
                              </div>
                              <!-- /. Author-img -->
                              <div class="author-info">
                                  <h4 class="author-name">Johnny Doe</h4>
                                  <p>Johnny Doe was born in Ulm, in the Kingdom of Württemberg in the German Empire on 14 March 1879. His father was Hermann Einstein, a salesman and engineer. He was a really good man for sure.</p>
                                  <p>
                                      <a class="social-link facebook" href="details-image.html#"><i class="fa fa-facebook"></i></a>
                                      <a class="social-link twitter" href="details-image.html#"><i class="fa fa-twitter"></i></a>
                                      <a class="social-link vine" href="details-image.html#"><i class="fa fa-vine"></i></a>
                                      <a class="social-link dribbble" href="details-image.html#"><i class="fa fa-dribbble"></i></a>
                                      <a class="social-link instagram" href="details-image.html#"><i class="fa fa-instagram"></i></a>
                                  </p>
                              </div>
                              <!-- /. Author-info -->
                          </div>
                          <!-- /.End of author bio -->
                      </aside>
                      <!-- /.End of about author -->
                      <?php include("related_posts.php"); ?>
                      <!-- /.End of  related post -->
                      <div class="comments">
                          <h3 class="comment_title">2 Comments</h3>
                          <div class="media">
                              <div class="media-left">
                                  <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                              </div>
                              <div class="media-body">
                                  <h4 class="media-heading">Jahangir Alom <small>Posted on February 19, 2016</small></h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                  <a href="details-image.html#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                  <div class="media">
                                      <div class="media-left">
                                          <img src="assets/img/img_avatar2.png" alt="Demo Avatar Jane Doe" class="media-object">
                                      </div>
                                      <div class="media-body">
                                          <h4 class="media-heading">Jane Doe <small>Posted on February 20, 2016</small></h4>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                          <a href="details-image.html#" class="btn link-btn btn-rounded">Reply ⇾</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="media">
                              <div class="media-left">
                                  <img src="assets/img/img_avatar1.png" alt="" class="media-object">
                              </div>
                              <div class="media-body">
                                  <h4 class="media-heading">John Doe <small><i>Posted on February 19, 2016</i></small></h4>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                  <a href="details-image.html#" class="btn link-btn btn-rounded">Reply ⇾</a>
                              </div>
                          </div>
                      </div>
                      <!-- /.End of comment -->
                      <?php include("comment_form.php"); ?>
                      <!-- /.End of comment content -->
                  </main>
                  <aside class="col-sm-4 col-md-3 rightSidebar">
                      <?php
                      include("about_author.php");
                       ?>
                      <!-- /.End of about -->
                      <?php
                      include("subscribe.php");
                      ?>
                      <!-- /.End of subscribe -->
                      <?php
                      include("donation.php");
                      ?>
                      <!-- /.End of donation widget -->
                      <?php include("latest_post.php"); ?>
                      <!-- /.End of latest post -->
                      <?php
                      include("category.php");
                      ?>
                      <!-- /.End of category widget -->
                      <div class="fb_like">
                          <div class="title-holder">
                              <h3 class="title">Facebook</h3>
                              <span class="title-shape title-shape-dark"></span>
                          </div>
                          <!--  /.End of title -->
                          <div class="fb-page" data-href="https://www.facebook.com/teamspartanshub/" data-tabs="timeline" data-width="268" data-height="214" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                              <blockquote cite="https://www.facebook.com/teamspartanshub/" class="fb-xfbml-parse-ignore">
                                  <a href="https://www.facebook.com/teamspartanshub/">Spartans Hub</a>
                              </blockquote>
                          </div>
                      </div>
                      <!-- /.End of facebook like box -->
                      <div class="banner-content">
                          <img src="assets/img/ad-300x250-1.png" class="img-responsive center-block" alt="">
                      </div>
                      <!-- /.End of banner content -->
                      <?php
                      include("tags.php");
                      ?>
