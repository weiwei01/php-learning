<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("check-login.php");?>
<?php include("includes/design-top.php");?>
<?php include("includes/navigation.php");?>


<div class="container" id="main-content">
	<?php include("account/login.php");?>
	<div class="card card-signin my-5">
		 <form class = "form-signin" role = "form" 
			action = "#" method = "post">
			<h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
			<input type = "text" class = "form-control" 
			   name = "username" placeholder = "username = Emily" 
			   required autofocus></br>
			<input type = "password" class = "form-control"
			   name = "password" placeholder = "password = 1234" required>
			<button class = "btn btn-lg btn-primary btn-block" type = "submit" 
			   name = "login">Login</button>
		 </form>
	</div>
	
</div>

<?php include("includes/footer.php");?>

</body>
</html>