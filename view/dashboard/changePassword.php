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
                
                    <div class="dashboard-wraper">
                    
                        <!-- Basic Information -->
                        <div class="frm_submit_block">	
                            <h4>Đổi mật khẩu</h4>
                            <div class="frm_submit_wrap">
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-6">
                                        <label>Mật khẩu cũ</label>
                                        <input type="password" class="form-control" name="oldPassword">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Mật khẩu mới</label>
                                        <input type="password" class="form-control" name="newPassword">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nhập lại mật khẩu mới</label>
                                        <<input type="password" class="form-control" name="confirmPassword">
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button id="btnSaveChanges" class="btn btn-theme" type="submit">Lưu thay đổi</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->