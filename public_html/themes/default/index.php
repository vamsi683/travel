<?php echo theme_view('header'); ?>
    <?php
    echo theme_view('_sitenav');
?>
<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">


<?php
    echo Template::message();
    echo isset($content) ? $content : Template::content();
?>
                </div>

		</section><!-- #content end -->
<?php
    echo theme_view('footer');
?>