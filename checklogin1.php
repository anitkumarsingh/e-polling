
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
<div class="background">
  <!--
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
       <!-- <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p> -->
      <!-- </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">TemplateInfo</a></li>
            <li><a href="#">Style Demo</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Archives</a></li>
            <li><a href="#">Web Templates</a></li>
          </ul>
        </div>
        
      </div>
      <div class="clr"></div>
    </div>
  </div> -->
  <!--
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="New folder/images/gal1.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="New folder/images/gal2.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="New folder/images/gal3.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="New folder/images/gal4.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="New folder/images/gal5.jpg" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="New folder/images/gal6.jpg" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div> -->
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
echo "<h2>Wrong Username or Password<br><br>Return to <a href=\"login.html\"><h2>login</h2></a></h2>";
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
</div>
</body>
</html>
