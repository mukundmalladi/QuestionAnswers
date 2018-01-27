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

function myFunction()
{
 
var mystring = document.getElementById('message').value; 

    if(!mystring.match(/\S/)) 
	{
        alert ('Empty value is not allowed');
        return false;
    } 
	else 
	{
       if(confirm("Are You Sure You Want to Post"))
	   {
			return true;
		}
		else
		{
			return false;
 
		}
    }

}

</script>
<?php
include 'adminmenu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<div id ='leftcontent'>
<div class= 'questionsanswers'>
<header>
<h1>Contributors </h1>
</header>

<?php
session_start();
$link = mysql_connect('', '', '');
if (!$link)
  {
  echo "Failed to connect to MySQL: " .mysql_error();
  }
  
  $db = mysql_select_db('');
	if(!$db) {
		die("Unable to select database");
	}
	

$qry ='(select FirstName from userinformation,questions where questionedby = id and qid='.$_SESSION['questionid'].') union all (select FirstName from userinformation,answers where answeredby = id and questionid='.$_SESSION['questionid'].')';


	$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"5\">";
		$count =1;
			$count1=1;
			while($member =mysql_fetch_array($result))
			{
				echo "<tr>";
				if($count ==1)
				{				
			echo "<td style=\"font-size: 15px;\">Question Posted by:"; echo $member['FirstName'];echo "</td>";
				echo "</tr>";
				echo "<tr>";
				$count ++;
				}
				else{		
			echo "<td style=\"font-size: 15px;\">$count1 Answered  by : ";echo $member['FirstName'];echo "</td>";
				echo "</tr>";
					$count1 ++;
				}
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
<div id ='middlecontent' style="width:775px;">
<div class= 'questionsanswers'>
<header>
<h1>Post Your Answer </h1>
</header>
<?php
if(ISSET($_SESSION['id']))
{
	Echo "<p style=\"font-size: 18px; color:#00853E; text-align: center;\">".$_SESSION['successmessage']."</p>";
	unset($_SESSION['successmessage']);
	echo "<div id =\"post\" style=\"color: white;  font-size: 18px; margin:0 auto; width:340px;\">
				<form onsubmit= \"return myFunction()\"  method=\"post\" action=\"postanswer-exec.php?q=0\">
				<textarea id=\"message\" name=\"message\" rows=\"15\" cols=\"40\"></textarea></br></br>
				<input style=\"margin-left: 50px;\" type=\"image\" src=\"postyouranswer.png\" alt=\"Submit Form\" />
				</form>
			
	</div>	";
	}
	else{
	echo "<p style=\"font-size: 18px; color: rgb(0, 0, 0); text-align: center;\">
	
	Please login to Answer the question</p>";}
?>
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