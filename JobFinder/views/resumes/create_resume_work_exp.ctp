<?php echo $this->element('job_menu'); ?>
<div class='container'>
<?php echo $this->Form->create('Resume');?>
    <h2>Thông tin hồ sơ</h2>
    <ul>
    	<li><?php echo $this->Form->input('ResumeWorkExp.resume_id', array('type'=>'hidden', 'value' => $this->params['pass'][0])); ?></li>
    	<li><?php echo $this->Form->input('ResumeWorkExp.years_work', array('label'=>'Số năm kinh nghiệm:')); ?></li>
    </ul>
    <h2>Thông tin hồ sơ</h2>
    <ul>
    	<li><?php echo $this->Form->input('ResumeJobExp.0.job_title', array('label'=>'Chức danh:')); ?></li>
    	<li><?php echo $this->Form->input('ResumeJobExp.0.job_level_id', array('label'=>'Cấp bậc', 'empty' => 'Vui lòng chọn...')); ?></li>
    </ul>
    <div class="actions">
        <?php echo $this->Form->submit('Continue');?>
    </div>
</div>

<div class="categories index">
	<h2><?php __('Categories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<th><?php echo ('job_title');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($jobexps as $jobexp):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $jobexp['ResumeJobExp']['job_title']; ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
