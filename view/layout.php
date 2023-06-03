
<!-- bat dau session -->
<?php
session_start();
?>
<!-- ... -->
<!-- Đoạn code layout của trang layout.php -->
<!-- ... -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- icon tag -->
	<link rel="icon" href="public/img/logo-icon.png" type="image/x-icon">
  	<link rel="shortcut icon" href="public/img/logo-icon.png" type="image/x-icon">
		 
    <!-- Custom CSS -->
    <link href="public/css/styles.css" rel="stylesheet">
    <title>SANCITY</title>
</head>


<body class="yellow-skin">

    <!-- menu & slide -->


    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div class="header header-transparent change-logo">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand static-logo" href="index.php"><img src="public/img/logo-light.png" class="logo" alt="" /></a>
							<a class="nav-brand fixed-logo" href="index.php"><img src="public/img/logo.png" class="logo" alt="" /></a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">

								<li><a href="index.php?controller=BdsSell&action=index">Bất Động Sản Bán<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.php?controller=BdsSell&action=index">Căn hộ chung cư<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsSell&action=index">Hà Nội</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Hồ Chí Minh</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Đà Nẵng</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Cần Thơ</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Tỉnh Thành Khác</a></li>
											</ul>
										</li>
										<li><a href="index.php?controller=BdsSell&action=index">Nhà Đất<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsSell&action=index">Hà Nội</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Hồ Chí Minh</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Đà Nẵng</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Cần Thơ</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Tỉnh Thành Khác</a></li>
											</ul>
										</li>
										<li><a href="index.php?controller=BdsSell&action=index">Vinhomes<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsSell&action=index">Hà Nội</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Hồ Chí Minh</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Đà Nẵng</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Cần Thơ</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Tỉnh Thành Khác</a></li>
											</ul>
										</li>
										<li><a href="index.php?controller=BdsSell&action=index">Biệt thự<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsSell&action=index">Agent Grid Style</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Agent Grid 2</a></li>
												<li><a href="index.php?controller=BdsSell&action=index">Agent Detail Page</a></li>
											</ul>
										</li>
									</ul>
								</li>
								
								<li><a href="index.php?controller=BdsRent&action=index">Bất Động Sản Cho Thuê<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
									<li><a href="index.php?controller=BdsRent&action=index">Căn hộ chung cư<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsRent&action=index">Hà Nội</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Hồ Chí Minh</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Đà Nẵng</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Cần Thơ</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Tỉnh Thành Khác</a></li>
											</ul>
										</li>
										<li><a href="index.php?controller=BdsRent&action=index">Nhà Đất<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsRent&action=index">Hà Nội</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Hồ Chí Minh</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Đà Nẵng</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Cần Thơ</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Tỉnh Thành Khác</a></li>
											</ul>
										</li>
										<li><a href="index.php?controller=BdsRent&action=index">Vinhomes<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsRent&action=index">Hà Nội</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Hồ Chí Minh</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Đà Nẵng</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Cần Thơ</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Tỉnh Thành Khác</a></li>
											</ul>
										</li>
										<li><a href="index.php?controller=BdsRent&action=index">Biệt thự<span class="submenu-indicator"></span></a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="index.php?controller=BdsRent&action=index">Agent Grid Style</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Agent Grid 2</a></li>
												<li><a href="index.php?controller=BdsRent&action=index">Agent Detail Page</a></li>
											</ul>
										</li>
									</ul>
								</li>
								
								<li><a href="index.php?controller=Project&action=index">Dự án<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.php?controller=Project&action=index">Căn hộ chung cư</a></li>
										<li><a href="index.php?controller=Project&action=index">Cao ốc văn phòng</a></li>
										<li><a href="index.php?controller=Project&action=index">Trung tâm thương mại</a></li>
										<li><a href="index.php?controller=Project&action=index">Khu đô thị mới</a></li>
										<li><a href="index.php?controller=Project&action=index">Khu nghỉ dưỡng, sinh thái</a></li>
										<li><a href="index.php?controller=Project&action=index">Dự án khác</a></li>


									</ul>
								</li>

                                <li><a href="index.php?controller=Blog&action=index">Tin tức<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.php?controller=Blog&action=index">Bất động sản Hà Nội</a></li>
										<li><a href="index.php?controller=Blog&action=index">Bất động sản TP.HCM</a></li>
										<li><a href="index.php?controller=Blog&action=index">Blog Bất Động Sản</a></li>
										<li><a href="index.php?controller=Blog&action=index">Báo cáo thị trường</a></li>
										<li><a href="index.php?controller=Blog&action=index">Quy hoạch - Pháp lý</a></li>
										<li><a href="index.php?controller=Blog&action=index">Tài chính</a></li>
										<li><a href="index.php?controller=Blog&action=index">Tin tức khác</a></li>

									</ul>
								</li>
								
                                <li><a href="index.php?controller=Agency&action=index">Môi Giới<span class="submenu-indicator"></span></a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.php?controller=Agency&action=index">Doanh nghiệp</a></li>
										<li><a href="index.php?controller=Agency&action=index">Cá nhân</a></li>

									</ul>
								</li>
							</ul>
    <!-- ==============================  View Signing  ================================ -->
							<?php
							require_once __DIR__ . '/../Controller/Login.php';
							$userController = new UserController();
							$loggedIn = $userController->checkLogin();
							?>
							<?php if ($loggedIn): ?>
								<ul class="nav-menu nav-menu-social align-to-right dhsbrd">
									<li>
										<div class="btn-group account-drop">
											<!-- Nội dung cho menu đã đăng nhập -->
											<button type="button" class="btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<img src="public/img/user-5.jpg" class="avater-img" alt="">
											</button>
											<div class="dropdown-menu pull-right animated flipInX">
												<div class="drp_menu_headr">
													<h4>Hi, <?php echo $_SESSION["auth"]["username"]; ?></h4>
												</div>
												<ul>
													<li><a href="index.php?controller=DashBoard&action=index"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>                                  
													<li><a href="index.php?controller=DashBoard&action=profile"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
													<li><a href="index.php?controller=DashBoard&action=saveProperty"><i class="fa fa-bookmark"></i>Saved Property<span class="notti_coun style-2">7</span></a></li>
													<li><a href="index.php?controller=DashBoard&action=myProperty"><i class="fa fa-tasks"></i>My Properties</a></li>
													<li><a href="index.php?controller=DashBoard&action=messages"><i class="fa fa-envelope"></i>Messages<span class="notti_coun style-3">3</span></a></li>
													<li><a href="index.php?controller=DashBoard&action=package"><i class="fa fa-gift"></i>Choose Package</a></li>
													<li><a href="index.php?controller=DashBoard&action=newProperty"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
													<li><a href="index.php?controller=DashBoard&action=changePassword"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
													<li><a href="index.php?controller=Logout&action=index"><i class="fa fa-power-off"></i>Logout</a></li>
												</ul>
											</div>
										</div>
									</li>
									<li class="add-listing">
										<a href="index.php?controller=DashBoard&action=submitProperty"  class="theme-cl">
											<i class="fas fa-plus-circle mr-1"></i>Đăng tin
										</a>
									</li>
								</ul>
							<?php else: ?>
								<ul class="nav-menu nav-menu-social align-to-right">
									<li>
										<a href="#" class="alio_green" data-toggle="modal" data-target="#login">
											<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Đăng nhập</span>
										</a>
									</li>
									<li class="add-listing">
										<a href="index.php?controller=DashBoard&action=submitProperty"  class="theme-cl">
											<i class="fas fa-plus-circle mr-1"></i>Đăng tin
										</a>
									</li>
								</ul>
							<?php endif; ?>

    <!-- ==============================  View Signing  ================================ -->
						</div>
					</nav>
				</div>
			</div>
    <!-- End Navigation -->
    <!-- ============================================================== -->




    <!-- ============================================================== -->
    <!-- Giao dien nguoi dung -->
    <?php require_once 'router.php'; ?>
    <!-- Giao dien nguoi dung -->
    <!-- ============================================================== -->



	<!-- ============================ Call To Action ================================== -->
	<section class="theme-bg call_action_wrap-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
					<div class="call_action_wrap">
						<div class="call_action_wrap-head">
							<h3>Bạn có thắc mắc nào không ?</h3>
							<span>Chúng tôi sẽ giúp bạn phát triển sự nghiệp và thành công.</span>
						</div>
						<a href="index.php?controller=Contact&action=index" class="btn btn-call_action_wrap">Liên hệ ngay hôm nay</a>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- ============================ Call To Action End ================================== -->


    <!-- ============================================================== -->
    <!-- Start Footer -->

    <footer class="dark-footer skin-dark-footer style-2">
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							
							<div class="col-lg-5 col-md-5">
								<div class="footer_widget">
									<img src="public/img/logo-light.png" class="img-footer small mb-2" alt="" />
									<h4 class="extream mb-3">Do you need help with<br>anything?</h4>
									<p>Receive updates, hot deals, tutorials, discounts sent straignt in your inbox every month</p>
									<div class="foot-news-last">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Email Address">
											<div class="input-group-append">
												<button type="button" class="input-group-text theme-bg b-0 text-light">Subscribe</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-7 ml-auto">
								<div class="row">
								
									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Layouts</h4>
											<ul class="footer-menu">
												<li><a href="#">Home Page</a></li>
												<li><a href="#">About Page</a></li>
												<li><a href="#">Service Page</a></li>
												<li><a href="#">Property Page</a></li>
												<li><a href="#">Contact Page</a></li>
												<li><a href="#">Single Blog</a></li>
											</ul>
										</div>
									</div>
											
									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">All Sections</h4>
											<ul class="footer-menu">
												<li><a href="#">Headers<span class="new">New</span></a></li>
												<li><a href="#">Features</a></li>
												<li><a href="#">Attractive<span class="new">New</span></a></li>
												<li><a href="#">Testimonials</a></li>
												<li><a href="#">Videos</a></li>
												<li><a href="#">Footers</a></li>
											</ul>
										</div>
									</div>
							
									<div class="col-lg-4 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Company</h4>
											<ul class="footer-menu">
												<li><a href="#">About</a></li>
												<li><a href="#">Blog</a></li>
												<li><a href="#">Pricing</a></li>
												<li><a href="#">Affiliate</a></li>
												<li><a href="#">Login</a></li>
												<li><a href="#">Changelog<span class="update">Update</span></a></li>
											</ul>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12 col-md-12 text-center">
								<p class="mb-0">© 2023 SANCITY. Designd By <a href="#">Sang Pham</a>.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

    <!-- End Footer -->
    <!-- ============================================================== -->	

	<!-- ============================================================== -->
    <!-- Giao dien nguoi dung -->
    <?php require_once 'login/log.php'; ?>
    <!-- Giao dien nguoi dung -->
    <!-- ============================================================== -->

<!-- Send Message -->
<div class="modal fade" id="autho-message" tabindex="-1" role="dialog" aria-labelledby="authomessage" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="authomessage">
            <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
            <div class="modal-body">
                <h4 class="modal-header-title">Drop Message</h4>
                <div class="login-form">
                    <form>
                    
                        <div class="form-group">
                            <label>Subject</label>
                            <div class="input-with-icons">
                                <input type="text" class="form-control" placeholder="Message Title">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Messages</label>
                            <div class="input-with-icons">
                                <textarea class="form-control ht-80"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-md full-width pop-login">Send Message</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
<!-- ============================ Login ================================== -->	

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="public/js/jquery.min.js"></script>
<script src="public/js/popper.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/ion.rangeSlider.min.js"></script>
<script src="public/js/select2.min.js"></script>
<script src="public/js/jquery.magnific-popup.min.js"></script>
<script src="public/js/slick.js"></script>
<script src="public/js/slider-bg.js"></script>
<script src="public/js/lightbox.js"></script> 
<script src="public/js/imagesloaded.js"></script>
<script src="public/js/daterangepicker.js"></script>
<script src="public/js/custom.js"></script>

<!-- Morris.js charts -->
<script src="public/js/raphael.min.js"></script>
<script src="public/js/morris.min.js"></script>

<!-- Custom Morrisjs JavaScript -->
<script src="public/js/morris.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>

</html>