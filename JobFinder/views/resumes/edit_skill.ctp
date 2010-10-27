<div class='container'><?php echo $this->Form->create('Resume');?>
<h2>Kỹ năng</h2>
<ul>
	<li><?php echo $this->Form->input('ResumeSkill.id', array('type'=>'hidden')); ?></li>
	<li><?php echo $this->Form->input('ResumeSkill.resume_id', array('type'=>'hidden', 'value' => $this->Session->read('resumeID'))); ?></li>
	<li><?php echo $this->Form->input('Skill.skill_group_id', array('label'=>'Nhóm kỹ năng: ', 'empty' => 'Vui lòng chọn...', 'id'=>'skillGroups')); ?></li>
	<li><?php echo $this->Form->input('ResumeSkill.skill_id', array('label'=>'Kỹ năng: ', 'empty' => 'Vui lòng chọn...', 'id'=>'skills' )); ?></li>
	<li><?php echo $this->Form->input('ResumeSkill.description', array('label'=>'Mô tả: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeSkill.proficiency', array('label'=>'Trình độ: ','empty' => 'Vui lòng chọn...')); ?></li>
	<li><?php echo $this->Form->input('ResumeSkill.year_use', array('label'=>'Số năm sử dụng: ')); ?></li>
</ul>
<ul>
	<li>
	<div class="actions"><?php echo $this->Form->submit('Lưu');?></div>
	</li>
</ul>
<ul>
	<li>
	<div class="resume skills index">
	<h2><?php __('Kỹ năng');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo ('Tên kỹ năng ');?></th>
			<th><?php echo ('Trình độ ');?></th>
		</tr>
		<?php
		$i = 0;
		//pr($resumeSkills);
		foreach ($resumeSkills as $resumeSkill):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $listSkills[$resumeSkill['ResumeSkill']['skill_id']]; ?>&nbsp;</td>
			<td><?php echo $proficiencies[$resumeSkill['ResumeSkill']['proficiency']]; ?>&nbsp;</td>
			<td class="actions"><?php echo $this->Html->link(__('Edit', true), array('action' => 'editSkill', $resumeSkill['ResumeSkill']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'deleteSkill', $resumeSkill['ResumeSkill']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resumeSkill['ResumeSkill']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
	</li>
</ul>
<ul>
	<li><?php echo $this->Html->link(__('Trở lại', true), array('action' => 'saveTargetJob'));?></li>
	<li><?php if(!empty($resumeSkills)){ echo $this->Html->link(__('Hoàn tất', true), array('action' => 'view',$this->Session->read('resumeID'))); } ?></li>
</ul>
</div>
		<?php echo $ajax->observeField('skillGroups',array('url'=>'getSkills','update'=>'skills'));?>