
<!-- Form elements -->      
<div class="grid_12">

	<div class="module">
		 <h2><span>Sửa</span></h2>
			
		 <div class="module-body">
		 <?php include 'lib/openConnection.php' ?>	
   		 <?php
			 $idc = $_GET['idc'];
			 $idr = $_GET['idr'];
			 $conn -> set_charset("utf8");
			 $sql = "SELECT * FROM company INNER JOIN company_required ON company.id_com = company_required.id_com WHERE company.id_com=$idc";
			 $result = mysqli_query($conn, $sql);
			 if ($result) {
			  		 while ($row = $result->fetch_assoc() ) { 
		 
				echo'<form method ="post" action="" enctype="multipart/form-data">
					<p>
						<label>Tên việc</label>
						<input type="text" name="tenviec" value="'.$row['TenCongViec'].'" class="input-medium" />
					</p>
					<p>
						<label>Tên công ty</label>
						<input type="text" name="tencongty" value="'.$row['name_com'].'" class="input-medium" />
					</p>
					<p>
						<label>Hình ảnh</label>
						<input type="file"  name="hinhanh" value="'.$row['image_com'].'" />
					</p>
					<p>
						<label>Mô tả chi tiết công việc</label>
						<textarea name="mota"  rows="7" cols="90" class="input-medium"></textarea>
					</p>
					<p>
						<label>Yêu cầu/Kĩ năng</label>
						<textarea name="knkn"  rows="7" cols="90" class="input-medium"></textarea>
					</p>
					<p>
						<label>Mức lương</label>
						<textarea name="luong"  rows="7" cols="90" class="input-medium"></textarea>
					</p>
					<p>
						<label>Liên hệ</label>
						<textarea  name="lienhe"  rows="7" cols="90" class="input-medium"></textarea>
					</p>
					<fieldset>
						<input class="submit-green" name="submit" type="submit" value="Sửa" /> 
					</fieldset>
				</form>';}}
			?>
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
    
</div> <!-- End .grid_12 -->

<?php include 'lib/closeConnection.php' ?>