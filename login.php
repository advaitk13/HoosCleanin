<?php
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_REQUEST['submit'])) {
    if (empty($_REQUEST['user']) || empty($_REQUEST['pass'])) 
    {
        $error = "Username or Password is invalid";
    }
    else
    {
        // $servername = "localhost";
        // $username = "advait";
        // $password = " ";
        // $dbname = "hooscleanin";
        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);
    // Define $username and $password
        $username=$_REQUEST['user'];
        $password=$_REQUEST['pass'];
        $password= md5($password);
        // Establishing Connection with Server by passing server_name, user_id and password as a parameter
        $connection = mysql_connect("localhost", "advait", " ");
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        // Selecting Database
        $db = mysql_select_db("hooscleanin", $connection);
        // SQL query to fetch information of registerd users and finds user match.
        $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) 
        {
            $_SESSION['login_user']=$username; // Initializing Session
            header("location: index.php"); // Redirecting To Other Page
            echo("success:");
        } 
        else 
        {
            $error = "Username or Password is invalid";
            echo($error);
        }
         if ($conn->query($sql) === TRUE) 
        {
     echo "New record created successfully";
   } 
   else 
   {
       echo "Error: " . $sql . "<br>" . $conn->error;
   }
        mysql_close($connection); // Closing Connection
        }
    }
?>