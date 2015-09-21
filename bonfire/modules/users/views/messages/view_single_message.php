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
             <!-- Post Content
                ============================================= -->
             <div class="postcontent nobottommargin clearfix">
                 <table class="table">
                     <thead>
                        <tr>
                          <td>From</td>
                          <td><?php e($message->from_user);?></td>
                        </tr>
                        <tr>
                          <td>To</td>
                          <td><?php e($message->to_user);?></td>
                        </tr>
                        <tr>
                          <td>Date</td>
                          <td><?php e(date('m/d/Y H:i', strtotime($message->date_sent)));?></td>
                        </tr>
                        <tr>
                          <td>Subject</td>
                          <td><?php e($message->subject);?></td>
                        </tr>
                        <tr>
                          <td>Message</td>
                          <td><?php e($message->message);?></td>
                        </tr>
                      </tbody>
                </table>
             </div>   
         </div>
    </div>
</section>