<h2>Create an Account</h2>
<?php
echo $form->create('Jobseeker', array('action' => 'register'));
echo $form->input('email');
echo $form->input('password', array('type' => 'password', 'label' => 'Password'));
echo $form->input('first_name');
echo $form->input('last_name');
echo $form->input('birthday', array('dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 15));
echo $form->input('gender', array('options' => array(0=> 'Nam', 1 =>'Nữ'), 'empty' => '...'));
echo $form->input('country_id', array('empty' => 'Vui lòng chọn..'));
echo $form->input('province_id', array('empty' => 'Vui lòng chọn..'));
echo $form->input('howknow', array('label' => 'How do you know ?', 'empty' => 'Vui lòng chọn...'));
echo $form->submit('Create Account');
echo $form->end();
?>