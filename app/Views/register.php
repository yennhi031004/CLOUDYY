<?php  require_once "header.php" ?>





  <section class="login-section">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="sign-in bg-gray">
              <h2 class="title">Dăng nhập</h2>
              <form class="sign-in-form" id="sign-in-form" action="#" method="post">
                <p class="form-input">
                  <input type="text" name="log" id="user_login" class="input" value="" placeholder="Username / Email" required/>
                </p>
                <p class="form-input">
                  <input type="password" name="pwd" id="user_pass" class="input" value="" placeholder="Password" required/>
                </p>
                <p class="form-input">
                  <input type="submit" name="wp-submit" id="wp-submit" class="btn" value="Sign In" />
                </p>
                <p class="checkbox pull-left">
                  <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                  Remember Me
                  <a href="#" class="pull-right" title="Recover Your Lost Password">Forgot password?</a>
                </p>
              </form>

              <div class="login-social">
                <button class="btn facebook">Đăng nhập bằng Facebook</button>
                <button class="btn twitter">Đăng nhập bằng Twitter</button> 
              </div><!-- /.login-social -->
            </div><!-- /.sign-in -->
          </div>

          <div class="col-md-7">
            <div class="sign-up">
              <h2 class="title">Đăng ký <span></span></h2><!-- /.title -->

              <form class="signup-form" action="index.php?pg=dangky" method="post">
                <p class="form-input">
                  <input type="text" class="form-control" placeholder="First Name" required name="firstname" value="">
                </p>
                <p class="form-input">
                  <input type="text" class="form-control" placeholder="Last Name"name="username" value="">  
                </p>
                <p class="form-input">                                  
                  <input type="email" class="form-control" placeholder="Email" required name="email" value="">
                </p>
                <p class="form-input">
                  <input type="text" class="form-control" placeholder="Phone" requiredname="dienthoai" value="">
                </p>
                <p class="form-input">
                  <input type="password" class="form-control" placeholder="Password" requiredname="password" value="">
                </p>
                <p class="form-input">
                  <input type="password" class="form-control" placeholder="Confirm Password" required name="password_fir" value="">
                </p>
                <p class="checkbox pull-left">
                  <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                  I agree the 
                  <a href="#"> terms and conditions</a>
                </p>
                <p class="submit-input pull-right">
                  <input type="submit" class="btn" name="signup-form-submit" value="Sign up">
                </p>
              </form>
              <div class="login-social">
                <button class="btn facebook">Đăng ký bằng Facebook</button>
                <button class="btn twitter">Đăng ký bằng Twitter</button> 
              </div><!-- /.login-social -->
            </div><!-- /.sign-up -->

          </div>
        </div><!-- /.row -->
      </div><!--/.container-->
    </div><!-- /.section-padding -->
  </section><!--/.login-section-->




  <section class="subscribe-03 background-bg" data-image-src="images/home07/subscribe.jpg">
    <div class="container">
      <div class="subscribe-details">
        <div class="row">
          <div class="col-sm-5">
            <div class="section-top">
              <h3 class="section-title">Stay up to date <span></span></h3><!-- /.section-title -->
            </div>
          </div>
          <div class="col-sm-7">
            <form class="subscribe-form" action="#">
              <input class="form-control" type="email" placeholder="myemail@email.com">
              <input class="btn btn-subscribe" type="submit" value="Subscribe">
            </form>
          </div>
        </div><!-- /.row -->
      </div><!-- /.subscribe-details -->
    </div><!-- /.section-padding -->
  </section>


  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>    
  </div>



  <script src="public/layout/assets/js/plugins.js"></script>
  <script src="public/layout/assets/js/main.js"></script>


<?php  require_once "footer.php" ?>