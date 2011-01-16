<?php
class CountriesController extends AppController {
	var $name = 'Countries';  
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}

	function admin_add() {
		$this->Country->recursive = -1;
		$this->set('countries', $this->paginate());
		if(!empty($this->data)) {
			$this->Country->create();
			if ($this->Country->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('controller'=>'provinces','action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
	}
	
	function admin_edit($id = null) {
		$this->Country->recursive = -1;
		$this->set('countries', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid country', true));
			$this->redirect(array('controller'=>'provinces','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Country->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('controller'=>'provinces','action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Country->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Quốc gia không hợp lệ.', true));
			$this->redirect(array('controller'=>'provinces','action' => 'index'));
		}
		if ($this->Country->delete($id)) {
			$this->Session->setFlash(__('Đã xóa thành công.', true));
			$this->redirect(array('controller'=>'provinces','action' => 'index'));
		}
		$this->Session->setFlash(__('Không thể xóa quốc gia này.', true));
		$this->redirect(array('controller'=>'provinces','action' => 'index'));
	}
}
?>