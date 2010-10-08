<?php echo $this->Form->Create('Job');?>

<?php echo $this->Form->input('job_title', array('lable' => 'Chức danh'));?>
<?php echo $this->Form->input('status', array('options' => array( 0 => "Chờ duyệt", 1=> "Đã duyệt", 2 => "Không đạt", 3 => "Đã chỉnh sửa chờ duyệt")));?>
<?php echo $this->Form->end(__('Submit', true));?>
