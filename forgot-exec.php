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
	
	$email = $_POST['email'];
	
		if($email == '' || $email == 'email') 
	{
		$errmsg_arr[] = 'Email missing';
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
		
		$qry = "select * from userinformation where email = '".$email."'";
		echo $qry;
		$result=mysql_query($qry);
		if($result)
		{
			if(mysql_num_rows($result) > 0)
			{
				while ($member=mysql_fetch_array($result))
				{
				echo "mukund";
					$_SESSION['name'] = $member['FirstName'];
					$_SESSION['email']=$member['Email'];
					$_SESSION['namefound'] = 'found';
		            header( 'Location: forgotpassword.php' ) ;
				 }
			}
			else
			{
				 $errmsg_arr[] = 'Did not find the email';
		        $errflag = true;
			}
		}
		else
		{
			echo "query failed";
		}
		
	}
	else
	{
		$result = false;
	}
		
	
	
	if($errflag) 
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: forgotpassword.php");
		exit();
	}
	
	
	
?>
