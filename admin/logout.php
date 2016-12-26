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
<div class ="nav1">
<h2 style="margin-top:-5px"><center> Try Re Logging In </center></h2>
</div>
<div class="background" style="height:700px">
<h1>Logged Out Successfully </h1>
<?php
session_start();
session_destroy();
?>
<h3><center>You have been successfully logged out of your control panel.</center><br><br><br><center>
Return to</center></h3> <a class='c1' href="login.html"><h2><center>Login</center></h2></a>
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