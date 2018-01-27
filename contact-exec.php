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

	$fullname= $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	//to check if all values are correct
	if($fullname == '' || $fullname == 'Full Name')
	{
		$errmsg_arr[] = 'Name missing';
		$errflag = true;
	}
		if($email == '' || $email == 'email')
	{
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($subject == '' || $subject == 'subject')
	{
	    $errmsg_arr[] = 'Subject missing';
		$errflag = true;
	}
	if($message == '' )
	{
	    $errmsg_arr[] = 'Please type the message';
		$errflag = true;
	}


if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
 $errmsg_arr[] = 'E-mail is not valid';
		$errflag = true;
  }



	//Create INSERT query
	if(!$errflag)
	{

		$qry = "INSERT INTO contactus (Fullname,Email,Subject,Message) VALUES('$fullname','$email','$subject','$message')";
		$result = @mysql_query($qry);
	}
	else
	{
		$result = false;
	}

	//Check whether the query was successful or not
	if($result)
	{
		 $_SESSION['successmessage']="Thank you for sumbitting.We shall get back to you as soon as possible";
		header( 'Location: contact.php' ) ;

	}
	else
	{
		$errmsg[] = 'Contact submission failed, please try again';
		$errflag = true;
	}


	if($errflag)
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: contact.php");
		exit();
	}



?>
