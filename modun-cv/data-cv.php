 <?php
        // Nếu không phải là sự kiện đăng ký thì không xử lý
        if (!isset($_POST['username'])){
            die('');
        }
         
        //Nhúng file kết nối với database
       include 'js/openConnection.php';
              
        //Khai báo utf-8 để hiển thị được tiếng việt
        $conn ->set_charset("UTF8");
              
        //Lấy dữ liệu từ file dangky.php
        $username    = addslashes($_POST['username']);
        $phone     	 = addslashes($_POST['tel']);
        $email     	 = addslashes($_POST['email']);
		$address     = addslashes($_POST['address']);
        $ngaysinh  	 = addslashes($_POST['ngaysinh']);
		$hocvan    	 = addslashes($_POST['hocvan']);
		$kinhnghiem  = addslashes($_POST['kinhnghiem']);
		$mota  		 = addslashes($_POST['mota']);
		$idt = $_GET["id"];
           
        //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
        if (!$username || !$phone  || !$email || !$address || !$kinhnghiem )
        {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
              
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
        {
           echo '<script type="text/javascript">
                     alert("Nhập lại email !");
                 </script>';
            exit;
        }
    
        if (mysqli_num_rows(mysqli_query($conn, "SELECT email FROM cv WHERE (email = '$email') && (id_ten != '$idt')")) > 0)
        {
            echo '<script type="text/javascript">
                     alert("Email đã có người dùng!");
                  </script>';
            exit;
        }         
        @$addregister = mysqli_query($conn, "
			UPDATE cv SET hoten='$username',sodienthoai='$phone',email='$email',address='$address',ngaysinh='$ngaysinh',hocvan='$hocvan',kinhnghiem='$kinhnghiem',mota='$mota'
     WHERE  id_ten = '$idt'
        	");                    
        if ($addregister)
           echo '<script type="text/javascript">
                    alert("Thông tin của bạn đã được cập nhật!");
					window.location.href = "cv.php?id='.$idt.'";
                </script>';
        else
            echo '<script type="text/javascript">
                    alert("Cập nhật thông tin thất bại!");
                 </script>';
   	include 'js/openConnection.php';
	?>