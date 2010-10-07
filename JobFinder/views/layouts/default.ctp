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
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>JobFinder</title>	
</head>

<body>
	<!-- Phần header -->
	<div class="job_header">
		<div class="job_wrap_header">
			<div class="job_tophead"> Top Header </div>
			<br clear="all"/>
			<div class="job_toplogobanner">
				<div class="job_embed">
				<img width="980px" height="200px" src="../img/banner.png" alt="asdasd" />					
						Embed flash here		
					
				</div>
				<!--  
				<embed height="110" width="360" allowscriptaccess="always" wmode="transparent" 
						type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" 
						src="../img/banner.swf" />
				-->					
			</div>
		</div>

	</div>
	
	
	
	<div class="job_nav">
		<div class="job_wrapmenu">
			<div class="job_menu">
    		<ul>
        		<li>
        			<a href="#"> 
        				<span> Trang chủ</span>  
        			</a>
        		</li>
	            <li>
        			<a href="#"> 
        				<span> Tìm việc</span>  
        			</a>
        		</li>
	            <li>
        			<a href="#"> 
        				<span> Tìm hồ sơ</span>  
        			</a>
        		</li>
	            <li>
        			<a href="#"> 
        				<span> Quản lý nghề nghiệp</span>  
        			</a>
        		</li>
        	</ul>
   	 		</div>
   	 	
	   	 	<!-- Đăng nhập - Đăng ký -->
		    <div class="member_area">
		        <a href="#"> Đăng nhập </a>
		        <span class="job_spacemenu"> | </span>
		        <a href="#"> Đăng ký </a>    
		    </div>
		
		</div>
		
   	 	
    <div class="clearboth">
    </div>
	</div>
	
	<!-- Phần body -> home -->
	<?php echo $content_for_layout; ?>
	
	<!-- Phần Footer -->
	<div class="footer">Về JobFinder| Liên Hệ| Góc Báo Chí| Trợ Giúp| Thỏa Thuận Sử Dụng| Quy Định Bảo Mật| Sơ Đồ Trang Web
	</div>
</body>


</html>