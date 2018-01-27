<?php
session_start();

unset($_SESSION['id']);

session_destroy();
		echo "<script>
					alert('Successfully LoggedOut');
						window.location.href='home.php';
			</script>";
			
?>