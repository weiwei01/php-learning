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
<h3>確定刪除帳戶</h3>


<?php include("account/removeAccount.php") ?>
<form action="#" method="post">
<table width="500" border="0">
	<input type="submit" name="removeAccount" id="button" value="確定" />
	
</table>

</form>
	
</div>

<?php include("includes/footer.php");?>

</body>
</html>