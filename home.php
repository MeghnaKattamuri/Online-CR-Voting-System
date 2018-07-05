<?php
include('login.php'); // Includes Login Script

if(!isset($_SESSION['login_user'])){
header("location: loginindex.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
	<title>CR VOTING SYSTEM</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<ul id="navigation">
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
				<div id="logo">
					<a href="home.php">CR VOTING SYSTEM</a>
						<a href="logout.php" style="float:right;font-size:100%;">Logout</a>
				</div>
			</div>
			<div id="contents">
				
					<img src="images/discuss.jpg" alt="Img" height="456" width="960">'
				
				<div class="header">
					<div id="sidebar">
						<h2>Choose your pick!</h2>
						<div>
							<div class="section">
								<div class="body">
									<img src="images/images2.jpg" alt="img">
									</div>
							</div>
						</div>
					</div>
					<p>
						Electing a Class Representative = Creating a first point of Contact for a class!! 
						</p>
				</div>
				<div id="featured">
					<h2>Programs</h2>
					<p>
						Contest as a CR or Vote for your CR!
						</p>
					<ul>
						<li>
							<img src="images/contest.jpg" alt="Img" height="167" width="280">
							<p>
								Would like to represent your class?
							</p>
							<span><a href="contest.php" class="more">Learn More</a></span>
						</li>
						<li>
							<img src="images/vote.jpg" alt="Img" height="167" width="280">
							<p>
								Elect the voice of the class!
							</p>
							<span><a href="vote.php" class="more">Learn More</a></span>
						</li>
					</ul>
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