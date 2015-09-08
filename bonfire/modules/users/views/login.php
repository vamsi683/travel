<section class="site-content site-section">
<?php
	$site_open = $this->settings_lib->item('auth.allow_register');
?>
<p><br/><a href="<?php echo site_url(); ?>">&larr; <?php echo lang('us_back_to') . $this->settings_lib->item('site.title'); ?></a></p>

  <div class="container">
	<h2><?php echo lang('us_login'); ?></h2>

	<?php echo Template::message(); ?>
    <?php echo form_open(LOGIN_URL, array('autocomplete' => 'off', 'id' => 'login_frm', 'name' => 'login_frm')); ?>
	<div class="omb_login">
    	<h3 class="omb_authTitle"><?php echo lang('us_let_me_in'); ?> or <a href="<?php e(site_url('register')) ?>"><?php echo lang('us_register'); ?></a></h3>
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs"><?php echo lang('us_facebook'); ?></span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs"><?php echo lang('us_twitter'); ?></span>
		        </a>
	        </div>	
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs"><?php echo lang('us_google'); ?></span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6 content ">	
			   
                <span class="input input--nariko">
                    <input class="input__field input__field--nariko" type="text" name="login" id="login_value" value="<?php echo set_value('login'); ?>" tabindex="1" placeholder="<?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>" />
                    <label class="input__label input__label--nariko" for="input-20">
                        <span class="input__label-content input__label-content--nariko"><?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?></span>
                    </label>
                </span>

                <span class="input input--nariko">
                    <input class="input__field input__field--nariko" type="text" name="password" id="password" tabindex="2" placeholder="<?php echo lang('bf_password'); ?>"/>
                    <label class="input__label input__label--nariko" for="input-20">
                        <span class="input__label-content input__label-content--nariko"><?php echo lang('bf_password'); ?></span>
                    </label>
                </span>
				
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" name="remember_me" id="remember_me" value="1"><?php e(lang('us_remember_note')); ?>
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<?php echo anchor('/forgot_password', lang('us_forgot_your_password')); ?>
				</p>
			</div>
		</div>
        
        <div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="log-me-in" id="submit"><?php e(lang('us_let_me_in')); ?></button>
            </div>
		</div>	    	
	</div>
    <?php echo form_close(); ?>
</div>