 <!-- Page Title
============================================= -->
<section id="page-title">

    <div class="container clearfix">
        <h1><?php echo lang('display_heading'); ?></h1>
        <span><?php echo lang('display_sub_heading'); ?></span>
        <ol class="breadcrumb">
            <li><a href="#"><?php echo lang('bf_home'); ?></a></li>
            <li><a href="#"><?php echo lang('bf_user_settings'); ?></a></li>
            <li class="active"><?php echo lang('display_sub_link'); ?></li>
        </ol>
    </div>

</section><!-- #page-title end -->
<section class="content">
     <div class="content-wrap">
         <div class="container clearfix">
             <div class="row omb_row-sm-offset-3">
                 <div class="col-xs-12 col-sm-6">
                     
                     
                    <div class="col_full">
                        <label for="cmp_to_user"><?php echo lang('cmp_to_user'); ?>:</label>
                        <input type="text" id="cmp_to_user" name="cmp_to_user" value="<?php echo set_value('cmp_to_user'); ?>" class="form-control" />

                    </div>
                     
                     
                     
                      <div class="col_full">
                        <label for="cmp_to_subj"><?php echo lang('cmp_to_subj'); ?>:</label>
                        <input type="text" id="cmp_to_subj" name="cmp_to_subj" value="<?php echo set_value('cmp_to_subj'); ?>" class="form-control" />

                    </div>
                     
                     
                      <div class="col_full">
                        <label for="cmp_to_text"><?php echo lang('cmp_to_text'); ?>:</label>
                        <input type="text" id="cmp_to_text" name="cmp_to_text" value="<?php echo set_value('cmp_to_text'); ?>" class="form-control" />

                    </div>



                </div>
    	   </div>
         </div>
    </div>
</section>