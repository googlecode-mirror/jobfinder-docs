<div class="wrap_cr">
   <div id="content_cr">
		 <!-- begin right col -->
		 <div id="right_cr">	
		 	<?php echo $this->Form->create('Jobseeker', array('action' => 'register','class'=>'form_field')); ?>		 	
		    <div class="qr_info"><span class="require">*</span> <strong>Thông tin bắt buộc</strong></div>
			<?php echo $this->Session->flash(); ?>
 			<div class="box_corner">				
                    <b class="xtop"><b class="xb1 blue_top"><!-- --></b><b class="xb2 blue_curve blue_title"><!-- --></b><b class="xb3 blue_curve blue_title"><!-- --></b></b>					
					<div class="blue_bg_title"><strong>Thông Tin Đăng Ký</strong></div>
					<div class="white_content">	
<table width="100%" border="0">
  <tbody><tr>
    <td>												
		<p>
		  	<label><span class="require">*</span> Email đăng nhập:</label> 
		  	<?php echo $this->Form->input('email',array('label'=>false,'class'=>'field','div'=>false)); ?> 
		</p>
		<p>
		  	<label><span class="require">*</span> Nhập mật khẩu:</label> 
		  	<?php echo $this->Form->input('password',array('label'=>false,'class'=>'field','div'=>false)); ?>
		</p>			
		<p>
		  	<label><span class="require">*</span> Xác nhận mật khẩu:</label> 
		  	<?php echo $this->Form->input('confirm_password',array('label'=>false,'type' => 'password','class'=>'field','div'=>false)); ?>
		</p>
		<div class="line_dotted"><!-- --></div>
        <p>
		  	<label><span class="require">*</span> Tên:</label> 
		  	<?php echo $this->Form->input('first_name',array('label'=>false,'class'=>'field','div'=>false)); ?>
		</p>
		<p>
		  	<label><span class="require">*</span> Họ:</label> 
		  	<?php echo $this->Form->input('last_name',array('label'=>false,'class'=>'field','div'=>false)); ?>
		</p>
		<p style="height: 30px;">
			<label><span class="require">*</span> Ngày sinh:</label> 
			<?php echo $form->input('birthday', array('dateFormat' => 'DMY','monthNames' => false, 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 15,'label'=>false,'div'=>false,'separator' => false, 'class'=>'field_list'));?>		
		</p>
		<p>
		  	<label><span class="require">*</span> Giới tính:</label> 
		  	<?php echo $this->Form->input('gender',array('label'=>false,'options' => array(0=> 'Nam', 1 =>'Nữ'), 'empty' => '...', 'class'=>'field_list','div'=>false)); ?>
		</p>
		<p>
		  	<label><span class="require">*</span> Quốc gia:</label> 
		  	<?php echo $this->Form->input('country_id',array('label'=>false,'id'=>'countries', 'empty' => 'Vui lòng chọn...', 'class'=>'field_list','div'=>false)); ?>
		</p>
		<p>
		  	<label><span class="require">*</span> Tỉnh/Thành phố:</label> 								  
			<?php echo $this->Form->input('province_id',array('label'=>false,'id'=>'provinces', 'empty' => 'Vui lòng chọn...', 'class'=>'field_list','div'=>false)); ?>
		</p>
		<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>					  
		<p>
		  	<label><span class="require">*</span> Làm thế nào bạn biết đến chúng tôi?</label>
		  	<?php echo $this->Form->input('howknow',array('label'=>false, 'empty' => 'Vui lòng chọn...', 'class'=>'field_list','div'=>false)); ?>
		</p>
		<div style="display:block;	margin-left:170px; float:left;"><?php echo $captchaTool->show();?></div>
	<div class="line_h"><!-- --></div><br>							
		
	<div class="more"><input type="checkbox" class="checkm" id="chkIAgree" value="1" name="chkIAgree"> 
					
	<span class="lbm"><span class="require">*</span> Tôi đã đọc và đồng ý với các thỏa thuận sử dụng.</span></div><br>
	
	<div class="both"><!-- --></div>
	</td>
  </tr>
</tbody>
</table>
</div><!--end xboxcontent-->	
<b class="xbottom"><b class="xb3 blue_curve blue_bg_bottom"><!-- --></b><b class="xb2 blue_curve blue_bg_bottom"><!-- --></b><b class="xb1 blue_top"><!-- --></b></b>				
</div>					
	<div style="text-align: right;">
	<?php echo $this->Form->submit('Đăng ký',array('class'=>'btn_back','div'=>false)); ?>
	</div>
	<!-- end right col -->
</div>
</div>
   <!-- end content -->
</div>
<br clear="all"/>
