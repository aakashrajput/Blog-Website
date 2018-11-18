<?php include ("db.php"); ?>
<?php
$number_of_posts = 3;

if(isset($_GET['page'])){
$page_id = $_GET['page'];
}else {
$page_id = 1;
}

if(isset($_POST['search'])) {
  $search = $_POST['search-title'];
  $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
  $all_posts_query .= " and tags LIKE '%$search%'";
  $all_posts_run = mysqli_query($link,$all_posts_query);
  $all_posts = mysqli_num_rows($all_posts_run);
  $total_pages = ceil($all_posts / $number_of_posts);
  $posts_start_from = ($page_id - 1) * $number_of_posts;
} else {
  $all_posts_query = "SELECT * FROM posts WHERE status = 'publish'";
  if(isset($cat_name)){
    $all_posts_query .= " and categories = '$cat_name'";
    }
  $all_posts_run = mysqli_query($link,$all_posts_query);
  $all_posts = mysqli_num_rows($all_posts_run);
  $total_pages = ceil($all_posts / $number_of_posts);
  $posts_start_from = ($page_id - 1) * $number_of_posts;
}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>DevelopHowTo - News, Blog & Magazine HTML Template</title>
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/animsition.min.css" rel="stylesheet">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/themify-icons/themify-icons.css" rel="stylesheet">
        <link href="assets/css/bootsnav.css" rel="stylesheet">
        <link href="assets/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="assets/owl-carousel/owl.theme.css" rel="stylesheet">
        <link href="assets/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <link href="assets/css/fluidbox.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>
        <div class="main-content animsition">
            <div class="top-header dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <div class="header-nav">
                                <ul>
                                    <li><span class="headre-weather"><i class="fa fa-calendar-check-o"></i>&nbsp;<a id="time">Jan 21, 2018</a></span></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="about-me.html">about</a></li>
                                    <li><a href="index.html#">Buy now!</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <ul class="top-socia-share">
                                <li>
                                    <a href="index.html#"><i class="fa fa-facebook"></i></a>
                                    <a href="index.html#"><i class="fa fa-twitter"></i></a>
                                    <a href="index.html#"><i class="fa fa-instagram"></i></a>
                                    <a href="index.html#"><i class="fa fa-linkedin"></i></a>
                                    <a href="index.html#"><i class="fa fa-youtube-play"></i></a>
                                </li>
                                <li>
                                    <!--a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"-->
                                    <a href="./logins/user_reg.php">Login/Register</a></li>

                                </li>
                                <li>
                                    <!--div class="weather-top">
                                        <i class="fa fa-cloud"></i>
                                        <div class="weather-now">
                                            <span class="degrees" id="output">- 5.9</span>
                                            <span class="unit">C</span>
                                        </div>
                                        <div class="weather-city">New York</div>
                                    </div-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End of top header -->
            <nav class="navbar navbar-inverse navbar-sticky navbar-mobile bootsnav">
                <div class="container">
                    <div class="attr-nav">
                        <ul>
                            <li><a href="javascript:void(0)" data-toggle="modal" data-target="#user-modal"><i class="fa fa-user"></i></a></li>
                            <li class="side-menu"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li>
                            <li id="btn-search1"><a href="javascript:void(0)" id="btn-search2"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html"><img src="assets/img/logo-big1.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-center" data-in="navFadeInDown" data-out="navFadeOutUp">
                            <li class="dropdown active">
                                <a href="index.html" class="dropdown-toggle">Home</a>
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="index.html">News - Layout - one</a></li>
                                    <li><a href="news-layout-2.html">News - Layout - Two</a></li>
                                    <li><a href="news-layout-3.html">News - Layout - Three</a></li>
                                    <li><a href="magazine.html">Magazine - Layout</a></li>
                                    <li><a href="blog-layout-1.html">Blog - Layout - One</a></li>
                                    <li><a href="blog-layout-2.html">Blog - Layout - Two</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="index.html#" class="dropdown-toggle">Features</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about-me.html">About</a></li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle" >Category Type</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="post-classic.html">Classic</a></li>
                                            <li class="dropdown">
                                                <a href="index.html#" class="dropdown-toggle">List Layout</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="post-list+left-right.html">Post List + Left Right Sidebar</a></li>
                                                    <li><a href="post-list+left-sidebar.html">Post List + Left Sidebar</a></li>
                                                    <li><a href="post-list+right-sidebar.html">Post List + Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="index.html#" class="dropdown-toggle">Masonry Layout</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="post-masonry+left-sidebar.html">Post Masonry + Left Sidebar</a></li>
                                                    <li><a href="post-masonry+no-sidebar.html">Post Masonry + no Sidebar</a></li>
                                                    <li><a href="post-masonry+right-sidebar.html">Post Masonry + Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="index.html#" class="dropdown-toggle">Post Type</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="details-classic.html">Post - Classic</a></li>
                                            <li><a href="details-image.html">Post - Image</a></li>
                                            <li><a href="details-gallery.html">Post - Gallery</a></li>
                                            <li><a href="details-video.html">Post - Video</a></li>
                                            <li><a href="details-video-2.html">Post - Video - Two</a></li>
                                            <li><a href="details-video-scrolldown.html">Post - Youtube - Video and Scrolldown</a></li>
                                            <li><a href="details-youtube.html">Post - Video - Youtube</a></li>
                                            <li><a href="details-vimeo.html">Post - Video - Vimeo</a></li>
                                            <li><a href="details-dailymotion.html">Post - Video - Dailymotion</a></li>
                                            <li><a href="details-soundcloud.html">Post - Audio - SoundCloud</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="contact-2.html">Contact Two</a></li>
                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                    <li><a href="authors.html">Authors</a></li>
                                    <li><a href="author-post.html">Author Single Page</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw megamenu-video">
                                <a href="index.html#" class="dropdown-toggle">Video</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row m_0">
                                            <div class="col-menu-video col-md-3">
                                                <article class="post_article">
                                                    <a class="post_img" href="details-video.html">
                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-7.jpg"></figure>
                                                        <span class="post__icon post__icon--video"></span>
                                                    </a>
                                                    <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                </article>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu-video col-md-3">
                                                <article class="post_article">
                                                    <a class="post_img" href="details-video.html">
                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-8.jpg"></figure>
                                                        <span class="post__icon post__icon--video"></span>
                                                    </a>
                                                    <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                                </article>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu-video col-md-3">
                                                <article class="post_article">
                                                    <a class="post_img" href="details-video.html">
                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-9.jpg"></figure>
                                                        <span class="post__icon post__icon--video"></span>
                                                    </a>
                                                    <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                                </article>
                                            </div>
                                            <div class="col-menu-video col-md-3">
                                                <article class="post_article">
                                                    <a class="post_img" href="details-video.html">
                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-10.jpg"></figure>
                                                        <span class="post__icon post__icon--video"></span>
                                                    </a>
                                                    <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                                </article>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu-video col-md-3">
                                                <article class="post_article">
                                                    <a class="post_img" href="details-video.html">
                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-12.jpg"></figure>
                                                        <span class="post__icon post__icon--video"></span>
                                                    </a>
                                                    <h4><a href="details-video.html">Mauris eu orci rutrum, accumsan nulla ac.</a></h4>
                                                </article>
                                            </div><!-- end col-3 -->
                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <!--/.End of video menu -->
                            <li class="dropdown megamenu-fw megamenu-nav-tabs">
                                <a href="index.html#" class="dropdown-toggle">News</a>
                                <ul class="dropdown-menu megamenu-content">
                                    <li>
                                        <div class="block-mega-menu">
                                            <div class="mega-cat-menu">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs menu-tabs">
                                                    <li><a href="index.html#cat1" data-toggle="tab">Fashion</a></li>
                                                    <li><a href="index.html#cat2" data-toggle="tab">Travel</a></li>
                                                    <li class="active"><a href="index.html#cat3" data-toggle="tab">Health & Fitness</a></li>
                                                    <li><a href="index.html#cat4" data-toggle="tab">Business</a></li>
                                                    <li><a href="index.html#cat5" data-toggle="tab">Foods</a></li>
                                                </ul>
                                            </div>
                                            <div class="mega-cat-article">
                                                <!-- Tab panes -->
                                                <div class="tab-content menu-tab-content">
                                                    <div class="tab-pane" id="cat1">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="details-video.html">
                                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-1.jpg"></figure>
                                                                        <span class="post__icon post__icon--video"></span>
                                                                    </a>
                                                                    <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-2.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-3.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque .</em></a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-4.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="cat2">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-8.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-9.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="details-video.html">
                                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-10.jpg"></figure>
                                                                        <span class="post__icon post__icon--video"></span>
                                                                    </a>
                                                                    <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-11.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane active" id="cat3">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-12.jpg" alt=""> </figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="details-video.html">
                                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-13.jpg"></figure>
                                                                        <span class="post__icon post__icon--video"></span>
                                                                    </a>
                                                                    <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-14.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque.</em></a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="details-video.html">
                                                                        <figure><img class="img-responsive" alt="" src="assets/img/400x280-15.jpg"></figure>
                                                                        <span class="post__icon post__icon--video"></span>
                                                                    </a>
                                                                    <h4><a href="details-video.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="cat4">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-16.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-17.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-18.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque.</em></a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-19.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="cat5">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-20.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Ut et nunc a <em><strong>dolor sodales</strong></em> lacinia quis ac justo.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-21.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-22.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam eu nunc at nulla efficitur <em>pellentesque.</em></a></h4>
                                                                </article>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <article class="post_article">
                                                                    <a class="post_img" href="http://osruhtml.bdtask.com/osru_demo/details-post.html"><figure><img class="img-responsive" src="assets/img/400x280-23.jpg" alt=""></figure></a>
                                                                    <h4><a href="http://osruhtml.bdtask.com/osru_demo/details-post.html">Aliquam <em>gravida urna</em> ut ipsum hendrerit cursus.</a></h4>
                                                                </article>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <!-- /.End of tab category menu -->
                            <li class="dropdown megamenu-fw">
                                <a href="javascript:void(0)" class="dropdown-toggle">Megamenu</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <ul class="menu-col">
                                                    <li><a href="index.html">Newspaper One</a></li>
                                                    <li><a href="news-layout-2.html">Newspaper Two</a></li>
                                                    <li><a href="news-layout-3.html">Newspaper Three</a></li>
                                                    <li><a href="magazine.html">Magazine - Layout</a></li>
                                                    <li><a href="blog-layout-1.html">Blog Layout One</a></li>
                                                    <li><a href="blog-layout-2.html">Blog Layout Two</a></li>
                                                </ul>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <ul class="menu-col">
                                                    <li><a href="post-classic.html">Category Classic</a></li>
                                                    <li><a href="post-list+left-right.html">List + Left Right</a></li>
                                                    <li><a href="post-list+left-sidebar.html">List + Left Sidebar</a></li>
                                                    <li><a href="post-list+right-sidebar.html">List + Right Sidebar</a></li>
                                                    <li><a href="post-masonry+left-sidebar.html">Masonry + Left</a></li>
                                                    <li><a href="post-masonry+no-sidebar.html">Masonry + no Sidebar</a></li>
                                                </ul>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <ul class="menu-col">
                                                    <li><a href="post-masonry+right-sidebar.html">Masonry + Right</a></li>
                                                    <li><a href="details-classic.html">Post - Classic</a></li>
                                                    <li><a href="details-image.html">Post - Image</a></li>
                                                    <li><a href="details-gallery.html">Post - Gallery</a></li>
                                                    <li><a href="details-video.html">Post - Video</a></li>
                                                    <li><a href="details-video-2.html">Post - Video - Two</a></li>
                                                </ul>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <ul class="menu-col">
                                                    <li><a href="details-video-scrolldown.html">Post - Scrolldown</a></li>
                                                    <li><a href="details-youtube.html">Post - Youtube</a></li>
                                                    <li><a href="details-vimeo.html">Post - Vimeo</a></li>
                                                    <li><a href="details-dailymotion.html">Post - Dailymotion</a></li>
                                                    <li><a href="details-soundcloud.html">Post - SoundCloud</a></li>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                </ul>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <ul class="menu-col">
                                                    <li><a href="contact.html">Contact</a></li>
                                                    <li><a href="shortcodes.html">Shortcodes</a></li>
                                                    <li><a href="authors.html">Author</a></li>
                                                    <li><a href="404.html">404</a></li>
                                                    <li><a href="about-me.html">About</a></li>
                                                </ul>
                                            </div><!-- end col-3 -->
                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <!-- /.End of category menu -->
                            <li><a href="javascript:void(0)">Lyfestyle</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
                <div class="side" id="side">
                    <a href="index.html#" class="close-side"><i class="ti-close"></i></a>
                    <div class="widget">
                        <h3 class="widget-title">Custom Pages</h3>
                        <ul class="link">
                            <li><a href="about-me.html">About</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="shortcodes.html">Shortcodes</a></li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="latest_post_widget">
                        <h3 class="widget-title">Latest Post</h3>
                        <div class="media latest_post">
                            <a class="media-left" href="index.html">
                                <img src="assets/img/100x70-1.jpg" class="media-object" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="index.html#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.latest post -->
                        <div class="media latest_post">
                            <a class="media-left" href="index.html">
                                <img src="assets/img/100x70-2.jpg" class="media-object" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="index.html#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.latest post -->
                        <div class="media latest_post">
                            <a class="media-left" href="index.html">
                                <img src="assets/img/100x70-3.jpg" class="media-object" alt="">
                            </a>
                            <div class="media-body">
                                <h6 class="media-heading"><a href="index.html#">The <em>Best Street-Style</em> Pics Copenhagen</a></h6>
                                <div class="entry-meta">
                                    <span class="entry-date"><i class="fa fa-calendar-o" aria-hidden="true"></i><time datetime="2018-01-21T19:00">Jan 21, 2018</time></span>
                                </div>
                            </div>
                        </div>
                        <!-- /.latest post -->
                    </div>
                    <!-- /.End of latest post -->
                    <div class="social_share_btn">
                        <h3 class="widget-title">Subscribe</h3>
                        <ul>
                            <li class="li-facebook"><a href="index.html#" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li class="li-twitter"><a href="index.html#" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li class="li-google-plus"><a href="index.html#" target="_blank"><i class="fa fa-google-plus"></i> Google +</a></li>
                            <li class="li-pinterest"><a href="index.html#" target="_blank"><i class="fa fa-pinterest-p"></i> Pinterest</a></li>
                        </ul>
                    </div>
                    <!-- /.End of subscribe -->
                </div>
                <!-- /. End of side menu -->
                <div class="side-overlay"></div>
            </nav>
            <div class="clearfix"></div>
            <!-- /.End of navigation -->

            <div class="search">
                <button id="btn-search-close" class="btn btn--search-close" aria-label="Close search form"> <i class="ti-close"></i></button>
                <form class="search__form" action="index.php" method="post">
                    <input class="search__input" name="search-title" type="search" placeholder="Search and hit enter..."/>
                    <span class="search__info"><input type="submit" value="Search" name="search" hidden>Hit enter to search or ESC to close</span>
                </form>
                <div class="search__related">
                    <div class="search__suggestion">
                        <h3>May We Suggest?</h3>
                        <p>#drone #funny #catgif #broken #lost #hilarious #good #red #blue #nono #why #yes #yesyes #aliens #green</p>
                    </div>
                    <div class="search__suggestion">
                        <h3>Is It This?</h3>
                        <p>#good #red #hilarious #blue #nono #why #yes #yesyes #aliens #green #drone #funny #catgif #broken #lost</p>
                    </div>
                    <div class="search__suggestion">
                        <h3>Needle, Where Art Thou?</h3>
                        <p>#broken #lost #good #red #funny #hilarious #catgif #blue #nono #why #yes #yesyes #aliens #green #drone</p>
                    </div>
                </div>
            </div>

            <!-- /.End of search full page  -->
            <!--<div class="height_40"></div>-->
            <!-- /.End of logo section -->
