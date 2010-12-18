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
        	<h2>HỒ SƠ ỨNG VIÊN</h2>        
            <div class="box_corner">
			<div class="dblue_bg_title"><strong>Thông tin đơn ứng tuyển</strong></div>
			<div class="white_content">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody> <tr> <td>
					    <div style="" class="box_pre">
						    <div class="box_left">Họ tên ứng viên:</div>
							<div class="box_right"><?php echo $jobApply['Jobseeker']['last_name'].' '.$jobApply['Jobseeker']['first_name']; ?> 
                                <br/>
                            </div>
					    </div>
					  
    					<div style="" class="box_pre">
    					    <div class="box_left">Chức danh ứng tuyển:</div>
    						<div class="box_right"><?php echo $jobApply['Job']['job_title']; ?></div>
    					</div>
		  			
                        <div style="" class="box_pre">
                            <div class="box_left">Tiêu đề:</div>
                            <div class="box_right"><?php echo $jobApply['JobApply']['subject']; ?></div>
                        </div>
                        <div style="" class="box_pre">
                            <div class="box_left">Thư giới thiệu:</div>
                            <div class="box_right"><?php echo $jobApply['JobApply']['cover_letter']; ?></div>
                        </div>
                        <div style="" class="box_pre">
                            <div class="box_left">Hồ sơ đính kèm:</div>
                            <div class="box_right"><strong><?php echo $this->Html->link($jobApply['Resume']['resume_title'], array('action' => 'viewResume', $jobApply['JobApply']['resume_id'])); ?></strong></div>
                        </div>
					</td> </tr> </tbody>
                </table>
				   
			</div>	
			</div>
            <br/>
            <div style="text-align: right;">
    	   	<a href="#" onclick="window.close()">Đóng</a>
    		</div>
        </div>
    </div>
</div>
