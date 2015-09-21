<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar" class="semi-transparent dark">

			<div class="container clearfix">

				<div class="col_half nobottommargin clearfix">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="<?php echo site_url(); ?>"><?php e(lang('bf_home')); ?></a></li>
                            
							<li><a href="faqs.html">FAQs</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="#">USD</a>
								<ul>
									<li><a href="#">EUR</a></li>
									<li><a href="#">AUD</a></li>
									<li><a href="#">GBP</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last clearfix nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header semi-transparent" data-sticky-class="not-dark" data-responsive-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="/" class="standard-logo" data-dark-logo="images/logo-dark.png">SITE</a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-4">

						<ul>
							<li class="current"><a href="index.html"><div><i class="icon-home2"></i>Home</div></a>	</li>
							<!--<li><a href="#"><div><i class="icon-plane"></i>Flights</div></a></li>
							<li><a href="#"><div><i class="icon-building"></i>Hotels</div></a></li>
							<li><a href="#"><div><i class="icon-gift"></i>Holidays</div></a></li>
							<li><a href="#"><div><i class="icon-pencil2"></i>Blog</div></a></li>-->
                             <?php if (empty($current_user)) : ?>
                            <li><a href="<?php echo site_url(LOGIN_URL); ?>">Sign In</a></li>
                            <li><a href="<?php echo site_url(REGISTER_URL); ?>">Register</a></li>
                            <?php else : ?>
                            <li <?php echo check_method('profile'); ?>><a href="<?php echo site_url('users/profile'); ?>"><?php e(lang('bf_user_settings')); ?></a></li>
                            <li><a href="<?php echo site_url('logout'); ?>"><?php e(lang('bf_action_logout')); ?></a></li>
                            <?php endif; ?>
                                                        

							<!--<li><a href="#"><div><i class="icon-phone3"></i>1800 105 2541</div></a></li>-->
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
     