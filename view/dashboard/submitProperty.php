<?php
// Kết nối tới cơ sở dữ liệu

require_once 'config/db.php';
$db = new connect();
$conn = $db->getConnection();


// Lấy dữ liệu từ bảng "property_types"
$propertyTypesQuery = "SELECT * FROM property_types";
$propertyTypesResult = $conn->query($propertyTypesQuery);

// Lấy dữ liệu từ bảng "areas"
$areasQuery = "SELECT * FROM areas";
$areasResult = $conn->query($areasQuery);

// Lấy dữ liệu từ bảng "bedrooms"
$bedroomsQuery = "SELECT * FROM bedrooms";
$bedroomsResult = $conn->query($bedroomsQuery);

// Lấy dữ liệu từ bảng "bathrooms"
$bathroomsQuery = "SELECT * FROM bathrooms";
$bathroomsResult = $conn->query($bathroomsQuery);

// Lấy dữ liệu từ bảng "utilities"
$utilitiesQuery = "SELECT * FROM utilities";
$utilitiesResult = $conn->query($utilitiesQuery);

// Đóng kết nối
$conn = null;
?>


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

<?php
// Tạo một đối tượng LoginModel
$loginModel = new LoginModel();

// Gọi phương thức isLoggedIn() để kiểm tra trạng thái đăng nhập
$loggedIn = $loginModel->isLoggedIn();
?>
<?php if (!$loggedIn): ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            
                <div class="alert alert-info" role="alert">
                <p>Bạn chưa đăng nhập ? Đăng nhập ngay <a href="#">Tại đây</a></p>
                </div>
            
            </div>
        </div>
    </div>
</section>

<?php else: ?>

<!-- ============================ Submit Property Start ================================== -->
<section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
            
                <div class="alert alert-info" role="alert">
                <p>Mọi thông tin chi tiết xin liên hệ CSKH - SANCITY <a href="#">Tại đây</a></p>
                </div>
            
            </div>
            
            <!-- Submit Form -->
            <form action="controller/resultSubmit.php" method="POST" enctype="multipart/form-data">
            <div class="col-lg-12 col-md-12">
            
                <div class="submit-page p-0">
                    
                    <!-- Basic Information -->
                    <div class="frm_submit_block">	
                        <h3>Thông tin bất động sản</h3>
                        <div class="frm_submit_wrap">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="property_name">Tên bất động sản</label>
                                    <input type="text" id="property_name" name="property_name" required class="form-control">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="status">Trang thái bất động sản</label>
                                    <select id="status" name="status" required class="form-control">
                                    <option value="">Chọn trạng thái</option>
                                    <option value="Thuê">Thuê</option>
                                    <option value="Bán">Bán</option>
                                    <option value="Có sẵn">Có Sẵn</option>

                                    </select>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="property_type">Loại Bất động sản</label>
                                    <!-- Load data -->
                                    <select id="property_type" name="property_type" required class="form-control">
                                    <option value="">&nbsp;</option>
                                        <?php while ($row = $propertyTypesResult->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['type_id']; ?>"><?php echo $row['type_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- Load data -->
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="price">Giá</label>
                                    <input type="text" id="price" name="price" required class="form-control" placeholder="">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Đơn vị</label>
                                    <select id="unit" name="unit" class="form-control">
                                        <option value="">&nbsp;</option>
                                        <option value="tháng">giá/tháng</option>
                                        <option value="m²">giá/m²</option>
                                        <option value="căn">giá/căn</option>
                                        <option value="Thoả thuận">Thỏa thuận</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="area">Khoảng diện tích</label>
                                    <!-- Load data -->
                                    <select id="area" name="area" required class="form-control">
                                    <option value="">&nbsp;</option>
                                        <?php while ($row = $areasResult->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['area_id']; ?>"><?php echo $row['area']; ?> m²</option>
                                        <?php } ?>
                                    <option value="over1000">Trên 1000+ m²</option>
                                    <option value="option">Tùy chọn</option>
                                    </select>
                                    <!-- Load data -->
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="real_area">Diện tích thực tế</label>
                                    <input type="text" id="real_area" name="real_area" required class="form-control">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="bedroom">Phòng ngủ</label>
                                    <!-- Load data -->
                                    <select id="bedroom" name="bedroom" required class="form-control">
                                    <option value="">&nbsp;</option>
                                        <?php while ($row = $bedroomsResult->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['bedroom_id']; ?>"><?php echo $row['bedroom_count']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- Load data -->
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="bathroom">Phòng tắm</label>
                                    <!-- Load data -->
                                    <select id="bathroom" name="bathroom" required class="form-control">
                                    <option value="">&nbsp;</option>
                                        <?php while ($row = $bathroomsResult->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option value="<?php echo $row['bathroom_id']; ?>"><?php echo $row['bathroom_count']; ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- Load data -->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <!-- Gallery -->
                    <div class="frm_submit_block">
                        <h3>Thư viện ảnh</h3>
                        <div class="frm_submit_wrap">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Tải ảnh lên<a href="#" class="tip-topdata" data-tip="giữ Shift hoặc chọn nhiều mục để chọn nhiều ảnh"><i class="ti-help"></i></a></label>
                                    <i class="ti-gallery"></i><input type="file" name="my_image[]" required class="form-control" multiple>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Location -->
                    <div class="frm_submit_block">	
                        <h3>Vị trí</h3>
                        <div class="frm_submit_wrap">
                            <div class="form-row">
                            
                                <div class="form-group col-md-6">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" name="address" required class="form-control">
                                </div>
                                
                                <div class="form-group col-md-6">
                                <label for="city">Thành phố</label>
                                <select id="city-input" name="city" required class="form-control">
                                    <option value="" selected disabled hidden>Tìm kiếm...</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Hải Phòng">Hải Phòng</option>
                                    <option value="Cần Thơ">Cần Thơ</option>
                                    <option value="An Giang">An Giang</option>
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                    <option value="Bắc Giang">Bắc Giang</option>
                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                    <option value="Bến Tre">Bến Tre</option>
                                    <option value="Bình Định">Bình Định</option>
                                    <option value="Bình Dương">Bình Dương</option>
                                    <option value="Bình Phước">Bình Phước</option>
                                    <option value="Bình Thuận">Bình Thuận</option>
                                    <option value="Cà Mau">Cà Mau</option>
                                    <option value="Cao Bằng">Cao Bằng</option>
                                    <option value="Đắk Lắk">Đắk Lắk</option>
                                    <option value="Đắk Nông">Đắk Nông</option>
                                    <option value="Điện Biên">Điện Biên</option>
                                    <option value="Đồng Nai">Đồng Nai</option>
                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                    <option value="Gia Lai">Gia Lai</option>
                                    <option value="Hà Giang">Hà Giang</option>
                                    <option value="Hà Nam">Hà Nam</option>
                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                    <option value="Hải Dương">Hải Dương</option>
                                    <option value="Hậu Giang">Hậu Giang</option>
                                    <option value="Hòa Bình">Hòa Bình</option>
                                    <option value="Hưng Yên">Hưng Yên</option>
                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                    <option value="Kiên Giang">Kiên Giang</option>
                                    <option value="Kon Tum">Kon Tum</option>
                                    <option value="Lai Châu">Lai Châu</option>
                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                    <option value="Lào Cai">Lào Cai</option>
                                    <option value="Long An">Long An</option>
                                    <option value="Nam Định">Nam Định</option>
                                    <option value="Nghệ An">Nghệ An</option>
                                    <option value="Ninh Bình">Ninh Bình</option>
                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                    <option value="Phú Thọ">Phú Thọ</option>
                                    <option value="Quảng Bình">Quảng Bình</option>
                                    <option value="Quảng Nam">Quảng Nam</option>
                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                    <option value="Quảng Trị">Quảng Trị</option>
                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                    <option value="Sơn La">Sơn La</option>
                                    <option value="Tây Ninh">Tây Ninh</option>
                                    <option value="Thái Bình">Thái Bình</option>
                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                    <option value="Tiền Giang">Tiền Giang</option>
                                    <option value="Trà Vinh">Trà Vinh</option>
                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                    <option value="Yên Bái">Yên Bái</option>
                                    <!-- Thêm các tùy chọn cho các thành phố khác tại đây -->
                                </select>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                    <!-- Detailed Information -->
                    <div class="frm_submit_block">	
                        <h3>Chi tiết bất động sản</h3>
                        <div class="frm_submit_wrap">
                            <div class="form-row">
                            
                                <div class="form-group col-md-12">
                                    <label for="description">Mô tả</label>
                                    <textarea id="description" name="description"  class="form-control h-120"></textarea>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label for="age">Năm hoàn thành (Tùy chọn)</label>
                                    <input type="text" id="age" name="age" required class="form-control">
                                </div>
                                

                                
                                <div class="form-group col-md-12">
                                    <label>Tiện ích khác (Tùy chọn)</label>
                                    <div class="o-features">
                                        <ul class="no-ul-list third-row">
                                            
                                            <!-- Lấy dữ liệu từ cơ sở dữ liệu bảng utilities -->
                                            <?php while ($row = $utilitiesResult->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <li>
                                                    <input id="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom" name="utilities[]" type="checkbox" value="<?php echo $row['utility_id']; ?>">
                                                    <label for="utilities-<?php echo $row['utility_id']; ?>" class="checkbox-custom-label"><?php echo $row['utility_name']; ?></label>
                                                </li>
                                            <?php } ?>
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-12 col-md-12">
                        <button class="btn btn-theme" type="submit" name="submit">Đăng bất động sản</button>
                        </div>
                    </div>
                                
                </div>
            </div>
            </form>
        </div>
    </div>
            
</section>
<!-- ============================ Submit Property End ================================== -->
<?php endif; ?>


