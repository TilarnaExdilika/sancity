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


<!-- ============================ All Property ================================== -->
<section class="gray pt-4">
			
            <div class="container">
                
                <div class="row m-0">
                    <div class="short_wraping">
                        <div class="row align-items-center">
                        
                            <div class="col-lg-3 col-md-6 col-sm-12  col-sm-6">
                                <ul class="shorting_grid">
                                    <li class="list-inline-item"><a href="grid-layout-with-sidebar.html" class="active"><span class="ti-layout-grid2"></span>Grid</a></li>
                                    <li class="list-inline-item"><a href="list-layout-with-sidebar.html"><span class="ti-view-list"></span>List</a></li>
                                    <li class="list-inline-item"><a href="#"><span class="ti-map-alt"></span>Map</a></li>
                                </ul>
                            </div>
                    
                            <div class="col-lg-6 col-md-12 col-sm-12 order-lg-2 order-md-3 elco_bor col-sm-12">
                                <div class="shorting_pagination">
                                    <div class="shorting_pagination_laft">
                                        <h5>Showing 1-25 of 72 results</h5>
                                    </div>
                                    <div class="shorting_pagination_right">
                                        <ul>
                                            <li><a href="javascript:void(0);" class="active">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li><a href="javascript:void(0);">6</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="col-lg-3 col-md-6 col-sm-12 order-lg-3 order-md-2 col-sm-6">
                                <div class="shorting-right">
                                    <label>Short By:</label>
                                    <div class="dropdown show">
                                        <a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="selection">Most Rated</span>
                                        </a>
                                        <div class="drp-select dropdown-menu">
                                            <a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
                                            <a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
                                            <a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
                                            <a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                    <!-- property Sidebar -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="page-sidebar p-0">
                            <a class="filter_links" data-toggle="collapse" href="#fltbox" role="button" aria-expanded="false" aria-controls="fltbox">Open Advance Filter<i class="fa fa-sliders-h ml-2"></i></a>							
                            <div class="collapse" id="fltbox">
                                <form action="" method="POST">
                                <!-- Find New Property -->
                                <div class="sidebar-widgets p-4">
                                
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" name="keyword"  class="form-control" placeholder="Ex.Nhà hàng xóm =)">
                                            <i class="ti-search"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            <input type="text" name="city" id="city-input" class="form-control" placeholder="Thành phố">
                                            <i class="ti-location-pin"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="simple-input">
                                            <select id="ptype" name="propertyTypes" class="form-control" >
                                            <option value="">Loại nhà</option>
                                            <?php while ($row = $propertyTypesResult->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <option value="<?php echo $row['type_id']; ?>"><?php echo $row['type_name']; ?></option>
                                            <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="simple-input">
                                            <select id="price" name="price" class="form-control">
                                                <option value="">Khoảng giá bán</option>
                                                <option value="500000000">dưới 500 triệu</option>
                                                <option value="1000000000">500 triệu -> 1 tỷ</option>
                                                <option value="2000000000">1 tỷ - 2 tỷ</option>
                                                <option value="5000000000">2 tỷ - 5 tỷ</option>
                                                <option value="">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="simple-input">
                                            <select id="bedrooms" name="bedroom" class="form-control">
                                                <option value="">Phòng ngủ</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="simple-input">
                                            <select id="bathrooms" name="bathroom" class="form-control">
                                                <option value="">Phòng tắm</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="simple-input">
                                            <select id="built" name="age" class="form-control">
                                                <option value="">Năm xây dựng</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2022">2023</option>
                                                <option value="">Khác</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="simple-input">
                                                    <input type="text" name="min_area" class="form-control" placeholder="Nhỏ nhất">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <div class="simple-input">
                                                    <input type="text" name="max_area" class="form-control" placeholder="Lớn nhất">
                                                </div>
                                            </div>
                                        </div>
                                    </div>								
                                    
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                            <h6>Advance Features</h6>
                                            <ul class="row p-0 m-0">
                                            <?php while ($row = $utilitiesResult->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <li class="col-lg-6 col-md-6 p-0">
                                                    <input id="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom" name="utilities[]" type="checkbox" value="<?php echo $row['utility_id']; ?>">
                                                    <label for="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom-label"><?php echo $row['utility_name']; ?></label>
                                                </li>
                                            <?php } ?>
                                
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 pt-4">
                                            <button type="submit" class="btn theme-bg rounded full-width">Tìm nhà</button>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- Sidebar End -->
                    </div>
                    
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div class="row justify-content-center">
                        
                            <!-- Single Property -->
                            <?php foreach ($result as $row) { ?>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="property-listing property-2">
                                    
                                    <div class="listing-img-wrapper">
                                        <div class="_exlio_125" id="priceElement">
                                        <?php echo $row['formatted_price']; ?>/<?php echo $row['unit']; ?>
                                        </div>
                                        <div class="list-img-slide">
                                            <div class="click">
                                                <div><a href="?controller=BdsRent&action=single&property_id=<?php echo $row['property_id']; ?>"><img src="public/upload/properties/<?php echo $row['image_url']; ?>" class="img-fluid mx-auto" alt="" /></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-wrapper">
                                        <div class="listing-short-detail-wrap">
                                            <div class="_card_list_flex mb-2">
                                                <div class="_card_flex_01">
                                                    <span class="_list_blickes _netork"><?php echo $row['age']; ?></span>
                                                    <span class="_list_blickes types"><?php echo $row['type_name']; ?></span>
                                                    <span class="_list_blickes"><i class="fas fa-eye"></i>&nbsp;<?php echo $row['view_count']; ?></span>

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
														if (strlen($property_name) > 65) {
															$property_name = substr($property_name, 0, 62) . '...';
														}
														echo htmlentities($property_name);
														?></a></h4>
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
                                                <div class="inc-fleat-icon"><img src="public/img/bathtub.svg" width="13" alt="" /></div><?php echo $row['bathroom_count']; ?> Bath
                                            </div>
                                            <div class="listing-card-info-icon">
                                                <div class="inc-fleat-icon"><img src="public/img/move.svg" width="13" alt="" /></div><?php echo $row['real_area']; ?> m<sup>2
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="listing-detail-footer">
                                        <div class="footer-first">
                                            <div class="foot-location"><img src="public/img/pin.svg" width="18" alt="" /><?php echo $row['city']; ?></div>
                                        </div>
                                        <div class="footer-flex">
                                            <ul class="selio_style">
                                                <li>
                                                    <div class="prt_saveed_12lk">
                                                        <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="Save property"><input type="checkbox"><i class="ti-heart"></i></label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prt_saveed_12lk">
                                                        <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="Compare property"><i class="ti-control-shuffle"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="prt_saveed_12lk">
                                                        <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="View Property"><i class="ti-arrow-right"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } ?>
                            <!-- End Single Property -->
                            
                        </div>	
                    </div>
                    
                    
                </div>
            </div>	
        </section>
        <!-- ============================ All Property ================================== -->