<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index','admin'=> false)); ?></li>
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
	<h3><?php __('Danh sách Nhà tuyển dụng');?></h3>
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
	$status =  array(0 => 'Chưa kích hoạt', 1 =>'Đã kích hoạt', 2=>'Khóa');
	foreach ($employers as $employer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
        <td><?php echo $employer['Employer']['email']; ?>&nbsp;</td>
		<td><?php echo $employer['Employer']['company_name']; ?>&nbsp;</td>
        <td><?php echo $employer['Country']['name']; ?>&nbsp;</td>
		<td><?php echo $employer['Province']['name']; ?>&nbsp;</td>
        <td><?php echo $employer['Employer']['website']; ?>&nbsp;</td>
        <td><?php echo date('d-m-y h:i:s',strtotime($employer['Employer']['created'])); ?>&nbsp;</td>
        <td><?php echo date('d-m-y h:i:s',strtotime($employer['Employer']['last_login'])); ?>&nbsp;</td>
	    <td><?php echo $status[$employer['Employer']['actived']]; ?>&nbsp;</td>
        <td class="a-center">
        	<?php echo $this->Html->link(__('Xem', true), array('action' => 'view', $employer['Employer']['id'])); ?> | 
    	    <?php echo $this->Html->link(__('Sửa', true), array('action' => 'edit', $employer['Employer']['id'])); ?>       
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
	    <?php echo $this->Form->create('Employer',array('div'=>false,'id'=>'form'));?>
        <?php
		echo $this->Form->input('id');
		echo $this->Form->input('email',array('label'=>'Email:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('company_name',array('label'=>'Tên:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('company_size',array('label'=>'Quy mô công ty:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('company_profile',array('label'=>'Sơ lược:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('country_id',array('label'=>'Quốc gia:','div'=>false,'class'=>'block' ,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('province_id',array('label'=>'Tỉnh/thành:','div'=>false,'class'=>'block' ,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('address',array('label'=>'Địa chỉ:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('website',array('label'=>'Website:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('contact_name',array('label'=>'Người liên hệ:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('contact_position',array('label'=>'Chức vụ:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('telephone',array('label'=>'Điện thoại:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('mobile',array('label'=>'Di động:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('fax',array('label'=>'Fax:','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
		echo $this->Form->input('actived',array('label'=>'Trạng thái:','options' => $status, 
                                        'empty' => 'Vui lòng chọn...','class'=>'block','div'=>false,'disabled'=>true,'error'=>array('wrap'=>'span')));
    	?>
		<div align="center">
			<br/>
	    	<?php echo $this->Html->link(__('Cập nhật trạng thái', true), array('action' => 'edit', $this->data['Employer']['id'])); ?>
	    </div>
	</div>
</div>
</div>