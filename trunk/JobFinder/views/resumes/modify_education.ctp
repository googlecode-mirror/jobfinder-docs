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
                                            'empty' => 'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Trường:</label>
                                    <?php echo $this->Form->input('ResumeEducation.program', array('label'=>false,
                                            'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>
                                </p> 
                                <p>
                                    <label class="labels"><span class="require">*</span> Chuyên ngành:</label>
                                    <?php echo $this->Form->input('ResumeEducation.major', array('label'=>false,
                                            'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Quốc gia:</label>
                                    <?php echo $this->Form->input('ResumeEducation.country_id', array('label'=>false,
                                            'class'=>'field_list field_list_w', 'div'=>false, 
                                            'empty' => 'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Ngày bắt đầu:</label>    
                                    <?php echo $this->Form->input('ResumeEducation.start_date', array('label'=>false, 'div'=>false, 
                                        'class'=>'field_list','separator'=>false, 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                        'monthNames' => false, 'empty' => '...','error'=>array('wrap'=>'span'))); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Ngày kết thúc:</label>    
                                    <?php echo $this->Form->input('ResumeEducation.end_date', array('label'=>false, 'div'=>false, 
                                        'class'=>'field_list','separator'=>false, 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                        'monthNames' => false, 'empty' => 'Hiện tại','error'=>array('wrap'=>'span'))); ?>
                                </p>
                                <p>
                                    <label class="labels">Thông tin liên quan:</label> 
                                    <?php echo $this->Form->input('ResumeEducation.related_information', array('label'=>false,
                                            'class'=>'form_field text_area', 'div'=>false, 
                                            'rows'=> 5, 'style'=>'width: 325px','error'=>array('wrap'=>'span'))); ?>
                                </p>                             
                            </div>
                        </div>
                    </td></tr></tbody>
                </table>
            </div>
            <!--end xboxcontent-->
            </div>
            <div style="text-align: right;">
                <?php echo $this->Form->submit('Thêm & Lưu', array('class'=>'btn_cont','div'=>false));?>            
            </div>
            
            <div class="box_corner">
				<div class="blue_bg_title"><strong>Quá trình học tập</strong></div>
				<div class="white_tablecontent">
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
							<td><?php echo $this->Html->link(__('Sửa', true), array('action' => 'editEducation',$resumeEducation['ResumeEducation']['id'],true)); ?>
								<?php echo $this->Html->link(__('Xóa', true), array('action' => 'deleteEducation',$resumeEducation['ResumeEducation']['id'],true), null, sprintf(__('Bạn có chắc muốn xóa %s?', true), $resumeEducation['ResumeEducation']['program'])); ?>
							</td>
						</tr>
						<?php endforeach; ?>
					  </tbody></table>					
                </div>
                <!--end xboxcontent-->			
			</div>
            <div style="text-align: right;">
                <?php echo $this->Html->link(__('Trở lại', true), array('action' => 'preview',
                        $this->Session->read('resumeID')));?>
            </div>
        </div>
        <!-- end right col -->
    </div>
    <!-- end content -->
</div>