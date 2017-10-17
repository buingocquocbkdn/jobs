<?php include 'js/openConnection.php'; ?>
	<!--Slider-->
	<div class="fixxx">
	<div class="menu2">
		<div class="form" id="menu22">
			<div class="container search-widget-container">
				<div id="search-widget" class="collapse in search-widget col-sm-11">
					<h2 id="h1_nam">
						Tìm Công Việc Mơ Ước. <br class="visible-xs">
						<strong>Nâng Bước Thành Công!</strong>
					</h2>
					<div class="stylized-tab search-tabs clearfix search-form">
						<!-- Tab panes -->
						<div class="tab-content">
							<!-- Jobs -->
							<div role="tabpanel" class="tab-pane tab-job active" id="home">
								<form action="detail.php" class="form-inline form-adjacent" name="search"
									id="frm_block_quick_search" method="post" enctype="multipart/form-data">
									<div class="search-group">
										<div class="form-group col-sm-4 keyword-search no-padding">
											<div class="border-text-box">
												<input type="text" name="keyword" id="keywordMainSearch" value="" class="form-control job-typeahead" placeholder="Nhập chức danh, vị trí, kỹ năng...">	
											</div>
										</div>
										<div class="form-group col-sm-3 category-search no-padding">
                                    	  
											<div class="border-text-box">
                                            	
												<select data-search-input-placeholder="Tìm kiếm ngành nghề"
													data-placeholder="All categories" class="select-category"
													id="cateListMainSearch" name="industry">
                                                    <option value="">Tìm Theo Ngành</option>
                                                      <?php
												$conn -> set_charset("utf8");
                           						$sql = "SELECT DISTINCT (TenCongViec) FROM company_required Order By TenCongViec ASC";
                         				 		$result = mysqli_query($conn, $sql);
                           				 if ($result) {
                                		   while ($row = $result->fetch_assoc()) { 
											echo'
													<option value="'.$row['TenCongViec'].'">'.$tcv= $row['TenCongViec'].'</option>';
													}}?>
												</select>
												
											</div>
										   
										</div>
										<div class="form-group location-search col-sm-3 no-padding">
											<div class="border-text-box">
												<select class="select-location"
													data-search-input-placeholder="Tìm kiếm địa điểm"
													id="locationMainSearch" name="location"
													data-placeholder="Select location"  >
                                                    
													<option value="" >Tất cả địa điểm</option>
                                                    <?php
												$conn -> set_charset("utf8");
                           						 $sql = "SELECT DISTINCT (DiaDiem) FROM company_required Order By DiaDiem ASC";
                         				 		$result = mysqli_query($conn, $sql);
                           				 if ($result) {
                                		   while ($row = $result->fetch_assoc()) { 
											echo'
													<option value="'.$row['DiaDiem'].'">'.$dd= $row['DiaDiem'].'</option>';
													}}?>

												</select>
											</div>
										</div>
										<div class="form-group col-sm-2 text-center no-padding">
											<input type="submit" name="submit" class="btn-search-all" value="Tìm Kiếm"/>
										</div>
									</div>
								</form>
							</div>
							<!--/ Jobs -->
						</div>
					</div>
					

				</div>
        	</div>
    </div>    	
		<div class="slider">
			<div class="callbacks_container">
        	
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img">
							<img src="admin/images/banner1.jpg" class="img-responsive" alt="Real Plot">
						</div>

					</li>
					<li>
						<div class="slider-img">
							<img src="admin/images/banner2.jpg" class="img-responsive" alt="Real Plot">
						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="admin/images/banner3.jpg" class="img-responsive" alt="Real Plot">
						</div>

					</li>
					<li>
						<div class="slider-img">
							<img src="admin/images/banner4.jpg" class="img-responsive" alt="Real Plot">
						</div>

					</li>

				</ul>
				
			</div>
			<div class="clearfix"></div>
		</div>
		<!--//Slider-->
         <?php include 'js/closeConnection.php'; ?>