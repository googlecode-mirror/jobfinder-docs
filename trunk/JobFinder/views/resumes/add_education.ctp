<div class="wrap_cr">
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/create_resume_tit_vn.gif" />
    <!-- begin content -->
    <div id="content_cr">
        <!-- begin right col -->
        <div id="right_cr">
		<?php echo $this->Form->create('Resume');?>
            <div class="box_corner">
            <b class="xtop">
                <b class="xb1 blue_top"></b>
                <b class="xb2 blue_curve blue_title"></b>
                <b class="xb3 blue_curve blue_title"></b>
            </b>
            <div class="blue_bg_title"><strong>Trình độ học vấn</strong></div>
            <div class="white_content">
                <table width="100%" border="0"><tbody><tr>
                    <td>
                        <div style="position: relative;">
                            <div class="form_field">                                                                   
                                <?php echo $this->Form->input('ResumeEducation.resume_id', array('label'=> false,
                                        'type'=>'hidden', 'div'=>false, 
                                        'value' => $this->Session->read('resumeID'))); ?>                                
                                <p>
                                    <label class="labels"><span class="require">*</span> Bằng cấp chuyên môn:</label>
                                    <?php echo $this->Form->input('ResumeEducation.degree_level_id', array('label'=>false,
                                            'class'=>'field_list field_list_w', 'div'=>false,
                                            'empty' => 'Vui lòng chọn...')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Trường:</label>
                                    <?php echo $this->Form->input('ResumeEducation.program', array('label'=>false,
                                            'class'=>'field', 'div'=>false,)); ?>
                                </p> 
                                <p>
                                    <label class="labels"><span class="require">*</span> Chuyên ngành:</label>
                                    <?php echo $this->Form->input('ResumeEducation.major', array('label'=>false,
                                            'class'=>'field', 'div'=>false,)); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Quốc gia:</label>
                                    <?php echo $this->Form->input('ResumeEducation.country_id', array('label'=>false,
                                            'class'=>'field_list field_list_w', 'div'=>false, 
                                            'empty' => 'Vui lòng chọn...')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Ngày bắt đầu:</label>    
                                    <?php echo $this->Form->input('ResumeEducation.start_date', array('label'=>false, 'div'=>false, 
                                        'class'=>'field_list','separator'=>false, 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                        'monthNames' => false, 'empty' => '...')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Ngày kết thúc:</label>    
                                    <?php echo $this->Form->input('ResumeEducation.end_date', array('label'=>false, 'div'=>false, 
                                        'class'=>'field_list','separator'=>false, 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                        'monthNames' => false, 'empty' => 'Hiện tại')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Thông tin liên quan:</label> 
                                    <?php echo $this->Form->input('ResumeEducation.related_information', array('label'=>false,
                                            'class'=>'form_field text_area', 'div'=>false, 
                                            'rows'=> 5, 'style'=>'width: 325px')); ?>
                                </p>                             
                            </div>
                        </div>
                    </td></tr></tbody>
                </table>
            </div>
            <!--end xboxcontent-->
            <b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
            </b>
            </div>
            <div style="text-align: right;">
                <?php echo $this->Form->submit('Thêm', array('class'=>'btn_cont','div'=>false));?>            
            </div>
            
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"></b>
                    <b class="xb2 blue_curve blue_title"></b>
                    <b class="xb3 blue_curve blue_title"></b>
                </b>
				<div class="blue_bg_title"><strong>Quá trình học tập</strong></div>
				<div class="white_content1" id="divContent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="30%"><?php echo ('Trường ');?></td>
                        <td width="30%"><?php echo ('Chuyên ngành ');?></td>
						<td width="20%"><?php echo ('Chỉnh sửa ');?></td>
					  </tr>
					  <?php foreach ($resumeEducations as $resumeEducation):?>
						<tr>
							<td><?php echo $resumeEducation['ResumeEducation']['program']; ?>&nbsp;</td>
							<td><?php echo $resumeEducation['ResumeEducation']['major']; ?>&nbsp;</td>
							<td><?php echo $this->Html->link(__('Sửa', true), array('action' => 'editEducation', $resumeEducation['ResumeEducation']['id'])); ?>
								<?php echo $this->Html->link(__('Xóa', true), array('action' => 'deleteEducation', $resumeEducation['ResumeEducation']['id']), null, sprintf(__('Bạn có chắc muốn xóa %s?', true), $resumeEducation['ResumeEducation']['program'])); ?>
							</td>
						</tr>
						<?php endforeach; ?>
					  </tbody></table>					
                </div>
                <!--end xboxcontent-->
				<b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
                </b>				
			</div>
            
                    

            <div style="text-align: right;">
                <?php if($this->Session->read('years_exp') == 0) { 
            		echo $this->Html->link(__('Trở lại', true), array('action' => 'modifyResume',
                        $this->Session->read('resumeID')));		
            	}
            	else {
            		echo $this->Html->link(__('Trở lại', true), array('action' => 'addJobExp'));
            	}?>
            
                <?php if(!empty($resumeEducations))
                    { echo $this->Html->link(__('Tiếp tục', true),                         
                    array('action' => 'saveTargetJob'),array('div'=>false)); } ?>
            </div>
        </div>
        <!-- end right col -->

    </div>
    <!-- end content -->
</div>