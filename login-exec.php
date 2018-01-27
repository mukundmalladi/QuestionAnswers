<?php
session_start();

$link =  mysqli_connect("127.0.0.1", "my_user", "my_password", "my_db");
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
	//clean values
	function clean($str)
	{
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}

	//cleaning the POST values
	$username= clean($_POST['username']);
	$password = clean($_POST['password']);

	//Input Validations
	if($username == '' || $username == 'Username' ) {
		$errmsg_arr[] = 'Username is missing';
		$errflag = true;
	}
	if($password == '' || $password == 'Password' ) {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}


$link = mysql_connect('', '', '');
if (!$link)
  {
  echo "Failed to connect to MySQL: " .mysql_error();
  }

  $db = mysql_select_db('');
	if(!$db)
	{
		die("Unable to select database");
	}

	//Check for duplicate login ID OR Email
	if($errflag == false)
	{
		$qry = "SELECT * FROM userinformation WHERE FirstName ='$username'";

		//echo $qry;
		$result = mysql_query($qry);
		$member = mysql_fetch_array($result);
		if($result)
		{
			if($member['Password']==md5($password))
				{
					session_regenerate_id();
					$_SESSION['id'] = $member['Id'];
					$_SESSION['name'] = $member['FirstName'];
					//echo $_SESSION['id'];
					session_write_close();
					if($_SESSION['id'] == 1  && $_SESSION['name'] == 'Mukund')
					{
					header("Location:adminhome.php");
					}
					else
					{
						header('Location: ' . $_SERVER['HTTP_REFERER']);
					}

					exit();
				}
				else
				{
					$errmsg_arr[]= 'Please check your password';
					$errflag=true;
				}

		}
		else
		{

		$errmsg_arr[]= 'Please check your user name/Password';
		}
	}



	//if errors are there then send to loginfailed
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: Signupform.php");
		exit();
	}



?>
