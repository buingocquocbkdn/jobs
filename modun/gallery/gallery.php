<?php include 'js/openConnection.php'; ?>
<div class="gallery" id="gallery">
		<div class="container">
	<!--script-->
						<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
    <!--script-->
		<h3 class="tittle">Hình ảnh công ty</h3>
			<div class="gallery-grids">
			<section>
				<ul id="da-thumbs" class="da-thumbs">
                 <?php 
				 		  $conn -> set_charset("utf8");
                           
                            $sql = "SELECT * FROM company WHERE active=1 LIMIT 9 ";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                while ($row = $result->fetch_assoc()) { 
							echo'		
						 <li>
							<a href="admin/images/'.$row['ava_com'].'" class="b-link-stripe b-animate-go  thickbox">
							
							<img  src="admin/images/'.$row['ava_com'].'" alt="" style="height:300px; width="300px";" />
							<div>';
								echo '<h5>'.$row['name_com'].'</h5>';
								echo '<p>'.$row['Mota_com']. '</p>;
							</div>
							</a>
			      		</li>';
				}}			   
			 ?>
				</ul>
			</section>
        </div>
	</div>
</div>
 <?php include 'js/closeConnection.php'; ?>