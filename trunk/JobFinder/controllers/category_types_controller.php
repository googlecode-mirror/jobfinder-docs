<?php
class CategoryTypesController extends AppController {
	var $name = 'CategoryTypes';   
	
	function beforeFilter(){
		$this->checkAdminSession();
	}
	
	function admin_index() {
		$this->CategoryType->recursive = 0;
		$this->set('categoryTypes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid category type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('categoryType', $this->CategoryType->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CategoryType->create();
			if ($this->CategoryType->save($this->data)) {
				$this->Session->setFlash(__('The category type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category type could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid category type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CategoryType->save($this->data)) {
				$this->Session->setFlash(__('The category type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CategoryType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for category type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CategoryType->delete($id)) {
			$this->Session->setFlash(__('Category type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Category type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>