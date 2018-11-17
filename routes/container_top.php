<!--  /. End of newstricker -->
<div class="news-masonry">
    <div class="container">
        <div class="row mas-m">
          <?php
              $container_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT 1";
              $container_run = mysqli_query($link, $container_query);
              $check = 0;
                while($container_row = mysqli_fetch_array($container_run)) {
                  $container_id = $container_row['id'];
                  $container_categories = $container_row['categories'];
                  $container_image = $container_row['image'];
                  $container_title = $container_row['title'];
                  $container_data = $container_row['post_data'];
                  $check = $check + 1;
                  if($check==1){
                    echo "<div class='carousel-item active'>";
                  }
                  else {
                    echo "<div class='carousel-item'>";
                  }
            ?>
            <div class="col-sm-6 mas-p">
                <div class="mas-item mas-big">
                    <a href="index.html#"><figure><img src="assets/img/masonry/568x450-01.jpg" class="img-responsive" alt=""></figure></a>
                    <div class="mas-text">
                        <div class="post-cat"><a href="index.html#"><?php echo $container_categories ?></a></div>
                        <h2 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader will be distracted by the readable content</a></h2>
                        <div class="mas-details">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                        </div>
                    </div>
                </div>
                <!-- /.End of masonry item -->
            </div>
          <?php } ?>
            <div class="col-sm-6 mas-p">
                <div class="row mas-m">
                    <div class="col-xs-6 col-sm-6 mas-p">
                        <div class="masonry-slide1 owl-carousel owl-theme">
                            <div class="item mas-m-b">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-01.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                            <div class="item mas-m-b">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-02.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 mas-p">
                        <div class="masonry-slide2 owl-carousel owl-theme">
                            <div class="item">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-03.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                            <div class="item">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-04.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden-xs row mas-m">
                    <div class="col-sm-6 mas-p">
                        <div class="masonry-slide3 owl-carousel owl-theme">
                            <div class="item">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-05.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                            <div class="item">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-06.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mas-p">
                        <div class="masonry-slide4 owl-carousel owl-theme">
                            <div class="item">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-07.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                            <div class="item">
                                <div class="mas-item masonry-sm">
                                    <a href="index.html#"><figure><img src="assets/img/masonry/282x223-08.jpg" class="img-responsive" alt=""></figure></a>
                                    <div class="mas-text">
                                        <div class="post-cat"><a href="index.html#">Fashion</a></div>
                                        <h4 class="mas-title"><a href="index.html#">It is a long <em>established</em> fact that a reader</a></h4>
                                        <div class="mas-details">
                                            <p>There are many variations of passages of Lorem Ipsum available</p>
                                            <a href="index.html#" class="read-more">Read More &#8702;</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.End of masonry item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
