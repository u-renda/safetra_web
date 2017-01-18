<section class="page-header page-header-color page-header-tertiary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tentang Kami</h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="active">Tentang Kami</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--Tentang Safetra-->
<div class="container">
    <div class="row mt-xlg">
        <div class="col-md-6">
            <h2>Tentang <strong>Safetra</strong></h2>
            <p><?php echo $about_us; ?></p>
            <h2>Visi <strong>Safetra</strong></h2>
            <p><?php echo $vision->content; ?></p>
            <h2>Misi <strong>Safetra</strong></h2>
            <p><?php echo $mision->content; ?></p>
        </div>
        <div class="col-md-6">
            <div class="progress-bars">
                <?php foreach ($program as $row) { ?>
                <div class="progress-label">
                    <span><?php echo $row->name; ?></span>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="<?php echo $row->percentage.'%'; ?>" data-appear-animation-delay="300">
                        <span class="progress-bar-tooltip"><?php echo $row->percentage.'%'; ?></span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!--END Tentang Safetra-->
<hr class="tall">
<!--Services-->
<section class="section section-no-background m-none pt0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
<!--END Services-->