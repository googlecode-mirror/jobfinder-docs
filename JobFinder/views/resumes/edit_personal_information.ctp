<div class="wrap_cr">
    <img width="300" height="30" alt="btxt_edit_resume_vn"
        style="margin-left: 115px;" 
        src="../img/home/btxt_edit_resume_vn.gif" />
    <!-- begin content -->
    <div id="content_cr">
    <?php echo $this->Form->create('Resume',array('action'=>'editPersonalInformation'));?>
    <?php echo $this->Form->input('id'); ?>
        <!-- begin right col -->
        <div id="right_cr">
            <div class="box_corner">
            <div class="blue_bg_title"><strong>Thông Tin Cá Nhân</strong></div>
            <div class="white_content">
                <table width="100%" border="0"><tbody><tr>
                    <td>
                        <div style="position: relative;">
                            <div class="form_field">
                                <div style="position: absolute; left: 600px; top: 0px; text-align: center;" id="rpicture">
                                    <img alt="" src="http://images.vietnamworks.com/js_photo.gif"/>
                                </div>
                                <?php echo $this->Form->input('id', array('type'=>'hidden')); ?>
                                <p>
                                    <label class="lb_hide"><span class="require">*</span> Tên:</label>
                                    <?php echo $this->Form->input('first_name', array('label'=> false,
                                            'class'=>'field field_dis','div'=>false,
                                            'value'=> $jobseeker['Jobseeker']['first_name'], 
                                            'readonly'=> true,'error'=>array('wrap'=>'span')));?>
                                </p>
                                <p>
                                    <label class="lb_hide">Họ:</label>
                                    <?php echo $this->Form->input('last_name', array('label'=>false,
                                            'class'=>'field field_dis','div'=>false,
                                            'value'=> $jobseeker['Jobseeker']['last_name'], 'readonly'=> true,'error'=>array('wrap'=>'span')));?>
                                </p>
                                
                                <p style="height: 30px;">
                                    <label>
                                        <span class="require">*</span> Ngày Sinh:</label>
                                    <?php echo $this->Form->input('birthday', array('label'=>false, 'dateFormat' => 'DMY', 'class'=>'field_list', 'div'=>false,
                                   		'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 15,'monthNames' => false ,'value'=> date('d/m/Y', strtotime($jobseeker['Jobseeker']['birthday'])), 'disabled'=> true,'error'=>array('wrap'=>'span')));?>
                                </p>
                                <p>
                                    <label><span class="require">*</span> Giới Tính:</label>                                    
                                    <?php echo $this->Form->input('gender', array('label'=>false,
                                        'class'=>'field_list gender','div'=>false,
                                        'options' => array(0 => 'Nam', 1 =>'Nữ'), 
                                        'empty' => '...','value'=> $jobseeker['Jobseeker']['gender'], 
                                        'disabled'=> true,'error'=>array('wrap'=>'span')));?>
                                </p>
                                <p>
                                    <label><span class="require">*</span> Tình Trạng Hôn Nhân:</label>
                                    <?php echo $this->Form->input('martial_status', array('label'=>false, 
                                        'class'=>'field_list marial','div'=>false,
                                        'options' => array(0 => 'Độc thân', 1 =>'Đã kết hôn'), 
                                        'empty' => '...','error'=>array('wrap'=>'span')));?>
                                </p>
                                <p>
                                    <label><span class="require">*</span> Quốc Tịch:</label>
                                    <?php echo $this->Form->input('nationality', array('label'=>false,
                                        'class'=>'field_list nationality','div'=>false, 
                                        'empty' => '...','error'=>array('wrap'=>'span')));?>
                                </p>
                                <p>
                                    <label>Đăng Hình:</label>
                                    <?php echo $this->Form->input('picture', array('label'=>false,'type' => 'file','div'=>false,'style'=>'margin-left: 10px; width: 250px;','error'=>array('wrap'=>'span')));?>
                                    <img alt="" style="display: none;" src="../img/home/loading.gif"
                                        id="loading"/>
                                </p>
                            </div>
                        </div>
                    </td></tr></tbody>
                </table>
            </div>
            </div>
            
            
            <div class="box_corner">
            <div class="blue_bg_title">
                <strong>Thông Tin Liên Lạc</strong></div>
            <div class="white_content">
                <div class="form_field">
                    <p>
                        <label><span class="require">*</span> Địa Chỉ:</label>
                        <?php echo $this->Form->input('address', array('label'=>false,
                                'class'=>'field','div'=>false,'error'=>array('wrap'=>'span')));?>
                    </p>
                    <p>
                        <label><span class="require">*</span> Quốc Gia:</label>
                        <?php echo $this->Form->input('country_id', array('label'=>false,
                                'class'=>'field_list field_list_w','div'=>false,
                                'empty' => 'Vui lòng chọn..', 
                                'id'=>'countries','error'=>array('wrap'=>'span')));?>
                    </p>
                    <p>
                        <label><span class="require">*</span> Tỉnh/Thành Phố:</label>
                        <?php echo $this->Form->input('province_id', array('label'=>false,
                                'class'=>'field_list field_list_w','div'=>false,
                                'empty' => 'Vui lòng chọn..', 
                                'id'=>'provinces','error'=>array('wrap'=>'span')));?>
                    </p>
                    <p>
                        <label>Số Điện Thoại:</label>                        
                        <?php echo $this->Form->input('telephone', array('label'=>false,
                                'class'=>'field','div'=>false,'error'=>array('wrap'=>'span')));?>
                    </p>
                    <p>
                        <label>Số Di Động:</label>
                        <?php echo $this->Form->input('mobile', array('label'=>false,
                                'class'=>'field','div'=>false,'error'=>array('wrap'=>'span')));?>
                    </p>
                    <p>
                        <label><span class="require">*</span> Địa Chỉ Email:</label>               
                        <?php echo $this->Form->input('email', array('label'=>false,
                                'class'=>'field','div'=>false,
                                'value'=> $jobseeker['Jobseeker']['email'],'error'=>array('wrap'=>'span')));?>
                    </p>
                </div>
            </div>
            </div>
            
            <?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>            

            <div style="text-align: right;">   
            	<?php echo $this->Html->link(__('Trở lại', true), array('action' => 'preview', $this->Session->read('resumeID') ));?>             
                <?php echo $this->Form->submit('Lưu',array('class'=>'btn_cont','name'=>'btn_cont','div'=>false));?>                
            </div>
        </div>
        <!-- end right col -->

    </div>
    <!-- end content -->
</div>