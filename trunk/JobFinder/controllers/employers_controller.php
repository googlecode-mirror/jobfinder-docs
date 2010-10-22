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
    
    function admin_index()
	{
		$employers = $this->Employer->find('all');
        $this->set('employers', $this->paginate());
		
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid employer', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		$this->set('employers', $this->Employer->findAllById($id));
	}
	
	function admin_edit($id = null) {
	
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid actived', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			if ($this->Employer->save($this->data, false, array('actived'))) {
				$this->Session->setFlash(__('Has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employer->read(null, $id);
		}
	}
}
?>