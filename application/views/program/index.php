<section class="page-header page-header-color page-header-tertiary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Program</h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="active">Program</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>
<div class="container">
    <h2><strong>Tujuan</strong> Program</h2>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $program->program_objective; ?></p>
        </div>
    </div>
    <hr class="tall">
    <h2><strong>Tujuan</strong> Pelatihan</h2>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $program->training_purpose; ?></p>
        </div>
    </div>
    <hr class="tall">
    <h2><strong>Persyaratan</strong> Peserta</h2>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $program->requirements_of_participant; ?></p>
        </div>
    </div>
    <hr class="tall">
    <h2><strong>Materi</strong> Pelatihan</h2>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $program->training_material; ?></p>
        </div>
    </div>
    <hr class="tall">
    <h2><strong>Informasi</strong> Lainnya</h2>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $program->others; ?></p>
        </div>
    </div>
    <p class="mt-lg"><a type="button" class="btn btn-borders btn-primary btn-lg" href="<?php echo $this->config->item('link_login'); ?>">Daftarkan diri Anda sekarang!</a></p>
</div>
