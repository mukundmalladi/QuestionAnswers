<?php
include 'menu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
<script>
function clearContents(element) {
  element.value = '';
}
</script>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">Contact us</h2>
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
<div id ="signup" style="text-align:center;">
<?php Echo "<p style=\"font-size: 18px; color:#00853E; text-align: center;\">".$_SESSION['successmessage']."</p>";
	unset($_SESSION['successmessage']);?>
<form method="post" action="contact-exec.php">
				<input id="username" value="Full Name" name="name" type ="text" onfocus="if(this.value == 'Full Name') {this.value = '';}"
							onblur="if (this.value == '') {this.value = 'Full Name';}" /><br/>
				<br/>
				<input id="email" value="email"  name="email" type="text" onfocus="if(this.value == 'email') {this.value = '';}"
							onblur="if (this.value == '') {this.value = 'email';}" /><br >
				<br/>
				<input id="subject" value="subject"  name="subject" type="text" onfocus="if(this.value == 'subject') {this.value = '';}"
							onblur="if (this.value == '') {this.value = 'subject';}" /><br/>
				<br/>
				
				<textarea  onfocus="clearContents(this);" name="message" value ="" rows="15" cols="40">Please type your message</textarea><br /><br/>
				
				<input type="image" src="submit.png" alt="Submit Form" />
				</form>
				<br><br>
	
</div>
</div>
</div>

<div id= 'rightcontent'>
<div class= 'trendingquestions'>

</div>
</div>
</div>
</div>
<div id="container" style="visibility:hidden; ">
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