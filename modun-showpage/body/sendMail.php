
<?php
        
        //session_start(); 
		  include 'js/openConnection.php'; 
		if (isset($_POST['nopdon'])){
			if (isset($_SESSION['uname'])) {
   		 include 'js/class.smtp.php';
   		 include 'js/class.phpmailer.php'; 
    	 include 'js/mailFunction.php';           
         $conn -> set_charset("utf8");     
   					$idt= $_SESSION['id'];
       				$nd   = ($_POST['nopdon']);
					$idc = $_GET['idc'];
					$idr = $_GET['idr'];
					$conn -> set_charset("utf8");
                    $sql = "SELECT * FROM company_required WHERE id_required = $idr";
					$sql1 = "SELECT * FROM company WHERE id_com = $idc";
					$sql2 ="SELECT * FROM cv WHERE id_ten = $idt";
                    $result = mysqli_query($conn, $sql);
					$result1 = mysqli_query($conn, $sql1);
					$result2 = mysqli_query($conn, $sql2);
					$row = $result->fetch_assoc();
					$row1 = $result1->fetch_assoc();
					$row2 = $result2->fetch_assoc();
	
	$title = '[Website Tìm Việc] '.$row2['hoten'].' vừa nộp đơn ứng cử đến công ty của bạn';
	
	$content =  "
	<div class= 'table1'>
	<ul>
    	<li style='border:#09C solid 1px; border-radius:10px; margin-right:5%; margin-left:5%; background:#E4E4E4;'>

<h2 style='text-align:center; color:#F03; font-size:30px; font-family:Tahoma, Geneva, sans-serif; font-style:italic; '>  THÔNG TIN CÔNG VIỆC </h2>
		<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Tên công việc: ".$row['TenCongViec']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Vị trí: ".$row['ViTri']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Kỹ năng: ".$row['KyNang']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Địa điểm: ".$row['DiaDiem']."<--- </h3>
    
	<br />
    
	<h2 style='text-align:center; color:#F03; font-size:30px; font-family:Tahoma, Geneva, sans-serif; font-style:italic; '>  THÔNG TIN ỨNG CỬ </h2> <br />
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Họ và tên: ".$row2['hoten']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Số điện thoại: ".$row2['sodienthoai']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Email liên hệ: ".$row2['email']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Địa chỉ: ".$row2['address']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Ngày Sinh: ".$row2['ngaysinh']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Học vấn: ".$row2['hocvan']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Kinh nghiệm: ".$row2['kinhnghiem']."<--- </h3>
	<h3 style='text-align:center; font-size:15px; color:#09C; font-style:italic; font-family:Tahoma, Geneva, sans-serif;' > --->Mô tả thêm về bản thân: ".$row2['mota']."<--- </h3>
    </li>
    </ul>
 </div>
	";
   
    $nTo = $row1['name_com'];
    $mTo = $row1['email_com'];
    $diachicc = 'timviec.13t3@gmail.com';
    //test gui mail
    $mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
    if($mail==1){
    echo '<script type="text/javascript">
                     alert("Bạn đã nộp đơn tuyển dụng của mình!");
					 window.location.href = "showpage.php?idc='.$idc.'&idr='.$idr.'";
                  </script>';
            exit; }}
    else echo '<script type="text/javascript">
                    alert("Bạn chưa đăng nhập hoặc chưa cập nhật hồ sơ. Vui lòng thử lại sau!");
                </script>';
	
        
		};
	include 'js/closeConnection.php';	
?>