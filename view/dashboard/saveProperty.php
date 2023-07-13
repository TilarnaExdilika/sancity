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
                
                    <div class="dashboard-wraper">
                    
                        <!-- Bookmark Property -->
                        <div class="frm_submit_block">	
                            <h4>Tin đã đăng</h4>
                        </div>
                        
                        <table class="property-table-wrap responsive-table bkmark">

                            <tbody>
                                <!-- Item #1 -->
                                <?php foreach ($newsList as $news): ?>
                                <tr>
                                    
                                        <td class="dashboard_propert_wrapper">
                                            <img src="public/upload/news/<?php echo $news['news_image']; ?>" alt="">
                                            <div class="title">
                                                <h4><a href="#"><?php echo $news['title']; ?></a></h4>
                                                <span><i class="fa fa-user-circle"></i> Tác giả: <?php echo $news['author_fullname']; ?></span>
                                                <span><i class="fa fa-eye"></i>  <?php echo $news['view_count']; ?> lượt xem</span>
                                                <?php foreach ($news['tags'] as $tag): ?>
                                                <span class="table-property-price">
                                                        <?php echo $tag['tags_name'] . ', '; ?>
                                                </span>
                                                <?php endforeach; ?>
                                            </div>
                                        </td>
                                        <td class="action">
                                            <a href="#" class="delete"><i class="ti-close"></i> Delete</a>
                                        </td>
                                    
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 col-lg-12 mt-4">
                            <footer class="text-center">
                                <p class="mb-0"></p>
                            </footer>
                        </div>
                    </div>
                    <!-- row -->
                
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- ============================ User Dashboard End ================================== -->
