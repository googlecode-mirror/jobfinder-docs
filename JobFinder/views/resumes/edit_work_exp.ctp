<div class="wrap_cr">
    <img width="300" height="30" alt="btxt_edit_resume_vn"
        style="margin-left: 115px;" 
        src="../img/home/btxt_edit_resume_vn.gif" />
    <!-- begin content -->
    <div id="content_cr">
    <?php echo $this->Form->create('Resume',array('action'=>'editWorkExp'));?>
    <?php echo $this->Form->input('id'); ?>
        <!-- begin right col -->
        <div id="right_cr">
            
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
            <b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
            </b>
            </div>
            
            <div style="text-align: right;">    
            	<?php echo $this->Html->link(__('Trở lại', true), array('action' => 'preview', $this->Session->read('resumeID') ));?>            
                <?php echo $this->Form->submit('Lưu',array('class'=>'btn_cont','name'=>'btn_cont','div'=>false));?>                
            </div>
        </div>
        <!-- end right col -->

    </div>
    <!-- end content -->
</div>


<!--

<div class='container'>
<?php echo $this->Form->create('Resume', array('action'=>'modifyResume'));?>
    <h2>Thông tin h? so</h2>
    <ul>
    	<li></li>
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
       <li><?php echo $this->Form->input('country_id', array('label'=>'Qu?c gia:','empty' => 'Vui lòng ch?n..','id'=>'countries'));?></li>
       <li><?php echo $this->Form->input('province_id', array('label'=>'T?nh/Thành ph?:','empty' => 'Vui lòng ch?n..','id'=>'provinces'));?></li>
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
        <?php echo $this->Form->submit('Continue');?>
    </div>
</div>
-->