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
	<![endif]-->
	<style>
			.chart-container {
				width: 600px;
				height: auto;
			}
			.btn {
    background-color: white; 
    color: #b90044;
    border: 2px solid #b90044;
	font-size:120%;
    padding: 16px 32px;
}

.btn:hover {
    background-color: #b90069;
    color: white;
	cursor:pointer;
}
		</style>
		<script>
		$(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 600
  });
});
		</script>
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
					<li class="selected">
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
					<a href="home.php">CR VOTING SYSTEM</a><a href="logout.php" style="float:right;font-size:100%;">Logout</a>
				
				</div>
			</div>
			<div id="contents">
				<div id="blog" >
					<center>
				<h2 style="font-family:comic sans  ms;"><b>Hello! Here You can see the status of the CONTEST.</b></h2><br>
				<p style="font-family:comic sans  ms;">This graph will show you the count of votes every individual contestant has got!</p>
					
	<h2 id="msg"></h2>
					<div class="chart-container">
			<canvas id="mycanvas"></canvas>
		</div>
		
		<!-- javascript -->
		<!--<script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>-->
		<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="Chart.min.js"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>-->
		<?php if($db=="itsec1"){
			echo '
				<script type="text/javascript">
		
$(document).ready(function(){
	$.ajax({
		url: "itsec1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var rollno = [];
			var votes = [];

			for(var i in data) {
				rollno.push("RollNumber " + data[i].rollno);
				votes.push(data[i].votes);
			}
            
			var chartdata = {
				labels: rollno,
				datasets : [
					{
						label: "Votes",
						backgroundColor: "#00BFFF",
						borderColor: "rgba(200, 200, 200, 0.75)",
						hoverBackgroundColor: "#1E90FF",
						hoverBorderColor: "rgba(200, 200, 200, 1)",
						data: votes
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: "bar",
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
		</script>
	
			';
		}
		else if($db=="itsec2")
		{
			echo '
				<script type="text/javascript">
		
$(document).ready(function(){
	$.ajax({
		url: "itsec2.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var rollno = [];
			var votes = [];

			for(var i in data) {
				rollno.push("RollNumber " + data[i].rollno);
				votes.push(data[i].votes);
			}
            
			var chartdata = {
				labels: rollno,
				datasets : [
					{
						label: "Votes",
						backgroundColor: "#00BFFF",
						borderColor: "rgba(200, 200, 200, 0.75)",
						hoverBackgroundColor: "#1E90FF",
						hoverBorderColor: "rgba(200, 200, 200, 1)",
						data: votes
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: "bar",
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
		</script>
	
			
			';
		}
		else if($db=="csesec1"){
			echo '
				<script type="text/javascript">
		
$(document).ready(function(){
	$.ajax({
		url: "csesec1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var rollno = [];
			var votes = [];

			for(var i in data) {
				rollno.push("RollNumber " + data[i].rollno);
				votes.push(data[i].votes);
			}
            
			var chartdata = {
				labels: rollno,
				datasets : [
					{
						label: "Votes",
						backgroundColor: "#00BFFF",
						borderColor: "rgba(200, 200, 200, 0.75)",
						hoverBackgroundColor: "#1E90FF",
						hoverBorderColor: "rgba(200, 200, 200, 1)",
						data: votes
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: "bar",
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
		</script>
	
			
			';
		}
		else if($db="csesec2")
		{
			echo '
				<script type="text/javascript">
		
$(document).ready(function(){
	$.ajax({
		url: "csesec2.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var rollno = [];
			var votes = [];

			for(var i in data) {
				rollno.push("RollNumber " + data[i].rollno);
				votes.push(data[i].votes);
			}
            
			var chartdata = {
				labels: rollno,
				datasets : [
					{
						label: "Votes",
						backgroundColor: "#00BFFF",
						borderColor: "rgba(200, 200, 200, 0.75)",
						hoverBackgroundColor: "#1E90FF",
						hoverBorderColor: "rgba(200, 200, 200, 1)",
						data: votes
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: "bar",
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
		</script>
	
			
			';
		}
		else if($db=="ecesec1")
		{
			echo '
				<script type="text/javascript">
		
$(document).ready(function(){
	$.ajax({
		url: "ecesec1.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var rollno = [];
			var votes = [];

			for(var i in data) {
				rollno.push("RollNumber " + data[i].rollno);
				votes.push(data[i].votes);
			}
            
			var chartdata = {
				labels: rollno,
				datasets : [
					{
						label: "Votes",
						backgroundColor: "#00BFFF",
						borderColor: "rgba(200, 200, 200, 0.75)",
						hoverBackgroundColor: "#1E90FF",
						hoverBorderColor: "rgba(200, 200, 200, 1)",
						data: votes
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: "bar",
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
		</script>
	
			
			';
		}
		else
		{
			echo "Invalid db ";
		}
		?>
		<br>
				
				<div class="w3-content w3-display-container">
   		<?php 
					include('session.php');


$sql = 'SELECT count(*) FROM '.$db.'';
$sth = $connection->query($sql);
$result=mysqli_fetch_array($sth);
$count=$result['count(*)'];
if($count==0){
	echo "<h2>No Contestants yet!!</h2>";
	echo "<p style='font-family:comic sans ms;font-size:120%;'>Want to register as a contestant?<br></p><a href='contest.php'><button class='btn'>Register</button></a>";
	die();
}
echo "<h2>Contestants of your Class</h2><br>";
echo '<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="jquery.simpleSlider.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
	<div class="topo" style="width: 70%; margin: 0 auto;">
		<div id="my-slider-1">
		<table style="border:2px solid #b90044;">
			<ul>';
for($i=1;$i<=$count;$i++)
{
$j=$i-1;
$sql = 'SELECT * FROM '.$db.' limit '.$j.','.$i.'';
$sth = $connection->query($sql);
$result=mysqli_fetch_array($sth);
$name=$result['name'];
$rn=$result['rollno'];
$image=$result['image'];
$votes=$result['votes'];
echo '<li title="'.$name.'"><img src="data:image/jpeg;base64,'.base64_encode( $image ).'"></li>';
}
echo '</ul></table>
		</div>
	</div>';

?>

 				
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
						<a href="blog.php">Blog</a>
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