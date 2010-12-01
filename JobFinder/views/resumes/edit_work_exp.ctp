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
            <div class="blue_bg_title">
                <strong>Kinh nghiệm làm việc</strong></div>
            <div class="white_content">
                <div class="form_field">
                    <p>
                        <label><span class="require">*</span> Tổng số năm kinh nghiệm:</label>
                        <?php echo $this->Form->input('years_exp', array('label'=>false,
                                'class'=>'field','div'=>false,'error'=>array('wrap'=>'span')));?>
                    </p>
                    
                </div>
            </div>
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