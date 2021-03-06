<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>
</div>
<div id="top-panel">
	<div id="panel">
		<ul>
			<li><?php echo $this->Html->link(__('Ngành nghề', true), array('controller' => 'job_categories', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Loại hình công việc', true), array('controller' => 'job_types', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Cấp bậc', true), array('controller' => 'job_levels', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Bằng cấp', true), array('controller' => 'degree_levels', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Kỹ năng', true), array('controller' => 'skills', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Quốc gia/ Thành phố', true), array('controller' => 'provinces', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Danh mục khác', true), array('controller' => 'categories', 'action' => 'index', 'admin'=> true));?></li>
		</ul>
	</div>
</div>
<?php echo $this->element('admin_sidebar'); ?>
<div id="wrapper">
	<div id="content">
		<?php echo $this->Session->flash(); ?>
		<div id="box">
			<h3><?php __('Nhóm kỹ năng');?></h3>
			<table width="100%">
				<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('Tên nhóm','name');?></th>
					<th><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
					<th><?php echo $this->Paginator->sort('Ngày cập nhật','modified');?></th>
					<th></th>
				</tr>
				</thead>
				<?php
				$i = 0;
				foreach ($listSkillGroups as $skillGroup):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
				<tr <?php echo $class;?>>
					<td><?php echo $skillGroup['SkillGroup']['name']; ?>&nbsp;</td>
					<td><?php echo $skillGroup['SkillGroup']['created']; ?>&nbsp;</td>
					<td><?php echo $skillGroup['SkillGroup']['modified']; ?>&nbsp;</td>
					<td class="a-center">
						<?php echo $this->Html->link(__('Sửa', true), array('controller'=>'SkillGroups', 'action' => 'edit', $skillGroup['SkillGroup']['id'])); ?> |
						<?php echo $this->Html->link(__('Xóa', true), array('controller'=>'SkillGroups', 'action' => 'delete', $skillGroup['SkillGroup']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s?', true), $skillGroup['SkillGroup']['name'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			
		</div>
		<br/>
		<?php echo $this->Html->link($html->tag('span', 'Thêm nhóm kỹ năng'), 
                            array('controller'=> 'SkillGroups', 'action' => 'add'),array('escape' => false, 'class'=>'button')); ?>
		<br/>
		<br/>
    	<div id="box">
			<h3><?php __('Kỹ năng');?></h3>
			<table width="100%">
				<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('Tên kỹ năng','name');?></th>
					<th><?php echo $this->Paginator->sort('Nhóm kỹ năng','skill_group_id');?></th>
					<th><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
					<th><?php echo $this->Paginator->sort('Ngày cập nhật','modified');?></th>
					<th></th>
				</tr>
				</thead>
				<?php
				$i = 0;
				foreach ($skills as $skill):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
				<tr <?php echo $class;?>>
					<td><?php echo $skill['Skill']['name']; ?>&nbsp;</td>
					<td><?php echo $skill['SkillGroup']['name']; ?>&nbsp;</td>
					<td><?php echo $skill['Skill']['created']; ?>&nbsp;</td>
					<td><?php echo $skill['Skill']['modified']; ?>&nbsp;</td>
					<td class="a-center">
						<?php echo $this->Html->link(__('Xem', true), array('action' => 'view', $skill['Skill']['id'])); ?> |
						<?php echo $this->Html->link(__('Sửa', true), array('action' => 'edit', $skill['Skill']['id'])); ?> |
						<?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $skill['Skill']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s?', true), $skill['Skill']['name'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<p>
			<?php echo $this->Paginator->counter(array('format' => __('Trang %page%/%pages%, tổng cộng %count% records', true)));?>	
			</p>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Trước', true), array(), null, array('class'=>'disabled'));?>
	 	|<?php echo $this->Paginator->numbers();?>
 		| <?php echo $this->Paginator->next(__('Kế tiếp', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
		</div>
		<br/>
		<br/>
	<div id="box">
		<h3>Thêm mới Kỹ năng</h3>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Form->create('Skill',array('div'=>false,'id'=>'form'));?>
		<?php echo $this->Form->Input('skill_group_id',array('label'=>'Nhóm kỹ năng:','div'=>false,'empty'=>'Vui lòng chọn...','class'=>'block','error'=>array('wrap'=>'span')));?>
		<?php echo $this->Form->Input('name',array('label'=>'Tên kỹ năng:','div'=>false,'error'=>array('wrap'=>'span')));?>
		<div align="center">
			<br/>
	    	<?php echo $this->Form->Submit(__('Lưu', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
	</div>
</div>
