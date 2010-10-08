<?php
class EmployersController extends AppController {
	var $name = 'Employers';
	var $scaffold;

	function beforeFilter() {
    	$this->Auth->userModel = 'Employer';
    	$this->Auth->fields = array('username' => 'email','password' => 'password');
    	//Security::setHash('md5'); // or sha1 or sha256. 
        parent::beforeFilter();
        $this->Auth->allow('index','view');
        $this->Auth->autoRedirect = false;
        $this->Auth->loginRedirect = array('controller' => 'Employers', 'action' => 'index');
    }

	function login() {
		
     }
    

    /** delegate /users/logout request to Auth->logout method */
    function logout() {
        $this->redirect($this->Auth->logout());
    }
}
?>