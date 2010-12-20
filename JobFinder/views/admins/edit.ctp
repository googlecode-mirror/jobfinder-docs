<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>
</div>
<div id="top-panel">
	<div id="panel">
	   <ul>
			<li><?php echo $this->Html->link(__('Người tìm việc', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Nhà tuyển dụng', true), array('controller' => 'employers', 'action' => 'index', 'admin'=> true)); ?></li>
			<li><?php echo $this->Html->link(__('Administrator', true), array('controller' => 'admins', 'action' => 'account', 'admin'=> false)); ?></li>
		</ul>
	</div>
</div>
<div id="wrapper">
<?php echo $this->element('admin_sidebar'); ?>
	<div id="content">
	<?php echo $this->Session->flash(); ?>
    <div id="box">
	<h3><?php __('Tài khoản quản trị');?></h3>
	<table width="100%">
		<thead>
        <tr>
			<th><?php echo $this->Paginator->sort('Username','username');?></th>
			<th width="120"><?php echo $this->Paginator->sort('Ngày tạo','created');?></th>
			<th width="120"><?php echo $this->Paginator->sort('Đăng nhập gần nhất','last_login');?></th>
            <th width="110"><?php echo $this->Paginator->sort('Trạng thái','status');?></th>
			<th width="110"></th>
	    </tr> 
		</thead>
	<?php
	$status =  array(0 => 'Khóa', 1 =>'Đã kích hoạt');
	$i = 0;
	foreach ($admins as $admin):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
    <tr<?php echo $class;?>>
    	<td><?php echo $admin['Admin']['username']; ?>&nbsp;</td>		               			
        <td><?php echo date('d-m-y h:i:s',strtotime($admin['Admin']['created'])); ?>&nbsp;</td>
    	<td><?php echo date('d-m-y h:i:s',strtotime($admin['Admin']['last_login'])); ?>&nbsp;</td>
    	<td><?php echo $status[$admin['Admin']['status']]; ?>&nbsp;</td>
        <td class="a-center"> 
		<?php echo $this->Html->link(__('Sửa', true), array('action' => 'edit', $admin['Admin']['id'])); ?> | 
		<?php echo $this->Html->link(__('Xóa', true), array('action' => 'delete', $admin['Admin']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s ?', true), $admin['Admin']['username'])); ?>
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
		<h3>Cập nhật trạng thái</h3>
	    <?php echo $this->Form->create('Admin',array('div'=>false,'id'=>'form'));?>
	    <?php echo $this->Form->input('id');?>
	    <?php echo $this->Form->input('password',array('type'=>'hidden')); ?>
        <?php echo $this->Form->input('username',array('label'=>'Tên đăng nhập:','div'=>false,'readonly'=>true,'error'=>array('wrap'=>'span'))); ?>
        <?php echo $this->Form->input('status',array('label'=>'Trạng thái:','options'=>$status,'empty'=>'Vui lòng chọn...','div'=>false,'error'=>array('wrap'=>'span'))); ?>
        <h3>Đổi mật khẩu</h3>
        <br/>
        <?php echo $this->Form->input('old_password',array('label'=>'Mật khẩu:','type'=>'password','div'=>false,'error'=>array('wrap'=>'span'))); ?>
        <?php echo $this->Form->input('new_password',array('label'=>'Mật khẩu mới:','type'=>'password','div'=>false,'error'=>array('wrap'=>'span'))); ?>
        <?php echo $this->Form->input('confirm_new_password',array('label'=>'Xác nhận mật khẩu mới:','type'=>'password','div'=>false,'error'=>array('wrap'=>'span'))); ?>
        
		<div align="center">
			<br/>
	    	<?php echo $this->Form->Submit(__('Cập nhật', true),array('div'=>false));?>
	        <?php echo $this->Form->button('Reset', array('type'=>'reset','div'=>false));?>
	    </div>
	</div>
</div>
</div>