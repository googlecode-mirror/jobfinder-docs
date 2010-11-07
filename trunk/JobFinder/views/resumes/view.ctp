<?php
	$gender =  array(0 => 'Nam', 1 =>'Nữ');
	$yesno = array(0=> 'Không', 1=> 'Có');
	$martial =  array(0 => 'Độc thân', 1 =>'Đã kết hôn');
	pr($resume);
?>
<div id="body_content">
    <!-- begin wrap -->
    <div class="wrap_cr">
        <!-- begin content -->
        <div id="content_cr">
            <!-- begin Resume Information -->
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"><!-- --></b>
                    <b class="xb2 blue_curve blue_title"><!-- --></b>
                    <b class="xb3 blue_curve blue_title"><!-- --></b>
                </b>
                <div class="blue_bg_title"><strong>Thông Tin Hồ Sơ</strong></div>
                <div class="white_content">
                    <table width="100%">					  
                    	<tr class="field_cp">
							<td width="22%"><strong>Tiêu đề hồ sơ:</strong></td>
					    	<td width="78%"><?php echo $resume['Resume']['resume_title']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
					    	<td><strong>Tình trạng hồ sơ:</strong></td>
					    	<td>Hồ sơ ẩn</td>
				      	</tr> 
                    </table>
                </div>
                <b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb1 blue_top"><!-- --></b>
                </b>
            </div>
            <!-- end Resume Information -->
            
            <!-- begin Personal Information -->
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"><!-- --></b>
                    <b class="xb2 blue_curve blue_title"><!-- --></b>
                    <b class="xb3 blue_curve blue_title"><!-- --></b>
                </b>
                <div class="blue_bg_title"><strong>Thông Tin Cá Nhân</strong></div>
                <div class="white_content">
                    <table class="table_info">
                    	<tr class="field_cp">
							<td width="22%" rowspan="7" valign="top">
								<img src="http://images.vietnamworks.com/js_photo.gif" alt="" />
							</td>
							<td width="25%" class="txt_tilte_lv2">
								<strong><?php echo $resume['Jobseeker']['last_name'].' '. $resume['Jobseeker']['first_name']; ?></strong></td>
							<td width="53%"><?php echo $resume['Resume']['address']; ?></td>
						</tr>
					  	<tr class="field_cp">
							<td><strong><?php echo $nationalities[$resume['Resume']['nationality']]; ?></strong></td>
							<td><?php echo $resume['Province']['name']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td><?php echo $gender[$resume['Jobseeker']['gender']]; ?> - <?php echo $martial[$resume['Resume']['martial_status']]; ?></td>
							<td><?php echo $resume['Country']['name']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td><?php echo date('d-m-Y', strtotime($resume['Jobseeker']['birthday']));    ?></td>
							<td>&nbsp;</td>
					  	</tr>
					  	<tr class="field_cp">
							<td>&nbsp;</td>
							<td><?php echo $resume['Resume']['email']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td>&nbsp;</td>
							<td><?php echo $resume['Resume']['telephone']; ?>/<?php echo $resume['Resume']['mobile']; ?></td>
					  	</tr>
					  	<tr class="field_cp">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
					  	</tr>
                    </table>
                </div>                
                <b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb1 blue_top"><!-- --></b>
                </b>
            </div>
            <!--end Personal Information-->
            
            <!-- begin Summary -->
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"><!-- --></b>
                    <b class="xb2 blue_curve blue_title"><!-- --></b>
                    <b class="xb3 blue_curve blue_title"><!-- --></b>
                </b>
                <div class="blue_bg_title"><strong>Tóm lược</strong></div>
                <div class="white_content">
                    <table class="table_info">
                   		<tr>
							<td width="21%" class="txt_tilte_lv2" style="text-align:right">Công Việc Mong Muốn</td>
							<td width="1%">&nbsp;</td>
							<td width="16%">Vị trí:</td>
							<td width="2%">&nbsp;</td>
							<td width="60%"><strong><?php echo $resume['ResumeTargetJob'][0]['job_title']; ?></strong></td>
						</tr>
			
						  <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Cấp bậc:</td>
							<td>&nbsp;</td>
							<td><strong><?php echo $jobLevels[$resume['ResumeTargetJob'][0]['job_level_id']]; ?></strong></td>
						  </tr>
						  <tr>
			
							<td align="right" valign="top">&nbsp;</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">Loại công việc:</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">
								<strong>Toàn thời gian cố định</strong><br /><strong>Toàn thời gian tạm thời</strong><br /><strong>Bán thời gian cố định</strong><br /><strong>Bán thời gian tạm thời</strong><br /><strong>Theo hợp đồng/tư vấn</strong><br /><strong>Thực tập</strong><br /><strong>Khác</strong><br />							</td>
			
						  </tr>
						  <tr>
							<td >&nbsp;</td>
							<td valign="top">&nbsp;</td>
							<td valign="top">Có thể đổi chỗ ở vì yêu cầu công việc:</td>
							<td valign="top">&nbsp;</td>
							<td valign="top"><?php echo $yesno[$resume['ResumeTargetJob'][0]['can_relocate']]; ?></td>
						  </tr>
			
						  <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Có thể đi công tác:</td>
							<td>&nbsp;</td>
							<td><?php echo $yesno[$resume['ResumeTargetJob'][0]['can_travel']]; ?></td>
						  </tr>
						  <tr>
			
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Quy mô công ty:</td>
							<td>&nbsp;</td>
							<td><?php echo $companySizes[$resume['ResumeTargetJob'][0]['company_size']]; ?></td>
						 </tr>
						 <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Ngành nghề:</td>
							<td>&nbsp;</td>
							<td>
								- Kế toán/Tài chính<br />				</td>
						  </tr>
						  <tr>
			
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Nơi làm việc:</td>
							<td>&nbsp;</td>
							<td>
								- Hồ Chí Minh<br />				</td>
						 </tr>
			
						  
						  <tr><td colspan="5">&nbsp;</td></tr>
						  
						  <tr>
							<td align="right" valign="top" class="txt_tilte_lv2" style="text-align:right">Mục Tiêu Nghề Nghiệp</td>
							<td>&nbsp;</td>
							<td colspan="3">123</td>
						 </tr>
						 <tr>
							<td colspan="5">&nbsp;</td>
			
						 </tr>
						  <tr>
							<td class="txt_tilte_lv2" style="text-align:right">Mức Lương</td>
							<td>&nbsp;</td>
							<td>Mức lương hiện tại:</td>
							<td>&nbsp;</td>
							<td>N/A</td>
			
						 </tr>
						  <tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>Mức lương mong muốn:</td>
							<td>&nbsp;</td>
							<td>N/A</td>
						 </tr>
			
						  <tr>
							<td align="right" >&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td><div style="text-align:right; margin-bottom:10px">[ <a  class="link" href="#">Trở về đầu</a> ]</div></td>
						 </tr>

                    </table>
                </div>                
                <b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                    <b class="xb1 blue_top"><!-- --></b>
                </b>
            </div>
            <!--end Summary-->
        </div>
        <div style="text-align: right;">
    	   <?php echo $this->Html->Link('Đóng', '#', array('onClick'=>'window.close()','div'=>false)); ?>
    	</div>
    </div>
</div>





<div class="resume_detail">
    <h2><?php  __('Resume Detail');?></h2>
    <fieldset>
    <legend>Hồ sơ</legend>
    <table>
    	<tr>
    		<td><?php __('Tên hồ sơ: '); ?></td>
    		<td><?php echo $resume['Resume']['resume_title']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Họ tên: '); ?></td>
    		<td><?php echo $resume['Jobseeker']['last_name'].' '. $resume['Jobseeker']['first_name']; ?></td>
    	</tr>
    	<tr>
    		<td><?php __('Ngày sinh: '); ?></td>
    		<td><?php echo date('d/m/Y', strtotime($resume['Jobseeker']['birthday']));    ?>
    		</td>
    	</tr>
    	<tr>
    		<td><?php __('Giới tính: '); ?></td>
    		<td><?php echo $gender[$resume['Jobseeker']['gender']]; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Tình trạng hôn nhân: '); ?></td>
    		<td><?php echo $martial[$resume['Resume']['martial_status']]; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Quốc tịch: '); ?></td>
    		<td><?php echo $nationalities[$resume['Resume']['nationality']]; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Ðịa chỉ liên lạc: '); ?></td>
    		<td><?php echo $resume['Resume']['address']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Quốc gia: '); ?></td>
    		<td><?php echo $resume['Country']['name']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Tỉnh/Thành phố: '); ?></td>
    		<td><?php echo $resume['Province']['name']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Ðiện thoại liên lạc: '); ?></td>
    		<td><?php echo $resume['Resume']['telephone']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Di động: '); ?></td>
    		<td><?php echo $resume['Resume']['mobile']; ?></td>
    	</tr>
		<tr>
    		<td><?php __('Địa chỉ Email: '); ?></td>
    		<td><?php echo $resume['Resume']['email']; ?></td>
    	</tr>
		
    </table>
    </fieldset>   
</div>