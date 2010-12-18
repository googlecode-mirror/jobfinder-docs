<div id="body_content">
	<!-- begin wrap -->
    <div class="wrap_cr_emp">
    <!-- begin content -->
        <div id="content_cr">
        <div id="right_cr">
        <h2>ĐĂNG TIN TUYỂN DỤNG</h2>
        	<?php echo $this->Form->create('Job', array('class'=>'form_field')); ?>
                <!-- begin Company Information -->
 			    <div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Kỹ Năng Yêu Cầu</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					    <tbody> <tr> <td>
                       	<?php echo $this->Form->input('JobSkill.job_id', array('type'=>'hidden','div'=>false,'value' => $this->Session->read('jobID'))); ?>                                
                            <p>
                                <label><span class="require">*</span> Nhóm kỹ năng: </label>
                                <?php echo $this->Form->input('Skill.skill_group_id', array('label'=>false,'class'=>'field', 'div'=>false, 'empty' => 'Vui lòng chọn...', 'id'=>'skillGroups')); ?>                               
                            </p> 
                            <p>
                                <label><span class="require">*</span> Kỹ năng: </label>
                                <?php echo $this->Form->input('JobSkill.skill_id', array('label'=>false, 'class'=>'field', 'div'=>false, 'empty' => 'Vui lòng chọn...', 'id'=>'skills' )); ?>
                            </p>
                            <p>
                                <label>Mô tả: </label>
                                <?php echo $this->Form->input('JobSkill.description', array('label'=>false,'class'=>'co_pro_area', 'div'=>false,'rows'=> 5, 'style'=>'width: 325px')); ?>                                 
                            </p>
                            <p>
                            	<br/>
                                <label><span class="require">*</span> Trình độ: </label>
                                <?php echo $this->Form->input('JobSkill.proficiency', array('label'=>false,'class'=>'field_list field_list_w', 'div'=>false,'empty' => 'Vui lòng chọn...')); ?>
                            </p>
                            <p>
                            	<br/>
                                <label>Số năm sử dụng: </label>
                                <?php echo $this->Form->input('JobSkill.year_use', array('label'=>false,'class'=>'field', 'div'=>false,)); ?>
                            </p>   
                        </td> </tr> </tbody>
                        </table>
				    </div><!--end xboxcontent-->				
			     </div><!-- end Company Information --> 

			<div class="btn_pos">
				  <div class="btn_bg_emp"><div class="btn_l_emp"></div>
				  	<?php echo $this->Form->submit('Thêm',array('class'=>'btn_c_emp','div'=>false)); ?>
                  	<div class="btn_r_emp"></div>
                  </div>
			</div>
   			<br clear="all" />
			<div class="box_corner">				
			<div class="dblue_bg_title">
				<strong>Kỹ năng</strong>
			</div>
				<div style="text-align: center;" class="dwhite_tablecontent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="40%"><?php echo ('Tên kỹ năng ');?></td>
                        <td width="40%"><?php echo ('Trình độ ');?></td>
						<td width="30%"><?php echo ('Chỉnh sửa ');?></td>
					  </tr>
					  <?php foreach ($jobSkills as $jobSkill):?>
						<tr>
							<td><?php echo $listSkills[$jobSkill['JobSkill']['skill_id']]; ?>&nbsp;</td>
							<td><?php echo $proficiencies[$jobSkill['JobSkill']['proficiency']]; ?>&nbsp;</td>
							<td><?php echo $this->Html->link(__('Sửa', true), array('action' => 'editSkill', $jobSkill['JobSkill']['id'])); ?>
							<?php echo $this->Html->link(__('Xóa', true), array('action' => 'deleteSkill', $jobSkill['JobSkill']['id']), null, sprintf(__('Bạn có chắc muốn xóa kỹ năng %s?', true), $listSkills[$jobSkill['JobSkill']['skill_id']])); ?>
							</td>
						</tr>
						<?php endforeach; ?>
					  </tbody></table>					
                </div>
                <!--end xboxcontent-->		
			</div>
            <?php echo $ajax->observeField('skillGroups',array('url'=>'getSkills','update'=>'skills'));?>
            
            <div style="text-align: right;">
               <?php echo $this->Html->link(__('Trở lại', true), array('action' => 'modifyJob',$this->Session->read('jobID')));?>
               <?php echo $this->Html->link(__('Hoàn tất', true), array('action' => 'preview',$this->Session->read('jobID')));  ?>
            </div>
   </div>
   </div>
   <br clear="all" />
   <!-- end content -->
</div>
<!-- end wrap -->

</div>    