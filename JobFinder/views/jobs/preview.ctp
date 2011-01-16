<br clear="all"/>
<div id="body_content">
   <div class="line_title">
        <?php echo $html->image('../img/home/btxt_job_detail_vn.gif', 
    	    array('alt' => 'Chi tiết công việc, việc làm', 'width' => '300', 'height' => '30'))  ?>
    </div>
    <!-- begin wrap -->
    <div class="wrap_cr_emp">
    <div id="content_cr">
    <div id="right_cr">
    <?php echo $this->Session->flash(); ?>
	    <div class="box_corner">
			<div class="dblue_bg_title"> <strong>Sơ Lược Về Công Ty </strong><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
					array('controller' => 'jobs', 'action' => 'editCompanyInformation',$job['Job']['id'] )); ?></span> </div>
			<div class="white_content">
				<table width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody> <tr> <td>
                        <div class="box_pre">
						    <div style="height: 1%;" class="box_left">
                                <a href="#$">
                                <img width="95" height="49" border="0" alt="Logo nhà tuyển dụng" 
                                    class="logoEmployer" 
                                    src="../img/company/129841.gif"/>
                                </a>
                            </div>
							<div class="box_right">
                                <span class="comp_name"><?php echo $job['Job']['company_name']; ?></span> 
                                <br/> 
                            </div>
                        </div>
					  
					    <div style="" class="box_pre">
						    <div class="box_left">Sơ lược về công ty:</div>
							<div class="box_right"><?php echo $job['Job']['company_profile']; ?> 
                                <br/>
                            </div>
					    </div>
					  
    					<div style="" class="box_pre">
    					    <div class="box_left">Quy mô công ty:</div>
    						<div class="box_right"><?php echo $companySizes[$job['Job']['company_size']]; ?></div>
    					</div>
		  			
                        <div style="" class="box_pre">
                            <div class="box_left">Địa chỉ công ty:</div>
                            <div class="box_right"><?php echo $job['Job']['company_address'].' '.$provinces[$job['Job']['province_id']].' '.$countries[$job['Job']['country_id']] ; ?></div>
                        </div>
                        <div style="" class="box_pre">
                            <div class="box_left">Điện thoại công ty:</div>
                            <div class="box_right"><?php echo $job['Job']['telephone']; ?></div>
                        </div>
                        <div style="" class="box_pre">
                            <div class="box_left">Fax:</div>
                            <div class="box_right"><?php echo $job['Job']['fax']; ?></div>
                        </div>
                        <div style="" class="box_pre">
                            <div class="box_left">Website công ty:</div>
                            <div class="box_right"><?php echo $job['Job']['company_website']; ?></div>
                        </div>
					</td> </tr> </tbody>
                </table>
				   
			</div><!--end xboxcontent-->	
				
		</div><!-- end Company Profile -->

        <!-- begin Job detail -->
		<div class="box_corner">
			<div class="dblue_bg_title"> <strong>Chi Tiết Công Việc </strong><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
					array('controller' => 'jobs', 'action' => 'editJobInformation',$job['Job']['id'] )); ?></span> </div>
                <div class="white_content">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody> <tr> <td>
                            <div style="" class="box_pre">
                                <div class="box_left">Chức danh:</div>
                                <div class="box_right"><strong>
                                    <?php echo $job['Job']['job_title']; ?>
                                </strong></div>
                            </div>                                
                                
                            <div style="" class="box_pre">
                                <div class="box_left">Mô tả Công việc:</div>
                                <div style="padding-bottom: 5px;" class="box_right">
                                    <?php echo $job['Job']['job_description']; ?>
                                </div>
                            </div>                                           
                            
                            <div class="box_pre">
                                <div class="box_left">Yêu cầu chung:</div>
                                <div class="box_right">
                                	<div class="box_pre">
                                		<div>Số năm kinh nghiệm: <?php echo $job['Job']['year_experience']; ?></div>
                                		<div>Cấp bậc tối thiểu: <?php echo $jobLevels[$job['Job']['job_level_id']]; ?></div>
                                		<div>Bằng cấp tối thiểu: <?php echo $degreeLevels[$job['Job']['degree_level_id']]; ?></div>
                                		<div style="width:450px; display:block;" ><?php echo $job['Job']['job_requirement']; ?></div>
                                	</div>
                            	</div>
                            </div>                            
                            
                            <div style="" class="box_pre">
                                <div class="box_left">Loại hình làm việc:</div>
                                <div style="padding-bottom: 5px;" class="box_right">
                                	<?php echo $jobTypes[$job['Job']['job_type_id']] ?>
                                </div>
                            </div>
                            
                            <div style="" class="box_pre">
                                <div class="box_left">Nơi làm việc:</div>
                                <div style="padding-bottom: 5px;" class="box_right">
                                    <?php            			
                                			$string = $job['Job']['job_locations'];
                        					$token = strtok($string, "|");                        
                        					while ($token != false)
                        					{
                                				echo "$provinces[$token]<br />";
                        						$token = strtok("|");
                        			}?>
                                </div>
                            </div>
                            
                            <div style="" class="box_pre">
                                <div class="box_left">Ngành nghề:</div>
                                <div style="padding-bottom: 5px;" class="box_right">
                                	 <?php            			
                                			$string = $job['Job']['job_categories'];
                        					$token = strtok($string, "|");                        
                        					while ($token != false)
                        					{
                                				echo "$jobCategories[$token]<br />";
                        						$token = strtok("|");
                        			}?>
                                </div>
                            </div>
                            
                            <div style="" class="box_pre">
                                <div class="box_left">Mức lương:</div>
                                <div class="box_right">
                                     <table width="100%" cellspacing="0" cellpadding="0" border="0"><tbody>
							        <tr style="">
                                        <td><?php echo $job['Category']['name']; ?></td>
                                    </tr>
							        <tr style="">
                                        <td><?php if($job['Category']['key'] == 'Specified'){
                                        	echo $job['Job']['minimun_salary']. ' - '. $job['Job']['maximun_salary']. ' USD';} 
                                        	?>
                                        </td>
                                    </tr>
                                </tbody></table>
                                </div>
                            </div>
                           
                           <div style="" class="box_pre">
                                <div class="box_left">Hồ sơ trình bày bằng ngôn ngữ:</div>
                                <div style="padding-bottom: 5px;" class="box_right">
                                	<?php echo $languages[$job['Job']['application_language']] ?>
                                </div>
                            </div>
                        </td> </tr> </tbody>
                    </table>
				</div><!--end xboxcontent-->
            </div><!-- end Job detail -->
            
        <div class="box_corner">
			<div class="dblue_bg_title"> <strong>Kỹ Năng Yêu Cầu </strong><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
					array('controller' => 'jobs', 'action' => 'modifySkill',$job['Job']['id'] )); ?></span> </div>
                <div class="white_content">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody> <tr> <td>    
            			   <div class="box_pre">
                                <div class="box_left">Yêu cầu kỹ năng:</div>
                                <div class="box_right">
                                	<div class="box_pre">
	                                	<?php if(empty($job['JobSkill'])){ echo __('Chưa có thông tin về kỹ năng yêu cầu'); }?>
										<?php foreach ($job['JobSkill'] as $jobSkill):?>
										<div><?php echo $skills[$jobSkill['skill_id']]; ?></div>
										<div><?php echo $proficiencies[$jobSkill['proficiency']]; ?></div>
										<?php if(!empty($jobSkill['year_use'])): ?>
										<div><?php echo $jobSkill['year_use']. ' năm'; ?></div>
										<?php endif;?>
										<?php if(!empty($jobSkill['description'])): ?>
										<div>Mô tả: <?php echo $jobSkill['description']; ?></div>
										<?php endif;?>
										<?php endforeach;?>
                                	</div>
                            	</div>
                            </div>
            	</td> </tr> </tbody>
                    </table>
				</div>
            </div>
        
        <div class="box_corner">
			<div class="dblue_bg_title"> <strong>Thông Tin Liên Hệ </strong><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
					array('controller' => 'jobs', 'action' => 'editJobContact',$job['Job']['id'] )); ?></span></div>
                <div class="white_content">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody> <tr> <td>    
            			<div style="" class="box_pre">
						    <div class="box_left">Tên người liên hệ:</div>
							<div class="box_right"><?php echo $job['Job']['contact_name']; ?> 
                                <br/>
                            </div>
					    </div>					  
    					<div style="" class="box_pre">
    					    <div class="box_left">Chức vụ:</div>
    						<div class="box_right"><?php echo $job['Job']['contact_position']; ?></div>
    					</div>
                        <div style="" class="box_pre">
                            <div class="box_left">Số điện thoại:</div>
                            <div class="box_right"><?php echo $job['Job']['mobile']; ?></div>
                        </div>
                        <div style="" class="box_pre">
                            <div class="box_left">Địa chỉ Email nhận hồ sơ:</div>
                            <div class="box_right"><?php echo $job['Job']['email']; ?></div>
                        </div>
            	</td> </tr> </tbody>
                    </table>
				</div>
            </div>
        
        <div style="height: 1%;">
    	        <div class="pos_btn">
                    <?php echo $this->Html->link($html->tag('span', 'Trở về'), 
                            array('controller'=> 'employers', 'action' => 'index'),array('escape' => false, 'class'=>'button')); ?>
                </div>
       	
        </div>     <!-- end page-->
        <!-- end wrap -->
        <div style="clear: both;">
        <br/>
        </div>
        </div>
    </div>
</div>
</div>

