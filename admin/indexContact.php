<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nhà tuyển dụng</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php session_start(); ?>
	<?php
		if(!isset($_SESSION['username'])){
			echo '<script> 
					window.location.href = "admin-login.php";
					alert("Vui lòng đăng nhập!");
           		</script>';
		}else{
			
				include("moduns/header.php");
			
		
				include("moduns/content-indexContact.php");
		
		
				include("moduns/footer.php");
			
		}
	?>
	
	
</body>
</html>