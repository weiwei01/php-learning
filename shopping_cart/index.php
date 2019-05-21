<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>購物車</title>
</head>
<body >

	<div id="top_nav">
		<ul id="top_nav_ul">
        	<li class="nav"><a href="shopping_cart.php">購物車</a></li>
            <li class="nav"><a href="https://24h.pchome.com.tw/">PXxome 24h購物</a></li>

        </ul>
	</div>

	<div id="add">
		<?php
			$Arry=array('醞釀7年一歌入魂！2019年情歌只聽這一張','慕敏家族展開式化妝收納包附鏡子','想我的時候就煮一鍋咖哩治療心碎','在路上遇到貓，就摸一摸');
			$size=count($Arry);
			for($i=0 ; $i<$size ; $i++){
				echo $Arry[$i]."<button onclick=\"location.href='shopping_cart.php?name={$Arry[$i]}'\">Buy</button>"."<br>";
			}
		?>
		
		<!--
		<button class="btn" name="P01" value="P01" onclick="location.href='shopping_cart.php?name=apple '">商品一 100元</button>
		<button class="btn" name="P02" value="P02">商品二 500元</button>
		<button class="btn" name="P03" value="P03">商品三 1000元</button>
		<button class="btn" name="P04" value="P04">商品四 5000元</button> 
		-->
    </div>

    <div id="cart">
		<a href="shopping_cart.php"><img src="shopping_cart.jpg"></a>
    </div>




	<style type="text/css">

	body{
		height: 2000px;
	}

	img{
		height: 100%;
		width: 100%;
	}

	#top_nav{
		border:2px black solid;
		margin: 0 auto;
		width: 460px;
		position: relative;
		/*top: 100px;*/
	}

	.nav{
		display: inline;
	}

	#add{
		border:2px black solid;
		margin: 0 auto;
		width: 460px;
		position: relative;
		top: 100px;
	}

	.btn{
		width:110px; 
	}

	#cart{
		position: fixed;
		right: 10px;
		bottom:10px;
		width: 100px;
		height: 100px;
		/*border: 2px black solid;*/
	}





	</style>

</body>
</html>

<!-- Ref:https://kknews.cc/news/p86k5o8.html -->