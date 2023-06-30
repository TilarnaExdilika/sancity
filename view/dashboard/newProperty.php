
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
                        <div class="row">
                            
                            <!-- Submit Form -->
                            <div class="col-lg-12 col-md-12">
                            
                                <div class="submit-page">
                                <form action="">
                                    <!-- Basic Information -->
                                    <div class="frm_submit_block">	
                                        <h3>Thông tin cơ bản</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-12">
                                                    <label>Tiêu đề bài đăng<a href="#" class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></a></label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Gallery -->
                                    <div class="frm_submit_block">	
                                        <h3>Gallery</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-12">
                                                    <label>Upload Gallery</label>
    
                                                        <div class="dz-default dz-message">
                                                            <i class="ti-gallery"></i>
                                                            <span>Drag & Drop To Change Logo</span>
                                                        </div>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Location -->
                                    
                                    
                                    <!-- Detailed Information -->
                                    <div class="frm_submit_block">	
                                        <h3>Thông tin chi tiết</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                            
                                                <div class="form-group col-md-12">
                                                    <label>Nội dung bài đăng</label> 
                                                    <textarea id="description" class="form-control h-120"></textarea>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Thêm tags bài viết</label>
                                                    <div class="o-features">
                                                        <ul class="no-ul-list third-row">
                                                            <li>
                                                                <input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
                                                                <label for="a-1" class="checkbox-custom-label">Air Condition</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
                                                                <label for="a-2" class="checkbox-custom-label">Bedding</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
                                                                <label for="a-3" class="checkbox-custom-label">Heating</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
                                                                <label for="a-4" class="checkbox-custom-label">Internet</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
                                                                <label for="a-5" class="checkbox-custom-label">Microwave</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
                                                                <label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
                                                                <label for="a-7" class="checkbox-custom-label">Terrace</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
                                                                <label for="a-8" class="checkbox-custom-label">Balcony</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
                                                                <label for="a-9" class="checkbox-custom-label">Icon</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-10" class="checkbox-custom" name="a-10" type="checkbox">
                                                                <label for="a-10" class="checkbox-custom-label">Wi-Fi</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-11" class="checkbox-custom" name="a-11" type="checkbox">
                                                                <label for="a-11" class="checkbox-custom-label">Beach</label>
                                                            </li>
                                                            <li>
                                                                <input id="a-12" class="checkbox-custom" name="a-12" type="checkbox">
                                                                <label for="a-12" class="checkbox-custom-label">Parking</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label>GDPR Thỏa thuận*</label>
                                        <ul class="no-ul-list">
                                            <li>
                                                <input id="aj-1" class="checkbox-custom" name="aj-1" type="checkbox">
                                                <label for="aj-1" class="checkbox-custom-label">Tôi đồng ý để trang web này lưu trữ thông tin đã gửi của tôi để họ có thể trả lời yêu cầu của tôi.</label>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="btn btn-theme" type="submit">Đăng bài</button>
                                    </div>
                                </form>                
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
