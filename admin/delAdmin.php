<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa</title>
</head>

<body>
	<?php include 'lib/openConnection.php' ?>	
    <?php
		 $id = $_GET['idd'];
		 $conn -> set_charset("utf8");
		 $sql = "DELETE  FROM register WHERE id=$id AND position !=2 ";	
		 $result = mysqli_query($conn, $sql);
		 if ($result) {
			 echo '<script type="text/javascript">
                   		alert("Xóa thành công!\n");
						window.location.href="indexAdmin.php";
                	</script>';
		}else{
			echo '<script type="text/javascript">
                   		alert("Xóa thất bại!\n");
						window.location.href="indexAdmin.php";
                	</script>';
		}
	?>
    <?php include 'lib/closeConnection.php' ?>
</body>
</html>