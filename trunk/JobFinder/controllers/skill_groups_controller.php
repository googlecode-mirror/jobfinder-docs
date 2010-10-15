<?php
class SkillGroupsController extends AppController {
	var $name = 'SkillGroups';
	var $helpers = array('Html','Form','Ajax','Javascript');    
	
	function beforeFilter(){
		$this->checkAdminSession();
	}
	
	function admin_index() {
		$this->SkillGroups->recursive = 0;
		$this->set('skillGroups', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid skillGroup', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('skillGroup', $this->SkillGroup->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SkillGroup->create();
			if ($this->SkillGroup->save($this->data)) {
				$this->Session->setFlash(__('The Skill Group has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Skill Group could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid SkillGroup', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SkillGroup->save($this->data)) {
				$this->Session->setFlash(__('The Skill Group has been saved', true));
				$this->redirect(array('action' => 'index'));
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
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SkillGroup->delete($id)) {
			$this->Session->setFlash(__('Skill Group deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Skill Group was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>