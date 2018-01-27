<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script src='Scripts/linkReference.js' type="text/javascript" ></script>
<script src="Scripts/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="Scripts/jquery.ui.draggable.js" type="text/javascript"></script>
<script src="Scripts/jquery.alerts.js" type="text/javascript"></script>
<script src="Scripts/replaceT.js" type="text/javascript" ></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript"> 
$(document).ready(function() {

</script>
<title> Data Base Project </title>
<div id="navigation">
	
	<a href="Welcome.php"><img src="header.jpg" alt="titleofnav" style="height: 100px;width: 140px;"/></a>

</div>

<title> Data Base Project </title>
<div id="registrationfail">
<?php
session_start();
foreach($_SESSION['ERRMSG_ARR'] as $msg) 
				{
					echo '<li>',$msg,'</li>'; 
				}
echo "Please RE-Registrar";
?>
<button onclick="window.location.href='home.php'">Click Here for Registering</button>

</div>
</html>