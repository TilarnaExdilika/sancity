
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
            <?php require_once 'sidebar.php'; ?>
            <!-- dashboard navbar end -->
            
            <div class="col-lg-9 col-md-8">
                <div class="dashboard-body">
                

                    
                    <div class="row">
            
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-1">
                                <div class="dashboard_stats_wrap_content"><h4><?php echo $propertyCount; ?></h4> <span>Bất động sản</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="ti-location-pin"></i></div>
                            </div>	
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-1">
                                <div class="dashboard_stats_wrap_content"><h4><?php echo $newsCount; ?></h4> <span>Tin tức</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="fa fa-newspaper"></i></div>
                            </div>	
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-1">
                                <div class="dashboard_stats_wrap_content"><h4> <?php echo $userCount; ?></h4> <span>Người dùng</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="fa fa-users"></i></div>
                            </div>	
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-1">
                                <div class="dashboard_stats_wrap_content"><h4 id="totalImageCount"><?php echo $imageCount; ?> <span id="percentageSpan">
                                <script>
                                var imageCount = <?php echo $imageCount; ?>;
                                var percentage = (imageCount / 2456) * 100;

                                document.getElementById("percentageSpan").textContent = '(' + percentage.toFixed(1) + '% Memory)';


                                </script>
                                </span></h4>  <span>Ảnh đã đăng</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="fa fa-image"></i></div>
                            </div>	
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-1">
                                <div class="dashboard_stats_wrap_content"><h4><?php echo $totalViewCount; ?></h4> <span>Khách truy cập</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="fa fa-eye"></i></div>
                            </div>	
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="dashboard_stats_wrap widget-1">
                                <div class="dashboard_stats_wrap_content"><h4>0</h4> <span>Số giao dịch</span></div>
                                <div class="dashboard_stats_wrap-icon"><i class="fa fa-exchange-alt"></i></div>
                            </div>	
                        </div>

                    </div>
                    <!--  row -->
                    
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Extra Area Chart</h4>
                                </div>
                                <div class="card-body">
                                    <ul class="list-inline text-center m-t-40">
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-warning"></i>Bất động sản</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-danger"></i>Tin tức</h5>
                                        </li>
                                        <li>
                                            <h5><i class="fa fa-circle m-r-5 text-success"></i>Người dùng</h5>
                                        </li>
                                    </ul>
                                    <div class="chart" id="extra-area-chart" style="height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-5 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6>Notifications</h6>
                                </div>
                                <div class="ground-list ground-list-hove">
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Azreal Modern</strong> has been approved!.</a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">Litha Lynes left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">20 min ago</span>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-heart"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">Someone bookmark your View listing!<strong>Sargun Villa Bay</strong></a></h6>
                                            <span class="small">1 day ago</span>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-home"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">Your listing <strong>Modern Family Home</strong> has been approved!.</a></h6>
                                            <span class="small">10 days ago</span>
                                        </div>
                                    </div>
                                    
                                    <div class="ground ground-single-list">
                                        <a href="#">
                                            <div class="btn-circle-40 theme-cl theme-bg-light"><i class="ti-comment-alt"></i></div>
                                        </a>

                                        <div class="ground-content">
                                            <h6><a href="#">Adam Brown left a review on <strong>Renovated Apartment</strong></a></h6>
                                            <span class="small">Just Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Order Status</h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-lg table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Product ID</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
                                                    <th>Date Created</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td><a href="#"><img src="public/img/p-1.png" class="avatar avatar-30 mr-2" alt="Avatar">Luxury House</a></td>
                                                    <td>#258475</td>
                                                    <td><div class="label text-success bg-success-light">Paid</div></td>                
                                                    <td>$ 310</td>
                                                    <td>04/10/2013</td>  
                                                </tr>
                                                
                                                <tr>
                                                    <td><a href="#"><img src="public/img/p-2.png" class="avatar avatar-30 mr-2" alt="Avatar">Sargun Apartment</a></td>
                                                    <td>#249578</td>
                                                    <td><div class="label text-warning bg-warning-light">Pending</div></td>							
                                                    <td>$ 584.14</td>
                                                    <td>05/08/2014</td> 
                                                </tr>
                                                
                                                <tr>
                                                    <td><a href="#"><img src="public/img/p-3.png" class="avatar avatar-30 mr-2" alt="Avatar">Preet Silver City</a></td>
                                                    <td>#248712</td>
                                                    <td><div class="label text-danger bg-danger-light">Cancel</div></td>  
                                                    <td>$ 710.5</td>
                                                    <td>11/05/2015</td>                                          
                                                </tr>
                                                
                                                <tr>
                                                    <td><a href="#"><img src="public/img/p-4.png" class="avatar avatar-30 mr-2" alt="Avatar">Mount See Villa</a></td>
                                                    <td>#287246</td>
                                                    <td><div class="label text-success bg-success-light">Paid</div></td>
                                                    <td>$ 482.70</td>
                                                    <td>06/09/2016</td>
                                                </tr>
                                                
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