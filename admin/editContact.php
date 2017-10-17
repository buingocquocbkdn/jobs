
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duyệt bài</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	 <?php session_start(); ?>
	<?php
		include("moduns/header.php");
	?>
  	<?php
		include("moduns/footer.php");
	?>
    <?php
	 include 'lib/openConnection.php'; 
		$conn -> set_charset("utf8");
		$idc = $_GET['idc'];
		$act = $_GET['act'];

		$sql = "UPDATE company SET active = $act WHERE id_com=$idc";
		$result = mysqli_query($conn, $sql);
		header('Location:indexContact.php');
    include 'lib/closeConnection.php'; ?>
   
</body>
</html>
 