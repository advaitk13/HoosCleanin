<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  require 'vendor/autoload.php';
  include("session.php");
  $error='';
  $servername = "localhost";
  $username = "advait";
  $password = " ";
  $dbname = "hooscleanin";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) 
  {
    die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Name, email, Address, City, state, zcode, username, password";
  $result = $conn->query($sql);
  
  $one = $_REQUEST["name"];
  $one= stripslashes($one);
  $two = $_REQUEST["email"];
  $two= stripslashes($two);
  $three = $_REQUEST["Address"];
  $three= stripslashes($three);
  $four = $_REQUEST["City"];
  $four= stripslashes($four);
  $five = $_REQUEST["state"];
  $five= stripslashes($five);
  $six = $_REQUEST["zcode"];
  $six= stripslashes($six);
  $seven = $_REQUEST["username"];
  $seven= stripslashes($seven);
  $eight = $_REQUEST["password"];
  $eight= stripslashes($eight);
  $eight = md5($eight);
  $nine = $_REQUEST["login_username"];
  $nine = stripslashes($nine);
  $ten = $_REQUEST["login_password"];
  $ten = stripslashes($ten);
  $ten = md5($ten);

//

if(isset($_REQUEST['login_submit']))
{
    session_start(); // Starting Session
    if(isset($nine) && isset($ten))
    {
        $query = ("SELECT * FROM siteUsers WHERE username='$nine' AND password='$ten'");
        $check =  $conn->query($query);
        $count = mysqli_num_rows($check);

        if ($count == 1) 
        {
          $_SESSION['login_user']=$nine; // Initializing Session
          if($nine == 'alexporska23')
          {
            header("location: member.php");
          }
            header("location: member1.php");
           // Redirecting To Other Page
          //echo $_SESSION["login_user"];
        }
        else 
        {
          $error = "Username or Password is invalid";
        }
        if ($conn->query($sql) === TRUE)
        {}
        $conn->close();
    }
}
if(empty($one) || empty($two) || empty($three) || empty($four) || empty($five) || empty($six) || empty($seven) || empty($eight))
{
  //Do nothing
}
else
{
  if(isset($seven) && isset($two))
    {
      $query = ("SELECT * FROM siteUsers WHERE username='$seven' OR email='$two'");
      $check =  $conn->query($query);
      $count = mysqli_num_rows($check);
      if($count > 0)
      {
        $error = ("Username or Email already exists");
      }
      else
      {
          $sql = "INSERT INTO siteUsers (name, email, Address, City, state, zcode, username, password)
          VALUES ('$one', '$two', '$three','$four','$five','$six','$seven','$eight')";
          try
          {
            $mail = new PHPMailer(true);
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587; // or 587
            $mail->IsHTML(true);
            $mail->Username = "hooscleanin@gmail.com";
            $mail->Password = "Boby1234";
            $mail->SetFrom("hooscleanin@gmail.com");
            $mail->Subject = "Welcome to HoosCleanin!";
            $mail->Body = "Hello $one, and Thank You for registering with HoosCleanin! We hope you find our services to be extraordinary! Sincerly, HoosCleanin";
            $mail->AddAddress($two);
          
             if(!$mail->Send()) 
             {
               // echo "Mailer Error: " . $mail->ErrorInfo;
             } 
            header("location: payment.php");
          }
          catch (phpmailerException $e) 
          {
          } 
          catch (Exception $e) 
          {
          }
      }
       if ($conn->query($sql) === TRUE)
        {
          //
        }
    $conn->close();
    }
}
 
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"><link id="new-stylesheet" rel="stylesheet"><link id="new-stylesheet" rel="stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/stats.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/34/7/stats.js"></script></head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class = "toptab">
              <div class="col-lg-6 text-center text-lg-left"display:"inline-block">HoosCleanin
              </div>
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
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="member.php" class="btn btn-outline-secondary navbar-toggler"></a>
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
                  <li aria-current="page" class="breadcrumb-item active">New account / Sign in</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6">
              <div class="box">
                <h1>New account</h1>
                <p class="lead">Not our registered customer yet?</p>
                <p>With registration with us a great cleaning service, easy money, and much more opens to you! The whole process will not take you more than a minute!</p>
                <p class="text-muted">If you have any questions, please feel free to <a href="contact.php">contact us</a>, our customer service center is working for you 24/7.</p>
                <hr>
                <form action="" method="post">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" name ="name" type="text" class="form-control" placeholder = "John Doyle" required pattern = "[a-zA-Z\-'\s]+">
                    <p style= "font-size:10px">Letters, dashes, apostrophes</p>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" name = "email" type="email" class="form-control" placeholder = "John.Doyle@gmail.com" required pattern  = "^[^@\s]+@[^@\s]+\.[^@\s]+$">
                    <p style= "font-size:10px">Valid email format</p>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input id="address" name = "Address" type="text" class="form-control" placeholder = "1234 Example St." required pattern  = "^[a-zA-Z0-9,.\-' ]*$">
                    <p style= "font-size:10px">Letters, numbers, commas, periods, dashes, apostrophes</p>
                  </div>
                  <div class="form-group">
                    <label for="city">City</label>
                    <input id="city" name = "City" type="text" class="form-control" placeholder = "Charlottesville" required pattern = "[a-zA-Z\-'\s]+">
                    <p style= "font-size:10px">Letters, dashes, apostrophes</p>
                  </div>
                  <div class="form-group">
                    <label for="state" class="col-sm-2 control-label">State</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="state" name="state">
                        <option value="">N/A</option>
                        <option value="AK">Alaska</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="AZ">Arizona</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DC">District of Columbia</option>
                        <option value="DE">Delaware</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="IA">Iowa</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MD">Maryland</option>
                        <option value="ME">Maine</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MO">Missouri</option>
                        <option value="MS">Mississippi</option>
                        <option value="MT">Montana</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="NE">Nebraska</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NV">Nevada</option>
                        <option value="NY">New York</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VA">Virginia</option>
                        <option value="VT">Vermont</option>
                        <option value="WA">Washington</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WV">West Virginia</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="zip">Zip Code</label>
                    <input id="zip" name = "zcode" type="text" class="form-control" placeholder = "00000" required pattern = "^[0-9]{5}(?:-[0-9]{4})?$">
                    <p style= "font-size:10px">5 or 9 digit zip code</p>
                  </div>
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" name = "username" type="text" class="form-control" placeholder = "johndoyle123" required pattern = "^[a-zA-Z0-9_]{5,20}$">
                    <p style= "font-size:10px">5-20 Characters, no special characters</p>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" name = "password" type="password" class="form-control" required pattern = "{5,20}">
                    <p style= "font-size:10px">5-20 Characters</p>
                  </div>
                  <div class="text-center">
                    <div>
                    <span style="color:red;"><?php echo($error); ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>
              </div>

            </div>

            <div class="col-lg-6">
              <div class="box">
                <h1>Login</h1>
                <p class="lead">Already a Member?</p>
                
                <hr>
                <form action="" method="post">
                  <div class="form-group">
                    <label for="login_username">Username</label>
                    <input id="login_username" name="login_username" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="login_password">Password</label>
                    <input id="login_password" name = "login_password" type="password" class="form-control">
                  </div>
                  <div class="text-center">
                    <div>
                    <span style="color:red;"><?php echo($error); ?></span>
                    </div>
                    <button name = "login_submit" type="submit" value="Login" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </div>
                </form>
              </div>
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

  
</body></html>
