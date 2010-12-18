<div id="job_nav_sub">
	<div class="job_wrapsubmenu">
		<ul class="job_subnav">
			<li><?php echo $html->link($html->tag('span', 'Tuyển Dụng'), 
					array('controller' => 'employers', 'action' => 'manageJob'),array('escape' => false)); ?>
			</li>
			<li><?php echo $html->link($html->tag('span', 'Hồ Sơ Ứng Tuyển'), 
					array('controller' => 'employers', 'action' => 'manageCandidates'),array('escape' => false)); ?>
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
        	<h2>QUẢN LÝ HỒ SƠ ỨNG TUYỂN</h2>        
            <div class="box_corner">
				<div class="dblue_bg_title"><strong>Đơn ứng tuyển</strong></div>
				<div class="dwhite_tablecontent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="25%"><?php echo $this->Paginator->sort('Tiêu đề','subject');?></td>
						<td width="20%"><?php echo $this->Paginator->sort('Họ tên ứng viên','jobseeker.last_name');?></td>
						<td width="25%"><?php echo $this->Paginator->sort('Chức danh ứng tuyển','job.job_title');?></td>
						<td width="15%"><?php echo $this->Paginator->sort('Ngày nộp','created');?></td>
						<td width="15%"><?php __('Chức năng');?></td>
					  </tr>
						<?php foreach ($jobApplys as $jobApply):?>
						<tr>
							<td><strong><?php echo $jobApply['JobApply']['subject'];?></strong></td>
							<td><?php echo $jobApply['Jobseeker']['last_name'].' '.$jobApply['Jobseeker']['first_name']; ?></td>
							<td><?php echo $this->Html->Link($jobApply['Job']['job_title'], array('controller' => 'jobs', 'action' => 'view', $jobApply['JobApply']['job_id']), array('target'=>'_blank')); ?></td>
							<td><?php echo date('d-m-Y H:i:s',strtotime($jobApply['JobApply']['created'])); ?></td>
							<td>
								<?php echo $this->Html->link(__('Xem', true), array('action' => 'viewApplyJob', $jobApply['JobApply']['id']), array('target'=>'_blank'));?> |  
								<?php echo $this->Html->link(__('Xóa', true), array('action' => 'deleteApplyJob', $jobApply['JobApply']['id']), null, sprintf(__('Bạn có chắc chắn muốn xóa %s?', true), $jobApply['JobApply']['subject'])); ?>
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
            <br/>
        </div>
    </div>
</div>
