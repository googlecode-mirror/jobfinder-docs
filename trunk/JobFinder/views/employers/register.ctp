<?php
echo $this->Form->create('Employer');
echo $this->Form->input('email', array('label' => 'Email đăng nhập: '));
echo $this->Form->input('password', array('label' => 'Nhập mật khẩu: ', 'type' => 'password'));
echo $this->Form->input('confirm_password', array('label' => 'Xác nhận mật khẩu: ', 'type' => 'password'));
echo $this->Form->input('company_name', array('label' => 'Tên công ty: '));
echo $this->Form->input('company_size', array('label' => 'Quy mô công ty: ','empty' => 'Vui lòng chọn..'));
echo $this->Form->input('company_profile', array('label' => 'Sơ lược công ty: '));
echo $this->Form->input('company_logo', array('label' => 'Logo công ty: ','type' => 'file'));
echo $this->Form->input('country_id', array('label' => 'Quốc gia: ','empty' => 'Vui lòng chọn..','id'=>'countries'));
echo $this->Form->input('province_id', array('label' => 'Quận/huyện: ','empty' => 'Vui lòng chọn..','id'=>'provinces'));
echo $this->Form->input('address', array('label' => 'Địa chỉ công ty: '));
echo $this->Form->input('website', array('label' => 'Website: '));
echo $this->Form->input('contact_name', array('label' => 'Người đại diện: '));
echo $this->Form->input('contact_position', array('label' => 'Vị trí: '));
echo $this->Form->input('telephone', array('label' => 'Điện thoại liên lạc: '));
echo $this->Form->input('mobile', array('label' => 'Di động: '));
echo $this->Form->input('fax', array('label' => 'Fax: '));
echo $this->Form->input('howknow', array('label' => 'How do you know ?', 'empty' => 'Vui lòng chọn...'));
echo $captchaTool->show();
echo $captchaError;
echo $this->Form->end(__('Tạo tài khoản', true));
echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));
?>