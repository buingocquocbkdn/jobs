
<?php
include 'lib/openConnection.php';
if (isset($_POST['submit'])) {
 session_start(); 
    $conn->set_charset('utf8');
    $username = $_POST['username'];
    $password = $_POST['password'];
	$password = MD5($password);
    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password' AND( position=1 OR position =2)  ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;
            echo '<script>
                alert("Đăng nhập thành công.\n");
                window.location.href = "index.php";
            </script>';
        } else {
            echo '<script>
                alert("Tên đăng nhập hoặc mật khẩu không đúng.\nĐăng nhập thất bại.\n");
                window.location.href = "admin-login.php";
            </script>';
        }
    } else {
        echo '<script>
            alert("Có lỗi xảy ra.\nĐăng nhập thất bại.\n");
            window.location.href = "admin-login.php";
        </script>';
    }
}
include 'lib/closeConnection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login-Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="lib/jquery-2.1.4.min.js" ></script>
<script type="text/javascript" src="lib/jquery.validate.min.js" ></script>

<script src="js/responsiveslides.min.js"></script>	
<script type="text/javascript">
 $(document).ready(function(){
	$("#form").validate({
			rules:{
				"username":{
					required:true,
				},
				"password":{
					required:true,
				},
			},
			messages:{
				"username":{
					required:"Nhập username!",
				},
				"password":{
					required:"Nhập vào mật khẩu",
				},
			},
		});
	});	
</script>	
</head>

<body>
	
	<?php
		include("moduns/header.php");
	?>
    
     <?php
		include("moduns/content-login.php");
	?>
  	<?php
		include("moduns/footer.php");
	?>
</body>
</html>