 <?php include 'lib/openConnection.php'; ?>
<!-- Form elements -->      
<div class="grid_12">

	<div class="module">
		 <h2><span>Thêm tin tức</span></h2>
			
		 <div class="module-body">
		 
			<form method ="post" action="" enctype="multipart/form-data">
				<p>
					<label>Tên việc</label>
					<input type="text" name="tenviec" value="" class="input-medium" />
				</p>
				<p>	
                	<select name="name_com" >
                    	<option value=""> Tên Công Ty </option>
                        <?php
							$conn->set_charset('utf8');
							$sql = "SELECT * FROM company ORDER BY id_com ASC";
							$result =mysqli_query($conn , $sql);
							$idc = 0;
							while($row = $result->fetch_assoc()){
								
							echo '<option value="'.$row['name_com'].'"> '.$row['name_com'].'</option>';
							;
							}?>
                   		 </select>
							
          				   
							<p>
               				 <label>id_com</label>
							<input type="text" name="id" value="$idc" class="input-medium" />
               			 </p>
							
				<p>
					<label>Mô tả chi tiết công việc</label>
					<textarea name="mota" rows="7" cols="90" class="input-medium"></textarea>
				</p>
                <p>
					<label>Yêu cầu/Kĩ năng</label>
					<textarea name="knkn" rows="7" cols="90" class="input-medium"></textarea>
				</p>
                <p>
					<label>Mức lương</label>
					<textarea name="luong" rows="7" cols="90" class="input-medium"></textarea>
				</p>
				<p>
					<label>Vị Trí</label>
					<textarea  name="vitri" rows="7" cols="90" class="input-medium"></textarea>
				</p>
                <p>
					<label>Địa Điểm</label>
					<textarea  name="diadiem" rows="7" cols="90" class="input-medium"></textarea>
				</p>
				<fieldset>
					<input class="submit-green" name="submit" type="submit" value="Thêm" /> 
				</fieldset>
			</form>
			
		 </div> <!-- End .module-body -->

	</div>  <!-- End .module -->
	<div style="clear:both;"></div>
    
</div> <!-- End .grid_12 -->

 <?php include 'lib/closeConnection.php'; ?>l