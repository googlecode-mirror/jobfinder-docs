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
				$this->Session->setFlash(__('The Skill Group has been saved', true));
				$this->redirect(array('controller'=>'skills','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Skill Group could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		$this->SkillGroup->recursive = -1;
		$this->set('skillGroups', $this->paginate('SkillGroup'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SkillGroup', true));
			$this->redirect(array('controller'=>'skills','action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SkillGroup->save($this->data)) {
				$this->Session->setFlash(__('The Skill Group has been saved', true));
				$this->redirect(array('controller'=>'skills','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Skill Group could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SkillGroup->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Skill Group', true));
			$this->redirect(array('controller'=>'skills','action'=>'index'));
		}
		if ($this->SkillGroup->delete($id)) {
			$this->Session->setFlash(__('Skill Group deleted', true));
			$this->redirect(array('controller'=>'skills','action'=>'index'));
		}
		$this->Session->setFlash(__('Skill Group was not deleted', true));
		$this->redirect(array('controller'=>'skills','action'=>'index'));
	}
}
?>