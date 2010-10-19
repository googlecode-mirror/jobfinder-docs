<?php
class SkillsController extends AppController {
	var $name = 'Skills';
	var $helpers = array('Html','Form','Ajax','Javascript');    
		
	function beforeFilter(){
		$this->checkAdminSession();
	}
	
	function admin_index() {
		$this->paginate['Skill'] = array('contain' => 'SkillGroup');
		$this->set('skills', $this->paginate('Skill'));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid skill', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('skill', $this->Skill->findById($id));
	}

	function admin_add() {
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		
		if(!empty($this->data)) {
			$this->Skill->create();
			if ($this->Skill->save($this->data)) {
				$this->Session->setFlash(__('The Skill has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Skill could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Skill', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Skill->save($this->data)) {
				$this->Session->setFlash(__('The Skill has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Skill could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Skill->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Skill', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Skill->delete($id)) {
			$this->Session->setFlash(__('Skill deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Skill was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>