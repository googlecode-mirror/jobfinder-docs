<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('job detail');
?>

<div class="resume_detail">
    <h2><?php  __('Resume Detail');?></h2>
    <fieldset>
    <legend>H? so b?n thân</legend>
       
    <table>
    	<tr>
    		<td><?php __('ID Ngu?i xin vi?c'); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['jobseeker_id']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Tên hồ sơ '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['resume_title']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Họ '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['first_name']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Tên'); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['last_name']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Ðịa chỉ công ty: '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['birthday']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Tình trạng hôn nhân '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['martial_status']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Quốc tịch '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['nationality']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Ðịa chỉ liên lạc'); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['address']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Nước '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['country_id']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Tỉnh thành '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['province_id']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Ðiện thoại liên lạc '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['telephone']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Điện thoại di động'); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['mobile']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Email '); ?></td>
    		<td><?php echo $resume[0]['Resume'][0]['email']; ?></td>
    	</tr>
		
    </table>
    </fieldset>   
</div>