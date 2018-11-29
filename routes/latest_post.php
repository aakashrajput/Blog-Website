<div class="latest_post_widget">
    <div class="title-holder">
        <h3 class="title">Latest Post</h3>
        <span class="title-shape title-shape-dark"></span>
    </div>
    <?php
        $post_query = "SELECT * FROM posts WHERE status = 'publish' ORDER BY id DESC LIMIT 3";
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
                    $post_data = $row['post_data1'];
                    $views = $row['views'];
                    $status = $row['status'];
                    $image = $row['image'];
               ?>
    <!--  /.End of title -->
    <div class="media latest_post">
        <a class="media-left" href="posts.php">
            <img src="assets/img/100x70-1.jpg" class="media-object" alt="">
        </a>
        <div class="media-body">
            <h6 class="media-heading"><a href="posts.php"><?php echo $title; ?></a></h6>
            <div class="entry-meta">
                <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00"><?php echo "$month $day, $year"; ?></time></span>
            </div>
        </div>
    </div>
  <?php } ?>
    <!-- /.latest post -->
</div>
