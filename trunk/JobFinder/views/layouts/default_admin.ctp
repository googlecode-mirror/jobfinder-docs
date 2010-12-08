<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('theme');
	echo $this->Html->css('style');
	echo $scripts_for_layout;
	echo $html->charset('UTF-8');
	echo $javascript->link(array('prototype'));
?>
<head>
<title>
		<?php __('JobFinder Admin: '); ?>
		<?php echo $title_for_layout; ?>
</title>
</head>
<body>
	<div id="container">	
    	<?php echo $content_for_layout; ?>
	<div id="footer">
	<div id="credits">
    </div>
    <br />
</div>
</div>


</body>
</html>