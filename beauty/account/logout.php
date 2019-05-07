<?php
	session_start();
	unset($_SESSION["username"]);
	unset($_SESSION["password"]);
   
	echo 'You have cleaned session';
   //header('Refresh: 2; URL = login.php');
	header("Location:index.php" );
?>
<br>
<a href = "../index.php" tite = "Index">Click here to Homepage</a>.