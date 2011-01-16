<?php
class EmployersController extends AppController {
	var $name = 'Employers';
	var $helpers = array('Recaptcha.CaptchaTool');
	var $components = array('RequestHandler','Email','Recaptcha.Captcha' => array(
                'private_key' => '6LeP2r0SAAAAAPYU1WQUkoj9IyVljJVQiBVshL1x',  
                'public_key' => '6LeP2r0SAAAAAN8qyexGrxfP-6cMh6vWGuFAOL3K'));
	var $uses = array('Employer','Job','JobApply','Resume','ResumeJobExp','ResumeEducation','Job','ResumeSkill', 'Skill','JobLevel','JobCategory','JobType');
	var $namedArgs = TRUE;
	
	function beforeFilter(){
		$this->layout = 'default_employer';
		$this->set('total',$this->Job->find('count', array('conditions'=>array('Job.status' => 1))));
	}
	
	function home(){
		
	}
	
	function index(){
		$employer = $this->checkEmployerSession();
		$this->paginate['Job'] =  array('conditions' => array('employer_id' => $employer['Employer']['id'], 'status'=>1),'order'=>'Job.approved DESC','recursive'=>1);
		$this->set('jobs', $this->paginate('Job'));
	}

	function manageJob(){
		$employer = $this->checkEmployerSession();
		$this->getNamedArgs();
		if(isset($this->params['named']['status'])){
			$status = $this->params['named']['status'];
			if($status == 4){
				$this->paginate['Job'] =  array('conditions' => array('employer_id' => $employer['Employer']['id'], 'status'=>1, 'expired > '=>date('Y-m-d',time())),'recursive'=>1);
				$this->set('jobs', $this->paginate('Job'));
			}
			else {
				$this->paginate['Job'] =  array('conditions' => array('employer_id' => $employer['Employer']['id'], 'status'=>$status),'recursive'=>1);
				$this->set('jobs', $this->paginate('Job'));
			}
		}
		else {
			$this->paginate['Job'] =  array('conditions' => array('employer_id' => $employer['Employer']['id'], 'status'=>array(1,2)),'recursive'=>1);
			$this->set('jobs', $this->paginate('Job'));
		}
	}
	
	function manageCandidates(){
		$employer = $this->checkEmployerSession();
		$this->paginate['JobApply'] =  array('conditions' => array('Job.employer_id'=> $employer['Employer']['id']),'order'=>'JobApply.created DESC' ,'recursive'=>1);
		$this->set('jobApplys', $this->paginate('JobApply'));
	}
	
	function viewApplyJob($id = null)
	{
		$employer = $this->checkEmployerSession();
		if (!$id) {
			$this->Session->setFlash(__('Hồ sơ ứng tuyển không hợp lệ', true));
			$this->redirect(array('action' => 'manageCandidates'));
		}
		$jobApply = $this->JobApply->read(null,$id);
		if(!empty($jobApply)){
			$this->set('jobApply', $jobApply);
		} else {
			$this->Session->setFlash(__('Hồ sơ ứng tuyển không hợp lệ', true));
			$this->redirect(array('action' => 'manageCandidates'));
		}
	}
	
	function deleteApplyJob($id=null) {
		$employer = $this->checkEmployerSession();
		if (!$id) {
			$this->Session->setFlash(__('Hồ sơ ứng tuyển không hợp lệ.', true));
			$this->redirect(array('action' => 'manageCandidates'));
		}
		if ($this->JobApply->delete($id)) {
			$this->Session->setFlash(__('Hồ sơ ứng tuyển đã được xóa.', true));
			$this->redirect(array('action' => 'manageCandidates'));
		} else {
			$this->Session->setFlash(__('Không thể xóa Hồ sơ ứng tuyển.', true));
			$this->redirect(array('action' => 'manageCandidates'));
		}
	}
	
	function viewResume($id = null){
		$request_params = Router::getParams();
		$this->Session->write('auth_redirect','/'.$request_params['url']['url']);
		$employer = $this->checkEmployerSession();
		if (!$id) {
			$this->Session->setFlash(__('Hồ sơ không tồn tại.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nationalities', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Nationality'))))));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('degreeLevels', $this->ResumeEducation->DegreeLevel->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		$this->set('skills', $this->Skill->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$resume = $this->Resume->read(null,$id);
		$resumeViewLog = array('ResumeViewLog' => array('resume_id' => $resume['Resume']['id'],
									'employer_id' => $employer['Employer']['id'], 'created' => date('Y-m-d H:i:s',time())));
		$this->Employer->ResumeViewLog->save($resumeViewLog);
		$this->set('resume', $this->Resume->read(null,$id));
	}
	
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
					$this->Session->setFlash('Tài khoản chưa được kích hoạt.');
					$this->data['Employer']['password'] = null;
				}
				else{
					// write the username to a session
					$this->Session->write('Employer', $dbuser);
					// save the login time
					$dbuser['Employer']['last_login'] = date("Y-m-d H:i:s");
					$this->Employer->save($dbuser, false, array('last_login'));
					// redirect the user
					//$this->Session->setFlash('You have successfully logged in.');
					$auth_redirect = $this->Session->read('auth_redirect');
					if(!empty($auth_redirect)){
						$this->Session->delete('auth_redirect');
						$this->redirect($auth_redirect);
					}
					$this->redirect(array('controller'=>'employers', 'action'=>'index'));
				}
			}
			else {
				$this->Session->setFlash(__('Email hoặc mật khẩu đăng nhập không đúng.', true));
				$this->data['Employer']['password'] = null;
			}
		}
	}

	function logout() {
		// delete the user session
		$this->Session->delete('Employer');
		// redirect to posts index page
		//$this->Session->setFlash('You have successfully logged out.');
		$this->redirect(array('controller'=>'employers','action'=>'home'));
	}
	
	function account(){
		$employer = $this->checkEmployerSession();
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('countries', $this->Employer->Country->find('list'));
		$this->set('provinces', $this->Employer->Province->find('list'));
		if (!empty($this->data)) {
			if ($this->Employer->save($this->data)) {
				$this->Session->setFlash(__('Tài khoản đã được cập nhật', true));
				$employer = $this->Employer->read(null,$this->data['Employer']['id']);
				$this->Session->write('Employer', $employer);
				$this->redirect(array('action'=>'account'));
			}
			else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if(empty($this->data)){
			$this->data = $this->Employer->read(null,$employer['Employer']['id']);
		}
	}
	
	function changePassword(){
		$employer = $this->checkEmployerSession();
		if (!empty($this->data)) {
			if(md5($this->data['Employer']['old_password']) != $this->data['Employer']['password']){
				$this->Session->setFlash('Mật khẩu hiện tại không chính xác.');
				$this->data['Employer']['old_password'] = null;
				$this->data['Employer']['new_password'] = null;
				$this->data['Employer']['confirm_new_password'] = null;
				$this->redirect(array('action'=>'account'));
			}
			else if(empty($this->data['Employer']['new_password']) || empty($this->data['Employer']['confirm_new_password'])){
				$this->Session->setFlash('Vui lòng nhập mật khẩu.');
				$this->data['Employer']['old_password'] = null;
				$this->data['Employer']['new_password'] = null;
				$this->data['Employer']['confirm_new_password'] = null;
				$this->redirect(array('action'=>'account'));
			}
			else if($this->data['Employer']['new_password'] != $this->data['Employer']['confirm_new_password']){
				$this->Session->setFlash('Mật khẩu xác nhận không hợp lệ.');
				$this->data['Employer']['old_password'] = null;
				$this->data['Employer']['new_password'] = null;
				$this->data['Employer']['confirm_new_password'] = null;
				$this->redirect(array('action'=>'account'));
			}else {
				$this->data['Employer']['password'] = md5($this->data['Employer']['new_password']);
				if ($this->Employer->save($this->data)) {
					$this->Session->setFlash(__('Thay đổi mật khẩu thành công', true));
					$this->redirect(array('action' => 'account'));
				} else {
					$this->Session->setFlash(__('Thay đổi mật khẩu thất bại.', true));
				}
			}
		}
	}

	function register() {
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('countries', $this->Employer->Country->find('list'));
		$provinces = array();
		$this->set('captchaError', null);
		if (!empty($this->data)) {
			if($this->data['Employer']['password'] != $this->data['Employer']['confirm_password']){
				$this->Session->setFlash('Mật khẩu xác nhận không hợp lệ');
				$this->data['Employer']['password'] = null;
				$this->data['Employer']['confirm_password'] = null;
			}
			else {
				if ($this->Captcha->validate()) {
					$this->set('captchaError', null);
					$this->data['Employer']['password'] = md5($this->data['Employer']['password']);
					//active user
					$this->data['Employer']['actived'] = 1;
					if ($this->Employer->save($this->data)) {
						//$this->__sendActivationEmail($this->Employer->getLastInsertID());
						$this->Session->setFlash(__('The account has been created', true));
						$this->redirect('/employers/login');
					}
					else {
						$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
						$this->data['Employer']['password'] = null;
						$this->data['Employer']['confirm_password'] = null;
					}
				}
				else {
					$this->Session->setFlash('Mã xác nhận Captcha không chính xác.');
					$this->data['Employer']['password'] = null;
					$this->data['Employer']['confirm_password'] = null;
				}
			}
		}
	}

	function activate($user_id = null, $in_hash = null) {
		$this->Employer->id = $user_id;
		if ($this->Employer->exists() && ($in_hash == $this->Employer->getActivationHash())) {
			if (empty($this->data)) {

				$this->data = $this->Employer->read(null, $user_id);
				// Update the active flag in the database
				$this->Employer->set('actived', 1);
				$this->Employer->save();
				$this->Session->setFlash('Your account has been activated, please log in below.');
				$this->redirect('/employers/login');
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

		$this->Email->to = $user['Employer']['email'];
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

	function admin_index()
	{
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->Employer->recursive = 1;
		$this->set('employers', $this->paginate());
	}

	function admin_view($id = null) {
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->set('countries', $this->Employer->Country->find('list'));
		$this->set('provinces', $this->Employer->Province->find('list'));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->Employer->recursive = 1;
		$this->set('employers', $this->paginate());
		if (!$id) {
			$this->Session->setFlash(__('Tài khoản nhà tuyển dụng không tồn tại.', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Employer->read(null, $id);
		}
	}

	function admin_edit($id = null) {
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->Employer->recursive = 1;
		$this->set('employers', $this->paginate());
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Tài khoản nhà tuyển dụng không tồn tại.', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			if ($this->Employer->save($this->data, false, array('actived'))) {
				$this->Session->setFlash(__('Cập nhật thành công.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Vui lòng kiểm tra lại thông tin.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employer->read(null, $id);
		}
	}

	function getProvinces() {
		if(!empty($this->data['Employer']['country_id'])) {
			$this->set('options',$this->Employer->Province->find('list',array(
				'conditions' => array('Province.country_id' => $this->data['Employer']['country_id']),
				'group' => array('Province.name'))));
			$this->render('/employers/ajax_dropdown');
		}
	}
}
?>