<?php
class JobTypesController extends AppController {
	var $name = 'JobTypes';

	function beforeFilter(){
		$this->checkAdminSession();
	}
	
	function admin_index() {
		$this->JobTypes->recursive = 0;
		$this->set('jobTypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid JobType', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('jobType', $this->JobType->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->JobType->create();
			if ($this->JobType->save($this->data)) {
				$this->Session->setFlash(__('The JobType has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The JobType could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid JobType', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobType->save($this->data)) {
				$this->Session->setFlash(__('The JobType has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The JobType could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Skill Group', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobType->delete($id)) {
			$this->Session->setFlash(__('JobType deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('JobType was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>