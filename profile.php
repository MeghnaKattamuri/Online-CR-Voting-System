<?php
include('login.php'); // Includes Login Script
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: loginindex.php");
}
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<meta charset="UTF-8">
	<title>CR VOTING SYSTEM</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]--><script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="jquery-3.2.1.js"></script>
	<script>
$(document).ready(function(){
	 $(".wrapper").hide();
	 $(".cancel").hide();
	$(".btn2").click(function(){
		$(".wrapper").show();
		$(".btn2").hide();
		$(".cancel").show();
    });
	$(".cancel").click(function(){
		$(".wrapper").hide();
		$(".btn2").show();
    });
});
</script>
	<style>
	.form-control {
  position: relative;
  font-family:comic sans ms;
  font-size: 12px;
  height: auto;
  padding: 8px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
	input[type=submit] {
    background-color: #b70030;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #b90044;
}

	table {
    font-family: comic sans ms;
	color: #b70030;
    border-collapse: collapse;
    width: 70%;
}

td, th {
    border: 2px solid rgb(255, 255, 191);
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: rgb(255, 255, 191);
}

.btn, .btn2, .cancel {
    background-color:rgb(255, 255, 191); 
    color: #b70030;
    border: 1px solid #b70030;
	font-size:100%;
    padding: 12px 28px;
}

.btn2, .cancel, .btn:hover {
    background-color: #b70030 ;
    color: rgb(255, 255, 191);
	cursor:pointer;
}
	</style>
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<ul id="navigation">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="contest.php">Participate</a>
					</li>
					<li>
						<a href="vote.php">Vote</a>
					</li>
					<li>
						<a href="blog.php">Explore</a>
					</li>
					<li class="selected">
						<a href="profile.php">Profile</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
					
				</ul>
				<div id="logo">
					<a href="home.php">CR VOTING SYSTEM</a><a href="logout.php" style="float:right;font-size:100%;">Logout</a>
				
				</div>
			</div>
			<div id="contents">
				<div id="about" align="center">
					<h2><?php echo $login_session; ?></h2><br><br>
					<table align="center">
					<tr>
					<td>Name:</td>
					<td><?php echo $login_session ?></td>
					</tr>
					<tr>
					<td>Roll Number:</td>
					<td><?php echo $user_check; ?></td>
					</tr>
					<tr>
					<td>Branch:</td>
					<td><?php echo $branch; ?></td>
					</tr>
					</tr>
					<tr>
					<td>Section:</td>
					<td><?php echo $section; ?></td>
					</tr>
					</tr>
					<tr>
					<td>Gender:</td>
					<td><?php echo $gender; ?></td>
					</tr>
					</tr>
					<!--<tr>
					<td>Branch:</td>
					<td><?php echo $branch; ?></td>
					</tr>-->
					</table>
					<?php
							$chsql="select * from ".$db." where rollno='$user_check'";
							$chres=mysqli_query($connection,$chsql);
							if($chrow=mysqli_fetch_assoc($chres)>0)
							{
								
								echo "<br><br><h2>Cool!! You are in the league of CR Contest!!</h2>
								<br><p style='font-family:comic sans ms;font-size:120%;'>Let us see how many votes have you got! For Seeing your votes <a href='blog.php'><input type='button' class='btn' value='CLICK HERE'></a></p>
								
								
								
								";
							}
							else{}
				?>		
                 <h2>Updating Profile</h2><br>
					<p style='font-family:comic sans ms;font-size:120%;'>You can update only your UserName as other details like Branch,Roll Number or<br> section related mistakes are concerned with college
					and therefore can be<br> updated from college server. For any issues visit <a href="contact.php">Contact Details</a></p><br>
					<input type="button" class="btn2" value="Update">
					<div class="wrapper">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<input type="text" class="form-control" name="nname" placeholder="NAME" required /><br>
					<input type="submit" name="update" value="Update">
					</form>
					</div>
					<input type="button" class="cancel" value="cancel">
				</div>
				<?php
				if(isset($_POST['update'])){
					$newname=addslashes($_POST['nname']);
					$ch1="select * from ".$db." where rollno='$user_check'";
							$chres1=mysqli_query($connection,$ch1);
							if(mysqli_fetch_assoc($chres)>0)
							{
					$upquery="update ".$db." set name='$newname' where rollno='$user_check'";
					mysqli_query($connection,$upquery) or die("Couldn't insert!!".mysqli_error($connection));
					        }
						
					$upquery2="update student set username='$newname' where rollnumber='$user_check'";
					mysqli_query($connection,$upquery2) or die("Could not update in college database!".mysqli_error($connection));
					echo "<p style='font-family:comic sans ms;font-size:120%;'>Updated Successfully! Refresh the page and see your updated username!";
				}
				?>
				<div class="footer">
					<div class="section">
						<h3></h3>
						<p>
						</p>
					</div>
					<div class="section">
						<h3></h3>
						<p>
							</p>
					</div>
				</div>
			</div>
			<div id="footer">
				<div>
					<ul>
						<li>
							<h4>About</h4>
							<p>
								CR Voting System is an easy way to gather students of a class on a virtual platform to conduct elections. Here willing candidates can easily come up and register as a contestant and voters can easily elect their appropriate leader.
								</p>
						</li>
						<li>
							<h4>Links</h4>
							<ul class="navigation">
					<li class="selected">
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="contest.php">Participate</a>
					</li>
					<li>
						<a href="vote.php">Vote</a>
					</li>
					<li>
						<a href="blog.php">Explore</a>
					</li>
					<li>
						<a href="profile.php">Profile</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
						</li>
						<li>
							<h4>Keep in Touch</h4>
							<div id="connect">
								<a href="#" target="_blank" class="twitter">Twitter</a><a href="#" target="_blank" class="facebook">Facebook</a><a href="#" target="_blank" class="googleplus">Google+</a>
							</div>
						</li>
					</ul>
					<p id="footnote">
						© Copyright 2032. All rights reserved.
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>