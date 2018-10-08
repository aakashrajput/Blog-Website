<?php include('user_server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="https://demos.creative-tim.com/paper-kit-2-pro/assets/img//favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DevelopHowTO Login
  </title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.min.css%3Fv=2.2.1.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="register-page full-screen sidebar-collapse">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white fixed-top nav-down navbar-transparent" color-on-scroll="500">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="../" rel="tooltip" title="DevelopHowTo" data-placement="bottom" target="_blank">
          DevelopHowTo
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-nav-image="assets/img/blurred-image-1.jpg" data-color="orange">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <!--a href="register-page.html#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
              Components </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger">
              <a href="index.html" class="dropdown-item">
                All Components
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="register-page.html#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown">
              Sections
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" data-scroll="true" data-id="#headers" href="sections.html#headers">
                <i class="nc-icon nc-tile-56"></i> Headers
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#features" href="sections.html#features">
                <i class="nc-icon nc-settings"></i> Features
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#blogs" href="sections.html#blogs">
                <i class="nc-icon nc-bullet-list-67"></i> Blogs
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#teams" href="sections.html#teams">
                <i class="nc-icon nc-single-02"></i> Teams
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#projects" href="sections.html#projects">
                <i class="nc-icon nc-calendar-60"></i> Projects
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#pricing" href="sections.html#pricing">
                <i class="nc-icon nc-money-coins"></i> Pricing
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#testimonials" href="sections.html#testimonials">
                <i class="nc-icon nc-badge"></i> Testimonials
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#contact-us" href="sections.html#contactus">
                <i class="nc-icon nc-mobile"></i> Contact Us
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="register-page.html#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              Examples
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="about-us.html">
                <i class="nc-icon nc-bank"></i> About-us
              </a>
              <a class="dropdown-item" href="add-product.html">
                <i class="nc-icon nc-basket"></i> Add Product
              </a>
              <a class="dropdown-item" href="blog-post.html">
                <i class="nc-icon nc-badge"></i> Blog Post
              </a>
              <a class="dropdown-item" href="blog-posts.html">
                <i class="nc-icon nc-bullet-list-67"></i> Blog Posts
              </a>
              <a class="dropdown-item" href="contact-us.html">
                <i class="nc-icon nc-mobile"></i> Contact Us
              </a>
              <a class="dropdown-item" href="discover.html">
                <i class="nc-icon nc-world-2"></i> Discover
              </a>
              <a class="dropdown-item" href="ecommerce.html">
                <i class="nc-icon nc-send"></i> Ecommerce
              </a>
              <a class="dropdown-item" href="landing-page.html">
                <i class="nc-icon nc-spaceship"></i> Landing Page
              </a>
              <a class="dropdown-item" href="login-page.html">
                <i class="nc-icon nc-lock-circle-open"></i> Login Page
              </a>
              <a class="dropdown-item" href="product-page.html">
                <i class="nc-icon nc-album-2"></i> Product Page
              </a>
              <a class="dropdown-item" href="profile-page.html">
                <i class="nc-icon nc-single-02"></i> Profile Page
              </a>
              <a class="dropdown-item" href="register-page.html">
                <i class="nc-icon nc-bookmark-2"></i> Register Page
              </a>
              <a class="dropdown-item" href="search-with-sidebar.html">
                <i class="nc-icon nc-zoom-split"></i> Search Page
              </a>
              <a class="dropdown-item" href="settings.html">
                <i class="nc-icon nc-settings-gear-65"></i> Settings Page
              </a>
              <a class="dropdown-item" href="twitter-redesign.html">
                <i class="nc-icon nc-tie-bow"></i> Twitter
              </a>
            </div>
          </li-->
          <li class="nav-item">
            <a class="btn btn-round btn-danger" href="../" target="_blank">
              <i class="nc-icon nc-back"></i> Go Back
            </a>
          </li>
          <!-- <li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
						<i class="fab fa-twitter"></i>
						<p class="hidden-lg-up">Twitter</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
						<i class="fab fa-facebook-square"></i>
						<p class="hidden-lg-up">Facebook</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
						<i class="fab fa-instagram"></i>
						<p class="hidden-lg-up">Instagram</p>
					</a>
				</li> -->
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header" style="background-image: url('assets/img/sections/soroush-karimi.jpg');">
      <div class="filter"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-7 col-12 ml-auto">
            <div class="info info-horizontal">
              <div class="icon">
                <i class="fa fa-umbrella"></i>
              </div>
              <div class="description">
                <h3> We've got you covered </h3>
                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. Everything you need in a single case.</p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon">
                <i class="fa fa-map-signs"></i>
              </div>
              <div class="description">
                <h3> Clear Directions </h3>
                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
              </div>
            </div>
            <div class="info info-horizontal">
              <div class="icon">
                <i class="fa fa-user-secret"></i>
              </div>
              <div class="description">
                <h3> We value your privacy </h3>
                <p>Completely synergize resource taxing relationships via premier niche markets.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-5 col-12 mr-auto">
            <div class="card card-register">
              <h3 class="card-title text-center">Register</h3>
              <div class="social">
                <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                <button href="#paper-kit" class="btn btn-just-icon btn-google"><i class="fa fa-google"></i></button>
                <button href="#paper-kit" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></button>
              </div>
              <div class="division">
                <div class="line l"></div>
                <span>or</span>
                <div class="line r"></div>
              </div>
              <form class="register-form" method="post" action="user_reg.php">
                <?php include('errors.php'); ?>
                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" placeholder="username" required="">
                <input type="text" class="form-control" name="name"  placeholder="Your Name" value="<?php echo $name; ?>" type="text" required="">
                <input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="email" required="">
                <input type="password" class="form-control" name="password_1"  placeholder="Enter Your Password" type="password" required="">
                <input type="password" class="form-control" name="password_2"  placeholder="Retype Your Password" type="password" required="">
                <button class="btn btn-block btn-round" name="reg_user">Register</button>
              </form>
              <div class="login">
                <p>Already have an account?
                  <a href="register-page.html#0">Log in</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="demo-footer text-center">
        <h6>&copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
  <!--	Plugin for Datetimepicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Vertical nav - dots -->
  <!--  Photoswipe files -->
  <script src="assets/js/plugins/photo_swipe/photoswipe.min.js"></script>
  <script src="assets/js/plugins/photo_swipe/photoswipe-ui-default.min.js"></script>
  <script src="assets/js/plugins/photo_swipe/init-gallery.js"></script>
  <!--  for Jasny fileupload -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-kit.min.js%3Fv=2.2.1" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!--  Plugin for presentation page - isometric cards  -->
  <script src="assets/js/plugins/presentation-page/main.js"></script>
  <!-- Sharrre libray -->
  <script src="assets/demo/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function() {


      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46172202-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
  </noscript>
  <script>
    $(document).ready(function() {

      $sidebar = $('.sidebar');
      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');
      sidebar_mini_active = true;

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
      //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
      //         $('.fixed-plugin .dropdown').addClass('show');
      //     }
      //
      // }

      $('.fixed-plugin a').click(function(event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-active-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('data-active-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-active-color', new_color);
        }
      });

      $('.fixed-plugin .background-color span').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });

      $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }

          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }

          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }

          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }

          background_image = false;
        }
      });


      $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
        $body = $('body');

        $input = $(this);

        if (paperDashboard.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          paperDashboard.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            paperDashboard.misc.sidebar_mini_active = true;
          }, 300);
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);

      });

    });
  </script>
</body>

</html>
