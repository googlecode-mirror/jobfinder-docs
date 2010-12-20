<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr">
    <div class="step_postjob">
        <img width="300" height="30" alt="" 
            src="../img/home/create_resume_signup_vn.gif"/>
    </div>
        <!-- begin content -->
        <div id="content_cr">
            <?php echo $this->Form->create('Jobseeker', array('action' => 'register','class'=>'form_field')); ?>
            <!-- begin Log In Information -->
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Thông Tin Đăng Nhập</strong></div>
                <div class="white_content">
                    <table><tr><td>
                        <p>
                		  	<label><span class="require">*</span> Email đăng nhập:</label> 
                		  	<?php echo $this->Form->input('email',array('label'=>false,'class'=>'field','div'=>false,'error' => array('wrap' => 'span'))); ?> 
                		</p>
                		<p>
                		  	<label><span class="require">*</span> Nhập mật khẩu:</label> 
                		  	<?php echo $this->Form->input('password',array('label'=>false,'class'=>'field','div'=>false)); ?>
                		</p>			
                		<p>
                		  	<label><span class="require">*</span> Xác nhận mật khẩu:</label> 
                		  	<?php echo $this->Form->input('confirm_password',array('label'=>false,'type' => 'password','class'=>'field','div'=>false)); ?>
                		</p>   
                		</td></tr>	                     
                    </table>
                </div>
            </div>
            <!-- end Log In Information -->
            
            <!-- begin Registration Information -->
            <div class="box_corner">
                <div class="blue_bg_title"><strong>Thông Tin Đăng Ký</strong></div>
                <div class="white_content">
                    <table><tr><td>
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
                		  	<?php echo $this->Form->input('country_id',array('label'=>false,'id'=>'countries', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
                		</p>
                		<p>
                		  	<label><span class="require">*</span> Tỉnh/Thành phố:</label> 								  
                			<?php echo $this->Form->input('province_id',array('label'=>false,'id'=>'provinces', 'empty' => 'Vui lòng chọn...', 'class'=>'field','div'=>false)); ?>
                		</p>
                		<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>					  
                        <div style="display:block;	margin-left:275px; float:left;">
                            <?php echo $captchaTool->show();?>
                        </div>
                        <div class="more">
                            <input type="checkbox" class="checkm" id="chkIAgree" value="1" name="chkIAgree"/>
                            <span class="lbm">
                            <span class="require">*</span> Tôi đã đọc và đồng ý với các thỏa thuận sử dụng.
                            </span>
                        </div>
                        </td></tr>	                  
                    </table>
                </div>                
            </div>
        </div>
        <!--end Registration Information-->
        <div style="text-align: right;">
    	   <?php echo $this->Form->submit('Đăng ký',array('class'=>'btn_cont','div'=>false)); ?>
    	</div>
    </div>
</div>




