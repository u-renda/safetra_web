<section class="page-header page-header-color page-header-tertiary page-header-more-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Daftar</h1>
                <ul class="breadcrumb breadcrumb-valign-mid">
                    <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
                    <li class="active">Daftar</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="tabs tabs-bottom tabs-simple">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tabsRegister" data-toggle="tab">Daftar</a>
                    </li>
                    <!--<li>
                        <a href="#tabsLogin" data-toggle="tab">Login</a>
                    </li>-->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabsRegister">
                        <?php $this->load->view('login/register'); ?>
                    </div>
                    <!--<div class="tab-pane" id="tabsLogin">
                        <?php $this->load->view('login/login'); ?>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>