<div class="container clearfix">
    <div class="nobottommargin">
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <h3><?php echo lang('us_login'); ?></h3>
                <?php echo Template::message(); ?>
            </div>
        </div>
        <?php echo form_open(LOGIN_URL, array('autocomplete' => 'off', 'id' => 'login_frm', 'name' => 'login_frm', 'class' => 'nobottommargin')); ?>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6 content ">	
                <div class="col_full">
                    <label for="login-form-username"><?php echo $this->settings_lib->item('auth.login_type') == 'both' ? lang('bf_username') .'/'. lang('bf_email') : ucwords($this->settings_lib->item('auth.login_type')) ?>:</label>
                    <input  tabindex="1" type="text" id="login_value" name="login" value="<?php echo set_value('login'); ?>" class="form-control" />
                </div>
                <div class="col_full">
                    <label for="login-form-password"><?php echo lang('bf_password'); ?>:</label>
                    <input  type="password" id="password" name="password" value=""  tabindex="2" class="form-control" />
                </div>    

            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-3">
                <label class="checkbox">
                    <input type="checkbox" name="remember_me" id="remember_me" value="1"><?php e(lang('us_remember_note')); ?>
                </label>
            </div>
        </div>

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">	
                    <button class="button button-3d nomargin" type="submit" name="log-me-in" id="submit"><?php e(lang('us_let_me_in')); ?></button>
                <a class="fright" href="<?php echo site_url('/forgot_password'); ?>"><?php echo lang('us_forgot_your_password'); ?></a>
            </div>
        </div>	 	

        <?php echo form_close(); ?>       
    </div>
</div>