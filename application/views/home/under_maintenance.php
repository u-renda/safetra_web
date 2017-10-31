
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Maintenance Mode | Safetra Indonesia - Developing People for Effective Productivity</title>	

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

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/theme.css'; ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/theme-elements.css'; ?>">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/default.css'; ?>">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css').'/style.css'; ?>">

		<!-- Head Libs -->
		<script src="<?php echo base_url('assets/js').'/modernizr.js'; ?>"></script>

	</head>
	<body>

		<div class="body coming-soon">
			<header id="header" data-plugin-options='{"stickyEnabled": false}'>
				<div class="header-body">
					<div class="header-top">
						<div class="container">
							<p>
								Get in touch! <span class="ml-xs"><i class="fa fa-phone"></i> <?php echo $this->config->item('safetra_phone'); ?></span><span class="hidden-xs"> | <a href="mailto:marketing@safetra.co.id"><?php echo $this->config->item('email_marketing'); ?></a></span>
							</p>
							<ul class="header-social-icons social-icons hidden-xs">
									<li class="social-icons-facebook"><a href="<?php echo $this->config->item('safetra_facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li class="social-icons-twitter"><a href="<?php echo $this->config->item('safetra_twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li class="social-icons-instagram"><a href="<?php echo $this->config->item('safetra_instagram'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<div class="container">
					<div class="row">
						<div class="col-md-12 center">
							<div class="logo">
								<a href="<?php echo base_url(); ?>">
									<img width="111" height="54" src="<?php echo base_url('assets/images').'/logo.png'; ?>" alt="Safetra Indonesia">
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 center">
							<h1 class="mb-sm small">MAINTENANCE MODE</h1>
							<p class="lead">Situs ini sedang menjalani beberapa pemeliharaan terjadwal.<br>Silakan kembali lagi nanti.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<hr class="tall">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-support"></i>
										</div>
										<div class="feature-box-info">
											<h4>Apa ini?</h4>
											<p class="tall">Kami sedang melakukan pemeliharaan website kami.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-clock-o"></i>
										</div>
										<div class="feature-box-info">
											<h4>Kami akan segera kembali</h4>
											<p class="tall">Mohon pengertian dan kesabarannya. Kami akan segera kembali menampilkan website yang lebih baik.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-envelope"></i>
										</div>
										<div class="feature-box-info">
											<h4>Tetap Berhubungan</h4>
											<p class="tall">Jangan sungkan untuk tetap menghubungi kami di email dan telp yang tertera.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer class="short" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h4 class="heading-primary">Tentang Safetra</h4>
							<p><?php echo $about_us; ?></p>
							<hr class="light">
						</div>
						<div class="col-md-3 col-md-offset-1">
							<h5 class="mb-sm">Hubungi Kami</h5>
							<span class="phone"><?php echo $this->config->item('safetra_phone'); ?></span>
							<ul class="list list-icons list-icons-sm">
								<li><i class="fa fa-envelope"></i> <a href="mailto:marketing@safetra.co.id"><?php echo $this->config->item('email_marketing'); ?></a></li>
							</ul>
							<ul class="social-icons">
									<li class="social-icons-facebook"><a href="<?php echo $this->config->item('safetra_facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li class="social-icons-twitter"><a href="<?php echo $this->config->item('safetra_twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li class="social-icons-instagram"><a href="<?php echo $this->config->item('safetra_instagram'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-11">
								<p>© Copyright <?php echo date('Y'); ?>. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</body>
</html>
