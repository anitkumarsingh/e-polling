<script>
function callalert1()
{
	alert("Confirm to delete the selected candidate ?");
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
//retrive candidates from the tbcandidates table
$result=mysqli_query($link,"SELECT * FROM tbCandidates")
or die("There are no records to display ... \n" . mysqli_error($link)); 
if (mysqli_num_rows($result)<1){
    $result = null;
}
?>
<?php
// retrieving positions sql query
$positions_retrieved=mysqli_query($link,"SELECT * FROM tbPositions")
or die("There are no records to display ... \n" . mysqli_error($link)); 
/*
$row = mysql_fetch_array($positions_retrieved);
 if($row)
 {
 // get data from db
 $positions = $row['position_name'];
 }
 */
?>
<?php
// inserting sql query
if (isset($_POST['Submit']))
{
  $id = $_POST['position'];
  $result = mysqli_query($link,"SELECT position_id FROM tbpositions WHERE position_name='$id'");
  $row = mysqli_fetch_array($result);
  $position = $row['position_id'];

$newCandidateName = addslashes( $_POST['name'] ); //prevents types of SQL injection
$newCandidatePosition = addslashes( $_POST['position'] ); //prevents types of SQL injection

$sql = mysqli_query( $link,"INSERT INTO tbCandidates(position_id,candidate_name,candidate_position, candidate_cvotes) VALUES ('$position','$newCandidateName','$newCandidatePosition', 0)" )
        or die("Could not insert candidate at the moment". mysqli_error($link) );

// redirect back to candidates
 header("Location: candidates.php");
}
?>
<?php
// deleting sql query
// check if the 'id' variable is set in URL
 if (isset($_GET['id']))
 {
 // get id value
 $id = $_GET['id'];
 
 // delete the entry
 $result = mysqli_query($link,"DELETE FROM tbCandidates WHERE candidate_id='$id'")
 or die("The candidate does not exist ... \n"); 
 
 // redirect back to candidates
 header("Location: candidates.php");
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
	  
      <div class="logo">
        <h1><a href="index.html"><span><i> e-Polling System<i></span> <small>Smart way to cast your vote</small></a></h1>
      </div>
      <div class="clr"></div>
	  <!--
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/images/slide1.png" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide2.jpg" width="1500" height="1500" alt="" /> </a> <a href="#"><img src="images/slide3.jpg" width="1500" height="1500" alt="" /> </a> </div>
        <div class="clr"></div>
      </div> -->

<!--<center><b> <div id="header">    
<center><b>Online Polling System</font></b></center> -->
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
</div>
-->
<div class="background" style="height:1400px">
<h1> ADMINISTRATION CONTROL PANEL </h1>
<table width="380" align="center">
<CAPTION><h3>ADD NEW CANDIDATE</h3></CAPTION>
<form action="candidates.php" method="post" onsubmit="return candidateValidate(this)">
<tr>
    <td>Candidate Name</td>
    <td><input type="text" name="name" /></td>
</tr>
<tr>
    <td>Candidate Position</td>
    <!--<td><input type="combobox" name="position" value="<?php echo $positions; ?>"/></td>-->
    <td><SELECT REQUIRED NAME="position" id="position">
    <OPTION VALUE=''>select</OPTION>
    <?php
    //loop through all table rows
    while ($row=mysqli_fetch_array($positions_retrieved)){
    echo "<OPTION VALUE=$row[position_name]>$row[position_name]</OPTION>";
    //mysql_free_result($positions_retrieved);
    //mysql_close($link);
    }
    ?>
    </SELECT>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr></form>
</table>
<hr>
<table border="0" width="700" align="center">
<CAPTION><h3>AVAILABLE CANDIDATES</h3></CAPTION>
<tr>
<th>Position ID</th>
<th>Candidate ID</th>
<th>Candidate Name</th>
<th>Candidate Position</th>
</tr>

<?php
//loop through all table rows
while ($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<td>" . $row['position_id']."</td>";
echo "<td>" . $row['candidate_id']."</td>";
echo "<td>" . $row['candidate_name']."</td>";
echo "<td>" . $row['candidate_position']."</td>";
echo '<td><a href="candidates.php?id=' . $row['candidate_id'] . '" onClick="callalert1()">Delete Candidate</a></td>';
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
</div>
</div>
</body>
</html>