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
  
  <div class="register">
<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect('localhost', 'root', '','polling') or die(mysqli_error($con));
//mysqli_select_db($con, 'polling') or die(mysql_error());

//Process
if (isset($_POST['submit']))
{

$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] );
$myUserName = addslashes( $_POST['username'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$result1 = mysqli_query($con, "SELECT * FROM tbmembers WHERE user_name='$myUserName'");
$num1 = mysqli_num_rows($result1);
$result2 = mysqli_query($con, "SELECT * FROM tbmembers WHERE user_name='$myEmail'");
$num2 = mysqli_num_rows($result2);
if($num1 > 0) {
   alert( "<h2><center>User name already exists please choose different one</center> <br><h2><center>Go to</center></h2> <a href=\"registeracc.php\"><h2><center>Register</center></h2></a>");;
}
if($num2 > 0) {
   die( "<h2><center>E-Mail already exists please choose different one</center><br></center>Go to</center></h2> <a href=\"registeracc.php\"><h2><center>Register</center></h2></a> ");
}
if(num1 == 0 && num2 == 0){
$sql = mysqli_query($con, "INSERT INTO tbmembers(first_name, last_name, user_name, email, password, pass_word) VALUES ('$myFirstName','$myLastName', '$myUserName', '$myEmail', '$newpass', '$myPassword')" )
        or die( "<h1>User With Same Email Id Exists..!!!<br> Registration Failed Go to <a href=\"registeracc.php\">Register Here</a>" );
die( "<h1><center>You have registered for an account.</center><h1><br><br><h2><center>Go to</center><h2> <a href=\"login.html\"><h2></center>Login</center></h2></a>" );
   }
}
echo '<span href="#" class="button" id="toggle-login">Register An Account</span>';
echo '<div id="login">';
echo '<div id="triangle"></div>';
echo '<h1>SIGN UP</h1>';
echo '<form action="registeracc.php" method="post" onsubmit="return registerValidate(this)">';
echo "<tr><td><input class='eptn' type='text' name='firstname' maxlength='15' value='' placeholder='First Name'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='lastname' maxlength='15' value='' placeholder='Last Name'></td></tr>";
echo "<tr><td><input class='eptn' type='text' name='username' maxlength='15' value='' placeholder='User Name'></td></tr>";
echo "<tr><td><input class='eptn' type='email' name='email' maxlength='100' value='' placeholder='Email Address'></td></tr>";
echo "<tr><td><input class='eptn' type='password' name='password' maxlength='15' value='' placeholder='Password'></td></tr>";
echo "<tr><td><input class='eptn' type='password' name='ConfirmPassword' maxlength='15' value='' placeholder='Confirm Password'></td></tr>";
echo "<tr><td>&nbsp;</td><td><input class='sub' type='submit' name='submit' value='Register Account'/></td></tr>";
echo "<tr><td colspan = '2'><p>Already have an account? <a href='login.html'><b>Login Here</b></a></td></tr>";
echo "</tr></td></table>";
echo "</form></div>";
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
