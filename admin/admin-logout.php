<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đăng xuât</title>
    </head>
    <body>
        <?php 
        if (isset($_SESSION['username'])) {
            unset($_SESSION['username']);
            echo '<script> alert("Đăng xuất thành công");
					window.location.href = "admin-login.php";
           		</script>';
        }
        else {
            echo '<script>window.location.href = "index.php";
            alert("Bạn chưa đăng nhập để có thể đăng xuất");</script>';
        }
        ?>
    </body>
</html>
