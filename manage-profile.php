<?php
global $firstName;
global $lastName;
// connection details
$link = mysqli_connect('localhost', 'root', '','polling') or die(mysqli_error());
//mysql_select_db('polling') or die(mysql_error());

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
} 
//retrive student details from the tbmembers table
$result=mysqli_query($link,"SELECT * FROM tbMembers WHERE member_id = '$_SESSION[member_id]'")
or die("There are no records to display ... \n" . mysqli_error()); 
if (mysqli_num_rows($result)<1){
    $result = null;
}
$row = mysqli_fetch_array($result);
if($row)
 {
 
 // get data from db
 $stdId = $row['member_id'];
 $firstName = $row['first_name'];
 $lastName = $row['last_name'];
 $email = $row['email'];
 $passWord = $row['pass_word'];
 }
?>
<?php
// updating sql query
if (isset($_POST['update'])){
$myId = addslashes( $_GET[id]);
$myFirstName = addslashes( $_POST['firstname'] ); //prevents types of SQL injection
$myLastName = addslashes( $_POST['lastname'] ); //prevents types of SQL injection
$myEmail = $_POST['email'];
$myPassword = $_POST['password'];

$newpass = md5($myPassword); //This will make your password encrypted into md5, a high security hash

$sql = mysqli_query( $link,"UPDATE tbMembers SET email='$myEmail', password='$newpass', pass_word='$myPassword' WHERE member_id = '$myId'" )
        or die( mysqli_error() );

// redirect back to profile
 header("Location: login.html");
}
?>
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

<meta name="viewport" content="width=device-width" initial-scale="1" >
			<link rel="stylesheet" href="w3.css" >
			
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/user.js">
</script>
</head><body>
<!--<center><b> <div id="header">    
-->
<!--<header class="w3 container w3-cyan w3-xxlarge">
<center><i> <b>e-Polling System</b></i></center>
</header>
<div class ="nav">
<ul>
  <li><a class="c1" href="user.php">Home</a></li>
  <li><a class="c2" href="vote.php">Current Polls</a></li>
  <li><a class="c3" href="manage-profile.php">Manage My Profile</a></li>
  <li><a class="c4" href="logout.php">Logout</a></li>
</ul>
</div> -->
<div class="main">
  <div class="header">
    <div class="header_resize">
	<!--
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home </span></a></li>
          <li><a href="support.html"><span>User </span></a></li>
          <li><a href="about.html"><span>Admin </span></a></li>
          <li><a href="blog.html"><span>Registration </span></a></li>
          <li><a href="contact.html"><span>Contact Us</span></a></li>
        </ul>
      </div> -->
	  <div class="menu_nav">
        <ul>
          <li class="active"><a href="user.php"><span>Home </span></a></li>
          <li><a href="vote.php"><span>Current Polls </span></a></li>
          <li><a href="manage-profile.php"><span>My Profile </span></a></li>
          <li><a href="logout.php"><span>Logout </span></a></li>
       <!--   <li><a href="contact.html"><span>Contact Us</span></a></li> -->
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
  <div class="w3-center">
  <!--
  <div class ="nav">
<ul class="w3-container w3-blue">
  <li><a class="c1" href="user.php">Home</a></li>
  <li><a class="c2" href="vote.php">Current Polls</a></li>
  <li><a class="c3" href="manage-profile.php">Manage My Profile</a></li>
  <li><a class="c4" href="logout.php">Logout</a></li>
</ul> -->
<!--
<div class="w3-container w3-blue">
  <a class="w3-text-black" href="user.php">Home</a>
  <a class="c2" href="vote.php">Current Polls</a>
  <a class="c3" href="manage-profile.php">Manage My Profile</a></li>
  <a class="c4" href="logout.php">Logout</a>
</div> -->
</div>
<div class="background">
<h1><center> MANAGE MY PROFILE </center></h1>
<table>
<tr>
<td>
<table width="300" align="center">
<CAPTION><h3>MY PROFILE</h3></CAPTION>
<tr>
    <td>Student Id:</td>
    <td><?php echo $stdId; ?></td>
</tr>
<tr>
    <td>First Name:</td>
    <td><?php echo $firstName; ?></td>
</tr>
<tr>
    <td>Last Name:</td>
    <td><?php echo $lastName; ?></td>
</tr>
<tr>
    <td>Email:</td>
    <td><?php echo $email; ?></td>
</tr>
<tr>
    <td>Password:</td>
    <td><?php echo $passWord; ?></td>
</tr>
</table>
</td>
<td>
<table border="0" width="400" align="center">
<CAPTION><h3>UPDATE PROFILE</h3></CAPTION>
<form action="manage-profile.php?id=<?php echo $_SESSION['member_id']; ?>" method="post" onsubmit="return updateProfile(this)">
<table align="center">
<tr><td>First Name:</td><td><input type="text" style="font-weight:bold" disabled="disabled" name="firstname" maxlength="15" placeholder="<?php echo $firstName; ?>"></td></tr>
<tr><td>Last Name:</td><td><input type="text" style="font-weight:bold" disabled="disabled"  name="lastname" maxlength="15" placeholder="<?php echo $lastName; ?>"></td></tr>
<tr><td>Email Address:</td><td><input type="text"  name="email" maxlength="40" value=""></td></tr>
<tr><td>New Password:</td><td><input type="password" name="password" maxlength="10" value=""></td></tr>
<tr><td>Confirm New Password:</td><td><input type="password" name="ConfirmPassword" maxlength="10" value=""></td></tr>
<tr><td>&nbsp;</td></td><td><input type="submit" name="update" value="Update Profile"></td></tr>
</table>
</form>
</td>
</tr>
</table>
</div>
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