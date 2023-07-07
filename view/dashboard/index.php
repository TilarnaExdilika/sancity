
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


<!-- ============================ User Dashboard ================================== -->
<section class="gray pt-5 pb-5">
    <div class="container-fluid">
                    
        <div class="row">
            
            <!-- dashboard navbar start -->
            <?php require_once 'navbar.php'; ?>
            <!-- dashboard navbar end -->
            
            <div class="col-lg-9 col-md-8">
                <div class="dashboard-body">
                
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4>Gói hiện tại: <span class="pc-title theme-cl">Free Package</span></h4>
                        </div>
                    </div>
                    
                    <div class="row">
            
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-1">
                                <div class="dashboard_stats_wrap_content"><h4><?php echo $propertyCount; ?></h4> <span>Tổng bất động sản</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-location-pin"></i></div>
                            </div>	
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-3">
                                <div class="dashboard_stats_wrap_content"><h4>NaN</h4> <span>Doanh thu tháng</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-wallet"></i></div>
                            </div>	
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-2">
                                <div class="dashboard_stats_wrap_content"><h4>NaN</h4> <span>Doanh thu năm</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-credit-card"></i></div>
                            </div>	
                        </div>

                    </div>
                    <!--  row -->
                    
                    <div class="row">
                        
                    </div>
                    <!-- row -->
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Tình trạng gần đây</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-lg table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Tên bất động sản của bạn</th>
                                                    <th>ID</th>
                                                    <th>Trạng thái</th>
                                                    <th>Giá</th>
                                                    <th>Ngày đăng</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                            <?php foreach ($properties as $property): ?>
                                                
                                                <tr>
                                                    <td><a href="#"><img src="public/upload/properties/<?php echo $property['image_url']; ?>" class="avatar avatar-30 mr-2" alt="Avatar">
                                                    <?php
                                                    $property_name = $property['property_name'];
                                                    if (strlen($property_name) > 60) {
                                                        $property_name = substr($property_name, 0, 57) . '...';
                                                    }
                                                    echo htmlentities($property_name);
                                                    ?>
                                                </a></td>
                                                    <td>#<?php echo $property['property_id']; ?></td>
                                                    <?php
                                                    $status = $property['status']; 

                                                    $class = '';
                                                    if ($status == 'Bán') {
                                                        $class = 'label text-success bg-success-light';
                                                    } elseif ($status == 'Thuê') {
                                                        $class = 'label text-warning bg-warning-light';
                                                    } else {
                                                        $class = 'label text-danger bg-danger-light';
                                                    }
                                                    ?>
                                                    
                                                    <td><div class="<?php echo $class; ?>"><?php echo $property['status']; ?></div></td>                
                                                    <td><span class="formatted-price" data-price="<?php echo $property['price']; ?>">><?php echo $property['price']; ?></span> VND/<?php echo $property['unit']; ?></td>
                                                    <td><?php echo $property['created_at']; ?></td>  
                                                </tr>
                                                
                                            <?php endforeach; ?>

                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->