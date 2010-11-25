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
            <li><?php echo $this->Html->link(__('Người tìm việc', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Nhà tuyển dụng', true), array('controller' => 'employers', 'action' => 'index', 'admin'=> true));?></li>
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
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
    <div id="box">
	<h3><?php __('Thông tin chi tiết Người tìm việc');?></h3>
	<table width="100%">
		<thead>
        <tr>
        	<th><?php echo $this->Paginator->sort('Email','Email');?></th>
			<th><?php echo $this->Paginator->sort('Tên','first_name');?></th>
			<th><?php echo $this->Paginator->sort('Họ','last_name');?></th>
			<th width="110"><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
			<th width="110"><?php echo $this->Paginator->sort('Đăng nhập gần nhất','last_login');?></th>
	        <th><?php echo $this->Paginator->sort('Trạng thái');?></th>
			<th class="actions"><?php __('');?></th>
	    </tr> 
		</thead>
		<?php
	$i = 0;
	foreach ($jobseekers as $jobseeker):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
           <td><?php echo $jobseeker['Jobseeker']['email']; ?>&nbsp;</td>		               		
		    <td><?php echo $jobseeker['Jobseeker']['first_name']; ?>&nbsp;</td>			
		    <td><?php echo $jobseeker['Jobseeker']['last_name']; ?>&nbsp;</td>			
	        <td><?php echo date('d-m-y h:i:s',strtotime($jobseeker['Jobseeker']['created'])); ?>&nbsp;</td>
	        <td><?php echo date('d-m-y h:i:s',strtotime($jobseeker['Jobseeker']['last_login'])); ?>&nbsp;</td>
	    	<td><?php echo $jobseeker['Jobseeker']['actived']; ?>&nbsp;</td>
	        <td class="actions">
			<?php echo $this->Html->link(__('Xem', true), array('action' => 'view', $jobseeker['Jobseeker']['id'])); ?>
			<?php echo $this->Html->link(__('Cập nhật', true), array('action' => 'edit', $jobseeker['Jobseeker']['id'])); ?>
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
	<div id="box">
		<h3>Thông tin chi tiết</h3>
		<?php echo $this->Session->flash(); ?>
	    <?php echo $this->Form->create('Jobseeker',array('div'=>false,'id'=>'form'));?>
        <?php
		echo $this->Form->input('id');
		echo $this->Form->input('email',array('label'=>'Email:','div'=>false,'disabled'=>true));
		echo $this->Form->input('first_name',array('label'=>'Tên:','div'=>false,'disabled'=>true));
		echo $this->Form->input('last_name',array('label'=>'Họ:','div'=>false,'disabled'=>true));
		echo $this->Form->input('birthday', array('label'=>'Ngày sinh:', 'dateFormat' => 'DMY', 'div'=>false,
                                   		'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 15,'monthNames' => false , 'disabled'=> true));
		echo $this->Form->input('gender',array('label'=>'Giới tính:','options' => array(0 => 'Nam', 1 =>'Nữ'), 
                                        'empty' => '...','div'=>false,'class'=>'block','disabled'=>true));
		echo $this->Form->input('country_id',array('label'=>'Quốc gia:','div'=>false,'class'=>'block' ,'disabled'=>true));
		echo $this->Form->input('province_id',array('label'=>'Tỉnh/thành:','div'=>false,'class'=>'block' ,'disabled'=>true));
		echo $this->Form->input('actived',array('label'=>'Trạng thái:','options' => array(0 => 'Inactive', 1 =>'Active',2 => 'Banned'), 
                                        'empty' => '...','class'=>'block','div'=>false,'disabled'=>true));
    	?>
		<div align="center">
			<br/>
			Some function here
	    	<?php echo $this->Form->Submit(__('Cập nhật', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
</div>
</div>