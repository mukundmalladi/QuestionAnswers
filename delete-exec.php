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
$questarr = $_POST['checkboxvar1'];
$ansarr=$_POST['checkboxvar'];
$ispublic = $_GET['public'];
// echo $ispublic;
print_r($ansarr);
print_r($questarr);
if(ISSET($ansarr))
{
echo "m";
foreach($ansarr as &$value)
{
$qry="delete from answers where aid=".$value;
echo $qry;
@mysql_query($qry);
 $_SESSION['successmessage']="You Answers are Successfully Deleted";
header( 'Location: question.php' ) ;
}
}
//deleteing questions
foreach($questarr as &$value1)
{
$qry1="delete from questions where qid=".$value1;
@mysql_query($qry1);
$qry2="delete from answers where questionid=".$value1;
@mysql_query($qry2);
$_SESSION['successmessage']="You Questions/Answers are Successfully Deleted";
}
echo $_SESSION['id'];
if($_SESSION['id'] == 1)
{
	echo $ispublic;
	if($ispublic == 1)
	{
		header( 'Location: publicquestions.php' ) ;
	}
	else 
	{
		header( 'Location: private.php' ) ;
	}
}
else
{
header( 'Location: delete.php' ) ;
}
?>