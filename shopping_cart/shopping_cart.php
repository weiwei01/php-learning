<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>購物車內頁</title>
</head>
<body>

	<div id="cart_top" class="cart">
		
		<a href="index.php"><img src="home-icon.png"></a>

    <a href="?clear_cart">Clear Shoppint Cart</a>
	<?php 
	echo("<button onclick=\"
				location.href='index.php'\"
				>Back to Home</button>");
	?>
    <?php
		if(isset($_GET['clear_cart'])) {
			session_unset();
		}
    ?>
	</div>

	<div id="cart_table" class="cart">
		<table border="1" width="1000px" >
			<tr>
				<td ><div id="cart_table_title">購物車明細</div></td>
			</tr>
			<tr bgcolor="#ffe8e8">
				<th width="400px">商品名稱</th>
				<th>Type</th>
				<th>Price</th>
			</tr>
			<?php 
				if(isset($_GET["name"])){
					$bookname = $_GET["name"];
					if(empty($_SESSION["shopping_cart_array"])) { 
					//如果點擊的購物車是空的（第一次添加） //如果購物車裡是空的，造二維數組， 
						$book["bookname"] = $bookname;
						$arr = array($book);  //一維數組，取ids，第一次點擊增加一個 )
						$_SESSION["shopping_cart_array"]=$arr; //扔到session裡面 
					} 
						else //這裡不是第一次點擊 
					{
						$arr = $_SESSION["shopping_cart_array"];
						$book["bookname"] = $bookname;
						array_push($arr, $book);
						$_SESSION["shopping_cart_array"]=$arr;
					}
					
					$productList = ($_SESSION["shopping_cart_array"]);
					include("readdb_php.php");

					foreach($productList as $product) {
						foreach ($product as $productName) {
							//echo "$productName ";

							$conn = readDb();
							$bookname = $_GET["name"];
							$sql = "Select * from bookstore where name = '$productName' ";
							$total_fields = 3;	
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

							
							
						}
					} 
				
					echo "<tr>";
					echo "<td>";
					echo "</td>";
					echo "<td>Total</td>";
					echo "<td>";
					echo "</td>";										
					echo "</tr>";
					echo "</table>";
					echo "<a href=checkout>Check Out</a>";

				}
			?>
		
	</div>



	<style type="text/css">

	#cart_table_title{
		background: red;
		color: white;

	}

	.cart{
		width:1000px;
		/*div置中*/
		margin: 0 auto;
		/*背景顏色*/
		background-color: white;
	}

	#cart_table{
		margin-top: 30px
	}



	</style>

</body>
</html>

