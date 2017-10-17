<?php include 'js/openConnection.php'; ?>
<div class="about1">
	<div class="show">
      <?php
	  echo'
    	<div class="contain">
        	<div class="show-left">
            	<div class="thanhtieude">
                	<div class="tieude">';
                  
					$idc = $_GET['idc'];
					$idr = $_GET['idr'];
					$conn -> set_charset("utf8");
                    $sql = "SELECT * FROM company_required WHERE id_required = $idr";
					$sql1 = "SELECT * FROM company WHERE id_com = $idc";
                    $result = mysqli_query($conn, $sql);
					$result1 = mysqli_query($conn, $sql1);
					$row1 = $result1->fetch_assoc();
					if ($result) {
                           while ($row = $result->fetch_assoc()) { 
							echo'
						<ul>
                    		<li>
                        		<h3>'.$row['TenCongViec'].'</h3>
                        	</li>
                    	</ul>';
						
						?>
                    </div>
					 
                    <div class="nopdon">
                   	 <form action="" method="post" id="nop" >
                    	<input type="submit" name="nopdon" value="Nộp Đơn"  />
                        </form>
                    </div>
                   
                </div>
         		<div class="noidung">
                	<ul>
                    	<li>
                        <?php
						echo'
                    <h3>Mô tả công việc:</h3>
					'.$row['MoTa'].'
					<h3>Vị trí:</h3>
					'.$row['ViTri'].'
					<h3>Kinh nghiệm/Kỹ Năng:</h3>
					'.$row['KyNang'].'
					<h3>Nơi làm việc:</h3>
					'.$row['DiaDiem'].'
					<h3>Lương khởi điểm:</h3>
					'.$row['Luong'].'

                		</li>
                    </ul>
                </div> 
					
	   
						 
            </div>
        	<div class="show-right">
            	<div class="hinhanh">';
				echo'
                	<a class="fancybox" href="" title="Product Name" ><img src="admin/images/'.$row1['image_com'].'" class="img-responsive" alt="" style="height:200px; width:300px;" /><span></span>
                    </a>
               </div>
               <div class="motacongty">
               		<h3 style="text-align:center;">'.$row1['name_com'].'</h3>
                    <p>'.$row1['Mota_com'].'</p>
               </div>
            </div>
        </div>';
	}}
                      ?>
    </div>
    <div class="clearfix"></div>

</div>

 <?php include 'js/closeConnection.php'; ?>