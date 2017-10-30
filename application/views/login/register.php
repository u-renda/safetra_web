<h2>Daftar Program</h2>
<p>Kami akan menghubungi Anda secepatnya dan memberikan penawaran di hari yang sama (one day service).<br />
Yang perlu Anda lakukan sekarang hanyalah melengkapi kolom di bawah ini.
</p>
<form id="registerForm" action="<?php echo $this->config->item('link_register'); ?>" method="POST">
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label>Nama Anda <span class="text-danger">*</span></label>
                <input type="text" data-msg-required="Mohon isi nama Anda." maxlength="100" class="form-control" name="name" id="name" required>
            </div>
            <div class="col-md-6">
                <label>Nama Perusahaan <span class="text-danger">*</span></label>
                <input type="text" data-msg-required="Mohon isi nama perusahaan Anda." maxlength="100" class="form-control" name="nama_perusahaan" id="nama_perusahaan" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label>Alamat Email <span class="text-danger">*</span></label>
                <input type="email" data-msg-required="Mohon isi email Anda." data-msg-email="Mohon masukkan email yang benar." maxlength="100" class="form-control" name="email" id="email" required>
            </div>
            <div class="col-md-6">
                <label>No. Telp <span class="text-danger">*</span></label>
                <input type="text" data-msg-required="Mohon isi no. telp yang bisa dihubungi." maxlength="100" class="form-control" name="phone_number" id="phone_number" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label>Jenis Pelatihan <span class="text-danger">*</span></label>
                <div class="radio-custom">
                    <input type="radio" name="course_type" id="inhouse" value="1" checked>
                    <label for="inhouse">In House</label>
                </div>
                <div class="radio-custom">
                    <input type="radio" name="course_type" id="public" value="0">
                    <label for="public">Public</label>
                </div>
            </div>
            <div class="col-md-6">
                <label>Nama Pelatihan yang dipilih <span class="text-danger">*</span></label>
                <input type="text" data-msg-required="Mohon isi dengan nama pelatihan yang Anda inginkan." maxlength="100" class="form-control" name="course_name" id="course_name" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label>Kode Promo (jika ada) </label>
                <input type="text" maxlength="100" class="form-control" name="promo_code" id="promo_code">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input type="submit" value="Register" name="submit" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
        </div>
    </div>
</form>