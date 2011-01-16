<?php

class DegreeLevelsController extends AppController {
	var $name = 'DegreeLevels';   
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}

	function admin_index() {
		$this->DegreeLevel->recursive = -1;
		$this->set('degreeLevel', $this->paginate());
		if (!empty($this->data)) {
			$this->DegreeLevel->create();
			if ($this->DegreeLevel->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->DegreeLevel->recursive = -1;
		$this->set('degreeLevel', $this->paginate());
		if (!$id) {
			$this->Session->setFlash(__('Bằng cấp không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->DegreeLevel->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->DegreeLevel->recursive = -1;
		$this->set('degreeLevel', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Bằng cấp không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DegreeLevel->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DegreeLevel->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Bằng cấp không tồn tại.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DegreeLevel->delete($id)) {
			$this->Session->setFlash(__('Đã xóa thành công.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa bằng cấp này.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>