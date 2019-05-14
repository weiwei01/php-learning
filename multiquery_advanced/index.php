<!DOCTYPE html>
<html>
<head>
	<title>多條件查詢</title>
</head>
<body>

	<div id="search">
		<form id="search_form" action="multiple_query.php" method="GET" accept-charset="utf-8">
			<!-- 輸入欄 -->
			<input type="text" name="book_name">

			<!-- 下拉選單 -->
			<div id="search_box">
				<select name="fieldLimit1" class="fieldLimitCht">		
					<option value="all" selected="selected">全部</option>
					<option value="book">圖書</option>
					<option value="ebook">電子書</option>
					<option value="video">影音</option>
				</select>
			</div>

			<!-- 篩選條件 -->
			<div id="search_checkbox">
				<input type="checkbox" name="checkbox_new" id="checkbox_new" value="1">
				<label for="checkbox_new">一個月內新品</label>
				<input type="checkbox" name="checkbox_borrow" id="checkbox_borrow" value="1">
				<label for="checkbox_borrow">現在可以外借</label>
				<input type="checkbox" name="checkbox_central" id="checkbox_central" value="1">
				<label for="checkbox_central">僅限總圖館藏</label>
			</div>

			<!-- 送出按鈕 -->
			<input id="search_submit" type="submit" name="submit" value="查詢">
		</form>

	</div>


	<style type="text/css">
	
	#search{
		margin: 0 auto;
		/*border: solid;*/
		width: 400px;
		position: relative;
		top: 100px;
	}

	#search_form{
		/*display:inline;*/
		border:2px green solid;
	}

	#search_box{
		display:inline;
	}

	#search_submit{
		display:block;
	}

	#search_checkbox{
		padding-top:10px;
		padding-bottom:10px;
	}

	</style>


</body>
</html>