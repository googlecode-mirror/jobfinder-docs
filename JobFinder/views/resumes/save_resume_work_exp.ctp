<div class='container'>
<?php echo $this->Form->create('Resume');?>
    <h2>Kinh nghiệm làm việc</h2>
    <ul>
    	<li><?php echo $this->Form->input('ResumeWorkExp.resume_id', array('type'=>'hidden', 'value' => $this->Session->read('resumeID'))); ?></li>
    	<li><?php echo $this->Form->input('ResumeWorkExp.years_work', array('label'=>'Số năm kinh nghiệm: ')); ?></li>
    </ul>
    <div class="actions">
        <?php echo $this->Form->submit('Continue');?>
    </div>
</div>

