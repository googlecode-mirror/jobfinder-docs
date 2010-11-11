
<div class="wrap_cr">
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/create_resume_tit_vn.gif" />
    <!-- begin content -->
    <div id="content_cr">
        <!-- begin right col -->
        <div id="right_cr">
            <!-- begin Resume Information -->
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"></b>
                    <b class="xb2 blue_curve blue_title"></b>
                    <b class="xb3 blue_curve blue_title"></b>
                </b>
                <div class="blue_bg_title"><strong>Thông Tin Hồ Sơ</strong></div>
                <div class="white_content">
                    <table width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tbody>
                            <tr style="display: none;" id="err_resumetitle">
                                <td width="18%" height="27"></td>
                            </tr>
                            <tr valign="top">
                                <td width="18%" height="27">
                                    <span class="require">*</span> <strong>Tiêu Đề Hồ Sơ:</strong>
                                </td>
                                <td width="82%">
                                    <?php echo $this->Form->input('resume_title', array('label'=>false,
                                            'type'=>'text','style'=>'width: 325px', 'div'=>false)); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="both"></div>
                </div>
                <!--end xboxcontent-->
                <b class="xbottom">
                    <b class="xb3 blue_curve blue_bg_bottom"></b>
                    <b class="xb2 blue_curve blue_bg_bottom"></b>
                    <b class="xb1 blue_top"></b>
                </b>
            </div>
            
            <!-- Deteil Resume Information -->
            <div class="box_corner">
            <b class="xtop">
                <b class="xb1 blue_top"></b>
                <b class="xb2 blue_curve blue_title"></b>
                <b class="xb3 blue_curve blue_title"></b>
            </b>
            <div class="blue_bg_title"><strong>Thông Tin Cá Nhân</strong></div>
            <div class="white_content">
                <table width="100%" border="0"><tbody><tr>
                    <td>
                        <div style="position: relative;">
                            <div class="form_field">
                                <div style="position: absolute; left: 600px; top: 0px; text-align: center;" id="rpicture">
                                    <img alt="" src="http://images.vietnamworks.com/js_photo.gif"/>
                                </div>
                                <p>
                                    <label class="lb_hide"><span class="require">*</span> Tên:</label>
                                    <?php echo $this->Form->input('first_name', array('label'=> false,
                                            'class'=>'field field_dis','div'=>false,
                                            'value'=> $jobseeker['Jobseeker']['first_name'], 
                                            'readonly'=> true));?>
                                </p>
                                <p>
                                    <label class="lb_hide">Họ:</label>
                                    <?php echo $this->Form->input('last_name', array('label'=>false,
                                            'class'=>'field field_dis','div'=>false,
                                            'value'=> $jobseeker['Jobseeker']['last_name'], 'readonly'=> true));?>
                                </p>
                                
                                <p style="height: 30px;">
                                    <label>
                                        <span class="require">*</span> Ngày Sinh:</label>
                                    <select class="field_list day" name="day">
                                        <option value="0">...</option>
                                        <option value="1">xx</option>
                                    </select>
                                    <select class="field_list month" name="month">
                                        <option value="0">...</option>
                                        <option value="1">Tháng x</option>
                                    </select>
                                    <select class="field_list year" name="year">
                                        <option value="1940">19xx</option>
                                    </select>
                                </p>
                                <p>
                                    <label><span class="require">*</span> Giới Tính:</label>                                    
                                    <?php echo $this->Form->input('gender', array('label'=>false,
                                        'class'=>'field_list gender','div'=>false,
                                        'options' => array(0 => 'Nam', 1 =>'Nữ'), 
                                        'empty' => '...','value'=> $jobseeker['Jobseeker']['gender'], 
                                        'disabled'=> true));?>
                                </p>
                                <p>
                                    <label><span class="require">*</span> Tình Trạng Hôn Nhân:</label>
                                    <?php echo $this->Form->input('martial_status', array('label'=>false, 
                                        'class'=>'field_list marial','div'=>false,
                                        'options' => array(0 => 'Độc thân', 1 =>'Đã kết hôn'), 
                                        'empty' => '...'));?>
                                </p>
                                <p>
                                    <label><span class="require">*</span> Quốc Tịch:</label>
                                    <?php echo $this->Form->input('nationality', array('label'=>false,
                                        'class'=>'field_list nationality','div'=>false, 
                                        'empty' => '...'));?>
                                </p>
                                <p>
                                    <label>Đăng Hình:</label>
                                    <input type="file" size="32" id="picture" style="margin-left: 10px; width: 250px;
                                        height: 20px;" name="picture"/>
                                    <input type="button" style="height: 20px;" onclick="ajaxFileUpload()" onmouseover="return escape('Chỉ sử dụng hình 3x4, không dùng hình chân dung hoặc phong cảnh. Để thu nhỏ dung lượng hình, bạn có thể sử dụng phần mềm &lt;strong&gt;Microsoft Office Picture Manager&lt;/strong&gt;')"
                                        value="Đăng hình" name="upload"/>
                                    <img alt="" style="display: none;" src="../img/home/loading.gif"
                                        id="loading"/>
                                </p>
                            </div>
                        </div>
                    </td></tr></tbody>
                </table>
            </div>
            <!--end xboxcontent-->
            <b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
            </b>
            </div>
            
            
            <div class="box_corner">
            <b class="xtop">
                <b class="xb1 blue_top"></b>
                <b class="xb2 blue_curve blue_title"></b>
                <b class="xb3 blue_curve blue_title"></b>
            </b>
            <div class="blue_bg_title">
                <strong>Thông Tin Liên Lạc</strong></div>
            <div class="white_content">
                <div class="form_field">
                    <p>
                        <label><span class="require">*</span> Địa Chỉ:</label>
                        <?php echo $this->Form->input('address', array('label'=>false,
                                'class'=>'field','div'=>false,));?>
                    </p>
                    <p>
                        <label><span class="require">*</span> Quốc Gia:</label>
                        <?php echo $this->Form->input('country_id', array('label'=>false,
                                'class'=>'field_list field_list_w','div'=>false,
                                'empty' => 'Vui lòng chọn..','value'=> $jobseeker['Jobseeker']['country_id'], 
                                'id'=>'countries'));?>
                    </p>
                    <p>
                        <label><span class="require">*</span> Tỉnh/Thành Phố:</label>
                        <?php echo $this->Form->input('province_id', array('label'=>false,
                                'class'=>'field_list field_list_w','div'=>false,
                                'empty' => 'Vui lòng chọn..','value'=> $jobseeker['Jobseeker']['province_id'], 
                                'id'=>'provinces'));?>
                    </p>
                    <p>
                        <label>Số Điện Thoại:</label>                        
                        <?php echo $this->Form->input('telephone', array('label'=>false,
                                'class'=>'field','div'=>false));?>
                    </p>
                    <p>
                        <label>Số Di Động:</label>
                        <?php echo $this->Form->input('mobile', array('label'=>false,
                                'class'=>'field','div'=>false));?>
                    </p>
                    <p>
                        <label><span class="require">*</span> Địa Chỉ Email:</label>               
                        <?php echo $this->Form->input('email', array('label'=>false,
                                'class'=>'field','div'=>false,
                                'value'=> $jobseeker['Jobseeker']['email']));?>
                    </p>
                </div>
            </div>
            <!--end xboxcontent-->
            <b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
            </b>
            </div>
            
            <div class="box_corner">
            <b class="xtop">
                <b class="xb1 blue_top"></b>
                <b class="xb2 blue_curve blue_title"></b>
                <b class="xb3 blue_curve blue_title"></b>
            </b>
            <div class="blue_bg_title">
                <strong>Kinh nghiệm làm việc</strong></div>
            <div class="white_content">
                <div class="form_field">
                    <p>
                        <label><span class="require">*</span> Tổng số năm kinh nghiệm:</label>
                        <?php echo $this->Form->input('years_exp', array('label'=>false,
                                'class'=>'field','div'=>false,));?>
                    </p>
                    
                </div>
            </div>
            <!--end xboxcontent-->
            <b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
            </b>
            </div>
            
            <?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>            

            <div style="text-align: right;">
                <?php echo $this->Form->submit('Hủy',array('class'=>'btn_back','name'=>'btn_back','div'=>false));?>
                <?php echo $this->Form->submit('Tiếp tục',array('class'=>'btn_cont','name'=>'btn_cont','div'=>false));?>
            </div>
        </div>
        <!-- end right col -->

    </div>
    <!-- end content -->
</div>



<!--
<div class='container'> 
    <?php echo $this->Form->create('Resume',array('action'=>'createResume'));?>
    <h2>Thông tin h? so</h2>
    <ul>
    	<li><?php echo $this->Form->input('resume_title', array('label'=>'Tiêu d? h? so:')); ?></li>
    </ul>
    <h2>Thông tin cá nhân</h2>
    <ul>
        <li><?php echo $this->Form->input('first_name', array('label'=>'Tên:','value'=> $jobseeker['Jobseeker']['first_name'], 'readonly'=> true));?></li>
        <li><?php echo $this->Form->input('last_name', array('label'=>'H?:','value'=> $jobseeker['Jobseeker']['last_name'], 'readonly'=> true));?></li>
        <li><?php echo $this->Form->input('birthday', array('label'=>'Ngày sinh:', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 15,'monthNames' => false ,'value'=> $jobseeker['Jobseeker']['birthday'], 'disabled'=> true));?></li>
        <li><?php echo $this->Form->input('gender', array('label'=>'Gi?i tính:', 'options' => array(0 => 'Nam', 1 =>'N?'), 'empty' => '...','value'=> $jobseeker['Jobseeker']['gender'], 'disabled'=> true));?></li>
        <li><?php echo $this->Form->input('martial_status', array('label'=>'Tình tr?ng hôn nhân:', 'options' => array(0 => 'Ð?c thân', 1 =>'Ðã k?t hôn'), 'empty' => '...'));?></li>
        <li><?php echo $this->Form->input('nationality', array('label'=>'Qu?c t?ch:', 'empty' => '...'));?></li>
        <li><?php echo $this->Form->input('picture', array('label'=>'Ðang hình:','type' => 'file'));?></li>
    </ul>
    <h2>Thông tin liên l?c</h2>
    <ul>
       <li><?php echo $this->Form->input('address', array('label'=>'Ð?a ch?:'));?></li>
       <li><?php echo $this->Form->input('country_id', array('label'=>'Qu?c gia:','empty' => 'Vui lòng ch?n..','value'=> $jobseeker['Jobseeker']['country_id'], 'id'=>'countries'));?></li>
       <li><?php echo $this->Form->input('province_id', array('label'=>'T?nh/Thành ph?:','empty' => 'Vui lòng ch?n..','value'=> $jobseeker['Jobseeker']['province_id'], 'id'=>'provinces'));?></li>
       <li><?php echo $this->Form->input('telephone', array('label'=>'S? di?n tho?i:'));?></li>
       <li><?php echo $this->Form->input('mobile', array('label'=>'S? di d?ng:'));?></li>
       <li><?php echo $this->Form->input('email', array('label'=>'Ð?a ch? Email:','value'=> $jobseeker['Jobseeker']['email']));?></li>
    </ul>
    <h2>Kinh nghi?m làm vi?c</h2>
    <ul>
       <li><?php echo $this->Form->input('years_exp', array('label'=>'T?ng s? nam kinh nghi?m:'));?></li>
    </ul>
    <?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
    <div class="actions">
        <?php echo $this->Form->submit('Tiếp tục');?>
    </div>
</div>
-->
