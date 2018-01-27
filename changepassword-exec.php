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
	$errmsg_arr = array();


	$errflag = false;

	$newpassword = $_POST['newpassword'];
	$renewpassword= ($_POST['reenternewpassword']);

  if($newpassword == '' || $email == 'Newpassword')
	{
		$errmsg_arr[] = 'Password Missing missing';
		$errflag = true;
	}

if( strcmp($newpassword, $renewpassword) != 0 )
	{
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}


	if(!$errflag)
	{

		$qry = "update userinformation set password ='".md5($newpassword)."' where FirstName= '".$_SESSION['name']."' and Email = '".$_SESSION['email']."'";
		//echo $qry;
		$result = @mysql_query($qry);
		echo "<script> alert('password change Successful.Please Relogin '); 		window.location.href='home.php';		</script>";
	}
	else
	{
		$errmsg_arr[]='Problem in changing password .please try again latter';
		$errflag=true;

	}



	if($errflag)
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: forgotpassword.php");
		exit();
	}



?>
