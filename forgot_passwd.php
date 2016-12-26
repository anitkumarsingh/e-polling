<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-Polling system</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>

<link href="js1/css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js1/js/user.js"></script>

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

  <div class="background">
<?php
if(isset($_POST['display'])) {

	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$userName = $_POST['username'];
	$eMail = $_POST['email'];
	
// connection details
$link = mysqli_connect('localhost', 'root', '','polling') or die(mysqli_error());
//mysql_select_db('polling') or die(mysql_error());
	
//retrive student details from the tbmembers table
$result=mysqli_query($link,"SELECT * FROM tbmembers WHERE first_name='$firstName' AND last_name='$lastName' AND user_name='$userName' AND email='$eMail'")
or die("There are no records to display ... \n<br><a href=\"forgot_passwd.php\"><h2>Go Back</h2></a>" . mysqli_error()); 
$num = mysqli_num_rows($result);
if ($num == 1) {
 $row = mysqli_fetch_array($result);
 $passWord = $row['pass_word'];
 die ("<h2> <center><i>Your Password To Log In Is : $passWord</center><i></h2><br><a href=\"login.html\"><h2><center><i>Log In</i></center></h2></a>");
 }

}
?>
<table border="0" width="400" align="center">
<CAPTION><h3>RETREIVE PASSWORD</h3></CAPTION>
<form action="forgot_passwd.php" method="post" onsubmit="return forgotpasswordValidate(this)">
<table align="center">
<tr><td>First Name:</td><td><input type="text" style="font-weight:bold" name="firstname" maxlength="15" placeholder="First Name"></td></tr>
<tr><td>Last Name:</td><td><input type="text" style="font-weight:bold" name="lastname" maxlength="15" placeholder="Last Name"></td></tr>
<tr><td>User Name:</td><td><input type="text" style="font-weight:bold" name="username" maxlength="15" placeholder="User Name"></td></tr>
<tr><td>Email Address:</td><td><input type="text" style="font-weight:bold"  name="email" maxlength="40" placeholder="E-Mail"></td></tr>
<tr><td>&nbsp;</td></td><td><input type="submit" name="display" value="Display Password"></td></tr>
</table>
 </div> 
<div id="footer">
<div class="bottom_addr">&copy; 2015 Online Polling System. All Rights Reserved</div>
</div>
</body></html>