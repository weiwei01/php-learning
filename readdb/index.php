<html>
<head>
	<title>READDB</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<?php

	include("readdb_php.php");

	$conn = readDb();
	$sql = "Select * from bookstore ";
	$total_fields = 3;	
	echo "<table>";
	if ( $result = mysqli_query($conn, $sql) ) {				
		while ($row = mysqli_fetch_row($result)) {
		   echo "<tr>";
		   for ( $i = 0; $i <= $total_fields-1; $i++ )
			  echo "<td>" . $row[$i] . "</td>";
		   echo "</tr>";
		}		
		//釋放記憶體
		mysqli_free_result($result);
	}  
	echo "</table>";
?>
</body>
</html>
