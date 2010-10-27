

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
echo $ajax->observeField('countries',array('url'=>'update_province_select','update'=>'provinces'));
echo $form->end();
*/?>


<div class="wrap_cr">

   <div id="content_cr">

		 
		 <!-- begin right col -->
		 <div id="right_cr">	
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
<option value="2">02</option>
<option value="3">03</option>
<option value="4">04</option>
<option value="5">05</option>
<option value="6">06</option>
<option value="7">07</option>
<option value="8">08</option>
<option value="9">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
								  </select>
								  <select class="field_list month" name="cbxMonth">
									  <option value="">...</option>
									  <option value="1">Tháng 1</option><option value="2">Tháng 2</option><option value="3">Tháng 3</option><option value="4">Tháng 4</option><option value="5">Tháng 5</option><option value="6">Tháng 6</option><option value="7">Tháng 7</option><option value="8">Tháng 8</option><option value="9">Tháng 9</option><option value="10">Tháng 10</option><option value="11">Tháng 11</option><option value="12">Tháng 12</option>								  </select>								  
								  <select class="field_list year" name="cbxYear">
									<option value="">...</option>
									<option value="1940">1940</option>
<option value="1941">1941</option>
<option value="1942">1942</option>
<option value="1943">1943</option>
<option value="1944">1944</option>
<option value="1945">1945</option>
<option value="1946">1946</option>
<option value="1947">1947</option>
<option value="1948">1948</option>
<option value="1949">1949</option>
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
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
<option value="2">Afghanistan</option>
<option value="3">Albania</option>
<option value="4">Algeria</option>
<option value="5">American Samoa</option>
<option value="6">Andorra</option>
<option value="7">Angola</option>
<option value="8">Anguilla</option>
<option value="9">Antarctica</option>
<option value="10">Antigua And Barbuda</option>
<option value="11">Argentina</option>
<option value="12">Armenia</option>
<option value="13">Aruba</option>
<option value="14">Úc</option>
<option value="15">Áo</option>
<option value="16">Azerbaijan</option>
<option value="17">Bahamas</option>
<option value="18">Bahrain</option>
<option value="19">Bangladesh</option>
<option value="20">Barbados</option>
<option value="21">Belarus</option>
<option value="22">Bỉ</option>
<option value="23">Belize</option>
<option value="24">Benin</option>
<option value="25">Bermuda</option>
<option value="26">Bhutan</option>
<option value="27">Bolivia</option>
<option value="28">Bosnia And Herzegowina</option>
<option value="29">Botswana</option>
<option value="30">Bouvet Island</option>
<option value="31">Brazil</option>
<option value="32">British Indian Ocean Territory</option>
<option value="33">Brunei Darussalam</option>
<option value="34">Bulgaria</option>
<option value="35">Burkina Faso</option>
<option value="36">Burundi</option>
<option value="37">Cambodia</option>
<option value="38">Cameroon</option>
<option value="39">Canada</option>
<option value="40">Cape Verde</option>
<option value="41">Cayman Islands</option>
<option value="42">Central African Republic</option>
<option value="43">Chad</option>
<option value="44">Chile</option>
<option value="45">Trung Quốc</option>
<option value="46">Christmas Island</option>
<option value="47">Cocos (Keeling) Islands</option>
<option value="48">Colombia</option>
<option value="49">Comoros</option>
<option value="50">Congo</option>
<option value="51">Cook Islands</option>
<option value="52">Costa Rica</option>
<option value="53">Cote D'Ivoire</option>
<option value="54">Croatia</option>
<option value="55">Cuba</option>
<option value="56">Cyprus</option>
<option value="57">Czech Republic</option>
<option value="58">Denmark</option>
<option value="59">Djibouti</option>
<option value="60">Dominica</option>
<option value="61">Dominican Republic</option>
<option value="62">East Timor</option>
<option value="63">Ecuador</option>
<option value="64">Egypt</option>
<option value="65">El Salvador</option>
<option value="66">Equatorial Guinea</option>
<option value="67">Eritrea</option>
<option value="68">Estonia</option>
<option value="69">Ethiopia</option>
<option value="70">Falkland Islands</option>
<option value="71">Faroe Islands</option>
<option value="72">Fiji</option>
<option value="73">Finland</option>
<option value="74">France</option>
<option value="75">France, Metropolitan</option>
<option value="76">French Guiana</option>
<option value="77">French Polynesia</option>
<option value="78">French Southern Territories</option>
<option value="79">Gabon</option>
<option value="80">Gambia</option>
<option value="81">Georgia</option>
<option value="82">Germany</option>
<option value="83">Ghana</option>
<option value="84">Gibraltar</option>
<option value="85">Greece</option>
<option value="86">Greenland</option>
<option value="87">Grenada</option>
<option value="88">Guadeloupe</option>
<option value="89">Guam</option>
<option value="90">Guatemala</option>
<option value="91">Guinea</option>
<option value="92">Guinea-Bissau</option>
<option value="93">Guyana</option>
<option value="94">Haiti</option>
<option value="95">Heard And Mc Donald Islands</option>
<option value="96">Honduras</option>
<option value="97">Hong Kong</option>
<option value="98">Hungary</option>
<option value="99">Iceland</option>
<option value="100">India</option>
<option value="101">Indonesia</option>
<option value="102">Iran</option>
<option value="103">Iraq</option>
<option value="104">Ireland</option>
<option value="105">Israel</option>
<option value="106">Italy</option>
<option value="107">Jamaica</option>
<option value="108">Japan</option>
<option value="109">Jordan</option>
<option value="110">Kazakhstan</option>
<option value="111">Kenya</option>
<option value="112">Kiribati</option>
<option value="113">North Korea (People's Republic Of Korea)</option>
<option value="114">South Korea (Republic Of Korea)</option>
<option value="115">Kuwait</option>
<option value="116">Kyrgyzstan</option>
<option value="117">Lao People's Republic</option>
<option value="118">Latvia</option>
<option value="119">Lebanon</option>
<option value="120">Lesotho</option>
<option value="121">Liberia</option>
<option value="122">Libyan Arab Jamahiriya</option>
<option value="123">Liechtenstein</option>
<option value="124">Lithuania</option>
<option value="125">Luxembourg</option>
<option value="126">Macau</option>
<option value="127">Macedonia</option>
<option value="128">Madagascar</option>
<option value="129">Malawi</option>
<option value="130">Malaysia</option>
<option value="131">Maldives</option>
<option value="132">Mali</option>
<option value="133">Malta</option>
<option value="134">Marshall Islands</option>
<option value="135">Martinique</option>
<option value="136">Mauritania</option>
<option value="137">Mauritius</option>
<option value="138">Mayotte</option>
<option value="139">Mexico</option>
<option value="140">Micronesia</option>
<option value="141">Moldova</option>
<option value="142">Monaco</option>
<option value="143">Mongolia</option>
<option value="144">Montserrat</option>
<option value="145">Morocco</option>
<option value="146">Mozambique</option>
<option value="147">Myanmar</option>
<option value="148">Namibia</option>
<option value="149">Nauru</option>
<option value="150">Nepal</option>
<option value="151">Netherlands</option>
<option value="152">Netherlands Antilles</option>
<option value="153">New Caledonia</option>
<option value="154">New Zealand</option>
<option value="155">Nicaragua</option>
<option value="156">Niger</option>
<option value="157">Nigeria</option>
<option value="158">Niue</option>
<option value="159">Norfolk Island</option>
<option value="160">Northern Mariana Islands</option>
<option value="161">Norway</option>
<option value="162">Oman</option>
<option value="163">Pakistan</option>
<option value="164">Palau</option>
<option value="165">Panama</option>
<option value="166">Papua New Guinea</option>
<option value="167">Paraguay</option>
<option value="168">Peru</option>
<option value="169">Philippines</option>
<option value="170">Pitcairn</option>
<option value="171">Poland</option>
<option value="172">Portugal</option>
<option value="173">Puerto Rico</option>
<option value="174">Qatar</option>
<option value="175">Reunion</option>
<option value="176">Romania</option>
<option value="177">Russian Federation</option>
<option value="178">Rwanda</option>
<option value="179">Saint Kitts And Nevis</option>
<option value="180">Saint Lucia</option>
<option value="181">Saint Vincent And The Grenadines</option>
<option value="182">Samoa</option>
<option value="183">San Marino</option>
<option value="184">Sao Tome And Principe</option>
<option value="185">Saudi Arabia</option>
<option value="186">Senegal</option>
<option value="187">Seychelles</option>
<option value="188">Sierra Leone</option>
<option value="189">Singapore</option>
<option value="190">Slovakia</option>
<option value="191">Slovenia</option>
<option value="192">Solomon Islands</option>
<option value="193">Somalia</option>
<option value="194">South Africa</option>
<option value="195">South Georgia/South Sandwich Islands</option>
<option value="196">Spain</option>
<option value="197">Sri Lanka</option>
<option value="198">St Helena</option>
<option value="199">St Pierre and Miquelon</option>
<option value="200">Sudan</option>
<option value="201">Suriname</option>
<option value="202">Svalbard And Jan Mayen Islands</option>
<option value="203">Swaziland</option>
<option value="204">Sweden</option>
<option value="205">Switzerland</option>
<option value="206">Syrian Arab Republic</option>
<option value="207">Taiwan</option>
<option value="208">Tajikistan</option>
<option value="209">Tanzania</option>
<option value="210">Thailand</option>
<option value="211">Togo</option>
<option value="212">Tokelau</option>
<option value="213">Tonga</option>
<option value="214">Trinidad And Tobago</option>
<option value="215">Tunisia</option>
<option value="216">Turkey</option>
<option value="217">Turkmenistan</option>
<option value="218">Turks And Caicos Islands</option>
<option value="219">Tuvalu</option>
<option value="220">Uganda</option>
<option value="221">Ukraine</option>
<option value="222">United Arab Emirates</option>
<option value="223">United Kingdom</option>
<option value="224">United States</option>
<option value="225">United States Minor Outlying Islands</option>
<option value="226">Uruguay</option>
<option value="227">Uzbekistan</option>
<option value="228">Vanuatu</option>
<option value="229">Vatican City State</option>
<option value="230">Venezuela</option>
<option value="231">Virgin Islands (British)</option>
<option value="232">Virgin Islands (U.S.)</option>
<option value="233">Wallis And Futuna Islands</option>
<option value="234">Western Sahara</option>
<option value="235">Yemen</option>
<option value="236">Zaire</option>
<option value="237">Zambia</option>
<option value="238">Zimbabwe</option>
<option value="239">Nước khác</option>
								  </select>
								</p>
								<span class="field_err" style="display: none;" id="err_cbxProvince">Vui lòng chọn Nơi cư ngụ</span>
								<p>
								  <label><span class="require">*</span> Nơi cư ngụ:</label> 								  
									<select id="cbxProvince" class="field_list field_list_w" name="cbxProvince">
									  <option selected="" value="">Vui lòng chọn...</option>
									  <option value="29">Hồ Chí Minh</option>
<option value="24">Hà Nội</option>
<option value="71">ĐBSCL</option>
<option value="2">An Giang</option>
<option value="3">Bà Rịa</option>
<option value="4">Bắc cạn</option>
<option value="5">Bắc Giang</option>
<option value="6">Bạc Liêu</option>
<option value="7">Bắc Ninh</option>
<option value="8">Bến Tre</option>
<option value="9">Biên Hòa</option>
<option value="10">Bình Định</option>
<option value="11">Bình Dương</option>
<option value="12">Bình Phước</option>
<option value="13">Bình Thuận</option>
<option value="14">Cà Mau</option>
<option value="15">Cần Thơ</option>
<option value="16">Cao Bằng</option>
<option value="17">Đà Nẵng</option>
<option value="18">Đắc Lắc</option>
<option value="69">Điện Biên</option>
<option value="19">Đồng Nai</option>
<option value="20">Đồng Tháp</option>
<option value="21">Gia Lai</option>
<option value="22">Hà Giang</option>
<option value="23">Hà Nam</option>
<option value="25">Hà Tây</option>
<option value="26">Hà Tĩnh</option>
<option value="27">Hải Dương</option>
<option value="28">Hải Phòng</option>
<option value="30">Hòa Bình</option>
<option value="31">Huế</option>
<option value="32">Hưng Yên</option>
<option value="33">Khánh Hòa</option>
<option value="34">Kon Tum</option>
<option value="35">Lai Châu</option>
<option value="36">Lâm Đồng</option>
<option value="37">Lạng Sơn</option>
<option value="38">Lào Cai</option>
<option value="39">Long An</option>
<option value="40">Nam Định</option>
<option value="41">Nghệ An</option>
<option value="42">Ninh Bình</option>
<option value="43">Ninh Thuận</option>
<option value="44">Phú Thọ</option>
<option value="45">Phú Yên</option>
<option value="46">Quảng Bình</option>
<option value="47">Quảng Nam</option>
<option value="48">Quảng Ngãi</option>
<option value="49">Quảng Ninh</option>
<option value="50">Quảng Trị</option>
<option value="51">Sóc Trăng</option>
<option value="52">Sơn La</option>
<option value="53">Tây Ninh</option>
<option value="54">Thái Bình</option>
<option value="55">Thái Nguyên</option>
<option value="56">Thanh Hóa</option>
<option value="57">Thừa Thiên-Huế</option>
<option value="58">Tiền Giang</option>
<option value="59">Trà Vinh</option>
<option value="60">Tuyên Quang</option>
<option value="61">Kiên Giang</option>
<option value="62">Vĩnh Long</option>
<option value="63">Vĩnh Phúc</option>
<option value="64">Vũng Tàu</option>
<option value="65">Yên Bái</option>
<option value="66">Khác</option>
<option value="70">Quốc tế</option>
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
<option value="3">Báo/Tạp chí</option>
<option value="4">Bạn bè</option>
<option value="6">Hội chợ việc làm</option>
<option value="1">Công cụ tìm kiếm</option>
<option value="7">Quảng cáo trên truyền hình</option>
<option value="13">Tờ rơi trên taxi</option>
<option value="19">Quảng cáo tại thang máy</option>
<option value="5">Khác</option>
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
   </div>
   <!-- end content -->
</div>


<br clear="all"/>
