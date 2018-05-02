<section class="page-header page-header-color page-header-tertiary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo $program->name; ?></h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="active">Program</li>
                </ul>
            </div>
        </div>
        <?php if (empty($program_sub) == TRUE) { ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo '<strong>'.$program->program->name.'</strong>'; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>
<div class="container" id="page_program">
    <h2><strong>Pengertian</strong> Pelatihan</h2>
    <div class="row">
        <div class="col-md-12">
            <p><?php echo $program->introduction; ?></p>
        </div>
    </div>
    <hr class="tall">
    <div class="row">
        <div class="col-md-12">
            <div class="toggle toggle-tertiary toggle-lg" data-plugin-toggle>
                <?php if (empty($program_sub) == FALSE) { ?>
                <section class="toggle active">
                    <label><strong>Pelatihan yang Tersedia</strong></label>
                    <div class="toggle-content">
                        <ul>
                        <?php foreach ($program_sub as $row) { ?>
                            <li><a href="<?php echo $this->config->item('link_program').'/'.$row->slug; ?>"><?php echo $row->name; ?></a></li>
                        <?php } ?>
                        </ul>
                    </div>
                </section>
                <?php }
                if ($program->training_purpose != '') { ?>
                <section class="toggle active">
                    <label><strong>Tujuan Pelatihan</strong></label>
                    <div class="toggle-content">
                        <p><?php echo $program->training_purpose; ?></p>
                    </div>
                </section>
                <?php }
                if ($program->target_participant != '') { ?>
                <section class="toggle active">
                    <label><strong>Persyaratan Peserta</strong></label>
                    <div class="toggle-content">
                        <p><?php echo $program->target_participant; ?></p>
                    </div>
                </section>
                <?php }
                if ($program->course_content != '') { ?>
                <section class="toggle active">
                    <label><strong>Materi Pelatihan</strong></label>
                    <div class="toggle-content">
                        <p><?php echo $program->course_content; ?></p>
                    </div>
                </section>
                <?php }
                if ($program->others != '') { ?>
                <section class="toggle active">
                    <label><strong>Informasi Lainnya</strong></label>
                    <div class="toggle-content">
                        <p><?php echo $program->others; ?></p>
                    </div>
                </section>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-lg mt-lg">
            <p><a type="button" class="btn btn-borders btn-primary btn-lg" href="<?php echo $this->config->item('link_login'); ?>">Daftarkan diri Anda sekarang!</a></p>
        </div>
    </div>
</div>
