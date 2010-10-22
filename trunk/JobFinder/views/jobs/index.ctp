<?php
	echo $this->Html->meta('icon');
	echo $this->Html->css('jobs');
?>

<div class="container">
<div class="jobs index">

	<h2 class="jobs_index h2"><span><?php __('Việc Làm Tốt Nhất');?></span></h2>
	
	<fieldset class="jobs_fieldset">
		<?php
			foreach ($jobs as $job):
		?>
		<ul class="jobs_fieldset floatLeft">
			<li class="jobs_fieldset li">
                <a class="ul.jobs_fieldset li a">
                <?php echo $this->Html->link(__($job['Job']['job_title'], true), 
                        array('action' => 'view', $job['Job']['id'])); ?>
                </a>
                <?php foreach ($job['JobContactInformation'] as $contact): ?>
    			<span class="ul.jobs_fieldset li span"> <?php  echo $contact['company_name']; ?> </span>
    			<?php endforeach; ?>
            </li>
			
		</ul>
		<?php endforeach; ?>
	</fieldset>	
	
	<br clear="all">
	
</div>
</div>


