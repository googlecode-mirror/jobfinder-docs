<div class="wrap_cr">
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/create_resume_tit_vn.gif" />
        
    <!-- begin content -->
    <div id="content_cr">
    <?php echo $this->Form->create('Resume',array('action'=>'editTargetJob'));?>
        <!-- begin right col -->
        <div id="right_cr">
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Công việc mong muốn</strong></div>
                <div class="white_content">
                    <table width="100%" border="0"><tbody><tr><td>
                        <div style="position: relative;">
                        <div class="form_field">
                        	<?php echo $this->Form->input('ResumeTargetJob.id');?>
                            <?php echo $this->Form->input('ResumeTargetJob.resume_id', array('type'=>'hidden', 
                                    'div'=>false,'value' => $this->Session->read('resumeID'),'error'=>array('wrap'=>'span'))); ?>                               
                            <p>
                                <label class="labels"><span class="require">*</span> Vị trí mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_title', array('label'=>false,
                                        'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Cấp bậc mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_level_id', array('label'=>false, 
                                        'class'=>'field_list field_list_w', 'div'=>false,
                                        'empty' => 'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>                              
                            </p> 
                            <p>
                                <label class="labels"><span class="require">*</span> Mục tiêu nghề nghiệp: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.career_objective', array('label'=>false,
                                        'class'=>'form_field text_area', 'div'=>false,'rows'=> 5, 'style'=>'width: 325px','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                            	<br/>
                                <label class="labels">Mức lương hiện tại (USD): </label>
                                <?php echo $this->Form->input('ResumeTargetJob.current_salary', array('label'=>false,
                                        'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>                                
                            </p>
                            <p>
                            	<br/>
                                <label class="labels">Mức lương mong muốn (USD): </label>
                                <?php echo $this->Form->input('ResumeTargetJob.desired_salary', array('label'=>false,
                                        'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>                                
                            </p>
                            
                            <div class="line_dotted"></div>
                            
                            <p style="margin-bottom:75px;">
                                <label class="labels"><span class="require">*</span> Loại hình công việc: </label>                               
                                <?php echo $this->Form->input('ResumeTargetJob.job_types', array('label'=> false,
                                        'class'=>'field', 'div'=>false,
                                        'type' => 'select', 'multiple' => true,'error'=>array('wrap'=>'span'))); ?>&nbsp;                        
                            	
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Quy mô công ty: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.company_size', array('label'=> false,
                                        'class'=>'field_list field_list_w', 'div'=>false,
                                        'empty'=>'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>                             
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Nơi làm việc mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_locations', array('label'=> false,
                                        'class'=>'field', 'div'=>false, 'size'=>'6',
                                        'type' => 'select', 'multiple' => true,'error'=>array('wrap'=>'span'))); ?>&nbsp;
                            </p>
                            <p>
                            	<br/>
                                <label class="labels"><span class="require">*</span> Ngành nghề mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_categories', array('label'=> false,
                                        'class'=>'field', 'div'=>false,'size'=>'6',
                                        'type' => 'select', 'multiple' => true,'error'=>array('wrap'=>'span'))); ?>&nbsp;                                                         
                            </p>
                            <p>
                            	<br/>   
                                <label class="labels">Bạn có thể đổi chỗ ở vì yêu cầu công việc ?</label> 
                                <?php echo $this->Form->Input('ResumeTargetJob.can_relocate',array('options'=> array(1 => 'Có', 0 => 'Không'),'label'=> false,
                                        'class'=>'field_list', 'div'=>false,'empty'=>'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                            	<br/>
                                <label class="labels">Bạn có thể đi công tác ?</label> 
                                <?php echo $this->Form->Input('ResumeTargetJob.can_travel',array('options'=> array(1 => 'Có', 0 => 'Không'),'label'=> false,
                                        'class'=>'field_list', 'div'=>false,'empty'=>'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p style="font-style:italic;"> 
                            	<br/>
                            	Hướng dẫn: Nhấn giữ Ctrl để chọn nhiều mục.
                            </p>                       
                        </div>
                        </div>
                    </td></tr></tbody>
                    </table>                
                </div>
            </div>       
            
            <div style="text-align: right;">
                <?php echo $this->Html->link(__('Trở lại', true), array('action' => 'preview', $this->Session->read('resumeID') ));?>
                <?php echo $this->Form->submit('Lưu', array('div' => false, 'class'=>'btn_cont' ));?>               
            </div>
            
        </div>
    </div>
</div>