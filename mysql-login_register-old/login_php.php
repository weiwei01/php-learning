<?php
	header('Content-Type: text/html; charset=utf-8');
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	//require("conn_mysql.php");
	//$sql_query_login="SELECT * FROM employee where username='$username' AND password='$password'";
	//$result1=mysqli_query($db_link,$sql_query_login) or die("查詢失敗");
	
	$flag = FALSE;
	$fp = fopen("account.csv", "r");
	while (($data = fgetcsv($fp, ",")) !== FALSE) {
		$name = $data[0];
		$email = $data[1];
		$location = $data[2];
		$psw = $data[3];
		
		if ($username == $name && $password == $psw){
			$flag = True;
		}
	}
	
	if($flag){
		echo"登入成功";
		setcookie("userName", $username);
		//session_start();
		$_SESSION["userName"] = $username;

	}else{
		echo"登入失敗";
	}
	
	

	
	
?>
<form>
  <input type="button" value="Go back!" onclick="history.back()">
</form>