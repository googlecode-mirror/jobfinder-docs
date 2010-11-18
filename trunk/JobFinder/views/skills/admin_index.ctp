<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
	<div id="topmenu">
    	<ul>
        	<li><a href="index.html">Dashboard</a></li>
            <li class="current"><a href="#">Danh mục</a></li>
            <li><a href="users.html">Users</a></li>
            <li><a href="#">Manage</a></li>
            <li><a href="#">CMS</a></li>
            <li><a href="#">Statistics</a></li>
            <li><a href="#">Settings</a></li>
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
			<li><?php echo $this->Html->link(__('Nhóm kỹ năng', true), array('controller' => 'skillGroups', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Kỹ năng', true), array('controller' => 'skills', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Quốc gia', true), array('controller' => 'countries', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Tỉnh thành', true), array('controller' => 'provinces', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Loại danh mục khác', true), array('controller' => 'category_types', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Danh mục khác', true), array('controller' => 'categories', 'action' => 'index', 'admin'=> true));?></li>
		</ul>
	</div>
</div>
<div id="wrapper">
	<div id="content">
    	<div id="box">
			<h3><?php __('Kỹ năng');?></h3>
			<?php echo $this->Session->flash(); ?>
			<table width="100%">
				<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('name');?></th>
					<th><?php echo $this->Paginator->sort('skill_group_id');?></th>
					<th><?php echo $this->Paginator->sort('created');?></th>
					<th><?php echo $this->Paginator->sort('modified');?></th>
					<th><?php __('Actions');?></th>
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
						<?php echo $this->Html->image("icons/user.png", array("alt" => "View",'url' => array('action' => 'view', $skill['Skill']['id']))); ?>
						<?php echo $this->Html->image("icons/user_edit.png", array("alt" => "Edit",'url' => array('action' => 'edit', $skill['Skill']['id']))); ?>
						<?php echo $this->Html->image("icons/user_delete.png", array("alt" => "Delete",'url' => array('action' => 'delete', $skill['Skill']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $skill['Skill']['id']))); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
			<p>
			<?php echo $this->Paginator->counter(array('format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)));?>	</p>
			<div class="paging">
				<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 			|<?php echo $this->Paginator->numbers();?>
 				|<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
			</div>
		</div>
		<br/>
		<div id="box">
		<ul>
			<li><?php echo $this->Html->link(__('Thêm kỹ  năng', true), array('action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>
<?php echo $this->element('admin_sidebar'); ?>
<div id="footer">
	<div id="credits">
    </div>
    <br />
</div>
