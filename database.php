<?php
  $error='shithead';
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
  //$two= stripslashes($two);
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
//
if(isset($seven) && isset($two))
  {
    #$user = $_POST['username'];
    #$email = $_POST['email'];
    
    $query = ("SELECT * FROM siteUsers WHERE username='$seven' OR email='$two'");
    $check =  $conn->query($query);
    $count = mysqli_num_rows($check);
    $shitead = ("shithead");
    if($count > 0)
    {
      $error = ("Username or Email already exists");
      echo($error);
    }
    else
    {
        $sql = "INSERT INTO siteUsers (name, email, Address, City, state, zcode, username, password)
        VALUES ('$one', '$two', '$three','$four','$five','$six','$seven','$eight')";
    }
  }
  
  /*
  
   $one = $_POST["name"];
  $two = $_POST["email"];
  $three = $_POST["Address"];
  $four = $_POST["City"];
  $five = $_POST["state"];
  $six = $_POST["zcode"];
  $eight = $_POST["password"];
  $eight = md5($eight);
  
  
  //protection against sql injections
  
        
  // $one= mysql_real_escape_string($one);
  // $two= mysql_real_escape_string($two);
  // $three= mysql_real_escape_string($three);
  // $four= mysql_real_escape_string($four);
  // $five= mysql_real_escape_string($five);
  // $six= mysql_real_escape_string($six);
  // $seven= mysql_real_escape_string($seven);
  // $eight= mysql_real_escape_string($eight);

  
    //check if email and username already exists

  if(isset($seven) && isset($two))
  {
    #$user = $_POST['username'];
    #$email = $_POST['email'];
    
    $query = ("SELECT * FROM siteUsers WHERE username='$seven' OR email='$two'");
    $check =  $conn->query($query);
    $count = mysql_num_rows($check);

    if($count > 0)
    {
      $error = ("UserName or Email already exists");
    }
    else
    {
        $sql = "INSERT INTO siteUsers (name, email, Address, City, state, zcode, username, password)
        VALUES ('$one', '$two', '$three','$four','$five','$six','$seven','$eight')";
    }
  }
  */
  //Close and check the connection
   if ($conn->query($sql) === TRUE) 
   {
   //  echo "New record created successfully";
   } 
   else 
   {
   //    echo "Error: " . $sql . "<br>" . $conn->error;
   }

  $conn->close();
  header("location: register.php");
?>