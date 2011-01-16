<div class="wrap_cr">
      	<?php echo $this->Session->flash(); ?>
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/create_resume_tit_vn.gif" />
        
    <!-- begin content -->
    <div id="content_cr">
    	<?php echo $this->Form->create('Resume');?>
        <!-- begin right col -->
        <div id="right_cr">
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Kỹ năng</strong></div>
                <div class="white_content">
                    <table width="100%" border="0"><tbody><tr><td>
                        <div style="position: relative;">
                        <div class="form_field">
                            <?php echo $this->Form->input('ResumeSkill.resume_id', array('type'=>'hidden','div'=>false,'value' => $this->Session->read('resumeID'))); ?>                                
                            <p>
                                <label class="labels"><span class="require">*</span> Nhóm kỹ năng: </label>
                                <?php echo $this->Form->input('Skill.skill_group_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...', 'id'=>'skillGroups','error'=>array('wrap'=>'span'))); ?>                               
                            </p> 
                            <p>
                                <label class="labels"><span class="require">*</span> Kỹ năng: </label>
                                <?php echo $this->Form->input('ResumeSkill.skill_id', array('label'=>false, 
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...', 'id'=>'skills','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels">Mô tả: </label>
                                <?php echo $this->Form->input('ResumeSkill.description', array('label'=>false,
                                    'class'=>'form_field text_area', 'div'=>false,'rows'=> 5, 
                                    'style'=>'width: 325px','error'=>array('wrap'=>'span'))); ?>                                 
                            </p>
                            <p>
                            	<br/>
                                <label class="labels"><span class="require">*</span> Trình độ: </label>
                                <?php echo $this->Form->input('ResumeSkill.proficiency', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false,
                                        'empty' => 'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                            	<br/>
                                <label class="labels">Số năm sử dụng: </label>
                                <?php echo $this->Form->input('ResumeSkill.year_use', array('label'=>false,
                                        'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>
                            </p>                            
                        </div>
                        </div>
                    </td></tr></tbody>
                    </table>                
                </div>
            </div>
            <div style="text-align: right;">
                <?php echo $this->Form->submit('Thêm', array('class'=>'btn_cont','div'=>false));?>            
            </div>
            
            <div class="box_corner">
				<div class="blue_bg_title"><strong>Kỹ năng</strong></div>
				<div class="white_tablecontent">
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
			</div>
            <?php echo $ajax->observeField('skillGroups',array('url'=>'getSkills','update'=>'skills'));?>
            
            <div style="text-align: right;">
                <?php echo $this->Html->link(__('Trở lại', true), 
                        array('action' => 'saveTargetJob'));?>
                
                <?php if(!empty($resumeSkills)){ echo $this->Html->link(__('Hoàn tất', true), 
                        array('action' => 'view',$this->Session->read('resumeID'))); } ?>
            
            </div>
            
        </div>
    </div>
</div>     