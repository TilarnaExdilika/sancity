
<!-- ============================ Page Title Start================================== -->
<div class="page-title" style="background:#f4f4f4 url(public/img/slider-1.jpg);" data-overlay="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

		<!-- Gallery Part Start -->
		<section class="gallery_parts pt-2 pb-2 d-none d-sm-none d-md-none d-lg-none d-xl-block">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-8 col-md-7 col-sm-12 pr-1">
						<div class="gg_single_part left" style="width: 100%; max-width: 100%; height: 0; padding-top: 75%; position: relative;">
							<?php if (isset($propertyImages) && is_array($propertyImages) && count($propertyImages) > 0) { ?>
								<a href="public/upload/properties/<?php echo $propertyImages[0]['image_url']; ?>" class="mfp-gallery">
									<img src="public/upload/properties/<?php echo $propertyImages[0]['image_url']; ?>" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; object-position: center;" alt="" />
								</a>
							<?php } ?>
						</div>
					</div>
					<div class="col-lg-4 col-md-5 col-sm-12 pl-1">
					<?php if (isset($propertyImages) && is_array($propertyImages) && count($propertyImages) > 1) {
						for ($i = 1; $i < count($propertyImages); $i++) { ?>
							<div class="gg_single_part-right min" style="position: relative; width: 100%; height: 0; padding-top: 50%; margin: 6px 0;">
								<a href="public/upload/properties/<?php echo $propertyImages[$i]['image_url']; ?>" class="mfp-gallery">
									<img src="public/upload/properties/<?php echo $propertyImages[$i]['image_url']; ?>" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; object-position: center;" alt="" />
								</a>
								<?php if ($i === 3 && count($propertyImages) > 4) { ?>
									<div class="overlay"></div>
									<div class="image-count">
										<?php echo count($propertyImages) - 3; ?>+ <!-- Hiển thị số ảnh phía sau -->
									</div>
								<?php } ?>
							</div>
						<?php }
					} ?>
				</div>


				</div>
			</div>
		</section>
			
			<!-- Đây là phần hiển thị trên di động hoặc màn hình kích thước hẹp -->
			<div class="featured_slick_gallery gray d-block d-md-block d-lg-block d-xl-none">
				<div class="featured_slick_gallery-slide">
					<?php if (isset($propertyImages) && is_array($propertyImages) && count($propertyImages) > 0) {
						for ($i = 0; $i < count($propertyImages); $i++) { ?>
							<div class="featured_slick_padd">
								<a href="public/upload/properties/<?php echo $propertyImages[$i]['image_url']; ?>" class="mfp-gallery">
									<img src="public/upload/properties/<?php echo $propertyImages[$i]['image_url']; ?>" class="img-fluid mx-auto" alt="" />
								</a>
							</div>
					<?php }
					} ?>
				</div>
			</div>


<!-- ============================ Property Detail Start ================================== -->
<section class="pt-4">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<div class="property_info_detail_wrap mb-4">
								
								<div class="property_info_detail_wrap_first">
									<div class="pr-price-into">
										<ul class="prs_lists">
											<li><span class="bed">VIP</span></li>
											<li><span class="bath"><?php echo $property['status']; ?></span></li>
											<li><span class="gar"><?php echo $property['age']; ?></span></li>
											<li><span class="sqft"><?php echo $property['type_name']; ?></span></li>
										</ul>
										<h2><?php echo $property['property_name']; ?></h2>
										<span><i class="lni-map-marker"></i> <?php echo $property['address']; ?></span>
										<br>
										<span><i class="fas fa-eye"></i> lượt xem <?php echo $property['view_count']; ?></span>
									</div>
								</div>
								
								<div class="property_detail_section">
									<div class="prt-sect-pric">
										<ul class="_share_lists">
											<li><a href="#"><i class="fa fa-bookmark"></i></a></li>
											<li><a href="#"><i class="fa fa-share"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">Thông tin bất động sản</h4>
								</div>
								
								<div class="block-body">
									<p style="text-align: justify; text-justify: inter-word;"><?php echo $property['description']; ?></p>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">Đặc điểm</h4>
								</div>
								
								<div class="block-body">
									<ul class="row p-0 m-0">
										<li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-bed mr-1"></i><?php echo $property['bedroom_count']; ?> Phòng ngủ</li>
										<li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-bath mr-1"></i><?php echo $property['bathroom_count']; ?> Phòng tắm</li>
										<li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-expand-arrows-alt mr-1"></i><?php echo $property['real_area']; ?> m<sup>2</li>
										<!-- <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-house-damage mr-1"></i>1 Living Rooms</li> -->
										<li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-building mr-1"></i>Năm xây dựng: <?php echo $property['age']; ?></li>
										<!-- <li class="col-lg-4 col-md-6 mb-2 p-0"><i class="fa fa-utensils mr-1"></i>2 Kitchens </li> -->
									</ul>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">Tiện ích</h4>
								</div>
								
								<div class="block-body">
									<ul class="avl-features third">
										<?php
										$utilities = explode(", ", $property['utilities']);
										foreach ($utilities as $utility) {
											echo "<li class='active'>$utility</li>";
										}
										?>
									</ul>
								</div>

								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap">
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">Preview video</h4>
								</div>
								<div class="block-body">
									<div class="">
										<div class="">
											<!-- Thay đổi mã nhúng video YouTube dưới đây -->
											<iframe width="708" height="398.25" src="https://www.youtube.com/embed/7EHnQ0VM4KY" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</div>
							</div>

							<!-- Single Block Wrap -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">Bản thiết kế</h4>
								</div>
								
								<div class="block-body">
									<div class="accordion" id="floor-option">
										<div class="card">
											<div class="card-header" id="groundFloor">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#groundfloor">Ground Floor</button>									
												</h2>
												<div class="floor_listeo">
													<ul>
														<li>Beds: 4</li>
														<li>Baths: 2</li>
														<li>Area: 1000 sqft</li>
													</ul>
												</div>
											</div>
											<div id="groundfloor" class="collapse show" aria-labelledby="groundFloor" data-parent="#floor-option">
												<div class="card-body">
													<img src="public/img/floor.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="firstFloor">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#firstfloor">First Floor<span></span></button>
												</h2>
												<div class="floor_listeo">
													<ul>
														<li>Beds: 4</li>
														<li>Baths: 3</li>
														<li>Area: 1000 sqft</li>
													</ul>
												</div>
											</div>
											<div id="firstfloor" class="collapse" aria-labelledby="firstFloor" data-parent="#floor-option">
												<div class="card-body">
													<img src="public/img/floor.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header" id="seconfFloor">
												<h2 class="mb-0">
													<button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#secondfloor">Second<span></span></button>                     
												</h2>
												<div class="floor_listeo">
													<ul>
														<li>Beds: 5</li>
														<li>Baths: 3</li>
														<li>Area: 1000 sqft</li>
													</ul>
												</div>
											</div>
											<div id="secondfloor" class="collapse" aria-labelledby="seconfFloor" data-parent="#floor-option">
												<div class="card-body">
													<img src="public/img/floor.jpg" class="img-fluid" alt="" />
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">Google Maps</h4>
								</div>
								
								<div class="block-body">
									<div class="map-container">
										<iframe src="https://www.google.com/maps/d/embed?mid=1JUsMjCV0IBtOuR1qTuEilkkrC_Q&hl=en_US&ehbc=2E312F" class="full-width" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
									</div>

								</div>
								
							</div>
							
							<!-- Single Reviews Block -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">12 Reviews</h4>
								</div>
								
								<div class="block-body">
									<div class="rating-overview">
										<div class="rating-overview-box">
											<span class="rating-overview-box-total">4.8</span>
											<span class="rating-overview-box-percent">out of 5.0</span>
											<div class="star-rating" data-rating="5"><i class="fa fa-star filled"></i><i class="fa fa-star filled"></i><i class="fa fa-star filled"></i><i class="fa fa-star filled"></i><i class="fa fa-star-half filled"></i>
											</div>
										</div>

										<div class="rating-bars">
											<div class="rating-bars-item">
												<span class="rating-bars-name">Property</span>
												<span class="rating-bars-inner">
													<span class="rating-bars-rating high" data-rating="4.7">
														<span class="rating-bars-rating-inner" style="width: 85%;"></span>
													</span>
													<strong>4.7</strong>
												</span>
											</div>
											<div class="rating-bars-item">
												<span class="rating-bars-name">Value for Money</span>
												<span class="rating-bars-inner">
													<span class="rating-bars-rating good" data-rating="3.9">
														<span class="rating-bars-rating-inner" style="width: 75%;"></span>
													</span>
													<strong>3.9</strong>
												</span>
											</div>
											<div class="rating-bars-item">
												<span class="rating-bars-name">Bản đồ</span>
												<span class="rating-bars-inner">
													<span class="rating-bars-rating mid" data-rating="6.2">
														<span class="rating-bars-rating-inner" style="width: 65.2%;"></span>
													</span>
													<strong>6.2</strong>
												</span>
											</div>
											<div class="rating-bars-item">
												<span class="rating-bars-name">Nhân viên hỗ trợ</span>
												<span class="rating-bars-inner">
													<span class="rating-bars-rating high" data-rating="7.0">
														<span class="rating-bars-rating-inner" style="width:70%;"></span>
													</span>
													<strong>7.0</strong>
												</span>
											</div>
										</div>
									</div>
							
									<div class="author-review">
										<div class="comment-list">
											<ul>
												<li class="article_comments_wrap">
													<article>
														<div class="article_comments_thumb">
															<img src="public/img/team-4.jpg" alt="">
														</div>
														<div class="comment-details">
															<div class="comment-meta">
																<div class="comment-left-meta">
																	<h4 class="author-name">Asiro HD. Mahrakjio</h4>
																	<div class="comment-date">17th Aug 2021</div>
																</div>
															</div>
															<div class="comment-text">
																<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																	perspiciatis unde omnis iste natus error.</p>
															</div>
														</div>
													</article>
												</li>
												<li class="article_comments_wrap">
													<article>
														<div class="article_comments_thumb">
															<img src="public/img/team-5.jpg" alt="">
														</div>
														<div class="comment-details">
															<div class="comment-meta">
																<div class="comment-left-meta">
																	<h4 class="author-name">Adam H. Vilson</h4>
																	<div class="comment-date">07th June 2021</div>
																</div>
															</div>
															<div class="comment-text">
																<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																	perspiciatis unde omnis iste natus error.</p>
															</div>
														</div>
													</article>
												</li>
												<li class="article_comments_wrap">
													<article>
														<div class="article_comments_thumb">
															<img src="public/img/team-6.jpg" alt="">
														</div>
														<div class="comment-details">
															<div class="comment-meta">
																<div class="comment-left-meta">
																	<h4 class="author-name">Shaurya Singh Preet</h4>
																	<div class="comment-date">10th June 2021</div>
																</div>
															</div>
															<div class="comment-text">
																<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim laborumab.
																	perspiciatis unde omnis iste natus error.</p>
															</div>
														</div>
													</article>
												</li>
											</ul>
										</div>
									</div>
									<a href="#" class="reviews-checked">12 More Reviews</a>
								</div>
								
							</div>
							
							<!-- Single Block Wrap -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<ul class="nav nav-pills tabs_system" id="pill-tab" role="tablist">
									  <li class="nav-item">
										<a class="nav-link active" id="pills-walk-tab" data-toggle="pill" href="#pills-walk" role="tab" aria-controls="pills-walk" aria-selected="true">WalkScore</a>
									  </li>
									  <li class="nav-item">
										<a class="nav-link" id="pills-nearby-tab" data-toggle="pill" href="#pills-nearby" role="tab" aria-controls="pills-nearby" aria-selected="false">Nearby</a>
									  </li>
									</ul>
								</div>
								
								<div class="block-body">
									<div class="sidetab-content">
										<div class="tab-content" id="pill-tabContent">
											<!-- Book Now Tab -->
											<div class="tab-pane fade show active" id="pills-walk" role="tabpanel" aria-labelledby="pills-walk-tab">
												<div class="_walk_score_wrap">
										
													<!-- Single Item -->
													<div class="_walk_score_list">
														<div class="_walk_score_flex">
															<div class="_walk_score_view">
																<h4 class="view_walk">72</h4>
															</div>
															<div class="_walk_score_caption">
																<h5>Bikeable Scores</h5>
																<span>Some bike infrastructure</span>
															</div>
														</div>
														<div class="_walk_score_last">
															<a href="#" class="_walk_view_btn">View Detail Here</a>
														</div>
													</div>
													
													<!-- Single Item -->
													<div class="_walk_score_list">
														<div class="_walk_score_flex">
															<div class="_walk_score_view">
																<h4 class="view_walk">55</h4>
															</div>
															<div class="_walk_score_caption">
																<h5>Walk Scores</h5>
																<span>Most errands can be accomplished on foot</span>
															</div>
														</div>
														<div class="_walk_score_last">
															<a href="#" class="_walk_view_btn">View Detail Here</a>
														</div>
													</div>
													
													<!-- Single Item -->
													<div class="_walk_score_list">
														<div class="_walk_score_flex">
															<div class="_walk_score_view">
																<h4 class="view_walk">67</h4>
															</div>
															<div class="_walk_score_caption">
																<h5>Some Transit</h5>
																<span>A few nearby public transportation options</span>
															</div>
														</div>
														<div class="_walk_score_last">
															<a href="#" class="_walk_view_btn">View Detail Here</a>
														</div>
													</div>
													
												</div>
											</div>
											
											<!-- Appointment Now Tab -->
											<div class="tab-pane fade" id="pills-nearby" role="tabpanel" aria-labelledby="pills-nearby-tab">
												<!-- Schools -->
												<div class="nearby-wrap">
													<h5>Schools</h5>
													<div class="neary_section_list">
													
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Wikdom Senior High Scool</h4>
																<span class="location">2455 Cambridge Drive Peoria, AZ 85382</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate good">4.2</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>15 Reviews</span>
																</div>
															</div>
														</div>
														
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Reena Secondary High Scool</h4>
																<span>347 Sycamore Circle Grand Forks</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate mid">4.0</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>19 Reviews</span>
																</div>
															</div>
														</div>
														
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Victory Primary Scool</h4>
																<span class="location">4771 Marshall Street Churchville, MD 21028</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate high">4.8</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>32 Reviews</span>
																</div>
															</div>
														</div>
														
													</div>
												</div>
												
												<!-- Hotel & Restaurant -->
												<div class="nearby-wrap">
													<h5>Hotel & Restaurant</h5>
													<div class="neary_section_list">
													
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Hotel Singhmind Alite</h4>
																<span class="location">492 Buckhannan Liverpool, NY 13088</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate poor">3.2</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>41 Reviews</span>
																</div>
															</div>
														</div>
														
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Wiksy Bar & Restaurant</h4>
																<span class="location">3914 Paul Wayne Road Kenner, LA 70065</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate high">4.9</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>21 Reviews</span>
																</div>
															</div>
														</div>
														
													</div>
												</div>
												
												<!-- Hotel & Restaurant -->
												<div class="nearby-wrap">
													<h5>Health & Medical</h5>
													<div class="neary_section_list">
													
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Hotel Singhmind Alite</h4>
																<span class="location">2600 Avenue Brooklyn, NY 11227</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate poor">3.2</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>14 Reviews</span>
																</div>
															</div>
														</div>
														
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Wiksy Bar & Restaurant</h4>
																<span class="location">Peck Street Manchester, NH 03101</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate high">4.9</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>20 Reviews</span>
																</div>
															</div>
														</div>
														
														<div class="neary_section">
															<div class="neary_section_first">
																<h4 class="nearby_place_title">Wiksy Bar & Restaurant</h4>
																<span class="location">Washington Street Port Lavaca, TX 77979</span>
															</div>
															<div class="neary_section_last">
																<div class="nearby_place_rate high">4.9</div>
																<div class="rate_starts">
																	<div class="rates_iuol">
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star filled"></i>
																		<i class="fa fa-star"></i>
																	</div>
																	<span>36 Reviews</span>
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
							
							<!-- Single Write a Review -->
							<div class="property_block_wrap">
								
								<div class="property_block_wrap_header">
									<h4 class="property_block_title">Write a Review</h4>
								</div>
								
								<div class="block-body">
									<div class="row">
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>eMmail ID</label>
												<input type="email" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Messages</label>
												<textarea class="form-control ht-80"></textarea>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<button class="btn theme-bg rounded" type="submit">Submit Review</button>
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
						
						<!-- property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="property-sidebar">
								
							<div class="sider_blocks_wrap">
								<div class="side-booking-header">
									<div class="sb-header-left">
									<h3 class="price"><?php echo $property['formatted_price']; ?><sub>/<?php echo $property['unit']; ?></sub><span class="offs"></span></h3>
									</div>
									<div class="price_offer">giảm 20%</div>
								</div>
								<?php if ($property['status'] == 'Thuê'): ?>
									<div class="side-booking-body">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-6">
												<div class="form-group">
													<label>Thời gian thuê</label>
													<div class="cld-box">
														<i class="ti-calendar"></i>
														<input type="text" id="checkin" name="checkin" class="form-control" value="" onchange="calculateRent()"/>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-6">
												<div class="form-group">
													<label>Thời gian kết thúc</label>
													<div class="cld-box">
														<i class="ti-calendar"></i>
														<input type="text" id="checkout" name="checkout" class="form-control" value="" onchange="calculateRent()" />
													</div>
												</div>
											</div>
											<div class="col-lg12 col-md-12 col-sm-12 mt-3">
												<label for="guests">Hóa đơn</label>
												<div class="_adv_features">
													<ul>
														<li>Mỗi tháng<span id="price"><?php echo $property['price']; ?> VND</span></li>
														<li>Tổng hợp đồng<span id="totalRent">cần xử lý</span></li>
													</ul>
												</div>
											</div>
											<div class="side-booking-foot">
												<span class="sb-header-left">Tổng trả</span>
												<h3 class="price theme-cl"><?php echo $property['formatted_price']; ?></h3>
											</div>
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="stbooking-footer mt-1">
													<div class="form-group mb-0 pb-0">
														<a href="#" class="btn book_btn theme-bg">Thuê ngay</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									</div>
								<?php else: ?>
									<div class="sider_blocks_wrap p-3">
										<div class="text-center">
											<h4 class="mb-0">Liên hệ hợp đồng</h4>
											<a class="_calss_tyui" href="tel:4048651904">(404) 865-1904</a>
										</div>
										<div class="login-form">
											<form>
												<div class="row">
													
													<div class="col-lg-12 col-md-12">
														<div class="form-group">
															<label>Name*</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-lg-12 col-md-12">
														<div class="form-group">
															<label>Email*</label>
															<input type="email" class="form-control">
														</div>
													</div>
													<div class="col-lg-12 col-md-12">
														<div class="form-group">
															<label>Phone</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="default-terms_wrap">
													<div class="default-terms_flex">
														<input id="vd" class="checkbox-custom" name="vd" type="checkbox">
														<!-- <label for="vd" class="checkbox-custom-label">Live Video Tour</label> -->
													</div>
												</div>
												<div class="default-terms_wrap">
													<div class="default-terms_flex">
														<input id="tm" class="checkbox-custom" name="tm" type="checkbox">
														<label for="tm" class="checkbox-custom-label"></label>
													</div>
													<div class="default-terms">
														Bằng cách gửi biểu mẫu này, bạn đồng ý với <a href="#" title="Terms of Service">điều khoản dịch vụ</a> và <a href="#" title="Privacy Policy">Chính sách</a> của chúng tôi .</div>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-md full-width pop-login">Send Message</button>
												</div>

											</form>
										</div>
									</div>
								<?php endif; ?>

								</div>

							
								<!-- Agent Detail -->
								<div class="sider_blocks_wrap">
									<div class="side-booking-body">
										<div class="agent-_blocks_title">
										
											<div class="agent-_blocks_thumb"><img src="public/upload/users/<?php echo $property['avatar_url']; ?>" alt=""></div>
											<div class="agent-_blocks_caption">
												<h4><a href="#"><?php echo $property['username']; ?></a></h4>
												<?php
												if (isset($property['phone_number']) && !empty($property['phone_number'])) {
													// Nếu "phone_number" tồn tại và không rỗng
													echo '<span class="approved-agent"><i style="" class="ti-check"></i>Đã xác minh</span>';
												} else {
													// Nếu "phone_number" không tồn tại hoặc rỗng
													echo '<span class="approved-agent"><i style="background: #737373" class="ti-check"></i>Chưa xác minh</span>';
												}
												?>
											</div>
											<div class="clearfix"></div>
										</div>
										
										<a href="#" class="agent-btn-contact" data-toggle="modal" data-target="#autho-message"><i class="ti-comment-alt"></i>Nhắn tin</a>
										
										<span id="number" data-last="<?php echo $property['phone_number']; ?>">
											<span><i class="ti-headphone-alt"></i><a class="see">+84**********</a></span>
										</span>
									</div>
								</div>
								
								
								
								<!-- Similar Property -->
								<div class="sidebar-widgets">
									
									<h4>Gợi ý bất động sản cho bạn</h4>
									
									<div class="sidebar_featured_property">
										
									<?php foreach ($similarProperties as $property) : ?>
										<!-- List Sibar Property -->
										<div class="sides_list_property">
											<div class="sides_list_property_thumb">
												<img src="public/upload/properties/<?php echo $property['image_url']; ?>" class="img-fluid" alt="" />
											</div>
											<div class="sides_list_property_detail">
												<h4><a href="?controller=BdsRent&action=single&property_id=<?php echo $property['property_id']; ?>">
												<?php
													$property_name = $property['property_name'];

													if (strlen($property_name) > 30) {
														$property_name = substr($property_name, 0, 28) . '..';
													}

													echo htmlentities($property_name);

												?>
												</a></h4>
												<span><i class="ti-location-pin"></i><?php echo $property['city']; ?></span>
												<div class="lists_property_price">
													<div class="lists_property_types">
													<div class="property_types_vlix <?php
														if ($property['status'] == 'Bán') {
															echo 'sale';
														} elseif ($property['status'] == 'Thuê') {
															echo '';
														} else {
															echo 'buy';
														}
													?>">
														Nhà <?php echo $property['status']; ?>
													</div>

													</div>
													<div class="lists_property_price_value">
														<h4></h4>
													</div>
												</div>
											</div>
										</div>
										<?php endforeach; ?>
										
										
									</div>
									
								</div>
							
							</div>
						</div>
						
					</div>
				</div>
			</section>
<!-- ============================ Property Detail End ================================== -->