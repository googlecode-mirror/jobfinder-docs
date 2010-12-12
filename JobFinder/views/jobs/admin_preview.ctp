<div id="header">
<h2>CakePHP: the rapid development php framework</h2>
<div id="topmenu">
<ul>
	        	<li><?php echo $this->Html->link(__('Dashboard', true), array('controller' => 'admins', 'action' => 'index', 'admin'=> false)); ?></li>
            <li><?php echo $this->Html->link(__('Danh mục', true), array('controller' => 'JobCategories', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý hồ sơ', true), array('controller' => 'resumes', 'action' => 'index', 'admin'=> true)); ?></li>
            <li class="current"><?php echo $this->Html->link(__('Quản lý tuyển dụng', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
            <li><?php echo $this->Html->link(__('Quản lý tài khoản', true), array('controller' => 'jobseekers', 'action' => 'index', 'admin'=> true)); ?></li>
</ul>
</div>
</div>
<div id="top-panel">
<div id="panel">
<ul>
	<li><?php echo $this->Html->link(__('Việc làm đăng tuyển', true), array('controller' => 'jobs', 'action' => 'index', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Đăng tin tuyển dụng', true), array('controller' => 'jobs', 'action' => 'postJob', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Duyệt việc làm', true), array('controller' => 'jobs', 'action' => 'approveJob', 'admin'=> true)); ?></li>
</ul>
</div>
</div>
<div id="wrapper"><?php echo $this->element('admin_sidebar'); ?>
<div id="content">
<h3><?php __('Đăng tin tuyển dụng');?></h3>
<br />
<div id="box">
<h3><?php __('Thông Tin Công Ty ');?><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
array('controller' => 'jobs', 'action' => 'admin_editCompanyInformation',$job['Job']['id'] )); ?></span>
</h3>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div class="box_pre">
			<div style="height: 1%;" class="box_left"><a href="#$"> <img
				width="95" height="49" border="0" alt="Logo nhà tuyển dụng"
				class="logoEmployer" src="../img/company/129841.gif" /> </a></div>
			<div class="box_right"><span class="comp_name"><?php echo $job['Job']['company_name']; ?></span>
			<br />
			</div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Sơ lược về công ty:</div>
			<div class="box_right"><?php echo $job['Job']['company_profile']; ?>
			<br />
			</div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Quy mô công ty:</div>
			<div class="box_right"><?php echo $companySizes[$job['Job']['company_size']]; ?></div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Địa chỉ công ty:</div>
			<div class="box_right"><?php echo $job['Job']['company_address'].' '.$provinces[$job['Job']['province_id']].' '.$countries[$job['Job']['country_id']] ; ?></div>
			</div>
			<div style="" class="box_pre">
			<div class="box_left">Điện thoại công ty:</div>
			<div class="box_right"><?php echo $job['Job']['telephone']; ?></div>
			</div>
			<div style="" class="box_pre">
			<div class="box_left">Fax:</div>
			<div class="box_right"><?php echo $job['Job']['fax']; ?></div>
			</div>
			<div style="" class="box_pre">
			<div class="box_left">Website công ty:</div>
			<div class="box_right"><?php echo $job['Job']['company_website']; ?></div>
			</div>
			</td>
		</tr>
	</tbody>
</table>

<h3><?php __('Chi Tiết Công Việc ');?><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
array('controller' => 'jobs', 'action' => 'admin_editJobInformation',$job['Job']['id'] )); ?></span>
</h3>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div style="" class="box_pre">
			<div class="box_left">Chức danh:</div>
			<div class="box_right"><strong> <?php echo $job['Job']['job_title']; ?>
			</strong></div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Mô tả Công việc:</div>
			<div style="padding-bottom: 5px;" class="box_right"><?php echo $job['Job']['job_description']; ?>
			</div>
			</div>

			<div class="box_pre">
			<div class="box_left">Yêu cầu chung:</div>
			<div class="box_right">
			<div class="box_pre">
			<div>Số năm kinh nghiệm: <?php echo $job['Job']['year_experience']; ?></div>
			<div>Cấp bậc tối thiểu: <?php echo $jobLevels[$job['Job']['job_level_id']]; ?></div>
			<div>Bằng cấp tối thiểu: <?php echo $degreeLevels[$job['Job']['degree_level_id']]; ?></div>
			<div style="width: 450px; display: block;"><?php echo $job['Job']['job_requirement']; ?></div>
			</div>
			</div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Loại hình làm việc:</div>
			<div style="padding-bottom: 5px;" class="box_right"><?php echo $jobTypes[$job['Job']['job_type_id']] ?>
			</div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Nơi làm việc:</div>
			<div style="padding-bottom: 5px;" class="box_right"><?php            			
			$string = $job['Job']['job_locations'];
			$token = strtok($string, "|");
			while ($token != false)
			{
				echo "$provinces[$token]<br />";
				$token = strtok("|");
			}?></div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Ngành nghề:</div>
			<div style="padding-bottom: 5px;" class="box_right"><?php            			
			$string = $job['Job']['job_categories'];
			$token = strtok($string, "|");
			while ($token != false)
			{
				echo "$jobCategories[$token]<br />";
				$token = strtok("|");
			}?></div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Mức lương:</div>
			<div class="box_right">
			<div class="box_pre">
			<div><?php echo $job['Category']['name']; ?></div>
			<div><?php if($job['Category']['key'] == 'Specified'){
				echo $job['Job']['minimun_salary']. ' - '. $job['Job']['maximun_salary']. ' USD';}?>
			</div>
			</div>
			</div>
			</div>

			<div style="" class="box_pre">
			<div class="box_left">Hồ sơ trình bày bằng ngôn ngữ:</div>
			<div style="padding-bottom: 5px;" class="box_right"><?php echo $languages[$job['Job']['application_language']] ?>
			</div>
			</div>
			</td>
		</tr>
	</tbody>
</table>

<h3><?php __('Kỹ Năng Yêu Cầu ');?><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
array('controller' => 'jobs', 'action' => 'admin_modifySkill',$job['Job']['id'] )); ?></span>
</h3>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div class="box_pre">
			<div class="box_left">Yêu cầu kỹ năng:</div>
			<div class="box_right">
			<div class="box_pre"><?php if(empty($job['JobSkill'])){ echo __('Chưa có thông tin về kỹ năng yêu cầu'); }?>
			<?php foreach ($job['JobSkill'] as $jobSkill):?>
			<div><?php echo $skills[$jobSkill['skill_id']]; ?></div>
			<div><?php echo $proficiencies[$jobSkill['proficiency']]; ?></div>
			<div><?php echo $jobSkill['year_use']. ' năm'; ?></div>
			<div>Mô tả: <?php echo $jobSkill['description']; ?></div>
			<?php endforeach;?></div>
			</div>
			</div>
			</td>
		</tr>
	</tbody>
</table>

<h3><?php __('Thông Tin Liên Hệ ');?><span class="link_bgtitle"><?php echo $html->link('[Chỉnh sửa]', 
array('controller' => 'jobs', 'action' => 'admin_editJobContact',$job['Job']['id'] )); ?></span>
</h3>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
	<tbody>
		<tr>
			<td>
			<div style="" class="box_pre">
			<div class="box_left">Tên người liên hệ:</div>
			<div class="box_right"><?php echo $job['Job']['contact_name']; ?> <br />
			</div>
			</div>
			<div style="" class="box_pre">
			<div class="box_left">Chức vụ:</div>
			<div class="box_right"><?php echo $job['Job']['contact_position']; ?></div>
			</div>
			<div style="" class="box_pre">
			<div class="box_left">Số điện thoại:</div>
			<div class="box_right"><?php echo $job['Job']['mobile']; ?></div>
			</div>
			<div style="" class="box_pre">
			<div class="box_left">Địa chỉ Email nhận hồ sơ:</div>
			<div class="box_right"><?php echo $job['Job']['email']; ?></div>
			</div>
			</td>
		</tr>
	</tbody>
</table>

</div>
<br/>
<?php echo $this->Html->link($html->tag('span', 'Trở về'), 
                            array('controller'=> 'jobs', 'action' => 'admin_index'),array('escape' => false, 'class'=>'button')); ?>
</div>
</div>
