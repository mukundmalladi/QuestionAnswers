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

		if(checked1 ==  true)
		{
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
include 'menu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">Delete Question/Answer</h2>
<div id ='leftcontent'>
<div class= 'questionsanswers' style="width: 230px;">
<header>
<h1>Notes </h1>
</header>
<table cellpadding="10">
<tr>
<td>1</td><td>Check the answers you would like to delete.</td>
</tr>
<tr>
<td>2</td><td>You can delete answers of any question but if you delete a question all the answers will be automatically deleted.</td>
</tr>
<tr>
<td>3</td><td>Once delete the data cannot be retrieved.</td></table>

</div>
</div>
<div id ='middlecontent'>
<div class= 'questionsanswers'>
<header>
<h1>Select to Delete </h1>
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
	
$_SESSION['questionid']=$_GET['qid'];
$qry ='select question,questions.timeposted as questiontime,qid as questionid,state from questions where questionedby='.$_SESSION['id'] ;
	
	echo "<form name=\"delete\" method=\"post\" onsubmit= \"return myFunction()\" action =\"delete-exec.php\">";
	$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"5\" border=\"1\">";
		$count =1;
			$count1 =1;
			while($member =mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $member['question'];
				echo "<p ><input type=\"checkbox\" name=\"checkboxvar1[]\"  id= \"checkquestion\" value=".$member['questionid']."></p>";
				$count++;
							
				$qry1='select answers,aid from answers where questionid='.$member['questionid'];
				
				$result1 =mysql_query($qry1);
				if($result1)
				{
					if(mysql_num_rows($result1) > 0)
					{
					
						while($member1 =mysql_fetch_array($result1))
						{
							echo "Answers to the question </br></br>";
							echo $member1['answers'];
							echo "<p style=\"color:blue;\"><input type=\"checkbox\" name=\"checkboxvar[]\" value=".$member1['aid']."></p>";
							$count1++;
							echo "</br>";
						}
					}
					else
					{
						echo "no Answers";
					}
					echo "</td>";
				}
				else
				{
					echo "queryfailed";
				}
										
				echo "</tr>";
			}
		echo "</table>";
	}
else
{
echo "queryfailed";
}
echo "</br><input type=\"image\" src=\"delete.png\" alt=\"Submit Form\" />";
echo "</form>";
echo "<a href=\"question.php\"><img src=\"back.png\" value=\"Click to delete\"  style=\"margin-left: 0px; float: right; margin-top: -41px;\"/></img> </a>";
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