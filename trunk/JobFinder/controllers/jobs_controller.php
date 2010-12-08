<?php
class JobsController extends AppController {
	var $name = 'Jobs';
	var $uses = array('Job','Country','Province','DegreeLevel','JobLevel','JobType','JobCategory','Skill','JobSkill');
	var $namedArgs = TRUE;
	
	function beforeFilter(){
		$this->set('total',$this->Job->find('count', array('conditions'=>array('Job.status' => 1))));
	}

	function search()
	{
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('provinces', $this->Province->find('list'));
		$this->set('listJobCategories', $this->JobCategory->find('all',array('contain'=>false, 'fields'=>array('JobCategory.id','JobCategory.name'),'order' => array('JobCategory.name'))));
		$this->set('jobTypes', $this->JobType->find('all',array('contain'=>false, 'fields'=>array('JobType.id','JobType.type'))));
	}

	function advanceSearch()
	{

	}

	function searchResults(){
		$this->getNamedArgs();
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('provinces', $this->Province->find('list'));
		if(isset($this->params['named']['day'])){
			$day = $this->params['named']['day'];
			$conditions = array('Job.status' => 1,
								'Job.approved >=' => date('Y-m-d', strtotime('-'.$day. ' days')),
								'Job.approved <=' => date('Y-m-d')
			);
			$this->paginate['Job'] = array('conditions' => $conditions,'recursive' => -1);
			$this->set('results', $this->paginate('Job'));
		}
		if(isset($this->params['named']['category'])){
			$category = $this->params['named']['category'];
			$conditions = array('Job.status' => 1,
								'Job.job_categories LIKE ' => '%'.$category.'%');
			$this->paginate['Job'] = array('conditions' => $conditions,'recursive' => -1);
			$this->set('results', $this->paginate('Job'));
		}
		if(isset($this->params['named']['type'])){
			$type = $this->params['named']['type'];
			$conditions = array('Job.status' => 1,
								'Job.job_types LIKE ' => '%'.$type.'%');
			$this->paginate['Job'] = array('conditions' => $conditions,'recursive' => -1);
			$this->set('results', $this->paginate('Job'));
		}
		if(!empty($this->data))
		{
			$conditions = array('Job.status' => 1,
								'Job.job_categories LIKE ' => '%'.$this->data['Job']['jobCategory'].'%',
								'Job.job_locations LIKE ' => '%'.$this->data['Job']['province'].'%',
								'OR' => array('Job.job_title LIKE ' => '%'.$this->data['Job']['keyword'].'%',
								'Job.job_description LIKE ' => '%'.$this->data['Job']['keyword'].'%',
								'Job.company_name LIKE ' => '%'.$this->data['Job']['keyword'].'%',
								'Job.minimun_salary' => $this->data['Job']['keyword'],
								'Job.maximun_salary' => $this->data['Job']['keyword'],
			));
			$this->paginate['Job'] = array('conditions' => $conditions,'recursive' => -1);
			$this->set('results', $this->paginate('Job'));
		}
	}

	function view($id = null) {
		$this->set('countries',$this->Country->find('list'));
		$this->set('provinces',$this->Province->find('list'));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('jobLevels',$this->JobLevel->find('list'));
		$this->set('jobTypes',$this->JobType->find('list'));
		$this->set('jobCategories',$this->JobCategory->find('list'));
		$this->set('degreeLevels',$this->DegreeLevel->find('list'));
		$this->set('skills', $this->Skill->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$this->set('languages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'search'));
		}
		$job = $this->Job->read(null,$id);
		if($job['Job']['status'] == 1){
			$jobViewLog = $this->Job->JobViewLog->findByJobId($id);
			$jobViewLog = $jobViewLog['JobViewLog'];
			$jobViewLog['views']++;
			$this->Job->JobViewLog->save($jobViewLog);
			$this->set('job', $this->Job->read(null,$id));
		}
		else {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'search'));
		}
	}

	function preview($id = null) {
		$request_params = Router::getParams();
		$this->Session->write('auth_redirect','/'.$request_params['url']['url']);
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		$this->set('countries',$this->Country->find('list'));
		$this->set('provinces',$this->Province->find('list'));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('jobLevels',$this->JobLevel->find('list'));
		$this->set('jobTypes',$this->JobType->find('list'));
		$this->set('jobCategories',$this->JobCategory->find('list'));
		$this->set('degreeLevels',$this->DegreeLevel->find('list'));
		$this->set('skills', $this->Skill->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$this->set('languages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=>'employers','action' => 'index'));
		}
		$job = $this->Job->read(null,$id);
		if(!empty($job) && $job['Job']['employer_id'] == $employer['Employer']['id']){
			$this->set('job', $job);
		}
		else {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=>'employers','action' => 'index'));
		}
	}

	function postJob(){
		$request_params = Router::getParams();
		$this->Session->write('auth_redirect','/'.$request_params['url']['url']);
		$employer = $this->checkEmployerSession();
		$this->layout = 'default_employer';
		$this->set('employer', $employer);
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('salaryRanges', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'SalaryRange'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Job->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('degreeLevels', $this->DegreeLevel->find('list'));
		$this->set('applicationLanguages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!empty($this->data)) {
			$this->Job->create();
			$this->Job->set($this->data);
			if($this->Job->validates()){
				if(!empty($this->data['Job']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['Job']['job_locations'], '{n}'));
				}
				if(!empty($this->data['Job']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['Job']['job_categories'], '{n}'));
				}
				$this->data['Job']['job_locations'] = $jobLocations;
				$this->data['Job']['job_categories'] = $jobCategories;
				$this->data['Job']['employer_id'] = $employer['Employer']['id'];
				$this->data['Job']['status'] = 0;
				if ($this->Job->save($this->data)) {
					//Create view log
					$jobViewLog = array('JobViewLog' => array('job_id' => $this->Job->id,'views' => 0));
					$this->Job->JobViewLog->save($jobViewLog);
					$this->Session->setFlash(__('The Job has been saved', true));
					$this->Session->write('jobID', $this->Job->id);
					$this->redirect(array('action' => 'addSkill'));
				} else {
					$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
				}
			}
		}
	}

	function modifyJob($id = null)
	{
		$employer = $this->checkEmployerSession();
		$this->layout = 'default_employer';
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('salaryRanges', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'SalaryRange'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Job->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('degreeLevels', $this->DegreeLevel->find('list'));
		$this->set('applicationLanguages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'jobs', 'action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			$this->Job->set($this->data);
			if($this->Job->validates()){
				if(!empty($this->data['Job']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['Job']['job_locations'], '{n}'));
				}
				if(!empty($this->data['Job']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['Job']['job_categories'], '{n}'));
				}
				$this->data['Job']['job_locations'] = $jobLocations;
				$this->data['Job']['job_categories'] = $jobCategories;
				$this->data['Job']['status'] = 0;
				if ($this->Job->save($this->data)) {
					$this->Session->setFlash(__('The Job has been saved', true));
					$this->Session->write('jobID', $this->Job->id);
					$this->redirect(array('action' => 'addSkill'));
				} else {
					$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
				}
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null, $id);
			$this->Session->write('jobID', $this->data['Job']['id']);
			//Convert string id of JobLocations to array
			$jobLocations = $job['Job']['job_locations'];
			$token = strtok($jobLocations, "|");
			$i=0;
			while ($token != false)
			{
				$arrJobLocations[$i] = $token;
				$token = strtok("|");
				$i++;
			}
			$job['Job']['job_locations'] = $arrJobLocations;
			//Convert string id of JobCategories to array
			$jobCategories = $job['Job']['job_categories'];
			$token = strtok($jobCategories, "|");
			$i=0;
			while ($token != false)
			{
				$arrJobCategories[$i] = $token;
				$token = strtok("|");
				$i++;
			}
			$job['Job']['job_categories'] = $arrJobCategories;
			$this->data = $job;
		}
	}
	
	function addSkill($id = null){
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		$skills = array();
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		if($id){
			$this->Session->write('jobID', $id);
		}
		$this->set('jobSkills', $this->Job->JobSkill->find('all', array('contain' => false, 'conditions' =>
		array('JobSkill.job_id' => $this->Session->read('jobID')))));
		$this->set('listSkills', $this->Skill->find('list'));

		if (!empty($this->data)) {
			if ($this->Job->JobSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'addSkill'));
			}
			else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
	}

	function editSkill($id = null,$isModify = null){
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		$this->set('skills', $this->Skill->find('list'));
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$this->set('listSkills', $this->Skill->find('list'));
		$this->set('isModify', $isModify);

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid skill', true));
			//Not found
		}
		if (!empty($this->data)) {
			if ($this->Job->JobSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				if(isset($this->params['form']['modify']))
				$this->redirect(array('action' => 'modifySkill',$this->data['JobSkill']['job_id']));
				$this->redirect(array('action' => 'addSkill',$this->data['JobSkill']['job_id']));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Job->JobSkill->read(null, $id);
			$this->Session->write('jobID', $this->data['JobSkill']['job_id']);
		}
		$this->set('jobSkills', $this->Job->JobSkill->find('all', array('conditions' =>
		array('JobSkill.job_id' => $this->Session->read('jobID')))));
	}

	function deleteSkill($id = null, $isModify = null) {
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for skill', true));
			//Not found
		}
		if ($this->Job->JobSkill->delete($id)) {
			$this->Session->setFlash(__('Skill deleted', true));
			if($isModify)
			$this->redirect(array('action'=>'modifySkill'));
			$this->redirect(array('action'=>'addSkill'));
		}
		$this->Session->setFlash(__('Skill was not deleted', true));
		if($isModify)
		$this->redirect(array('action'=>'modifySkill'));
		$this->redirect(array('action'=>'addSkill'));
	}

	function modifySkill($id = null){
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		$skills = array();
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		if($id){
			$this->Session->write('jobID', $id);
		}
		$this->set('jobSkills', $this->Job->JobSkill->find('all', array('contain' => false, 'conditions' =>
		array('JobSkill.job_id' => $this->Session->read('jobID')))));
		$this->set('listSkills', $this->Skill->find('list'));
		if (!empty($this->data)) {
			if ($this->Job->JobSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'modifySkill',$this->data['JobSkill']['job_id']));
			}
			else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
	}

	function editCompanyInformation($id = null) {
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'employers', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Job->save($this->data)) {
				$this->Session->write('jobID', $this->Job->id);
				$this->Session->setFlash(__('The job has been saved', true));
				$this->redirect(array('controller'=>'Jobs','action' => 'preview',$this->data['Job']['id']));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null,$id);
			if($job['Job']['employer_id'] == $employer['Employer']['id']){
				$this->data = $job;
			}
			else {
				$this->Session->setFlash(__('Invalid job', true));
				$this->redirect(array('controller'=>'employers','action' => 'index'));
			}
		}
	}

	function editJobInformation($id = null) {
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		$this->set('salaryRanges', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'SalaryRange'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Job->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('degreeLevels', $this->DegreeLevel->find('list'));
		$this->set('applicationLanguages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'employers', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->Job->set($this->data);
			if($this->Job->validates()){
				if(!empty($this->data['Job']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['Job']['job_locations'], '{n}'));
				}
				if(!empty($this->data['Job']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['Job']['job_categories'], '{n}'));
				}
				$this->data['Job']['job_locations'] = $jobLocations;
				$this->data['Job']['job_categories'] = $jobCategories;
				$this->data['Job']['employer_id'] = $employer['Employer']['id'];
				if($this->data['Job']['status'] == 1 || $this->data['Job']['status'] == 2)
				$this->data['Job']['status'] = 3;
				if ($this->Job->save($this->data)) {
					$this->Session->setFlash(__('The Job has been saved', true));
					$this->Session->write('jobID', $this->Job->id);
					$this->redirect(array('controller'=>'Jobs','action' => 'preview',$this->data['Job']['id']));
				} else {
					$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
				}
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null,$id);
			if($job['Job']['employer_id'] == $employer['Employer']['id']){
				//Convert string id of JobLocations to array
				$jobLocations = $job['Job']['job_locations'];
				$token = strtok($jobLocations, "|");
				$i=0;
				while ($token != false)
				{
					$arrJobLocations[$i] = $token;
					$token = strtok("|");
					$i++;
				}
				$job['Job']['job_locations'] = $arrJobLocations;
				//Convert string id of JobCategories to array
				$jobCategories = $job['Job']['job_categories'];
				$token = strtok($jobCategories, "|");
				$i=0;
				while ($token != false)
				{
					$arrJobCategories[$i] = $token;
					$token = strtok("|");
					$i++;
				}
				$job['Job']['job_categories'] = $arrJobCategories;
				$this->data = $job;
			}
			else {
				$this->Session->setFlash(__('Invalid job', true));
				$this->redirect(array('controller'=>'employers','action' => 'index'));
			}
		}
	}

	function editJobContact($id = null) {
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'employers', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Job->save($this->data)) {
				$this->Session->write('jobID', $this->Job->id);
				$this->Session->setFlash(__('The job has been saved', true));
				$this->redirect(array('controller'=>'Jobs','action' => 'preview',$this->data['Job']['id']));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null,$id);
			if($job['Job']['employer_id'] == $employer['Employer']['id']){
				$this->data = $job;
			}
			else {
				$this->Session->setFlash(__('Invalid job', true));
				$this->redirect(array('controller'=>'employers','action' => 'index'));
			}
		}
	}
	
	function delete($id=null) {
		$this->layout = 'default_employer';
		$employer = $this->checkEmployerSession();
		if (!$id) {
			$this->Session->setFlash(__('Công việc không hợp lệ.', true));
			$this->redirect(array('controller'=>'employers','action'=>'index'));
		}
		if ($this->Job->delete($id)) {
			$this->Session->setFlash(__('Công việc đã được xóa.', true));
			$this->redirect(array('controller'=>'employers','action'=>'index'));
		}
		$this->Session->setFlash(__('Không thể xóa công việc.', true));
		$this->redirect(array('controller'=>'employers','action'=>'index'));
	}

	function saveJob($id = null)
	{
		$jobseeker = $this->checkJobSeekerSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$jobApply = $this->Job->JobApply->find('all',array('conditions' => array(array('JobApply.jobseeker_id' => $jobseeker['Jobseeker']['id']),
					'AND' => array('job_id' => $id))));
		if(!empty($jobApply)){
			$jobSaved = array('JobSaved' => array('jobseeker_id' => $jobseeker['Jobseeker']['id'],
									'job_id' => $id, 'status' => 1, 'applied' => $jobApply[0]['JobApply']['created'] ));
		}
		else {
			$jobSaved = array('JobSaved' => array('jobseeker_id' => $jobseeker['Jobseeker']['id'],'job_id' => $id));
		}

		$this->Job->JobSaved->set($jobSaved);
		if(!$this->Job->JobSaved->validates())
		{
			$this->Session->setFlash(__('Công việc này đã có trong danh sách', true));
			$this->redirect(array('action'=>'view',$id));
		}
		if ($this->Job->JobSaved->save($jobSaved)) {
			$this->Session->setFlash(__('Lưu công việc thành công', true));
			$this->redirect(array('action'=>'view',$id));
		}
		$this->Session->setFlash(__('Lưu công việc không thành công', true));
		$this->redirect(array('action'=>'view',$id));
	}

	function deleteSavedJob($id=null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job', true));
			$this->redirect(array('controller'=>'jobseekers', 'action'=>'index'));
		}
		if ($this->Job->JobSaved->delete($id)) {
			$this->Session->setFlash(__('Job Saved deleted', true));
			$this->redirect(array('controller'=>'jobseekers', 'action'=>'index'));
		}
		$this->Session->setFlash(__('Job saved was not deleted', true));
		$this->redirect(array('controller'=>'jobseekers', 'action' => 'index'));
	}
	
	function admin_index()
	{
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->Job->recursive = 1;
		$this->set('jobs', $this->paginate('Job'));
	}

	function admin_view($id = null) {
		$this->checkAdminSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->read(null,$id));
	}

	function admin_approveJob() {
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->paginate['Job'] =  array('conditions' => array('status' => array(0,2,3)));
		$this->Job->recursive = 1;
		$this->set('jobs', $this->paginate('Job'));
	}
	
	function admin_approve($id = null) {
		$this->layout = 'default_admin';
		$this->checkAdminSession();
		$this->set('countries',$this->Country->find('list'));
		$this->set('provinces',$this->Province->find('list'));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('jobLevels',$this->JobLevel->find('list'));
		$this->set('jobTypes',$this->JobType->find('list'));
		$this->set('jobCategories',$this->JobCategory->find('list'));
		$this->set('degreeLevels',$this->DegreeLevel->find('list'));
		$this->set('skills', $this->Skill->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$this->set('languages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=>'jobs' ,'action' => 'admin_approveJob'));
		}
		if (!empty($this->data)) {
			$this->data['Job']['approved'] = date('Y-m-d H:i:s', time());
			//pr($this->data);
			if ($this->Job->save($this->data)) {
				$this->Session->setFlash(__('Việc làm đã được duyệt', true));
				$this->redirect(array('controller'=>'jobs', 'action' => 'admin_approveJob'));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null,$id);
			if(!empty($job)){
				$this->set('job', $job);
				$this->data = $job;
			}
			else {
				$this->Session->setFlash(__('Invalid job', true));
				$this->redirect(array('controller'=>'jobs','action' => 'admin_index'));
			}
		}
	}

	function admin_postJob()
	{
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('salaryRanges', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'SalaryRange'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Job->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('degreeLevels', $this->DegreeLevel->find('list'));
		$this->set('applicationLanguages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!empty($this->data)) {
			$this->Job->create();
			$this->Job->set($this->data);
			if($this->Job->validates()){
				if(!empty($this->data['Job']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['Job']['job_locations'], '{n}'));
				}
				if(!empty($this->data['Job']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['Job']['job_categories'], '{n}'));
				}
				$this->data['Job']['job_locations'] = $jobLocations;
				$this->data['Job']['job_categories'] = $jobCategories;
				$this->data['Job']['status'] = 0;
				if ($this->Job->save($this->data)) {
					//Create view log
					$jobViewLog = array('JobViewLog' => array('job_id' => $this->Job->id,'views' => 0));
					$this->Job->JobViewLog->save($jobViewLog);
					$this->Session->setFlash(__('The Job has been saved', true));
					$this->Session->write('jobID', $this->Job->id);
					$this->redirect(array('action' => 'admin_addSkill'));
				} else {
					$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
				}
			}
		}
	}

	function admin_modifyJob($id = null)
	{
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('salaryRanges', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'SalaryRange'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Job->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('degreeLevels', $this->DegreeLevel->find('list'));
		$this->set('applicationLanguages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'jobs', 'action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			$this->Job->set($this->data);
			if($this->Job->validates()){
				if(!empty($this->data['Job']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['Job']['job_locations'], '{n}'));
				}
				if(!empty($this->data['Job']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['Job']['job_categories'], '{n}'));
				}
				$this->data['Job']['job_locations'] = $jobLocations;
				$this->data['Job']['job_categories'] = $jobCategories;
				//$this->data['Job']['employer_id'] = '12313';
				$this->data['Job']['status'] = 0;
				if ($this->Job->save($this->data)) {
					$this->Session->setFlash(__('The Job has been saved', true));
					$this->Session->write('jobID', $this->Job->id);
					$this->redirect(array('action' => 'admin_addSkill'));
				} else {
					$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
				}
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null, $id);
			$this->Session->write('jobID', $this->data['Job']['id']);
			//Convert string id of JobLocations to array
			$jobLocations = $job['Job']['job_locations'];
			$token = strtok($jobLocations, "|");
			$i=0;
			while ($token != false)
			{
				$arrJobLocations[$i] = $token;
				$token = strtok("|");
				$i++;
			}
			$job['Job']['job_locations'] = $arrJobLocations;
			//Convert string id of JobCategories to array
			$jobCategories = $job['Job']['job_categories'];
			$token = strtok($jobCategories, "|");
			$i=0;
			while ($token != false)
			{
				$arrJobCategories[$i] = $token;
				$token = strtok("|");
				$i++;
			}
			$job['Job']['job_categories'] = $arrJobCategories;
			$this->data = $job;
		}
	}
	
	function admin_delete($id=null) {
		$this->layout='default_admin';
		$this->checkAdminSession();
		if (!$id) {
			$this->Session->setFlash(__('Công việc không hợp lệ.', true));
			$this->redirect(array('controller'=>'jobs','action'=>'admin_index'));
		}
		if ($this->Job->delete($id)) {
			$this->Session->setFlash(__('Công việc đã được xóa.', true));
			$this->redirect(array('controller'=>'jobs','action'=>'admin_index'));
		}
		$this->Session->setFlash(__('Không thể xóa công việc.', true));
		$this->redirect(array('controller'=>'jobs','action'=>'admin_index'));
	}
	
	function admin_addSkill($id = null){
		$this->layout='default_admin';
		$this->checkAdminSession();
		$skills = array();
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		if($id){
			$this->Session->write('jobID', $id);
		}
		$this->set('jobSkills', $this->Job->JobSkill->find('all', array('contain' => false, 'conditions' =>
		array('JobSkill.job_id' => $this->Session->read('jobID')))));
		$this->set('listSkills', $this->Skill->find('list'));

		if (!empty($this->data)) {
			if ($this->Job->JobSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'admin_addSkill'));
			}
			else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_editSkill($id = null, $isModify = null){
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->set('skills', $this->Skill->find('list'));
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$this->set('listSkills', $this->Skill->find('list'));
		$this->set('isModify', $isModify);

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid skill', true));
			//Not found
		}
		if (!empty($this->data)) {
			if ($this->Job->JobSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				if(isset($this->params['form']['modify']))
					$this->redirect(array('action' => 'admin_modifySkill',$this->data['JobSkill']['job_id']));
				$this->redirect(array('action' => 'admin_addSkill',$this->data['JobSkill']['job_id']));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Job->JobSkill->read(null, $id);
			$this->Session->write('jobID', $this->data['JobSkill']['job_id']);
		}
		$this->set('jobSkills', $this->Job->JobSkill->find('all', array('conditions' =>
		array('JobSkill.job_id' => $this->Session->read('jobID')))));
	}

	function admin_deleteSkill($id = null, $isModify = null) {
		$this->layout = 'default_admin';
		$this->checkAdminSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for skill', true));
			$this->redirect(array('action'=>'addSkill'));
		}
		if ($this->Job->JobSkill->delete($id)) {
			$this->Session->setFlash(__('Skill deleted', true));
			if($isModify)
				$this->redirect(array('action'=>'admin_modifySkill'));
			$this->redirect(array('action'=>'admin_addSkill'));
		}
		$this->Session->setFlash(__('Skill was not deleted', true));
		if($isModify)
			$this->redirect(array('action'=>'admin_modifySkill'));
		$this->redirect(array('action'=>'admin_addSkill'));
	}

	function admin_modifySkill($id = null){
		$this->layout = 'default_admin';
		$this->checkAdminSession();
		$skills = array();
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		if($id){
			$this->Session->write('jobID', $id);
		}
		$this->set('jobSkills', $this->Job->JobSkill->find('all', array('contain' => false, 'conditions' =>
		array('JobSkill.job_id' => $this->Session->read('jobID')))));
		$this->set('listSkills', $this->Skill->find('list'));
		if (!empty($this->data)) {
			if ($this->Job->JobSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'admin_modifySkill',$this->data['JobSkill']['job_id']));
			}
			else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
	}
	
	function admin_preview($id = null) {
		$this->layout = 'default_admin';
		$this->checkAdminSession();
		$this->set('countries',$this->Country->find('list'));
		$this->set('provinces',$this->Province->find('list'));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('jobLevels',$this->JobLevel->find('list'));
		$this->set('jobTypes',$this->JobType->find('list'));
		$this->set('jobCategories',$this->JobCategory->find('list'));
		$this->set('degreeLevels',$this->DegreeLevel->find('list'));
		$this->set('skills', $this->Skill->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$this->set('languages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=>'jobs','action' => 'admin_index'));
		}
		$job = $this->Job->read(null,$id);
		if(!empty($job)){
			$this->set('job', $job);
		}
		else {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=>'jobs','action' => 'admin_index'));
		}
	}

	function admin_editCompanyInformation($id = null) {
		$this->layout = 'default_admin';
		$this->checkAdminSession();
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'jobs', 'action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			if ($this->Job->save($this->data)) {
				$this->Session->write('jobID', $this->Job->id);
				$this->Session->setFlash(__('The job has been saved', true));
				$this->redirect(array('controller'=>'jobs','action' => 'admin_preview',$this->data['Job']['id']));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null,$id);
			if(!empty($job)){
				$this->data = $job;
			}
			else {
				$this->Session->setFlash(__('Invalid job', true));
				$this->redirect(array('controller'=>'jobs','action' => 'admin_index'));
			}
		}
	}

	function admin_editJobInformation($id = null) {
		$this->layout = 'default_admin';
		$this->checkAdminSession();
		$this->set('salaryRanges', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'SalaryRange'))))));
		$this->set('countries', $this->Job->Country->find('list'));
		$this->set('provinces', $this->Job->Province->find('list'));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Job->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('degreeLevels', $this->DegreeLevel->find('list'));
		$this->set('applicationLanguages', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Language'))))));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'jobs', 'action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			$this->Job->set($this->data);
			if($this->Job->validates()){
				if(!empty($this->data['Job']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['Job']['job_locations'], '{n}'));
				}
				if(!empty($this->data['Job']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['Job']['job_categories'], '{n}'));
				}
				$this->data['Job']['job_locations'] = $jobLocations;
				$this->data['Job']['job_categories'] = $jobCategories;
				if($this->data['Job']['status'] == 1 || $this->data['Job']['status'] == 2)
				$this->data['Job']['status'] = 3;
				if ($this->Job->save($this->data)) {
					$this->Session->setFlash(__('The Job has been saved', true));
					$this->Session->write('jobID', $this->Job->id);
					$this->redirect(array('controller'=>'jobs','action' => 'admin_preview',$this->data['Job']['id']));
				} else {
					$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
				}
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null,$id);
			if(!empty($job)){
				//Convert string id of JobLocations to array
				$jobLocations = $job['Job']['job_locations'];
				$token = strtok($jobLocations, "|");
				$i=0;
				while ($token != false)
				{
					$arrJobLocations[$i] = $token;
					$token = strtok("|");
					$i++;
				}
				$job['Job']['job_locations'] = $arrJobLocations;
				//Convert string id of JobCategories to array
				$jobCategories = $job['Job']['job_categories'];
				$token = strtok($jobCategories, "|");
				$i=0;
				while ($token != false)
				{
					$arrJobCategories[$i] = $token;
					$token = strtok("|");
					$i++;
				}
				$job['Job']['job_categories'] = $arrJobCategories;
				$this->data = $job;
			}
			else {
				$this->Session->setFlash(__('Invalid job', true));
				$this->redirect(array('controller'=>'jobs','action' => 'admin_index'));
			}
		}
	}

	function admin_editJobContact($id = null) {
		$this->layout = 'default_admin';
		$this->checkAdminSession();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('controller'=> 'employers', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Job->save($this->data)) {
				$this->Session->write('jobID', $this->Job->id);
				$this->Session->setFlash(__('The job has been saved', true));
				$this->redirect(array('controller'=>'Jobs','action' => 'admin_preview',$this->data['Job']['id']));
			} else {
				$this->Session->setFlash(__('The job could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$job = $this->Job->read(null,$id);
			if(!empty($job)){
				$this->data = $job;
			}
			else {
				$this->Session->setFlash(__('Invalid job', true));
				$this->redirect(array('controller'=>'jobs','action' => 'admin_index'));
			}
		}
	}
	
	function getProvinces() {
		if(!empty($this->data['Job']['country_id'])) {
			$this->set('options',$this->Job->Province->find('list',array(
				'conditions' => array('Province.country_id' => $this->data['Job']['country_id']),
				'group' => array('Province.name'))));
			$this->render('/jobs/ajax_dropdown');
		}
	}
	
	function getSkills() {
		if(!empty($this->data['Skill']['skill_group_id'])) {
			$this->set('options',$this->Skill->find('list',array(
				'conditions' => array('Skill.skill_group_id' => $this->data['Skill']['skill_group_id']),
				'group' => array('Skill.name'))));
			$this->render('/jobs/ajax_dropdown');
		}

	}
	
	function admin_getProvinces() {
		$this->layout = 'default_admin';
		if(!empty($this->data['Job']['country_id'])) {
			$this->set('options',$this->Job->Province->find('list',array(
				'conditions' => array('Province.country_id' => $this->data['Job']['country_id']),
				'group' => array('Province.name'))));
			$this->render('/jobs/ajax_dropdown');
		}
	}
	
	function admin_getSkills() {
		$this->layout = 'default_admin';
		if(!empty($this->data['Skill']['skill_group_id'])) {
			$this->set('options',$this->Skill->find('list',array(
				'conditions' => array('Skill.skill_group_id' => $this->data['Skill']['skill_group_id']),
				'group' => array('Skill.name'))));
			$this->render('/jobs/ajax_dropdown');
		}

	}
}
?>