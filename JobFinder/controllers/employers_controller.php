<?php
class EmployersController extends AppController {
	var $name = 'Employers';
	var $helpers = array('Html','Form','Ajax','Javascript');    
	
	function login() {
		$employer = $this->Session->read('Employer');
		if ($employer){
			$this->redirect('/employers/index');
			exit();
		}
    	if(!empty($this->data)) {
			// find the user in the database
			$dbuser = $this->Employer->findByEmail($this->data['Employer']['email']);
			// if found and passwords match
			if(!empty($dbuser) && ($dbuser['Employer']['password'] == md5($this->data['Employer']['password']))) {
				if($dbuser['Employer']['actived'] == 0){
					$this->Session->setFlash('Your account have not been actived yet.');
					$this->data['Employer']['password'] = null;
				}
				else{
					// write the username to a session
					$this->Session->write('Employer', $dbuser);
					// save the login time
					$dbuser['Employer']['last_login'] = date("Y-m-d H:i:s");
					$this->Employer->save($dbuser, false, array('last_login'));
					// redirect the user
					$this->Session->setFlash('You have successfully logged in.');
					$this->redirect('/employers/index/');
				}
			} 
			else {
				$this->set('error', 'Either your email or password is incorrect.');
				$this->data['Employer']['password'] = null;
			}
		}
	}
    	
 	function logout() {
        // delete the user session
		$this->Session->delete('Employer');
		// redirect to posts index page
		$this->Session->setFlash('You have successfully logged out.');
		$this->redirect('/');
    }
}
?>