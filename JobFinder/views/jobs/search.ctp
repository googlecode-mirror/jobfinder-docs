<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('jobs');
?>


<div id="job_nav_sub">
	<div class="job_wrapmenu">
		<ul class="job_subnav">
			<li><a class="subactive" href="/jobseekers/search.php"><span>Tìm Kiếm Nhanh</span></a></li>
			<li><a href="/jobseekers/adv_search.php"><span>Tìm Kiếm Nâng Cao</span></a></li>	
		</ul>	
		<br clear="all"/>
	</div><!-- end wrap -->		
</div>


<div class="wrap_search">
	<div class="line_title">
        <img width="300" height="30" alt="Tìm việc, tìm việc làm, tìm việc nhanh" 
                src="../img/home/btxt_job_search_vn.gif"/>
    </div>
    <div id="search_contentpage">
    	<!-- begin keyword -->
		<div class="box_corner">				
            <b class="xtop">
                <b class="xb1 blue_top"><!-- --></b>
                <b class="xb2 blue_curve blue_title"><!-- --></b>
                <b class="xb3 blue_curve blue_title"><!-- --></b>
            </b>
			<div class="blue_bg_title"><strong>Tìm Việc</strong></div>
            <div class="white_content">
                <!-- begin quick search --> 
                <div class="jobsearch_bykeyword">
                    <h2 style="background: none repeat scroll 0% 0% transparent; margin: 0pt 0pt 10px;" 
                        class="tit_areasearch">Tìm Việc Bằng Từ Khóa</h2>
                    <input type="text" maxlength="80" value="" class="inputType02" name="keyword"/>
                    <input type="submit" value="Tìm kiếm" name="search" style="margin-bottom: 7px; width: 70px;"/>
                    <br/>
					<select class="comboType02_industry" name="industry">
                        <option value="0">Bất kỳ ngành nghề</option>
                        <option value="33">Bán hàng</option>
                        <option value="34">Bán hàng kỹ thuật</option>
                        <option value="32">Bán lẻ/Bán sỉ</option>
                        <option value="24">Bảo hiểm</option>
                        <option value="30">Bất động sản</option>
                        <option value="47">Biên phiên dịch</option>
                        <option value="61">Hàng gia dụng/Chăm sóc cá nhân</option>
                        <option value="56">Chứng khoán</option>
                        <option value="66">Công nghệ cao</option>
                        <option value="55">IT-Phần cứng/Mạng</option>
                        <option value="57">Internet/Online Media</option>
                        <option value="35">IT - Phần mềm</option>
                        <option value="65">Cơ khí</option>
                        <option value="28">Dầu khí</option>
                        <option value="52">Dệt may/Da giày</option>
                        <option value="11">Dịch vụ khách hàng</option>
                        <option value="37">Hàng không/Du lịch/Khách sạn</option>
                        <option value="6">Dược Phẩm/Công nghệ sinh học</option>
                        <option value="64">Điện/Điện tử</option>
                        <option value="12">Giáo dục/Đào tạo</option>
                        <option value="2">Hành chánh/Thư ký</option>
                        <option value="69">Hoạch định/Dự án</option>
                        <option value="43">Hóa học/Hóa sinh</option>
                        <option value="62">Hàng cao cấp</option>
                        <option value="1">Kế toán/Tài chính</option>
                        <option value="58">Kế toán/Kiểm toán</option>
                        <option value="22">Y tế/Chăm sóc sức khỏe</option>
                        <option value="53">Kho vận</option>
                        <option value="5">Kiến trúc/Thiết kế nội thất </option>
                        <option value="15">Mới tốt nghiệp</option>
                        <option value="16">Môi trường/Xử lý chất thải</option>
                        <option value="42">Ngân hàng</option>
                        <option value="10">Mỹ thuật/Thiết kế</option>
                        <option value="18">Người nước ngoài/Việt Kiều</option>
                        <option value="23">Nhân sự</option>
                        <option value="4">Nông nghiệp/Lâm nghiệp</option>
                        <option value="25">Pháp lý</option>
                        <option value="21">Phi chính phủ/Phi lợi nhuận</option>
                        <option value="17">Cấp quản lý điều hành</option>
                        <option value="70">QA/QC</option>
                        <option value="3">Quảng cáo/Khuyến mãi/Đối ngoại</option>
                        <option value="68">Sản phẩm công nghiệp</option>
                        <option value="26">Sản Xuất</option>
                        <option value="51">Thời vụ/Hợp đồng ngắn hạn</option>
                        <option value="59">Tài chính/Đầu tư</option>
                        <option value="60">Thực phẩm</option>
                        <option value="63">Thời trang/Lifestyle</option>
                        <option value="54">Thực phẩm/Đồ uống</option>
                        <option value="48">Truyền hình/Truyền thông/Báo chí</option>
                        <option value="27">Marketing</option>
                        <option value="8">Tư vấn</option>
                        <option value="36">Vận chuyển/Giao nhận</option>
                        <option value="49">Vật Tư/Cung vận</option>
                        <option value="41">Viễn Thông</option>
                        <option value="7">Xây dựng</option>
                        <option value="19">Xuất nhập khẩu</option>
                        <option value="67">Ô tô</option>
                        <option value="71">Overseas Jobs</option>
                        <option value="39">Khác</option>
                    </select>
                    <select class="comboType02" name="city">
                        <option selected="" value="">Tất cả địa điểm</option>
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
             	</div>                          
                <!-- end quick search -->
	
    			<!-- begin by date -->
                <div class="jobsearch_byday">
    				<div style="background: none repeat scroll 0% 0% transparent; margin: 0pt 0pt 10px;" 
                        class="tit_areasearch">Tìm Việc Theo Ngày Tháng</div>
                    <ul style="float: none;" class="quick_list">
                        <li>» <a title="Tim Trong 3 Ngay" href="Tim 3 ngay">Tìm Việc Đã Đăng Trong 3 Ngày</a></li>
                        <li>» <a title="Tim Trong 7 Ngay" href="Tim 7 ngay">Tìm Việc Đã Đăng Trong 7 Ngày</a></li>
                        <li>» <a title="Tim Trong 14 Ngay" href="Tim 14 ngay">Tìm Việc Đã Đăng Trong 14 Ngày</a></li>
                    </ul>
                </div>
                <!-- end by date -->

    			<div style="clear: both;"></div>
    			
                <!-- begin by category -->
              	<div class="jobsearch_byindustry">
					<div class="tit_areasearch">Theo Ngành Nghề</div>
                	<div class="jobsearch_byindustry_inner">                       	                                
                        <ul class="quick_list"><span>Xây Dựng</span><li><a href="searchresults.php?search=true&amp;industry=5">Kiến trúc/Thiết kế nội thất </a> (203) </li><li><a href="searchresults.php?search=true&amp;industry=7">Xây dựng</a> (404) </li><li><a href="searchresults.php?search=true&amp;industry=30">Bất động sản</a> (132) </li></ul><br><ul class="quick_list"><span>Truyền thông</span><li><a href="searchresults.php?search=true&amp;industry=41">Viễn Thông</a> (93) </li><li><a href="searchresults.php?search=true&amp;industry=57">Internet/Online Media</a> (50) </li><li><a href="searchresults.php?search=true&amp;industry=48">Truyền hình/Truyền thông/Báo chí</a> (77) </li><li><a href="searchresults.php?search=true&amp;industry=3">Quảng cáo/Khuyến mãi/Đối ngoại</a> (157) </li><li><a href="searchresults.php?search=true&amp;industry=10">Mỹ thuật/Thiết kế</a> (124) </li></ul><br><ul class="quick_list"><span>Dịch vụ tài chính</span><li><a href="searchresults.php?search=true&amp;industry=58">Kế toán/Kiểm toán</a> (382) </li><li><a href="searchresults.php?search=true&amp;industry=42">Ngân hàng</a> (286) </li><li><a href="searchresults.php?search=true&amp;industry=59">Tài chính/Đầu tư</a> (127) </li><li><a href="searchresults.php?search=true&amp;industry=24">Bảo hiểm</a> (58) </li><li><a href="searchresults.php?search=true&amp;industry=56">Chứng khoán</a> (60) </li></ul><br><ul class="quick_list"><span>Hàng tiêu dùng</span><li><a href="searchresults.php?search=true&amp;industry=60">Thực phẩm</a> (40) </li><li><a href="searchresults.php?search=true&amp;industry=61">Hàng gia dụng/Chăm sóc cá nhân</a> (24) </li></ul><br><ul class="quick_list"><span>Khách sạn &amp; Du lịch</span><li><a href="searchresults.php?search=true&amp;industry=37">Hàng không/Du lịch/Khách sạn</a> (183) </li><li><a href="searchresults.php?search=true&amp;industry=54">Thực phẩm/Đồ uống</a> (127) </li></ul><br></div>
                    					<div class="jobsearch_byindustry_inner"><ul class="quick_list"><span>Kỹ Thuật</span><li><a href="searchresults.php?search=true&amp;industry=64">Điện/Điện tử</a> (268) </li><li><a href="searchresults.php?search=true&amp;industry=65">Cơ khí</a> (274) </li><li><a href="searchresults.php?search=true&amp;industry=43">Hóa học/Hóa sinh</a> (72) </li><li><a href="searchresults.php?search=true&amp;industry=16">Môi trường/Xử lý chất thải</a> (35) </li></ul><br><ul class="quick_list"><span>Sản xuất</span><li><a href="searchresults.php?search=true&amp;industry=66">Công nghệ cao</a> (41) </li><li><a href="searchresults.php?search=true&amp;industry=67">Ô tô</a> (56) </li><li><a href="searchresults.php?search=true&amp;industry=68">Sản phẩm công nghiệp</a> (78) </li><li><a href="searchresults.php?search=true&amp;industry=6">Dược Phẩm/Công nghệ sinh học</a> (60) </li><li><a href="searchresults.php?search=true&amp;industry=28">Dầu khí</a> (65) </li><li><a href="searchresults.php?search=true&amp;industry=52">Dệt may/Da giày</a> (85) </li><li><a href="searchresults.php?search=true&amp;industry=4">Nông nghiệp/Lâm nghiệp</a> (23) </li></ul><br><ul class="quick_list"><span>Bán lẻ</span><li><a href="searchresults.php?search=true&amp;industry=32">Bán lẻ/Bán sỉ</a> (38) </li><li><a href="searchresults.php?search=true&amp;industry=62">Hàng cao cấp</a> (12) </li><li><a href="searchresults.php?search=true&amp;industry=63">Thời trang/Lifestyle</a> (26) </li></ul><br><ul class="quick_list"><span>Dịch vụ</span><li><a href="searchresults.php?search=true&amp;industry=21">Phi chính phủ/Phi lợi nhuận</a> (72) </li><li><a href="searchresults.php?search=true&amp;industry=8">Tư vấn</a> (63) </li><li><a href="searchresults.php?search=true&amp;industry=12">Giáo dục/Đào tạo</a> (94) </li><li><a href="searchresults.php?search=true&amp;industry=22">Y tế/Chăm sóc sức khỏe</a> (68) </li></ul><br><ul class="quick_list"><span>Vận tải</span><li><a href="searchresults.php?search=true&amp;industry=36">Vận chuyển/Giao nhận</a> (123) </li><li><a href="searchresults.php?search=true&amp;industry=53">Kho vận</a> (60) </li></ul><br>                                </div>                         
              	</div>
              
				<div class="jobsearch_byfunction">
					<div class="tit_areasearch">Theo Chức Năng</div>
                	<ul class="quick_list"><span>Giao Dịch Khách Hàng</span><li><a href="searchresults.php?search=true&amp;industry=27">Marketing</a> (410) </li><li><a href="searchresults.php?search=true&amp;industry=33">Bán hàng</a> (733) </li><li><a href="searchresults.php?search=true&amp;industry=34">Bán hàng kỹ thuật</a> (225) </li><li><a href="searchresults.php?search=true&amp;industry=11">Dịch vụ khách hàng</a> (208) </li></ul><br><ul class="quick_list"><span>Bộ Phận Hỗ trợ</span><li><a href="searchresults.php?search=true&amp;industry=1">Kế toán/Tài chính</a> (483) </li><li><a href="searchresults.php?search=true&amp;industry=2">Hành chánh/Thư ký</a> (420) </li><li><a href="searchresults.php?search=true&amp;industry=23">Nhân sự</a> (216) </li><li><a href="searchresults.php?search=true&amp;industry=25">Pháp lý</a> (81) </li><li><a href="searchresults.php?search=true&amp;industry=47">Biên phiên dịch</a> (146) </li></ul><br><ul class="quick_list"><span>Kỹ thuật - Công nghệ</span><li><a href="searchresults.php?search=true&amp;industry=35">IT - Phần mềm</a> (358) </li><li><a href="searchresults.php?search=true&amp;industry=55">IT-Phần cứng/Mạng</a> (222) </li></ul><br><ul class="quick_list"><span>Hỗ trợ sản xuất</span><li><a href="searchresults.php?search=true&amp;industry=26">Sản Xuất</a> (351) </li><li><a href="searchresults.php?search=true&amp;industry=49">Vật Tư/Cung vận</a> (130) </li><li><a href="searchresults.php?search=true&amp;industry=69">Hoạch định/Dự án</a> (172) </li><li><a href="searchresults.php?search=true&amp;industry=19">Xuất nhập khẩu</a> (142) </li><li><a href="searchresults.php?search=true&amp;industry=70">QA/QC</a> (116) </li><br><li><a href="searchresults.php?search=true&amp;industry=39">Khác</a> (55) </li></ul><br>                   	  	</div>
				<div class="jobsearch_bytype">
					<div class="tit_areasearch">Theo Đối Tượng</div>
                    <ul class="quick_list">
                    	<li><a href="searchresults.php?search=true&amp;industry=71">Overseas Jobs</a> (7) </li><li><a href="searchresults.php?search=true&amp;industry=18">Người nước ngoài/Việt Kiều</a> (34) </li><li><a href="searchresults.php?search=true&amp;industry=17">Cấp quản lý điều hành</a> (291) </li><li><a href="searchresults.php?search=true&amp;industry=15">Mới tốt nghiệp</a> (40) </li><li><a href="searchresults.php?search=true&amp;industry=51">Thời vụ/Hợp đồng ngắn hạn</a> (2) </li>                            </ul>                            						
                </div>
                
                <div style="clear: both;"></div>
            </div>
			<!--end xboxcontent-->	
			<b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"><!-- --></b>
                <b class="xb2 blue_curve blue_bg_bottom"><!-- --></b>
                <b class="xb1 blue_top"><!-- --></b>
            </b>				
		</div><!-- end by category -->

    </div>     
</div>

<div style="clear: both;"></div>
