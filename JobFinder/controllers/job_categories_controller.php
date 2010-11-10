<?php

class JobCategoriesController extends AppController {
	var $name = 'JobCategories';
	var $helpers = array('Html','Form','Ajax','Javascript');    
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}

	function admin_index($id = null) {
		$this->JobCategory->recursive = 0;
		$this->set('JobCategories', $this->paginate());
		if (!empty($this->data)) {
			$this->JobCategory->create();
			if ($this->JobCategory->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra dữ liệu nhập vào.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->JobCategory->recursive = 0;
		$this->set('JobCategories', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Ngành nghề không hợp lệ.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->JobCategory->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->JobCategory->recursive = 0;
		$this->set('JobCategories', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Ngành nghề không hợp lệ.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobCategory->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra dữ liệu nhập vào.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Ngành nghề không hợp lệ.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobCategory->delete($id)) {
			$this->Session->setFlash(__('Ngành nghề đã được xóa.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa ngành nghề này.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>