	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng việc</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	
	<?php
		include("moduns/header.php");
	?>
    <?php
		include("moduns/content-addCV.php");
	?>
  	<?php
		include("moduns/footer.php");
	?>
    <?php include 'lib/openConnection.php'; ?>
    <?php	
			$conn -> set_charset('utf8');
			if (isset($_POST['submit'])){
				
				$tenviec = $_POST['tenviec'];
				$tencongty = $_POST['name_com'];
				$mota = $_POST['mota'];
				$kinang = $_POST['knkn'];
				$luong = $_POST['luong'];
				$vitri = $_POST['vitri'];
				$diadiem = $_POST['diadiem'];
			
			if (!$tenviec || !$tencongty  || !$mota || !$kinang || !$vitri )
      		 {
            	echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            	exit;
       		 }
           	$sql = "SELECT id_com FROM company WHERE name_com = $tencongty"; 
			$result = mysqli_query($conn, $sql); 	  
			
		 
			 if ($result) {
			 while ($row = $result->fetch_assoc()) {
			  $idc = $row['id_com'];
			$result2 =  mysqli_query($conn, "
			 	INSERT INTO company_required (TenCongViec,KyNang,Luong,MoTa,id_com,ViTri,DiaDiem)
            	VALUES ('{$tenviec}','{$kinang}','{$luong}','{$mota}','$idc','{$vitri}','{$diadiem}')
				 ");}}
		 	if ($result2){
         		 echo '<script type="text/javascript">
                   			 alert("Đăng việc thành công!\n");
							 window.location.href="indexDangViec.php";
                		</script>';
				
			}
       		 else
          		  echo '<script type="text/javascript">
                    		alert("Đăng việc thất bại!");
                 		</script>';
			}
		?>	
        <?php
			if(isset($_POST['submit'])){ 
   				 if($_FILES['hinhanh']['name'] != NULL){ 
      
			if($_FILES['hinhanh']['type'] == "image/jpg"
			|| $_FILES['hinhanh']['type'] == "image/png"
			|| $_FILES['hinhanh']['type'] == "image/gif"){
        
            if($_FILES['hinhanh']['size'] > 1048576){
                echo "File không được lớn hơn 1mb";
            }else{
               
                $path = "images/"; 
                $tmp_name = $_FILES['hinhanh']['tmp_name'];
                $name = time().$_FILES['hinhanh']['name'];
                $type = $_FILES['hinhanh']['type']; 
                $size = $_FILES['hinhanh']['size']; 
               
                move_uploaded_file($tmp_name,$path.$name);
          		 }
       		 }else{
         		  echo "Kiểu file không hợp lệ";
      			  }
   				}else{
       			 echo "Vui lòng chọn file";
  			 }
				}
		?>
</body>
</html>
 <?php include 'lib/closeConnection.php'; ?>