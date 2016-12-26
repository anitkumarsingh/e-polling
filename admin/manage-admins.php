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

<link href="js1/css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js1/js/user.js"></script>

</head>
	<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
	
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="admin.php"><span>Home </span></a></li>
          <li><a href="manage-admins.php"><span>Manage Administrators </span></a></li>
          <li><a href="positions.php"><span>Manage Positions</span></a></li>
          <li><a href="candidates.php"><span>Manage Candidates </span></a></li>
          <li><a href="refresh.php"><span>Poll Results</span></a></li>
		  <li><a href="logout.php"><span>Logout</span></a></li>
        </ul>
      </div>
	  <div class="clr"></div>
	  <div class="clr"></div>
	  <div class="clr"></div>
	   <!--
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/images/slide1.png" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="1500" height="1500" alt="" /> </a> </div>
        <div class="clr"></div>
      </div>  -->
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
  <!--
<div class ="nav1">
<ul>
  <li><a class="d1" href="admin.php">Home</a></li>
  <li><a class="d1" href="manage-admins.php">Manage Administrators</a></li>
  <li><a class="d1" href="positions.php">Manage Positions</a></li>
  <li><a class="d1" href="candidates.php">Manage Candidates</a></li>
  <li><a class="d1" href="refresh.php">Poll Results</a></li>
  <li><a class="d1" href="logout.php">Logout</a></li>
</ul>
</div> -->
<div class="background"> 
<?php
$link=mysqli_connect('localhost', 'root', '','polling') or die(mysqli_error($link));
//mysql_select_db('polling') or die(mysql_error());

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysqli_query( $link,"INSERT INTO tbAdministrators(first_name, last_name, email, password) VALUES ('$myFirstName','$myLastName', '$myEmail', '$newpass')" )
        or die( mysqli_error($link) );

die( "<center><h1>A new administrator account has been created.</h1></center>" );
}
//Process
if (isset($_GET['id']) && isset($_POST['update']))
{
$myId = addslashes( $_GET['id']);
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysqli_query( $link,"UPDATE tbAdministrators SET email='$myEmail', password='$newpass' WHERE admin_id = '$myId'" )
        or die( mysqli_error($link) );

die( "<center><h1>An administrator account has been updated.</h1></center>" );
}
?>
<table align="center" style="background-color;black">
<tr>
<td style="background-color:black">
<form action="manage-admins.php?id=<?php echo $_SESSION['admin_id']; ?>" method="post" onsubmit="return updateProfile(this)" style="background-color:black">
<table align="center" style="background-color:black">
<CAPTION><h2>UPDATE ACCOUNT</h2></CAPTION>
<tr><td>Email Address:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="email" maxlength="100" value=""></td></tr>
<tr><td>New Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="password" maxlength="15" value=""></td></tr>
<tr><td>Confirm New Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="update" value="Update Account"></td></tr>
</table>
</form>
</td>
<td>
<form action="manage-admins.php" method="post" onsubmit="return registerValidate(this)" style="background-color:black">
<table align="center" style="background-color:black">
<CAPTION><h2>CREATE ACCOUNT</h2></CAPTION>
<tr><td>First Name:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="firstname" maxlength="15" value=""></td></tr>
<tr><td>Last Name:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="lastname" maxlength="15" value=""></td></tr>
<tr><td>Email Address:</td><td><input type="text" style="background-color:#999999; font-weight:bold;" name="email" maxlength="100" value=""></td></tr>
<tr><td>Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="password" maxlength="15" value=""></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" style="background-color:#999999; font-weight:bold;" name="ConfirmPassword" maxlength="15" value=""></td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="submit" value="Create Account"></td></tr>
</table>
</form>
</td>
</tr>
</table>
</div>
<div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2016 e-Polling System. All Rights Reserved</p>
	 <p class="rf">Design by Anit kumar MCA 4th sem</a></
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body></html>