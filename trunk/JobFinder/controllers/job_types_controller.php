<?php
class JobTypesController extends AppController {
	var $name = 'JobTypes';
	var $helpers = array('Html','Form','Ajax','Javascript');    
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}
	
	function admin_index() {
		$this->JobTypes->recursive = 0;
		$this->set('jobTypes', $this->paginate());
		if (!empty($this->data)) {
			$this->JobType->create();
			if ($this->JobType->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra dữ liệu nhập vào.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->JobTypes->recursive = 0;
		$this->set('jobTypes', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Loại hình công việc không hợp lệ.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->JobType->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->JobTypes->recursive = 0;
		$this->set('jobTypes', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Loại hình công việc không hợp lệ.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobType->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra dữ liệu nhập vào.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobType->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Loại hình công việc không hợp lệ.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobType->delete($id)) {
			$this->Session->setFlash(__('Loại hình công việc đã được xóa.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa loại hình công việc này.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>