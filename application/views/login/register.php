<h2>Register Program</h2>
<p>Kami akan menghubungi Anda secepatnya dan memberikan penawaran di hari yang sama (one day service).<br />
Yang perlu Anda lakukan sekarang hanyalah melengkapi kolom di bawah ini.
</p>
<form id="registerForm" action="<?php echo $this->config->item('link_register'); ?>" method="POST">
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label>Nama Anda <span class="text-danger">*</span></label>
                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
            </div>
            <div class="col-md-6">
                <label>Jenis Program <span class="text-danger">*</span></label>
                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label>Nama Perusahaan <span class="text-danger">*</span></label>
                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
            </div>
            <div class="col-md-6">
                <label>Spesifikasi Program <span class="text-danger">*</span></label>
                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-6">
                <label>Alamat Email <span class="text-danger">*</span></label>
                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
            </div>
            <div class="col-md-6">
                <label>No Handphone <span class="text-danger">*</span></label>
                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input type="submit" value="Register" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
        </div>
    </div>
</form>