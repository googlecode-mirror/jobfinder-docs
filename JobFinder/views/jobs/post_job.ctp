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
        	<?php echo $this->Form->create('Job', array('action' => 'postJob','class'=>'form_field')); ?>
                <!-- begin Company Information -->
 			    <div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Thông Tin Đăng Tuyển</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					    <tbody> <tr> <td>
                       	<p>
							<label class="labels"><span class="require_emp">*</span> Tên công ty:</label>
							<?php echo $this->Form->input('company_name',array('label'=>false,'class'=>'field','div'=>false,'style'=>'width:400px','value'=>$employer['Employer']['company_name'])); ?>
						</p>
                        <p>
                          <label class="labels"><span class="require_emp">*</span> Quy mô (số nhân viên):</label>
						  <?php echo $this->Form->input('company_size', array('label'=>false,'empty' => 'Vui lòng chọn..','class'=>'field_list','div'=>false,'value'=>$employer['Employer']['company_size']));?>
						</p>
						<p style="height: 135px;margin-bottom: 30px;">
						  <label class="labels">Sơ lược về công ty:</label>
						  <?php echo $this->Form->input('company_profile',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false,'value'=>$employer['Employer']['company_profile'])); ?>
						</p>  
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Địa chỉ công ty:</label>
						  	<?php echo $this->Form->input('company_address',array('label'=>false,'class'=>'field','div'=>false,'style'=>'width:400px','value'=>$employer['Employer']['address'])); ?>
						</p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Quốc gia:</label>
						  	<?php echo $this->Form->input('country_id',array('label'=>false,'id'=>'countries', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false,'value'=>$employer['Employer']['country_id'])); ?>
						</p>					  
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Tỉnh/Thành phố:</label>
						  	<?php echo $this->Form->input('province_id',array('label'=>false,'id'=>'provinces', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false,'value'=>$employer['Employer']['province_id'])); ?>
						</p>
						<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
						<p>
						  	<label class="labels">Website công ty:</label>
						  	<?php echo $this->Form->input('website',array('label'=>false,'class'=>'field','div'=>false,'value'=>$employer['Employer']['website'])); ?>
						</p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Số điện thoại:</label>
						  	<?php echo $this->Form->input('telephone',array('label'=>false,'class'=>'field','div'=>false,'value'=>$employer['Employer']['telephone'])); ?>
						</p>
						<p>
						  	<label class="labels">Số fax:</label>
						  	<?php echo $this->Form->input('fax',array('label'=>false,'class'=>'field','div'=>false,'value'=>$employer['Employer']['fax'])); ?>
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
                            	<label class="labels"><span class="require_emp">*</span> Chức danh:</label>
                            	<?php echo $this->Form->input('job_title',array('label'=>false,'class'=>'field','div'=>false,'style'=>'width:400px','error'=>array('wrap'=>'span'))); ?> 
                            </p>                            					
                            <p>
    						  <label class="labels"> Mã số:</label>
    						  <?php echo $this->Form->input('job_code',array('label'=>false,'class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    						</p>					    
                            <p>
    						  <label class="labels"><span class="require_emp">*</span> Cấp bậc:</label>
    						  <?php echo $this->Form->input('job_level_id',array('label'=>false,'empty'=>'Vui lòng chọn...','class'=>'field','div'=>false,'error'=>array('wrap'=>'span'))); ?>
    					    </p>
    					    <p>
    						  <label class="labels"><span class="require_emp">*</span> Loại hình công việc:</label>
    						  <?php echo $this->Form->input('job_type_id',array('label'=>false,'empty'=>'Vui lòng chọn...','class'=>'field','div'=>false)); ?>
    					    </p>
    					    <p>
    						  <label class="labels"><span class="require_emp">*</span> Mức lương:</label>
    						  <?php echo $this->Form->input('salary_range',array('label'=>false,'empty'=>'Vui lòng chọn...','class'=>'field','div'=>false)); ?>
    					    </p>
    					    <p>
    						  <label class="labels">Tối thiểu</label>
    						  <?php echo $this->Form->input('minimun_salary_range',array('label'=>false,'class'=>'field','div'=>false)); ?>
    						</p>
    						<p>  
    						  <label class="labels">Tối đa</label>
    						  <?php echo $this->Form->input('maximun_salary_range',array('label'=>false,'class'=>'field','div'=>false)); ?>
    					    </p>
    					    <p>  
    						  <label class="labels"><span class="require_emp">*</span> Nơi làm việc:</label>
    						  <?php echo $this->Form->input('job_locations',array('label'=>false,'class'=>'field','div'=>false,'type' => 'select', 'multiple' => true,'size'=>'6')); ?>
    					    </p>
    					    <p> 
    					    <br/> 
    						  <label class="labels"><span class="require_emp">*</span> Ngành nghề:</label>
    						  <?php echo $this->Form->input('job_categories',array('label'=>false,'class'=>'field','div'=>false,'type' => 'select', 'multiple' => true,'size'=>'6')); ?>
    					    </p>
    					    <p style="height: 135px;margin-bottom: 40px;">
    					    <br/>
						  		<label class="labels"><span class="require_emp">*</span> Mô tả công việc:</label>
						  		<?php echo $this->Form->input('job_description',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false)); ?>
							</p>  
							<p style="height: 135px;margin-bottom: 30px;">
						  		<label class="labels"><span class="require_emp">*</span> Yêu cầu công việc:</label>
						  		<?php echo $this->Form->input('job_requirement',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false)); ?>
							</p>
							<p>
    						  <label class="labels"><span class="require_emp">*</span> Số năm kinh nghiệm yêu cầu:</label>
    						  <?php echo $this->Form->input('year_experience',array('label'=>false,'class'=>'field','div'=>false)); ?>
    						</p>  
							<p>
    						  <label class="labels"><span class="require_emp">*</span> Hồ sơ trình bày bằng ngôn ngữ:</label>
    						  <?php echo $this->Form->input('application_language',array('label'=>false,'class'=>'field','div'=>false)); ?>
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
						  	<label class="labels"><span class="require_emp">*</span> Tên người liên hệ:</label>
						  	<?php echo $this->Form->input('contact_name',array('label'=>false,'class'=>'field','div'=>false,'value'=>$employer['Employer']['contact_name'])); ?>
						</p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Chức vụ:</label> 
						 	<?php echo $this->Form->input('contact_position',array('label'=>false,'class'=>'field','div'=>false,'value'=>$employer['Employer']['contact_position'])); ?>
						</p>
						<p>
						  	<label class="labels">Số điện thoại:</label>
						  	<?php echo $this->Form->input('mobile',array('label'=>false,'class'=>'field','div'=>false,'value'=>$employer['Employer']['mobile'])); ?>
						</p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span>Địa chỉ Email nhận hồ sơ:</label>
						  	<?php echo $this->Form->input('email',array('label'=>false,'class'=>'field','div'=>false,'value'=>$employer['Employer']['email'])); ?>
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
   <br clear="all" />
   <!-- end content -->
</div>
<!-- end wrap -->

</div>