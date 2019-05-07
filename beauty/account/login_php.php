<?php
	header('Content-Type: text/html; charset=utf-8');
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$password = trim('$password');
	//$password = utf8_encode('$password');
	//$password=md5('$password');
	
	

	
	$sql_query_login="SELECT * 
					  FROM member 
					  where 
					  account='$username' 
					  AND 
					  password='$password'";
	include "readdb_php.php";
	$conn = readDb();
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo $username;
	//echo $password;
	//echo $md5_password;
	//echo $sql_query_login;
	$db_result = mysqli_query($conn,$sql_query_login) or die("查詢失敗");
	
	
	$flag = FALSE;
	
	if(mysqli_num_rows($db_result)){
		$flag = True;

	}else{
		//echo"登入失敗";
	}
		
	if($flag){
		//echo"登入成功";
		setcookie("userName", $username);
		//session_start();
		$_SESSION["userName"] = $username;
	}else{
		//echo"登入失敗";
	}
?>
