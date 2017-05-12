<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Safetra Indonesia - Developing People for Effective Productivity</title>	

		<meta name="keywords" content="K3, Keselamatan dan Kesehatan Kerja" />
		<meta name="description" content="Safetra - Training Keselamatan dan Kesehatan Kerja">
		<meta name="author" content="safetra.co.id">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/bootstrap.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/font-awesome.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/owl.carousel.min.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/owl.theme.default.min.css'; ?>">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/theme.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/theme-elements.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/theme-blog.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/theme-animate.css'; ?>">

		<!-- Nivo Slider -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/nivo_slider').'/nivo-slider.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/nivo_slider').'/default.css'; ?>">
		
		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/default.css'; ?>">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/style.css'; ?>">

		<!-- Head Libs -->
		<script src="<?php echo base_url('assets/js').'/modernizr.js'; ?>"></script>
	</head>
	<body>
		<div class="body">
			<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 57, "stickySetTop": "-57px", "stickyChangeLogo": true}'>
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="<?php echo base_url(); ?>">
										<img alt="Safetra Indonesia" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="<?php echo base_url('assets/images').'/logo.png'; ?>">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="hidden-xs">
												<a href="<?php echo $this->config->item('link_about_us'); ?>"><i class="fa fa-angle-right"></i> Tentang Kami</a>
											</li>
											<li class="hidden-xs">
												<a href="<?php echo $this->config->item('link_contact_us'); ?>"><i class="fa fa-angle-right"></i> Hubungi Kami</a>
											</li>
											<li>
												<span class="ws-nowrap"><i class="fa fa-phone"></i> <?php echo $this->config->item('safetra_phone'); ?></span>
											</li>
										</ul>
									</nav>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<ul class="header-social-icons social-icons hidden-xs">
											<li class="social-icons-facebook"><a href="<?php echo $this->config->item('safetra_facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="<?php echo $this->config->item('safetra_twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-instagram"><a href="<?php echo $this->config->item('safetra_instagram'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
										</ul>
										<?php $this->load->view('templates/navigation'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div role="main" class="main">
