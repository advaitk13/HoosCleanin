<?php
//    session_start(); // Starting Session
    $error = "test";
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }  
    //if (isset($_REQUEST['submit'])) {
    // if (empty($_REQUEST['user']) || empty($_REQUEST['pass'])) 
    // {
    //   // $error = "Username or Password is invalid";
    // }
    // else
    // {
        $error=''; // Variable To Store Error Message
        $servername = "localhost";
        $username = "advait";
        $password = " ";
        $dbname = "hooscleanin";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Define $username and $password
        $sql = "SELECT Name, email, Address, City, state, zcode, username, password";
        $result = $conn->query($sql);
        //
        
        $two = $_REQUEST["email"];
        //$two= stripslashes($two);
        $seven = $_REQUEST["username"];
        $seven= stripslashes($seven);
        
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        // To protect MySQL injection for Security purpose

        // Selecting Database
        // SQL query to fetch information of registerd users and finds user match.
      //  if(isset($seven) && isset($two))
        //  {
            #$user = $_POST['username'];
            #$email = $_POST['email'];
           // $error = "";
            $query = ("SELECT * FROM siteUsers WHERE username='$seven' OR email='$two'");
            $check =  $conn->query($query);
            $count = mysqli_num_rows($check);
            if($count > 0)
            {
              $error = ("UserName or Email already exists");
              echo($error);
            }
            else
            {
               //
            }
        //  }
   // }
?>