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
                                        <a href="submit-property-dashboard.html" class="prt_submit_link"><i class="fas fa-plus-circle"></i><span class="d-none d-lg-block d-md-block">Tạo tại khoản mới</span></a>
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
                                                <th scope="col">Accounts</th>
                                                <th scope="col" class="m2_hide">Recent activity</th>
                                                <th scope="col" class="m2_hide">Permissions</th>
                                                <th scope="col" class="m2_hide">Recent update</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- tr block -->
                                            <?php foreach ($usersWithProperties as $user): ?>
                                            <tr>
                                                <td>
                                                    <div class="dash_prt_wrap">
                                                        <div class="">
                                                        <?php $avatar_url = !empty($user['avatar_url']) ? $user['avatar_url'] : 'default.jpg'; ?>
                                                        <div class="dash-msg-avatar" ><img src="public/upload/users/<?php echo $avatar_url; ?>" alt=""></div>
                                                        </div>
                                                        <div class="dash_prt_caption">
                                                        <h5><?php echo $user['fullname'] ? $user['fullname'] : $user['username']; ?></h5>
                                                            <div class="prt_dashb_lot"><?php echo $user['user_address']; ?></div>
                                                            <div class="prt_dash_rate"><span><?php echo $user['phone_number']; ?></span></div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="prt_leads"><span>Tin gần đây</span></div>
                                                    <div class="prt_leads_list">
                                                    <ul>
                                                    <?php $propertyCount = count($user['properties']); ?>
                                                    <?php $propertyLimit = 4; // Giới hạn số lượng dữ liệu hiển thị ?>
                                                    <?php $propertyDisplayed = 0; // Biến đếm số lượng dữ liệu đã hiển thị ?>
                                                    <?php foreach ($user['properties'] as $property): ?>
                                                        <?php if (!empty($property['image_url'])): ?>
                                                            <?php if ($propertyDisplayed >= $propertyLimit) break; // Ngừng lặp khi đã hiển thị đủ số lượng dữ liệu ?>
                                                            <li><a href="#"><img src="public/upload/properties/<?php echo $property['image_url']; ?>" class="img-fluid img-circle" alt="" /></a></li>
                                                            <?php $propertyDisplayed++; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    <?php if ($propertyCount > $propertyLimit): ?>
                                                        <li><a href="#" class="leades_more"><?php echo $propertyCount - $propertyLimit; ?>+</a></li>
                                                    <?php endif; ?>
                                                    </ul>
                                                    </div>
                                                </td>
                                                <td class="m2_hide">
                                                <?php $account_type_name = !empty($user['account_type_name']) ? $user['account_type_name'] : 'User'; ?>
                                                    <div class="_leads_view"><h5 class="up"><?php echo $account_type_name; ?></h5></div>
                                                    <div class="_leads_view_title"><span>Sancity</span></div>
                                                </td>
                                                <td class="m2_hide">
                                                    <div class="_leads_posted"><h5><?php echo date('d M - H:i', strtotime($user['updated_at'])); ?></h5></div>
                                                    <div class="_leads_view_title"><span>by <?php echo $user['username']; ?></span></div>
                                                </td>
                                                <td>
                                                    <!--class = expire để màu đỏ-->
                                                    <div class="_leads_status">
                                                        <?php if ($user['status'] == "Banned"): ?>
                                                            <span class="expire"><?php echo $user['status']; ?></span>
                                                        <?php elseif (!empty($user['phone_number'])): ?>
                                                            <span class="active">Active</span>
                                                        <?php else: ?>
                                                            <span style="padding: 3px 15px;
                                                                        background: rgba(84, 84, 84,0.1);
                                                                        border-radius: 50px;
                                                                        font-size: 12px;
                                                                        font-weight: 600;
                                                                        margin-bottom: 3px;
                                                                        display: inline-flex;" class="">Unverified</span>
                                                        <?php endif; ?>
                                                    </div>



                                                    <div class="_leads_view_title"><span><?php echo date('d M y', strtotime($user['created_at'])); ?></span></div>
                                                </td>
                                                <td>
                                                    <div class="_leads_action">
                                                        <a href="index.php?controller=DashBoard&action=admin_account_per&user_id=<?php echo $user['user_id']; ?>"><i class="fas fa-edit"></i></a>
                                                        <!-- đây là nút delete -->
                                                        <a class="delete-user" href="#" data-userid="<?php echo $user['user_id']; ?>"><i class="fas fa-trash"></i></a>
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

