<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Register</title>
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
	$("#regis").validate({
			rules:{
				"username":{required:true,minlength:6,maxlength:32,},
				"tel":{required:true,},
				"email":{required:true,email:true,},
				"password":{required:true,minlength:6},
			},
			messages:{
				"username":{
					required:"Nhập tên đăng nhập!",
					minlength:" (*) Tên truy cập phải có ít nhất 6 kí tự!",
					maxlength:" (*) Tên truy cập có nhiều nhất 32 kí tự!",
				},
				"tel":{
					required:"Nhập số điện thoại!",
				},
				"email":{
					required:"Nhập vào email!",
					email:"Nhập đúng định dạng email!"
				},
				"password":{
					required:"Nhập mật khẩu!",
					minlength:" (*) Mật khẩu truy cập phải có ít nhất 6 kí tự!",
				},
			},
		});
	});	
</script>
</head>
<body>
<?php
	include("modun-register/menu-register.php");
	include("modun-register/body-register.php");
	include("modun-register/data-register.php");
?>

</body>
</html>