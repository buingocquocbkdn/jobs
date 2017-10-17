 <?php include 'lib/openConnection.php' ?>	
<!-- Form elements -->  
<div class="bottom-spacing">  
<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm</span></h2>	 
		 <div class="module-body">
         <?php  
		 $id = $_GET['id'];
		 $conn -> set_charset("utf8");
		 $sql = "SELECT * FROM register WHERE id=$id ";			
		 $result = mysqli_query($conn, $sql);
		 if ($result) {
			 while ($row = $result->fetch_assoc()) { 
		 	 echo '
				<form action="" method="post">
					<p>
						<label>Tên admin</label>
						<input type="text" name="ten" value="'.$row['username'].'" class="input-medium" />
					</p>
					<p>
						<label>Mật khẩu</label>
						<input type="password" name="matkhau" value="" class="input-medium" />
					</p>
                    <p>
						<label>Quyền truy cập</label>
						admin <input type="radio" name="pos" value="1"  />
                        user <input type="radio" name="pos" value="0"  />
					</p>				
					<fieldset>
						<input class="submit-green" name="submit" type="submit" value="Sửa" /> 
						
					</fieldset>
				</form>';}}
		?>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
    
	<div class="padding-bottom"></div> 
</div> <!-- End .grid_12 -->
<?php include 'lib/closeConnection.php' ?>