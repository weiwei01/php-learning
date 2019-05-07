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
<h3>密碼修改</h3>

<?php include("account/modifiedPsw.php") ?>
<form action="#" method="post">
<table width="500" border="0">
	<tr>
		<td> </td>
		<td>帳號</td>
		<td><label for="textfield"></label>
		<input type="text" name="account" value="<?php echo $userName;?>"/></td>
	</tr>
	<tr>
		<td> </td>
		<td>密碼</td>
		<td><label for="textfield"></label>
		<input type="text" name="new_password"/></td>
	</tr>
	<tr>
		<td> </td>
		<td> </td>
		<td><input type="submit" name="modified" id="button" value="送出" /></td>
	</tr>
</table>

</form>
	
</div>

<?php include("includes/footer.php");?>

</body>
</html>