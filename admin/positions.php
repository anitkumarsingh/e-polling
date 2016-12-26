<script>
function callalert()
{
	alert("Confirm to delete the selected position?");
}
</script>
<?php
// connection details

$link = mysqli_connect('localhost', 'root', '','polling') or die(mysqli_error($link));
//mysql_select_db('polling') or die(mysql_error());

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
}
//retrive positions from the tbpositions table
$result=mysqli_query($link,"SELECT * FROM tbPositions")
or die("There are no records to display ... \n" . mysqli_error($link)); 
if (mysqli_num_rows($result)<1){
    $result = null;
}
//error_reporting(E_ERROR | E_PARSE);
?>
<?php
// inserting sql query
if (isset($_POST['Submit']))
{

$newPosition = addslashes( $_POST['position'] ); //prevents types of SQL injection

$sql = mysqli_query( $link,"INSERT INTO tbPositions(position_name) VALUES ('$newPosition')" )
        or die("Could not insert position at the moment". mysqli_error() );

// redirect back to positions
 header("Location: positions.php");
}
?>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
print "<script>alert(\"Confirm deletion\");window.location=\"positions.php\";</script>";
 // delete the entry
 $result = mysqli_query($link,"DELETE FROM tbPositions WHERE position_id='$id'")
 or die("The position does not exist ... \n"); 
 
 // redirect back to positions
 header("Location: positions.php");
 }
 else
 // do nothing
    
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
<div class="background" style="height:700px">
<h1> ADMINISTRATION CONTROL PANEL </h1>
<table width="400" align="center">
<CAPTION><h2>ADD NEW POSITION</h2></CAPTION>
<form action="positions.php" method="post" onsubmit="return positionValidate(this)">
<tr>
    <td>Position Name</td>
    <td><input type="text" name="position" /></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</table>
<hr>
<table border="0" width="600" align="center">
<CAPTION><h2>AVAILABLE POSITIONS</h2></CAPTION>
<tr>
<th><h2>Position ID</h2></th>
<th><h2>Position Name</h2></th>
</tr>

<?php
//loop through all table rows
while ($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['position_id']."</td>";
echo "<td>" . $row['position_name']."</td>";
echo '<td><a href="positions.php?id=' . $row['position_id'] . '" onClick="callalert()">Delete Position</a></td>';
echo "</tr>";
}
mysqli_free_result($result);
mysqli_close($link);
?>
</table>
<hr>
</div>
<div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; 2016 e-Polling System. All Rights Reserved</p>
	 <p class="rf">Design by Anit kumar MCA 4th sem</a></
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>