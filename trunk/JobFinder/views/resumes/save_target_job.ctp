

<div class="wrap_cr">
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/create_resume_tit_vn.gif" />
        
    <!-- begin content -->
    <div id="content_cr">
    
        <!-- begin right col -->
        <div id="right_cr">
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"></b>
                    <b class="xb2 blue_curve blue_title"></b>
                    <b class="xb3 blue_curve blue_title"></b>
                </b>
                
                <div class="blue_bg_title"><strong>Công việc mong muốn</strong></div>
                <div class="white_content">
                    <table width="100%" border="0"><tbody><tr><td>
                        <div style="position: relative;">
                        <div class="form_field">
                            <?php echo $this->Form->input('ResumeTargetJob.resume_id', array('type'=>'hidden', 
                                    'div'=>false,'value' => $this->Session->read('resumeID'))); ?>                               
                            <p>
                                <label class="labels"><span class="require">*</span> Vị trí mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_title', array('label'=>false,
                                        'class'=>'field', 'div'=>false)); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Cấp bậc mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_level_id', array('label'=>false, 
                                        'class'=>'field_list field_list_w', 'div'=>false,
                                        'empty' => 'Vui lòng chọn...')); ?>                              
                            </p> 
                            <p>
                                <label class="labels"><span class="require">*</span> Mục tiên nghề nghiệp: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.career_objective', array('label'=>false,
                                        'class'=>'form_field text_area', 'div'=>false,'rows'=> 5, 'style'=>'width: 325px')); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Mức lương hiện tại (USD): </label>
                                <?php echo $this->Form->input('ResumeTargetJob.current_salary', array('label'=>false,
                                        'class'=>'field', 'div'=>false)); ?>                                
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Mức lương mong muốn (USD): </label>
                                <?php echo $this->Form->input('ResumeTargetJob.desired_salary', array('label'=>false,
                                        'class'=>'field', 'div'=>false)); ?>                                
                            </p>
                            
                            <div class="line_dotted"></div>
                            
                            <p>
                                <label class="labels"><span class="require">*</span> Loại hình công việc: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_types', array('label'=> false,
                                        'class'=>'check_right', 'div'=>false ,
                                        'type' => 'select', 'multiple' => 'checkbox')); ?>                               
                            </p>
                            
                            <div class="line_dotted"></div>
                            
                            <p>
                                <label class="labels"><span class="require">*</span> Quy mô công ty: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.company_size', array('label'=> false,
                                        'class'=>'field_list field_list_w', 'div'=>false,
                                        'empty'=>'Vui lòng chọn...')); ?>                             
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Nơi làm việc mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_locations', array('label'=> false,
                                        'class'=>'form_check', 'div'=>false,
                                        'type' => 'select', 'multiple' => 'checkbox')); ?>                               
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Ngành nghề mong muốn: </label>
                                <?php echo $this->Form->input('ResumeTargetJob.job_categories', array('label'=> false,
                                        'class'=>'check_right', 'div'=>false,
                                        'type' => 'select', 'multiple' => 'checkbox')); ?>                               
                            </p>
                            <p>
                                <label>Bạn có thể đổi chỗ ở vì yêu cầu công việc ?</label> 
                                <?php echo $this->Form->radio('ResumeTargetJob.can_relocate', 
                                        array(0 => 'Không', 1 => 'Có'), array('legend'=>false)); ?>
                            </p>
                            <p>
                                <label>Bạn có thể đi công tác ?</label> 
                                <?php echo $this->Form->radio('ResumeTargetJob.can_travel', 
                                        array(0 => 'Không', 1 => 'Có'), array('legend'=>false)); ?>
                            </p>
                            
                                                       
                        </div>
                        </div>
                    </td></tr></tbody>
                    </table>                
                </div>
                
                <b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"></b>
                    <b class="xb2 blue_curve blue_bg_bottom"></b>
                    <b class="xb1 blue_top"></b>
                </b>    
            
            </div>       
            
            <div style="text-align: right;">
                <?php echo $this->Html->link(__('Trở lại', true), 
                        array('action' => 'addSkill'));?>
                <?php echo $this->Form->submit('Tiếp tục');?>               
            </div>
            
        </div>
    </div>
</div>




<!--

<div class='container'><?php echo $this->Form->create('Resume');?>
<h2>Công vi?c mong mu?n</h2>
<ul>
	<li><?php echo $this->Form->input('ResumeTargetJob.resume_id', array('type'=>'hidden', 'value' => $this->Session->read('resumeID'))); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_title', array('label'=>'V? trí mong mu?n: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_level_id', array('label'=>'C?p b?c mong mu?n: ', 'empty' => 'Vui lòng ch?n...')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.career_objective', array('label'=>'M?c tiêu ngh? nghi?p: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.current_salary', array('label'=>'M?c luong hi?n t?i (USD): ')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.desired_salary', array('label'=>'M?c luong mong mu?n (USD): ')); ?></li>
</ul>
<ul>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_types', array('label'=> 'Lo?i hình công vi?c: ','type' => 'select', 'multiple' => 'checkbox')); ?></li>
</ul>
<ul>
	<li><?php echo $this->Form->input('ResumeTargetJob.company_size', array('label'=> 'Quy mô công ty: ','empty'=>'Vui lòng ch?n...')); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_locations', array('label'=> 'Noi làm vi?c mong mu?n: ','type' => 'select', 'multiple' => true)); ?></li>
	<li><?php echo $this->Form->input('ResumeTargetJob.job_categories', array('label'=> 'Ngành ngh? mong mu?n: ','type' => 'select', 'multiple' => true)); ?></li>
	<li><label>B?n có th? d?i ch? ? vì yêu c?u công vi?c ?</label> <?php echo $this->Form->radio('ResumeTargetJob.can_relocate', array(0 => 'Không', 1 => 'Có'), array('legend'=>false)); ?></li>
	<li><label>B?n có th? di công tác? ?</label> <?php echo $this->Form->radio('ResumeTargetJob.can_travel', array(0 => 'Không', 1 => 'Có'), array('legend'=>false)); ?></li>
</ul>
<ul>
	<li><?php echo $this->Html->link(__('Tr? l?i', true), array('action' => 'addSkill'));?></li>
	<li><div class="actions"><?php echo $this->Form->submit('Ti?p t?c');?></div></li>
</ul>

</div>
-->