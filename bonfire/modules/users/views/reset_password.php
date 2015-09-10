
<div class="container clearfix">
    <div class="nobottommargin">
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                
                <h3><?php echo lang('us_reset_password_heading'); ?></h3>
                <p><?php echo lang('us_reset_password_note'); ?></p>
            </div>
        </div>

     <?php echo form_open($this->uri->uri_string(), array('autocomplete' => 'off', 'id' => 'rrpassword_frm', 'name' => 'rrpassword_frm', 'class' => 'nobottommargin')); ?>   
	<input type="hidden" name="user_id" value="<?php echo $user->id ?>" />
    <div class="row omb_row-sm-offset-3">
        <div class="col-xs-12 col-sm-6 content ">	
            <div class="col_full">
                <label for="password"><?php echo lang('bf_password'); ?>:</label>
                <input  tabindex="1"  type="password"  id="password" name="password" value="" class="form-control" />
            </div>
            <div class="col_full">
                <label for="login-form-password"><?php echo lang('bf_password_confirm'); ?>:</label>
                <input type="password" id="pass_confirm" name="pass_confirm" value=""  tabindex="2" class="form-control" />
            </div>    

        </div>
    </div>
   <div class="row omb_row-sm-offset-3">
        <div class="col-xs-12 col-sm-6">	
                <button class="button button-3d nomargin" type="submit" name="set_password" id="submit"><?php e(lang('us_set_password')); ?></button>
           
        </div>
    </div>	 	

     

<?php echo form_close(); ?>

	</div>
</div>
