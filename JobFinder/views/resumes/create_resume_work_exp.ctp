<?php echo $this->element('job_menu'); ?>
<div class='container'>
<?php echo $this->Form->create('Resume');?>
    <h2>Thông tin hồ sơ</h2>
    <ul>
    	<li><?php echo $this->Form->input('ResumeWorkExp.resume_id', array('type'=>'hidden', 'value' => $this->params['pass'][0])); ?></li>
    	<li><?php echo $this->Form->input('ResumeWorkExp.years_work', array('label'=>'Số năm kinh nghiệm:')); ?></li>
    </ul>
    
    <div class="actions">
        <?php echo $this->Form->submit('Continue');?>
    </div>
</div>