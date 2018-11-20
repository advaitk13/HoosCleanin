<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

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

session_start();// Starting Session
$user_check=$_SESSION['login_user'];

$sql = "SELECT username from siteUsers where username='$user_check'";
$result = $conn->query($sql);


// Selecting Database
// Storing Session
// SQL Query To Fetch Complete Information Of User
$row = $result->fetch_assoc();;
$login_session =$row['username'];
$test = "";
if(($login_session) != '')
{
    $test = "<b id='welcome'; display:'inline-block'; >Welcome $login_session</i></b>";
}
?>
