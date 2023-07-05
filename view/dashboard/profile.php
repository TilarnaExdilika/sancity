
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
            
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="dashboard-body">
                <form action="controller/resultProfile.php" method="POST" enctype="multipart/form-data">
                    <div class="dashboard-wraper">
                    
                        <!-- Basic Information -->
                        <div class="frm_submit_block">	
                            <h4>Thông tin cá nhân</h4>
                            <div class="frm_submit_wrap">
                                <div class="form-row">
                                
                                    <div class="form-group col-md-6">
                                        <label>Họ & tên</label>
                                        <input type="text" name="fullname" class="form-control" value="<?php echo $user['fullname']; ?>">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>">
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6">
                                        <label>Số điện thoại</label>
                                        <input type="text" name="phone_number" class="form-control" value="<?php echo $user['phone_number']; ?>">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>Thành phố</label>
                                        <input type="text" name="user_address" class="form-control" value="<?php echo $user['user_address']; ?>">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>Quốc tịch</label>
                                        <input type="text" name="state" class="form-control" value="<?php echo $user['state']; ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Ảnh đại diện<a href="#" class="tip-topdata" data-tip="ảnh 1:1, không quá 2mb"><i class="ti-help"></i></a></label>
                                        <input type="file" name="avatar_url"  class="form-control">
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <label>Giới thiệu bản thân</label>
                                        <textarea  name="about" class="form-control"><?php echo $user['about']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="frm_submit_block">	
                            <h4>Liên kết mạng xã hội</h4>
                            <div class="frm_submit_wrap">
                                <div class="form-row">
                                
                                    <div class="form-group col-md-6">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" class="form-control" value="<?php echo $user['facebook']; ?>">
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>LinkedIn</label>
                                        <input type="text" name="linkedin" class="form-control" value="<?php echo $user['linkedin']; ?>">
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 mt-4">
                                        <button class="btn btn-theme btn-lg" type="submit" name="submit">Cập nhật</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->