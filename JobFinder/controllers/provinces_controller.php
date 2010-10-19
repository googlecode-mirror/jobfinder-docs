<?php  

class ProvincesController extends AppController {
	var $name = 'Provinces';
	var $helpers = array('Html','Form','Ajax','Javascript');    
	
	function beforeFilter(){
		$this->checkAdminSession();
	}  
	
	function admin_index() {
		$this->paginate['Province'] = array('contain' => 'Country');
		$this->set('provinces', $this->paginate('Province'));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid province', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('province', $this->Province->findById($id));
	}

	function admin_add() {
		$this->set('countries', $this->Province->Country->find('list'));
		
	
		if(!empty($this->data)) {
			$this->Province->create();
			if ($this->Province->save($this->data)) {
				$this->Session->setFlash(__('The Province has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Province could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		$this->set('countries', $this->Province->Country->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Province', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Province->save($this->data)) {
				$this->Session->setFlash(__('The Province has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Province could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Province->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Province', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Province->delete($id)) {
			$this->Session->setFlash(__('Province deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Province was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function getlist($country_id=null) { 
		
		if (!$country_id) {
			return $this->Province->find('list');
	    } else {
	    	return $this->Province->find('list',array('conditions'=>array('country_id'=>$country_id)));
	    }
	}
}
?>