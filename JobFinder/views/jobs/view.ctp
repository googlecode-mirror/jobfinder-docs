<div id="job_nav_sub">
	<div class="job_wrapsubmenu">
		<ul class="job_subnav">
        	<li><?php echo $html->link($html->tag('span', 'Tìm Kiếm Nhanh'), 
					array('controller' => 'jobs', 'action' => 'search'),array('escape' => false)); ?>
			</li>
			<li><?php echo $html->link($html->tag('span', 'Tìm Kiếm Nâng Cao'), 
					array('controller' => 'jobs', 'action' => 'advanceSearch'),array('escape' => false)); ?>
			</li>				
		</ul>	
		<br clear="all"/>
	</div>
    <!-- end submenu -->
</div>
<div class="wrap_search">
	<div class="line_title">
        <img width="300" height="30" alt="Chi tiết công việc, việc làm" 
                src="../img/home/btxt_job_detail_vn.gif"/>
    </div>
    <?php echo $this->Session->flash(); ?>
    <div id="search_contentpage">
    	<!-- begin left col -->
        <div class="leftcol_search">
        	<!-- begin left menu -->
            <h3 class="boxTitle02">CÔNG CỤ</h3>
            <ul class="listType04">
				<li class="icon10"><?php if(strtotime($job['Job']['expired']) > time()){ echo __('Nộp đơn'); } else{
					echo $this->Html->link('Nộp đơn', array('controller'=> 'jobseekers', 'action' => 'applyJob', $job['Job']['id']));
				}?>
				<?php  ?></li>
                <li class="icon03"><?php echo $this->Html->link('Lưu việc làm này', array('controller'=> 'jobs', 'action' => 'saveJob', $job['Job']['id'])); ?></li>
                <li class="icon06"><?php echo $this->Html->link('Tìm kiếm', array('controller'=> 'jobs', 'action' => 'search')); ?></li>
            </ul>							               
            <!-- end left menu -->
        </div>
        <!-- end left col -->
        
        <!-- begin right col -->
        <div class="rightcol_search">
		<!-- begin Company Profile -->
	    <div class="box_corner">
			<div class="blue_bg_title"> <strong>Sơ lược về công ty</strong> </div>
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
			<div class="blue_bg_title"> <strong>Chi Tiết Công Việc</strong> </div>
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
                            
                            <div class="box_pre">
                                <div class="box_left">Yêu cầu kỹ năng:</div>
                                <div class="box_right">
                                	<div class="box_pre">
	                                	<?php if(empty($job['JobSkill'])){ echo __('Chưa có thông tin về kỹ năng yêu cầu'); }?>
										<?php foreach ($job['JobSkill'] as $jobSkill):?>
										<div><?php echo $skills[$jobSkill['skill_id']]; ?></div>
										<div><?php echo $proficiencies[$jobSkill['proficiency']]; ?></div>
										<div><?php echo $jobSkill['year_use']. ' năm'; ?></div>
										<div>Mô tả: <?php echo $jobSkill['description']; ?></div>
										<?php endforeach;?>
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
			<div class="blue_bg_title"> <strong>Thông tin liên hệ</strong> </div>
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
				   
			</div><!--end xboxcontent-->					
		</div>			           
        
            <div style="height: 1%;">
    	        <div class="pos_btn">
                    <?php echo $this->Html->link($html->tag('span', 'Nộp đơn'), 
                            array('controller'=> 'jobseekers', 'action' => 'applyJob', $job['Job']['id']),array('escape' => false, 'class'=>'button')); ?>
                    <?php echo $this->Html->link($html->tag('span', 'Lưu việc làm này'), 
                            array('action' => 'saveJob', $job['Job']['id']),array('escape' => false, 'class'=>'button')); ?>
                </div>
                <br/>
                <div style="height: 1%;">
                    <strong>Số lần xem</strong>: <?php echo $job['JobViewLog'][0]['views']; ?> | 
                    <strong>Ngày hết hạn</strong>: <?php echo date('d-m-Y',strtotime($job['Job']['expired'])) ;?>
                    <?php if(strtotime($job['Job']['expired']) > time()):?>
                    <strong style="color:darkblue">Đã hết hạn</strong>
                    <?php endif;?>
                </div>   
                <br/>
           	</div>		
            <div class="box_corner">				
	        <div class="blue_bg_title"><strong>Tìm việc nhanh</strong></div>
	        <div class="white_content">
	            <table width="100%" cellspacing="0" cellpadding="0" border="0">
	                <tbody>
	                	<?php echo $this->Form->create('Job',array('action'=>'searchResults'));?>
	                    <tr>
	                    <td><?php echo $this->Form->Input('keyword',array('class'=>'text_box','maxlength'=>'80','label'=>false,'div'=>false));?></td>
	                    <td>
	                        <?php echo $this->Form->Input('jobCategory',array('class'=>'comboType02_industry','label'=>false,'div'=>false,'empty'=>'Bất kỳ ngành nghề'));?>  
	                    </td>
	                    <td>
	                        <?php echo $this->Form->Input('province',array('class'=>'comboType02','label'=>false,'div'=>false,'empty'=>'Tất cả địa điểm'));?>    
	                    </td>
	                    <td><?php echo $this->Form->Submit('Tìm việc',array('class'=>'btn_cont','div'=>false));?></td>
	                    </tr>
	                    <tr>
	                        <td colspan="4"><div><?php echo $html->link($html->tag('span', 'Tìm Kiếm Nâng Cao'), 
									array('controller' => 'jobs', 'action' => 'advanceSearch'),array('escape' => false));?></div></td>
	                    </tr>            
	                </tbody>
	            </table>
		    </div><!--end xboxcontent-->		
       		</div>   
           <!-- end right col -->
        </div>     <!-- end page-->
        <!-- end wrap -->
        <div style="clear: both;">
        <br/>
        </div>
    </div>
</div>

