<div class="container clearfix">
    <div class="nobottommargin">
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <h3><?php echo lang('us_sign_up'); ?></h3>
                
            </div>
        </div>
        
        <?php echo form_open(REGISTER_URL, array('autocomplete' => 'off' ,'id' => 'rgstr_frm', 'name' => 'rgstr_frm', 'class' => 'nobottommargin')); ?>
        <div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">
                <div class="col_half">
                    <label for="rgstr_frm-display_name"><?php echo lang('bf_name'); ?>:</label>
                    <input type="text" id="display_name" name="display_name" value="<?php echo set_value('display_name', isset($user) ? $user->display_name : ''); ?>" class="form-control" />
                    
                </div>
                <div class="col_half col_last">
                    <label for="rgstr_frm-email"><?php echo lang('bf_email'); ?>:</label>
                    <input type="text" id="email" name="email" value="<?php echo set_value('email', isset($user) ? $user->display_name : ''); ?>" class="form-control" />
                </div>
                
                
                
                
                 <div class="col_half">
                    <label for="rgstr_frm-username"><?php echo lang('bf_username'); ?>:</label>
                    <input type="text" id="username" name="username" value="<?php echo set_value('username', isset($user) ? $user->display_name : ''); ?>" class="form-control" />
                    
                </div>
                <div class="col_half ">
                    <label for="rgstr_frm-email"><?php echo lang('bf_password'); ?>:</label>
                    <input type="password" id="password" name="password" value="<?php echo set_value('password', isset($user) ? $user->display_name : ''); ?>" class="form-control" />
                </div>
                
                <div class="col_half col_last">
                    <label for="rgstr_frm-pass_confirm"><?php echo lang('bf_password_confirm'); ?>:</label>
                    <input type="password" id="pass_confirm" name="pass_confirm" value="<?php echo set_value('pass_confirm', isset($user) ? $user->display_name : ''); ?>" class="form-control" />
                </div>
                
                
                
			</div>
    	</div>
		
        
        <div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
                  <button class="button button-3d nomargin" type="submit" name="register" id="submit"><?php e(lang('us_register')); ?></button>
              
            </div>
		</div>	    	
	</div>
    <?php echo form_close(); ?>
</div>
</section>