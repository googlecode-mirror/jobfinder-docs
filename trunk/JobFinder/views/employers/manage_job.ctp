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
<div class="wrap_search">
    <?php echo $this->Session->flash(); ?>	
    <div id="search_contentpage">
	<h2>QUẢN LÝ TUYỂN DỤNG</h2>   
    	<!-- begin left col -->
        <div class="leftcol_search">
        	<!-- begin left menu -->
            <h3 class="dboxTitle02">TUYỂN DỤNG</h3>
            <ul class="listType04">
				<li class="icon04"><?php echo $this->Html->link('Đã duyệt', array('action' => 'manageJob'));?></li>
                <li class="icon04"><?php echo $this->Html->link('Chờ duyệt', array('action' => 'manageJob', 'status'=>0)); ?></li>
                <li class="icon04"><?php echo $this->Html->link('Đã chỉnh sửa chờ duyệt', array('action' => 'manageJob', 'status'=>3)); ?></li>
            	<li class="icon04"><?php echo $this->Html->link('Hết hạn nhận hồ sơ', array('action' => 'manageJob', 'status'=>4)); ?></li>
            </ul>							               
            <!-- end left menu -->
        </div>
        <!-- end left col -->
        
        <!-- begin right col -->
        <div class="rightcol_search">  
            <div class="box_corner">
				<div class="dblue_bg_title"><strong>
				<?php if(isset($this->params['named']['status'])){
					if($this->params['named']['status'] == 0){
						echo __('Việc làm đăng tuyển chờ duyệt');
					}
					if($this->params['named']['status'] == 3){
						echo __('Việc làm đã chỉnh sửa chờ duyệt');
					}
					if($this->params['named']['status'] == 4){
						echo __('Việc làm đã hết hạn');
					}
				} else {
					echo __('Việc làm đã duyệt');
				}
				?>
				</strong></div>
				<div class="dwhite_tablecontent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="30%"><?php echo $this->Paginator->sort('Tiêu đề việc làm','job_title');?></td>
						<td width="15%"><?php echo $this->Paginator->sort('Mã số','job_code');?></td>
						<td width="15%">Số lần xem</td>
						<td width="15%">Hồ sơ ứng tuyển</td>
						<td width="25%"><?php __('Chức năng');?></td>
					  </tr>
					      <?php $status =  array(0 => 'Chưa duyệt', 1 =>'Đạt', 2=>'Không đạt', 3=>'Chờ duyệt lại');?>
						<?php foreach ($jobs as $job):?>
						<tr>
							<td><strong><?php if($job['Job']['status'] == 1)
								echo $this->Html->Link($job['Job']['job_title'], array('controller' => 'jobs', 'action' => 'view', $job['Job']['id']), array('target'=>'_blank')); 
								else {
									echo $job['Job']['job_title'];
								}?><br/></strong>
							<span class="cc_approved"><?php if($job['Job']['status'] == 1 || $job['Job']['status'] == 2) { echo $status[$job['Job']['status']]; }?></span>
							</td>
							<td><?php echo $job['Job']['job_code']; ?></td>
							<td><?php echo $job['JobViewLog'][0]['views']; ?></td>
							<td><?php echo count($job['JobApply']); ?></td>
							<td> 
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
        </div>     
        <!-- end page-->
        <!-- end wrap -->
        <div style="clear: both;">
        <br/>
        </div>
    </div>
</div>