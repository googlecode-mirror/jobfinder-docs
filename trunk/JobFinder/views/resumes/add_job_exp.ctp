
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
                
                <div class="blue_bg_title"><strong>Kinh nghiệm làm việc</strong></div>
                <div class="white_content">
                    <table width="100%" border="0"><tbody><tr><td>
                        <div style="position: relative;">
                        <div class="form_field">                                                                   
                            <?php echo $this->Form->input('ResumeJobExp.resume_id', array('type'=>'hidden',
                                    'div'=>false, 
                                    'value' => $this->Session->read('resumeID'))); ?>                                
                            <p>
                                <label class="labels"><span class="require">*</span> Chức danh: </label>
                                <?php echo $this->Form->input('ResumeJobExp.job_title', array('label'=>false,
                                        'class'=>'field', 'div'=>false)); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Cấp bậc: </label>
                                <?php echo $this->Form->input('ResumeJobExp.job_level_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...')); ?>                                
                            </p> 
                            <p>
                                <label class="labels"><span class="require">*</span> Ngành nghề: </label>
                                <?php echo $this->Form->input('ResumeJobExp.job_category_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...')); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Tên công ty: </label>
                                <?php echo $this->Form->input('ResumeJobExp.company_name', array('label'=>false,
                                        'class'=>'field', 'div'=>false)); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Quốc gia: </label>
                                <?php echo $this->Form->input('ResumeJobExp.country_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...','id'=>'countries')); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Tỉnh / Thành phố: </label>
                                <?php echo $this->Form->input('ResumeJobExp.province_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...','id'=>'provinces')); ?>
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
                                <label class="labels"><span class="require">*</span> Nhiệm vụ chính và Thành tích nổi bật:</label>
                                <?php echo $this->Form->input('ResumeJobExp.responsibilities_achievements', array('label'=>false,
                                        'class'=>'form_field text_area', 'div'=>false,'rows'=> 5, 'style'=>'width: 325px')); ?>                                
                            </p>                             
                        </div>
                        </div>
                    </td></tr></tbody>
                    </table>                
                </div>
                
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
				<div class="blue_bg_title"><strong>Quá trình làm việc</strong></div>
				<div class="white_content1" id="divContent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="40%"><?php echo ('Công ty ');?></td>
                        <td width="40%"><?php echo ('Vị trí ');?></td>
						<td width="30%"><?php echo ('Chỉnh sửa ');?></td>
					  </tr></tbody></table>					
                </div>
                <!--end xboxcontent-->
				<b class="xbottom">
                <b class="xb3 blue_curve blue_bg_bottom"></b>
                <b class="xb2 blue_curve blue_bg_bottom"></b>
                <b class="xb1 blue_top"></b>
                </b>				
			</div>
            
            
            
            <?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
            
            
            <div style="text-align: right;">
                <?php echo $this->Html->link(__('Trở lại', true), array('action' => 'modifyResume',
                        $this->Session->read('resumeID')));?>
            
                <?php if(!empty($jobExps)){ echo $this->Html->link(__('Tiếp tục', true), 
                        array('action' => 'addEducation')); }?>
            </div>
            
        </div>
    </div>
</div>



<!--


<div class='container'><?php echo $this->Form->create('Resume');?>
<h2>Quá trình làm vi?c</h2>
<ul>
	<li><?php echo $this->Form->input('ResumeJobExp.resume_id', array('type'=>'hidden', 'value' => $this->Session->read('resumeID'))); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.job_title', array('label'=>'Ch?c danh: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.job_level_id', array('label'=>'C?p b?c: ', 'empty' => 'Vui lòng ch?n...')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.job_category_id', array('label'=>'Ngành ngh?: ', 'empty' => 'Vui lòng ch?n...')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.company_name', array('label'=>'Tên công ty: ')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.country_id', array('label'=>'Qu?c gia: ', 'empty' => 'Vui lòng ch?n...','id'=>'countries')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.province_id', array('label'=>'T?nh/Thành ph?: ', 'empty' => 'Vui lòng ch?n...','id'=>'provinces')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.start_date', array('label'=>'Ngày b?t d?u: ', 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => '...')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.end_date', array('label'=>'Ngày k?t thúc: ','dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 'monthNames' => false, 'empty' => 'Hi?n t?i')); ?></li>
	<li><?php echo $this->Form->input('ResumeJobExp.responsibilities_achievements', array('label'=>'Nhi?m v? chính & Thành tích n?i b?t: ')); ?></li>
</ul>
<?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
<ul>
	<li>
	<div class="actions"><?php echo $this->Form->submit('Thêm');?></div>
	</li>
</ul>
<ul>
	<li>
	<div class="job experiences index">
	<h2><?php __('Quá trình làm vi?c');?></h2>
	<table cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo ('Công ty');?></th>
			<th><?php echo ('V? trí');?></th>
		</tr>
		<?php
		$i = 0;
		foreach ($jobExps as $jobExp):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
		?>
		<tr <?php echo $class;?>>
			<td><?php echo $jobExp['ResumeJobExp']['company_name']; ?>&nbsp;</td>
			<td><?php echo $jobExp['ResumeJobExp']['job_title']; ?>&nbsp;</td>
			<td class="actions"><?php echo $this->Html->link(__('Edit', true), array('action' => 'editJobExp', $jobExp['ResumeJobExp']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'deleteJobExp', $jobExp['ResumeJobExp']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $jobExp['ResumeJobExp']['id'])); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	</div>
	</li>
</ul>
<ul>
	<li><?php echo $this->Html->link(__('Tr? l?i', true), array('action' => 'modifyResume',$this->Session->read('resumeID')));?></li>
	<li><?php if(!empty($jobExps)){ echo $this->Html->link(__('Ti?p t?c', true), array('action' => 'addEducation')); }?></li>
</ul>
</div>
-->