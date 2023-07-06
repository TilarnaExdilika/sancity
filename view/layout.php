
<!-- bat dau session -->
<?php
session_start();
require_once "model/Property.php";
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
	<script src="public/js/tinymce.min.js" referrerpolicy="origin"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>SANCITY</title>
	<style>
    .custom-datepicker {
      background-color: black;
      color: white;
      font-family: Arial, sans-serif;
    }

    .custom-datepicker .datepicker-days tr th,
    .custom-datepicker .datepicker-months tr th,
    .custom-datepicker .datepicker-years tr th {
      color: white;
    }

    .custom-datepicker .datepicker-switch:hover {
      background-color: #333;
    }

    .custom-datepicker .datepicker-days .disabled,
    .custom-datepicker .datepicker-months .disabled,
    .custom-datepicker .datepicker-years .disabled {
      color: rgba(255, 255, 255, 0.5);
    }

    .custom-datepicker .datepicker-days .active,
    .custom-datepicker .datepicker-months .active,
    .custom-datepicker .datepicker-years .active {
      background-color: #333;
    }

    .custom-datepicker .datepicker-days table tr td,
    .custom-datepicker .datepicker-months table tr td,
    .custom-datepicker .datepicker-years table tr td {
      border: 1px solid #333;
    }

    .custom-datepicker .datepicker-days table tr td:hover,
    .custom-datepicker .datepicker-months table tr td:hover,
    .custom-datepicker .datepicker-years table tr td:hover {
      background-color: #666;
    }
  </style>
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
												<img src="public/upload/users/<?php echo isset($_SESSION["uauth"]["avatar_url"]) && !empty($_SESSION["uauth"]["avatar_url"]) ? $_SESSION["uauth"]["avatar_url"] : 'default.jpg'; ?>" class="avater-img" alt="">
											</button>
											<div class="dropdown-menu pull-right animated flipInX">
												<div class="drp_menu_headr">
													<h4>Hi, <?php echo $_SESSION["uauth"]["username"]; ?></h4>
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
								<ul class="nav-menu nav-menu-social align-to-right" >
									<li>
										<a href="#" class="alio_green" data-toggle="modal" data-target="#login">
											<i class="fas fa-sign-in-alt mr-1"></i><span class="dn-lg">Đăng nhập</span>
										</a>
									</li>
									<li class="add-listing">
										<a href="#" class="theme-cl" data-toggle="modal" data-target="#login">
											<i class="fas fa-plus-circle mr-1"></i>Đăng kí
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
											<h4 class="widget_title">Hướng dẫn</h4>
											<ul class="footer-menu">
												<li><a href="#">Báo giá & hỗ trợ</a></li>
												<li><a href="#">Câu hỏi thường gặp</a></li>
												<li><a href="#">Thông báo</a></li>
												<li><a href="#">Liên hệ</a></li>
												<li><a href="#">Sitemap</a></li>
												<li><a href="#">Góp ý báo lỗi</a></li>
											</ul>
										</div>
									</div>
											
									<div class="col-lg-5 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Quy định</h4>
											<ul class="footer-menu">
												<li><a href="#">Quy định đăng tin<span class="new">New</span></a></li>
												<li><a href="#">Quy chế hoạt động</a></li>
												<li><a href="#">Điều khoản thỏa thuận<span class="new">New</span></a></li>
												<li><a href="#">Chính sách bảo mật</a></li>
												<li><a href="#">Giải quyết khiếu nại</a></li>
												<li><a href="#">Góp ý báo lỗi</a></li>
											</ul>
										</div>
									</div>
							
									<div class="col-lg-3 col-md-4">
										<div class="footer_widget">
											<h4 class="widget_title">Khu vưc</h4>
											<ul class="footer-menu">
												<li><a href="#">Hồ Chí Minh</a></li>
												<li><a href="#">Nha Trang</a></li>
												<li><a href="#">Vũng Tàu</a></li>
												<li><a href="#">Hà Nội</a></li>
												<li><a href="#">Cần Thơ</a></li>
												<li><a href="#">Vĩnh Long<span class="update">Up</span></a></li>
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
								<p class="mb-0">© 2023 SANCITY. Designd and Powered By <a href="#">Sang Pham</a>.</p>
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
<script src="public/js/ajaxjs.js" ></script>
<script>
        $(document).ready(function() {
            var availableCities = [
                "An Giang", "Bà Rịa - Vũng Tàu", "Bắc Giang", "Bắc Kạn", "Bạc Liêu", "Bắc Ninh", "Bến Tre", "Bình Định", "Bình Dương", "Bình Phước",
                "Bình Thuận", "Cà Mau", "Cần Thơ", "Cao Bằng", "Đà Nẵng", "Đắk Lắk", "Đắk Nông", "Điện Biên", "Đồng Nai", "Đồng Tháp", "Gia Lai",
                "Hà Giang", "Hà Nam", "Hà Nội", "Hà Tĩnh", "Hải Dương", "Hải Phòng", "Hậu Giang", "Hòa Bình", "Hưng Yên", "Khánh Hòa", "Kiên Giang",
                "Kon Tum", "Lai Châu", "Lâm Đồng", "Lạng Sơn", "Lào Cai", "Long An", "Nam Định", "Nghệ An", "Ninh Bình", "Ninh Thuận", "Phú Thọ",
                "Phú Yên", "Quảng Bình", "Quảng Nam", "Quảng Ngãi", "Quảng Ninh", "Quảng Trị", "Sóc Trăng", "Sơn La", "Tây Ninh", "Thái Bình",
                "Thái Nguyên", "Thanh Hóa", "Thừa Thiên Huế", "Tiền Giang", "TP. Hồ Chí Minh", "Trà Vinh", "Tuyên Quang", "Vĩnh Long", "Vĩnh Phúc",
                "Yên Bái"
            ];

            $("#city-input").autocomplete({
                source: availableCities
            });
        });
    </script>
<!-- ============================================================== -->
<script>
// Format price input
document.getElementById('price').addEventListener('input', function (e) {
    // Remove any non-digit characters
    var value = this.value.replace(/\D/g, '');

    // Format the value as price
	value = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value);
    // Update the input value
    this.value = value;
});
</script>
<!-- ============================================================== -->
 <script>
    tinymce.init({
      selector: '#description',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
</script>
<!-- ============================================================== -->
<!-- Over 4 image -->


<!-- ============================================================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script>
$(document).ready(function() {
	$('input[name="checkin"]').datepicker({
	format: 'dd/mm/yyyy',
	autoclose: true,
	beforeShow: function(input, inst) {
		setTimeout(function() {
		$('.datepicker-dropdown').addClass('custom-datepicker');
		}, 0);
	}
	});

	$('input[name="checkout"]').datepicker({
	format: 'dd/mm/yyyy',
	autoclose: true,
	beforeShow: function(input, inst) {
		setTimeout(function() {
		$('.datepicker-dropdown').addClass('custom-datepicker');
		}, 0);
	}
	});
});
</script>
<!-- ============================================================== -->
<script>
  function calculateRent() {
    var priceText = document.getElementById("price").innerText; // Lấy giá trị từ phần tử HTML
    var price = parseInt(priceText.replace(/[^0-9]/g, "")); // Chuyển đổi giá trị thành số nguyên

    var checkin = new Date(document.getElementById("checkin").value); // Lấy giá trị từ ô input checkin
    var checkout = new Date(document.getElementById("checkout").value); // Lấy giá trị từ ô input checkout

    var oneDay = 24 * 60 * 60 * 1000; // Số mili giây trong một ngày
    var numberOfDays = Math.round(Math.abs((checkout - checkin) / oneDay)); // Tính tổng số ngày thuê

    var dailyRent = price / 30; // Tính giá thuê từng ngày (giả sử 30 ngày trong một tháng)
    var totalRent = dailyRent * numberOfDays; // Tính tổng hợp đồng

    document.getElementById("totalRent").innerText = totalRent.toLocaleString() + " VND"; // Hiển thị giá trị tổng hợp đồng
  }
</script>



<!-- ============================================================== -->
<script>
	$(document).ready(function() {
  $('.delete-user').click(function(e) {
    e.preventDefault();
    var userId = $(this).data('userid');
    
    // Gửi yêu cầu xóa thông qua Ajax
    $.ajax({
      url: 'app/delete_user.php', // Đường dẫn tới file xử lý xóa người dùng
      type: 'POST',
      data: { user_id: userId },
      success: function(response) {
        // Xử lý kết quả trả về sau khi xóa người dùng
        if (response === 'success') {
          // Xóa dòng người dùng khỏi danh sách trực tiếp
          $(e.target).closest('tr').remove();
        }
      }
    });
  });
});

</script>


</body>

</html>