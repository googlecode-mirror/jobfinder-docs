<?php
class JobseekersController extends AppController {
	var $name = 'Jobseekers';
	var $helpers = array('Recaptcha.CaptchaTool');
	var $components = array('RequestHandler','Email','Recaptcha.Captcha' => array(
                'private_key' => '6LeP2r0SAAAAAPYU1WQUkoj9IyVljJVQiBVshL1x',  
                'public_key' => '6LeP2r0SAAAAAN8qyexGrxfP-6cMh6vWGuFAOL3K'));
	var $uses = array('Jobseeker','Job');
	
	function beforeFilter(){
		$this->set('total',$this->Job->find('count', array('conditions'=>array('Job.status' => 1))));
	}
	
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
					if(!empty($auth_redirect)){
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

	function account(){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if (!empty($this->data)) {
			if ($this->Jobseeker->save($this->data)) {
				$this->Session->setFlash(__('Tài khoản đã được cập nhật', true));
				$jobseeker = $this->Jobseeker->read(null,$this->data['Jobseeker']['id']);
				$this->Session->write('Jobseeker', $jobseeker);
				$this->redirect(array('action'=>'account'));
			}
			else {
				$this->Session->setFlash(__('Tài khoản không thể cập nhật', true));
			}
		}
		if(empty($this->data)){
			$this->data = $this->Jobseeker->read(null,$jobseeker['Jobseeker']['id']);
		}
	}
	
	function changePassword(){
		$jobseeker = $this->checkJobSeekerSession();
		if (!empty($this->data)) {
			if(md5($this->data['Jobseeker']['old_password']) != $this->data['Jobseeker']['password']){
				$this->Session->setFlash('Mật khẩu hiện tại không chính xác.');
				$this->data['Jobseeker']['old_password'] = null;
				$this->data['Jobseeker']['new_password'] = null;
				$this->data['Jobseeker']['confirm_new_password'] = null;
				$this->redirect(array('action'=>'account'));
			}
			else if(empty($this->data['Jobseeker']['new_password']) || empty($this->data['Jobseeker']['confirm_new_password'])){
				$this->Session->setFlash('Vui lòng nhập mật khẩu.');
				$this->data['Jobseeker']['old_password'] = null;
				$this->data['Jobseeker']['new_password'] = null;
				$this->data['Jobseeker']['confirm_new_password'] = null;
				$this->redirect(array('action'=>'account'));
			}
			else if($this->data['Jobseeker']['new_password'] != $this->data['Jobseeker']['confirm_new_password']){
				$this->Session->setFlash('Mật khẩu xác nhận không hợp lệ.');
				$this->data['Jobseeker']['old_password'] = null;
				$this->data['Jobseeker']['new_password'] = null;
				$this->data['Jobseeker']['confirm_new_password'] = null;
				$this->redirect(array('action'=>'account'));
			}else {
				$this->data['Jobseeker']['password'] = md5($this->data['Jobseeker']['new_password']);
				if ($this->Jobseeker->save($this->data)) {
					$this->Session->setFlash(__('Thay đổi mật khẩu thành công', true));
					$this->redirect(array('action' => 'account'));
				} else {
					$this->Session->setFlash(__('Thay đổi mật khẩu thất bại.', true));
				}
			}
		}
	}
	
	function register() {
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$provinces = array();
		$this->set('captchaError', null);
		if (!empty($this->data)) {
			if($this->data['Jobseeker']['password'] != $this->data['Jobseeker']['confirm_password']){
				$this->Session->setFlash('Mật khẩu xác nhận không hợp lệ');
				$this->data['Jobseeker']['password'] = null;
				$this->data['Jobseeker']['confirm_password'] = null;
			}
			else {
				if ($this->Captcha->validate()) {
					$this->set('captchaError', null);
					$this->data['Jobseeker']['password'] = md5($this->data['Jobseeker']['password']);
					//active user
					$this->data['Jobseeker']['actived'] = 1;
					if ($this->Jobseeker->save($this->data)) {
						//$this->__sendActivationEmail($this->Jobseeker->getLastInsertID());
						$this->Session->setFlash(__('The account has been created', true));
						$this->redirect('/jobseekers/login');
					}
					else {
						$this->Session->setFlash(__('The account could not be created. Please, try again.', true));
						$this->data['Jobseeker']['password'] = null;
						$this->data['Jobseeker']['confirm_password'] = null;
					}
				}
				else {
					$this->Session->setFlash('Captcha code invalid');
					$this->data['Jobseeker']['password'] = null;
					$this->data['Jobseeker']['confirm_password'] = null;
				}
			}
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
		$request_params = Router::getParams();
		$this->Session->write('auth_redirect','/'.$request_params['url']['url']);
		$jobseeker = $this->checkJobSeekerSession();
		$this->paginate['JobSaved'] =  array('conditions' => array('jobseeker_id' => $jobseeker['Jobseeker']['id']));
		$this->paginate['Resume'] =  array('conditions' => array('jobseeker_id' => $jobseeker['Jobseeker']['id']));
		$this->Jobseeker->Resume->recursive = 1;
		$this->set('jobsaveds', $this->paginate('JobSaved'));
		$this->set('resumes', $this->paginate('Resume'));
	}

	function applyJob($jobID = null)
	{
		$jobseeker = $this->checkJobSeekerSession();
		if (!$jobID && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->read(null, $jobID));
		$this->set('resumes', $this->Jobseeker->Resume->find('list',array('conditions' => array('jobseeker_id' => $jobseeker['Jobseeker']['id'], 'status' => 1))));
		
		if ($jobID && empty($this->data)) {
			$jobApply = $this->Jobseeker->JobApply->find('all',array('conditions' => array(array('JobApply.jobseeker_id' => $jobseeker['Jobseeker']['id']),
					'AND' => array('job_id' => $jobID))));
			if(!empty($jobApply)){
				$this->Session->setFlash(__('Bạn đã nộp đơn công việc này.', true));
				$this->redirect(array('action' => 'index'));
			}
		}
		
		if (!empty($this->data)) {
			$this->Jobseeker->JobApply->create();
			if (!$this->Jobseeker->JobApply->save($this->data)) {
					$this->Session->setFlash(__('Tiêu đề hoặc hồ sơ đính kèm không hợp lệ', true));
					$this->redirect(array('action' => 'applyJob', $this->data['JobApply']['job_id']));
			}

			//add new job save, if avaiable update job saved status
			$existJobSaved = $this->Jobseeker->JobSaved->find('all',array('conditions' => array(array('JobSaved.jobseeker_id' => $this->data['JobApply']['jobseeker_id']),
									'AND' => array('job_id' => $this->data['JobApply']['job_id']))));
			
			if(!empty($existJobSaved))
			{
				//update status 0: not apply 1: applied
				$jobSaved = $existJobSaved[0]['JobSaved'];
				$jobSaved['status'] = 1;
				$jobSaved['applied'] = date('Y-m-d H:i:s', time());
				$this->Jobseeker->JobSaved->save($jobSaved);
			}
			else{
				$jobSaved = array('JobSaved' => array('jobseeker_id' => $this->data['JobApply']['jobseeker_id'],
									'job_id' => $this->data['JobApply']['job_id'], 'status' => 1, 'applied' => date('Y-m-d H:i:s',time())));
				$this->Jobseeker->JobSaved->save($jobSaved);
			}
			$this->redirect(array('action' => 'index'));
		}
	}

	function admin_index()
	{
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->Jobseeker->recursive = -1;
		$this->set('jobseekers', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		$this->Jobseeker->recursive = -1;
		$this->set('jobseekers', $this->paginate());
		if (!$id) {
			$this->Session->setFlash(__('Invalid jobseeker', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Jobseeker->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->Jobseeker->recursive = -1;
		$this->set('jobseekers', $this->paginate());
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

	function getProvinces() {
		if(!empty($this->data['Jobseeker']['country_id'])) {
			$this->set('options',$this->Jobseeker->Province->find('list',array(
				'conditions' => array('Province.country_id' => $this->data['Jobseeker']['country_id']),
				'group' => array('Province.name'))));
			$this->render('/jobseekers/ajax_dropdown');
		}
	}
}