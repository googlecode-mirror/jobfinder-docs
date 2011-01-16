<?php  

class ProvincesController extends AppController {
	var $name = 'Provinces';  
	var $uses = array('Country','Province');
	
	function beforeFilter(){
		$this->layout='default_admin';
		$this->checkAdminSession();
	}  
	
	function admin_index() {
		$this->paginate['Province'] = array('contain' => 'Country');
		$this->Province->recursive = 1;
		$this->set('provinces', $this->paginate('Province'));
		$this->Country->recursive = -1;
		$this->set('listCountries', $this->paginate('Country'));
		$this->set('countries', $this->Province->Country->find('list'));
		if(!empty($this->data)) {
			$this->Province->create();
			if ($this->Province->save($this->data)) {
				$this->Session->setFlash(__('Thêm mới thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
	}

	function admin_view($id = null) {
		$this->paginate['Province'] = array('contain' => 'Country');
		$this->Province->recursive = 1;
		$this->set('provinces', $this->paginate('Province'));
		$this->Country->recursive = -1;
		$this->set('listCountries', $this->paginate('Country'));
		$this->set('countries', $this->Province->Country->find('list'));
		if (!$id) {
			$this->Session->setFlash(__('Tỉnh thành không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Province->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->paginate['Province'] = array('contain' => 'Country');
		$this->Province->recursive = 1;
		$this->set('provinces', $this->paginate('Province'));
		$this->Country->recursive = -1;
		$this->set('listCountries', $this->paginate('Country'));
		$this->set('countries', $this->Province->Country->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tỉnh thành không tồn tại', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Province->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Province->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Tỉnh thành không tồn tại.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Province->delete($id)) {
			$this->Session->setFlash(__('Đã xóa thàng công.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa tỉnh thành này.', true));
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