<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr">
        <!-- begin content -->
        <div id="content_cr">
		<?php echo $form->create('Jobseeker', array('class'=>'form_field')); ?>
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"><!-- --></b>
                    <b class="xb2 blue_curve blue_title"><!-- --></b>
                    <b class="xb3 blue_curve blue_title"><!-- --></b>
                </b>
                <div class="blue_bg_title"><strong>Nộp Đơn Ứng Tuyển</strong></div>
                <div class="white_content">
                    <table><tr><td>
                    <?php echo $this->Form->input('JobApply.jobseeker_id', array('label'=>false, 'type'=> 'hidden', 'value'=> $this->Session->read('Jobseeker.Jobseeker.id'))); ?>
					<?php echo $this->Form->input('JobApply.job_id', array('label'=>false,'type'=> 'hidden', 'value'=> $job['Job']['id'])); ?>
                    <p>
                		<label>Chức danh:</label> 
                		<span class="text"><?php echo $job['Job']['job_title']; ?></span>
                	</p>
                	<p>
                		<label>Công ty ứng tuyển:</label> 
                		<span class="text"><?php echo $job['Employer']['company_name']; ?></span>
                	</p>
                	<p>
                		<label><span class="require">*</span> Tiêu đề hồ sơ:</label> 
                		<?php echo $this->Form->input('JobApply.subject',array('label'=>false,'class'=>'field','div'=>false)); ?>
                	</p>
                	<p>
                		<label><span class="require">*</span> Thư giới thiệu:</label> 
                		<?php echo $this->Form->input('JobApply.cover_letter',array('label'=>false,'class'=>'field','div'=>false,'rows'=>10)); ?>
                	</p>
                	<p>
                		<br/>
                		<label><span class="require">*</span> Hồ sơ đính kèm:</label> 
                		<?php echo $this->Form->input('JobApply.resume_id', array('label'=>false, 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
                	</p>
					</td></tr>	                     
                    </table>
                </div>
                <b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb1 blue_top"><!-- --></b>
                </b>
            </div>
            <!-- end Log In Information -->
            <div style="text-align: right;">
    	   <?php echo $this->Form->submit('Ứng tuyển',array('class'=>'btn_cont','div'=>false)); ?>
    	   <?php echo $this->Html->link(__('Hủy', true), array('action' => 'index','div'=>false)); ?>
    	</div>
    </div>
</div>
</div>

