<?php

class JobLevelsController extends AppController {
	var $name = 'JobLevels';   
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}

	function admin_index() {
		$this->JobLevel->recursive = -1;
		$this->set('jobLevels', $this->paginate());
		if (!empty($this->data)) {
			$this->JobLevel->create();
			if ($this->JobLevel->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->JobLevel->recursive = -1;
		$this->set('jobLevels', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Cấp bậc không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->JobLevel->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->JobLevel->recursive = -1;
		$this->set('jobLevels', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Cấp bậc không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->JobLevel->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->JobLevel->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Cấp bậc không tồn tại.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->JobLevel->delete($id)) {
			$this->Session->setFlash(__('Đã xóa thành công.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa cấp bậc này.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>