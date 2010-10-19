<?php echo $this->element('job_menu'); ?>
<div class='container'>
<?php echo $this->Form->create('Resume',array('action'=>'createResume'));?>
    <h2>Thông tin hồ sơ</h2>
    <ul>
    	<li><?php echo $this->Form->input('resume_title', array('label'=>'Tiêu đề hồ sơ:')); ?></li>
    </ul>
    <h2>Thông tin cá nhân</h2>
    <ul>
        <li><?php echo $this->Form->input('first_name', array('label'=>'Tên:','value'=> $jobseeker['Jobseeker']['first_name'], 'readonly'=> true));?></li>
        <li><?php echo $this->Form->input('last_name', array('label'=>'Họ:','value'=> $jobseeker['Jobseeker']['last_name'], 'readonly'=> true));?></li>
        <li><?php echo $this->Form->input('birthday', array('label'=>'Ngày sinh:', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 15,'value'=> $jobseeker['Jobseeker']['birthday'], 'disabled'=> true));?></li>
        <li><?php echo $this->Form->input('gender', array('label'=>'Giới tính:', 'options' => array(0 => 'Nam', 1 =>'Nữ'), 'empty' => '...','value'=> $jobseeker['Jobseeker']['gender'], 'disabled'=> true));?></li>
        <li><?php echo $this->Form->input('martial_status', array('label'=>'Tình trạng hôn nhân:', 'options' => array(0 => 'Độc thân', 1 =>'Đã kết hôn'), 'empty' => '...'));?></li>
        <li><?php echo $this->Form->input('nationality', array('label'=>'Quốc tịch:', 'empty' => '...'));?></li>
        <li><?php echo $this->Form->input('picture', array('label'=>'Đăng hình:','type' => 'file'));?></li>
    </ul>
     <h2>Thông tin liên lạc</h2>
    <ul>
       <li><?php echo $this->Form->input('address', array('label'=>'Địa chỉ:'));?></li>
       <li><?php echo $this->Form->input('country_id', array('label'=>'Quốc gia:','empty' => 'Vui lòng chọn..','value'=> $jobseeker['Jobseeker']['country_id'], 'id'=>'countries'));?></li>
       <li><?php echo $this->Form->input('province_id', array('label'=>'Tỉnh/Thành phố:','empty' => 'Vui lòng chọn..','value'=> $jobseeker['Jobseeker']['province_id'], 'id'=>'provinces'));?></li>
       <li><?php echo $this->Form->input('telephone', array('label'=>'Số điện thoại:'));?></li>
       <li><?php echo $this->Form->input('mobile', array('label'=>'Số di động:'));?></li>
       <li><?php echo $this->Form->input('email', array('label'=>'Địa chỉ Email:','value'=> $jobseeker['Jobseeker']['email']));?></li>
    </ul>
    <?php echo $ajax->observeField('countries',array('url'=>'update_province_select','update'=>'provinces'));?>
    <div class="actions">
        <?php echo $this->Form->submit('Continue');?>
    </div>
</div>
