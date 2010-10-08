<div class="jobs index">
	<h2><?php __('Việc Làm Tốt Nhất');?></h2>
	<fieldset>
		<?php
			foreach ($jobs as $job):
		?>
		<ul>
			<li><?php echo $this->Html->link(__($job['Job']['job_title'], true), array('action' => 'view', $job['Job']['id'])); ?></li>
			<?php foreach ($job['JobContactInformation'] as $contact): ?>
			<?php  echo $contact['company_name']; ?>
			<?php endforeach; ?>
		</ul>
		<?php endforeach; ?>
	</fieldset>
	</div>