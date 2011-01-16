<?php
class SkillGroupsController extends AppController {
	var $name = 'SkillGroups';  
	
	function beforeFilter(){
		$this->checkAdminSession();
		$this->layout = 'default_admin';
	}
	
	function admin_add() {
		$this->SkillGroup->recursive = -1;
		$this->set('skillGroups', $this->paginate('SkillGroup'));
		if (!empty($this->data)) {
			$this->SkillGroup->create();
			if ($this->SkillGroup->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('controller'=>'skills','action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
	}

	function admin_edit($id = null) {
		$this->SkillGroup->recursive = -1;
		$this->set('skillGroups', $this->paginate('SkillGroup'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Nhóm kỹ năng không tồn tại.', true));
			$this->redirect(array('controller'=>'skills','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SkillGroup->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('controller'=>'skills','action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SkillGroup->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Nhóm kỹ năng không tồn tại.', true));
			$this->redirect(array('controller'=>'skills','action'=>'index'));
		}
		if ($this->SkillGroup->delete($id)) {
			$this->Session->setFlash(__('Đã xóa thành công.', true));
			$this->redirect(array('controller'=>'skills','action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa nhóm kỹ năng này.', true));
		$this->redirect(array('controller'=>'skills','action'=>'index'));
	}
}
?>