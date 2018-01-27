<?php
include 'menu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">Forgot Password</h2>
<div id='leftcontent'>
<div class= 'recentquestions'>
<?php
SESSION_START();
if(isset($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0	)
{
echo "<header>
<h1> Errors</h1>
</header>";
	
echo "<table cellpadding=\"5\" style=\" color: red;\">";
foreach($_SESSION['ERRMSG_ARR'] as $msg) 
{
echo "<tr>";
echo" <td>";
echo $msg;
echo "</td>";
echo "</tr>";
}
echo "</table>";
unset($_SESSION['ERRMSG_ARR']);

}

?>
</div>
</div>
<div id ='middlecontent'>
<div class= 'questionsanswers'>
<header>
<h1> Type your Email</h1>
</header>
<div id ="signup" style="text-align:center;">
<?php Echo "<p style=\"font-size: 18px; color:#00853E; text-align: center;\">".$_SESSION['successmessage']."</p>";
	unset($_SESSION['successmessage']);?>
<form method="post" action="forgot-exec.php">
				<input id="email" value="email"  name="email" type="text" onfocus="if(this.value == 'email') {this.value = '';}"
							onblur="if (this.value == '') {this.value = 'email';}" /><br><br><br>
				<input type="image" src="submit.png" alt="Submit Form" />
</form>
				<br><br>
	
</div>
</div>
</div>

<div id= 'rightcontent'>
<div class= 'trendingquestions'>
<?php
if(isset($_SESSION['namefound']) && !isset($_SESSION['ERRMSG_ARR']) )
{
echo "<header>
<h1> Type your Pasword</h1>
</header>";

	echo "<form method=\"post\" action=\"changepassword-exec.php\">
				New Password <input id=\"password\" value=\"\"  name=\"newpassword\" type=\"password\" onfocus=\"if(this.value == 'Newpassword') {this.value = '';}\"
					onblur=\"if (this.value == '') {this.value = 'Newpassword';}\" /><br><br>
				Re-Enter Password <input id=\"password\" value=\"\"  name=\"reenternewpassword\" type=\"password\" onfocus=\"if(this.value == 'Re enter newpassword') {this.value = '';}\"
					onblur=\"if (this.value == '') {this.value = 'Re enter newpassword';}\" /><br><br>
				<input type=\"image\" style=\"margin-left: 90px;\" src=\"submit.png\" alt=\"Submit Form\" />
</form>";
}
unset($_SESSION['ERRMSG_ARR']);unset($_SESSION['namefound']);
?>
</div>
</div>
</div>
</div>
<div id="container" style="visibility:hidden;">
	<div id="footer">
	 <p>Did not find the answer to the question you are looking for.Ask us a question we'll respond question</p>
	
	</div>
</div>
<div id="containerfooter">
<div id="mainfooter">
<ul class="menu" id="navfoot" style="padding-left: 0px;">
			<li style="padding-right: 0px; width: 100px;"><a href="home.php" onclick="direct('')" >Home</a></li>
			<li style = "width: 100px;"><a href="aboutus.php" onclick="direct('')">About us</a></li>
			<li style = ""><a href="entertainment.php" onclick="direct('')">Entertainment</a></li>
			<li style = "width: 112px;"><a href="education.php" onclick="direct('')">Education</a></li>	
			<li style = "margin-left: 0px; width: 100px;"><a href="food.php" onclick="direct('')">Food</a>
			<li style = "margin-left: 0px; width: 103px;height: 65px;"><a href="health.php" onclick="direct('')">Health</a>
			<li style = "height: 65px;"><a href="misc.php" onclick="direct('')">Miscellanious</a>
				</li>
			<li><a href="contact.php" onclick="direct('')">Contact Us</a></li>		
			<li style="border-right: 0px solid;"><a href="question.php" onclick="direct('')">Ask a Question</a></li>			
</ul>
		<br><br>
Wehaveanswers CopyRights Reserved @2014

</div>
</div>