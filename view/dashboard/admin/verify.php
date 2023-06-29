<?php
if(isset($_SESSION["uauth"]["account_type_id"]) && $_SESSION["uauth"]["account_type_id"] == 1 || $_SESSION["uauth"]["account_type_id"] == 1 ) {
    // Cho phép tiếp tục truy cập vào URL
    // Các mã và chức năng khác có thể được thêm vào đây
} else {
    // Chặn truy cập không hợp lệ và chuyển hướng người dùng tới trang khác hoặc hiển thị thông báo lỗi

    echo '
    <!-- ============================ User Dashboard ================================== -->
    <section style="padding-left:400px" class="error-wrap">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-lg-6 col-md-10">
                    <div class="text-center">
                        
                        <img src="public/img/404.png" class="img-fluid" alt="">
                        <h4>Bạn không có quyền truy cập chức năng này</h4>
                        <a class="btn btn-theme" href="index.php?controller=Home&action=index">Trở lại</a>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ============================ User Dashboard End ================================== -->
    ';
    exit();
}
?>
