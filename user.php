<?php
$link=mysqli_connect('localhost', 'root', '','polling') or die(mysqli_error($link));
//mysqli_select_db('polling') or die(mysql_error());

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
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
<meta name="viewport" content="width=device-width" initial-scale="1">
<link rel="stylesheet" href="w3.css">

<link href="js1/css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js1/js/user.js"></script>

</head>
<body>
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
  <!-- --------------------------- -->
  <!-- <div class ="nav">
<ul>
  <li><a class="c1" href="user.php">Home</a></li>
  <li><a class="c2" href="vote.php">Current Polls</a></li>
  <li><a class="c3" href="manage-profile.php">Manage My Profile</a></li>
  <li><a class="c4" href="logout.php">Logout</a></li>
</ul>
</div> -->
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
 <!-- <div class="background"> -->
 <div class="w3-text-light-blue">
<?php
if (isset($_POST['uvote'])){
     $member_id = $_SESSION['member_id'];
     $candidate_position=$_POST['Position'];
	 $candidate_name = $_POST['vote'];
	 $result1 = mysqli_query($link,"SELECT *  FROM tbvote WHERE member_id='$member_id' AND candidate_position='$candidate_position'");
	 $num1 = mysqli_num_rows($result1);
	 if($num1 == 0 ) {
		$result2 = mysqli_query($link,"INSERT INTO tbvote VALUES('$member_id', '$candidate_name', '$candidate_position')");
		$result3 = mysqli_query($link,"SELECT candidate_cvotes FROM tbcandidates WHERE candidate_name='$candidate_name' AND candidate_position='$candidate_position'");
        $row=mysqli_fetch_array($result3);
        $count = $row['candidate_cvotes'];		
        $count=$count+1;
        $result4 = mysqli_query($link,"UPDATE tbcandidates SET candidate_cvotes='$count' WHERE candidate_name='$candidate_name' AND candidate_position='$candidate_position'");
		echo "<h3><center>VOTE CASTED SUCCESSFULLY to candidate $candidate_name for a position $candidate_position.</3></center> ";
	 } else {
         echo "<h3><center>Sorry Cannot Vote Twice to candidate $candidate_name for a position $candidate_position.</center></h3> ";
     }		 
        
	 
  }
?>
<!--
<h1 class="white">USER HOME</h1><br><br>
<h3 class="white">Click a link above to do some stuff.</h3>

-->
<h1><div class="w3-text-yellow">USER HOME</h1><br><br></div>
<h3 class="w3-text-light-green w3-center">Click a link above to do some stuff.</h3>
 </div>
 <pre>
 </pre>
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
