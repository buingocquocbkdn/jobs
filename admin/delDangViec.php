<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xóa</title>
</head>

<body>
	<?php include 'lib/openConnection.php' ?>	
    <?php
		 $idc = $_GET['idc'];
		 $idr = $_GET['idr'];
		 $conn -> set_charset("utf8");
		 $sql = "DELETE  FROM company_required WHERE id_required=$idr";	
		 $sql1 = "DELETE  FROM company WHERE id_com=$idc";
		 $result = mysqli_query($conn, $sql);
		 $result1 = mysqli_query($conn, $sql1);
		 if ($result&&$result1) {
			 echo '<script type="text/javascript">
                   		alert("Xóa thành công!\n");
						window.location.href="indexDangviec.php";
                	</script>';
		}else{
			echo '<script type="text/javascript">
                   		alert("Xóa thất bại!\n");
						window.location.href="indexDangviec.php";
                	</script>';
		}
	?>
    <?php include 'lib/closeConnection.php' ?>
</body>
</html>