<?php
class JobseekersController extends AppController {
	var $name = 'Jobseekers';
	var $components = array('Email');

	function login(){
		$jobseeker = $this->Session->read('Jobseeker');
		if ($jobseeker){
			$this->redirect('/jobseekers/index');
			exit();
		}
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
				$this->redirect('/jobseekers/index');
			} else {
				$this->set('error', 'Either your email or password is incorrect.');
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

	function register() {
		$this->set('howknows', $this->Jobseeker->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->Jobseeker->Category->CategoryType->field('id', array('name =' => 'HowKnow'))))));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if (!empty($this->data)) {
			$this->data['Jobseeker']['password'] = md5($this->data['Jobseeker']['password']);
			if ($this->Jobseeker->save($this->data)) {
				$this->__sendActivationEmail($this->Jobseeker->getLastInsertID());
				$this->redirect('/jobseekers/login');
			}
			else {
				$this->data['Jobseeker']['password'] = null;
			}
		}
	}

	function __sendActivationEmail($user_id) {
		$user = $this->Jobseeker->find(array('Jobseeker.id' => $user_id), array('Jobseeker.id','Jobseeker.email'), null, false);
		if ($user === false) {
			debug(__METHOD__." failed to retrieve User data for user.id: {$user_id}");
			return false;
		}
			
		// Set data for the "view" of the Email
		$this->set('activate_url', 'http://' . env('SERVER_NAME') . '/users/activate/' . $user['Jobseeker']['id'] . '/' . $this->Jobseeker->getActivationHash());
			
		$this->Email->to = $user['Jobseeker']['email'];
		$this->Email->subject = env('SERVER_NAME') . ' � Please confirm your email address';
		$this->Email->from = 'noreply@' . env('SERVER_NAME');
		$this->Email->template = 'user_confirm';
		$this->Email->sendAs = 'text';   // you probably want to use both :)

		/* SMTP Options */
		$this->Email->smtpOptions = array(
        	'port'=>'465', 
       		'timeout'=>'30',
        	'host' => 'ssl://smtp.gmail.com',
   			'auth' => true,
        	'username'=>'chinguyen168@gmail.com',
        	'password'=>'Kyo@gmail');

		/* Set delivery method */
		$this->Email->delivery = 'smtp';
		$this->Email->send();

	}
	
	function index(){
		$this->checkJobSeekerSession();
	}
}