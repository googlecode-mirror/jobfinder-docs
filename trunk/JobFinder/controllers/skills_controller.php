<?php
class SkillsController extends AppController {
	var $name = 'Skills';  
	var $uses = array('Skill','SkillGroup');
	
	function beforeFilter(){
		$this->checkAdminSession();
		$this->layout = 'default_admin';
	}
	
	function admin_index() {
		$this->paginate['Skill'] = array('contain' => 'SkillGroup');
		$this->Skill->recursive = 1;
		$this->set('skills', $this->paginate('Skill'));
		$this->SkillGroup->recursive = -1;
		$this->set('listSkillGroups', $this->paginate('SkillGroup'));
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		if(!empty($this->data)) {
			$this->Skill->create();
			if ($this->Skill->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->paginate['Skill'] = array('contain' => 'SkillGroup');
		$this->Skill->recursive = 1;
		$this->set('skills', $this->paginate('Skill'));
		$this->SkillGroup->recursive = -1;
		$this->set('listSkillGroups', $this->paginate('SkillGroup'));
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Kỹ năng không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Skill->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->paginate['Skill'] = array('contain' => 'SkillGroup');
		$this->Skill->recursive = 1;
		$this->set('skills', $this->paginate('Skill'));
		$this->SkillGroup->recursive = -1;
		$this->set('listSkillGroups', $this->paginate('SkillGroup'));
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Kỹ năng không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Skill->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Skill->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Kỹ năng không tồn tại.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Skill->delete($id)) {
			$this->Session->setFlash(__('Đã xóa thành công.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa kỹ năng này.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>