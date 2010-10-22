
<div class='container'><?php echo $this->Form->create('Resume');?>
<h2>Công việc mong muốn</h2>
<ul>
	<li><?php echo $this->Form->input('ResumeTargetJob.resume_id', array('type'=>'hidden', 'value' => $this->Session->read('resumeID'))); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_title', array('label'=>'Vị trí mong muốn: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_level_id', array('label'=>'Cấp bậc mong muốn: ', 'empty' => 'Vui lòng chọn...')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.career_objective', array('label'=>'Mục tiêu nghề nghiệp: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.current_salary', array('label'=>'Mức lương hiện tại (USD): ')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.desired_salary', array('label'=>'Mức lương mong muốn (USD): ')); ?></li>
</ul>
<ul>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_types', array('label'=> 'Loại hình công việc: ','type' => 'select', 'multiple' => 'checkbox')); ?></li>
</ul>
<ul>
	<li><?php echo $this->Form->input('ResumeTargetJob.company_size', array('label'=> 'Quy mô công ty: ','empty'=>'Vui lòng chọn...')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_locations', array('label'=> 'Nơi làm việc mong muốn: ','type' => 'select', 'multiple' => true)); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_categories', array('label'=> 'Ngành nghề mong muốn: ','type' => 'select', 'multiple' => true)); ?></li>
	<li><label>Bạn có thể đổi chỗ ở vì yêu cầu công việc ?</label> <?php echo $this->Form->radio('ResumeTargetJob.can_relocate', array(0 => 'Không', 1 => 'Có'), array('legend'=>false)); ?></li>
	<li><label>Bạn có thể đi công tác? ?</label> <?php echo $this->Form->radio('ResumeTargetJob.can_travel', array(0 => 'Không', 1 => 'Có'), array('legend'=>false)); ?></li>
</ul>
<ul>
	<li>
	<div class="actions"><?php echo $this->Form->submit('Continue');?></div>
	</li>
</ul>
</div>