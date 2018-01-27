<?php
include 'menu.php';
?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">Entertainment</h2>


<div id='leftcontent'>
<div class= 'recentquestions'>
<header>
<h1> Recent Questions</h1>
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
	
	$qry ='select questions.question,questions.qid,questions.timeposted as questiontime  from questions where questions.category = \'entertainment\' and state = 0 order by questiontime desc';
	$result =mysql_query($qry);
	if($result)
	{
		echo "<table cellpadding=\"2\">";
		$count =1;
		if(mysql_num_rows < 1)
		{
			while($member =mysql_fetch_array($result))
			{
				echo "<tr>";
						
				echo "<td style=\"font-size: 15px;\"> <a href=\"moreaboutquestion.php?qid=".$member['qid']."\">".$count.". " .$member['question']."</a>";echo "</td>";
				echo "</tr>";
				
				echo "<tr>";
				echo "<td style=\"font-size: 11px;\"> Posted on:".$member['questiontime']."</td>";
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
?>
</div>
</div>
<div id ='middlecontent'>
<div class= 'questionsanswers'>

<header>
<h1>Popular Questions</h1>
</header>

<?php
$qry =' select questions.question,questions.qid,answers.aid,SUBSTRING(answers.answers, 1, 76) as answers ,questions.timeposted as questiontime,answers.timeposted as answertime,questions.questionedby from questions,answers where questions.category = \'entertainment\' and  questions.qid=answers.questionid and state =0  group by question';
	
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
				echo "<tr>";
						
				echo "<td style=\"font-size: 14px;\"> Answer: ";echo $member['answers'];echo "<a href=\"moreaboutquestion.php?qid=".$member['qid']."\"> More...</a>";echo "</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td style=\"font-size: 11px;\">Answered on:".$member['answertime']."</td>";
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
?>

</div>

</div>

<div id= 'rightcontent'>
<div class= 'trendingquestions'>
<header>
<h1> Trending Questions</h1>
</header>

<?php
$qry ='select questions.question,questions.qid,questions.timeposted as questiontime  from questions where questions.category = \'entertainment\' and state = 0 and questions.views > 5';
	

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
?>

</div>
</div>

</div>
</div>

<div id="container">
	<div id="footer">
	<p>Did not find the answer to the question you are looking for.<a href="question.php"> Ask us a question</a> we'll respond question</p>
	
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