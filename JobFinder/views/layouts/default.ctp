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
    //echo $javascript->link(array('prototype'));
    
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>JobFinder</title>	
</head>

<body>
	<!-- begin header -->
    <div id="job_header">
        <div class="job_wrap_header">
		<div class="job_tophead"><strong>Thống kê: Số việc đăng tuyển 
            <span class="text_yellow">xxxx</span></strong> 
            <script type="text/javascript">makeYourHomePage();</script>
            <span class="job_spacemenu">|</span>
            <a href="Link to contact">Liên hệ</a>
        </div>            
    		<div class="job_foremp">
    			<span class="job_forempleft"><!-- --></span>
    			<div class="job_forempct">
    				Bạn tìm người tài?
                    <br />
                    <a href="#/?lang=2">» Cho nhà tuyển dụng</a>
                </div>
                <!-- end job_forempct -->
                
    			<span class="job_forempright"><!-- --></span>
            </div>
            <!-- end job_foremp -->            
	        <br clear="all" />
        
		<!-- begin logo - banner -->
		<div class="job_toplogobanner">
			<div class="floatLeft">
                <a href="#/">
                        <img width="235" height="85" alt="" 
                        src="../img/vnw_logo_vn.gif" />
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
<div id="job_contentbg">
<div class="job_wrap">
    <?php echo $content_for_layout; ?>
    </div>
</div>
<!-- Phần Footer -->

<div class="job_footer2">
	<div style="text-align: center;" class="job_wrap">
     	<a href="/about_us.php">Về JobFinder</a>
            <span class="job_spacemenu">|</span>
		<a href="/contact_us.php">Liên Hệ</a>
            <span class="job_spacemenu">|</span>
		<a href="/press_center/">Góc Báo Chí</a>
            <span class="job_spacemenu">|</span>
		<a href="/faq.php">Trợ Giúp</a>
            <span class="job_spacemenu">|</span>
		<a href="/terms_of_use.php">Thỏa Thuận Sử Dụng</a>
            <span class="job_spacemenu">|</span>
		<a href="/privacy_policy.php">Quy Định Bảo Mật</a>
            <span class="job_spacemenu">|</span>
		<a href="/site_map.php">Sơ Đồ Trang Web</a>
		<p align="center"> Đồ án chuyên nghành A Đại học Hoa Sen: Website tuyển dụng
					</p>
	</div><!-- end job_wrap -->	
    <!--[if IE 6]><div><img src="http://images.vietnamworks.com/spacer.gif" alt="" width="980" height="1" /></div><![endif]--> 
</div><!-- end job_footer2 -->
<!-- end footer -->


</body>


</html>