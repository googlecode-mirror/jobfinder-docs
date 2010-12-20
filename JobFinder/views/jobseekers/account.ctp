<div id="job_nav_sub">
	<div class="job_wrapsubmenu">
		<ul class="job_subnav">
			<li><?php echo $html->link($html->tag('span', 'Tài khoản'), 
					array('controller' => 'jobseekers', 'action' => 'account'),array('escape' => false)); ?>
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
        <div id="right_cr">
            <!-- begin Information -->
            <div class="box_corner">
            	<?php echo $this->Form->create('Jobseeker', array('class'=>'form_field')); ?>
            	<?php echo $this->Form->input('id'); ?>
                <div class="blue_bg_title"><strong>Thông Tin Tài Khoản</strong></div>
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
                        <div style="text-align: right;">
    	   					<?php echo $this->Form->submit('Lưu',array('class'=>'btn_cont','div'=>false)); ?>
    					</div>
                        <?php echo $this->Form->end();?>
                		
                        </td></tr>	                  
                    </table>
                </div>                
            </div>
            
            <div class="box_corner">
            	<?php echo $this->Form->create('Jobseeker', array('action'=>'changePassword','class'=>'form_field')); ?>
            	<?php echo $this->Form->input('id'); ?>
            	<?php echo $this->Form->input('password',array('type'=>'hidden')); ?>
                <div class="blue_bg_title"><strong>Thay đổi mật khẩu</strong></div>
                <div class="white_content">
                    <table><tr><td>
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
                        <div style="text-align: right;">
    	   					<?php echo $this->Form->submit('Thay đổi',array('class'=>'btn_cont','div'=>false)); ?>
    					</div>
    					<?php echo $this->Form->end();?>
                        </td></tr>	                  
                    </table>
                </div>                
            </div>
    	</div>
    </div>
</div>
</div>



