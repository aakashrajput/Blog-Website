<?php
include ("./routes/header.php");
include ("./routes/trending.php");
include ("./routes/container_top.php");
?>


            <!-- /.End of news masonry -->
            <?php
            include ("./routes/home_comments.php");
            ?>

                            <!-- /.End of trending post -->
                            <div class="banner-content">
                                <img src="assets/img/ad-180x480-1.png" class="img-responsive" alt="">
                            </div>
                            <!-- /.End of banner content -->
                        </div>
                        <?php
                        include("./routes/recent_posts.php");
                        include("./routes/most_popular.php");
                        include("./routes/subscribe.php");
                        ?>


                            <!-- /.End of subscribe -->
                            <div class="banner-content">
                                <img src="assets/img/ad-300x250-1.png" class="img-responsive center-block" alt="">
                            </div>
                            <!-- /.End of banner content -->
                            <?php
                            include("./routes/category.php");
                            ?>
                <div class=" container">
                    <div class="height_15"></div>
                    <div class="banner-content">
                        <img src="assets/img/ad-728x90-1.png" class="img-responsive center-block" alt="">
                    </div>
                    <!-- /.End of banner content -->
                </div>
                <?php
                include("./routes/featured_video.php");
                ?>
                <!--  /.End of youtube video -->
                <div class="container">
                    <div class="row">
                        <div class="hidden-xs hidden-sm col-md-2 leftSidebar">
                            <div class="banner-content">
                                <img src="assets/img/ad-180x480-1.png" class="img-responsive" alt="">
                            </div>
                            <!--/.End of banner content-->
                        </div>
                        <?php
                        include("./routes/latest_article.php");
                        ?>
                            <!-- /.End of pagination -->
                            <div class="banner-content">
                                <img src="assets/img/ad-728x90-1.png" class="img-responsive center-block" alt="">
                            </div>
                            <!-- /.End of banner content -->
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 rightSidebar">
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
                            include("./routes/donation.php");
                            include("./routes/tags.php");
                            ?>
                                <!-- /.End of card info -->
                            <!-- /.End of donation widget -->

<?php
include ("./routes/footer.php");
?>
