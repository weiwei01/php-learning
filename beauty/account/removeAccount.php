
<?php
	$msg = '';
	$userName = '';
	$newPsw = '';
	$sql = ''; 
	if (isset($_SESSION['username'])) {
		$userName = $_SESSION['username'];
		
	}
	
	
	if (isset($_POST['removeAccount'])) {
		
		$sql = "DELETE FROM member WHERE account='$userName' ";		
		//echo $sql;
		//echo $newPsw;
		include "readdb_php.php";
		$conn = readDb();
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
			if ($conn->query($sql) === TRUE) {
				echo "Remove successfully";
			} else {
				echo "Error remove record: " . $conn->error;
			}
		}
		include("logout.php");
	}	
	
?>
