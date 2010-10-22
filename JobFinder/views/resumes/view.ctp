<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('job detail');
	$gender =  array(0 => 'Nam', 1 =>'Nữ');
	$martial =  array(0 => 'Độc thân', 1 =>'Đã kết hôn');
?>
<div class="resume_detail">
    <h2><?php  __('Resume Detail');?></h2>
    <fieldset>
    <legend>Hồ sơ</legend>
       
    <table>
    	<tr>
    		<td><?php __('Tên hồ sơ: '); ?></td>
    		<td><?php echo $resume['Resume']['resume_title']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Họ tên: '); ?></td>
    		<td><?php echo $resume['Resume']['last_name'].' '. $resume['Resume']['first_name']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Ngày sinh: '); ?></td>
    		<td><?php echo $resume['Resume']['birthday']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Giới tính: '); ?></td>
    		<td><?php echo $gender[$resume['Resume']['gender']]; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Tình trạng hôn nhân: '); ?></td>
    		<td><?php echo $martial[$resume['Resume']['martial_status']]; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Quốc tịch: '); ?></td>
    		<td><?php echo $nationalities[$resume['Resume']['nationality']]; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Ðịa chỉ liên lạc: '); ?></td>
    		<td><?php echo $resume['Resume']['address']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Quốc gia: '); ?></td>
    		<td><?php echo $resume['Country']['name']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Tỉnh/Thành phố: '); ?></td>
    		<td><?php echo $resume['Province']['name']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Ðiện thoại liên lạc: '); ?></td>
    		<td><?php echo $resume['Resume']['telephone']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Di động: '); ?></td>
    		<td><?php echo $resume['Resume']['mobile']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Địa chỉ Email: '); ?></td>
    		<td><?php echo $resume['Resume']['email']; ?></td>
    	</tr>
		
    </table>
    </fieldset>   
</div>