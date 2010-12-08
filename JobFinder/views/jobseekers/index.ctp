<div id="job_nav_sub">
	<div class="job_wrapsubmenu">
		<ul class="job_subnav">
			<li><?php echo $html->link($html->tag('span', 'Tài khoản'), 
					array('controller' => 'jobseekers', 'action' => 'profile'),array('escape' => false)); ?>
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
        	<h2>Quản lý nghề nghiệp</h2>     
            <div class="box_corner">
				<div class="blue_bg_title"><strong>Việc làm đã lưu</strong></div>
				<div class="white_tablecontent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="35%"><?php echo $this->Paginator->sort('Chức danh','job_title');?></td>
						<td width="20%"><?php echo $this->Paginator->sort('Ngày lưu','created');?></td>
						<td width="20%"><?php echo $this->Paginator->sort('Tình trạng','status');?></td>
						<td width="25%"><?php __('Chức năng');?></td>
					  </tr>
						<?php foreach ($jobsaveds as $jobsaved):?>
						<tr>
							<td><strong><?php echo $this->Html->Link($jobsaved['Job']['job_title'], array('controller' => 'jobs', 'action' => 'view', $jobsaved['JobSaved']['job_id'])); ?></strong></td>
							<td><?php echo date('d-m-Y H:i:s', strtotime($jobsaved['JobSaved']['created'])); ?></td>
							<td><?php if($jobsaved['JobSaved']['status'] == 0){ 
								echo $this->Html->Link('Ứng tuyển', array('controller' => 'jobseekers', 'action' => 'applyJob', $jobsaved['JobSaved']['job_id']));
							}
							else if($jobsaved['JobSaved']['status'] == 1){
								echo 'Đã ứng tuyển '. $html->tag('br') .date('d-m-Y H:i:s', strtotime($jobsaved['JobSaved']['applied']));
							} ?></td>
							<td>
								<?php echo $this->Html->link(__('Xem', true), array('controller'=> 'jobs','action' => 'view', $jobsaved['JobSaved']['job_id'])); ?> | 
								<?php echo $this->Html->link(__('Xóa', true), array('controller'=> 'jobs','action' => 'deleteSavedJob', $jobsaved['JobSaved']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s ?', true), $jobsaved['Job']['job_title'])); ?>
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
                <?php echo $this->Html->link($html->tag('span', 'Tìm việc'), 
                        array('controller'=>'jobs','action' => 'search'),array('escape' => false, 'class'=>'button'));?>
            </div>
            <br/>
            <br/>
            <div class="box_corner">
				<div class="blue_bg_title"><strong>Hồ Sơ Của Tôi</strong></div>
				<div class="white_tablecontent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="35%"><?php echo $this->Paginator->sort('Tiêu đề','resume_title');?></td>
						<td width="20%"><?php echo $this->Paginator->sort('Ngày cập nhật','modified');?></td>
						<td width="20%"><?php echo __('Số lần xem');?></td>
						<td width="25%"><?php __('Chức năng');?></td>
					  </tr>
					  <?php foreach ($resumes as $resume):?>
						<tr>
							<td><strong><?php echo $this->Html->Link($resume['Resume']['resume_title'], array('controller' => 'resumes', 'action' => 'view', $resume['Resume']['id'])); ?></strong></td>
							<td><?php echo date('d-m-Y H:i:s', strtotime($resume['Resume']['modified'])); ?>&nbsp;</td>
							<td><?php echo count($resume['ResumeViewLog']); ?></td>
							<td>
								<?php echo $this->Html->link(__('Xem', true), array('controller'=> 'resumes','action' => 'view', $resume['Resume']['id']), array('target'=>'_blank')); ?> |
								<?php echo $this->Html->link(__('Cập nhật', true), array('controller'=> 'resumes','action' => 'preview', $resume['Resume']['id']), array('target'=>'_blank')); ?> | 
								<?php echo $this->Html->link(__('Xóa', true), array('controller'=> 'resumes','action' => 'delete', $resume['Resume']['id']), null, sprintf(__('Bạn có chắc muốn xóa hồ sơ %s?', true), $resume['Resume']['resume_title'])); ?>
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
                <?php echo $this->Html->link($html->tag('span', 'Tạo hồ sơ'), 
                        array('controller'=>'resumes','action' => 'createResume'),array('escape' => false, 'class'=>'button'));?>
            </div>
            <br/>
        </div>
    </div>
</div>
