
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

</head><body>
<center><b> <div id="header">    

</div>
<div class ="nav">
<h2 style="margin-top:-5px"> Try Re Logging In </h2>
</div>

<div class="background">

<?php
session_start();
session_destroy();
?>
<h3>You have been successfully logged out.<br><br><br>
Return to</h3> <a class='c1' href="login.html"><h2>Login<h2></a>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2015 Online Polling System. All Rights Reserved</div>
</div>
</div>
</body></html>