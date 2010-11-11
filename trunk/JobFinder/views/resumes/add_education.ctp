

<div class="wrap_cr">
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/create_resume_tit_vn.gif" />
    <!-- begin content -->
    <div id="content_cr">
        <!-- begin right col -->
        <div id="right_cr">

            <div class="box_corner">
            <b class="xtop">
                <b class="xb1 blue_top"></b>
                <b class="xb2 blue_curve blue_title"></b>
                <b class="xb3 blue_curve blue_title"></b>
            </b>
            <div class="blue_bg_title"><strong>Trình độ học vấn</strong></div>
            <div class="white_content">
                <table width="100%" border="0"><tbody><tr>
                    <td>
                        <div style="position: relative;">
                            <div class="form_field">                                                                   
                                <?php echo $this->Form->input('ResumeEducation.resume_id', array('label'=> false,
                                        'type'=>'hidden', 'div'=>false, 
                                        'value' => $this->Session->read('resumeID'))); ?>                                
                                <p>
                                    <label class="labels"><span class="require">*</span> Bằng cấp chuyên môn:</label>
                                    <?php echo $this->Form->input('ResumeEducation.degree_level_id', array('label'=>false,
                                            'class'=>'field_list field_list_w', 'div'=>false,
                                            'empty' => 'Vui lòng chọn...')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Trường:</label>
                                    <?php echo $this->Form->input('ResumeEducation.program', array('label'=>false,
                                            'class'=>'field', 'div'=>false,)); ?>
                                </p> 
                                <p>
                                    <label class="labels"><span class="require">*</span> Chuyên ngành:</label>
                                    <?php echo $this->Form->input('ResumeEducation.major', array('label'=>false,
                                            'class'=>'field', 'div'=>false,)); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Quốc gia:</label>
                                    <?php echo $this->Form->input('ResumeEducation.country_id', array('label'=>false,
                                            'class'=>'field_list field_list_w', 'div'=>false, 
                                            'empty' => 'Vui lòng chọn...')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Ngày bắt đầu:</label>    
                                    <?php echo $this->Form->input('ResumeEducation.start_date', array('label'=>false, 
                                            'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                            'monthNames' => false, 'empty' => '...')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Ngày kết thúc:</label>    
                                    <?php echo $this->Form->input('ResumeEducation.end_date', array('label'=>false,
                                            'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                            'monthNames' => false, 'empty' => 'Hiện tại')); ?>
                                </p>
                                <p>
                                    <label class="labels"><span class="require">*</span> Thông tin liên quan:</label> 
                                    <?php echo $this->Form->input('ResumeEducation.related_information', array('label'=>false,
                                            'class'=>'form_field text_area', 'div'=>false, 
                                            'rows'=> 5, 'style'=>'width: 325px')); ?>
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
            <div style="text-align: right;">
                <?php echo $this->Form->submit('Thêm', array('class'=>'btn_cont','div'=>false));?>            
            </div>
            
            <div class="box_corner">
                <b class="xtop">
                    <b class="xb1 blue_top"></b>
                    <b class="xb2 blue_curve blue_title"></b>
                    <b class="xb3 blue_curve blue_title"></b>
                </b>
				<div class="blue_bg_title"><strong>Quá trình học tập</strong></div>
				<div class="white_content1" id="divContent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="30%"><?php echo ('Trường ');?></td>
                        <td width="30%"><?php echo ('Chuyên ngành ');?></td>
						<td width="20%"><?php echo ('Tốt nghiệp ');?></td>
						<td width="20%"><?php echo ('Chỉnh sửa ');?></td>
					  </tr></tbody></table>					
                </div>
                <!--end xboxcontent-->
				<b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
                </b>				
			</div>
            
                    

            <div style="text-align: right;">
                <?php if($this->Session->read('years_exp') == 0) { 
            		echo $this->Html->link(__('Trở lại', true), array('action' => 'modifyResume',
                        $this->Session->read('resumeID')));		
            	}
            	else {
            		echo $this->Html->link(__('Trở lại', true), array('action' => 'addJobExp'));
            	}?>
            
                <?php if(!empty($resumeEducations))
                    { echo $this->Html->link(__('Continue', true),                         
                    array('action' => 'saveTargetJob','class'=>'btn_cont','name'=>'btn_cont','div'=>false,)); } ?>
            </div>
        </div>
        <!-- end right col -->

    </div>
    <!-- end content -->
</div>










<!--

<div class='container'><?php echo $this->Form->create('Resume');?>
<h2>H?c v?n</h2>
<ul>
	<li><?php echo $this->Form->input('ResumeEducation.resume_id', array('type'=>'hidden', 'value' => $this->Session->read('resumeID'))); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.degree_level_id', array('label'=>'B?ng c?p chuyên môn: ', 'empty' => 'Vui lòng ch?n...')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.program', array('label'=>'Tru?ng: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.major', array('label'=>'Chuyên ngành: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.country_id', array('label'=>'Qu?c gia: ', 'empty' => 'Vui lòng ch?n...')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.start_date', array('label'=>'Ngày b?t d?u: ', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => '...')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.end_date', array('label'=>'Ngày k?t thúc: ','dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => 'Hi?n t?i')); ?></li>
	<li><?php echo $this->Form->input('ResumeEducation.related_information', array('label'=>'Thông tin liên quan: ')); ?></li>
</ul>
<ul>
	<li>
	<div class="actions"><?php echo $this->Form->submit('Thêm');?></div>
	</li>
</ul>
<ul>
	<li>
	<div class="resume educations index">
	<h2><?php __('H?c v?n');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo ('Tru?ng ');?></th>
			<th><?php echo ('Chuyên ngành ');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($resumeEducations as $resumeEducation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $resumeEducation['ResumeEducation']['program']; ?>&nbsp;</td>
			<td><?php echo $resumeEducation['ResumeEducation']['major']; ?>&nbsp;</td>
			<td class="actions"><?php echo $this->Html->link(__('Edit', true), array('action' => 'editEducation', $resumeEducation['ResumeEducation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'deleteEducation', $resumeEducation['ResumeEducation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $resumeEducation['ResumeEducation']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
	</li>
</ul>
<ul>
	<li><?php if($this->Session->read('years_exp') == 0) { 
		echo $this->Html->link(__('Tr? l?i', true), array('action' => 'modifyResume',$this->Session->read('resumeID')));		
	}
	else {
		echo $this->Html->link(__('Tr? l?i', true), array('action' => 'addJobExp'));
	}?></li>
	<li><?php if(!empty($resumeEducations)){ echo $this->Html->link(__('Continue', true), array('action' => 'saveTargetJob')); } ?></li>
</ul>
</div>
-->