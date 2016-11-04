<?php
  session_start();
  if(isset($_SESSION["acc_user"])){
    echo "User is on profile:";
  }else{
    header("Location: signin.html");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <header>
      <div class="top-social">
        <div class="row">
          <div class="col-md-6 col-lg-6 visible-md visible-lg"></div>
          <div class="col-md-6 col-lg-6">
            <div class="col-md-7 col-lg-7 col-xs-7 text-right">
              <span class="num">Call: +254 700 000 000</span>
            </div>
            <div class="col-md-5 col-lg-5 col-xs-5 text-center">
              <ul class="umati-social-icons flash animated">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
  							<li><a href="#"><i class="icon-facebook"></i></a></li>
  							<li><a href="#"><i class="icon-github"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div id="nav-login-affix" data-spy="affix" data-offset-top="50" data-offset-bottom="100">
        <nav class="navbar navbar-default navbar-static-top fadeInDown animated" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#umatibit-nav">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <!-- <div class="col-md-5 col-xs-6">
                <a href="#" class="">UmatiBit</a>
              </div> -->
              <div class="col-md-12 col-xs-12">
                <a href="../../index.html"><img src="../images/umatibit-banner.png" alt="umatibit" class="img-responsive"/></a>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="umatibit-nav">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Downloads</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact Us</a></li>
              <!-- <li><a href="#"><span class="btn btn-sm"><i class="icon-user"></i>Login</span></a></li> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <section>
      Hey user : Welcome to your profile page.
    </section>
  </body>
</html>
