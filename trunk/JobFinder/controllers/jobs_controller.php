<?php
class JobsController extends AppController {
	var $name = 'Jobs';
	var $scaffold;
	var $helpers = array('Html', 'Javascript', 'Ajax');

	function index()
	{
		$this->Job->bindModel(array('hasMany' => array('JobContactInformation'))); 
		$this->Job->recursive = 1;
		$jobs = $this->Job->find('all'); 
		$this->set('jobs', $jobs);
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->read(null, $id));
	}
	
}
?>