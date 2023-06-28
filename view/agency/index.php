

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

<!-- ============================ Agent List Start ================================== -->
<section class="gray min">
    <div class="container">
        
        <div class="row">
            
            <!-- Single Agent -->
            <?php
            $colors = array('#d2382d', '#4253b1', '#40ad44', '#0d9ada', '#795548', '#b2bf2c', '#673ab7', '#dc2b67', '#2363b3');
            $colorIndex = 0;
            ?>

            <?php foreach ($users as $user): ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="agency_gridio_wrap">
                        <div class="agency_gridio_header" style="background:<?php echo $colors[$colorIndex]; ?> url(public/img/bg2.png)no-repeat">
                            <span class="agents_count">22 Agents</span>
                        </div>
                        <div class="agency_gridio_caption">
                            <div class="agency_gridio_thumb">
                                <a href="agency-page.html"><img src="public/img/brand-4.png" class="img-fluid" alt="" /></a>	
                            </div>
                            <div class="agency_gridio_txt">
                                <h4><a href="agency-page.html"><?php echo $user['username']; ?></a></h4>
                                <span class="agt_gridio_ocat"><?php echo $user['email']; ?></span>
                                <a href="agency-page.html" class="vew_agency_btn">View Agency</a>	
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                $colorIndex++;
                if ($colorIndex >= count($colors)) {
                    $colorIndex = 0;
                }
                ?>
            <?php endforeach; ?>


            
            
        </div>
                
    </div>
            
</section>
<!-- ============================ Agent List End ================================== -->
