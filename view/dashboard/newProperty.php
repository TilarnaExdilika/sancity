
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
                                <form action="controller/resultNews.php" method="POST" enctype="multipart/form-data">
                                    <!-- Basic Information -->
                                    <div class="frm_submit_block">
                                        <h3>Thông tin cơ bản</h3>
                                        <div class="frm_submit_wrap">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Tiêu đề bài đăng<a href="#" class="tip-topdata" data-tip="Property Title"><i class="ti-help"></i></a></label>
                                                    <input type="text" name="title" class="form-control">
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
                                                    <label>Tải ảnh lên<a href="#" class="tip-topdata" data-tip="ảnh không quá 2mb"><i class="ti-help"></i></a></label>
                                                    <i class="ti-gallery"></i><input type="file" name="news_image[]" required class="form-control" multiple>
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
                                                    <textarea id="description_news" name="content" class="form-control h-120"></textarea>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Thêm tags bài viết</label>
                                                    <div class="o-features">
                                                        <ul class="no-ul-list third-row">
                                                            <?php if (!empty($tags)) {
                                                                foreach ($tags as $tag) {
                                                                    $tagId = isset($tag['tags_id']) ? $tag['tags_id'] : '';
                                                                    $tagName = isset($tag['tags_name']) ? $tag['tags_name'] : '';
                                                                    ?>
                                                                    <li>
                                                                        <input id="tag-<?php echo $tagId; ?>" class="checkbox-custom" name="tags[]" value="<?php echo $tagId; ?>" type="checkbox">
                                                                        <label for="tag-<?php echo $tagId; ?>" class="checkbox-custom-label"><?php echo $tagName; ?></label>
                                                                    </li>
                                                                <?php }
                                                            } ?>
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
                                                <input id="aj-1" class="checkbox-custom" name="gdpr_agreement" type="checkbox">
                                                <label for="aj-1" class="checkbox-custom-label">Tôi đồng ý để trang web này lưu trữ thông tin đã gửi của tôi để họ có thể trả lời yêu cầu của tôi.</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12">
                                        <button class="btn btn-theme" type="submit" name="submit" value="submit">Đăng bài</button>
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
