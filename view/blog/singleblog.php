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
    
        <!-- row Start -->
        <div class="row">
        
            <!-- Blog Detail -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="article_detail_wrapss single_article_wrap format-standard">
                    <div class="article_body_wrap">
                    
                        <div class="article_featured_image">
                            <img class="img-fluid" src="public/upload/news/<?php echo $news['news_image']; ?>" alt="">
                        </div>
                        
                        <div class="article_top_info">
                            <ul class="article_middle_info">
                                <li><a href="#"><span class="icons"><i class="ti-user"></i></span><?php echo $news['author_fullname']; ?></a></li>
                                <li><a href="#"><span class="icons"><i class="ti-comment-alt"></i></span><?php echo $news['view_count']; ?> Bình luận</a></li>
                            </ul>
                        </div>
                        <h2 class="post-title"><?php echo $news['title']; ?></h2>
                        <p style="text-align: center; display: flex; justify-content: center; align-items: center;"><?php echo $news['content']; ?></p>

                        
                        
                    </div>
                </div>
                
                <!-- Author Detail -->
                <div class="article_detail_wrapss single_article_wrap format-standard">
                    
                    <div class="article_posts_thumb">
                        <span class="img"><img class="img-fluid" src="public/upload/users/<?php echo $news['avatar_url']; ?>" alt=""></span>
                        <h3 class="pa-name"><?php echo $news['author_fullname']; ?></h3>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <p class="pa-text">Lời giới thiệu</p>
                    </div>
                    
                </div>
 
                
                
            </div>
            
            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                
                <!-- Searchbard -->
                <div class="single_widgets widget_search">
                    <h4 class="title">Tìm kiếm</h4>
                    <form action="Controller/SeacrhNews.php" class="sidebar-search-form">
                        <input type="search" name="search" placeholder="Tìm kiếm..">
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>

                <!-- Categories -->
                <div class="single_widgets widget_category">
                    <h4 class="title">Chủ đề</h4>
                    <ul>
                    <?php foreach ($tagCounts as $tag): ?>
                        <li><a href="#"> <?php echo $tag['tags_name']; ?>  <span>0<?php echo $tag['news_count']; ?></span></a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Trending Posts -->
                <div class="single_widgets widget_thumb_post">
                    <h4 class="title">Tin mới</h4>
                    <ul>
                    <?php foreach ($newsList as $trendingPost): ?>
                        <li>
                            <span class="left">
                                <img src="public/upload/news/<?php echo $trendingPost['news_image']; ?>" alt="" class="">
                            </span>
                            <span class="right">
                                <a class="feed-title" href="#"><?php echo $trendingPost['title']; ?></a> 
                                <span class="post-date"><i class="ti-calendar"></i><?php echo $trendingPost['created_at']; ?></span>
                            </span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Tags Cloud -->
                <div class="single_widgets widget_tags">
                    <h4 class="title">Từ khóa bài viết</h4>
                    <ul>
                    <?php foreach ($news['tags'] as $tag): ?>
                        <li><a href="#"><?php echo $tag['tags_name']; ?></a></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                
            </div>
            
        </div>
        <!-- /row -->					
        
    </div>
            
</section>
<!-- ============================ Agency List End ================================== -->
