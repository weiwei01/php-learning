<!DOCTYPE html>
<html>
<head>
	<title>購物車</title>
</head>
<body >

	<div id="top_nav">
		<ul id="top_nav_ul">
        	<li class="nav"><a href="html_case_ShoppingCart_Target.php">購物車</a></li>
            <li class="nav"><a href="https://24h.pchome.com.tw/">PChome 24h購物</a></li>
        </ul>
	</div>

	<div id="add">
		<button>商品一 100元</button>
		<button>商品二 500元</button>
		<button>商品三 1000元</button>
    </div>

    <div id="cart">
		<a href="html_case_ShoppingCart_Target.php"><img src="shopping_cart.jpg"></a>
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
		width: 400px;
		position: relative;
		/*top: 100px;*/
	}

	.nav{
		display: inline;
	}

	#add{
		border:2px black solid;
		margin: 0 auto;
		width: 400px;
		position: relative;
		top: 100px;

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