 <?php include 'lib/openConnection.php' ?>	
<div class="bottom-spacing">
	  <div class="float-left">
		  <a href="addAdmin.php" class="button">
			<span>Thêm Admin<img src="images/plus-small.gif" alt=""></span>
		  </a>
	  </div>
	  <div class="clear"></div>
</div>

<div class="grid_12">
	<div class="module">
		<h2><span>Danh sách người dùng</span></h2>
		<div class="module-table-body">
			<form action="">
			<table  id="myTable" class="tablesorter">
				<thead>
					<tr>
						<th style="width:4%; text-align: center;">ID</th>
						<th>Tên</th>
                        <th style="width:30%">Mật khẩu</th>
						<th style="width:20%">Danh mục</th>	
					</tr>
				</thead>
                <?php
					$conn -> set_charset("utf8");
					$sql = "SELECT * FROM register ";			
					$result = mysqli_query($conn, $sql);
					 if ($result) {
			  		 while ($row = $result->fetch_assoc()) { 
					 echo'
						<tbody>
							<tr>
								<td class="align-center">'.$row['id'].'</td>
								<td><a href="">'.$row['username'].'</a></td>
								<td><a href="">'.$row['password'].'</a></td>
								<td align="center">
									<a href="editAdmin.php?id='.$row['id'].'&pos='.$row['position'].'">Sửa <img src="images/pencil.gif" alt="edit" /></a>';
									if($row['position']==2){}
									else{
									?> <a onclick="return confirm('Ban có muốn xóa không')" <?php echo'<a href="delAdmin.php?idd='.$row['id'].'">Xóa <img src="images/bin.gif" width="16" height="16" alt="delete" /></a>
									';}
								echo '</td>
							</tr>
						</tbody>';
						}
					 }
				?>
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
</div> 
 <?php include 'lib/closeConnection.php' ?>