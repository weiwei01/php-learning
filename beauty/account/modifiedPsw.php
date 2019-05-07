
<?php
	$msg = '';
	$userName = '';
	$newPsw = '';
	$sql = ''; 
	if (isset($_SESSION['username'])) {
		$userName = $_SESSION['username'];
		
	}
	
	
	if (isset($_POST['modified'])) {
		$newPsw = $_POST['new_password'];
		$sql = "UPDATE member SET password='$newPsw' WHERE account='$userName' ";
		//echo $sql;
		//echo $newPsw;
		include "readdb_php.php";
		$conn = readDb();
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}else{
			if ($conn->query($sql) === TRUE) {
				echo "Record updated successfully";
			} else {
				echo "Error updating record: " . $conn->error;
			}
		}
	}	
	
?>
