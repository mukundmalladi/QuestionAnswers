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
include 'menu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">Ask us a Question</h2>
<?php
if(ISSET($_SESSION['id']))
{?>
<div id ='leftcontent' >
<div class= 'questionsanswers'>
<header>
<h1>Your Private Questions</h1>
</header>
<?php
$link = mysql_connect('', '', '');
if (!$link)
  {
  echo "Failed to connect to MySQL: " .mysql_error();
  }

  $db = mysql_select_db('');
	if(!$db) {
		die("Unable to select database");
	}
$qry =$qry ='select question,questions.timeposted as questiontime,qid from questions where state=1 and questionedby='.$_SESSION['id'];

	//echo $qry;
	$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"5\">";
		$count =1;
		if(mysql_num_rows < 1)
		{
			while($member =mysql_fetch_array($result))
			{
				echo "<tr>";

				echo "<td style=\"font-size: 15px;\"><a href=\"moreaboutquestion.php?qid=".$member['qid']."\">".$count.". " .$member['question']."</a>"; echo "</br>";echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td  style=\"font-size: 11px;\"> Posted on:".$member['questiontime']."</td>";
				echo "</tr>";
			 $count++;
			}
		}
		else
		{
		echo "<tr>";

			echo "<td>";
			echo "No Recently Posted Questions";
			echo "</td>";

			echo "</tr>";
		}

		echo "</table>";
	}
else
{
echo "queryfailed";
}
echo "</form>";
?>


</div>
</div>
<div id ='middlecontent'>
<div class= 'questionsanswers'>
<header>
<h1>Post Your Question </h1>
</header>
<?php
Echo "<p style=\"font-size: 18px; color:#00853E; text-align: center;\">".$_SESSION['successmessage']."</p>";
	unset($_SESSION['successmessage']);

	echo "<div id =\"post\" style=\"color: white;  font-size: 18px; margin:0 auto; width:340px;\">
				<form onsubmit= \"return myFunction()\"  method=\"post\" action=\"postanswer-exec.php?q=1\">
				<textarea id=\"message\" name=\"message\" rows=\"15\" cols=\"40\"></textarea>
				<p style=\"color:#0000FF;\">Make Public ?<input type=\"checkbox\" name=\"state\" value=\"public\" checked></p>
				<p style=\"color:#0000FF;\"><tr><th> Select the Category <td>
				<select id=\"category\" size=\"1\" name=\"category\" value=\"Category\">
     <option>General</option>
	 <option>Entertainment</option>
   <option>Education</option>
   <option>Health</option>
   <option>Food</option>
   <option>Transport</option>
   <option>Grocery</option>
   </td></th></tr></p>
   </br></br>
				<input style=\"margin-left: 50px; margin-top: 25px;\" type=\"image\" src=\"postyourquestion.png\" alt=\"Submit Form\" />
				</form>

	</div>	";
echo "<a href =\"delete.php\" style=\"margin-left: 111px;\" ><img src=\"delete.png\" value=\"Click to delete\" style=\"margin-left: -100px; padding-right: 150px;\" /></img></a>";
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'><img src=\"back.png\" ></img></a>"
?>
</div>
<header>
<h2>Notes </h2>
</header>
<br>
<table cellpadding="5" font-size="14" >
<tr>
<td>1</td><td>You can see your previous posted questions on the right.</td>
</tr>
<tr>
<td>2</td><td>You can delete question or and  answers of any question by clicking on the question.</td>
</tr>
<tr>
<td>3</td><td>Once delete the data cannot be retrieved.</td>
<tr>
<td>4</td><td>Making a question public make the question visible to everyone.If make private the admin will answer you.</td>
</tr>
</table>
<br><br><br>
</div>
<!--<input type=\"checkbox\" id=\"state\" name=\"state\" value=\"Yes\" checked>
				<label for=\"state\">Uncheck to Make Answer Private</label>-->
<div id= 'rightcontent'>
<div class= 'trendingquestions'>
<header>
<h1>Your Public Questions</h1>
</header>


<?php
$qry ='select question,questions.timeposted as questiontime,qid from questions where state = 0 and questionedby='.$_SESSION['id'] ;


	$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"5\">";
		$count =1;

			while($member =mysql_fetch_array($result))
			{
				echo "<tr>";

				echo "<td style=\"font-size: 15px;\"><a href=\"moreaboutquestion.php?qid=".$member['qid']."\">".$count.". " .$member['question']."</a>"; echo "</br>";echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td  style=\"font-size: 11px;\"> Posted on:".$member['questiontime']."</td>";
				echo "</tr>";
			 $count++;
			}


		echo "</table>";
	}
	else
		{
			echo "queryfailed";
		}

}

	else{
	echo "<p style=\"font-size: 18px; color: rgb(0, 0, 0); text-align: center;\">

	Please login to question</p>";}

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
