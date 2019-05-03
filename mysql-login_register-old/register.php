
２．在html的之間要放入表單
<form action="register.php" method="post">
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

<?php
if (!isset($_POST['submit'])){
	register();
}
function register(){
	//登入資料庫
	$server = 'localhost';
	$user = 'root';
	$pass = '';
	$database = 'test';
	$conn = mysqli_connect($server, $user, $pass, $database);
	$conn->set_charset("utf8");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	//把密碼用md5加密
	$account = $_POST['account'];
	$password = md5($_POST['password']);

	//把帳號密碼分別寫入資料庫的account和password欄位
	$sql = ("INSERT INTO student (account,password) VALUES ('$account','$password')");

	//$mysql_query($conn, $sql);
	$result = $conn->query($sql);
	if($result === TRUE) {
		echo "New record created successfully";
	}else{
		//echo mysql_error($conn);
		$errorCode = mysqli_errno($conn);
		//echo "error code:"."$errorCode"."<br>";
		if($errorCode == 1062){
			echo "Duplicate account! Please enter another account.";
		}
		//echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>
