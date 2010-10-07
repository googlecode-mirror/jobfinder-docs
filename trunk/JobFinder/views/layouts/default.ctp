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

	</div>
	
	<div class="job_nav">
		<div class="job_menu">
    		<ul>
        		<li><a href="#"> <span>Trang chủ</span>  </a></li>
	            <li><a href="#"> Tìm việc </a></li>
	            <li><a href="#"> Tìm hồ sơ </a></li>
	            <li><a href="#"> Quản lý nghề nghiệp </a></li>
        	</ul>
   	 	</div>
	    <div class="member_area">
	        <ul>
	        	<li><a href="#"> Đăng nhập </a></li>
	            <li><a href="#"> Đăng ký </a></li>
	        </ul>
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