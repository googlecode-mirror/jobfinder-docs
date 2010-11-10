<?php

class JobLevelsController extends AppController {
	var $name = 'JobLevels';
	var $helpers = array('Html','Form','Ajax','Javascript');    
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}

	function admin_index() {
		$this->JobLevel->recursive = 0;
		$this->set('jobLevels', $this->paginate());
		if (!empty($this->data)) {
			$this->JobLevel->create();
			if ($this->JobLevel->save($this->data)) {
				$this->Session->setFlash(__('The Job level has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Job level could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->JobLevel->recursive = 0;
		$this->set('jobLevels', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Job Level', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->JobLevel->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->JobLevel->recursive = 0;
		$this->set('jobLevels', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Job level', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobLevel->save($this->data)) {
				$this->Session->setFlash(__('The Job level has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Job Level could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobLevel->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobLevel->delete($id)) {
			$this->Session->setFlash(__('Job Level deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job Level was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>