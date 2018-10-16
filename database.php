<?php
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
  $sql = "SELECT name, email, Address, City, state, zcode, username, password";
  $result = $conn->query($sql);
  
  $one = $_REQUEST["name"];
  $two = $_REQUEST["email"];
  $three = $_REQUEST["Address"];
  $four = $_REQUEST["City"];
  $five = $_REQUEST["state"];
  $six = $_REQUEST["zcode"];
  $seven = $_REQUEST["username"];
  $eight = $_REQUEST["password"];
  $eight = md5($eight);
  $sql = "INSERT INTO login (name, email, Address, City, state, zcode, username, password)
VALUES ('$one', '$two', '$three','$four','$five','$six','$seven','$eight')";
//

  //check if email and username already exists
  
  //Close and check the connection
   if ($conn->query($sql) === TRUE) 
   {
     echo "New record created successfully";
   } 
   else 
   {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }

  $conn->close();
  header("location: register.php");
?>