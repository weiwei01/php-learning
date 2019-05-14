<?php 

	if($_GET['submit'])
	{	   
		$where = array();
		$keyword_where = "";
		if(isset($_GET['book_name'])){
			$keyword_where  = " name like '%".$_GET['book_name']."%' and ";
		}
		if(isset($_GET['fieldLimit1'])){
			if($_GET['fieldLimit1'] == "all"){
				$where[]  = " type = 'book' or 
							type = 'ebook' or 
							type = 'video' ";
			}else{
				$where[]  = " type =".$_GET['fieldLimit1'];
			}
		}		
		if(isset($_GET['checkbox_new'])) {
			$where[]  = " is_new =".$_GET['checkbox_new'];
		}
		if(isset($_GET['checkbox_borrow'])) {
			$where[]  = " is_borrowed =".$_GET['checkbox_borrow'];
		}
		if(isset($_GET['checkbox_central'])) {
			$where[]  = " is_in_library =".$_GET['checkbox_central'];
		}

		//build where string
		$where_str = " WHERE ".$keyword_where.implode(" And ",$where);
		//build sql
		echo $where_str."<br>";
		$sql = "SELECT * from book ".$where_str;
		echo $sql."<br>";
		
		include "readdb_php.php";
		$conn = readDb("mylibrary");
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}	
		//$db_result = mysqli_query($conn,$sql) or die("查詢失敗");
	
	
		$flag = FALSE;
		$total_fields = 5;
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


	}

?>