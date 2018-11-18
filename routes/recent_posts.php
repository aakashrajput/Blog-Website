<main class="col-xs-12 col-sm-8 col-md-7 content p_r_40">
  <?php
      $post_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY title DESC LIMIT 1";
      $post_run = mysqli_query($link, $post_query);
      $check = 0;
        while($row = mysqli_fetch_array($post_run)) {
                  $id = $row['id'];
                  $date = getdate ($row['date']);
                  $day = $date['mday'];
                  $month = $date['month'];
                  $year = $date['year'];
                  $title = $row['title'];
                  $author = $row['author'];
                  $author_image = $row['author_image'];
                  $categories = $row['categories'];
                  $tags = $row['tags'];
                  $post_data = $row['post_data'];
                  $views = $row['views'];
                  $status = $row['status'];
                  $image = $row['image'];
             ?>
    <article class="grid_post grid_post_lg text-center">
        <figure>
            <a href="index.html#" class="grid_image"><img src="assets/img/825x630-2.jpg" class="img-responsive" alt=""></a>
            <figcaption>
                <div class="post-cat"><span>In</span> <a href="index.html#"><?php echo $categories; ?></a></div>
                <div class="entry-meta">
                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo "$month $day, $year " ?></time></span>
                    <span class="comment-link"><a href="index.html#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                </div>
                <h3 class="grid_post_title"><a href="index.html#"><?php echo $title; ?></a></h3>
                <p><?php echo substr($post_data,0,200); ?></p>
                <a href="index.html#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                <!-- /.Post button -->
            </figcaption>
        </figure>
    </article>
    <?php
                 }
            ?>
            <?php
                $post_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY title DESC LIMIT 5";
                $post_run = mysqli_query($link, $post_query);
                $check = 0;
                  while($row = mysqli_fetch_array($post_run)) {
                            $id = $row['id'];
                            $date = getdate ($row['date']);
                            $day = $date['mday'];
                            $month = $date['month'];
                            $year = $date['year'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $author_image = $row['author_image'];
                            $categories = $row['categories'];
                            $tags = $row['tags'];
                            $post_data = $row['post_data'];
                            $views = $row['views'];
                            $status = $row['status'];
                            $image = $row['image'];
                       ?>
                        <!-- /.End of grid post -->
                        <div class="media meida-md">
                            <div class="media-left">
                                <a href="index.html#"><img src="assets/img/370x300-1.jpg" class="media-object" alt=""></a>
                            </div>
                            <!-- /.Post image -->
                            <div class="media-body">
                                <div class="post-header">
                                    <div class="post-cat"><span>In</span> <a href="index.html#"><?php echo $categories; ?></a></div>
                                    <h3 class="media-heading"><a href="index.html#"><?php echo $title; ?></a></h3>
                                    <div class="entry-meta">
                                        <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo "$month $day, $year"; ?></time></span>
                                        <span class="comment-link"><a href="index.html#"><i class="fa fa-comment-o" aria-hidden="true"></i>9 Comments</a></span>
                                    </div>
                                    <!-- /.Post meta -->
                                </div>
                                <p><?php echo substr($post_data,0,50); ?></p>
                                <div class="element-block">
                                    <a href="index.html#" class="btn link-btn btn-outline btn-rounded">Reading &#8702;</a>
                                    <!-- /.Post button -->
                                    <div class="post_share">
                                        <a class="smedia facebook fa fa-facebook" href="index.html#"></a>
                                        <a class="smedia twitter fa fa-twitter" href="index.html#"></a>
                                        <a class="smedia googleplus fa fa-google-plus" href="index.html#"></a>
                                    </div>
                                    <!-- /.Post social share -->
                                </div>
                            </div>
                        </div>
                        <?php
                           }
                        ?>

    <!-- /.End of media post -->
    <!--                            <div class="loadmore_block">
                                    <a href="#" class=""> Load More</a>
                                </div>-->
    <!-- /.End of Load more -->
    <ul class="pagination">
        <li class="disabled"><a href="index.html#">&#8701;</a></li>
        <li class="active"><a href="index.html#">1 <span class="sr-only">(current)</span></a></li>
        <li><a href="index.html#">2</a></li>
        <li><a href="index.html#">3</a></li>
        <li class="page-numbers"><span>...</span></li>
        <li><a href="index.html#">5</a></li>
        <li><a href="index.html#">&#8702;</a></li>
    </ul>
    <!-- /.End of pagination -->
</main>
