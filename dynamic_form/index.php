<html>
    <head>
        <title>PHP動態下拉式選單</title>
    </head>
<body>
<form name="form1" method="get" action="<?php echo $PHP_SELF; ?>">
	<?php
		include("db.php");
		//include("unicode.php");
		//$sql=mysqli_query($link, "select city from city group by city");
		$sql = mysqli_query($link, "select city from city group by city");

	?>
	<table width="100%" border="1">
		<tr>
		<td>第一選單:
		<select name="select1" onchange="window.location='?select1='+this.value"> 
		<OPTION value="">請選擇</OPTION>

		<?php

				while($list=mysqli_fetch_assoc($sql))
				{
					echo '<option value="'.$list['city'].'"'.(strcmp($list['city'],$_GET["select1"])==0?' selected="selected"':'').'>'.$list['city'].'</option>';
			?>
			<?php
				}

		?>
		</select>

		</td>
		 
		<?php 	 
			if(isset($_GET["select1"])){
				$sql2=mysqli_query($link, "SELECT *  FROM city WHERE city LIKE '$_GET[select1]'");
			} 
		 ?>
		<td>第二選單:
		<select name="select1" onchange="window.location='?select1=<?php echo $_GET["select1"]; ?>&select2='+this.value">  <?php//點選時進行網頁重新整理?>
		<OPTION value="">請選擇</OPTION>
		<?php
			while($list=mysqli_fetch_assoc($sql2))
			{
				echo '<option value="'.$list['hometown'].'"'.(strcmp($list['hometown'],$_GET["select2"])==0?' selected="selected"':'').'>'.$list['hometown'].'</option>';

		?>
		<?php
			}
		?>
		</select>
		</td>
		</tr>
	</table>
	<br>
	<?php

	?>
	<?php 
		if(isset($_GET["select1"])){
			echo "帝國/學校勾選:".$_GET["select1"]."<br>";
		} 
		if(isset($_GET["select2"])){
			echo "城市/學院勾選:".$_GET["select2"]."<br>";
		} 

	?>
</form>
</body>
</html>