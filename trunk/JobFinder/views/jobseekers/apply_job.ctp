<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr">
        <!-- begin content -->
        <div id="content_cr">
        <?php echo $this->Session->flash(); ?>
		<?php echo $form->create('Jobseeker', array('class'=>'form_field')); ?>
            <div class="box_corner">
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
                		<span class="text"><?php echo $job['Job']['company_name']; ?></span>
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
            </div>
            <!-- end Log In Information -->
            <div style="text-align: right;">
            <?php echo $this->Html->link($html->tag('span', 'Hủy'), array('action' => 'index'),array('escape' => false, 'class'=>'button')); ?>
    	   <?php echo $this->Form->submit('Ứng tuyển',array('class'=>'btn_cont','div'=>false)); ?>
    	</div>
    </div>
</div>
</div>

