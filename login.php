<?php if(!isset($_SESSION)){session_start();} ?>

<!DOCTYPE html>
<html lang="en" style="height: 100%">
  <?php include("include/head.php"); ?>
  <body style="background-image: url(build/images/backgrounds/14.jpg)" class="body-bg-full v2">
    <div class="container page-container">
      <div class="page-content">
        <div class="v2">
          <div class="logo"><img src="build/images/logo/logo-sm-dark.png" alt="" width="80"></div>
          <form method="POST" action="log" class="form-horizontal">
            <div class="form-group">
              <div class="col-xs-12">
                <input type="text" placeholder="Username" name="uname" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <input type="password" placeholder="Password" name="password" class="form-control">
              </div>
            </div>
             <?php  
            if(isset($_SESSION['error'])) {
                        echo ' <div class="alert alert-danger alert-dismissible fade in">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong></strong> invalid Email id and password.
            </div>';
                       unset($_SESSION['error']);
            } ?>
             <?php  
              if(isset($_SESSION['err'])) {
                          echo ' <div class="alert alert-danger alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong></strong> Please Fill Email Id and Password.
              </div>';
                         unset($_SESSION['err']);
                        } ?>
            
            <div class="form-group">
              <div class="col-xs-12">
                <div class="checkbox-inline checkbox-custom pull-left">
                  <input id="exampleCheckboxRemember" type="checkbox" value="remember">
                  <label for="exampleCheckboxRemember" class="checkbox-muted text-muted">Remember me</label>
                </div>
                <div class="pull-right"><a href="forgot-password-v2.html" class="inline-block form-control-static">Forgot a Passowrd?</a></div>
              </div>
            </div>
            <button type="submit" name="sublog" class="btn-lg btn btn-primary btn-rounded btn-block">Sign in</button>
          </form>
          <hr>
          <p class="text-muted">Sign in with your Facebook or Twitter accounts</p>
          <div class="clearfix">
            <div class="pull-left">
              <button type="button" style="width: 130px" class="btn btn-outline btn-rounded btn-primary"><i class="ti-facebook mr-5"></i> Facebook</button>
            </div>
            <div class="pull-right">
              <button type="button" style="width: 130px" class="btn btn-outline btn-rounded btn-info"><i class="ti-twitter-alt mr-5"></i> Twitter</button>
            </div>
          </div>
          <hr>
          <div class="clearfix">
            <p class="text-muted mb-0 pull-left">Want new account?</p><a href="register-v2.html" class="inline-block pull-right">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Demo Settings start-->
    <div class="setting closed"><a href="javascript:;" class="setting-toggle fs-16"><i class="ti-palette text-base"></i></a>
      <h5 class="fs-16 mt-0 mb-20">Background Images</h5>
      <ul class="list-inline">
        <li><a href="javascript:;" data-bg="14.jpg" class="inline-block body-bg"><img src="build/images/thumbnails/14.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="15.jpg" class="inline-block body-bg"><img src="build/images/thumbnails/15.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="16.jpg" class="inline-block body-bg"><img src="build/images/thumbnails/16.jpg" width="60" alt="" class="img-rounded"></a></li>
      </ul>
      <ul class="list-inline mb-0">
        <li><a href="javascript:;" data-bg="17.jpg" class="inline-block body-bg"><img src="build/images/thumbnails/17.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="18.jpg" class="inline-block body-bg"><img src="build/images/thumbnails/18.jpg" width="60" alt="" class="img-rounded"></a></li>
        <li><a href="javascript:;" data-bg="19.jpg" class="inline-block body-bg"><img src="build/images/thumbnails/19.jpg" width="60" alt="" class="img-rounded"></a></li>
      </ul>
    </div>
    <!-- Demo Settings end-->
    <!-- jQuery-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="build/js/first-layout/extra-demo.js"></script>
  </body>
</html>