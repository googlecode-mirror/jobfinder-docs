<?php
class JobseekersController extends AppController {
	var $name = 'Jobseekers';
	var $helpers = array('Html','Form','Ajax','Javascript','Recaptcha.CaptchaTool');      
	var $components = array('RequestHandler','Email','Recaptcha.Captcha' => array( 
                'private_key' => '6LeP2r0SAAAAAPYU1WQUkoj9IyVljJVQiBVshL1x',  
                'public_key' => '6LeP2r0SAAAAAN8qyexGrxfP-6cMh6vWGuFAOL3K'));
	
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
				if($dbuser['Jobseeker']['actived'] == 0){
					$this->Session->setFlash('Your account have not been actived yet.');
					$this->data['Jobseeker']['password'] = null;
				}
				else {
					// write the username to a session
					$this->Session->write('Jobseeker', $dbuser);
					// save the login time
					$dbuser['Jobseeker']['last_login'] = date("Y-m-d H:i:s");
					$this->Jobseeker->save($dbuser, false, array('last_login'));
					// redirect the user
					$this->Session->setFlash('You have successfully logged in.');
					$auth_redirect = $this->Session->read('auth_redirect');
					if(!$auth_redirect){
						$this->Session->delete('auth_redirect');
						$this->redirect($auth_redirect);
					}
					$this->redirect('/jobseekers/index');
				}
			} 
			else {
				$this->Session->setFlash('Either your email or password is incorrect.');
				$this->data['Jobseeker']['password'] = null;
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
		$this->set('howknows', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'HowKnow'))))));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		$this->set('captchaError', null);
		if (!empty($this->data)) {
		
				$this->data['Jobseeker']['password'] = md5($this->data['Jobseeker']['password']);
				//active user
				$this->data['Jobseeker']['actived'] = 1;
				if ($this->Jobseeker->save($this->data)) {
					//$this->__sendActivationEmail($this->Jobseeker->getLastInsertID());
					$this->redirect('/jobseekers/login');
				}
				else {
					$this->data['Jobseeker']['password'] = null;
				}
			}
			else {
				//$this->set('captchaError','Captcha code invalid');
				$this->data['Jobseeker']['password'] = null;
			}

	}

	function activate($user_id = null, $in_hash = null) {
		$this->Jobseeker->id = $user_id;

		if ($this->Jobseeker->exists() && ($in_hash == $this->Jobseeker->getActivationHash())) {
			if (empty($this->data)) {

				$this->data = $this->Jobseeker->read(null, $user_id);
				// Update the active flag in the database
				$this->Jobseeker->set('actived', 1);
				$this->Jobseeker->save();

				$this->Session->setFlash('Your account has been activated, please log in below.');
				$this->redirect('/jobseekers/login');
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
		//save user visit url
		$request_params = Router::getParams();
		$this->Session->write('auth_redirect','/'.$request_params['url']['url']);
		$this->checkJobSeekerSession();
	}
	
	function update_province_select() {
	  if(!empty($this->data['Jobseeker']['country_id'])) {
	    $options = $this->requestAction('/provinces/getlist/'.$this->data['Jobseeker']['country_id']);
	    $this->set('options',$options);
	  }
	}
    
    function admin_index()
	{
		$jobseekers = $this->Jobseeker->find('all');
        $this->set('jobseekers', $this->paginate());
		
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid jobseeker', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		$this->set('jobseekers', $this->Jobseeker->findAllById($id));
	}
	
	function admin_edit($id = null) {
	
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid actived', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			if ($this->Jobseeker->save($this->data, false, array('actived'))) {
				$this->Session->setFlash(__('Has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Jobseeker->read(null, $id);
		}
	}
}