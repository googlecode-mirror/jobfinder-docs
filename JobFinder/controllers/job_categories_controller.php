<?php

class JobCategoriesController extends AppController {

	var $name = 'JobCategories';

	function beforeFilter(){
		$this->checkAdminSession();
	}

	function admin_index() {
		$this->JobCategory->recursive = 0;
		$this->set('JobCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Job Category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('JobCategories', $this->JobCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->JobCategory->create();
			if ($this->JobCategory->save($this->data)) {
				$this->Session->setFlash(__('The Job Category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Job Category could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Job Category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobCategory->save($this->data)) {
				$this->Session->setFlash(__('The Job Category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Job Category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobCategory->delete($id)) {
			$this->Session->setFlash(__('Job Category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Job Category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>