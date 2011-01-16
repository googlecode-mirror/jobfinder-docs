<?php
class AdminsController extends AppController {
	var $name = 'Admins';
	var $uses = array('Admin','Job','Resume');
	
	function beforeFilter(){
		$this->layout='default_admin';
	}
	
	function login() {
		$admin = $this->Session->read('Admin');
		if ($admin){
			$this->redirect('/admins/index');
			exit();
		}
    	if(!empty($this->data)) {
			// find the user in the database
			$dbuser = $this->Admin->findByUsername($this->data['Admin']['username']);
			// if found and passwords match
			if(!empty($dbuser) && ($dbuser['Admin']['password'] == md5($this->data['Admin']['password']))) {
				// write the username to a session
				$this->Session->write('Admin', $dbuser);
				// save the login time
				$dbuser['Admin']['last_login'] = date("Y-m-d H:i:s");
				$this->Admin->save($dbuser, false, array('last_login'));
				// redirect the user
				//$this->Session->setFlash('You have successfully logged in.');
				$this->redirect('/admins/index/');
			} else {
				$this->Session->setFlash('Tên đăng nhập hoặc mật khẩu không chính xác.');
				$this->data['Admin']['password'] = null;
			}
		}
	}
    	
 	function logout() {
        // delete the user session
		$this->Session->delete('Admin');
		// redirect to posts index page
		//$this->Session->setFlash('You have successfully logged out.');
		$this->redirect(array('controller'=>'admins','action' => 'login','admin'=>false));
    }
    
	function index() {
        $this->checkAdminSession();
		$jobs = $this->Job->find('all',array('limit' => 10,'order' => array('Job.modified DESC'),'recursive' => 1));
		$this->set('jobs', $jobs);
		$resumes = $this->Resume->find('all',array('order' => array('Resume.modified DESC'),'recursive' => 1));
		$this->set('resumes', $resumes);
    }
    
	function account() {
        $this->checkAdminSession();
        $this->Admin->recursive = -1;
		$this->set('admins', $this->paginate());
    }
    
	function createAccount() {
        $this->checkAdminSession();
        $this->Admin->recursive = -1;
		$this->set('admins', $this->paginate());
		if (!empty($this->data)) {
			if($this->data['Admin']['password'] != $this->data['Admin']['confirm_password']){
				$this->Session->setFlash('Mật khẩu xác nhận không hợp lệ.');
				$this->data['Admin']['password'] = null;
				$this->data['Admin']['confirm_password'] = null;
			}
			else {
				$this->data['Admin']['password'] = md5($this->data['Admin']['password']);
				$this->data['Admin']['status'] = 1;
				if ($this->Admin->save($this->data)) {
					$this->Session->setFlash(__('Tạo tài khoản thành công.', true));
					$this->redirect(array('action' => 'account'));
				}
				else {
					$this->Session->setFlash(__('Tạo tài khoản thất bại. Vui lòng kiểm tra lại.', true));
					$this->data['Admin']['password'] = null;
					$this->data['Admin']['confirm_password'] = null;
				}
			}
		}
    }
    
	function edit($id = null) {
        $this->checkAdminSession();
        $this->Admin->recursive = -1;
		$this->set('admins', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tài khoản không tồn tại.', true));
			$this->redirect(array('action'=>'account'));
		}
		if (!empty($this->data)) {
			if(!empty($this->data['Admin']['new_password']) || !empty($this->data['Admin']['confirm_new_password'])){
				if(md5($this->data['Admin']['old_password']) != $this->data['Admin']['password']){
					$this->Session->setFlash('Mật khẩu hiện tại không chính xác.');
					$this->data['Admin']['old_password'] = null;
					$this->data['Admin']['new_password'] = null;
					$this->data['Admin']['confirm_new_password'] = null;
				}
				else if($this->data['Admin']['new_password'] != $this->data['Admin']['confirm_new_password']){
					$this->Session->setFlash('Mật khẩu xác nhận không hợp lệ.');
					$this->data['Admin']['old_password'] = null;
					$this->data['Admin']['new_password'] = null;
					$this->data['Admin']['confirm_new_password'] = null;
				}else {
					$this->data['Admin']['password'] = md5($this->data['Admin']['new_password']);
				}
			}
			if ($this->Admin->save($this->data)) {
				$this->Session->setFlash(__('Cập nhật tài khoản thành công', true));
				$this->redirect(array('action' => 'account'));
			} else {
				$this->Session->setFlash(__('Cập nhật tài khoản thất bại.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Admin->read(null, $id);
		}
    }
    
	function delete($id = null) {
        $this->checkAdminSession();
        if (!$id) {
			$this->Session->setFlash(__('Tài khoản không tồn tại.', true));
			$this->redirect(array('action'=>'account'));
		}
		$admin = $this->Admin->read(null,$id);
		if($admin['Admin']['username'] == 'admin'){
			$this->Session->setFlash(__('Không thể xóa tài khoản này.', true));
			$this->redirect(array('action' => 'account'));
		}
		if ($this->Admin->delete($id)) {
			$this->Session->setFlash(__('Tài khoản đã được xóa.', true));
			$this->redirect(array('action'=>'account'));
		} else {
			$this->Session->setFlash(__('Không thể xóa tài khoản này.', true));
			$this->redirect(array('action' => 'account'));
		}
    }
}
?>