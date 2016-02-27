			<div class="footer-block">
			<div class="container">
				<div class="arrow"></div>
				<div class="row">
					
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Stopka (O firmie)") ) : ?>
						
                        <?php endif; ?>  
						 
					
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Stopka (Aktualności)") ) : ?>
						
                        <?php endif; ?>  
					<div class="col-md-3">
						<h2>lokalizacja</h2>
						<div id="footer-map"></div>
					</div>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Stopka (Kontakt)") ) : ?>
						
                        <?php endif; ?>  
				</div>
			</div>
		</div>
		<div class="copyright-block">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 left">
						<small>&copy; 2016 Horus | All right reserved</small>
					</div>
					<div class="col-md-6 col-sm-6 right hidephone">
						<small>Cookies politic</small>
					</div>
				</div>
			</div>
		</div>
						
								<!-- SCRIPTS -->
	
		<script src="<?php echo ORTGEO_THEME_URL ?>/js/whcookies.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/js/jquery-1.7.2.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/js/jquery.carouFredSel-6.2.0.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/js/bootstrap-3.1.1.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/backstretch/backstretch-2.0.4.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/camera-slider/camera-slider-1.3.4.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/camera-slider/easing-1.3.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/fancybox/fancybox-1.3.4.pack.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/fancybox/klass-1.0.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/fancybox/photoswipe-3.0.5.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/hover-animations/transform2d.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/hover-animations/hover-animations-1.0.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/match-height/match-height-0.5.1.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/plugins/validation/validation-2.2.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/js/lollies.min.js"></script>
		<script src="<?php echo ORTGEO_THEME_URL ?>/js/custom.js"></script>
	</body>
</html>
			