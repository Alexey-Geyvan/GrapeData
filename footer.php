	</div><!-- .content -->
	
</div><!-- .page -->

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8 footer__info-block">
				<img src="<?php echo get_template_directory_uri(  );  ?>/img/logo-white.png" alt="logo" class="footer__logo">
				
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-footer',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'footer__menu',
						'container_id'      => '',
						'menu_class'        => 'nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
				
				<div class="footer__copyright d-none d-md-block">©2022 All rights reserved</div>
			</div>
			<div class="col-md-4 footer__form-block">
				<form  class="footer__form">
					<h4 class="footer__form-title">Stay up to date</h4>
					<div class="form-group footer__form-group">					
						<input type="email" class="form-control footer__email" id="subscribeEmail" placeholder="your email address">		
						<button  type="submit" class="form-control footer__submit">
							<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M21.8438 1.11714C22.1155 1.38878 22.2075 1.79201 22.0806 2.1546L15.0806 22.1546C14.9451 22.5416 14.5872 22.8067 14.1775 22.8234C13.7678 22.8401 13.3894 22.6051 13.2229 22.2304L9.37912 13.5819L0.730585 9.73806C0.355905 9.57153 0.120841 9.19316 0.137555 8.78348C0.154269 8.3738 0.419373 8.01584 0.806373 7.88039L20.8064 0.880388C21.169 0.753483 21.5722 0.845502 21.8438 1.11714ZM11.3295 13.0457L14.0261 19.1132L18.7453 5.62993L11.3295 13.0457ZM17.331 4.21572L3.8478 8.93485L9.91526 11.6315L17.331 4.21572Z" fill="black"/>
							</svg>	
						</button>	
					</div>				
				</form>
			</div>
			<div class="col-12 footer__copyright d-md-none">©2022 All rights reserved</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
