<div id="header">
	<h2>CakePHP: the rapid development php framework</h2>
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
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<?php echo $this->Session->flash(); ?>
    <div id="box">
	<h3><?php __('Quốc gia');?></h3>
	<table width="100%">
		<thead>
        <tr>
			<th><?php echo $this->Paginator->sort('Tên quốc gia','name');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
			<th width="130"><?php echo $this->Paginator->sort('Ngày cập nhật','modified');?></th>
			<th width="130"></th>
	    </tr> 
		</thead>
<?php
	$i = 0;
	foreach ($listCountries as $country):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $country['Country']['name']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['created']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['modified']; ?>&nbsp;</td>
		<td class="a-center">
			<?php echo $this->Html->link(__('Sửa', true), array('controller'=>'countries','action' => 'edit', $country['Country']['id'])); ?> | 
			<?php echo $this->Html->link(__('Xóa', true), array('controller'=>'countries','action' => 'delete', $country['Country']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s ?', true), $country['Country']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	</div>
	<br/>
	<?php echo $this->Html->link($html->tag('span', 'Thêm quốc gia'), 
                            array('controller'=> 'countries', 'action' => 'add'),array('escape' => false, 'class'=>'button')); ?>
	<br/>
	<br/>
	<div id="box">
			<h3><?php __('Tình/Thành phố');?></h3>
			<table width="100%">
				<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('Tỉnh/Thành phố','name');?></th>
					<th><?php echo $this->Paginator->sort('Quốc gia','country_id');?></th>
					<th><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
					<th><?php echo $this->Paginator->sort('Ngày cập nhật','modified');?></th>
					<th></th>
				</tr>
				</thead>
				<?php
				$i = 0;
				foreach ($provinces as $province):
					$class = null;
					if ($i++ % 2 == 0) {
						$class = ' class="altrow"';
					}
				?>
				<tr <?php echo $class;?>>
					<td><?php echo $province['Province']['name']; ?>&nbsp;</td>
					<td><?php echo $province['Country']['name']; ?>&nbsp;</td>
					<td><?php echo $province['Province']['created']; ?>&nbsp;</td>
					<td><?php echo $province['Province']['modified']; ?>&nbsp;</td>
					<td class="a-center">
						<?php echo $this->Html->link(__('Xem', true), array('action' => 'view', $province['Province']['id'])); ?> |
						<?php echo $this->Html->link(__('Sửa', true), array('action' => 'edit', $province['Province']['id'])); ?> |
						<?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $province['Province']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s?', true), $province['Province']['name'])); ?>
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
		<h3>Thêm mới Tỉnh/thành phố</h3>             
        <?php echo $this->Form->create('Province',array('div'=>false,'id'=>'form'));?>
	<?php
        echo $this->Form->input('country_id',array('label'=>'Quốc gia:','div'=>false,'empty'=>'Vui lòng chọn...','class'=>'block','error'=>array('wrap'=>'span')));
		echo $this->Form->input('name',array('label'=>'Tỉnh/thành phố:','div'=>false,'error'=>array('wrap'=>'span')));
	?>
		<div align="center">
        <br />
	    	<?php echo $this->Form->Submit(__('Lưu', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
	</div>
</div>