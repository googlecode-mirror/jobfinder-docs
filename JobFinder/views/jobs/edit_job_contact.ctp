<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr_emp">
    <!-- begin content -->
        <div id="content_cr">
        <div id="right_cr">
        <h2>ĐĂNG TIN TUYỂN DỤNG</h2>
        	<?php echo $this->Form->create('Job', array('class'=>'form_field')); ?>
        	<?php echo $this->Form->input('id',array('label'=>false,'type'=>'hidden')); ?>
        	<?php echo $this->Form->input('employer_id',array('label'=>false,'type'=>'hidden')); ?>
        	<?php echo $this->Form->input('status', array('type'=>'hidden'));?>
                <!-- begin Company Information -->
 			    <div class="box_corner">				
					<div class="dblue_bg_title">
					  <strong>Thông Tin Công Ty</strong>
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