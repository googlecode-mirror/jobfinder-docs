<div class="wrap_cr">
    <img width="300" height="30" alt="create_resume_tit_vn"
        style="margin-left: 115px;" 
        src="../img/home/create_resume_tit_vn.gif" />
        
    <!-- begin content -->
    <div id="content_cr">
    <?php echo $this->Form->create('Resume');?>
        <!-- begin right col -->
        <div id="right_cr">
            <div class="box_corner">
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
                                        'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Cấp bậc: </label>
                                <?php echo $this->Form->input('ResumeJobExp.job_level_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>                                
                            </p> 
                            <p>
                                <label class="labels"><span class="require">*</span> Ngành nghề: </label>
                                <?php echo $this->Form->input('ResumeJobExp.job_category_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Tên công ty: </label>
                                <?php echo $this->Form->input('ResumeJobExp.company_name', array('label'=>false,
                                        'class'=>'field', 'div'=>false,'error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Quốc gia: </label>
                                <?php echo $this->Form->input('ResumeJobExp.country_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...','id'=>'countries','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Tỉnh / Thành phố: </label>
                                <?php echo $this->Form->input('ResumeJobExp.province_id', array('label'=>false,
                                        'class'=>'field_list field_list_w', 'div'=>false, 
                                        'empty' => 'Vui lòng chọn...','id'=>'provinces','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            
                            
                            <p>
                                <label class="labels"><span class="require">*</span> Ngày bắt đầu:</label>    
                                <?php echo $this->Form->input('ResumeJobExp.start_date', array('label'=>false, 'div'=>false, 
                                        'class'=>'field_list','separator'=>false, 'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                        'monthNames' => false, 'empty' => '...','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Ngày kết thúc:</label>    
                                <?php echo $this->Form->input('ResumeJobExp.end_date', array('label'=>false,'div'=>false,
                                        'class'=>'field_list','separator'=>false,'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y'), 
                                        'monthNames' => false, 'empty' => 'Hiện tại','error'=>array('wrap'=>'span'))); ?>
                            </p>
                            <p>
                                <label class="labels"><span class="require">*</span> Nhiệm vụ chính và Thành tích nổi bật:</label>
                                <?php echo $this->Form->input('ResumeJobExp.responsibilities_achievements', array('label'=>false,
                                        'class'=>'form_field text_area', 'div'=>false,'rows'=> 5, 'style'=>'width: 325px','error'=>array('wrap'=>'span'))); ?>                                
                            </p>                             
                        </div>
                        </div>
                    </td></tr></tbody>
                    </table>                
                </div>
            </div>
            <div style="text-align: right;">
                <?php echo $this->Form->submit('Thêm & Lưu', array('class'=>'btn_cont','div'=>false));?>            
            </div>
            
            <div class="box_corner">
				<div class="blue_bg_title"><strong>Quá trình làm việc</strong></div>
				<div class="white_tablecontent">
				   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="tb_list">
					  <tbody><tr bgcolor="#e2e2e2" class="tb_title">
						<td width="40%"><?php echo ('Công ty ');?></td>
                        <td width="40%"><?php echo ('Vị trí ');?></td>
						<td width="30%"><?php echo ('Chỉnh sửa ');?></td>
					  </tr>
					  <?php foreach ($jobExps as $jobExp):?>
					  <tr>
						<td><?php echo $jobExp['ResumeJobExp']['company_name']; ?>&nbsp;</td>
						<td><?php echo $jobExp['ResumeJobExp']['job_title']; ?>&nbsp;</td>
						<td class="actions"><?php echo $this->Html->link(__('Sửa', true), array('action' => 'editJobExp', $jobExp['ResumeJobExp']['id'])); ?>
						<?php echo $this->Html->link(__('Xóa', true), array('action' => 'deleteJobExp', $jobExp['ResumeJobExp']['id'], true), null, sprintf(__('Bạn có chắc muốn xóa quá trình làm việc tại %s?', true), $jobExp['ResumeJobExp']['company_name'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
					  </tbody></table>					
                </div>
                <!--end xboxcontent-->			
			</div>
            <?php echo $ajax->observeField('countries',array('url'=>'getProvinces','update'=>'provinces'));?>
            <div style="text-align: right;">
                <?php echo $this->Html->link(__('Trở lại', true), array('action' => 'preview',
                        $this->Session->read('resumeID')));?>
            </div>
            
        </div>
    </div>
</div>