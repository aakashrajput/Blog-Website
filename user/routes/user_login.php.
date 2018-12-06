<?php include('user_server.php') ?>
<div class="modal fade user-modal" id="user-modal">
<div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="index.html#login" data-toggle="tab">Log in</a></li>
                <li><a href="index.html#register" data-toggle="tab">Register</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="login">
                    <div class="form-content text-center">
                      <form method="post" action="./index.php">
                        <h2>Sign In</h2>
                        <p>Chose One of the Following Methods.</p>
                        <div class="social-btn">
                            <a href="index.html#" class="btn btn-fb"><i class="fa fa-facebook"></i>With Facebook</a>
                            <a href="index.html#" class="btn btn-plush"><i class="fa fa-google-plus"></i>With Google +</a>
                        </div>
                        <div class="ui horizontal divider">Or </div>
                        <p>Sign in Using Your Email Address</p>
                        <div class="form-group">
                            <input class="form-control" name="username" id="username" placeholder="Username or email" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                        </div>
                        <div class="block-content">

                            <div class="checkbox checkbox-danger">
                                <input id="checkbox8" type="checkbox">
                                <label for="checkbox8">
                                    Remember me
                                </label>
                            </div>
                            <a href="index.html#" class="forgot">Forgot Password?</a>
                        </div>
                        <button class="btn link-btn btn-block btn-rounded" name="login_user">Login &#8702;</button>
                        <div class="">Don't have an account? <a href="index.php#register">Sign up Now</a></div>
                      </form>
                    </div>
                    <!-- /.End of Login -->
                </div>
                <div class="tab-pane fade" id="register">
                    <div class="form-content">
                      <form method="post" action="./index.php">
                      <?php include('errors.php'); ?>
                        <h2 class="text-center">Sign Up For Free</h2>
                        <div class="form-group">
                            <input class="form-control" type="text" name="username" id="username" value="<?php echo $username; ?>" placeholder="username" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" placeholder="Your Name" value="<?php echo $name; ?>" type="text" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="email" value="<?php echo $email; ?>" placeholder="email" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password_1" id="password_1" placeholder="Enter Your Password" type="password" required="">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="password_2" id="password_2" placeholder="Retype Your Password" type="password" required="">
                        </div>
                        <div class="block-content">
                            <div><i class="fa fa-shield"></i><span>Your Password at DevelopHowTo are encrypted and Secured</span></div>
                        </div>
                        <button class="btn link-btn btn-block btn-rounded" name="reg_user">Sign Up &#8702;</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
