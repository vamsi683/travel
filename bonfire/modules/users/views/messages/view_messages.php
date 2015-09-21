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
             <a href="/users/message/compose"><?php echo lang('display_compose_box'); ?></a>
            <table id="msgs_list_ajax" cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" width="100%">
                <thead >
                    <tr>
                        <th><?php echo lang('display_title1'); ?></th>
                        <th><?php echo lang('display_title2'); ?></th>
                        <th><?php echo lang('display_title3'); ?></th>
                    </tr>
                </thead>
                <tbody>
                      <tr>
                        <td class="dataTables_empty text-center " colspan="3" ><?php echo lang('display_loading_msg'); ?></td>
                      </tr>
                </tbody>
            </table>
         </div>
    </div>
</section>