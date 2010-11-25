<?php
class JobAppliesController extends AppController {
	var $name = 'JobApplies';
	var $components = array('RequestHandler');
	
	function index() {
		$this->JobApply->recursive = 0;
		$this->set('jobApplies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid job apply', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobApply', $this->JobApply->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->JobApply->create();
			if ($this->JobApply->save($this->data)) {
				$this->Session->setFlash(__('The job apply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job apply could not be saved. Please, try again.', true));
			}
		}
		$jobseekers = $this->JobApply->Jobseeker->find('list');
		$jobs = $this->JobApply->Job->find('list');
		$resumes = $this->JobApply->Resume->find('list');
		$this->set(compact('jobseekers', 'jobs', 'resumes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job apply', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobApply->save($this->data)) {
				$this->Session->setFlash(__('The job apply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job apply could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobApply->read(null, $id);
		}
		$jobseekers = $this->JobApply->Jobseeker->find('list');
		$jobs = $this->JobApply->Job->find('list');
		$resumes = $this->JobApply->Resume->find('list');
		$this->set(compact('jobseekers', 'jobs', 'resumes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for job apply', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobApply->delete($id)) {
			$this->Session->setFlash(__('Job apply deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job apply was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>