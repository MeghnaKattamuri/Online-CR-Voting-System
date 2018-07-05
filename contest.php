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
	<title>Participate-CR VOTING SYSTEM</title>
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
<body id="bd">
	<div id="background">
		<div id="page">
			<div id="header">
				<ul id="navigation">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li class="selected">
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
							$chres=mysqli_query($connection,$chsql) or die("db not defined");
							if(mysqli_fetch_assoc($chres)>0)
							{
								echo "<b>You have already registered!</b>";
								$d="disabled";
								echo $d;
							}
							else{
								
							}
				?>			
				</div>
				<div id="program">
<?php 
if(isset($d)){
if($d=="disabled")
{
	echo "<h2>Hey ".strtoupper($login_session)."! go to your profile page to see your votes!</h2>";
}
else{
	echo "<h2>Hey ".strtoupper($login_session)."! Do You Want to register for Class Representative Contest?</h2>";
}}
else{
	echo "<h2>Hey ".strtoupper($login_session)."! Do You Want to register for Class Representative Contest?</h2>";
}
?>
						<p>Want to participate in the league of becoming a Class Rep?</p>
						<p id="para">If you have already registered for the CR Contest, please proceed to explore<br>
						section or profile section to see the status of the contest.(As you will find the register<br>
						button disbaled in the form section).If you haven't registered yet and wish to participate <br>
						Click on the <i>INTERESTED</i> button, upload your image and register!<br><span style="color:red;"><b>If any information of yours is wrong Please visit <a href="contact.php">Contact Details</a></span></p> 
					<button class="btn" id="show">Interested</button>
					<div  style="float:left;"class="wrapper">
					<form id="formas" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"class="form-signin" enctype="multipart/form-data" style="position:absolute;top:300px;font-family:comic sans ms;font-size:120%;">
					<table>
					<tr>
					<td>NAME:</td>
					<td><input type="text" class="form-control" disabled required name="name" value="<?php echo $login_session; ?>"></td>
					</tr>
					<tr>
					<td>RollNumber:</td>
					<td><input type="text" class="form-control" disabled required name="rn"value="<?php echo $user_check; ?>"></td>
					</tr>
					<tr>
					<td>Branch:</td>
					<td><input type="text" class="form-control" disabled required value="<?php echo $branch; ?>"></td>
					</tr>
					<tr>
					<td>Section:</td>
					<td><input type="text" class="form-control" disabled required value="<?php echo $section; ?>"></td>
					</tr><tr>
					<td>Gender:</td>
					<td><input type="text" class="form-control" disabled name="gn" required value="<?php echo $gender; ?>"></td>
					</tr>
					<tr>
					<td>
					<input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
					Upload your photo</td><td><input type="file" name="userfile" required id="userfile"></td>
					</tr>
					<tr>
					<td>
					Enter Your Password To Register:</td><td><input type="password" required class="form-control" name="check_pwd"></td>
					</tr>
					<tr>
					<td></td><td>
					<?php
					if(isset($d)){
					if($d=="disabled"){
					echo'<input type="submit" disabled value="Register" name="submit"></td></tr>';
					echo 'Register button disabled';
					}
				    else{
						echo'<input type="submit" value="Register" name="submit"></td></tr>';
					}
					}else{
						echo'<input type="submit" value="Register" name="submit"></td></tr>';
					}
					?>
					<?php
					include('session.php');
					$pass=$pwd;
					if(isset($_POST['submit']))
					{
						if($pass==$_POST['check_pwd'])
						{
							
    $maxsize = 50000000; //set to approx 10 MB
    //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
					
					 
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
				
                    // our sql query
                    $sql = "INSERT INTO ".$db."(name,rollno,gender,image) VALUES('{$login_session}','{$user_check}','{$gender}','{$imgData}');";

                    // insert the image
                    mysqli_query($connection,$sql) or die("Error in Query: " . mysqli_error($connection));
                   $msg='<p>Data successfully stored in the database </p>';
					 
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>Image exceeds the Maximum File limit</div>
                <div>Maximum File limit is 50MB</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="Image not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    echo $msg;
}
else{
	echo "Incorrect password";
}
						}
						
function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}

					
					?>
					</table>
					</form>
					<button class="btn" id="hide" style="position:absolute;left:620px;">Not<br>Interested</button>
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