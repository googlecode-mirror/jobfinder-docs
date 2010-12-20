<div id="header">
	<h2>JobFinder: Administrator</h2>
	<div id="topmenu">
    	<ul>
        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
    	</ul>
	</div>

</div>
<div id="top-panel">
	<div id="panel">
	<ul>
		<li><?php echo $this->Html->link(__('Hồ sơ người tìm việc', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
		<li><?php echo $this->Html->link(__('Duyệt hồ sơ', true), array('controller' => 'resumes', 'action' => 'approveResume', 'admin'=> true)); ?></li>
	</ul>
	</div>
</div>
<?php
	$gender =  array(0 => 'Nam', 1 =>'Nữ');
	$yesno = array(0=> 'Không', 1=> 'Có');
	$martial =  array(0 => 'Độc thân', 1 =>'Đã kết hôn');
	$privacy =  array(0 => 'Hồ sơ ẩn', 1 =>'Cho phép tìm kiếm');
?>
<div id="wrapper"><?php echo $this->element('admin_sidebar'); ?>
<div id="content">
<h3><?php __('Thông tin tuyển dụng');?></h3>
<?php echo $this->Session->flash(); ?>
<br />
<div id="box">
<h3><?php __('Thông Tin Cá Nhân ');?>
</h3>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div class="box_pre">
			<div style="height: 1%;" class="box_left">
			<a href="#$">
			 <?php echo $html->image('../img/home/js_photo.gif', 
    	                	  array('alt' => '', 'width' => '84', 'height' => '113'))  ?>
			</a></div>
			<div class="box_right"><strong><?php echo $resume['Jobseeker']['last_name'].' '. $resume['Jobseeker']['first_name']; ?></strong>
			<br /><br />
			<strong><?php echo $nationalities[$resume['Resume']['nationality']]; ?></strong>
			<br/>
			<?php echo 'Ngày sinh: '. date('d-m-Y', strtotime($resume['Jobseeker']['birthday']));    ?>
    	   	<br/>
			<?php echo $gender[$resume['Jobseeker']['gender']]; ?> - <?php echo $martial[$resume['Resume']['martial_status']]; ?>
			<br />
			<?php echo 'Địa chỉ: '. $resume['Resume']['address'].' '.$resume['Province']['name'].' '.$resume['Country']['name']; ?>
			<br />
			<?php echo 'Email: '. $resume['Resume']['email']; ?>
			<br />
			<?php echo 'Điện thoại liên lạc: '. $resume['Resume']['telephone']; ?> / <?php echo $resume['Resume']['mobile']; ?>
			</div>
			</div>
			</td>
		</tr>
	</tbody>
</table>

<h3><?php __('Tóm lược ');?></h3>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div style="" class="box_pre">
			<div class="box_left">Công Việc Mong Muốn:</div>
			<div class="box_right">
				<div class="box_pre">
				<div style="padding-bottom: 5px;">Vị trí: <strong><?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['job_title']; }?></strong></div>
				<div style="padding-bottom: 5px;">Cấp bậc: <strong><?php  if(!empty($resume['ResumeTargetJob'])) { echo $jobLevels[$resume['ResumeTargetJob'][0]['job_level_id']]; }?></strong></div>
				<div style="width: 600px;display:block;padding-bottom: 5px;">Loại hình công việc:
				<?php
					 if(!empty($resume['ResumeTargetJob'])) {           			
                                $string = $resume['ResumeTargetJob'][0]['job_types'];
                        $token = strtok($string, "|");
                                                
                        while ($token != false)
                        {
                            echo "$jobTypes[$token]/ ";
                            echo "$jobTypes[$token]/ ";
                        	$token = strtok("|");
                        }
                }?></div>
				<div style="padding-bottom: 5px;">Có thể đổi chỗ ở vì yêu cầu công việc: <?php if(!empty($resume['ResumeTargetJob'])) { echo $yesno[$resume['ResumeTargetJob'][0]['can_relocate']]; }?></div>
				<div style="padding-bottom: 5px;">Có thể đi công tác: <?php  if(!empty($resume['ResumeTargetJob'])) { echo $yesno[$resume['ResumeTargetJob'][0]['can_travel']]; }?></div>
				<div style="padding-bottom: 5px;">Quy mô công ty: <?php if(!empty($resume['ResumeTargetJob'])) { echo $companySizes[$resume['ResumeTargetJob'][0]['company_size']]; }?></div>
				<div style="display:block;padding-bottom: 5px;">Ngành nghề:<br />
					 <?php
						 if(!empty($resume['ResumeTargetJob'])) {            			
                                $string = $resume['ResumeTargetJob'][0]['job_categories'];
                        	$token = strtok($string, "|");                        
                        	while ($token != false)
                        	{
                                echo "- $jobCategories[$token]<br />";
                        		$token = strtok("|");
                        	}
                        }?>
                </div>
                <div style="display:block;padding-bottom: 5px;">Nơi làm việc:<br />
					 <?php
						 if(!empty($resume['ResumeTargetJob'])) {            			
                                $string = $resume['ResumeTargetJob'][0]['job_locations'];
                        	$token = strtok($string, "|");                        
                        	while ($token != false)
                        	{
                                echo "- $provinces[$token]<br />";
                        		$token = strtok("|");
                        	}
                        }?>
                </div>
			</div>
			</div>
			</div>
			
			<div style="" class="box_pre">
			<div class="box_left">Mục tiêu nghề nghiệp:</div>
			<div style="padding-bottom: 5px;" class="box_right"><?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['career_objective']; }?></div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Mức lương:</div>
			<div style="padding-bottom: 5px;" class="box_right">
				<div class="box_pre">
				<div style="padding-bottom: 5px;">Mức lương hiện tại: <?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['current_salary']; }?></div>
				<div style="padding-bottom: 5px;">Mức lương mong muốn: <?php if(!empty($resume['ResumeTargetJob'])) { echo $resume['ResumeTargetJob'][0]['desired_salary']; }?></div>
				</div>	
			</div>
			</div>
			
			</td>
		</tr>
	</tbody>
</table>

<h3><?php __('Chi tiết hồ sơ ');?></h3>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div class="box_pre">
			<div class="box_left">Kinh nghiệm làm việc:</div>
			<div style="padding-bottom: 5px;" class="box_right">
			<div class="box_pre">
			<strong>Tổng cộng: <?php echo $resume['Resume']['years_exp'];?> năm</strong> <br/>
            <div style="padding-bottom: 5px;font-style: italic; "><?php if(empty($resume['ResumeJobExp'])){ echo __('Chưa có thông tin về kinh nghiệm làm việc'); }?></div>
			<?php foreach ($resume['ResumeJobExp'] as $resumeJobExp):?>
			<div style="padding-bottom: 5px;"><strong><?php echo $resumeJobExp['job_title'];?></strong></div>
			<div style="padding-bottom: 5px;"><?php echo $resumeJobExp['company_name'] .' - ' .$jobCategories[$resumeJobExp['job_category_id']] ;?></div>
			<div style="padding-bottom: 5px;"><?php echo $jobLevels[$resumeJobExp['job_level_id']] .' - ' . 'Tháng ' .date('m Y', strtotime($resumeJobExp['start_date'])) .' đến '; if($resumeJobExp['end_date'] == null){ echo __('Hiện tại'); } else { echo date('m Y', strtotime($resumeJobExp['end_date'])); };?></div>
			<div style="padding-bottom: 5px;"><?php echo $countries[$resumeJobExp['country_id']] .' - ' .$provinces[$resumeJobExp['province_id']] ;?></div>
			<div style="padding-bottom: 5px;">Thông tin liên quan: <br/>
			<?php echo $resumeJobExp['responsibilities_achievements']; ?></div>
			<br/>
			<?php endforeach;?></div>
			</div>
			</div>
			
			<div class="box_pre">
			<div class="box_left">Học vấn:</div>
			<div style="padding-bottom: 5px;" class="box_right">
			<div class="box_pre">
            <div style="padding-bottom: 5px;font-style: italic; "><?php if(empty($resume['ResumeEducation'])){ echo __('Chưa có thông tin về trình độ học vấn'); }?></div>
			<?php foreach ($resume['ResumeEducation'] as $resumeEducation):?>
			<div style="padding-bottom: 5px;"><strong><?php echo $resumeEducation['program'];?></strong></div>
			<div style="padding-bottom: 5px;"><?php echo $resumeEducation['major'];?></div>
			<div style="padding-bottom: 5px;"><?php echo $degreeLevels[$resumeEducation['degree_level_id']];?></div>
			<div style="padding-bottom: 5px;"><?php echo 'Tháng ' .date('m Y', strtotime($resumeEducation['start_date'])) .' đến '; if($resumeEducation['end_date'] == null){ echo __('Hiện tại'); } else { echo date('m Y', strtotime($resumeEducation['end_date'])); };?></div>
			<div style="padding-bottom: 5px;"><?php echo $countries[$resumeEducation['country_id']]; ?></div>
			<div style="padding-bottom: 5px;">Thông tin liên quan: <br/>
			<?php echo $resumeEducation['related_information']; ?></div>
			<br/>
			<?php endforeach;?></div>
			</div>
			</div>
			
			<div class="box_pre">
			<div class="box_left">Kỹ năng:</div>
			<div style="padding-bottom: 5px;" class="box_right">
			<div class="box_pre">
            <div style="padding-bottom: 5px;font-style: italic; "><?php if(empty($resume['ResumeSkill'])){ echo __('Chưa có thông tin về kỹ năng'); }?></div>
			<?php foreach ($resume['ResumeSkill'] as $resumeSkill):?>
			<div style="padding-bottom: 5px;"><strong><?php echo $skills[$resumeSkill['skill_id']];?></strong></div>
			<div style="padding-bottom: 5px;"><?php echo $proficiencies[$resumeSkill['proficiency']];?></div>
			<div style="padding-bottom: 5px;"><?php echo $resumeSkill['year_use']. ' năm';?></div>
			<div style="padding-bottom: 5px;"><?php echo $countries[$resumeJobExp['country_id']] .' - ' .$provinces[$resumeJobExp['province_id']] ;?></div>
			<div style="padding-bottom: 5px;">Mô tả: <br/>
			<?php echo $resumeSkill['description'];?></div>
			<br/>
			<?php endforeach;?></div>
			</div>
			</div>
			</td>
		</tr>
	</tbody>
</table>

</div>
<br/>
<div id="box">
<h3><?php __('Xét duyệt ');?></h3>
<?php echo $this->Form->Create('Resume',array('div'=>false,'id'=>'form'));?>
<?php echo $this->Form->input('id');?>
<?php echo $this->Form->input('status', array('label'=>'Tình trạng:','options' => array( 0 => "Chưa duyệt", 1=> "Đạt", 2 => "Không đạt", 3 => "Đã chỉnh sửa chờ duyệt"),'div'=>false,'error'=>array('wrap'=>'span')));?>
<div align="center">
	<br/>
	<?php echo $this->Form->Submit(__('Lưu', true),array('div'=>false));?>
</div>
</div>

<br/>
<?php echo $this->Html->link($html->tag('span', 'Trở về'), 
                            array('controller'=> 'resumes', 'action' => 'admin_approveResume'),array('escape' => false, 'class'=>'button')); ?>
</div>
</div>
