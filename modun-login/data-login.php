<?php session_start(); ?>
<?php
		include 'js/openConnection.php';

		//header('Content-Type: text/html; charset=UTF-8');
			if (isset($_POST['submit'])) 
			{
				
				 $username = ($_POST['username']);
				 $password = ($_POST['password']);
   	   		 if (!$username || !$password) {
		echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại </a>";
			exit;
				}
    		$password = MD5($password);
			$conn -> set_charset("utf8");
  	 		$query = "SELECT * FROM register WHERE username='$username'";
   	   		$result = mysqli_query($conn, $query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
			
            $_SESSION['uname'] = $username;
			$row = $result->fetch_assoc();
			$_SESSION['id']= $row['id'];
			
            echo '<script>
                alert("Đăng nhập thành công.\nChào mừng bạn đến với website tìm việc của chúng tôi!.\n");
                window.location.href = "index.php";
            </script>';
        } else {
            echo '<script>
                alert("Tên đăng nhập hoặc mật khẩu không đúng.\nĐăng nhập thất bại.\n");
                window.location.href = "login.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Có lỗi xảy ra.\nĐăng nhập thất bại.\n");
            window.location.href = "login.php";
        </script>';
    }
}
include 'js/closeConnection.php';
?>