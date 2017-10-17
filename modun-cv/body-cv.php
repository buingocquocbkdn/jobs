<?php session_start();  include 'js/openConnection.php';  ?>
<h1>Sơ yếu lý lịch</h1>
<div class="log">
	<div class="content2 w3agile">
    <?php
	$idt = $_GET["id"];
	 if (isset($_SESSION['uname'])) {
		 
		 $conn -> set_charset("utf8");
 	     $sql = "SELECT * FROM cv WHERE id_ten= '$idt'";
		 $result = mysqli_query($conn, $sql);
		 $row = $result->fetch_assoc();
		 echo'
		<form action="" method="post" id="cv">
			<input type="text" name="username" value="'.$row['hoten'].'" placeholder="Họ và tên" />
			<input type="tel" name="tel" value="'.$row['sodienthoai'].'"  placeholder="Số điện thoại"/>
			<input type="email" name="email" value="'.$row['email'].'" placeholder="Email"/>
			<input type="text" name="address" value="'.$row['address'].'" placeholder="Địa Chỉ"/>
			<input type="text" name="ngaysinh" value="'.$row['ngaysinh'].'" placeholder="Ngày Sinh"/>
			<input type="text" name="hocvan" value="'.$row['hocvan'].'" placeholder="Học vấn" />
			<input type="text" name="kinhnghiem" value="'.$row['kinhnghiem'].'" placeholder="Kinh Nghiệm" />
			<input type="text" name="mota" value="'.$row['mota'].'" placeholder="Mô tả thêm về bạn" />
			<input type="submit" class="register" value="Submit">
		</form>';}
		?>
	</div>
</div>
<?php include 'js/openConnection.php'; ?>