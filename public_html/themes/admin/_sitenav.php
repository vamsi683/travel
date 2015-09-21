<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

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
							<li class="current"><a href="/users/manage/dashboard"><div><i class="icon-home2"></i>Dashboard</div></a>	</li>
                             <?php if (empty($current_user)) : ?>
                            <li><a href="<?php echo site_url(LOGIN_URL); ?>">Sign In</a></li>
                            <li><a href="<?php echo site_url(REGISTER_URL); ?>">Register</a></li>
                            <?php else : ?>
                            <li><a href="<?php echo site_url('users/manage/users'); ?>"><div><i class="fa fa-user"></i> Users</div></a></li>
                            <li><a href="<?php echo site_url('logout'); ?>"><div><?php e(lang('bf_action_logout')); ?></div></a></li>
                            <?php endif; ?>
                                                        

							<!--<li><a href="#"><div><i class="icon-phone3"></i>1800 105 2541</div></a></li>-->
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
     