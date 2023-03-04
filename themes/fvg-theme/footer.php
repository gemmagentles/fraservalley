        <footer class="footer" role="contentinfo">
				<div class="footer__top">
					<div class="footer__container">
						<div class="footer__container--left">
							<div class="footer__logo">
								<a href="<?php echo home_url(); ?>">
									<img class="footer__logo-img" src="<?php echo get_template_directory_uri(); ?>/img/icons/FVG-logo.png" alt="FVG Logo">
								</a>
							</div>
						</div>
						<div class="footer__container--right">
							<div class="footer__contact">
								<h3 class="footer__heading">Contact Details</h3>
								<p class="footer__contact--phone"><?php the_field( 'contact_info_phone_number', 'option' ); ?></p>
								<a class="footer__contact--email" href="mailto:<?php the_field( 'contact_info_email', 'option' ); ?>" target="_top"><?php the_field( 'contact_info_email', 'option' ); ?></a>
								<p class="footer__contact--address"><?php the_field( 'contact_info_address', 'option' ); ?></p>
							</div>
							<div class="footer__nav">
								<h3 class="footer__heading">Navigation Menu</h3>
								<?php footer_nav(); ?>
							</div>
							<div class="footer__social">
								<h3 class="footer__heading">Social Media</h3>
								<div class="footer__social--wrapper">
									<a class="footer__social--link" title="Facebook" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
										<svg aria-labelledby="title" class="footer__social--icon">
										<title id="title" lang="en">Facebook</title>
										<use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon"/></svg>
									</a>
									<a class="footer__social--link" title="Instagram" href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
										<svg aria-labelledby="title" class="footer__social--icon">
										<title id="title" lang="en">Instagram</title>
										<use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon"/></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="footer__newsletter">
						<h3 class="footer__newsletter--heading">Sign up to our Newsletter</h3>
						<input class="footer__newsletter--input" type="email" /><button class="footer__newsletter--button">Subscribe</button>
					</div> -->
				</div>
				<div class="footer__bottom">
					<div class="footer__container">
						<p class="footer__copyright">
							&copy; Copyright Fraser Valley Gaels, <?php echo date('Y'); ?>
						</p>
						<p class="footer__credit">
							All Rights Reserved
						</p>
					</div>
				</div>
			</footer>
		</div>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>
