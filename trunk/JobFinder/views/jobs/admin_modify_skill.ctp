<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
	<div id="topmenu">
    	<ul>
        	        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>
</div>
<div id="top-panel">
	<div id="panel">
	<ul>
			<li><?php echo $this->Html->link(__('Việc làm đăng tuyển', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Đăng tin tuyển dụng', true), array('controller' => 'jobs', 'action' => 'postJob', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Duyệt việc làm', true), array('controller' => 'jobs', 'action' => 'approveJob', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Hồ sơ ứng tuyển', true), array('controller' => 'jobs', 'action' => 'applyJob', 'admin'=> true)); ?></li>
		</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<div id="box">
		<h3>Kỹ năng yêu cầu</h3>
		<?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('Job',array('div'=>false,'id'=>'form'));?>
        <?php echo $this->Form->input('JobSkill.id', array('type'=>'hidden','div'=>false)); ?>
        <?php echo $this->Form->input('JobSkill.job_id', array('type'=>'hidden','div'=>false,'value' => $this->Session->read('jobID'))); ?>
        <?php echo $this->Form->Input('Skill.skill_group_id',array('label'=>'Nhóm kỹ năng:','div'=>false,'empty' => 'Vui lòng chọn...', 'id'=>'skillGroups','class'=>'block','error'=>array('wrap'=>'span')));?>
        <?php echo $this->Form->Input('JobSkill.skill_id',array('label'=>'Kỹ năng:','div'=>false,'empty' => 'Vui lòng chọn...', 'id'=>'skills','class'=>'block','error'=>array('wrap'=>'span')));?>
		<?php echo $this->Form->input('JobSkill.description',array('label'=>'Mô tả:','rows'=>10,'div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $this->Form->Input('JobSkill.proficiency',array('label'=>'Trình độ:','div'=>false,'empty' => 'Vui lòng chọn...', 'id'=>'skills','class'=>'block','error'=>array('wrap'=>'span')));?>
		<?php echo $this->Form->input('JobSkill.year_use',array('label'=>'Số năm sử dụng:','div'=>false,'error'=>array('wrap'=>'span'))); ?>
		<?php echo $ajax->observeField('skillGroups',array('url'=>'getSkills','update'=>'skills'));?>
		<div align="center">
			<br/>
	    	<?php echo $this->Form->Submit(__('Thêm', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
	
	<div id="box">
	<h3><?php __('Kỹ năng');?></h3>
    
	<table width="100%">
		<thead>
        <tr>
			<th width="200"><?php echo __('Tên kỹ năng');?></th>
			<th width="150"><?php echo __('Trình độ');?></th>
			<th width="130" class="actions"><?php __('');?></th>
	    </tr> 
		</thead>
		<?php foreach ($jobSkills as $jobSkill):?>
    <tr>
		<td><?php echo $listSkills[$jobSkill['JobSkill']['skill_id']]; ?>&nbsp;</td>
		<td><?php echo $proficiencies[$jobSkill['JobSkill']['proficiency']]; ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__('Sửa', true), array('action' => 'admin_editSkill', $jobSkill['JobSkill']['id'], true)); ?>
			<?php echo $this->Html->link(__('Xóa', true), array('action' => 'admin_deleteSkill', $jobSkill['JobSkill']['id'], true), null, sprintf(__('Bạn có chắc muốn xóa kỹ năng %s?', true), $listSkills[$jobSkill['JobSkill']['skill_id']])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
	</table>
    
	</div>
	<br/>
	<?php echo $this->Html->link(__('Hoàn thành', true), array('action' => 'admin_preview',$this->Session->read('jobID')));  ?>
	</div>
</div>