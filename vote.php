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
	<meta charset="UTF-8">
	<title>VOTE-CR VOTING SYSTEM</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE]>
		<link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8">
	<![endif]-->
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="jquery-3.2.1.js"></script>
	<script>
$(document).ready(function(){
	 $("#show").hide();
	 $("#hide").show();	 
	 $("#revpara").show();
	 $("#para").hide()
    $("#hide").click(function(){
        $(".wrapper").hide();
		$("#hide").hide();
		$("#show").show();
		$("#para").show();
		$("#revpara").hide();
    });
    $("#show").click(function(){
        $("#hide").show();
		$(".wrapper").show();
		$("#show").hide();
		$("#para").hide();
		$("#revpara").show();
    });
});
</script>
<style>
.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
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
.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
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
.form-signin input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
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
						<a href="contest.php">Paricipate</a>
					</li>
					<li class="selected">
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
					<a href="home.php">CR VOTING SYSTEM</a><a href="logout.php" style="float:right;font-size:100%;">Logout</a>
				
				</div>
			</div>
			<div id="contents" style="overflow-y:scroll;">
				<div id="sidebar">
					<h2>CR</h2>
					<div id="event-list">
						<div class="section">
							<div class="body">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/images.jpg" alt="Img" height="260" width="200">
								
							</div>
						</div>
						
						
					</div>
					<span id="revpara" style="color:red;"><b>If any information of yours is wrong Please visit <a href="contact.php">Contact Details</a></span> 
	                				<?php
							$chsql="select * from ".$db." where rollno='$user_check'";
							$chres=mysqli_query($connection,$chsql);
							if(mysqli_fetch_assoc($chres)>0)
							{
								echo "<b>If you are participating, it doesn't mean you can't VOTE!</b>";
								$d="disabled";
							}
							else{
								
							}
				?>			
				</div>
				<div id="program">

					<h2 style='font-family:comic sans ms;font-size:120%;'>
						Hey <?php echo strtoupper($login_session); ?> ! Do you know someone who can best represent your Class?</h2>
						<p><b>Then Hurry up and vote for your CR!</b></p>
						<p id="para" style='font-family:comic sans ms;font-size:120%;'>
						You can vote for the same gender only.<br>
						You cannot vote twice.
						Once you've voted you can not change it and the vote submission button would be disabled.
						<br>Vote for the best!<br><br>Choose your pick!</p>
						<button class="btn" id="show">Vote</button>
					<div  style="float:left;"class="wrapper">
					<form id="formas" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"class="form-signin" enctype="multipart/form-data" style="position:absolute;top:300px;font-family:comic sans ms;font-size:120%;">
					<table>
					<tr>
					<td>
					Vote For:</td><td><select name="crrollno">
					<?php
					$loop = "SELECT count(*) FROM ".$db."";
					$sth = mysqli_query($connection,$loop);
					$loopres=mysqli_fetch_array($sth);
					$count=$loopres['count(*)'];
					echo "<option value=''>";

					for($i=1;$i<=$count;$i++)
					{
						$j=$i-1;
						$sql = "select rollno from ".$db." limit ".$j.",".$i."";
						$sth = $connection->query($sql);
						$result=mysqli_fetch_array($sth);
						$rn=$result['rollno'];
						echo "<option value=".$rn.">'$rn'</option>";
					}
					
					?></select>
					</td>
					</tr>
					<tr>
					<td>
					Enter Your Password To Vote:</td><td><input type="password" required class="form-control" name="check_pwd"></td>
					</tr>
					<tr>
					<td></td><td>
					<?php
					
							$vsql="select voted from student where rollnumber='$user_check'";
							$vres=mysqli_query($connection,$vsql) or die("Some Error occured:".mysli_error($connection));
							$varr=mysqli_fetch_assoc($vres);
							$voted=intval($varr['voted']);
							
					include('session.php');
					$pass=$pwd;
					if(isset($_POST['submit']))
					{
						
					$crrollno=$_POST['crrollno'];
						if($pass==$_POST['check_pwd'])
						{$votessql="select votes from ".$db." where rollno='$crrollno'";
							$votesres=mysqli_query($connection,$votessql) or die("Some Error occured:".mysqli_error($connection));
							$varr2=mysqli_fetch_assoc($votesres);
							$votes=intval($varr2['votes']);
							$crnameq="select * from ".$db." where rollno='$crrollno'";
								$crnameres=mysqli_query($connection,$crnameq) or die("Error");
								$crnamearr=mysqli_fetch_assoc($crnameres);
								$crname=$crnamearr['name'];
								$crgender=$crnamearr['gender'];
		                    if(!$voted)
							{
								if($crgender==$gender){
								$votes=$votes+1;
								$votesup="update ".$db." set votes='$votes' where rollno='$crrollno'";
								mysqli_query($connection,$votesup) or die("Could not update your vote try again!");
								
								$voted=1;
								$upquery="update student set voted='$voted' where rollnumber='$user_check'";
					            mysqli_query($connection,$upquery);
					
								echo "Voted successfully for".$crname."<br>Rollno:".$crrollno;
								}
								else{
									echo "You can't vote for opposite gender";
								}
							}
							else
							{
								echo "You can't vote twice!";
							}
						}
						else{
							echo "Incorrect password";
							}
					}

					
					if(isset($voted)){
					if($voted!=0){
					echo'<input type="submit" disabled value="VOTE" name="submit"></td></tr>';
					echo 'Vote button disabled';
					}
				    else{
						echo'<input type="submit" value="VOTE" name="submit"></td></tr>';
					}
					}else{
						echo'<input type="submit" value="VOTE" name="submit"></td></tr>';
					}
					?>
					</table>
					</form>
					<button class="btn" id="hide" style="position:absolute;left:620px;">Details</button>
					</div>
					
					</ul>
				</div>
				<br>
				
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
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="contest.php">Paricipate</a>
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