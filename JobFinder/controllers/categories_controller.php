<?php
class CategoriesController extends AppController {
	var $name = 'Categories';
   
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}

	function admin_index() {
		$this->Category->recursive = 1;
		$this->set('categories', $this->paginate());
		$this->set('category_types',$this->Category->CategoryType->find('list'));
		if (!empty($this->data)) {
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('Danh mục đã được lưu.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->Category->recursive = 1;
		$this->set('categories', $this->paginate());
		$this->set('category_types',$this->Category->CategoryType->find('list'));
		if (!$id) {
			$this->Session->setFlash(__('Danh mục không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->Category->recursive = 1;
		$this->set('categories', $this->paginate());
		$this->set('category_types',$this->Category->CategoryType->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Danh mục không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('Đã cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Danh mục không tồn tại.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Category->delete($id)) {
			$this->Session->setFlash(__('Đã xóa thành công.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa danh mục này.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>