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
	<h3><?php __('Thông tin chi tiết Nhà tuyển dụng');?></h3>
	<table width="100%">
		<thead>
            <tr>
		      	<th><?php echo $this->Paginator->sort('Email','Email');?></th>
    			<th><?php echo $this->Paginator->sort('Tên công ty','company_name');?></th>
                <th><?php echo $this->Paginator->sort('Quốc gia','country_id');?></th>
    			<th><?php echo $this->Paginator->sort('Tỉnh/Thành phố','province_id');?></th>
                <th><?php echo $this->Paginator->sort('Website','Website');?></th>
                <th width="110"><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
    			<th width="110"><?php echo $this->Paginator->sort('Đăng nhập gần nhất','last_login');?></th>
                <th><?php echo $this->Paginator->sort('Trạng thái');?></th>            
    			<th width="130" class="actions"><?php __('');?></th>
	    </tr> 
		</thead>
<?php
	$i = 0;
	foreach ($employers as $employer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
        <td><?php echo $employer['Employer']['email']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['company_name']; ?>&nbsp;</td>
        <td><?php echo $countries[$employer['Employer']['country_id']]; ?>&nbsp;</td>
		<td><?php echo $provinces[$employer['Employer']['province_id']]; ?>&nbsp;</td>
        <td><?php echo $employer['Employer']['website']; ?>&nbsp;</td>
        <td><?php echo date('d-m-y h:i:s',strtotime($employer['Employer']['created'])); ?>&nbsp;</td>
        <td><?php echo date('d-m-y h:i:s',strtotime($employer['Employer']['last_login'])); ?>&nbsp;</td>
	    <td><?php echo $employer['Employer']['actived']; ?>&nbsp;</td>
        <td class="actions">
        	<?php echo $this->Html->link(__('Xem', true), array('action' => 'view', $employer['Employer']['id'])); ?>
    	    <?php echo $this->Html->link(__('Cập nhật', true), array('action' => 'edit', $employer['Employer']['id'])); ?>       
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
</div>
</div>