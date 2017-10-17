<!doctype html>
<html>
<head>
<title>Đăng nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Social Login Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files  -->
<link href='//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<!-- /font files  -->
<!-- css files -->
<link href="css/stylelogin.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="js/jquery.validate.min.js" ></script>
<script type="text/javascript">
 $(document).ready(function(){
	$("#formlg").validate({
			rules:{
				"username":{
					required:true,
				},
				"password":{
					required:true,
				},
			},
			messages:{
				"username":{
					required:"Nhập tên đăng nhập!",
				},
				"password":{
					required:"Nhập vào mật khẩu!",
				},
			},
		});
	});	
</script>	
</head>
<body>
<?php
	include ("modun-login/menu-login.php");
	include("modun-login/body-login.php");
	include("modun-login/data-login.php");
?>
</body>
</html>