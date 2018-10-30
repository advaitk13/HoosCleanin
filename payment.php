<?php
      $json_url = "https://blockchain.info/tobtc?currency=USD&value=2.99";
      $json_urlg = "https://blockchain.info/tobtc?currency=USD&value=4.99";
                
      $json_data = file_get_contents($json_url);
      $json_datag = file_get_contents($json_urlg);
                
      $json_feed = json_decode($json_data);
      $json_feedg = json_decode($json_datag);
?>
<html class="gr__hooscleanin-advait-13_c9users_io"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HoosCleanin - Student Cleaning Service</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"><link id="new-stylesheet" rel="stylesheet"><link id="new-stylesheet" rel="stylesheet"><link id="new-stylesheet" rel="stylesheet"><link id="new-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/15/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/15/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/15/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/15/util.js"></script></head>
  <body data-gr-c-s-loaded="true">
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="toptab">
              <div class="col-lg-6 text-center text-lg-left">HoosCleanin</div>
            </div>
            <div class="col-lg-6 text-center text-lg-right" style="position:absolute; left:525px;">
                  <ul class="menu list-inline mb-0">
                    <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                    <li class="list-inline-item"><a href="register.php">Sign Up</a></li>
                    <li class="list-inline-item"><a href="contact.php">Contact</a></li>
                  </ul>
            </div>
            
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="index.php" class="nav-link active">Home</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link active">About US</a>
                
              </li>
              <li class="nav-item dropdown menu-large show"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link" aria-expanded="true">Find a Cleaner<b class="caret"></b></a>
                
              </li>
              <li class="nav-item dropdown menu-large show"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link" aria-expanded="true">Apply to be a Cleaner<b class="caret"></b></a>
                
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>0 items in cart</span></a></div>
            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">New account / Register / Payment</li>
                </ol>
              </nav>
            </div>
            


        </div>
        
        
                <div class="container">
              <div class="box">
                <h1>Select Membership</h1>
            </div>
        
        
        
        
        <div class="container">
              <div class="col-md-12">
                <div id="blog-homepage" class="row">
                  <div class="col-sm-6">
                    <div class="post">
                      <h3 class="text">Pick an option and pay with BitPay!</h3>
                      <button onclick="updateBasic();" type="button" class="btn btn-default">Basic Membership</button>
                <button onclick="updateGold();" type="button" class="btn btn-primary">Gold Membership</button>
                
                <p></p>


                <form action="https://test.bitpay.com/checkout" method="post">
                  <input type="hidden" name="action" value="checkout">
                  <input type="hidden" name="posData" value="">
                  <input type="hidden" id="data" name="data" value="v0BGPkhuQEjZIdeSYOJXP6EqInRsAHkhnEXbpvCTnmb2XPqR2eUZHDnGX1RmOe129n87EKKM1RN4atvZoc7GFx1ok7p4JWkoQBFzNUsLOFi4ZFITYEgEuWIh9o0kzyVFuohzd0dvbkv3++oYezacrPKqlNY9yIcUGIA62JsO9rtBxM/uXrTSLAz+wivnSZnRRvC+/K4hdCrxDTigqvtvgw==">
                  <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width:168px;" alt="BitPay, the easy way to pay with bitcoins.">
                </form>
                
                <script>
                    function updateGold(){
                        document.getElementById("data").value = "v0BGPkhuQEjZIdeSYOJXP6EqInRsAHkhnEXbpvCTnmb2XPqR2eUZHDnGX1RmOe12Xx7bjNcIYkuSo9g99fp1m0+0DX9B4vObl2TuQ2hQ0J3R+banR5fCzMcQpMJWoCLQMzLuXvRDtemCBck+eZPwiu7QNGBmH7z/u/CKx5+nFBLOEni+SHBU3luACbtMVkWD";
                    }
                    function updateBasic(){
                        document.getElementById("data").value = "v0BGPkhuQEjZIdeSYOJXP6EqInRsAHkhnEXbpvCTnmb2XPqR2eUZHDnGX1RmOe129n87EKKM1RN4atvZoc7GFx1ok7p4JWkoQBFzNUsLOFi4ZFITYEgEuWIh9o0kzyVFuohzd0dvbkv3++oYezacrPKqlNY9yIcUGIA62JsO9rtBxM/uXrTSLAz+wivnSZnRRvC+/K4hdCrxDTigqvtvgw==";
                    }
                    
                </script>

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="post">
                      <h3 class="text">Our Choices</h3>
                      <p class="lead">Basic Membership - $2.99 (<?php echo($json_feed) ?> BTC)</p>
                      <p class="text">Enjoy everything HoosCleanin has to offer, including searching for people to clean your domicile as well as finding work to clean for others.</p>
                      <p class="lead">Gold Membership - $4.99 (<?php echo($json_feedg) ?> BTC)</p>
                      <p class="text">Enjoy our Gold membership with perks like priority waiting lists for finding cleaners and finding work, and reccomendations for the best deals closest to your budget and timeframe.</p>
                    </div>
                  </div>
                </div>
                <!-- /#blog-homepage-->
              </div>
            </div>
        
        
        
        
        

      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2018 HoosCleanin LLC</p>
          </div>
          <div class="col-lg-6">
            <p class="text-center text-lg-right">Template design by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious: E-commerce</a>
              <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :)-->
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/front.js"></script>

  
</body></html>