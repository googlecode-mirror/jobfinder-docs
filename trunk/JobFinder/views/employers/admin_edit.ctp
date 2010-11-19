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
            <li><?php echo $this->Html->link(__('Người tìm việc', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true));?></li>
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
		<h3><?php __('Danh sách  nhà tuyển dụng');?></h3>
    
	<table width="100%">
			<thead>
            <tr>
		      	<th><?php echo $this->Paginator->sort('Email');?></th>
    			<th><?php echo $this->Paginator->sort('Tên công ty');?></th>
    			<th width="30"><?php echo $this->Paginator->sort('Quy mô công ty');?></th>
                <th><?php echo $this->Paginator->sort('Sơ lược công ty');?></th>
    			<th><?php echo $this->Paginator->sort('Logo công ty');?></th>
    			<th><?php echo $this->Paginator->sort('Tỉnh/Thành phố');?></th>
                <th><?php echo $this->Paginator->sort('Website');?></th>
                <th><?php echo $this->Paginator->sort('Điện thoại');?></th>
    			<th><?php echo $this->Paginator->sort('Di động');?></th>
                <th><?php echo $this->Paginator->sort('Fax');?></th>
              	<th width="110"><?php echo $this->Paginator->sort('Đăng nhập gần nhất');?></th>
               	<th width="110"><?php echo $this->Paginator->sort('Ngày tạo');?></th>
    			<th width="110"><?php echo $this->Paginator->sort('Ngày cập nhật');?></th>
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
		<td><?php echo $employer['Employer']['company_size']; ?>&nbsp;</td>
        <td><?php echo $employer['Employer']['company_profile']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['company_logo']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['province_id']; ?>&nbsp;</td>
        <td><?php echo $employer['Employer']['website']; ?>&nbsp;</td>
        <td><?php echo $employer['Employer']['telephone']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['mobile']; ?>&nbsp;</td>
        <td><?php echo $employer['Employer']['fax']; ?>&nbsp;</td>  
        <td><?php echo date('d-m-y h:i:s',strtotime($employer['Employer']['last_login'])); ?>&nbsp;</td>
        <td><?php echo date('d-m-y h:i:s',strtotime($employer['Employer']['created'])); ?>&nbsp;</td>
        <td><?php echo date('d-m-y h:i:s',strtotime($employer['Employer']['modified'])); ?>&nbsp;</td>
	    <td><?php echo $employer['Employer']['actived']; ?>&nbsp;</td>
        <td class="actions">
		<?php echo $this->Html->link(__('View', true), array('action' => 'view', $employer['Employer']['id'])); ?>
		<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $employer['Employer']['id'])); ?>
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
		<h3>Cập nhật trạng thái nhà tuyển dụng</h3>
		<?php echo $this->Session->flash(); ?>
	    <?php echo $this->Form->create('Employer',array('div'=>false,'id'=>'form'));?>
        <?php
        echo $this->Form->input('id');
		echo $this->Form->input('actived',array('label'=>'Trạng thái:','div'=>false));
    	?>
		<div align="center">
			<br/>
	    	<?php echo $this->Form->Submit(__('Cập nhật', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
	</div>
</div>