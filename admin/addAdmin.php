<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thêm admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="lib/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="lib/jquery.validate.min.js" ></script>
<script type="text/javascript">
 $(document).ready(function(){
	$("#form").validate({
			rules:{
				"ten":{
					required:true,
				},
				"matkhau":{
					required:true,
				},
			},
			messages:{
				"ten":{
					required:"Nhập username!",
				},
				"matkhau":{
					required:"Nhập vào mật khẩu",
				},
			},
		});
	});	
</script>	
</head>

<body>
	<?php
		include("moduns/header.php");
	?>
    <?php
		include("moduns/content-addAdmin.php");
	?>
  	<?php
		include("moduns/footer.php");
	?>
    <?php
			 include 'lib/openConnection.php';
			 $conn -> set_charset('UTF-8'); 
			 if (!isset($_POST['ten'])){
           	 	die('');
       		 }	
			$name = ($_POST['ten']);
			$pass = ($_POST['matkhau']);
			if (!$name || !$pass )
      		 {
            	echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            	exit;
       		 }
			$pass = MD5($pass);
        	if (mysql_num_rows(mysqli_query($conn, "SELECT username FROM register WHERE username='$name'")) > 0){
          		echo '<script type="text/javascript">
                    	alert("Tên đăng nhập đã có người dùng. Vui lòng nhập lại tên khác!");
               		 </script>';
            	exit;
       		 }
			 @$addregister = mysqli_query($conn, "
           		 INSERT INTO register (username,password,position)
            	 VALUE ('{$name}','{$pass}',1)    
       		 ");
			 if ($addregister ){
				
         		 echo '<script type="text/javascript">
                   			 alert("Đăng kí thành công!\n");
							 window.location.href="indexAdmin.php";
                		</script>';
				
			}
       		 else
          		  echo '<script type="text/javascript">
                    		alert("Đăng kí thất bại!");
                 		</script>';
						
						 include 'lib/closeConnection.php';
	?>
</body>
</html>