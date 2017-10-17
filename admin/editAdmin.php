<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sửa</title>
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
	<?php session_start(); ?>
	<?php
		include("moduns/header.php");
	?>
    <?php
		include("moduns/content-editAdmin.php");
	?>
  	<?php
		include("moduns/footer.php");
	?>
    <?php
			 include 'lib/openConnection.php' ;
			 $conn->set_charset('UTF8'); 
			$id =  $_GET['id'];
			$sql = "SELECT * FROM register WHERE id =$id";			
			$result = mysqli_query($conn, $sql);		 
			$row = $result->fetch_assoc();
			if($_SESSION['username']=="admin"){
				 			
			$name = ($_POST['ten']);
			$pass = ($_POST['matkhau']);
			$pos  = ($_POST['pos']);
			
			if (!$name || !$pass )
      		 {
            	echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            	exit;
       		 }
			 	$pass = MD5($pass);
				if($row['username']=="admin"){
				 @$addregister = mysqli_query($conn, "
					 UPDATE register SET username='admin',password='{$pass}',position='2' WHERE id = $id");}
					 else{
						 @$addregister = mysqli_query($conn, "
					 UPDATE register SET username='$name',password='{$pass}',position='$pos' WHERE id = $id");
						 }
				 if ($addregister ){
					 echo '<script type="text/javascript">
								 alert("Sửa thành công!\n");
								 window.location.href="indexAdmin.php";
							</script>';
				}
				 else
					  echo '<script type="text/javascript">
								alert("Sửa thất bại!");
							</script>';
				 }
			 else if($_GET['pos']==2){
				echo'<script>
					alert("Bạn không có quyền sửa Admin! ");
					window.location.href="indexAdmin.php";
				</script>
				';
			}else
			
			{
			 if (!isset($_POST['ten'])){
           	 	die('');
       		 }
			
			
			$name = ($_POST['ten']);
			$pass = ($_POST['matkhau']);
			$pos  = ($_POST['pos']);
			
			if (!$name || !$pass )
      		 {
            	echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            	exit;
       		 }
			 	$pass = MD5($pass);
				 @$addregister = mysqli_query($conn, "
					 UPDATE register SET username='{$name}',password='{$pass}',position='{$pos}' WHERE id = $id");
				 if ($addregister ){
					 echo '<script type="text/javascript">
								 alert("Sửa thành công!\n");
								 window.location.href="indexAdmin.php";
							</script>';
				}
				 else
					  echo '<script type="text/javascript">
								alert("Sửa thất bại!");
							</script>';
			}
	
	 include 'lib/closeConnection.php' ;
	?>
</body>

</html>