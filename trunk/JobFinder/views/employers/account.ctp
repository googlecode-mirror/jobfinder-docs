<div id="job_nav_sub">
	<div class="job_wrapsubmenu">
		<ul class="job_subnav">
			<li><?php echo $html->link($html->tag('span', 'Tuyển Dụng'), 
					array('controller' => 'employers', 'action' => 'manageJob'),array('escape' => false)); ?>
			</li>
			<li><?php echo $html->link($html->tag('span', 'Hồ Sơ Ứng Tuyển'), 
					array('controller' => 'employers', 'action' => 'manageCandidates'),array('escape' => false)); ?>
			</li>
			<li><?php echo $html->link($html->tag('span', 'Tài Khoản'), 
					array('controller' => 'employers', 'action' => 'account'),array('escape' => false)); ?>
			</li>		
		</ul>	
		<br clear="all"/>
	</div><!-- end wrap -->		
</div>
<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr">
    <!-- begin content -->
        <div id="content_cr">
        	
			     <!-- begin Information -->
                 <div class="box_corner">
                 <?php echo $this->Form->create('Employer', array('class'=>'form_field')); ?>
				 <?php echo $this->Form->Input('id');?>
					<div class="dblue_bg_title">
					  <strong>Thông Tin Tài Khoản</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody><tr><td>
						<p>
							<label><span class="require_emp">*</span> Tên công ty:</label>
							<?php echo $this->Form->input('company_name',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
                        <p>
                          <label><span class="require_emp">*</span> Quy mô công ty (số nhân viên):</label>
						  <?php echo $this->Form->input('company_size', array('label'=>false,'empty' => 'Vui lòng chọn..','class'=>'field_list','div'=>false));?>
						</p>
						<p style="height: 135px;margin-bottom: 1px;">
						  <label>Sơ lược về công ty:</label>
						  <?php echo $this->Form->input('company_profile',array('label'=>false,'rows'=>10, 'class'=>'co_pro_area','div'=>false)); ?>
						</p>  
						<p>
						  <label>Đăng logo công ty:</label>
						  <?php echo $this->Form->input('company_logo', array('label' => false,'class'=>'field','type'=>'file','div'=> false));?>
					    </p>
						<p>
						  	<label><span class="require_emp">*</span> Quốc gia:</label>
						  	<?php echo $this->Form->input('country_id',array('label'=>false,'id'=>'countries', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
						</p>					  
						<p>
						  	<label><span class="require_emp">*</span> Tỉnh/Thành phố:</label>
						  	<?php echo $this->Form->input('province_id',array('label'=>false,'id'=>'provinces', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
						</p>
						<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
						<p>
						  	<label><span class="require_emp">*</span> Địa chỉ công ty:</label>
						  	<?php echo $this->Form->input('address',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label>Website công ty:</label>
						  	<?php echo $this->Form->input('website',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label><span class="require_emp">*</span> Tên người liên hệ:</label>
						  	<?php echo $this->Form->input('contact_name',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label>Chức vụ của người liên hệ:</label> 
						 	<?php echo $this->Form->input('contact_position',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label><span class="require_emp">*</span> Số điện thoại:</label>
						  	<?php echo $this->Form->input('telephone',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label>Số di động:</label>
						  	<?php echo $this->Form->input('mobile',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<p>
						  	<label>Số fax:</label>
						  	<?php echo $this->Form->input('fax',array('label'=>false,'class'=>'field','div'=>false)); ?>
						</p>
						<div style="text-align: left;margin-left:275px">
    	   					<?php echo $this->Form->submit('Lưu',array('div'=>false)); ?>
    					</div>
                        <?php echo $this->Form->end();?>
					</td> </tr> </tbody>
                    </table>
				</div>			
			</div>
			
			 <div class="box_corner">
                 <?php echo $this->Form->create('Employer', array('action'=>'changePassword', 'class'=>'form_field')); ?>
				 <?php echo $this->Form->Input('id');?>
				 <?php echo $this->Form->input('password',array('type'=>'hidden')); ?>
					<div class="dblue_bg_title">
					  <strong>Thay đổi mật khẩu</strong>
					</div>
					<div style="text-align: center;" class="dwhite_content">
					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                        <tbody><tr><td>
						<p>
                		  	<label><span class="require">*</span> Mật khẩu hiện tại:</label> 
                		  	<?php echo $this->Form->input('old_password',array('label'=>false,'type'=>'password','class'=>'field','div'=>false)); ?>
                		</p>
                		<p>
                		  	<label><span class="require">*</span> Mật khẩu mới:</label> 
                		  	<?php echo $this->Form->input('new_password',array('label'=>false,'type'=>'password','class'=>'field','div'=>false)); ?>
                		</p>
                		<p>
                		  	<label><span class="require">*</span> Xác nhận mật khẩu mới:</label> 
                		  	<?php echo $this->Form->input('confirm_new_password',array('label'=>false,'type'=>'password','class'=>'field','div'=>false)); ?>
                		</p>
                       <div style="text-align: left;margin-left:275px">
    	   					<?php echo $this->Form->submit('Thay đổi',array('div'=>false)); ?>
    					</div>
    					<?php echo $this->Form->end();?>
					</td> </tr> </tbody>
                    </table>
				</div>			
			</div>
   </div>
   <br clear="all" />
   <!-- end content -->
</div>
<!-- end wrap -->

</div>
