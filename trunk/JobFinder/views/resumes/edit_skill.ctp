
<div class="wrap_cr">
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/btxt_edit_resume_vn.gif" />
        
    <!-- begin content -->
    <div id="content_cr">
    <?php echo $this->Form->create('Resume');?>
        <!-- begin right col -->
        <div id="right_cr">
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"></b>
                    <b class="xb2 blue_curve blue_title"></b>
                    <b class="xb3 blue_curve blue_title"></b>
                </b>
                
                <div class="blue_bg_title"><strong>Kỹ năng</strong></div>
                <div class="white_content">
                    <table width="100%" border="0"><tbody><tr><td>
                        <div style="position: relative;">
                        <div class="form_field">                            
                            <?php echo $this->Form->input('ResumeSkill.id', array('type'=>'hidden')); ?>                                                                    
                            <p>
                                <label class="labels"><span class="require">*</span> Nhóm kỹ năng: </label>
                                <?php echo $this->Form->input('Skill.skill_group_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...', 'id'=>'skillGroups')); ?>                               
                            </p> 
                            <p>
                                <label class="labels"><span class="require">*</span> Kỹ năng: </label>
                                <?php echo $this->Form->input('ResumeSkill.skill_id', array('label'=>false, 
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...', 'id'=>'skills' )); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Mô tả: </label>
                                <?php echo $this->Form->input('ResumeSkill.description', array('label'=>false,
                                    'class'=>'form_field text_area', 'div'=>false,'rows'=> 5, 
                                    'style'=>'width: 325px')); ?>                                 
                            </p>
                            <p>
                            	<br/>
                                <label class="labels"><span class="require">*</span> Trình độ: </label>
                                <?php echo $this->Form->input('ResumeSkill.proficiency', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false,
                                        'empty' => 'Vui lòng chọn...')); ?>
                            </p>
                            <p>
                            	<br/>
                                <label class="labels"><span class="require">*</span> Số năm sử dụng: </label>
                                <?php echo $this->Form->input('ResumeSkill.year_use', array('label'=>false,
                                        'class'=>'field', 'div'=>false,)); ?>
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
                <?php echo $this->Form->submit('Lưu', array('class'=>'btn_cont','div'=>false));?>            
            </div>
            
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"></b>
                    <b class="xb2 blue_curve blue_title"></b>
                    <b class="xb3 blue_curve blue_title"></b>
                </b>
				<div class="blue_bg_title"><strong>Kỹ năng</strong></div>
				<div class="white_content1" id="divContent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="40%"><?php echo ('Tên kỹ năng ');?></td>
                        <td width="40%"><?php echo ('Trình độ ');?></td>
						<td width="30%"><?php echo ('Chỉnh sửa ');?></td>
					  </tr>
					   <?php foreach ($resumeSkills as $resumeSkill):?>
						<tr>
							<td><?php echo $listSkills[$resumeSkill['ResumeSkill']['skill_id']]; ?>&nbsp;</td>
							<td><?php echo $proficiencies[$resumeSkill['ResumeSkill']['proficiency']]; ?>&nbsp;</td>
							<td><?php echo $this->Html->link(__('Sửa', true), array('action' => 'editSkill', $resumeSkill['ResumeSkill']['id'])); ?>
							<?php echo $this->Html->link(__('Xóa', true), array('action' => 'deleteSkill', $resumeSkill['ResumeSkill']['id']), null, sprintf(__('Bạn có chắc muốn xóa kỹ năng %s?', true), $listSkills[$resumeSkill['ResumeSkill']['skill_id']])); ?>
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
            
           <?php echo $ajax->observeField('skillGroups',array('url'=>'getSkills','update'=>'skills'));?>
            
            <div style="text-align: right;">                
                <?php echo $this->Html->link(__('Trở lại', true), array('action' => 'saveTargetJob'));?>
                <?php if(!empty($resumeSkills)){ echo $this->Html->link(__('Hoàn tất', true), 
                        array('action' => 'view',$this->Session->read('resumeID'))); } ?>
            
            </div>
            
        </div>
    </div>
</div>       