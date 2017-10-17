<?php session_start(); ?>

<?php include 'js/openConnection.php'; ?>
<nav class="linkEffects linkHoverEffect_12">
<script src="js/responsiveslides.min.js"></script>									
                                
                               
									<ul>
                                    <?php
									$idt=0;	
                                if (isset($_SESSION['uname'])) {
									$idt= $_SESSION['id'];
									echo'<li><a class="active" id="acc" ><span>';
                                    echo 'Chào, '.$_SESSION['uname'];
									
                                } else {
									echo'<li><a class="active"  ><span>';
                                    echo 'Bạn là Khách';
                                };
								echo'
                                </span></a></li> 
										<li><a href="detail.php"><span>Tấc cả công việc</span></a></li> 
										<li><a href="td.php" id="td"><span>Nhà tuyển dụng</span></a></li>
                                        <li><a href="cv.php?id='.$idt.'" id="cv"><span>Hồ sơ của bạn</span></a></li>  
                                        <li><a href="login.php" id="login"><span>Đăng nhập</span></a></li>
                                        <li><a href="logout.php" id="logout"><span>Đăng xuất</span></a></li>
										<li><a href="register.php" id="register"><span>Đăng ký</span></a></li> '
									?>	
									</ul>
								</nav>	
<?php
if (isset($_SESSION['uname'])) {
echo '
<script>
    $("#acc").show();
    $("#logout").show();
    $("#login").hide();
    $("#register").hide();
    $("#cv").show();
	$("#td").show();
</script>';
}
else {
echo'<script>
    $("#acc").hide();
    $("#logout").hide();
    $("#login").show();
    $("#register").show();
    $("#cv").hide();
	$("#td").hide();
</script>';
};
 include 'js/closeConnection.php'; ?>