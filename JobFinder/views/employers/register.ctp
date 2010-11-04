<?php
/*
echo $this->Form->create('Employer');
echo $this->Form->input('email', array('label' => 'Email đăng nhập: '));
echo $this->Form->input('password', array('label' => 'Nhập mật khẩu: ', 'type' => 'password'));
echo $this->Form->input('confirm_password', array('label' => 'Xác nhận mật khẩu: ', 'type' => 'password'));
echo $this->Form->input('company_name', array('label' => 'Tên công ty: '));
echo $this->Form->input('company_size', array('label' => 'Quy mô công ty: ','empty' => 'Vui lòng chọn..'));
echo $this->Form->input('company_profile', array('label' => 'Sơ lược công ty: '));
echo $this->Form->input('company_logo', array('label' => 'Logo công ty: ','type' => 'file'));
echo $this->Form->input('country_id', array('label' => 'Quốc gia: ','empty' => 'Vui lòng chọn..','id'=>'countries'));
echo $this->Form->input('province_id', array('label' => 'Quận/huyện: ','empty' => 'Vui lòng chọn..','id'=>'provinces'));
echo $this->Form->input('address', array('label' => 'Địa chỉ công ty: '));
echo $this->Form->input('website', array('label' => 'Website: '));
echo $this->Form->input('contact_name', array('label' => 'Người đại diện: '));
echo $this->Form->input('contact_position', array('label' => 'Vị trí: '));
echo $this->Form->input('telephone', array('label' => 'Điện thoại liên lạc: '));
echo $this->Form->input('mobile', array('label' => 'Di động: '));
echo $this->Form->input('fax', array('label' => 'Fax: '));
echo $this->Form->input('howknow', array('label' => 'How do you know ?', 'empty' => 'Vui lòng chọn...'));
echo $captchaTool->show();
echo $captchaError;
echo $this->Form->end(__('Tạo tài khoản', true));
echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));
*/
?>

<div id="body_content">
    <div class="step_postjob">
        <img width="300" height="30" alt="" 
            src="http://images.vietnamworks.com/post_job_signup_vn.gif"/>
        </div>
    <!-- begin wrap -->
    <div class="wrap_cr_emp">
    <!-- begin content -->
        <div id="content_cr">
        	<?php echo $this->Form->create('Employer', array('action' => 'register','class'=>'form_field')); ?>
                <!-- begin Log In Information -->
 			    <div class="box_corner">				
                    <b class="xtop">
                        <b class="xb1 dblue_top"><!-- --></b>
                        <b class="xb2 dblue_curve dblue_title"><!-- --></b>
                        <b class="xb3 dblue_curve dblue_title"><!-- --></b>
                    </b>
					<div class="dblue_bg_title">
					  <strong>Thông Tin Đăng Nhập</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
                        <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
					    <tbody> <tr> <td>
                            <p> 
                            	<label class="labels"><span class="require_emp">*</span> Email đăng nhập:</label>
                            	<?php echo $this->Form->input('email',array('label'=>false,'class'=>'field','div'=>false)); ?> 
                            </p>                            					
                            <p>
    						  <label class="labels"><span class="require_emp">*</span> Mật khẩu:</label>
    						  <?php echo $this->Form->input('password',array('label'=>false,'class'=>'field','div'=>false)); ?>
    						</p>					    
                            <p>
    						  <label class="labels"><span class="require_emp">*</span> Xác nhận mật khẩu:</label>
    						  <?php echo $this->Form->input('confirm_password',array('label'=>false,'type'=>'password','class'=>'field','div'=>false)); ?>
    					    </p>
                        </td> </tr> </tbody>
                        </table>
				    </div><!--end xboxcontent-->	
					<b class="xbottom">
                        <b class="xb3 dblue_curve dblue_bg_bottom"><!-- --></b>
                        <b class="xb2 dblue_curve dblue_bg_bottom"><!-- --></b>
                        <b class="xb1 dblue_top"><!-- --></b>
                    </b>				
			     </div><!-- end Log In Information -->
			
			     <!-- begin Registration Information -->
                 <div class="box_corner">
                    <b class="xtop">
                        <b class="xb1 dblue_top"><!-- --></b>
                        <b class="xb2 dblue_curve dblue_title"><!-- --></b>
                        <b class="xb3 dblue_curve dblue_title"><!-- --></b>
                    </b>
					<div class="dblue_bg_title">
					  <strong>Thông Tin Đăng Ký</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody><tr><td>
						<p>
							<label class="labels"><span class="require_emp">*</span> Tên công ty:</label>
							<?php echo $this->Form->input('company_name',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
                        <p>
                          <label class="labels"><span class="require_emp">*</span> Quy mô công ty (số nhân viên):</label>
						  <?php echo $this->Form->input('company_size', array('label'=>false,'empty' => 'Vui lòng chọn..','class'=>'field_list','div'=>false));?>
						</p>
						<p style="height: 135px;margin-bottom: 1px;">
						  <label class="labels">Sơ lược về công ty:</label>
						  <?php echo $this->Form->input('company_profile',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false)); ?>
						</p>  
						<p>
						  <label class="labels">Đăng logo công ty:</label>
						  <?php echo $this->Form->input('company_logo', array('label' => false,'class'=>'field','type'=>'file','div'=> false));?>
					    </p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Quốc gia:</label>
						  	<?php echo $this->Form->input('country_id',array('label'=>false,'id'=>'countries', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
						</p>					  
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Tỉnh/Thành phố:</label>
						  	<?php echo $this->Form->input('province_id',array('label'=>false,'id'=>'provinces', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
						</p>
						<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Địa chỉ công ty:</label>
						  	<?php echo $this->Form->input('address',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label class="labels">Website công ty:</label>
						  	<?php echo $this->Form->input('website',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Tên người liên hệ:</label>
						  	<?php echo $this->Form->input('contact_name',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label class="labels">Chức vụ của người liên hệ:</label> 
						 	<?php echo $this->Form->input('contact_position',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Số điện thoại:</label>
						  	<?php echo $this->Form->input('telephone',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label class="labels">Số di động:</label>
						  	<?php echo $this->Form->input('mobile',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label class="labels">Số fax:</label>
						  	<?php echo $this->Form->input('fax',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label class="labels"><span class="require_emp">*</span> Bạn biết chúng tôi từ?</label>
						  <?php echo $this->Form->input('howknow',array('label'=>false, 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
						</p>
							<div style="display:block;	margin-left:275px; float:left;"><?php echo $captchaTool->show();?></div>
						<div style="margin: 10px 0px 5px 10px;">
							<div class="more">
    							<input type="checkbox" style="clear: both;" class="checkm" value="1" 
                                id="chkIAgree" name="chkIAgree"/>
	                           <span class="lbm"><span class="require">*</span> Tôi đã đọc và đồng ý với các thỏa thuận sử dụng.</span></div><br>
                            </div>
                            <br/>
					</td> </tr> </tbody>
                    </table>
				</div><!--end xboxcontent-->	
					<b class="xbottom">
                        <b class="xb3 dblue_curve dblue_bg_bottom"><!-- --></b>
                        <b class="xb2 dblue_curve dblue_bg_bottom"><!-- --></b>
                        <b class="xb1 dblue_top"><!-- --></b>
                    </b>				
			</div><!-- end Registration Information -->

			<div class="btn_pos">
				  <div class="btn_bg_emp"><div class="btn_l_emp"></div>
				  	<?php echo $this->Form->submit('Đăng ký',array('class'=>'btn_c_emp','div'=>false)); ?>
                  	<div class="btn_r_emp"></div>
                  </div>
			</div>
   </div>
   <br clear="all" />
   <!-- end content -->
</div>
<!-- end wrap -->

</div>
