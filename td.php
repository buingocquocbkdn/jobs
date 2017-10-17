<!doctype html>
<html>
<head>
<title>Nhà tuyển dụng</title>
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
	$("#cv").validate({
			rules:{
				"name_com":{
					required:true,
				},
				"mota":{
					required:true,
				},
				"email":{
					required:true,
				},
				"lienhe":{
					required:true,
				},
			},
			messages:{
				"name_com":{
					required:"Vui lòng nhập họ và tên!",
				},
				"mota":{
					required:"Vui lòng nhập số điện thoại!",
				},
				"email":{
					required:"Vui lòng nhập email!",
				},
				"lienhe":{
					required:"Vui lòng nhập địa chỉ!",
				},
			},
		});
	});	
</script>	
</head>
<body>
<?php
	include("modun-cv/menu-cv.php");
	include("modun-cv/body-td.php");
	include("modun-cv/data-td.php");
?>
</body>
</html>