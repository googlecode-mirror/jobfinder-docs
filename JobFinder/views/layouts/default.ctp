<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('cake.generic');
	echo $scripts_for_layout;
	echo $html->charset('UTF-8');
	echo $javascript->link(array('prototype'));
    
?>

<head>
	<title>JobFinder</title>	
</head>

<body>
	<!-- begin header -->
    <div id="job_header">
        <div class="job_wrap_header">
		<div class="job_tophead"><strong>Thống kê:</strong> Số việc đăng tuyển 
            <span><?php echo $total;?></span>
        </div>            
    		<div class="job_foremp">
    			<div class="job_forempct">
                    <a href="#/?lang=2">» Cho nhà tuyển dụng</a>
                </div>
                <!-- end job_forempct -->
            </div>
            <!-- end job_foremp -->            
	        <br clear="all" />
		<!-- begin logo - banner -->
		<div class="job_toplogobanner">
			<div class="floatLeft">
                <a href="#/">
                    <?php echo $html->image('../img/home/banner.jpg', 
    	                	  array('alt' => '', 'width' => '980', 'height' => '173'))  ?>
                </a>
            </div>
			
			<br clear="all" />
		</div>
		<!-- end logo - banner -->
        </div><!-- end job_wrap_header -->
    </div>
<!-- end header -->


<!-- begin navigation -->
    <?php echo $this->element('job_menu');?>
    
<!--Phần body -> home-->

	<?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>

<!-- Phần Footer -->
<div > <br clear="all"/> </div>
<div class="job_footer2">
	<div style="text-align: center;" class="job_wrap">
     	<a href="#About Us">Về JobFinder</a>
            <span class="job_spacemenu">|</span>
		<a href="#Contact Us">Liên Hệ</a>
            <span class="job_spacemenu">|</span>
		<a href="#SiteMap">Sơ Đồ Trang Web</a>
		<p align="center"> Đồ án chuyên nghành A Đại học Hoa Sen: Website tuyển dụng</p>
	</div><!-- end job_wrap -->	
</div><!-- end job_footer2 -->
<!-- end footer -->

</body>

</html>