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
	
	
	//Clean values
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
	$firstname= clean($_POST['FirstName']);
	$lastname= clean($_POST['LastName']);
	$email = clean($_POST['email']);
	$passwordretype = clean($_POST['retypepassword']);
	$password = clean($_POST['password']);
	$gender=clean($_POST['Gender']);
	$dateofbirth=$_POST['edoby']."-".$_POST['edobm']."-".$_POST['edobd'];
		
	//to check if all values are correct
	if($firstname == '' || $firstname == 'FirstName') 
	{
		$errmsg_arr[] = 'firstname missing';
		$errflag = true;
	}
	if($lastname == '' || $lastname == 'LastName') 
	{
		$errmsg_arr[] = 'lastname  missing';
		$errflag = true;
	}
	if($email == '' || $email == 'Email') 
	{
		$errmsg_arr[] = 'Email missing';
		$errflag = true;
	}
	if($password == '' || $password == 'password') 
	{
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($passwordretype == '' || $passwordretype == 'Re-Enter password') 
	{
		$errmsg_arr[] = 'Password missing in reenter';
		$errflag = true;
	}
	if($gender == '')
	{
		$errmsg_arr[] = 'Gender is missing';
		$errflag = true;
	}
	if($dateofbirth == 'Year-month-date')
	{
		$errmsg_arr[] = 'DOB is missing';
		$errflag = true;
	}
	if( strcmp($passwordretype, $password) != 0 ) 
	{
		$errmsg_arr[] = 'Password do not match';
		$errflag = true;
	}
		
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{   
		$errmsg_arr[] = 'Please enter a valid email';
		$errflag = true;
	}

if($gender ==0)
{
	$gen="Male";}
	else
	{$gen="Female";}
	
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
	if($firstname != '') 
	{
		$qry = "SELECT * FROM userinformation WHERE Email LIKE '$email'";
		
		$result = mysql_query($qry);
		
		if($result)
		{
			if(mysql_num_rows($result) > 0) 
			{
				$errmsg_arr[] = 'Login ID/Email already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else 
		{
			$errmsg[] = 'Registration failed, please try again';
			$errflag = true;
		}
	}
	
	
	//Create INSERT query
	if(!$errflag)
	{
		
		$qry = "INSERT INTO userinformation (Firstname,LastName,Email,Password,DataofBirth,Gender) VALUES('$firstname','$lastname','$email','".md5($password)."','$dateofbirth','$gen')";
		$result = @mysql_query($qry);
	}
	else
	{
		$result = false;
	}
		
	//Check whether the query was successful or not
	if($result) 
	{
	$qry = "SELECT * FROM userinformation WHERE FirstName ='$username'";
	$result = mysql_query($qry);
		$member = mysql_fetch_array($result);
		if($result) 
		{
				session_regenerate_id();
					$_SESSION['id'] = $member['Id'];
					$_SESSION['name'] = $member['FirstName'];
					
					session_write_close();
		}
		echo "<script>
					alert('Successfully Registered. For Security Reasons Please login again');
						window.location.href='home.php';
			</script>";
		
	}
	else
	{
		$errmsg[] = 'Registration failed, please try again';
		$errflag = true;
	}
		
	
	if($errflag) 
	{
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: Signupform.php");
		exit();
	}
	
	
	
?>
