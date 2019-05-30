
<?php 
	//$link = mysqli_connect("localhost", "root", "") or die("link_error");
	//mysql_query("set names utf8");
	//mysql_query("set names big5");
	//mysqli_select_db($link,"mycity");
	$dbName = "mycity";
	$link = @mysqli_connect( 
	'localhost',  // MySQL主機名稱 
	'root',       // 使用者名稱 
	'',  // 密碼
	$dbName);  // 預設使用的資料庫名稱

	$link->set_charset("utf8");
	if (!mysqli_select_db($link, $dbName) )
	   die("無法開啟 $dbName 資料庫!<br/>");
?>