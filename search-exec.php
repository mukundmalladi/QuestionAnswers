<?php
include 'menu.php';

?>
<div id='container' >
<div id= 'mainContent'>
<br>
&nbsp You are Here :<h2 style="margin-top: -20px; margin-left: 105px;">Search Results</h2>
<div id='leftcontent' style="width: 300px;">
<div class= 'recentquestions'>
</div>
</div>
<div id ='middlecontent'>
<div class= 'questionsanswers'>

<header>
<h1>Search Results</h1>
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

//Used for storing errors
$search =$_POST['search'];

	if($search != '' || $search != 'search' && $search  != null )
	{
	$searchqry = "select question,qid,timeposted from questions where state <> 1 and question like '%".$search ."%'";
	$searchanswers = "select answers,aid,questionid from answers where answeredby <> 1 and answers like '%".$search ."%'";
	echo "You Searched for <b><u>".$search."</u></b> yielded the following results <br>";
	$result= mysql_query($searchqry);
		$resultanswers =mysql_query($searchanswers);
	if($result)
	{
		echo "<table cellpadding=\"5\">";
		if(mysql_num_rows($result) > 0)
		{
			$count=1;
			echo"<tr><td>";echo "Results from Questions:";echo"</td></tr>";
			while($member = mysql_fetch_array($result))
			{
				echo"<tr>";
				
				echo "<td style=\"font-size: 15px;\"><a href=\"moreaboutquestion.php?qid=".$member['qid']."\">".$count.". " .$member['question']."</a>"; echo "</br>";echo "</td>";
								echo"</tr>";
				$count++;
			}
			echo"<tr><td>";echo "Results from Answers:";echo"</td></tr>";
			while($memberans = mysql_fetch_array($resultanswers))
			{
				echo"<tr>";
				
				echo "<td style=\"font-size: 15px;\"><a href=\"moreaboutquestion.php?qid=".$memberans['questionid']."\">".$count.". " .$memberans['answers']."</a>"; echo "</br>";echo "</td>";
				echo"</tr>";
				$count++;
			}
			
		}
		else
		{
			echo  "<p style=\"font-size: 18px; color:blue; text-align: center;\">No Results Found</p>";
			echo  "<p style=\"font-size: 18px; color:#00853E; text-align: center;\">Did not find what you are searching for?  Ask us a Question !!! </p>";
			echo  "<br><p style=\"font-size: 18px; color:#00853E; text-align: center;\">New to this place ?Sign Up .Its free</p>";
		}
		echo "</table>";
	}
	else
	{
		echo "query failed";
	}
	}
	else
	{
		echo  "<p style=\"font-size: 18px; color:blue; text-align: center;\">No Results Found</p>";
			echo  "<p style=\"font-size: 18px; color:#00853E; text-align: center;\">Did not find what you are searching for?  Ask us a Question !!! </p>";
			echo  "<br><p style=\"font-size: 18px; color:#00853E; text-align: center;\">New to this place ?Sign Up .Its free</p>";
	}
	

?>

</div>
</div>
</div>
</div>

<div id="container" >
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
CopyRights Reserved @Wehaveanswers

</div>
</div>