<?php include 'js/openConnection.php'; ?>
<div class="team" id="team">
		<div class="container"> 
			<h3 class="tittle">Nhà tuyển dụng mới nhất</h3>
			<div class="main">
			
                 <?php 
				 		  $conn -> set_charset("utf8");
                           
                            $sql = "SELECT * FROM company WHERE active=1 GROUP BY id_com DESC LIMIT 4 ";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) { 
							echo'		
							<div class="col-md-3 team-sec wow fadeInLeft animated animated" data-wow-delay=".5s">
							<div class="view fifth-effect">
					
                     <a href="#" title="Full Image"><img src="admin/images/'.$row['image_com'].'" alt="image"/></a>
					 <div class="mask"></div>
					  
				</div>  
				 <div class="clearfix"></div>
				<div class="team-grid">		';
									
                                  echo '<h4>' . $row['name_com']. '</h4>';
											
                                            
							  echo '<p>' . $row['Mota_com'] . '</p>
							   </div>
				<div class="team-icon">			  
								    <ul class="top-icons team-icon">
										<li><a href="http://'.$row['fb_com'].'"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="http://'.$row['email_com'].'"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="http://'.$row['tw_com'].'"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="http://'.$row['pt_com'].'"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								    </ul>';
									 ?>
                                     
						  </div>
						  <div class="clearfix"></div>
				  </div>	
			 
               <?php }} ?>	
			</div>
	   </div>
	</div>
 <?php include 'js/closeConnection.php'; ?>