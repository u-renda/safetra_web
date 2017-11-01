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
                    <div class="col-md-8">
                        <p>
                            Pilihan terbaik untuk pelatihan <span><em>Keselamatan dan Kesehatan Kerja</em></span>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="get-started">
                            <a href="<?php echo $this->config->item('link_contact_us'); ?>" class="btn btn-primary">Hubungi kami SEKARANG!</a>
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
        <div class="row mb-xl">
            <div class="col-md-4">
                <h2 class="mb-xl"><strong>Siapa</strong> Kami</h2>
                <p>SAFETRA adalah perusahaan jasa Keselamatan dan Kesehatan Kerja (K3) yang didirikan oleh beberapa praktisi K3 yang berpengalama lebih dari 10 tahun di bidang migas, tambang, konstruksi, penerbangan, marine, dan manufacture.</p>

                <a class="btn btn-borders btn-default mr-xs mb-sm" href="<?php echo $this->config->item('link_about_us'); ?>">Baca Selengkapnya</a>
            </div>
            <div class="col-md-8">
                <h2 class="mb-xl"><strong>Layanan</strong> Kami</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Customer Support</h4>
                                <p class="mb-lg">Kami memiliki layanan customer support yang bisa membantu Anda dengan info yang lebih lengkap.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                            <div class="feature-box-icon">
                                <i class="fa fa-file-text"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Sertification</h4>
                                <p class="mb-lg">Kami selalu meluncurkan sertifikat yang terjamin untuk setiap peserta yang mengikuti pelatihan kami.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-md">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Location</h4>
                                <p class="mb-lg">Kami menyediakan tempat pelatihan yang nyaman dan sesuai dengan keinginan pelanggan kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
                            <div class="feature-box-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="mb-sm">Social Media</h4>
                                <p class="mb-lg">Kami memiliki sosial media yang lengkap untuk membantu setiap kegiatan kami.</p>
                            </div>
                        </div>
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
                <h2>Klien <strong>Kami</strong></h2>
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
<!--Pelatihan-->
<section class="section section-no-background m-none">
    <div class="container">
        <div class="row">
            <div class="pricing-table princig-table-flat">
                <div class="col-md-3 col-sm-6">
                    <div class="plan">
                        <h3>Implementasi <span>OH dan IH</span></h3>
                        <ul>
                            <li class="pl-sm pr-sm">Occupational Health dan Industrial Higiene <strong>(OH-IH)</strong></li>
                            <li class="pl-sm pr-sm">Membentuk lingkungan kerja yang <strong>aman dan sehat</strong></li>
                            <li class="pl-sm pr-sm">Membuat program lingkungan kerja yang <strong>aman sehat</strong></li>
                            <li><a class="btn btn-default" href="<?php echo $this->config->item('link_program').'/occupation-health-safety-ohs'; ?>">Baca Selengkapnya</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="plan most-popular">
                        <h3>Bahavior Based <span>Safety</span></h3>
                        <ul>
                            <li>Pelatihan pamungkas <strong>K3</strong></li>
                            <li>Merubah perilaku <strong>pekerja</strong></li>
                            <li>Melibatkan <strong>semua unsur</strong> perusahaan</li>
                            <li><a class="btn btn-default" href="<?php echo $this->config->item('link_program').'/occupation-health-safety-ohs'; ?>">Baca Selengkapnya</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="plan">
                        <h3>Contractor & Tenan Control Safety Managment System</h3>
                        <ul>
                            <li>Mewujudkan <strong>zero accident</strong></li>
                            <li>Pengendalian <strong>contractor dan tenan</strong></li>
                            <li><a class="btn btn-default" href="<?php echo $this->config->item('link_program').'/occupation-health-safety-ohs'; ?>">Baca Selengkapnya</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="plan">
                        <h3>Defensive Driving & Riding <span>Training</span></h3>
                        <ul>
                            <li>Memastikan driver mengemudi dengan <strong>baik</strong></li>
                            <li>Melatih pada unsur <strong>teknis</strong></li>
                            <li>Melatih pembentukan <strong>perilaku</strong></li>
                            <li><a class="btn btn-default" href="<?php echo $this->config->item('link_program').'/occupation-health-safety-ohs'; ?>">Baca Selengkapnya</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END Pelatihan-->
<!--Posts-->
<section class="section m-none">
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
</section>
<!--END Posts-->
