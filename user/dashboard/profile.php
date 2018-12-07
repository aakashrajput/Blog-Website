<?php
include("header.php");
?>

    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../.././assets/img/profile_img1.jpeg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php  if (isset($_SESSION['username'])) : echo $_SESSION['username']; endif ?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
          <input class="btn btn-primary" value="Edit Profile">
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="profile.html#">
                    <img src="../.././assets/img/profile_img1.jpeg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <!--div class="d-flex justify-content-between">
                <a href="profile.html#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="profile.html#" class="btn btn-sm btn-default float-right">Message</a>
              </div-->
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading"></span>
                      <span class="description"></span>
                    </div>
                    <div>
                      <span class="heading"></span>
                      <span class="description"></span>
                    </div>
                    <div>
                      <span class="heading"></span>
                      <span class="description"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <?php
                  $query = "SELECT * FROM users";
                  $run = mysqli_query($link,$query);

                  if(mysqli_num_rows($run) > 0) {
                    $row = mysqli_fetch_array($run);
                    $username = $_SESSION['username'];
                    $email = $row['email'];
                    $fname = $row['first_name'];
                    $lname = $row['last_name'];
                    $school = $row['school'];
                    $city = $row['city'];
                    $country = $row['country'];
                    $about = $row['details'];
                    $place = "$city, $country";
                    $age = $row['age'];


                ?>
                <h3>
                  <?php  if (isset($_SESSION['username'])) : echo $_SESSION['username']; endif ?><span class="font-weight-light">, <?php echo $age; ?></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $place; ?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Author - DevelopHowTo
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?php echo $school; ?>
                </div>
                <hr class="my-4" />
                <p><?php echo $about; }?></p>
                <a href="profile.php#">Show more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="profile.html#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="" method="POST" name="form1" enctype="multipart/form-data">
                <?php
                if(isset($_POST['submit'])){
                  $username = $_SESSION['username'];
                  $email = $_POST['email'];
                  $fname = $_POST['fname'];
                  $lname = $_POST['lname'];
                  $school = $_POST['school'];
                  $city = $_POST['city'];
                  $country = $_POST['country'];
                  $about = $_POST['about'];
                          if(empty($email)){
                            $error_msg = "Email Field is blank";
                          } else {
                            $query = "UPDATE `users` SET first_name = '$fname', last_name = '$lname', email = '$email', city = '$city', country = '$country', school = '$school', image = 'lol.png', details = '$about' WHERE `users`.`username` = '$username'";
                            if(mysqli_query($link,$query)){
                              $msg = "Updated!";
                              //$category = "";
                            } else {
                              $error_msg = "Not Updated!";
                              //print_r($errors);
                            }
                          }
                          }
                    ?>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php  echo $_SESSION['username']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="charizard@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" name="fname" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" name="lname" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">School/Work</label>
                        <input id="input-address" name="school" class="form-control form-control-alternative" placeholder="school" value="University of Computer Science" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" name="city" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" name="country" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea rows="4"  class="form-control form-control-alternative" name="about" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                  </div>
                </div>
                <div class="col-xs-8">
                  <input type="submit" name="submit" class="btn btn-primary" value="submit">
                  <?php if(isset($error_msg)){
                               echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                             }else if(isset($msg)) {
                                echo "<span style='color:green;' class='pull-right'>$msg</span>";
                             }
                  ?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<?php
include("footer.php");
?>
