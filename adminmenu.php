<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="google-translate-customization" content="c29b0c5ee16755c7-9df7320f24601402-g5b126406bf21a0a8-34"></meta>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script src='../Scripts/replaceT.js' type="text/javascript" ></script>
<script src='../Scripts/linkReference.js' type="text/javascript" ></script>
<script src="../Scripts/jquery.1.7.1.min.js"></script>
<title>Wehaveanswers</title>
</head>
<body >


<div id = "nav-bar">
	<div  id="container">

<div id="navtop">
<div id="google_translate_element" style=" float: left; margin-right: 70px;padding-top: 6px;margin-top:8px;margin-right:205px;"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<div id="login">

<?php
session_start();

if	(!ISSET($_SESSION['id']))
{

echo "<form name=\"Login\" method=\"post\" action=\"login-exec.php\">
	<input name=\"username\" type=\"text\" id=\"username\" size=\"20\" value=\"Username\" onfocus=\"if(this.value == 'Username') {this.value = '';}\"
	onblur=\"if (this.value == '') {this.value = 'Username';}\" />
	<input name=\"password\" type=\"text\" id=\"password\"  size=\"20\"  value=\"password\" onfocus=\"replaceT(this)\"/>
							
		<input style=\"margin-left: 27px; margin-bottom: -8px;\" type=\"image\" src=\"Signin.png\" alt=\"Submit Form\" />
	</form>";	
	
	echo "<div id=\"logintools\"><a href=\"forgotpassword.php\" onclick=\"direct('')\">Forgot Password?</a> <a href=\"Signupform.php\" onclick=\"direct('')\">Sign Up</a></div>";
}
else
{
echo "<div id=\"logged-in\">";
						
echo "Welcome : ".$_SESSION['name'];  
echo "<form style=\"margin-top: -26px;\  method=\"post\" action=\"logout.php\">
		<input id=\"logout\"  type=\"image\" src=\"logout.png\" alt=\"Submit Form\" />
	</form>	";	
echo "</div>";
}
?>
</div>
</div>
		
	
		<div> <a href="adminhome.php" onclick= "direct('')"  id="logo"></a></div>
	    <img style="width: 412px; float: right; position: relative; top: 66px;" src="slogan.png" ></img>
	
		<ul class="menu" id="nav">
			<li style="margin-left: 74px;"><a href="adminhome.php" onclick="direct('')" >Home</a></li>
			<li style = "margin-left: 74px;"><a href="private.php" onclick="direct('')">Private Questions</a></li>
			<li style = "margin-left: 74px;"><a href="publicquestions.php" onclick="direct('')">Public Questions </a></li>
			<li style = "margin-left: 74px;"><a href="users.php" onclick="direct('')">List of users</a></li>	
			<li style = "margin-left: 74px;"><a href="contactadmin.php" onclick="direct('')">Contact Us</a></li>		
						
		</ul>
		

		</div>
	</div>
	</div>
	
 </body>
</html>