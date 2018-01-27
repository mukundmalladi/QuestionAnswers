<?php

session_start();
$check = $_GET['q'];
if(!$_POST['state'])
{
$checkstate =1;
}
else
{
$checkstate =0;
}
echo $checkstate;
$checkcategory =$_POST['category'];
$link = mysql_connect('', '', '');
if (!$link)
  {
  echo "Failed to connect to MySQL: " .mysql_error();
  }
  
  $db = mysql_select_db('');
	if(!$db) {
		die("Unable to select database");
	}
	if($check == 1)//then the query is question
	{
		
$_SESSION['question'] =$_POST['message'];

$qry ="insert into questions (question,questionedby,category,state) values ('".$_SESSION['question']."',".$_SESSION['id'].",'$checkcategory',$checkstate)";
echo $qry;
@mysql_query($qry);
if($checkstate == 0 )
{
 $_SESSION['successmessage']="You Question was Successfully Posted.You can find your question in the <u> $checkcategory </u> category";
 }
 else
 {
	$_SESSION['successmessage']="You Question was Successfully Posted.";
 }
header( 'Location: question.php' ) ;
	}
	else//else answer
	{
$_SESSION['answer'] =$_POST['message'];
$qry ="insert into answers (questionid,answers,answeredby) values (".$_SESSION['questionid'].",'".$_SESSION['answer']."',".$_SESSION['id'].")";

@mysql_query($qry);
if($_SESSION['id'] ==1)
{
 $_SESSION['successmessage']="You Answer was Successfully Posted";
header( 'Location: postyouransweradmin.php' ) ;
}
else
{
 $_SESSION['successmessage']="You Answer was Successfully Posted";
header( 'Location: postyouranswer.php' ) ;
}
}



?>