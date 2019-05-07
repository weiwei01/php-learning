<?php
   ob_start();
   session_start();
?>

<div class = "container form-signin">
<?php
	$msg = '';
	if (isset($_SESSION['username'])) {
		echo "hi! ".$_SESSION['username']." ";
		echo "&nbsp;";
		echo "<a href =modifiedPassword_page.php tite = modifiedPassword>Modified Psw</a>.";
		echo "&nbsp;";
		echo "<a href =account/logout.php tite = Logout>Log out</a>.";

	} else{
		//echo "Login.";
		echo "<a href=login_page.php>Login</a>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;";
		//echo "Register.";
		echo "<a href=register_page.php>Register</a>";
	}
?>
</div> <!-- /container -->
