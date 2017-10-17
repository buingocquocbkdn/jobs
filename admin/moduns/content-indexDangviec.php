 <!-- Button -->
 <?php include 'lib/openConnection.php'; ?>	
 <div class="bottom-spacing">
	  <div class="float-left">
		  <a href="addCongViec.php" class="button">
			<span>Thêm Công Việc <img src="images/plus-small.gif" alt=""></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">

	<div class="module">
		<h2><span>Danh sách tin</span></h2>
		
		<div class="module-table-body">
			<form action="">
			<table border="1" id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">Id</th>
						<th>Tên công ty</th>
						<th style="width:15%"  rowspan="'.$row['number_record'].'">Tên công việc</th>
						<th style="width:16%; text-align: center;">Hình ảnh</th>
						<th style="width:16%; text-align: center;">Mô tả chi tiết công việc</th>
						<th style="width:11%; text-align: center;">Yêu cầu/Kĩ năng</th>
                        <th style="width:11%; text-align: center;">Mức lương</th>
                        <th style="width:11%; text-align: center;">Liên hệ</th>
                        <th style="width:15%">Danh mục</th>	
					</tr>
				</thead>
				<?php
					$conn -> set_charset("utf8");
					$sql = "SELECT * FROM company INNER JOIN company_required ON company.id_com = company_required.id_com  ";
					$result = mysqli_query($conn, $sql);
					 if ($result) {
			  		 while ($row = $result->fetch_assoc()) { 
					 echo'
						<tbody>
							<tr>
								<td class="align-center">'.$row['id_required'].'</td>
								<td>'.$row['name_com'].'</td>
								<td>'.$row['TenCongViec'].'</td>
								<td align="center">'.$row['image_com'].'</td>
								<td>'.$row['MoTa'].'</td>
								<td align="center">'.$row['KyNang'].'</td>
								<td align="center">'.$row['Luong'].'</td>
								<td align="center">'.$row['lienhe'].'</td>
								<td align="center">
									<a href="editDangviec.php?idc='.$row['id_com'].'&idr='.$row['id_required'].'">Sửa <img src="images/pencil.gif" alt="edit" /></a>';
									?> <a onclick="return confirm('Ban có muốn xóa không')" <?php echo'	<a href="delDangViec.php?idc='.$row['id_com'].'&idr='.$row['id_required'].'">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
								</td>
							</tr>
						</tbody>';
					}}
				?>
			</table>
			</form>
		 </div> <!-- End .module-table-body -->
	</div> <!-- End .module -->
		 <div class="pagination">           
			<div class="numbers">
				 
			</div> 
			<div style="clear: both;"></div> 
		 </div>
         <div style="clear: both;"></div> 

          <div class="padding-bottom"></div>
	
</div> <!-- End .grid_12 -->
 <?php include 'lib/closeConnection.php'; ?>