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

<!-- ============================ Agency List Start ================================== -->
<section class="gray">

    <div class="container">
    
        <div class="row">
            <div class="col text-center">
                <div class="sec-heading center">
                    <h2>Tin tức</h2>
                    <p>We post regulary most powerful articles for help and support.</p>
                </div>
            </div>
        </div>
    
        <!-- row Start -->
        <div class="row">
            
        <?php foreach ($newsList as $news): ?>
            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-6">
                <div class="grid_blog_box">
                    
                <div class="gtid_blog_thumb">
                    <a href="index.php?controller=Blog&action=blog&newsId=<?php echo $news['news_id']; ?>">
                        <div class="image-wrapper">
                            <img src="public/upload/news/<?php echo $news['news_image']; ?>" class="img-fluid" alt="" />
                        </div>
                    </a>
                    <div class="gtid_blog_info">
                        <span><?php echo date('d', strtotime($news['created_at'])); ?></span><?php echo date('F', strtotime($news['created_at'])); ?> <?php echo date('Y', strtotime($news['created_at'])); ?>
                    </div>
                </div>
							
                    
                    <div class="blog-body">
                        <h4 class="bl-title"><a href="index.php?controller=Blog&action=blog&newsId=<?php echo $news['news_id']; ?>">
                            <?php
                            $news_name = $news['title'];
                            if (strlen($news_name) > 45) {
                                $news_name = substr($news_name, 0, 42) . '...';
                            }
                            echo htmlentities($news_name);
                            ?> 
                            </a>
                            <?php if ($news['view_count'] > 20): ?>
                                <span class="latest_new_post hot">Hot</span>
                            <?php else: ?>
                                <span class="latest_new_post">New</span>
                            <?php endif; ?>
                        </h4>
                        <p>
                            <?php
                            $news_name = $news['content'];
                            if (strlen($news_name) > 90) {
                                $news_name = substr($news_name, 0, 87) . '...';
                            }
                            echo htmlentities($news_name);
                            ?> 
                        </p>
                    </div>
                    
                    <div class="modern_property_footer">
                        <div class="property-author">
                            <div class="path-img"><a href="index.php?controller=Blog&action=blog" tabindex="-1"><img src="public/upload/users/<?php echo $news['avatar_url']; ?>" class="img-fluid" alt=""></a></div>
                            <h5><a href="index.php?controller=Blog&action=blog" tabindex="-1"><?php echo $news['author_fullname']; ?></a></h5>
                        </div>
                        <span class="article-pulish-date"><i class="ti-comment-alt mr-2"></i><?php echo $news['view_count']; ?></span>
                    </div>
                    
                </div>
            </div>
        <?php endforeach; ?>
            
        </div>
        <!-- /row -->

        <!-- Pagination -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="pagination p-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span class="ti-arrow-left"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item "><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">18</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                        <span class="ti-arrow-right"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>					
        
    </div>
            
</section>
<!-- ============================ Agency List End ================================== -->