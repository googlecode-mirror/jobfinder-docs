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
        	<?php echo $this->Form->create('Job', array('class'=>'form_field')); ?>
        	<?php echo $this->Form->input('id',array('label'=>false,'type'=>'hidden')); ?>
        	<?php echo $this->Form->input('employer_id',array('label'=>false,'type'=>'hidden')); ?>
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
                
			<div class="btn_pos">
			<?php echo $this->Html->link($html->tag('span', 'Trở về'), 
                            array('controller'=> 'jobs', 'action' => 'preview', $this->data['Job']['id']),array('escape' => false, 'class'=>'button')); ?>
				  <div class="btn_bg_emp"><div class="btn_l_emp"></div>
				  	<?php echo $this->Form->submit('Lưu',array('class'=>'btn_c_emp','div'=>false)); ?>
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