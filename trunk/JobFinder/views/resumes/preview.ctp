<?php
	$gender =  array(0 => 'Nam', 1 =>'Nữ');
	$yesno = array(0=> 'Không', 1=> 'Có');
	$martial =  array(0 => 'Độc thân', 1 =>'Đã kết hôn');
	$privacy =  array(0 => 'Hồ sơ ẩn', 1 =>'Cho phép tìm kiếm');
?>
<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr">
        <!-- begin content -->
        <div id="content_cr">
        <?php echo $this->Session->flash(); ?>
            <!-- begin Resume Information -->
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Thông Tin Hồ Sơ </strong><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
					array('controller' => 'resumes', 'action' => 'editResume',$resume['Resume']['id'] )); ?></span></div>
                <div class="white_content">
                    <table width="100%">					  
                    	<tr class="field_cp">
							<td width="22%"><strong>Tiêu đề hồ sơ:</strong></td>
					    	<td width="78%"><?php echo $resume['Resume']['resume_title']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
					    	<td><strong>Tình trạng hồ sơ:</strong></td>
					    	<td><?php echo $privacy[$resume['Resume']['privacy_status']]; ?></td>
				      	</tr> 
                    </table>
                </div>
            </div>
            <!-- end Resume Information -->
            
            <!-- begin Personal Information -->
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Thông Tin Cá Nhân </strong><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
					array('controller' => 'resumes', 'action' => 'editPersonalInformation',$resume['Resume']['id'] )); ?></span></div>
                <div class="white_content">
                    <table class="table_info">
                    	<tr class="field_cp">
							<td width="22%" rowspan="7" valign="top" align="center">
								<?php echo $html->image('../img/home/js_photo.gif', 
    	                	  array('alt' => '', 'width' => '84', 'height' => '113'))  ?>
							</td>
							<td width="25%" class="txt_tilte_lv2">
								<strong><?php echo $resume['Jobseeker']['last_name'].' '. $resume['Jobseeker']['first_name']; ?></strong></td>
							<td width="53%"><?php echo $resume['Resume']['address']; ?></td>
						</tr>
					  	<tr class="field_cp">
							<td><strong><?php echo $nationalities[$resume['Resume']['nationality']]; ?></strong></td>
							<td><?php echo $resume['Province']['name']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td><?php echo $gender[$resume['Jobseeker']['gender']]; ?> - <?php echo $martial[$resume['Resume']['martial_status']]; ?></td>
							<td><?php echo $resume['Country']['name']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td><?php echo date('d-m-Y', strtotime($resume['Jobseeker']['birthday']));    ?></td>
							<td>&nbsp;</td>
					  	</tr>
					  	<tr class="field_cp">
							<td>&nbsp;</td>
							<td><?php echo $resume['Resume']['email']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td>&nbsp;</td>
							<td><?php echo $resume['Resume']['telephone']; ?> / <?php echo $resume['Resume']['mobile']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
					  	</tr>
                    </table>
                </div>                
            </div>
            <!--end Personal Information-->
            
            <!-- begin Summary -->
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Tóm lược </strong><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
					array('controller' => 'resumes', 'action' => 'editTargetJob',$resume['Resume']['id'] )); ?></span></div>
                <div class="white_content">
                    <table class="table_info">
                   		<tr>
							<td width="21%" class="txt_tilte_lv2" style="text-align:right">Công Việc Mong Muốn</td>
							<td width="1%">&nbsp;</td>
							<td width="16%">Vị trí:</td>
							<td width="2%">&nbsp;</td>
							<td width="60%"><strong><?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['job_title']; }?></strong></td>
						</tr>
						  <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Cấp bậc:</td>
							<td>&nbsp;</td>
							<td><strong><?php  if(!empty($resume['ResumeTargetJob'])) { echo $jobLevels[$resume['ResumeTargetJob'][0]['job_level_id']]; }?></strong></td>
						  </tr>
						  <tr>
							<td align="right" valign="top">&nbsp;</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">Loại hình công việc:</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">
								<?php
								 if(!empty($resume['ResumeTargetJob'])) {           			
                                	$string = $resume['ResumeTargetJob'][0]['job_types'];
                        			$token = strtok($string, "|");                        
                        			while ($token != false)
                        			{
                                		echo "<strong>$jobTypes[$token]</strong><br />";
                        				$token = strtok("|");
                        			}
                        		}?>
							</td>
						  </tr>
						  <tr>
							<td >&nbsp;</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">Có thể đổi chỗ ở vì yêu cầu công việc:</td>
							<td valign="top">&nbsp;</td>
							<td valign="top"><?php if(!empty($resume['ResumeTargetJob'])) { echo $yesno[$resume['ResumeTargetJob'][0]['can_relocate']]; }?></td>
						  </tr>
			
						  <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Có thể đi công tác:</td>
							<td>&nbsp;</td>
							<td><?php if(!empty($resume['ResumeTargetJob'])) { echo $yesno[$resume['ResumeTargetJob'][0]['can_travel']]; }?></td>
						  </tr>
						  <tr>
			
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Quy mô công ty:</td>
							<td>&nbsp;</td>
							<td><?php if(!empty($resume['ResumeTargetJob'])) { echo $companySizes[$resume['ResumeTargetJob'][0]['company_size']]; }?></td>
						 </tr>
						 <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Ngành nghề:</td>
							<td>&nbsp;</td>
							<td>
								<?php
								 if(!empty($resume['ResumeTargetJob'])) {            			
                                	$string = $resume['ResumeTargetJob'][0]['job_categories'];
                        			$token = strtok($string, "|");                        
                        			while ($token != false)
                        			{
                                		echo "- $jobCategories[$token]<br />";
                        				$token = strtok("|");
                        			}
                        		}?>
							</td>
						  </tr>
						  <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Nơi làm việc:</td>
							<td>&nbsp;</td>
							<td>
								<?php        
								 if(!empty($resume['ResumeTargetJob'])) {    			
                                	$string = $resume['ResumeTargetJob'][0]['job_locations'];
                        			$token = strtok($string, "|");                        
                        			while ($token != false)
                        			{
                                		echo "- $provinces[$token]<br />";
                        				$token = strtok("|");
                        			}
                        		}?>
							</td>
						 </tr>
						  <tr><td colspan="5">&nbsp;</td></tr>
  
						  <tr>
							<td align="right" valign="top" class="txt_tilte_lv2" style="text-align:right">Mục Tiêu Nghề Nghiệp</td>
							<td>&nbsp;</td>
							<td colspan="3"><?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['career_objective']; }?></td>
						 </tr>
						 <tr>
							<td colspan="5">&nbsp;</td>
			
						 </tr>
						  <tr>
							<td class="txt_tilte_lv2" style="text-align:right">Mức Lương</td>
							<td>&nbsp;</td>
							<td>Mức lương hiện tại:</td>
							<td>&nbsp;</td>
							<td><?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['current_salary']; }?></td>
			
						 </tr>
						  <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Mức lương mong muốn:</td>
							<td>&nbsp;</td>
							<td><?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['desired_salary']; }?></td>
						 </tr>
						  <tr>
							<td align="right" >&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><div style="text-align:right; margin-bottom:10px">[ <a  class="link" href="#">Trở về đầu</a> ]</div></td>
						 </tr>

                    </table>
                </div>                
            </div>
            <!--end Summary-->
            
            <!-- begin Resume Information -->
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Hồ sơ</strong></div>
                <div class="white_content">
                    <table class="table_info">
                   		<tr>
							<td width="22%" valign="top">
								<p class="txt_tilte_lv2">Kinh Nghiệm Làm Việc</p>
								<p><strong>Tổng cộng: <?php echo $resume['Resume']['years_exp'];?> năm</strong></p>
								<p>[<?php echo $html->link('Cập nhật số năm kinh nghiệm', array('controller' => 'resumes', 'action' => 'editWorkExp',$resume['Resume']['id'] )); ?>]</p>
								<p><?php if($resume['Resume']['years_exp']>0){ echo '['.$html->link('Cập nhật quá trình làm việc', array('controller' => 'resumes', 'action' => 'modifyJobExp',$resume['Resume']['id'] )).']'; }?></p>
							</td>
							<td width="78%">
								<div>
								<?php if(empty($resume['ResumeJobExp'])){ echo __('Bạn chưa cung cấp thông tin về kinh nghiệm làm việc.'); }?>
								<?php foreach ($resume['ResumeJobExp'] as $resumeJobExp):?>
								<p class="txt_tilte_lv2"><?php echo $resumeJobExp['job_title'];?></p>
								<p><strong>
									<?php echo $resumeJobExp['company_name'] .' - ' .$jobCategories[$resumeJobExp['job_category_id']] ;?>
								</strong></p>
								<p><strong>
									<?php echo $jobLevels[$resumeJobExp['job_level_id']] .' - ' . 'Tháng ' .date('m Y', strtotime($resumeJobExp['start_date'])) .' đến '; if($resumeJobExp['end_date'] == null){ echo __('Hiện tại'); } else { echo date('m Y', strtotime($resumeJobExp['end_date'])); };?>
								</strong></p>
								<p><?php echo $countries[$resumeJobExp['country_id']] .' - ' .$provinces[$resumeJobExp['province_id']] ;?></p>
								<dl>
									<dd>Thông tin liên quan:</dd>
									<dd><?php echo $resumeJobExp['responsibilities_achievements']; ?></dd>
								</dl>
								</div>	
								<?php endforeach;?>					
						</td>
					  </tr>
					</table>
					<!-- end Work experience-->
					
					<div class="line_dotted"></div>
					
					<!--Education-->
					<table class="table_info">
					  <tr class="field_cp">
						<td width="22%" valign="top">
								<p class="txt_tilte_lv2">Học Vấn</p>
								<p>[<?php echo $html->link('Chỉnh sửa', array('controller' => 'resumes', 'action' => 'modifyEducation',$resume['Resume']['id'] )); ?>]</p>
						</td>
						<td width="78%">
							<?php if(empty($resume['ResumeEducation'])){ echo __('Bạn chưa cung cấp thông tin về trường đã học.'); }?>
							<?php foreach ($resume['ResumeEducation'] as $resumeEducation):?>
							<div>
							<p class="txt_tilte_lv2"><?php echo $resumeEducation['program'];?></p>
							<p><strong><?php echo $resumeEducation['major'];?></strong></p>
							<p><strong><?php echo $degreeLevels[$resumeEducation['degree_level_id']];?> </strong></p>
							<p><strong><?php echo 'Tháng ' .date('m Y', strtotime($resumeEducation['start_date'])) .' đến '; if($resumeEducation['end_date'] == null){ echo __('Hiện tại'); } else { echo date('m Y', strtotime($resumeEducation['end_date'])); };?></strong></p>
							<p><?php echo $countries[$resumeEducation['country_id']]; ?></p>
							<dl>
								<dd>Thông tin liên quan:</dd>
								<dd><?php echo $resumeEducation['related_information']; ?></dd>
							</dl>
							</div>
							<?php endforeach;?>		
						</td>
					  </tr>
					</table>
					<!-- end Education-->
					
					<div class="line_dotted"></div>					
					
					<!--Skill-->

					<table class="table_info">
					  <tr class="field_cp">
						<td width="22%" valign="top">
							<p class="txt_tilte_lv2">Kỹ Năng</p>
							<p>[<?php echo $html->link('Chỉnh sửa', array('controller' => 'resumes', 'action' => 'modifySkill',$resume['Resume']['id'] )); ?>]</p>
						</td>
						<td width="78%">
							<?php if(empty($resume['ResumeSkill'])){ echo __('Bạn chưa cung cấp thông tin về kỹ năng.'); }?>
							<?php foreach ($resume['ResumeSkill'] as $resumeSkill):?>
							<div>
								<p class="txt_tilte_lv2"><?php echo $skills[$resumeSkill['skill_id']];?></p>
								<p><?php echo $proficiencies[$resumeSkill['proficiency']];?></p>
								<?php if(!empty($resumeSkill['year_use'])): ?>
								<p><?php echo $resumeSkill['year_use']. ' năm';?></p>
								<?php endif;?>
								<?php if(!empty($resumeSkill['description'])): ?>
								<p>Mô tả: <?php echo $resumeSkill['description'];?></p>
								<?php endif;?>
							</div>
							<?php endforeach;?>
						</td>
					  </tr>
					  <tr>
					  	<td width="22%" valign="top">
						</td>
						<td width="78%">
							<div style="text-align:right; margin-bottom:10px">[ <a  class="link" href="#">Trở về đầu</a> ]</div></td>
						</tr>
					</table>
                </div>                
            </div>
            <!--end Summary-->
        </div>
        <div style="text-align: right;">
    	   <a href="#" onclick="window.close()">Đóng</a>
    	</div>
    </div>
</div>