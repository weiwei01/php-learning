<?php 	
	function readDb(){
			$dbName = 'mycompany';
	$conn = @mysqli_connect( 
		'localhost',  // MySQL主機名稱 
		'root',       // 使用者名稱 
		'',  // 密碼
		$dbName);  // 預設使用的資料庫名稱

	$conn->set_charset("utf8");
	if (!mysqli_select_db($conn, $dbName) )
	   die("無法開啟 $dbName 資料庫!<br/>");
	else
	   echo "資料庫: $dbName 開啟成功!<br/>";
	echo "<hr>";
	//$sql = "SELECT * FROM students";
	//mysqli_query($link, 'SET NAMES utf8');
	return $conn;
	}
	
?>