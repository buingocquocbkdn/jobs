 <?php include 'lib/openConnection.php'; ?>	
<div class="bottom-spacing">
	  <div class="float-left">
      	<p class="button"></p>
	  </div>
	  <div class="clear"></div>
</div>
<div class="grid_12">
	<div class="module">
		<h2><span>Danh sách nhà tuyển dụng</span></h2>
		<div class="module-table-body">
			<form action="">
			<table id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">ID</th>
						<th style="width:20%">Tên</th>
                        <th style="width:32%">Mô tả</th>
                        <th style="width:10%">Liên hệ</th>
                        <th style="width:9%">Email</th>
						<th style="width:10%">Tình trạng</th>
						<th style="width:15%">Chức năng</th>
					</tr>
				</thead>
				<tbody>
                <?php
					$conn -> set_charset("utf8");
					$sql = "SELECT * FROM company ORDER BY id_com DESC ";
					$result = mysqli_query($conn, $sql);
					 if ($result) {
			  		 while ($row = $result->fetch_assoc()) { 
					 if($row['active']==1){ 
					echo'<tr>
						<td class="align-center">'.$row['id_com'].'</td>
						<td class="align-center">'.$row['name_com'].'</td>
						<td class="align-center">'.$row['Mota_com'].'</td>
                        <td class="align-center">'.$row['lienhe'].'</td>
						<td class="align-center">'.$row['email_com'].'</td>
						<td class="align-center"> Duyệt </td>
						<td align="center">
							<a href="editContact.php?idc='.$row['id_com'].'&act=0"> Gở bỏ <img src="images/pencil.gif" alt="edit" /></a>';
							?> <a onclick="return confirm('Ban có muốn xóa không')" <?php echo'<a href="delContact.php?idc='.$row['id_com'].'">Xóa <img src="images/bin.gif" alt="edit" /></a>
						</td>
					</tr>';}
					else{ 
					echo'<tr>
						<td class="align-center">'.$row['id_com'].'</td>
						<td class="align-center">'.$row['name_com'].'</td>
						<td class="align-center">'.$row['Mota_com'].'</td>
                        <td class="align-center">'.$row['lienhe'].'</td>
						<td class="align-center">'.$row['email_com'].'</td>
						<td class="align-center"> Chưa Duyệt </td>
						<td align="center">
							<a href="editContact.php?idc='.$row['id_com'].'&act=1"> Duyệt <img src="images/pencil.gif" alt="edit" /></a>';
							?> <a onclick="return confirm('Ban có muốn xóa không')" <?php echo' href="delContact.php?idc='.$row['id_com'].'"  > Xóa <img src="images/bin.gif" alt="edit" /></a>
						</td>
					</tr>';}
					
					
					}}
					?>
				</tbody>
			</table>
			</form>
		 </div> 
	</div> 
		 <div class="pagination">           
			<div class="numbers">			
			</div> 
			<div style="clear: both;"></div>  
			</div> 
			<div style="clear: both;"></div> 
		  <div class="padding-bottom"></div>
	 <?php include 'lib/closeConnection.php'; ?>
</div> 