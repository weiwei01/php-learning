<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>限制瀏覽權限</title>
</head>
<body bgcolor="#f0f0f0">

<div id="login_top" class="login">
<!--<img src="http://localhost/amos/case_BrowseRight_pic1.jpg"> not good-->
<img src="case_BrowseRight_pic1.jpg">

</div>



<div id="login_area" class="login">
<form action="login.php" method="POST">
	<div id="login_area_title">
		<h2>讀者個人化服務</h2>
	</div>

	<div id="login_area_input">
		<label id="login_area_label_1" for="stdID">學生證或識別證號:</label><br/>
		<input type="text" name="stdID" id="stdID" size="30" maxlength="40" class="login_area_inputfield" />
		<br/>
		<br/>
		<label id="login_area_label_2" for="password">密碼:</label><br/>
		<input type="text" name="password" id="password" size="30" maxlength="40" class="login_area_inputfield"" />
		<br/>
		<br/>
		<label id="login_area_label_3" for="fieldLimit1">登入身分:</label>
		<select id="fieldLimit1" name="login-identity" >		
			<option value="people" selected="selected">路人甲</option>
			<option value="people">路人癸</option>
			<option value="student">學生</option>
			<option value="manager">管理者</option>
		</select>
	</div>

	<div id="login_area_btn">
		<input type="submit" name="submit" value="登入" />
	</div>


</form>
</div>

<div id="login_info" class="login">

	<div class="login_info_middle">
		<span style="color:red;font-weight:bold;">登入即表同意本館個人資料蒐集，請詳閱<a href="/screens/Catalogs_Retrieval_cht.pdf">個資告知聲明書</a><br><br></span>
	</div>


	<div>	
		<ul>
			<li>忘記或更改密碼：本校教職員生，請至<a href="http://i.ncku.edu.tw" target="_blank">成功入口</a>查詢或更改；</li>
			<li>本校附設醫院同仁
				<p>
					</p><ol>
						<li>帳號：識別證號前加4碼0</li>
						<li>密碼預設值：【身分證】後4碼+【生日】後4碼</li>
						<li><a href="http://reader.lib.ncku.edu.tw/" target="_blank">修改密碼</a> 或 <a href="http://reader.lib.ncku.edu.tw/Shared_DB/prompt_pswd.php" target="_blank">忘記密碼</a>。</li>
					</ol>
				<p></p>
			</li>
			<li>圖書館借還書通知信將寄到學校預設公務信箱，為避免漏失圖書館發出的通知單，請確認登記在<a href="http://reader.lib.ncku.edu.tw/index.html" target="_blank">本館讀者系統</a>中的電子郵件信箱可正常接收信件。如有需要，本校教職員工生也可至<a href="http://i.ncku.edu.tw/" target="_blank">成功入口</a>建立第二電子郵件信箱。</li>
			<li>館藏查詢系統每日上午2:00-3:00進行系統維護，<span style="color:red;font-weight:bold;">暫停續借及預約服務</span>，造成不便敬請見諒。</li>
		</ul>
	</div>


	<div class="login_info_middle">
		<span ><a href="/help*cht#Security" target="_blank">安全性警告</a></span>
		<span ><a href="/*cht">回查詢首頁</a></span>
	</div>

</div>

<div id="login_footer" class="login">
國立成功大學圖書館 版權所有 © 2011 NCKU Library All Rights Reserved.
<br>
<br>
TEL: (06) 275-7575 ext. 65760｜地址：70101 台南市大學路一號｜Email：em65760@email.ncku.edu.tw｜螢幕最佳解析度: 1024 x 768
</div>



<style type="text/css">

/*對於整個html指定格式*/
* {
font-family: 微軟正黑體;
}

label {
	font-size: 20px;
	font-weight:bold;
	position: relative;
}

img{
	/*讓圖片適應上層div的大小*/
	width: 100%;
	height: 100%;
}

input{
	border-radius: 5px;
}


.login{
	width:1000px;
	/*div置中*/
	margin: 0 auto;
	/*背景顏色*/
	background-color: white;
	/*顯示邊框*/
	/*border:2px black solid;*/

}

#login_top{
	height: 100px;
}

#login_area{
	/*內邊距*/
	padding-top: 30px;
	/*水平置中*/
	text-align:center;
}

#login_area_title{
	color: #9d9d9d;
	padding-bottom: 30px;

}


#login_area_label_1{
	right: 20px;
}

#login_area_label_2{
	right: 80px;
}

#login_area_label_3{
	right: 33px;
	font-size: 16px;
}

.login_area_inputfield{
	background-color: #bebebe;
}

#login_area_btn{

	padding-top: 30px;
	padding-bottom: 30px;

}

#login_info{
	width: 800px;
	padding-right:100px;
	padding-left:100px;
	padding-top: 30px;
	padding-bottom: 30px;
}

.login_info_middle{
	text-align:center;
}

#login_footer{
	height: 70px;
	/*背景顏色*/
	background-color:#3b5998;
	/*文字水平置中*/
	text-align:center;
	color: white;

}

</style>


</body>
</html>