 <?php
        
  
       include 'js/openConnection.php';
        
        $conn ->set_charset("UTF8");
        if (isset($_POST['submit'])){  
        
        $name_com    = $_POST['name_com'];
        $mota     	 = $_POST['mota'];
        $email     	 = $_POST['email'];
		$lienhe      = $_POST['lienhe'];
        $fb  	     = $_POST['fb'];
		$tw    	     = $_POST['tw'];
		$pt          = $_POST['pt']; 
		$hinhanh   	 = time().$_FILES['hinhanh']['name'];
   
        if (!$name_com || !$mota  || !$email || !$lienhe )
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
    
        if (mysqli_num_rows(mysqli_query($conn, "SELECT email_com FROM company WHERE (email_com = '$email') ")) > 0)
        {
            echo '<script type="text/javascript">
                     alert("Email đã có người dùng!");
                  </script>';
            exit;
        }         
        @$addregister = mysqli_query($conn, "INSERT INTO company(name_com,Mota_com,lienhe,image_com,fb_com,email_com,tw_com,pt_com,active)
											 VALUES ('{$name_com}','{$mota}','{$lienhe}','{$hinhanh}','{$fb}','{$email}','{$tw}','{$pt}',0)");  
        if ($addregister)
           echo '<script type="text/javascript">
                    alert("Thông tin của bạn đã được cập nhật!");
					window.location.href = "td.php";
                </script>';
        else
            echo '<script type="text/javascript">
                    alert("Cập nhật thông tin thất bại!");
                 </script>';
			}
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
               
                $path = "admin/images/"; 
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
     <?php
   		include 'js/openConnection.php';
	?>