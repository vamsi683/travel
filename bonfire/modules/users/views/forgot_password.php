<div class="container clearfix">
    <div class="nobottommargin">
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
                <h3><?php echo lang('us_reset_password'); ?></h3>
            </div>
        </div> 
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6 alert alert-info fade in">
                <?php echo lang('us_reset_note'); ?>
            </div>
        </div>
        <?php echo form_open($this->uri->uri_string(), array( 'autocomplete' => 'off', 'id' => 'frgtpwd_frm', 'name' => 'frgtpwd_frm', 'class' => 'nobottommargin')); ?>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6 content ">	
                <div class="col_full">
                    <label for="frgtpwd_frm-email"><?php echo lang('bf_email'); ?>:</label>
                    <input  tabindex="1" type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" />
                </div>

            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">	
                    <input class="button button-3d nomargin" type="submit" name="send" value="<?php e(lang('us_send_password')); ?>" />
            </div>
        </div>	    

	 <?php echo form_close(); ?>
        
    </div>
</div>