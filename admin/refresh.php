<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con, "polling");
?>
<?php
// retrieving candidate(s) results based on position
if (isset($_POST['Submit'])){   
/*
$resulta = mysql_query("SELECT * FROM tbCandidates where candidate_name='Luis Nani'");

while($row1 = mysql_fetch_array($resulta))
  {
  $candidate_1[0]=$row1['candidate_cvotes'];
  }
  */
  global $count;
  global $candidate_name_1;
  global $candidate_1;
  $candidate_name_1 = array();
  $candidate_1 = array();
  $position = addslashes( $_POST['position'] );
    $count=0;
    $results = mysqli_query($con, "SELECT * FROM tbCandidates where candidate_position='$position'");
    $i = 0;
    while ($row=mysqli_fetch_array($results)){
	  $candidate_name_1[$i] = $row['candidate_name'];
	  $candidate_1[$i] = $row['candidate_cvotes'];
	  $i++;
	  $count++;
	}
	}
    else
        // do nothing
?> 
<?php
// retrieving positions sql query
$positions=mysqli_query($con, "SELECT * FROM tbPositions")
or die("There are no records to display ... \n" . mysql_error()); 
?>
<?php
session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
?>

<?php if(isset($_POST['Submit'])){ 
$totalvotes =0 ;
for ($x = 0; $x <= count($candidate_1) ; $x++) {
    $totalvotes+=$candidate_1[$x];
    }
} 
//$totalvotes=$candidate_1[0]+$candidate_1[1];} ?>

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

<link href="admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js1/js/user.js"></script> 

 <!-- <link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js1/js/admin.js">

<link href="js1/css/user_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js1/js/user.js"></script> -->

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
	  
      <div class="logo">
        <h1><a href="index.html"><span><i> e-Polling System<i></span> <small>Smart way to cast your vote</small></a></h1>
      </div>
      <div class="clr"></div>
	  <!--
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/images/slide1.png" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="1500" height="1500" alt="" /> </a> </div>
        <div class="clr"></div>
      </div> -->
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
</div>
-->
  <div class="background" style="height:700px">
 
<h2><center> POLL RESULTS</center> </h2>
<table width="420" align="center">
<form name="fmNames" id="fmNames" method="post" action="refresh.php">
<tr>
    <td>Choose Position</td>
    <td><SELECT REQUIRED NAME="position" id="position">
    <OPTION VALUE=''>select</OPTION>
    <?php 
    //loop through all table rows
    while ($row=mysqli_fetch_array($positions)){
    echo "<OPTION VALUE=$row[position_name]>$row[position_name]</OPTION>"; 
    //mysql_free_result($positions_retrieved);
    //mysql_close($link);
    }
    ?>
    </SELECT></td>
    <td><input type="submit" name="Submit" value="See Results" /></td>
</tr>
<tr>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
</form> 
</table>
<?php 
$i = 0;
$flag = 0;
if(isset($_POST['Submit'])){
while($i < $count) {
   $width = 0;
   $count1 = 0;
   echo "<h1><u><b><br><center>$candidate_name_1[$i]</center><br></b></u></h1>";
   if($candidate_1[$i] != 0) {
     for($num=0; $num < $count; $num++) {
		$count1+=$candidate_1[$num];
	 }
	 if($count1 != 0) {
		$width = (100*round($candidate_1[$i]/($count1),2));
	 }	    
   } 
			echo "<center><br><img src='images/candidate-1.gif' width='$width' height='20'></center>             ";
			echo "<center>";
	        echo"$width% of ";
		    echo $totalvotes;
            echo " total votes"; 
			echo "<br>Votes : ";
            echo $candidate_1[$i]."<br>";
			$i++;
			echo "</center>";
   }
} 
?>
</div>
<div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2016 e-Polling System. All Rights Reserved</p>
	 <p class="rf">Design by Anit kumar MCA 4th sem</a></
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</div>

</body></html>