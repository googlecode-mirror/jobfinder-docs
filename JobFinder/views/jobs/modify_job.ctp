<br clear="all"/>
<div id="body_content">
    <div class="step_postjob">
        <img width="300" height="30" alt="" 
            src="http://images.vietnamworks.com/post_job_signup_vn.gif"/>
    </div>
    <!-- begin wrap -->
    <div class="wrap_cr_emp">
    <!-- begin content -->
        <div id="content_cr">
        <div id="right_cr">
        	<?php echo $this->Form->create('Job', array('action' => 'postJob','class'=>'form_field')); ?>
                <?php echo $this->Form->input('id');?>
                <!-- begin Company Information -->
 			    <div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Thông Tin Công Ty</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					    <tbody> <tr> <td>
                       	<p>
							<label><span class="require_emp">*</span> Tên công ty:</label>
							<?php echo $this->Form->input('company_name',array('label'=>false,'class'=>'field','div'=>false,'style'=>'width:350px','error'=>array('wrap'=>'span'))); ?>
						</p>
                        <p>
                          <label><span class="require_emp">*</span> Quy mô (số nhân viên):</label>
						  <?php echo $this->Form->input('company_size', array('label'=>false,'empty' => 'Vui lòng chọn..','class'=>'field_list','div'=>false,'error'=>array('wrap'=>'span')));?>
						</p>
						<p style="height: 135px;margin-bottom: 30px;">
						  <label>Sơ lược về công ty:</label>
						  <?php echo $this->Form->input('company_profile',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>  
						<p>
						  	<label><span class="require_emp">*</span> Địa chỉ công ty:</label>
						  	<?php echo $this->Form->input('company_address',array('label'=>false,'class'=>'field','div'=>false,'style'=>'width:350px','error'=>array('wrap'=>'span'))); ?>
						</p>
						<p>
						  	<label><span class="require_emp">*</span> Quốc gia:</label>
						  	<?php echo $this->Form->input('country_id',array('label'=>false,'id'=>'countries', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>					  
						<p>
						  	<label><span class="require_emp">*</span> Tỉnh/Thành phố:</label>
						  	<?php echo $this->Form->input('province_id',array('label'=>false,'id'=>'provinces', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
						<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
						<p>
						  	<label>Website công ty:</label>
						  	<?php echo $this->Form->input('company_website',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
						<p>
						  	<label><span class="require_emp">*</span> Số điện thoại:</label>
						  	<?php echo $this->Form->input('telephone',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
						<p>
						  	<label>Số fax:</label>
						  	<?php echo $this->Form->input('fax',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
                        </td> </tr> </tbody>
                        </table>
				    </div><!--end xboxcontent-->				
			     </div><!-- end Company Information -->
                
                <!-- begin Job Information -->
 			    <div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Thông Tin Đăng Tuyển</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					    <tbody> <tr> <td>
                            <p> 
                            	<label><span class="require_emp">*</span> Chức danh:</label>
                            	<?php echo $this->Form->input('job_title',array('label'=>false,'class'=>'field','div'=>false,'style'=>'width:350px','error'=>array('wrap'=>'span'))); ?> 
                            </p>                            					
                            <p>
    						  <label> Mã số:</label>
    						  <?php echo $this->Form->input('job_code',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    						</p>					    
                            <p>
    						  <label><span class="require_emp">*</span> Cấp bậc:</label>
    						  <?php echo $this->Form->input('job_level_id',array('label'=>false,'empty'=>'Vui lòng chọn...','class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    					    </p>
    					    <p>
    						  <label><span class="require_emp">*</span> Loại hình công việc:</label>
    						  <?php echo $this->Form->input('job_type_id',array('label'=>false,'empty'=>'Vui lòng chọn...','class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    					    </p>
    					    <p>
    						  <label><span class="require_emp">*</span> Mức lương:</label>
    						  <?php echo $this->Form->input('salary_range',array('label'=>false,'empty'=>'Vui lòng chọn...','class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    					    </p>
    					    <p>
    						  <label>Tối thiểu</label>
    						  <?php echo $this->Form->input('minimun_salary_range',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    						</p>
    						<p>  
    						  <label>Tối đa</label>
    						  <?php echo $this->Form->input('maximun_salary_range',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    					    </p>
    					    <p>  
    						  <label><span class="require_emp">*</span> Nơi làm việc:</label>
    						  <?php echo $this->Form->input('job_locations',array('label'=>false,'class'=>'field','div'=>false,'type' => 'select', 'multiple' => true,'size'=>'6','error'=>array('wrap'=>'span'))); ?>
    					    </p>
    					    <p> 
    					    <br/> 
    						  <label><span class="require_emp">*</span> Ngành nghề:</label>
    						  <?php echo $this->Form->input('job_categories',array('label'=>false,'class'=>'field','div'=>false,'type' => 'select', 'multiple' => true,'size'=>'6','error'=>array('wrap'=>'span'))); ?>
    					    </p>
    					    <p style="height: 135px;margin-bottom: 40px;">
    					    <br/>
						  		<label><span class="require_emp">*</span> Mô tả công việc:</label>
						  		<?php echo $this->Form->input('job_description',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false,'error'=>array('wrap'=>'span'))); ?>
							</p>  
							<p style="height: 135px;margin-bottom: 30px;">
						  		<label><span class="require_emp">*</span> Yêu cầu công việc:</label>
						  		<?php echo $this->Form->input('job_requirement',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false,'error'=>array('wrap'=>'span'))); ?>
							</p>
							<p>
    						  <label><span class="require_emp">*</span> Bằng cấp tối thiểu:</label>
    						  <?php echo $this->Form->input('degree_level_id',array('label'=>false,'empty'=>'Vui lòng chọn...','class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    					    </p>
							<p>
    						  <label><span class="require_emp">*</span> Số năm kinh nghiệm yêu cầu:</label>
    						  <?php echo $this->Form->input('year_experience',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    						</p>  
							<p>
    						  <label><span class="require_emp">*</span> Hồ sơ trình bày bằng ngôn ngữ:</label>
    						  <?php echo $this->Form->input('application_language',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    						</p>
    						<p>
    						  <label><span class="require_emp">*</span> Ngày hết hạn nộp hồ sơ:</label>
    						  <?php echo $this->Form->input('expired', array('label'=>false, 'dateFormat' => 'DMY', 'class'=>'field_list', 'div'=>false,'separator'=>false,
                                   		'minYear' => date('Y'), 'maxYear' => date('Y') + 1,'monthNames' => false ,'error'=>array('wrap'=>'span')));?>
    						</p>
    						<p style="font-style:italic;"> 
                            	<br/>
                            	Hướng dẫn: Nhấn giữ Ctrl để chọn nhiều mục.
                            </p>  
                        </td> </tr> </tbody>
                        </table>
				    </div><!--end xboxcontent-->				
			     </div><!-- end Job Information -->
			
			 <!-- begin Contact Information -->
 			    <div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Thông Tin Liên Hệ</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					    <tbody> <tr> <td>
                        <p>
						  	<label><span class="require_emp">*</span> Tên người liên hệ:</label>
						  	<?php echo $this->Form->input('contact_name',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
						<p>
						  	<label><span class="require_emp">*</span> Chức vụ:</label> 
						 	<?php echo $this->Form->input('contact_position',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
						<p>
						  	<label>Số điện thoại:</label>
						  	<?php echo $this->Form->input('mobile',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
						<p>
						  	<label><span class="require_emp">*</span>Địa chỉ Email nhận hồ sơ:</label>
						  	<?php echo $this->Form->input('email',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
						</p>
                        </td> </tr> </tbody>
                        </table>
				    </div><!--end xboxcontent-->				
			     </div><!-- end Contact Information -->

			<div class="btn_pos">
				  <div class="btn_bg_emp"><div class="btn_l_emp"></div>
				  	<?php echo $this->Form->submit('Tiếp tục',array('class'=>'btn_c_emp','div'=>false)); ?>
                  	<div class="btn_r_emp"></div>
                  </div>
			</div>
   </div>
   </div>
   <br clear="all" />
   <!-- end content -->
</div>
<!-- end wrap -->

</div>