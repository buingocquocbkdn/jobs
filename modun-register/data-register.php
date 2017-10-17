<?php
        // Nếu không phải là sự kiện đăng ký thì không xử lý
        if (!isset($_POST['username'])){
            die('');
        }
         
        //Nhúng file kết nối với database
        include 'js/openConnection.php';
              
        //Khai báo utf-8 để hiển thị được tiếng việt
        header('Content-Type: text/html; charset=UTF-8');
        $conn -> set_charset("utf8");     
        //Lấy dữ liệu từ file dangky.php
        $username   = ($_POST['username']);
        $phone      = ($_POST['tel']);
        $email      = ($_POST['email']);
        $password   = ($_POST['password']);
           
        //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
        if (!$username || !$phone  || !$email || !$password )
        {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
              
            // Mã khóa mật khẩu
        $password = MD5($password);
		$query = "SELECT username FROM register WHERE username='$username'";
		$result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0){
           echo '<script type="text/javascript">
                    alert("Tên đăng nhập đã có người dùng. Vui lòng nhập lại tên khác!");
                </script>';
            exit;
        }
              
        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
        {
           echo '<script type="text/javascript">
                    alert("Nhập lại email !");
                 </script>';
            exit;
        }
    	$result1=mysqli_query($conn, "SELECT email FROM register WHERE email='$email'");
        if (mysqli_num_rows($result1) > 0)
        {
            echo '<script type="text/javascript">
                     alert("Email đã có người dùng!");
                  </script>';
            exit;
        }         
        @$addregister = mysqli_query($conn, "
            INSERT INTO register ( username,password,email,phone)
            VALUE ('{$username}','{$password}','$email','$phone') ");	
				
		
		$query1 =  "SELECT id FROM register WHERE username='$username'";
		
		$result2 = mysqli_query($conn, $query1);
		$row2 = $result2->fetch_assoc();
		$idregis = $row2['id'];
		@$addcv = mysqli_query($conn, "INSERT INTO cv (id_ten, sodienthoai, email) VALUE ('$idregis', '$phone', '$email')");                 
        if ($addregister){
           echo '<script type="text/javascript">
                    alert("Đăng kí thành công!");
					window.location.href = "login.php";
                </script>';
				}
        else
            echo '<script type="text/javascript">
                    alert("Đăng kí thất bại!");
                 </script>';
   	
	include 'js/closeConnection.php';
	?>