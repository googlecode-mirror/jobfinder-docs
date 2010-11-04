<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('jobs');
?>


<div id="job_nav_sub">
	<div class="job_wrapmenu">
		<ul class="job_subnav">
			<li><a href="/jobseekers/search.php"><span>Tìm Kiếm Nhanh</span></a></li>
			<li><a class="subactive" href="/jobseekers/adv_search.php"><span>Tìm Kiếm Nâng Cao</span></a></li>	
		</ul>	
		<br clear="all"/>
	</div><!-- end wrap -->		
</div>


<div class="wrap_search">
	<div class="line_title">
        <img width="300" height="30" alt="Tìm việc, tìm kiếm việc làm, tìm việc làm" 
            src="../img/home/btxt_advance_search_vn.gif"/>
    </div>
    <div id="search_contentpage">
        <div class="box_corner">				
            <b class="xtop">
                <b class="xb1 blue_top"><!-- --></b>
                <b class="xb2 blue_curve blue_title"><!-- --></b>
                <b class="xb3 blue_curve blue_title"><!-- --></b>
            </b>
            <div class="blue_bg_title"><strong>Tìm Việc</strong></div>
            <div class="white_content">
            <div style="padding-left: 70px;" id="jsContainer">
				<fieldset>                                   
				<label class="labelType01" for="textfield1">Từ khóa:</label>
                <input type="text" maxlength="80" value="" class="inputType01" name="keyword"/>
				<br class="clear"/>
				<label class="labelType01">Việc làm phải có:</label>
				<ul class="listType01">
					<li>
                        <input type="radio" value="1" id="match1" name="mustmatch"/>
                        <label for="match1">bất cứ từ khóa nào</label>
                    </li>
                    <li>
                        <input type="radio" checked="" value="2" id="match2" name="mustmatch"/>
                        <label for="match2">tất cả các từ khóa</label>
                    </li>
                    <li>
                        <input type="radio" value="3" id="match3" name="mustmatch"/>
                        <label for="match3">từ khóa chính xác</label>
                    </li>
                </ul>
				<br class="clear"/>

				<label class="labelType01">Ngành nghề mong muốn:</label>
				<div class="divType01">
					<div class="wrapper">
						<ul>
                        <li>
                            <input type="checkbox" value="33" id="ind33" name="industry[]"/> 
                            <label for="ind33">Bán hàng</label>
                        </li>
                        <li>
                            <input type="checkbox" value="34" id="ind34" name="industry[]"/> 
                            <label for="ind34">Bán hàng kỹ thuật</label>
                        </li>
                            <li><input type="checkbox" value="32" id="ind32" name="industry[]"/> 
                            <label for="ind32">Bán lẻ/Bán sỉ</label>
                        </li>
                        <li>
                            <input type="checkbox" value="24" id="ind24" name="industry[]"/> 
                            <label for="ind24">Bảo hiểm</label>
                        </li>
                        <li>
                            <input type="checkbox" value="30" id="ind30" name="industry[]"/> 
                            <label for="ind30">Bất động sản</label>
                        </li>
                        <li>
                            <input type="checkbox" value="47" id="ind47" name="industry[]"/> 
                            <label for="ind47">Biên phiên dịch</label>
                        </li>
                        <li>
                            <input type="checkbox" value="61" id="ind61" name="industry[]"/> 
                            <label for="ind61">Hàng gia dụng/Chăm sóc cá nhân</label>
                        </li>
                        <li>
                            <input type="checkbox" value="56" id="ind56" name="industry[]"/> 
                            <label for="ind56">Chứng khoán</label>
                        </li>
                        <li>
                            <input type="checkbox" value="66" id="ind66" name="industry[]"/> 
                            <label for="ind66">Công nghệ cao</label>
                        </li>
                        <li>
                            <input type="checkbox" value="55" id="ind55" name="industry[]"/> 
                            <label for="ind55">IT-Phần cứng/Mạng</label>
                        </li>
                        <li><input type="checkbox" value="57" id="ind57" name="industry[]"/> 
                        <label for="ind57">Internet/Online Media</label>
                        </li>
                        <li>
                        <input type="checkbox" value="35" id="ind35" name="industry[]"/> 
                        <label for="ind35">IT - Phần mềm</label>
                        </li><li>
                        <input type="checkbox" value="65" id="ind65" name="industry[]"/> 
                        <label for="ind65">Cơ khí</label>
                        </li><li>
                        <input type="checkbox" value="28" id="ind28" name="industry[]"/> 
                        <label for="ind28">Dầu khí</label>
                        </li><li>
                        <input type="checkbox" value="52" id="ind52" name="industry[]"/> 
                        <label for="ind52">Dệt may/Da giày</label>
                        </li><li>
                        <input type="checkbox" value="11" id="ind11" name="industry[]"/> 
                        <label for="ind11">Dịch vụ khách hàng</label>
                        </li><li>
                        <input type="checkbox" value="37" id="ind37" name="industry[]"/> 
                        <label for="ind37">Hàng không/Du lịch/Khách sạn</label>
                        </li><li>
                        <input type="checkbox" value="6" id="ind6" name="industry[]"/> 
                        <label for="ind6">Dược Phẩm/Công nghệ sinh học</label>
                        </li><li>
                        <input type="checkbox" value="64" id="ind64" name="industry[]"/> 
                        <label for="ind64">Điện/Điện tử</label></li><li>
                        <input type="checkbox" value="12" id="ind12" name="industry[]"/> 
                        <label for="ind12">Giáo dục/Đào tạo</label></li><li>
                        <input type="checkbox" value="2" id="ind2" name="industry[]"/> 
                        <label for="ind2">Hành chánh/Thư ký</label></li><li>
                        <input type="checkbox" value="69" id="ind69" name="industry[]"/> 
                        <label for="ind69">Hoạch định/Dự án</label></li><li>
                        <input type="checkbox" value="43" id="ind43" name="industry[]"/> 
                        <label for="ind43">Hóa học/Hóa sinh</label></li><li>
                        <input type="checkbox" value="62" id="ind62" name="industry[]"/> 
                        <label for="ind62">Hàng cao cấp</label></li><li>
                        <input type="checkbox" value="1" id="ind1" name="industry[]"/> 
                        <label for="ind1">Kế toán/Tài chính</label></li><li>
                        <input type="checkbox" value="58" id="ind58" name="industry[]"/> 
                        <label for="ind58">Kế toán/Kiểm toán</label></li><li>
                        <input type="checkbox" value="22" id="ind22" name="industry[]"/> 
                        <label for="ind22">Y tế/Chăm sóc sức khỏe</label></li><li>
                        <input type="checkbox" value="53" id="ind53" name="industry[]"/> 
                        <label for="ind53">Kho vận</label></li><li>
                        <input type="checkbox" value="5" id="ind5" name="industry[]"/> 
                        <label for="ind5">Kiến trúc/Thiết kế nội thất </label></li><li>
                        <input type="checkbox" value="15" id="ind15" name="industry[]"/> 
                        <label for="ind15">Mới tốt nghiệp</label></li><li>
                        <input type="checkbox" value="16" id="ind16" name="industry[]"/> 
                        <label for="ind16">Môi trường/Xử lý chất thải</label></li><li>
                        <input type="checkbox" value="42" id="ind42" name="industry[]"/> 
                        <label for="ind42">Ngân hàng</label></li><li>
                        <input type="checkbox" value="10" id="ind10" name="industry[]"/> 
                        <label for="ind10">Mỹ thuật/Thiết kế</label></li><li>
                        <input type="checkbox" value="18" id="ind18" name="industry[]"/> 
                        <label for="ind18">Người nước ngoài/Việt Kiều</label></li><li>
                        <input type="checkbox" value="23" id="ind23" name="industry[]"/> 
                        <label for="ind23">Nhân sự</label></li><li>
                        <input type="checkbox" value="4" id="ind4" name="industry[]"/> 
                        <label for="ind4">Nông nghiệp/Lâm nghiệp</label></li><li>
                        <input type="checkbox" value="25" id="ind25" name="industry[]"/> 
                        <label for="ind25">Pháp lý</label></li><li>
                        <input type="checkbox" value="21" id="ind21" name="industry[]"/> 
                        <label for="ind21">Phi chính phủ/Phi lợi nhuận</label></li><li>
                        <input type="checkbox" value="17" id="ind17" name="industry[]"/> 
                        <label for="ind17">Cấp quản lý điều hành</label></li><li>
                        <input type="checkbox" value="70" id="ind70" name="industry[]"/> 
                        <label for="ind70">QA/QC</label></li><li>
                        <input type="checkbox" value="3" id="ind3" name="industry[]"/> 
                        <label for="ind3">Quảng cáo/Khuyến mãi/Đối ngoại</label></li><li>
                        <input type="checkbox" value="68" id="ind68" name="industry[]"/> 
                        <label for="ind68">Sản phẩm công nghiệp</label></li><li>
                        <input type="checkbox" value="26" id="ind26" name="industry[]"/> 
                        <label for="ind26">Sản Xuất</label></li>
                            <li>
                                <input type="checkbox" value="51" id="ind51" name="industry[]"/> 
                                <label for="ind51">Thời vụ/Hợp đồng ngắn hạn</label>
                            </li>
                            <li>
                                <input type="checkbox" value="59" id="ind59" name="industry[]"/> 
                                <label for="ind59">Tài chính/Đầu tư</label>
                            </li>
                        </ul>
					</div>
					<ul class="listType02">
						<li><a href="javascript:checkAllIndustry('industry[]')">Chọn Tất cả</a> /</li>
						<li><a href="javascript:uncheckAllIndustry('industry[]')">Bỏ tất cả mục chọn </a></li>
					</ul>
					<br class="clear"/>
				</div>
				<br class="clear"/>
                <label class="labelType01">Mức lương:</label>

				<ul class="listType03">
					<li>
						<label for="salarymin">Từ:</label>
						<input type="text" onkeyup="NumberOnly(this)" value="" id="textfield2" class="price" maxlength="10" name="salarymin">
					</li>
					<li>
						<label for="salarymax">Đến:</label>
						<input type="text" onkeyup="NumberOnly(this)" value="" id="textfield3" class="price" maxlength="10" name="salarymax">

						<label>USD/tháng</label>
					</li>
				</ul>
                
				<br class="clear"/>
				<label class="labelType01" for="city">Địa điểm:</label>
                <select class="comboType01" size="1" name="city">
                    <option selected="" value="">Tất cả</option>
                    <option value="29">Hồ Chí Minh</option>
                    <option value="24">Hà Nội</option>
                    <option value="71">ĐBSCL</option>
                    <option value="2">An Giang</option>
                    <option value="3">Bà Rịa</option>
                    <option value="4">Bắc cạn</option>
                    <option value="5">Bắc Giang</option>
                </select>
                
				<br class="clear"/>
				<label class="labelType01" for="worktype">Loại hình công việc:</label>
                <select class="comboType01" size="1" name="worktype">
                    <option selected="" value="">Bất kỳ</option>
                    <option value="1">Toàn thời gian cố định</option>
                    <option value="2">Toàn thời gian tạm thời</option>
                    <option value="3">Bán thời gian cố định</option>
                    <option value="4">Bán thời gian tạm thời</option>
                    <option value="5">Theo hợp đồng/tư vấn</option>
                    <option value="6">Thực tập</option>
                    <option value="7">Khác</option>
                </select>
                
				<br class="clear"/>
				<label class="labelType01" for="joblevel">Cấp bậc:</label>
				<select id="combo2" class="comboType01" name="joblevel">
					<option value="0">Bất kỳ</option>
                    <option value="1">Mới tốt nghiệp/Thực tập sinh</option>
                    <option value="5">Nhân viên</option>
                    <option value="6">Trưởng nhóm/Giám sát</option>
                    <option value="7">Trưởng phòng</option>
                    <option value="11">Trưởng phòng (Lương trên $1,000+)</option>
                    <option value="3">Giám đốc</option>
                    <option value="4">Tổng giám đốc điều hành</option>
                    <option value="8">Phó chủ tịch</option>
                    <option value="9">Chủ tịch</option>
				</select>
				
				<br class="clear"/>
				<div style="display: none;">
				<label class="labelType01" for="education">Học vấn:</label>
				<select class="comboType01" size="1" name="education">
                    <option selected="" value="">Bất kỳ</option>
                    <option value="1">Không yêu cầu</option>
                    <option value="2">Trung học</option>
                    <option value="3">Trung cấp</option>
                    <option value="12">Cao đẳng</option>
                    <option value="4">Cử nhân</option>
                    <option value="14">Kỹ Sư</option>
                    <option value="13">Sau đại học</option>
                    <option value="10">Kế toán viên công chứng</option>
                    <option value="5">Thạc Sĩ</option>
                    <option value="7">Thạc sĩ Quản trị Kinh doanh</option>
                    <option value="8">Tiến sĩ Luật</option>
                    <option value="6">Tiến sĩ</option>
                    <option value="15">Dược Sĩ</option>
                    <option value="9">Bác sĩ Y khoa</option>
                    <option value="11">Khác</option>
                </select>

                
				<br class="clear"/>
				<label class="labelType01" for="exp">Số năm kinh nghiệm:</label>
                <input type="text" onkeyup="NumberOnly(this)" maxlength="2" value="" class="inputType01" name="exp">
				</div>

				<br class="clear"/>
				<label class="labelType01" for="days">Việc được đăng cách đây:</label>									
                <select class="comboType01" name="days">
                    <option value="">Bất kỳ</option>
                    <option value="1">1 ngày</option>
                    <option value="2">2 ngày</option>
                    <option value="3">3 ngày</option>
                    <option value="4">4 ngày</option>
                    <option value="5">5 ngày</option>
                    <option value="6">6 ngày</option>
                    <option value="7">7 ngày</option>
                    <option value="10">10 ngày</option>
                    <option value="14">14 ngày</option>
                    <option value="30">30 ngày</option>
                </select>
				<br class="clear"/>
				</fieldset>
			</div>
            </div><!--end xboxcontent-->	
                    <b class="xbottom"><b class="xb3 blue_curve blue_bg_bottom"><!-- --></b><b class="xb2 blue_curve blue_bg_bottom"><!-- --></b><b class="xb1 blue_top"><!-- --></b></b>				
            </div>
    </div>   
    <div class="pos_btn">
        <input type="submit" value="Tìm Kiếm" name="search" class="btn_search"/>
    </div>
</div>


<div style="clear: both;"></div>
