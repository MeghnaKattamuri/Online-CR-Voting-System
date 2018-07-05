<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "","test");
// Selecting Database
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select * from student where rollnumber='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
$section=$row['section'];
$branch=$row['branch'];
$gender=$row['gender'];
$pwd=$row['password'];

				if($branch=="it")
							{
								if($section=="a")
								{
									$db="itsec1";
								}
								else
								{
									$db="itsec2";
								}
							}
							else if($branch=="cse")
							{
								if($section=="a")
								{
									$db="csesec1"; 
								}
								else
								{
									$db="csesec2";
								}
							}
							else if($branch=="ece")
							{
								if($section=="a")
								{
									$db="ecesec1";
								}
							}
							else
							{
								echo "Branch or section invalid";
							}
							$query = "SELECT rollno,votes FROM ".$db."";

//execute query
$result = $connection->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}


?>