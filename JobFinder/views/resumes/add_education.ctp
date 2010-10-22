<div class='container'><?php echo $this->Form->create('Resume');?>
<h2>Học vấn</h2>
<ul>
	<li><?php echo $this->Form->input('ResumeEducation.resume_id', array('type'=>'hidden', 'value' => $this->Session->read('resumeID'))); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.degree_level_id', array('label'=>'Bằng cấp chuyên môn: ', 'empty' => 'Vui lòng chọn...')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.program', array('label'=>'Trường: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.major', array('label'=>'Chuyên ngành: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.country_id', array('label'=>'Quốc gia: ', 'empty' => 'Vui lòng chọn...')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.start_date', array('label'=>'Ngày bắt đầu: ', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => '...')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.end_date', array('label'=>'Ngày kết thúc: ','dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => 'Hiện tại')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.related_information', array('label'=>'Thông tin liên quan: ')); ?></li>
</ul>
<ul>
	<li>
	<div class="actions"><?php echo $this->Form->submit('Thêm');?></div>
	</li>
</ul>
<ul>
	<li>
	<div class="resume educations index">
	<h2><?php __('Quá trình làm việc');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo ('Trường ');?></th>
			<th><?php echo ('Chuyên ngành ');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($resumeEducations as $resumeEducation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $resumeEducation['ResumeEducation']['program']; ?>&nbsp;</td>
			<td><?php echo $resumeEducation['ResumeEducation']['major']; ?>&nbsp;</td>
			<td class="actions"><?php echo $this->Html->link(__('Edit', true), array('action' => 'editEducation', $resumeEducation['ResumeEducation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'deleteEducation', $resumeEducation['ResumeEducation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resumeEducation['ResumeEducation']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
	</li>
</ul>
<ul>
	<li><?php if(!empty($resumeEducations)){ echo $this->Html->link(__('Continue', true), array('action' => 'saveTargetJob')); } ?></li>
</ul>
</div>
