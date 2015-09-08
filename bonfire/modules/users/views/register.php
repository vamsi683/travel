<section class="site-content site-section">
<?php
	$site_open = $this->settings_lib->item('auth.allow_register');
?>
 <div class="container">
	<h2><?php echo lang('us_sign_up'); ?></h2>

	<?php echo Template::message(); ?>
    <?php echo form_open(REGISTER_URL, array('autocomplete' => 'off')); ?>
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
			<div class="col-xs-12 col-sm-6">	
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo lang('bf_email'); ?>">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="display_name" name="display_name" value="<?php echo set_value('display_name', isset($user) ? $user->display_name : ''); ?>" >
                </div>
                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username', isset($user) ? $user->username : ''); ?>"  >
                </div>					
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input  type="password" class="form-control"  name="password" id="password" tabindex="4" placeholder="<?php echo lang('bf_password'); ?>" >
                </div>

                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input  type="password" class="form-control"  name="pass_confirm" id="pass_confirm" tabindex="5" placeholder="<?php echo lang('bf_password'); ?>" >
                </div>	
			</div>
    	</div>
		
        
        <div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="register" id="submit" ><?php e(lang('us_register')); ?></button>
            </div>
		</div>	    	
	</div>
    <?php echo form_close(); ?>
</div>
</section>