<?php echo $this->Html->css('style_cr'); ?>
<?php
/*
echo $form->create('Jobseeker', array('action' => 'register'));
echo $form->input('email');
echo $form->input('password', array('type' => 'password', 'label' => 'Password'));
echo $form->input('first_name');
echo $form->input('last_name');
echo $form->input('birthday', array('dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 15));
echo $form->input('gender', array('options' => array(0=> 'Nam', 1 =>'Nữ'), 'empty' => '...'));
echo $form->input('country_id', array('empty' => 'Vui lòng chọn..','id'=>'countries'));
echo $form->input('province_id', array('empty' => 'Vui lòng chọn..','id'=>'provinces'));
echo $form->input('howknow', array('label' => 'How do you know ?', 'empty' => 'Vui lòng chọn...'));
//echo $captchaTool->show();
echo $captchaError;
echo $form->submit('Create Account');
echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));
echo $form->end();
*/?>



<div class="wrap_cr">
   
   <div class="wrap_cr under"><img width="300" height="30" alt="Đăng ký tài khoản tìm việc làm" src="http://images.vietnamworks.com/create_resume_signup_vn.gif"></div>
   <!--begin line & current step -->
   
   <!--end line & current step -->
   
   <!--begin content -->
   <div id="content_cr">
	
		 	<form class="form_field" onsubmit="return checkForm();" method="post" action="/jobseekers/signup.php" name="frm">		 	
		    <div class="qr_info"><span class="require">*</span> <strong>Thông tin bắt buộc</strong></div>
			<p class="error" id="err_top" style="display: none; padding-bottom: 10px;">
							 <img alt="" src="http://images.vietnamworks.com/bullet_error.gif"> Dữ liệu bạn cung cấp chưa hợp lệ. Vui lòng kiểm tra lại các dữ liệu sai có dòng thông báo màu đỏ.
							</p>
 			<div class="box_corner">				
                    <b class="xtop"><b class="xb1 blue_top"><!-- --></b><b class="xb2 blue_curve blue_title"><!-- --></b><b class="xb3 blue_curve blue_title"><!-- --></b></b>					
					<div class="blue_bg_title"><strong>Thông Tin Đăng Ký</strong></div>
					<div class="white_content">	
<table width="100%" border="0">
  <tbody><tr>
    <td>												
							<span class="field_err" style="display: none;" id="err_error_insert">
							  LỖI DỮ LIỆU NHẬP
							</span>							
							<span class="field_green" style="display: none;" id="err_notExist_email">
							 Bạn có thể sử dụng địa chỉ email này.
							</span>
							<span class="field_err" style="display: none;" id="err_duplicate_email">
							  Địa chỉ email này đã được sử dụng. Xin vui lòng dùng địa chỉ khác
							</span>
							<span class="field_err" style="display: none;" id="err_txtEmail">
							 Email đăng nhập không hợp lệ.
							</span>
							<p style="height: 22px;">
							  <label><span class="require">*</span> Email đăng nhập:</label> <input type="text" class="field" value="" name="txtEmail" maxlength="255"> 
							  <a onmouseover="return escape('Bạn nên dùng địa chỉ email thường sử dụng nhất và tránh dùng email có ý nghĩa không nghiêm túc như: hotlips@... hay eccentricman@...')" class="hintanchor"><img width="22" height="22" alt="" src="http://images.vietnamworks.com/icon_q.gif" onmouseout="javascript: this.src = 'http://images.vietnamworks.com/icon_q.gif';" onmouseover="javascript: this.src = 'http://images.vietnamworks.com/icon_q_over.gif';"></a>
							</p>
							<div class="check_avail">
								Email này cũng là tên đăng nhập của bạn. <br>
								Email kích hoạt sẽ được gửi tới tài khoản này. <br>
									<a class="link" onclick="javascript:chkEmailAvailable()" href="#">Kiểm tra sự tồn tại của email</a>
									<input type="hidden" value="0" name="chkEmail">
							</div>
							<span class="field_err" style="display: none;" id="err_txtEmail2">
							 Email xác nhận không hợp lệ.
							</span>
							<p>
							  <label><span class="require">*</span> Nhập lại email:</label> <input type="text" class="field" value="" name="txtEmail2" maxlength="255">
							</p>
							<span class="field_err" style="display: none;" id="err_txtPassword">
							 Mật khẩu không hợp lệ.
							</span>
							<p>
							  <label><span class="require">*</span> Nhập mật khẩu:</label> <input type="password" class="field" value="" name="txtPassword" maxlength="255">&nbsp; 4 đến 20 ký tự
							</p>			
							<span class="field_err" style="display: none;" id="err_txtPassword2">
							  Mật khẩu xác nhận không hợp lệ.
							</span>
							<p>
							  <label><span class="require">*</span> Xác nhận mật khẩu:</label> <input type="password" class="field" value="" name="txtPassword2" maxlength="255">
							</p>
							<div class="line_dotted"><!-- --></div>
							<span class="field_err" style="display: none;" id="err_txtFirstname">
							 Vui lòng nhập tên (Tên không được phép chứa số và các ký tự đặc biệt).
							</span>
    					    <p>
							  <label><span class="require">*</span> Tên:</label> <input type="text" class="field" value="" name="txtFirstname" maxlength="255">
							</p>
							<span class="field_err" style="display: none;" id="err_txtLastname">
							  Vui lòng nhập họ (Họ không được phép chứa số và các ký tự đặc biệt).
							</span>
							<p>
							  <label><span class="require">*</span> Họ:</label> <input type="text" class="field" value="" name="txtLastname" maxlength="255">
							</p>
							<span class="field_err" style="display: none;" id="err_txtBirthday">
							  Ngày sinh sai định dạng
							</span>
							<span class="field_err" style="display: none;" id="err_cbxMonth">
							  Ngày sinh sai định dạng
							</span>
							<p style="height: 30px;">
								  <label><span class="require">*</span> Ngày sinh:</label> 
								  <select class="field_list day" name="cbxDay">
									<option value="">...</option>
									<option value="1">01</option>

								  </select>
								  <select class="field_list month" name="cbxMonth">
									  <option value="">...</option>
									  <option value="1">Tháng 1</option><option value="2">Tháng 2</option><option value="3">Tháng 3</option><option value="4">Tháng 4</option><option value="5">Tháng 5</option><option value="6">Tháng 6</option><option value="7">Tháng 7</option><option value="8">Tháng 8</option><option value="9">Tháng 9</option><option value="10">Tháng 10</option><option value="11">Tháng 11</option><option value="12">Tháng 12</option>								  </select>								  
								  <select class="field_list year" name="cbxYear">
									<option value="">...</option>
									<option value="19xx">19xx</option>

								  </select>								  
								</p>
								<span class="field_err" style="display: none;" id="err_cbxGender">Vui lòng chọn giới tính</span>
								<p>
								  <label><span class="require">*</span> Giới tính:</label> 
								  <select class="field_list gender" id="cbxGender" name="cbxGender">
									  <option value="0">....</option>
									  <option value="1">Nam</option>
<option value="2">Nữ</option>
									</select>
      
								</p>
								<span class="field_err" style="display: none;" id="err_cbxCountry">
									 Vui lòng chọn quốc gia.
								</span>
								<p>
								  <label><span class="require">*</span> Quốc gia:</label> 
								  <select class="field_list field_list_w" onchange="changeCity(this.value)" name="cbxCountry">
									 <option value="1">Việt Nam</option>

								  </select>
								</p>
								<span class="field_err" style="display: none;" id="err_cbxProvince">Vui lòng chọn Nơi cư ngụ</span>
								<p>
								  <label><span class="require">*</span> Nơi cư ngụ:</label> 								  
									<select id="cbxProvince" class="field_list field_list_w" name="cbxProvince">
									  <option selected="" value="">Vui lòng chọn...</option>
									  <option value="29">Hồ Chí Minh</option>

									</select>
								</p>
								<span class="field_err" style="display: none;" id="err_cbxHowYouKnowusid">							  
								  Vui lòng chọn Làm thế nào bạn biết đến chúng tôi?
								</span>								  
								<p>
								  <label><span class="require">*</span> Làm thế nào bạn biết đến chúng tôi?</label>
								  <select id="cbxHowYouKnowusid" class="field_list field_list_w" name="cbxHowYouKnowusid">
									  <option selected="" value="">Vui lòng chọn...</option>
									  <option value="2">Website khác</option>

									</select>
								</p>
							<div class="line_h"><!-- --></div><br>							
				
							<p style="display: none; color: rgb(255, 0, 0);" id="err_chkIAgree">
							 Vui lòng chọn "Tôi đã đọc và đồng ý với các Quy định bảo mật &amp; Thỏa thuận sử dụng của Vietnamworks.com"
							</p>			
							<div class="more"><input type="checkbox" class="checkm" id="chkIAgree" value="1" name="chkIAgree"> 
											
							<span class="lbm"><span class="require">*</span> Tôi đã đọc và đồng ý với các <a target="_blank" class="link" href="../privacy_policy.php">Quy định bảo mật</a> &amp; <a target="_blank" class="link" href="../terms_of_use.php">Thỏa thuận sử dụng</a> của <br><strong>&nbsp;&nbsp;&nbsp;Vietnamworks.com</strong>. </span></div><br>
							
							<div class="more"><input type="checkbox" class="checkm" checked="" value="1" name="chkIsNewLetter"> 
							<span style="padding-left: 22px; display: block;">Gửi cho tôi <a target="_blank" class="link" href="sample_newsletter.php">bản tin việc làm</a> hàng tuần cập nhật những việc làm mới nhất, những khóa học hay trong tuần và các tư vấn nghề nghiệp hữu ích.</span></div>
						
							<div class="both"><!-- --></div>
											</td>
  </tr>
</tbody></table>
					</div><!--end xboxcontent-->	
					<b class="xbottom"><b class="xb3 blue_curve blue_bg_bottom"><!-- --></b><b class="xb2 blue_curve blue_bg_bottom"><!-- --></b><b class="xb1 blue_top"><!-- --></b></b>				
			</div>				
		
			<div style="text-align: right;"><input type="Submit" value="Đăng ký" class="btn_back" name="Submit"><input type="hidden" value=" I agree " name="Submit"> </div>

		 <!-- end right col -->
		 </form>
		
   </div>
   <!--end content-->
</div>


