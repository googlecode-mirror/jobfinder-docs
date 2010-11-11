<?php

class DegreeLevelsController extends AppController {
	var $name = 'DegreeLevels';
	var $helpers = array('Html','Form','Ajax','Javascript');    
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}

	function admin_index() {
		$this->DegreeLevel->recursive = 0;
		$this->set('degreeLevel', $this->paginate());
		if (!empty($this->data)) {
			$this->DegreeLevel->create();
			if ($this->DegreeLevel->save($this->data)) {
				$this->Session->setFlash(__('The Degree level has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Degree level could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->DegreeLevel->recursive = 0;
		$this->set('degreeLevel', $this->paginate());
		if (!$id) {
			$this->Session->setFlash(__('Invalid level', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->DegreeLevel->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->DegreeLevel->recursive = 0;
		$this->set('degreeLevel', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Degree level', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DegreeLevel->save($this->data)) {
				$this->Session->setFlash(__('The Degree level has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Degree Level could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DegreeLevel->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for country', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DegreeLevel->delete($id)) {
			$this->Session->setFlash(__('Degree Level deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Degree Level was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>