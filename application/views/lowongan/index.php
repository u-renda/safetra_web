<section class="page-header page-header-color page-header-tertiary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Lowongan Pekerjaan</h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="active">Lowongan Pekerjaan</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container" id="page_program">
    <h2><strong>Lowongan</strong> yang Tersedia</h2>
    <div class="row">
        <div class="col-md-12 mb-lg">
            <div class="toggle toggle-tertiary toggle-lg" data-plugin-toggle>
            <?php foreach($result as $row) { ?>
                <section class="toggle">
                    <label><strong><?php echo strtoupper($row->name); ?></strong></label>
                    <div class="toggle-content">
                        <p><?php echo $row->description; ?></p>
                    </div>
                </section>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
