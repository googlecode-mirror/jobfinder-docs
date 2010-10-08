<?php
class JobsController extends AppController {
	var $name = 'Jobs';
	var $scaffold;
	var $helpers = array('Html', 'Javascript', 'Ajax');
	
	function beforeFilter(){
		if ($this->action != 'index')
        {
            $this->checkSession();
        }
	}
	
	function index()
	{
		$jobs = $this->Job->find('all', array('contain' => array('JobContactInformation'))); 
		$this->set('jobs', $jobs);
	}

	function view($id = null) {
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->findAllById($id));
	}
	
	function admin_index()
	{
		$jobs = $this->Job->find('all', array('contain' => array('JobContactInformation'))); 
		$this->set('jobs', $jobs);
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->findAllById($id));
	}
	
	function admin_approve($id = null) {
		//Status: 0 chưa duyệt
	 	// 1: đã duyệt
	 	// 2: ko đạt
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid status', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			if ($this->Job->save($this->data, false, array('status'))) {
				$this->Session->setFlash(__('The country has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Job->read(null, $id);
		}
	}
}
?>