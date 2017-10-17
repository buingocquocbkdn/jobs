<?php include 'lib/openConnection.php'; ?>

<script src="lib/responsiveslides.min.js"></script>	
	  <div id="header">
            <div id="header-status">
                <div class="container_12">
                    <div class="grid_4">
                    	<ul class="user-pro">
                         <?php
						 		if(isset($_SESSION['username'])){
								echo' <li><a href="" id="hello"><span>';
									echo'Chào '.$_SESSION['username'].'
									<li><a href="admin-logout.php" id="logout" >Logout</a></li>';
								}else{
									echo'
									<li><a href="admin-login.php" id="login" >Login</a></li>';
								}		
							?>
						
                    	</ul> 
                    </div>
                </div>
<?php
if (isset($_SESSION['username'])) {
echo '
<script>
    $("#hello").show();
    $("#logout").show();
    $("#login").hide();
</script>';
}
else {
echo'<script>
    $("#hello").hide();
    $("#logout").hide();
    $("#login").show();
</script>';
};
?>
<?php include 'lib/closeConnection.php'; ?>

                <div style="clear:both;"></div>
            </div> 
            <div id="header-main">
                <div class="container_12">
                    <div class="grid_12">
                        <div id="logo">
                            <ul id="nav">
                                <li id="current"><a href="index.php">Quản trị</a></li>
                            </ul>
                        </div>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </div> 
            <div style="clear: both;"></div>
          
            <div id="subnav">
                <div class="container_12">
                    <div class="grid_12">
                        <ul>
                             <li><a href="index.php">Giới thiệu</a></li>
                             <li><a href="indexDangviec.php">Đăng Việc</a></li>
                             <li><a href="indexAdmin.php">Người dùng</a></li>
                             <li><a href="indexContact.php">Nhà tuyển dụng</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div> 
        </div> 
        
		<div class="container_12">

