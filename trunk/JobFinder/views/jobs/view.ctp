<?php $company_size = array(1 =>"1-10" , 2 => "10-50");?>
<div id="job_nav_sub">
	<div class="job_wrapmenu">
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
				<li class="icon10"><a href="##">Nộp đơn</a></li>
                <li class="icon03"><a title="Luu Viec Lam Nay" href="##">Lưu việc làm này</a></li>
                <li class="icon07"><a title="Ban Viec Lam De In" target="_blank" href="##">Bản để in</a></li>
                <li class="icon01"><a title="Gui Cho Toi Viec Lam Tuong Tu" href="##">Gửi cho tôi việc làm tương tự</a></li>
                <li class="icon08"><a title="Gui Viec Lam Cho Ban Be" href="##">Gửi cho bạn bè</a></li>
                <li class="icon05"><a title="Tim Viec Lien Quan" href="##">Tìm việc liên quan</a></li>
                <li class="icon09"><a title="Xem Tat Ca Viec Lam Do Nha Tuyen Dung Nay Dang" href="##">Việc làm khác của nhà tuyển dụng này</a></li>
                <li class="icon06"><a title="Tim Kiem Viec Nhanh" href="##">Tìm kiếm</a></li>
            </ul>							               
            <!-- end left menu -->
        </div>
        <!-- end left col -->
        
        <!-- begin right col -->
        <div class="rightcol_search">
		<!-- begin Company Profile -->
	    <div class="box_corner">
            <b class="xtop">
                <b class="xb1 blue_top"><!-- --></b>
                <b class="xb2 blue_curve blue_title"><!-- --></b>
                <b class="xb3 blue_curve blue_title"><!-- --></b>
            </b>
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
                                <span class="comp_name"><?php echo $job['JobContactInformation'][0]['company_name']; ?></span> 
                                <br/> 
                            </div>
                        </div>
					  
					    <div style="" class="box_pre">
						    <div class="box_left">Sơ lược về công ty:</div>
							<div class="box_right"><?php echo $job['JobContactInformation'][0]['company_profile']; ?> 
                                <br/>
                            </div>
					    </div>
					  
    					<div style="" class="box_pre">
    					    <div class="box_left">Quy mô công ty:</div>
    						<div class="box_right"><?php echo $company_size[$job['JobContactInformation'][0]['company_size']]; ?></div>
    					</div>
		  			
                        <div style="" class="box_pre">
                            <div class="box_left">Địa chỉ công ty:</div>
                            <div class="box_right"><?php echo $job['JobContactInformation'][0]['company_address']; ?></div>
                        </div>
                        <div style="" class="box_pre">
                            <div class="box_left">Website công ty:</div>
                            <div class="box_right"><?php echo $job['JobContactInformation'][0]['company_website']; ?></div>
                        </div>
					</td> </tr> </tbody>
                </table>
				   
			</div><!--end xboxcontent-->	
				<b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb1 blue_top"><!-- --></b>
                </b>				
		</div><!-- end Company Profile -->

        <!-- begin Job detail -->
		<div class="box_corner">
            <b class="xtop">
                <b class="xb1 blue_top"><!-- --></b>
                <b class="xb2 blue_curve blue_title"><!-- --></b>
                <b class="xb3 blue_curve blue_title"><!-- --></b>
            </b>
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
                            
                            <!--div style="display: none;" class="box_pre">
                                <div class="box_left">Mã số công việc:</div>
                                <div class="box_right"></div>
                            </div-->                      
                            
                            <div class="box_pre">
                                <div class="box_left">Yêu cầu chung:</div>
                                <div class="box_right">
                                	<div class="box_pre">
                                		<div>Số năm kinh nghiệm: <?php echo $job['JobRequirement'][0]['year_experience']; ?></div>
                                		<div>Cấp bậc tối thiểu: <?php echo $jobLevels[$job['JobRequirement'][0]['job_level_id']]; ?></div>
                                		<div>Bằng cấp tối thiểu: <?php echo $degreeLevels[$job['JobRequirement'][0]['degree_level_id']]; ?></div>
                                		<div style="width:450px; display:block;" ><?php echo $job['JobRequirement'][0]['requirement']; ?></div>
                                	</div>
                            	</div>
                            </div>
                            
                            <div style="" class="box_pre">
                                <div class="box_left">Loại hình làm việc:</div>
                                <div style="padding-bottom: 5px;" class="box_right">
                                    <?php echo $job['JobType']['type']; ?>
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
                                    <?php echo $job['JobCategory']['name']; ?>
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
                           
                        </td> </tr> </tbody>
                    </table>
				</div><!--end xboxcontent-->
                    <b class="xbottom">
                        <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                        <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                        <b class="xb1 blue_top"><!-- --></b>
                    </b>
            </div><!-- end Job detail -->			           
        
            <div style="height: 1%;" class="pos_btn">
    	        <div class="pos_btn">
                    <?php echo $this->Html->link(__('Nộp đơn', true), 
                            array('controller'=> 'jobseekers', 'action' => 'applyJob', $job['Job']['id'])); ?>
                    <?php echo $this->Html->link(__('Lưu việc làm này', true), 
                            array('action' => 'saveJob','type'=>'button','class'=>'btn_save', $job['Job']['id'])); ?>
                </div>			
                <div style="height: 1%;" class="page_view">
                    <strong>Số lần xem</strong>: xxx | 
                    <strong>Ngày hết hạn</strong>: xx-xx-2010
                </div>   
            </div><!-- end right col -->
        </div>     <!-- end page-->
        <!-- end wrap -->
        <div style="clear: both;"></div>
    </div>
</div>

