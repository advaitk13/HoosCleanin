<?php
    include("session.php");

?>
<html><head>
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
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"><link id="new-stylesheet" rel="stylesheet"><link id="new-stylesheet" rel="stylesheet"><link id="new-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/1/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/1/util.js"></script></head>
    <body onload="makeUL1(); makeUL2();"><div id="StayFocusd-infobar" style="display: none; top: 248px;">
    <img src="chrome-extension://laankejkbhbdhmipfmgcngdelahlfoji/common/img/eye_19x19_red.png">
    <span id="StayFocusd-infobar-msg"></span>
    <span id="StayFocusd-infobar-links">
        <a id="StayFocusd-infobar-never-show">hide forever</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a id="StayFocusd-infobar-hide">hide once</a>
    </span>
</div>
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
              <div class="col-lg-6 text-center text-lg-left" display:"inline-block"="">HoosCleanin</div>
                <?php echo $test ?>                       
               </div>
                        <div class="col-lg-6 text-center text-lg-right" style="position:absolute; left:525px;">
                            <ul class="menu list-inline mb-0">
                        <li class="list-inline-item"><a href="register.php">Log in/Sign Up</a></li>
                        <li class="list-inline-item"><a href="logout.php">Log Out</a></li>
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
                            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="about.php" class="nav-link">About US</a>

                            </li>
                            <li class="nav-item dropdown menu-large show"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link" aria-expanded="true">Find a Cleaner<b class="caret"></b></a>

                            </li>
                            <li class="nav-item dropdown menu-large show"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link" aria-expanded="true">Apply to be a Cleaner<b class="caret"></b></a>

                            </li>
                        </ul>
                        <div class="navbar-buttons d-flex justify-content-end">
                            <!-- /.nav-collapse-->
                            <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
                            <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="member.php" class="btn btn-primary navbar-btn"><span>Dashboard</span></a></div>
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
                                    <li aria-current="page" class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-12">
                            <div class="box">
                                <div style="text-align: center;">
                                    <h1>Dashboard</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="box">

                                <h1 style="text-align: center;">Your Posts</h1>

                                <div id="demo1">
                                    <div style="text-align: center;">
                                        <a href="">View all your posted jobs</a>
                                    </div>
                                <ul><li>No Posts</li></ul></div>

                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="box">

                                <h1 style="text-align: center;">Don't forget these cleaning tips!</h1>

                                <ol>
                                    <li>Decide the best order to clean in -- keep in mind the time it takes for things to dry</li>
                                    <li>Wash your supplies before and after each job</li>
                                    <li>Try looking around areas at different angles to spot places that need more attention</li> 
									<li>Make a killer playlist for constant motivation</li>     									
                                    <li>Take pictures of before/after and post to <a href="">our Facebook page!</a></li>
                                </ol>


                            </div>
                        </div>
                        <div class="col-lg-6">

                            <div class="box">
                                <h1 style="text-align: center;">Your Recent Views</h1>

                                <div id="demo2">
                                    <div style="text-align: center;">
                                        <a href="">View all your recently viewed jobs</a>
                                    </div>
                                <ul><li>No Views</li></ul></div>

                            </div>
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

            </div></body></html>