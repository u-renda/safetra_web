            </div>
			<footer class="light" id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Hubungi Kami</span>
						</div>
						<div class="col-md-8">
							<img src="<?php echo base_url('assets/images').'/logo.png'; ?>" alt="Safetra" width="30%">
							<img src="<?php echo base_url('assets/images').'/k3.jpg'; ?>" alt="Keselamatan & Kesehatan Kerja" width="30%">
							<hr class="light">
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="contact-details">
								<h4>Hubungi Kami</h4>
								<span class="phone"><?php echo $this->config->item('safetra_phone'); ?></span>
								<ul class="contact">
									<?php if ($this->config->item('safetra_whatsapp') != '') { ?>
									<li><p><i class="fa fa-whatsapp"></i> <?php echo $this->config->item('safetra_whatsapp'); ?></p></li>
									<?php } ?>
									<li><p><i class="fa fa-envelope"></i> <a href="mailto:marketing@safetra.co.id"><?php echo $this->config->item('email_marketing'); ?></a></p></li>
								</ul>
								<ul class="social-icons">
									<li class="social-icons-facebook"><a href="<?php echo $this->config->item('safetra_facebook'); ?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									<li class="social-icons-twitter"><a href="<?php echo $this->config->item('safetra_twitter'); ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
									<li class="social-icons-instagram"><a href="<?php echo $this->config->item('safetra_instagram'); ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
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
		
		<!--Live chat-->
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
				var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
				s1.async=true;
				s1.src='https://embed.tawk.to/59fa6e05bb0c3f433d4c6713/default';
				s1.charset='UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
		<!--End of Tawk.to Script-->
	</body>
</html>