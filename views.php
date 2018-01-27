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
	

$qry ='select views from questions where qid='.$_SESSION['questionid'];
	
	
	$result =mysql_query($qry);
	if($result)
	{	while($member =mysql_fetch_array($result))
			{
				$views= $member['views']+1;
			}
		
	}
else
{
echo "queryfailed";
}
$qry ='update questions set views = '.$views.' where qid='.$_SESSION['questionid'];

	@mysql_query($qry);	
?>