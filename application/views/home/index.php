<!--Slider-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="nivo-slider">
                <div class="slider-wrapper theme-default">
                    <div id="nivoSlider" class="nivoSlider">
                        <?php foreach ($slider as $row) {
                            echo '<img src="'.$row->slides.'" data-thumb="'.$row->slides.'" />';
                        } ?>
                    </div>
                    <div id="htmlcaption" class="nivo-html-caption"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="home-intro home-intro-compact">
                <div class="row">
                    <div class="col-md-9">
                        <p>
                            Pilihan terbaik untuk pelatihan <em>Keselamatan dan Kesehatan Kerja</em>
                            <span>Lihat fitur dan program kami yang tersedia.</span>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="get-started">
                            <a href="<?php echo $this->config->item('link_login'); ?>" class="btn btn-lg btn-primary">Mulai Sekarang!</a>
                            <div class="learn-more">atau <a href="#">pelajari lebih lanjut.</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END Slider-->
<!--Our Services-->
<section class="section section-no-background m-none pt0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2>Our <strong>Services</strong></h2>
            </div>
        </div>
        <div class="row mt-lg">
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-none">Nice Location</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-group"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-none">Customer Support</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2">
                    <div class="feature-box-icon">
                        <i class="fa fa-file-text"></i>
                    </div>
                    <div class="feature-box-info">
                        <h4 class="mb-none">Certification</h4>
                        <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Our Services-->
<!--Our Client-->
<section class="section m-none">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2>Our <strong>Client</strong></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 center">
                <div class="owl-carousel owl-theme mt-xl" data-plugin-options='{"items": 6, "autoplay": true, "autoplayTimeout": 3000}'>
                    <?php foreach ($client as $row) { ?>
                    <div>
                        <img class="img-responsive" src="<?php echo $row->logo; ?>" alt="<?php echo $row->name; ?>">
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Our Client-->
<!--Testimoni-->
<section class="parallax section section-text-light section-parallax section-center mt-xl mb-none testimony-background mt0" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options='{"items": 1, "loop": false}'>
                    <?php foreach ($testimony as $row) { ?>
                    <div>
                        <div class="col-md-12">
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-none">
                                <blockquote>
                                    <p><?php echo $row->testimony; ?></p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p><strong><?php echo $row->name; ?></strong><span><?php echo $row->job_title; ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Testimoni-->
<!--Posts-->
<div class="container">
    <div class="row mt-xl">
        <div class="col-md-12 center">
            <h2 class="mt-xl mb-xl">Latest <strong>Posts</strong></h2>
        </div>
    </div>
    <div class="row">
        <?php foreach($posts as $row) { ?>
        <div class="col-md-4">
            <div class="recent-posts mt-xl">
                <article class="post">
                    <div class="date">
                        <span class="day"><?php echo $row->day; ?></span>
                        <span class="month"><?php echo $row->month; ?></span>
                    </div>
                    <h4><a href="<?php echo $this->config->item('link_article_detail').$row->slug; ?>"><?php echo $row->title; ?></a></h4>
                    <p><?php echo $row->new_content; ?></p>
                    <a class="btn btn-borders btn-default mt-md mb-xl" href="<?php echo $this->config->item('link_article_detail').$row->slug; ?>">Read More</a>
                </article>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<!--END Posts-->
