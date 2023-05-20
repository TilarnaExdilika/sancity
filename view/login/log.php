<?php
include_once './helpers/session_helper.php';
?>
<!-- ============================ Login ================================== -->	
<!-- Log In Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
    <div class="modal-dialog modal-xl login-pop-form" role="document">
        <div class="modal-content overli" id="registermodal">
            <div class="modal-body p-0">
                <div class="resp_log_wrap">
                    <div class="resp_log_thumb" style="background:url(public/img/loginbanner.png)no-repeat;"></div>
                    <div class="resp_log_caption">
                        <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                        <div class="edlio_152">
                            <ul class="nav nav-pills tabs_system center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false"><i class="fas fa-user-plus mr-2"></i>Register</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                <div class="login-form">
									<!-- ============================ Start Form ================================== -->	
									<!-- Start Login -->
                                    <form action="?controller=Login&action=login" method="POST">
                                    
                                        <div class="form-group">
                                            <label>Tên người dùng</label>
                                            <div class="input-with-icon">
												<!-- username -->
                                                <input type="text" class="form-control" name="username">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
												<!-- password -->
                                            <label>Mật khẩu</label>
                                            <div class="input-with-icon">
											<input type="password" class="form-control" name="password">
                                                <i class="ti-unlock"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="eltio_ol9">
                                                <div class="eltio_k1">
                                                    <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                                    <label for="dd" class="checkbox-custom-label">Lưu đăng nhập</label>
                                                </div>	
                                                <div class="eltio_k2">
                                                    <a href="#">Quên mật khẩu?</a>
                                                </div>	
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
												<!-- Submit -->
											<input type="hidden" name="action" value="login">
                                            <button type="submit" class="btn btn-md full-width pop-login">Đăng nhập</button>
                                        </div>
                                    
                                    </form>
									<!-- End Login -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                                <div class="login-form">
									<!-- Start Register -->
                                    <form  action="?controller=Login&action=register" method="POST">
                                    
                                        <div class="form-group">
                                            <label>Tên người dùng</label>
                                            <div class="input-with-icon">
												<!-- username -->
                                                <input type="text" class="form-control" name="username">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <div class="input-with-icon">
												<!-- email -->
                                                <input type="email" class="form-control" name="email">
                                                <i class="ti-user"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Mật khẩu</label>
                                            <div class="input-with-icon">
												<!-- password -->
                                                <input type="password" class="form-control" name="password">
                                                <i class="ti-unlock"></i>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="eltio_ol9">
                                                <div class="eltio_k1">
                                                    <input id="dds" class="checkbox-custom" name="dds" type="checkbox">
                                                    <label for="dds" class="checkbox-custom-label">Đã đọc và chấp nhận điều khoản và điều kiện</label>
                                                </div>	
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
												<!-- submit -->
											<input type="hidden" name="action" value="register">
                                            <button type="submit" class="btn btn-md full-width pop-login">Đăng kí</button>
                                        </div>
                                    
                                    </form>
									<!-- End Register -->
									<!-- ============================ End Form ================================== -->	

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->