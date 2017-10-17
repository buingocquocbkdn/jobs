
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Đăng việc</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php session_start(); ?>
	<?php
		include("moduns/header.php");
	?>
    <?php
		include("moduns/content-editCV.php");
	?>
  	<?php
		include("moduns/footer.php");
	?>
    <?php
 			include 'lib/openConnection.php';
 			 $conn->set_charset('UTF-8');
			$idc = $_GET['idc'];
			 $idr = $_GET['idr'];
			if (!isset($_POST['tenviec'])){
           	 die('');
       			 }	
				$tenviec = ($_POST['tenviec']);
				$tencongty =($_POST['tencongty']);
				$hinhanh = time().$_FILES['hinhanh']['name'];
				$mota = ($_POST['mota']);
				$kinang = ($_POST['knkn']);
				$luong = ($_POST['luong']);
				$lienhe = ($_POST['lienhe']);
			
			if (!$tenviec || !$tencongty  || !$mota || !$kinang || !$lienhe )
      		 {
            	echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            	exit;
       		 }
			 @$addcompany = mysqli_query($conn, "
           		 UPDATE company SET name_com = '{$tencongty}',lienhe='{$lienhe}',image_com='{$hinhanh}' WHERE  id_com= $idc 
       		 ");
			 
			 @$addcompany_required =  mysqli_query($conn, "
			 	UPDATE company_required SET TenCongViec='{$tenviec}',KyNang='{$kinang}',Luong='{$luong}',MoTa='{$mota}',id_com='{$idc}' WHERE id_required = $idr
				 ");
		 	if ($addcompany && $addcompany_required ){
         		 echo '<script type="text/javascript">
                   			 alert("Sửa thành công!\n");
							 window.location.href="indexDangViec.php";
                		</script>';
				
			}
       		 else
          		  echo '<script type="text/javascript">
                    		alert("Sửa thất bại!");
                 		</script>';		 
		?>	
        <?php
			if(isset($_POST['submit'])){ 
   				 if($_FILES['hinhanh']['name'] != NULL){ 
      
			if($_FILES['hinhanh']['type'] == "image/jpeg"
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
				include 'lib/closeConnection.php';
	?>
   
</body>
</html>
 