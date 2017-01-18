            </div>
			<footer class="short" id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h4>Tentang Safetra</h4>
							<p><?php echo $about_us; ?> ... <a href="<?php echo $this->config->item('link_about_us'); ?>" class="btn-flat btn-xs">View More <i class="fa fa-arrow-right"></i></a></p>
							<hr class="light">
						</div>
						<div class="col-md-3 col-md-offset-1">
							<h5 class="mb-sm">Hubungi Kami</h5>
							<span class="phone"><?php echo $this->config->item('safetra_phone'); ?></span>
							<ul class="list list-icons list-icons-sm">
								<li><i class="fa fa-envelope"></i> <a href="mailto:admin@safetra.co.id">admin@safetra.co.id</a></li>
								<li><i class="fa fa-envelope"></i> <a href="mailto:safetraindonesia@gmail.com">safetraindonesia@gmail.com</a></li>
							</ul>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="<?php echo $this->config->item('safetra_facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="<?php echo $this->config->item('safetra_twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<p>© Copyright <?php echo date('Y'); ?> All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="<?php echo base_url('assets/js').'/jquery.min.js'; ?>"></script>
		<script src="<?php echo base_url('assets/js').'/owl.carousel.min.js'; ?>"></script>
		<script src="<?php echo base_url('assets/js').'/jquery.appear.js'; ?>"></script>
		<script src="<?php echo base_url('assets/js').'/jquery.easing.js'; ?>"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url('assets/js').'/theme.js'; ?>"></script>
		
		<!-- Nivo Slider -->
		<script src="<?php echo base_url('assets/js/nivo_slider').'/jquery.nivo.slider.js'; ?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url('assets/js').'/app.js'; ?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url('assets/js').'/theme.init.js'; ?>"></script>

	</body>
</html>