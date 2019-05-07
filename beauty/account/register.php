<?php
	include "readdb_php.php";
	if (isset($_POST['submit_name'])){		
		register();
	}

	function register(){		
		$conn = readDb();
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		//把密碼用md5加密
		$account = $_POST['account'];
		$password = ($_POST['password']);
		//$password = trim('$password');
		//$password = md5($_POST['password']);
		//$password = md5('$password');

		//把帳號密碼分別寫入資料庫的account和password欄位
		$sql = ("INSERT INTO member (account,password) VALUES ('$account','$password')");
		//echo $sql;
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
<br>
<a class="nav-link" href="../register_page.php">back to register!</a>