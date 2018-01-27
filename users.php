<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="description" content="Untangled" />
<meta name="keywords" content="Untangled UNT Gayatri Mehta Brandon Rodgers Krunal Patel Carson Crawford Greg Amato" />

<script src="../Scripts/linkReference.js" type="text/javascript" ></script>
<script src="../Scripts/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="../Scripts/jquery.ui.draggable.js" type="text/javascript"></script>
<script src="../Scripts/jquery.alerts.js" type="text/javascript"></script>
<script src="../Scripts/replaceT.js" type="text/javascript" ></script>

<script> 

function myFunction(){
	var checked=false;
	var checked1=false
	var elements = document.getElementsByName("checkboxvar[]");
	var elements1 = document.getElementsByName("checkboxvar1[]");
	for(var i=0; i < elements.length; i++){
		if(elements[i].checked) {
			checked = true;
		}
	}
	for(var i=0; i < elements1.length; i++){
		if(elements1[i].checked) {
			checked1 = true;
		}
	}
	if(checked == true || checked1 == true)
	{

		if (!checked) {
			if(confirm("You are about to delete Question.\nAre You Sure You Want to Proceed?\nThe corresponding answers will also be deleted."))
		   {
				return true;
			}
			else
			{
			 $(this).removeAttr('checked');
				return false;
	 
			}
		}
	}
	else{
	alert('Please select to delete');
	return false;
	}
	
}


</script>

</head>
<?php
include 'adminmenu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">List of Users</h2>
<div id ='leftcontent'>
<div class= 'questionsanswers' style="width: 230px;">




</div>
</div>
<div id ='middlecontent' style="width:775px;">
<div class= 'questionsanswers'>
<header>
<h1> </h1>
</header>


<?php
session_start();
Echo "<p style=\"font-size: 18px; color:#00853E; text-align: center;\">".$_SESSION['successmessage']."</p>";
	unset($_SESSION['successmessage']);
unset($_SESSION['successmessage']);
$link = mysql_connect('', '', '');
if (!$link)
  {
  echo "Failed to connect to MySQL: " .mysql_error();
  }
  
  $db = mysql_select_db('');
	if(!$db) {
		die("Unable to select database");
	}
	
$qry ='select * from userinformation';
		$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"10\" border=\"2\" style=\"margin-left: 198px;\">";
		$count =1;
			$count1 =1;
			echo "<th>Name</th><th> Email</th>";
			while($member =mysql_fetch_array($result))
			{
				
				echo "<tr>";
				echo "<td style=\"font-size: 15px;\"> ";echo $count.".    ". $member['FirstName'].$member['LastName'];
							
				$count++;
				
				echo "</td>";
				echo "<td style=\"font-size: 15px;\"> ";echo $member['Email'];
							
				
				
				echo "</td>";
				echo "</tr>";
			 //$count++;
			}
		
		
		echo "</table>";
	}
else
{
echo "queryfailed";
}

?>


</div>
</div>


</div>
</div>
</div>

<div id="container" style="visibility:hidden;">
	<div id="footer">
	 <p>Did you find the answer for the question you are looking for. If not ask us a question</p>
	
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