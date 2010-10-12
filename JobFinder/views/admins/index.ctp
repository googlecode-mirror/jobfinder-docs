<ul>
	<li><?php echo $this->Html->link(__('Category', true), array('controller' => 'categories', 'action' => 'index', 'admin'=> true));?></li>
	<li><?php echo $this->Html->link(__('Category Type', true), array('controller' => 'category_types', 'action' => 'index', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Country', true), array('controller' => 'countries', 'action' => 'index', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Province', true), array('controller' => 'provines', 'action' => 'index', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Skill', true), array('controller' => 'skills', 'action' => 'index', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Skill group', true), array('controller' => 'skillGroups', 'action' => 'index', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Job category', true), array('controller' => 'job_categories', 'action' => 'index', 'admin'=> true)); ?></li>
	<li><?php echo $this->Html->link(__('Degree level', true), array('controller' => 'degree_levels', 'action' => 'index', 'admin'=> true)); ?></li>
</ul>
