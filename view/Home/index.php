	
		<?php
			require_once 'config/db.php';
			$db = new connect();
			$conn = $db->getConnection();
			
			
			// Lấy dữ liệu từ bảng "property_types"
			$propertyTypesQuery = "SELECT * FROM property_types";
			$propertyTypesResult = $conn->query($propertyTypesQuery);
			// Lấy dữ liệu từ bảng "utilities"
			$utilitiesQuery = "SELECT * FROM utilities";
			$utilitiesResult = $conn->query($utilitiesQuery);
		?>
		<!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
            
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="hero-banner vedio-banner">
				<div class="overlay"></div>	

				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
					<source src="public/img/banners.mp4" type="video/mp4">
				</video>
				
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<h1 class="big-header-capt mb-0 text-light">SANCITY VIETNAM</h1>
							<p class="text-center mb-4 text-light">Tìm kiếm các bất động sản mới và nổi bật nằm trong thành phố của bạn.</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="simple_tab_search center">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="sell-tab" data-toggle="tab" href="#sell" role="tab" aria-controls="sell" aria-selected="false">Sell</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Rent</a>
									</li>
								</ul>
								
								<div class="tab-content" id="myTabContent">
									
								<form action="" method="GET">
									<!-- Tab for Buy -->
									<div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
										<div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
											<div class="search_hero_wrapping">
										
												<div class="row">
												
													<div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
														<div class="form-group">
															<label>Tìm nhanh</label>
															<input type="text" name="keyword" class="form-control search_input b-0" placeholder="ex. Tên bất động sản" />
														</div>
													</div>
													
													<div class="col-lg-3 col-md-3 col-sm-12">
														<div class="form-group">
															<label>Tỉnh/Thành phố</label>
															<div class="input-with-icon">
																<select id="location" name="city" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="Hà Nội">Hà Nội</option>
																	<option value="Đà nẵng">Đà nẵng</option>
																	<option value="Bình Dương">Bình Dương</option>
																	<option value="TP. Hồ Chí Minh">Hồ Chí  Minh</option>
																	<option value="Cần Thơ">Cần Thơ</option>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group">
															<label>Loại bất động sản</label>
															<div class="input-with-icon">
																<select id="ptypes" name="propertyType" class="form-control">
																<option value="">&nbsp;</option>
																	<?php while ($row = $propertyTypesResult->fetch(PDO::FETCH_ASSOC)) { ?>
																		<option value="<?php echo $row['type_id']; ?>"><?php echo $row['type_name']; ?></option>
																	<?php } ?>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group none">
															<a class="collapsed ad-search" data-toggle="collapse" data-parent="#search" data-target="#advance-search" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Tìm kiếm nâng cao</a>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12 small-padd">
														<div class="form-group none">
															<button class="btn search-btn" type="submit" value="submit" >Tìm kiếm</button>

														</div>
													</div>
												</div>
												
												<!-- Collapse Advance Search Form -->
												<div class="collapse" id="advance-search" aria-expanded="false" role="banner">
													


													
													<!-- row -->
													<div class="row">
													
														<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
															<h4 class="text-dark">Tiện nghi & tính năng</h4>
															<ul class="no-ul-list third-row">
															<?php while ($row = $utilitiesResult->fetch(PDO::FETCH_ASSOC)) { ?>
																<li>
																	<input id="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom" name="utilities[]" type="checkbox" value="<?php echo $row['utility_id']; ?>">
																	<label for="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom-label"><?php echo $row['utility_name']; ?></label>
																</li>
															<?php } ?>
															</ul>
														</div>
														
													</div>
													<!-- /row -->
													
												</div>
												
											</div>
										</div>
									</div>
									</form>
									
									<!-- Tab for Sell -->
									<div class="tab-pane fade" id="sell" role="tabpanel" aria-labelledby="sell-tab">
										<div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
											<div class="search_hero_wrapping">
										
												<div class="row">
												
													<div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
														<div class="form-group">
															<label>Price Range</label>
															<input type="text" class="form-control search_input b-0" placeholder="ex. Neighborhood" />
														</div>
													</div>
													
													<div class="col-lg-3 col-md-3 col-sm-12">
														<div class="form-group">
															<label>City/Street</label>
															<div class="input-with-icon">
																<select id="lot-1" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">New York City</option>
																	<option value="2">Honolulu, Hawaii</option>
																	<option value="3">California</option>
																	<option value="4">New Orleans</option>
																	<option value="5">Washington</option>
																	<option value="6">Charleston</option>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group">
															<label>Property Type</label>
															<div class="input-with-icon">
																<select id="ptype-1" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">All categories</option>
																	<option value="2">Apartment</option>
																	<option value="3">Villas</option>
																	<option value="4">Commercial</option>
																	<option value="5">Offices</option>
																	<option value="6">Garage</option>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group none">
															<a class="collapsed ad-search" data-toggle="collapse" data-parent="#search1" data-target="#advance-search-1" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12 small-padd">
														<div class="form-group none">
															<a href="#" class="btn search-btn">Search Property</a>
														</div>
													</div>
												</div>
												
												<!-- Collapse Advance Search Form -->
												<div class="collapse" id="advance-search-1" aria-expanded="false" role="banner">
													
													<!-- row -->
													<div class="row">
													
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none style-auto">
																<select id="bedrooms1" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none style-auto">
																<select id="bathrooms1" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none">
																<input type="text" class="form-control" placeholder="min sqft" />
															</div>
														</div>
														
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none">
																<input type="text" class="form-control" placeholder="max sqft" />
															</div>
														</div>
														
													</div>
													<!-- /row -->
													
													<!-- row -->
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 mt-2">
															<h6>Advance Price</h6>
															<div class="rg-slider">
																 <input type="text" class="js-range-slider" name="my_range" value="" />
															</div>
														</div>
													</div>
													<!-- /row -->
													
													<!-- row -->
													<div class="row">
													
														<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
															<h4 class="text-dark">Amenities & Features</h4>
															<ul class="no-ul-list third-row">
																<li>
																	<input id="a-1a" class="checkbox-custom" name="a-1a" type="checkbox">
																	<label for="a-1a" class="checkbox-custom-label">Air Condition</label>
																</li>
																<li>
																	<input id="a-2b" class="checkbox-custom" name="a-2b" type="checkbox">
																	<label for="a-2b" class="checkbox-custom-label">Bedding</label>
																</li>
																<li>
																	<input id="a-3c" class="checkbox-custom" name="a-3c" type="checkbox">
																	<label for="a-3c" class="checkbox-custom-label">Heating</label>
																</li>
																<li>
																	<input id="a-4d" class="checkbox-custom" name="a-4d" type="checkbox">
																	<label for="a-4d" class="checkbox-custom-label">Internet</label>
																</li>
																<li>
																	<input id="a-5e" class="checkbox-custom" name="a-5e" type="checkbox">
																	<label for="a-5e" class="checkbox-custom-label">Microwave</label>
																</li>
																<li>
																	<input id="a-6f" class="checkbox-custom" name="a-6f" type="checkbox">
																	<label for="a-6f" class="checkbox-custom-label">Smoking Allow</label>
																</li>
																<li>
																	<input id="a-7g" class="checkbox-custom" name="a-7g" type="checkbox">
																	<label for="a-7g" class="checkbox-custom-label">Terrace</label>
																</li>
																<li>
																	<input id="a-8h" class="checkbox-custom" name="a-8h" type="checkbox">
																	<label for="a-8h" class="checkbox-custom-label">Balcony</label>
																</li>
																<li>
																	<input id="a-9i" class="checkbox-custom" name="a-9i" type="checkbox">
																	<label for="a-9i" class="checkbox-custom-label">Icon</label>
																</li>
																<li>
																	<input id="a-10j" class="checkbox-custom" name="a-10j" type="checkbox">
																	<label for="a-10j" class="checkbox-custom-label">Wi-Fi</label>
																</li>
																<li>
																	<input id="a-11k" class="checkbox-custom" name="a-11k" type="checkbox">
																	<label for="a-11k" class="checkbox-custom-label">Beach</label>
																</li>
																<li>
																	<input id="a-12l" class="checkbox-custom" name="a-12l" type="checkbox">
																	<label for="a-12l" class="checkbox-custom-label">Parking</label>
																</li>
															</ul>
														</div>
														
													</div>
													<!-- /row -->
													
												</div>
												
											</div>
										</div>

									</div>
									
									<!-- Tab for Rent -->
									<div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
										<div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
											<div class="search_hero_wrapping">
										
												<div class="row">
												
													<div class="col-lg-3 col-sm-12 d-md-none d-lg-block">
														<div class="form-group">
															<label>Price Range</label>
															<input type="text" class="form-control search_input b-0" placeholder="ex. Neighborhood" />
														</div>
													</div>
													
													<div class="col-lg-3 col-md-3 col-sm-12">
														<div class="form-group">
															<label>City/Street</label>
															<div class="input-with-icon">
																<select id="lot-2" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">New York City</option>
																	<option value="2">Honolulu, Hawaii</option>
																	<option value="3">California</option>
																	<option value="4">New Orleans</option>
																	<option value="5">Washington</option>
																	<option value="6">Charleston</option>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group">
															<label>Property Type</label>
															<div class="input-with-icon">
																<select id="ptype-2" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">All categories</option>
																	<option value="2">Apartment</option>
																	<option value="3">Villas</option>
																	<option value="4">Commercial</option>
																	<option value="5">Offices</option>
																	<option value="6">Garage</option>
																</select>
															</div>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12">
														<div class="form-group none">
															<a class="collapsed ad-search" data-toggle="collapse" data-parent="#search" data-target="#advance-search-2" href="javascript:void(0);" aria-expanded="false" aria-controls="advance-search"><i class="fa fa-sliders-h mr-2"></i>Advance Filter</a>
														</div>
													</div>
													
													<div class="col-lg-2 col-md-3 col-sm-12 small-padd">
														<div class="form-group none">
															<a href="#" class="btn search-btn">Search Property</a>
														</div>
													</div>
												</div>
												
												<!-- Collapse Advance Search Form -->
												<div class="collapse" id="advance-search-2" aria-expanded="false" role="banner">
													
													<!-- row -->
													<div class="row">
													
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none style-auto">
																<select id="bedrooms2" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none style-auto">
																<select id="bathrooms2" class="form-control">
																	<option value="">&nbsp;</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none">
																<input type="text" class="form-control" placeholder="min sqft" />
															</div>
														</div>
														
														<div class="col-lg-3 col-md-6 col-sm-6">
															<div class="form-group none">
																<input type="text" class="form-control" placeholder="max sqft" />
															</div>
														</div>
														
													</div>
													<!-- /row -->
													
													<!-- row -->
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 mt-2">
															<h6>Advance Price</h6>
															<div class="rg-slider">
																 <input type="text" class="js-range-slider" name="my_range" value="" />
															</div>
														</div>
													</div>
													<!-- /row -->
													
													<!-- row -->
													<div class="row">
													
														<div class="col-lg-12 col-md-12 col-sm-12 mt-3">
															<h4 class="text-dark">Amenities & Features</h4>
															<ul class="no-ul-list third-row">
																<li>
																	<input id="a-a1" class="checkbox-custom" name="a-a1" type="checkbox">
																	<label for="a-a1" class="checkbox-custom-label">Air Condition</label>
																</li>
																<li>
																	<input id="a-b2" class="checkbox-custom" name="a-b2" type="checkbox">
																	<label for="a-b2" class="checkbox-custom-label">Bedding</label>
																</li>
																<li>
																	<input id="a-c3" class="checkbox-custom" name="a-c3" type="checkbox">
																	<label for="a-c3" class="checkbox-custom-label">Heating</label>
																</li>
																<li>
																	<input id="a-d4" class="checkbox-custom" name="a-d4" type="checkbox">
																	<label for="a-d4" class="checkbox-custom-label">Internet</label>
																</li>
																<li>
																	<input id="a-e5" class="checkbox-custom" name="a-e5" type="checkbox">
																	<label for="a-e5" class="checkbox-custom-label">Microwave</label>
																</li>
																<li>
																	<input id="a-f6" class="checkbox-custom" name="a-f6" type="checkbox">
																	<label for="a-f6" class="checkbox-custom-label">Smoking Allow</label>
																</li>
																<li>
																	<input id="a-g7" class="checkbox-custom" name="a-g7" type="checkbox">
																	<label for="a-g7" class="checkbox-custom-label">Terrace</label>
																</li>
																<li>
																	<input id="a-h8" class="checkbox-custom" name="a-h8" type="checkbox">
																	<label for="a-h8" class="checkbox-custom-label">Balcony</label>
																</li>
																<li>
																	<input id="a-i9" class="checkbox-custom" name="a-i9" type="checkbox">
																	<label for="a-i9" class="checkbox-custom-label">Icon</label>
																</li>
																<li>
																	<input id="a-j10" class="checkbox-custom" name="a-j10" type="checkbox">
																	<label for="a-j10" class="checkbox-custom-label">Wi-Fi</label>
																</li>
																<li>
																	<input id="a-k11" class="checkbox-custom" name="a-k11" type="checkbox">
																	<label for="a-k11" class="checkbox-custom-label">Beach</label>
																</li>
																<li>
																	<input id="a-l12" class="checkbox-custom" name="a-l12" type="checkbox">
																	<label for="a-l12" class="checkbox-custom-label">Parking</label>
																</li>
															</ul>
														</div>
														
													</div>
													<!-- /row -->
													
												</div>
												
											</div>
										</div>

									</div>
									
								</div>
								
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->

						
			<!-- ============================ Property Type Start ================================== -->
			<section class="light-bg min">
				<div class="container">
				
					<!-- <div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="sec-heading center">
								<h2>Loại hình bất động sản</h2>
								<p>Find All Type of Property.</p>
							</div>
						</div>
					</div> -->
					
					<div class="row justify-content-center">
						
						<div class="col-lg col-md-4">
							<!-- Single Category -->
							<div class="property_cats_boxs">
								<a href="grid-layout-with-sidebar.html" class="category-box">
									<div class="property_category_short">
										<div class="category-icon clip-1">
											<i class="flaticon-beach-house-2"></i>
										</div>

										<div class="property_category_expand property_category_short-text">
											<h4>Nhà gia đình</h4>
											<p>122 bất động sản</p>
										</div>
									</div>
								</a>	
							</div>
						</div>
						
						<div class="col-lg col-md-4">
							<!-- Single Category -->
							<div class="property_cats_boxs">
								<a href="grid-layout-with-sidebar.html" class="category-box">
									<div class="property_category_short">
										<div class="category-icon clip-2">
											<i class="flaticon-cabin"></i>
										</div>

										<div class="property_category_expand property_category_short-text">
											<h4>Nhà & Biệt thự</h4>
											<p>155 bất động sản</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg col-md-4">
							<!-- Single Category -->
							<div class="property_cats_boxs">
								<a href="grid-layout-with-sidebar.html" class="category-box">
									<div class="property_category_short">
										<div class="category-icon clip-3">
											<i class="flaticon-apartments"></i>
										</div>

										<div class="property_category_expand property_category_short-text">
											<h4>Căn hộ</h4>
											<p>300 bất động sản</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg col-md-4">
							<!-- Single Category -->
							<div class="property_cats_boxs">
								<a href="grid-layout-with-sidebar.html" class="category-box">
									<div class="property_category_short">
										<div class="category-icon clip-4">
											<i class="flaticon-student-housing"></i>
										</div>

										<div class="property_category_expand property_category_short-text">
											<h4>Studio</h4>
											<p>80 bất động sản</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg col-md-4">
							<!-- Single Category -->
							<div class="property_cats_boxs">
								<a href="grid-layout-with-sidebar.html" class="category-box">
									<div class="property_category_short">
										<div class="category-icon clip-5">
											<i class="flaticon-modern-house-4"></i>
										</div>

										<div class="property_category_expand property_category_short-text">
											<h4>Villa Chung cư</h4>
											<p>80 bất động sản</p>
										</div>
									</div>
								</a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Type End ================================== -->
			
			<!-- ============================ Latest Property For Sale Start ================================== -->
			<section class="min">
				<div class="container">

				<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div style="border-radius: 50px;background: rgba(49, 177, 54,0.1);  color: #31b136;" class="sec-heading center mb-4">
							
								<p style="font-size: large;font-weight: 600; color: #00966a"><img src="public/img/deals.png" class="img-fluid" width="80" alt=""> NHÀ MỚI GẦN ĐÂY</p>
							</div>
						</div>
					</div>
					
					<div id="property_list" class="row justify-content-center">
						
						<!--đặt đoạn mã PHP xử lý truy vấn ở một file riêng và include vào đây -->
						<?php foreach ($result as $row) { ?>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
							<div class="property-listing list_view">
								<div class="listing-img-wrapper">
									<div class="_exlio_125" style="background:<?php echo ($row['status'] == 'Bán') ? '' : (($row['status'] == 'Thuê') ? '#0072c6 ' : ''); ?>">
									<?php echo $row['status']; ?>
								</div>
									<div class="list-img-slide">
										<div class="click">
											<div><a href="?controller=BdsRent&action=single&property_id=<?php echo $row['property_id']; ?>"><img src="public/upload/properties/<?php echo $row['image_url']; ?>" class="img-fluid mx-auto" alt="" /></a></div>

										</div>
									</div>
								</div>
								<div class="list_view_flex">
									<div class="listing-detail-wrapper mt-1">
										<div class="listing-short-detail-wrap">
											<div class="_card_list_flex mb-2">
												<div class="_card_flex_01">
													<span class="_list_blickes _netork">VIP</span>
													<span class="property-type elt_rent"><?php echo $row['age']; ?></span>
													<span class="_list_blickes types"><?php echo $row['type_name']; ?></span>
												</div>
												<div class="_card_flex_last">
													<h6 class="listing-card-info-price mb-0"></h6>
												</div>
											</div>
											<div class="_card_list_flex">
												<div class="_card_flex_01">
												<h4 class="listing-name verified"><a href="?controller=BdsRent&action=single&property_id=<?php echo $row['property_id']; ?>" class="prt-link-detail">
														<?php
														$property_name = $row['property_name'] . ', ' . $row['city'];
														if (strlen($property_name) > 70) {
															$property_name = substr($property_name, 0, 67) . '...';
														}
														echo htmlentities($property_name);
														?>
													</a>
												</h4>
												</div>
											</div>
										</div>
									</div>
									<div class="price-features-wrapper">
										<div class="list-fx-features">
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="public/img/bed.svg" width="13" alt="" /></div><?php echo $row['bedroom_count']; ?> Beds
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="public/img/bathtub.svg" width="13" alt="" /></div><?php echo $row['bathroom_count']; ?> Baths
											</div>
											<div class="listing-card-info-icon">
												<div class="inc-fleat-icon"><img src="public/img/move.svg" width="13" alt="" /></div><?php echo $row['real_area']; ?> m<sup>2</sup>
											</div>
										</div>
									</div>

									<div class="listing-detail-footer">
										<div class="footer-first">
											<div class="foot-rates">
												<span class="elio_rate perfect">
														
													<?php
														$price = $row['formatted_price'];
														if (mb_strlen($price) > 6) {
															$price = mb_substr($price, 0, 6) . '';
														}
														echo htmlentities($price);
													?>/<?php echo $row['unit']; ?>

												</span>
											</div>
										</div>
										<div class="footer-flex">
											<a href="?controller=BdsRent&action=single&property_id=<?php echo $row['property_id']; ?>" class="prt-view">Xem chi tiết</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>

					<!-- End Single Property -->	
					</div>

					<!-- Load more -->
					<!-- <div class="row">
					<div id="property_placeholder"></div>
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">

							<button id="load_more" name="load_more" value="Load more" onclick="load_ajax()" class="btn btn-theme-light-2 rounded">Xem thêm</button>
						</div>
					</div> -->
					
				</div>
			</section>
			<!-- ============================ Latest Property For Sale End ================================== -->
			
			
	
			<!-- ============================ Property Location ================================== -->
			<section class="min">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-8">
							<div class="sec-heading center">
								<h2>Các điểm nóng bất động sản</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						
						<!-- Single Location -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="grid-layout-with-sidebar.html" class="img-wrap style-2">
									<div class="location_wrap_content visible">
										<div class="location_wrap_content_first">
											<h4>New Orleans, Louisiana</h4>
											<ul>
												<li><span>12 Villas</span></li>
												<li><span>10 Apartments</span></li>
												<li><span>07 Offices</span></li>
											</ul>
										</div>
									</div>
								<div class="img-wrap-background" style="background-image: url(public/img/city-1.png);"></div>
							</a>
						</div>
						
						<!-- Single Location -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="grid-layout-with-sidebar.html" class="img-wrap style-2">
									<div class="location_wrap_content visible">
										<div class="location_wrap_content_first">
											<h4>Jerrsy, United State</h4>
											<ul>
												<li><span>12 Villas</span></li>
												<li><span>10 Apartments</span></li>
												<li><span>07 Offices</span></li>
											</ul>
										</div>
									</div>
								<div class="img-wrap-background" style="background-image: url(public/img/city-2.png);"></div>
							</a>
						</div>
						
						<!-- Single Location -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="grid-layout-with-sidebar.html" class="img-wrap style-2">
									<div class="location_wrap_content visible">
										<div class="location_wrap_content_first">
											<h4>Liverpool, London</h4>
											<ul>
												<li><span>12 Villas</span></li>
												<li><span>10 Apartments</span></li>
												<li><span>07 Offices</span></li>
											</ul>
										</div>
									</div>
								<div class="img-wrap-background" style="background-image: url(public/img/city-3.png);"></div>
							</a>
						</div>
						
						<!-- Single Location -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="grid-layout-with-sidebar.html" class="img-wrap style-2">
									<div class="location_wrap_content visible">
										<div class="location_wrap_content_first">
											<h4>NewYork, United States</h4>
											<ul>
												<li><span>12 Villas</span></li>
												<li><span>10 Apartments</span></li>
												<li><span>07 Offices</span></li>
											</ul>
										</div>
									</div>
								<div class="img-wrap-background" style="background-image: url(public/img/city-4.png);"></div>
							</a>
						</div>
						
						<!-- Single Location -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="grid-layout-with-sidebar.html" class="img-wrap style-2">
									<div class="location_wrap_content visible">
										<div class="location_wrap_content_first">
											<h4>Montreal, Canada</h4>
											<ul>
												<li><span>12 Villas</span></li>
												<li><span>10 Apartments</span></li>
												<li><span>07 Offices</span></li>
											</ul>
										</div>
									</div>
								<div class="img-wrap-background" style="background-image: url(public/img/city-5.png);"></div>
							</a>
						</div>
						
						<!-- Single Location -->
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="grid-layout-with-sidebar.html" class="img-wrap style-2">
									<div class="location_wrap_content visible">
										<div class="location_wrap_content_first">
											<h4>California, USA</h4>
											<ul>
												<li><span>12 Villas</span></li>
												<li><span>10 Apartments</span></li>
												<li><span>07 Offices</span></li>
											</ul>
										</div>
									</div>
								<div class="img-wrap-background" style="background-image: url(public/img/city-6.png);"></div>
							</a>
						</div>
						
					</div>
					
				</div>
			</section>
			<!-- ============================ Property Location End ================================== -->
			
			
			<!-- ============================ Our Partner Start ================================== -->

			
			<!-- ============================ List Tag Start ================================== -->
			<section>
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="eplios_tags">
								<div class="tags-1">01</div>
								<h2>Search & Find Perfect Place</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								<ul class="eplios_list">
									<li>100% Money Gaurantee</li>
									<li>Super & Perfect Place</li>
									<li>Effective & Best Price</li>
									<li>Friendly & Lovely Area</li>
								</ul>
							</div>
						</div>
						
						<div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
							<div class="text-center">
								<img src="public/img/tag.png" class="img-fluid" alt="" />
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Tag End ================================== -->

			<!-- ============================ List Tag Start ================================== -->
			<section class="pt-0">
				<div class="container">
					<div class="row align-items-center justify-content-between">
					
						<div class="col-xl-5 col-lg-5 col-md-6 col-sm-12">
							<div class="text-center">
								<img src="public/img/app.png" class="img-fluid" alt="" />
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="eplios_tags right">
								<div class="tags-2">02</div>
								<h2>Meet Agents & Fixed Your Deal</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
								<a href="#" class="btn exliou theme-bg mt-2">Find Properties</a>
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Tag End ================================== -->
			<section class="bg-cover" style="background:#00966a url(public/img/curve.svg)no-repeat">
				<div class="container">
					
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 col-sm-12">
							<div class="reio_o9i text-center mb-5">
								<h2 class="text-light">Less work, meet our partner.</h2>
								<p class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-lg-9 col-md-10 col-sm-12 flex-wrap justify-content-center text-center">
							<div class="pertner_flexio">
								<img src="public/img/c-1.png" class="img-fluid" alt="" />
								<h5>Google Inc</h5>
							</div>
							<div class="pertner_flexio">
								<img src="public/img/c-2.png" class="img-fluid" alt="" />
								<h5>Dribbbdio</h5>
							</div>
							<div class="pertner_flexio">
								<img src="public/img/c-3.png" class="img-fluid" alt="" />
								<h5>Lio Vission</h5>
							</div>
							<div class="pertner_flexio">
								<img src="public/img/c-4.png" class="img-fluid" alt="" />
								<h5>Alzerra</h5>
							</div>
							<div class="pertner_flexio">
								<img src="public/img/c-5.png" class="img-fluid" alt="" />
								<h5>Skyepio</h5>
							</div>
							<div class="pertner_flexio">
								<img src="public/img/c-6.png" class="img-fluid" alt="" />
								<h5>Twikller</h5>
							</div>
							<div class="pertner_flexio">
								<img src="public/img/c-7.png" class="img-fluid" alt="" />
								<h5>Sincherio</h5>
							</div>
						</div>
					</div>
					
				</div>
				<div class="ht-110"></div>
			</section>
			<!-- ============================ Our Partner End ================================== -->
			
			<!-- ============================ Price Table Start ================================== -->
			<section class="min">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Select your Package</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row align-items-center">
					
						<!-- Single Package -->
						<div class="col-lg-4 col-md-4">
							<div class="pricing_wrap">
								<div class="prt_head">
									<h4>Gói tiêu chuẩn</h4>
								</div>
								<div class="prt_price">
									<h2><span>VND</span>230k</h2>
									<span>mỗi người dùng/năm</span>
								</div>
								<div class="prt_body">
									<ul>
										<li>10 danh sách</li>
										<li>2 tài sản nổi bật</li>
										<li>2 hình ảnh/mỗi danh sách</li>
										<li>Trợ giúp và hỗ trợ</li>
										<li class="none">Ưu tiên đề xuất</li>
										<li class="none">Quảng cáo</li>
									</ul>
								</div>
								<div class="prt_footer">
									<a href="#" class="btn choose_package">Mua gói</a>
								</div>
							</div>
						</div>
						
						<!-- Single Package -->
						<div class="col-lg-4 col-md-4">
							<div class="pricing_wrap">
								<div class="prt_head">
									<div class="recommended">Gói tốt nhất</div>
									<h4>Gói vàng</h4>
								</div>
								<div class="prt_price">
									<h2><span>VND</span>1100k</h2>
									<span>mỗi người dùng/năm</span>
								</div>
								<div class="prt_body">
									<ul>
										<li>20 danh sách</li>
										<li>5 tài sản nổi bật</li>
										<li>5 hình ảnh/mỗi danh sách</li>
										<li>Trợ giúp và hỗ trợ</li>
										<li>Ưu tiên đề xuất</li>
										<li class="none">Quảng cáo</li>
									</ul>
								</div>
								<div class="prt_footer">
									<a href="#" class="btn choose_package active">Mua gói</a>
								</div>
							</div>
						</div>
						
						<!-- Single Package -->
						<div class="col-lg-4 col-md-4">
							<div class="pricing_wrap">
								<div class="prt_head">
									<h4>Gói cao cấp</h4>
								</div>
								<div class="prt_price">
									<h2><span>VND</span>1790k</h2>
									<span>2 người dùng/năm</span>
								</div>
								<div class="prt_body">
									<ul>
										<li>Danh sách không giới hạn</li>
										<li>50 tài sản nổi bật</li>
										<li>Hình ảnh không giới hạn</li>
										<li>Trợ giúp và hỗ trợ</li>
										<li>Ưu tiên đề xuất</li>
										<li>Quảng cáo</li>
									</ul>
								</div>
								<div class="prt_footer">
									<a href="#" class="btn choose_package">Mua gói</a>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>	
			</section>
			<!-- ============================ Price Table End ================================== -->						

			<!-- ============================ Footer Start ================================== -->

			<!-- ============================ Footer End ================================== -->

			

		</div>