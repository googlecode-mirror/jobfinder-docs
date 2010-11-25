<?php
class AdminsController extends AppController {
	var $name = 'Admins';
	
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
				$this->Session->setFlash('You have successfully logged in.');
				$this->redirect('/admins/index/');
			} else {
				$this->set('error', 'Either your username or password is incorrect.');
			}
		}
	}
    	
 	function logout() {
        // delete the user session
		$this->Session->delete('Admin');
		// redirect to posts index page
		$this->Session->setFlash('You have successfully logged out.');
		$this->redirect('/');
    }
    
	function index() {
        $this->checkAdminSession();
    }
}
?>