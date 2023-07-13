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
            
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="dashboard-body">
                
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="_prt_filt_dash">
                                <div class="_prt_filt_dash_flex">
                                    <div class="foot-news-last">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Tìm kiếm">
                                            <div class="input-group-append">
                                                <span type="button" class="input-group-text theme-bg b-0 text-light"><i class="fas fa-search"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="_prt_filt_dash_last m2_hide">
                                    <div class="_prt_filt_radius">
                                        
                                    </div>
                                    <div class="_prt_filt_add_new">
                                        <a href="index.php?controller=DashBoard&action=submitProperty" class="prt_submit_link"><i class="fas fa-plus-circle"></i><span class="d-none d-lg-block d-md-block">Đăng bất động sản mới</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="dashboard_property">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Bất động sản</th>
                                                <th scope="col" class="m2_hide">TG đăng</th>
                                                <th scope="col" class="m2_hide">Stats</th>
                                                <th scope="col" class="m2_hide">Posted On</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($properties as $property): ?>
                                            <!-- tr block -->
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="dash_prt_thumb">
                                                            <img src="public/upload/properties/<?php echo $property['image_url']; ?>" class="img-fluid" alt="" />
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                            <h5>
                                                            <?php
                                                    $property_name = $property['property_name'];
                                                    if (strlen($property_name) > 43) {
                                                        $property_name = substr($property_name, 0, 40) . '...';
                                                    }
                                                    echo htmlentities($property_name);
                                                    ?>
                                                            </h5>
                                                            <div class="prt_dashb_lot">
                                                            <?php
                                                    $property_name = $property['address'];
                                                    if (strlen($property_name) > 43) {
                                                        $property_name = substr($property_name, 0, 40) . '...';
                                                    }
                                                    echo htmlentities($property_name);
                                                    ?>
                                                            </div>
                                                            <div class="prt_dash_rate"><span><span class="formatted-price" data-price="<?php echo $property['price']; ?>"><?php echo $property['price']; ?></span> VNĐ / <?php echo $property['unit']; ?></span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                <?php
                                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                // Lấy thời gian hiện tại
                                                $currentDateTime = new DateTime();
                                                // Chuyển đổi thời gian tạo của bất động sản thành đối tượng DateTime
                                                $createdAt = new DateTime($property['created_at']);
                                                // Tính khoảng thời gian giữa thời gian hiện tại và thời gian tạo
                                                $interval = $currentDateTime->diff($createdAt);

                                                // Kiểm tra nếu số ngày > 0 thì hiển thị số ngày
                                                if ($interval->days > 0) {
                                                    $timeAgo = "từ " . $interval->days . " ngày trước";
                                                } 
                                                // Kiểm tra nếu số giờ > 0 thì hiển thị số giờ
                                                elseif ($interval->h > 0) {
                                                    $timeAgo = "từ " . $interval->h . " giờ trước";
                                                } 
                                                // Kiểm tra nếu số phút > 0 thì hiển thị số phút
                                                elseif ($interval->i > 0) {
                                                    $timeAgo = "từ " . $interval->i . " phút trước";
                                                } 
                                                // Ngược lại, hiển thị "vừa mới"
                                                else {
                                                    $timeAgo = "vừa mới";
                                                }
                                                ?>
                                                    <div class="prt_leads"><span><?php echo $timeAgo; ?></span></div>
                                                    <div class="prt_leads_list">
                                                        <ul>
                                                            <li><a href="#"><img src="public/upload/users/<?php echo $property['avatar_url']; ?>" class="img-fluid img-circle" alt="" /></a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_view"><h5 class="up"><?php echo $property['view_count']; ?></h5></div>
                                                    <div class="_leads_view_title"><span>Total Views</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5><?php echo date('d M - H:i', strtotime($property['created_at'])); ?></h5></div>
                                                    <div class="_leads_view_title"><span>Sancity</span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_status"><span class="<?php echo ($property['property_status'] === 'Thuê') ? 'expire' : (($property['property_status'] === 'Bán') ? 'active' : ''); ?>">
                                                            <?php echo $property['property_status']; ?>
                                                        </span>
                                                        </div>
                                                    <div class="_leads_view_title"><span><?php echo date('d M y', strtotime($property['created_at'])); ?></span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="#"><i class="fas fa-edit"></i></a>
                                                        <a href="#"><i class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                           
                                            
                                            
                                        </tbody>
                                    </table>
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

