<div id="job_nav_sub">
	<div class="job_wrapsubmenu">
		<ul class="job_subnav">
			<li><?php echo $html->link($html->tag('span', 'Tuyển Dụng'), 
					array('controller' => 'employers', 'action' => 'manageJob'),array('escape' => false)); ?>
			</li>
			<li><?php echo $html->link($html->tag('span', 'Hồ Sơ Ứng Tuyển'), 
					array('controller' => 'employers', 'action' => 'manageCandidates'),array('escape' => false)); ?>
			</li>
			<li><?php echo $html->link($html->tag('span', 'Tài Khoản'), 
					array('controller' => 'employers', 'action' => 'account'),array('escape' => false)); ?>
			</li>		
		</ul>	
		<br clear="all"/>
	</div><!-- end wrap -->		
</div>
<div class="wrap_cr">
    <!-- begin content -->
    <div id="content_cr">
    <?php echo $this->Session->flash(); ?>
        <!-- begin right col -->
        <div id="right_cr">
        	<h2>QUẢN LÝ TUYỂN DỤNG</h2>        
            <div class="box_corner">
				<div class="dblue_bg_title"><strong>Các việc làm đang đăng tuyển</strong></div>
				<div class="dwhite_tablecontent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="30%"><?php echo $this->Paginator->sort('Tiêu đề việc làm','job_title');?></td>
						<td width="10%"><?php echo $this->Paginator->sort('Mã số','job_code');?></td>
						<td width="10%">Số lần xem</td>
						<td width="15%">Hồ sơ ứng tuyển</td>
						<td width="15%"><?php echo $this->Paginator->sort('Ngày đăng','approved');?></td>
						<td width="25%"><?php __('Chức năng');?></td>
					  </tr>
						<?php foreach ($jobs as $job):?>
						<tr>
							<td><strong><?php echo $this->Html->Link($job['Job']['job_title'], array('controller' => 'jobs', 'action' => 'view', $job['Job']['id']), array('target'=>'_blank')); ?></strong></td>
							<td><?php echo $job['Job']['job_code']; ?></td>
							<td><?php echo $job['JobViewLog'][0]['views']; ?></td>
							<td><?php echo count($job['JobApply']); ?></td>
							<td><?php echo date('d-m-y H:i:s',strtotime($job['Job']['approved'])) ; ?></td>
							<td>
								<?php echo $this->Html->link(__('Xem', true), array('controller'=> 'jobs','action' => 'view', $job['Job']['id']), array('target'=>'_blank'));?> | 
								<?php echo $this->Html->link(__('Cập nhật', true), array('controller'=> 'jobs','action' => 'preview', $job['Job']['id']), array('target'=>'_blank')); ?> | 
								<?php echo $this->Html->link(__('Xóa', true), array('controller'=> 'jobs','action' => 'delete', $job['Job']['id']), null, sprintf(__('Bạn có chắc chắn muốn xóa %s?', true), $job['Job']['job_title'])); ?>
							</td>
						</tr>
						<?php endforeach; ?>
					  </tbody></table>
					<div class="paging">
						<?php echo $this->Paginator->prev('<< ' . __('Trước', true), array(), null, array('class'=>'disabled'));?>
					 	|<?php echo $this->Paginator->numbers();?>
				 		| <?php echo $this->Paginator->next(__('Kế tiếp', true) . ' >>', array(), null, array('class' => 'disabled'));?>
					</div>					
                </div>
                <!--end xboxcontent-->				
			</div>
            <div style="text-align: left;">
                <?php echo $this->Html->link($html->tag('span', 'Đăng việc làm mới'), 
                        array('controller'=>'jobs','action' => 'postJob'),array('escape' => false, 'class'=>'button'));?>
            </div>
            <br/>
        </div>
    </div>
</div>
