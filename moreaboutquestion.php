<?php
include 'menu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">More About the Question</h2>
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
	
$_SESSION['questionid']=$_GET['qid'];
$qry ='(select firstname from userinformation,questions where questionedby = id and qid='.$_SESSION['questionid'].') union all (select firstname from userinformation,answers where answeredby = id and questionid='.$_SESSION['questionid'].')';
	
	
	$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"5\">";
		$count =1;
			$count1 =1;
		
			while($member =mysql_fetch_array($result))
			{
				echo "<tr>";
				if($count ==1)
				{				
				echo "<td style=\"font-size: 15px;\">Question 	$count Posted by:"; echo $member['firstname'];echo "</td>";
				$postedname=$member['firstname'];
				echo "</tr>";
				echo "<tr>";
				$count ++;
				}
				else{
				
				echo "<td style=\"font-size: 15px;\">Answered 	$count1  by : ";echo $member['firstname'];echo "</td>";
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

include 'views.php';
?>


</div>
</div>
<div id ='middlecontent'>
<div class= 'questionsanswers'>
<header>
<h1>More About the Question </h1>
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
	
$_SESSION['questionid']=$_GET['qid'];
$qry ='(select question,questions.timeposted as questiontime from questions where qid='.$_SESSION['questionid'].') union all (select answers,answers.timeposted as answertime from answers where questionid='.$_SESSION['questionid'].')';
	
	
	$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"5\">";
		$count =1;
			$count1 =1;
			while($member =mysql_fetch_array($result))
			{
				echo "<tr>";
				if($count ==1)
				{				
				echo "<td style=\"font-size:15px ;line-height: 23px;display:block;color:blue; \">Question $count Posted :</br>"; echo $member['question']."</td>";
				echo "</tr>";
				echo "<tr>";
				$count ++;
				}
				else{		
				echo "<td style=\"display: table-cell; color: rgb(14, 34, 51); font-size: 14px; line-height: 23px;\">Answer $count1:</br> ";echo $member['question']."</td>";
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
&nbsp <strong> Would you like to improve answer or add something to the answer?</strong>
<br/></br>
<form method="post" action="postyouranswer.php">
<input  type="image" src="button.png" alt="Submit Form" /></form>
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'><img style =\"float: right; margin-top: -43px;\" src=\"back.png\" ></img></a>"?>
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

