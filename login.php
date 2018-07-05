<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "RollNumber or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","test");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from student where password='$password' AND rollnumber='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: home.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
echo $error;
}
mysql_close($connection); // Closing Connection
}
}
?>