<?php
class JobseekersController extends AppController {
	var $name = 'Jobseekers';
    
    function login() {
    	if(!empty($this->data)) {
			// find the user in the database
			$dbuser = $this->Jobseeker->findByEmail($this->data['Jobseeker']['email']);
			// if found and passwords match
			if(!empty($dbuser) && ($dbuser['Jobseeker']['password'] == md5($this->data['Jobseeker']['password']))) {
				// write the username to a session
				$this->Session->write('Jobseeker', $dbuser);
				// save the login time
				$dbuser['Jobseeker']['last_login'] = date("Y-m-d H:i:s");
				$this->Jobseeker->save($dbuser, false, array('last_login'));
				// redirect the user
				$this->Session->setFlash('You have successfully logged in.');
				$this->redirect('/jobs/index/');
			} else {
				$this->set('error', 'Either your username or password is incorrect.');
			}
		}
	}
    	
 	function logout() {
        // delete the user session
		$this->Session->delete('Jobseeker');
		// redirect to posts index page
		$this->Session->setFlash('You have successfully logged out.');
		$this->redirect('/');
    }
  
    
	

}