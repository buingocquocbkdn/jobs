<?php include 'js/openConnection.php' ?>

<div class="about_top">
		<div class="container">
			<div class="about1">
            <h3 style="margin:50px 0px 50px 0px; text-align:center;font-size:50px; font-weight:900; font-family:'Times New Roman', Times, serif; color:#069;">Kết quả tìm việc</h3>
				<div class="service_grid">
               	<?php
					if(isset($_POST['submit'])){
						$cv = $_POST['keyword'];
						$tcv = $_POST['industry'];
						$dd = $_POST['location'];	
						if(empty($cv)){
							if (is_null($tcv)) $sql = "SELECT * FROM company_required WHERE (DiaDiem = '$dd')";
							else if (is_null($dd)) $sql = "SELECT * FROM company_required WHERE (TenCongViec = '$tcv')";
							else $sql = "SELECT * FROM company_required WHERE (TenCongViec = '$tcv') or (DiaDiem = '$dd')";
						}
						else if(is_null($tcv)) 
										$sql = "SELECT * FROM company_required WHERE (KyNang like'%$cv%' OR ViTri like '%$cv%') OR (DiaDiem = '$dd')";
									else 
										if(is_null($dd)) 
											$sql = "SELECT * FROM company_required WHERE (KyNang like'%$cv%' OR ViTri like '%$cv%') OR (TenCongViec = '$tcv')";
											else if(is_null($tcv) && is_null($dd))
												$sql = "SELECT * FROM company_required WHERE (KyNang like '%$cv%' OR ViTri like '%$cv%') ";						
												else if(empty($cv) && empty($tcv) && empty($dd))
													$sql = "SELECT * FROM company_required";
													else
														$sql = "SELECT * FROM company_required WHERE (KyNang like '%$cv%' OR ViTri like '%$cv%') OR (TenCongViec = '$tcv') OR (DiaDiem='$dd')";
						
						
						$conn -> set_charset("utf8");
						
						$result = mysqli_query($conn, $sql);
						}
						else{
						$conn -> set_charset("utf8");
						$sql3 = "SELECT * FROM company_required	";
						$result = mysqli_query($conn, $sql3);
						}
					 if($count=mysqli_num_rows($result)==0){
						 echo' <p> Không tìm thấy công việc! </p>'; 
					   }else{
						  while ($row = $result->fetch_assoc()) { 
						  $idc = $row['id_com'];
						  $sql1 = "SELECT * FROM company WHERE id_com= $idc";
						  $result1 = mysqli_query($conn, $sql1);
						  while( $row1 = $result1->fetch_assoc()){ 
						  echo'
						  <div class="col-md-3 service_box" style="height:300px; width:280px;">
							<a class="fancybox" href="showpage.php?idc='.$row['id_com'].'&idr='.$row['id_required'].'"
							data-fancybox-group="gallery" title="" ><img
							src="admin/images/'.$row1['ava_com'].'" class="img-responsive" alt="" style="height:200px; width:600px;"/> </a> 
		  
                      	 <h3 style="text-align:center;"> <span>'.$row['TenCongViec'].'</span></h3>
						
						<p style="text-align:center;">Công Ty: '.$row1['name_com'].'
							
						</p>	
						
						</div>
					';
						}
					  }}
			?>
				</div>
			</div>
		</div>
	</div>
<?php include 'js/closeConnection.php' ?>