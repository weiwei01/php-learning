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
<h3>會員註冊</h3>
<h6>在您註冊之前, 請先閱讀本站的服務條款, 請勿使用真實姓名、注音、表情符號做為帳號名稱。

</h6>

<form action="account/register.php" method="post">
<table width="500" border="0">
	<tr>
		<td> </td>
		<td>帳號</td>
		<td><label for="textfield"></label>
		<input type="text" name="account"/></td>
	</tr>
	<tr>
		<td> </td>
		<td>密碼</td>
		<td><label for="textfield"></label>
		<input type="text" name="password"/></td>
	</tr>
	<tr>
		<td> </td>
		<td> </td>
		<td><input type="submit" name="submit_name" id="button" value="送出" /></td>
	</tr>
</table>

</form>
	
</div>

<?php include("includes/footer.php");?>

</body>
</html>