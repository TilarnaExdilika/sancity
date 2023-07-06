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
                
                    <div class="dashboard-wraper">
                    <form action="controller/result_account.php" method="POST">
                        <!-- Basic Information -->
                        <div class="frm_submit_block">	
                            <h4>Chỉnh sửa tài khoản của  <a style="color: teal;" href="#"><?php echo $user_2['username']; ?> (ID : <?php echo $user_2['user_id']; ?>)</a></h4>
                            <div class="frm_submit_wrap">
                                
                                <div class="form-row">
                                
                                    <div class="form-group col-lg-12 col-md-6">
                                        <label>Quyền hạn</label>
                                        <select id="status" name="account_type_id" required class="form-control">
                                        <option value="<?php echo $user_2['account_type_id']; ?>"><?php echo $user_2['account_type_name']; ?></option>
                                        <?php foreach ($accountTypes as $accountType) : ?>
                                        <option value="<?php echo $accountType['account_type_id']; ?>"><?php echo $accountType['account_type_name']; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label>Vô hiệu hóa tài khoản <a href="#" class="tip-topdata" data-tip="gõ 'Banned' để vô hiệu tài khoản"><i class="ti-help"></i></a></label>
                                        <input type="text" name="status" class="form-control" value="<?php echo $user_2['status']; ?>">
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                    <input type="hidden" name="user_id" value="<?php echo $user_2['user_id']; ?>">
                                        <button class="btn btn-theme" type="submit">Lưu thay đổi</button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        </form>
                    </div>
                
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->