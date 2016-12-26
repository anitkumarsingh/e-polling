<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Menindark</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<meta name="viewport" content="width-device=width" initial-scale="1">
<link rel="stylesheet" href="w3.css" >

<link href="js1/css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js1/js/user.js"></script>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home </span></a></li>
          <li><a href="support.html"><span>User </span></a></li>
          <li><a href="about.html"><span>Admin </span></a></li>
          <li><a href="blog.html"><span>Registration </span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
        </ul>
      </div>
	  <div class="clr"></div>
	  
      <div class="logo">
        <h1><a href="index.html"><span><i> e-Polling System<i></span> <small>Smart way to cast your vote</small></a></h1>
      </div>
      <div class="clr"></div>
	  <!--
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/images/slide1.png" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="1500" height="1500" alt="" /> </a> </div>
        <div class="clr"></div>
      </div> -->
      <div class="clr"></div>
    </div>
  </div>
  <div class ="nav">
<ul>
  <li><a class="c1" href="user.php">Home</a></li>
  <li><a class="c2" href="vote.php">Current Polls</a></li>
  <li><a class="c3" href="manage-profile.php">Manage My Profile</a></li>
  <li><a class="c4" href="logout.php">Logout</a></li>
</ul>
</div>

</div>
<div class="background">
<h1 class="white">Invalid Credentials Provided </h1> 

<p align="center">&nbsp;</p>
<?php
error_reporting(E_ALL);

ob_start();
session_start();
$host="localhost"; // Host name
$username="root"; // Database username
$password=""; // Database password
$db_name="polling"; // Database name
$tbl_name="tbmembers"; // Table name

// This will connect you to your database
$con = mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
//mysqli_select_db($con, "$db_name")or die("cannot select DB");

// Defining your login details into variables
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
$encrypted_mypassword=md5($mypassword); //MD5 Hash for security

// MySQL injection protections
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con,$myusername);
$mypassword = mysqli_real_escape_string($con,$mypassword);

$sql="SELECT * FROM $tbl_name WHERE user_name='$myusername' and password='$encrypted_mypassword'" or die(mysqli_error());
$result=mysqli_query($con, $sql) or die(mysqli_error());

// Checking table row
$count=mysqli_num_rows($result);
// If username and password is a match, the count will be 1

if($count==1){
// If everything checks out, you will now be forwarded to student.php
$user = mysqli_fetch_assoc($result);
$_SESSION['member_id'] = $user['member_id'];
header("location:user.php");
}
//If the username or password is wrong, you will receive this message below.
else {
echo "<h2><center><i>Wrong Username or Password<br><br>Return to <a href=\"login.html\"><h2>login</i></h2></a></h2><center>";
}

ob_end_flush();

?> 
</div>
<div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2016 e-Polling System. All Rights Reserved</p>
     <!-- <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p> -->
	 <p class="rf">Design by Anit kumar MCA 4th sem</a></
      <div style="clear:both;"></div>
    </div>
  </div>
 

</body>
</html>