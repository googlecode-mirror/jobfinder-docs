<?php
class ResumesController extends AppController {
	var $name = 'Resumes';
	var $components = array('RequestHandler');
	var $uses = array('Resume','ResumeJobExp','ResumeEducation','Job','ResumeSkill', 'Skill','JobLevel','JobCategory','JobType','Province');

	function beforeFilter(){
		$this->set('total',$this->Job->find('count', array('conditions'=>array('Job.status' => 1))));
	}
	
	function search(){
		$this->layout = 'default_employer';
		$this->getNamedArgs();
		$this->set('categories', $this->JobCategory->find('list'));
		$this->set('jobLevels', $this->JobLevel->find('list'));
		$this->set('locations', $this->Province->find('list'));
		if(!empty($this->data))
		{
			$this->redirect(array('action'=>'search',
				'keyword'=> $this->data['Resume']['keyword'],
				'category'=> $this->data['Resume']['category'],
				'location'=> $this->data['Resume']['location'],
				'job_level'=> $this->data['Resume']['job_level'],
				'years_exp'=> $this->data['Resume']['years_exp']));
		}
		if(isset($this->params['named']['keyword']) || isset($this->params['named']['years_exp']) || isset($this->params['named']['job_level']) 
		|| isset($this->params['named']['category']) || isset($this->params['named']['location']))
		{
			$keyword = '';
			$category = '';
			$location = '';
			$years_exp = '';
			$job_level = '';
			if(isset($this->params['named']['keyword']))
				$keyword = $this->params['named']['keyword'];
			if(isset($this->params['named']['category']))
				$category = $this->params['named']['category'];
			if(isset($this->params['named']['location']))
				$location = $this->params['named']['location'];
			if(isset($this->params['named']['job_level']))
				$job_level = $this->params['named']['job_level'];
			if(isset($this->params['named']['years_exp']))
				$years_exp = $this->params['named']['years_exp'];
			
			$joins = array(array('table' => 'resume_target_jobs',
								'alias' => 'ResumeTargetJob',
								'type' => 'left',
            					'foreignKey' => false,
           		 				'conditions'=> array('ResumeTargetJob.resume_id = resume.id')));
			
			$conditions = array('Resume.status' => 1,
								'Resume.privacy_status' => 1,
								'Resume.years_exp LIKE' => '%'.$years_exp.'%',
								'ResumeTargetJob.job_level_id LIKE' => '%'.$job_level.'%',
								'ResumeTargetJob.job_categories LIKE' => '%'.$category.'%',
								'ResumeTargetJob.job_locations LIKE' => '%'.$location.'%',
								'OR' => array('Resume.resume_title LIKE ' => '%'.$keyword.'%',
								'ResumeTargetJob.career_objective LIKE ' => '%'.$keyword.'%',
								'Jobseeker.first_name LIKE ' => '%'.$keyword.'%',
								'Jobseeker.last_name LIKE ' => '%'.$keyword.'%'
								));
			
			$this->paginate['Resume'] = array('joins'=> $joins, 'conditions' => $conditions,'recursive' => 2);
			$this->set('results', $this->paginate('Resume'));
		} else{
			$conditions = array('Resume.resume_title' => '');
			$this->paginate['Resume'] = array('conditions' => $conditions,'recursive' => 1);
			$this->set('results', $this->paginate('Resume'));
		}
	}
	
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid resume', true));
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
		$this->set('resume', $this->Resume->read(null,$id));
	}

	function preview($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('controller'=>'jobseekers','action' => 'index'));
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
		$this->set('resume', $this->Resume->read(null,$id));
	}

	function createResume(){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobseeker', $jobseeker);
		$this->set('nationalities', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Nationality'))))));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if (!empty($this->data)) {
			$this->Resume->create();
			$this->data['Resume']['jobseeker_id'] = $jobseeker['Jobseeker']['id'];
			if ($this->Resume->save($this->data)) {
				$this->Session->setFlash(__('The resume has been saved', true));
				$this->Session->write('resumeID', $this->Resume->id);
				$this->Session->write('years_exp', $this->data['Resume']['years_exp']);
				if($this->data['Resume']['years_exp'] == 0){
					$this->redirect(array('action' => 'addEducation'));
				}
				else{
					$this->redirect(array('action' => 'addJobExp'));
				}
			} else {
				$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
			}
		}
	}

	function modifyResume($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobseeker', $jobseeker);
		$this->set('nationalities', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Nationality'))))));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('controller'=> 'jobseeker', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if($this->data['Resume']['years_exp'] == 0 && $this->Resume->ResumeJobExp->find('list',array('conditions' => array('ResumeJobExp.resume_id' => $this->data['Resume']['id'])))){
				$this->Session->setFlash(__('Bạn có quá trình làm việc, số năm kinh nghiệm không thể nhập 0', true));
			}
			else {
				if ($this->Resume->save($this->data)) {
					$this->Session->write('resumeID', $this->Resume->id);
					$this->Session->write('years_exp', $this->data['Resume']['years_exp']);
					$this->Session->setFlash(__('The resume has been saved', true));
					if($this->data['Resume']['years_exp'] != 0){
						$this->redirect(array('controller'=>'Resumes','action' => 'addJobExp',$this->data['Resume']['id']));
					}
					else{
						$this->redirect(array('controller'=>'Resumes','action' => 'addEducation',$this->data['Resume']['id']));
					}
				}
				else {
					$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
				}
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->read(null, $id);
			$this->Session->write('resumeID', $this->data['Resume']['id']);
		}
	}

	function editResume($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobseeker', $jobseeker);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('controller'=> 'jobseeker', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Resume->save($this->data)) {
				$this->Session->write('resumeID', $this->Resume->id);
				$this->Session->setFlash(__('The resume has been saved', true));
				$this->redirect(array('controller'=>'Resumes','action' => 'preview',$this->data['Resume']['id']));
			} else {
				$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->read(null, $id);
			$this->Session->write('resumeID', $this->data['Resume']['id']);
		}
	}

	function delete($id=null) {
		$jobseeker = $this->checkJobSeekerSession();
		if (!$id) {
			$this->Session->setFlash(__('Hồ sơ không hợp lệ.', true));
			$this->redirect(array('controller'=>'jobseekers','action'=>'index'));
		}
		if ($this->Resume->delete($id)) {
			$this->Session->setFlash(__('Hồ sơ đã được xóa.', true));
			$this->redirect(array('controller'=>'jobseekers','action'=>'index'));
		} else {
			$this->Session->setFlash(__('Không thể xóa hồ sơ.', true));
			$this->redirect(array('controller'=>'jobseekers','action'=>'index'));	
		}
	}
	
	function editPersonalInformation($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobseeker', $jobseeker);
		$this->set('nationalities', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Nationality'))))));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('controller'=> 'jobseeker', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Resume->save($this->data)) {
				$this->Session->write('resumeID', $this->Resume->id);
				$this->Session->setFlash(__('The resume has been saved', true));
				$this->redirect(array('controller'=>'Resumes','action' => 'preview',$this->data['Resume']['id']));
			} else {
				$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->read(null, $id);
			$this->Session->write('resumeID', $this->data['Resume']['id']);
		}
	}

	function editWorkExp($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobseeker', $jobseeker);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('controller'=> 'jobseeker', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if($this->data['Resume']['years_exp'] == 0 && $this->Resume->ResumeJobExp->find('list',
			array('conditions' => array('ResumeJobExp.resume_id' => $this->data['Resume']['id'])))){
				$this->Session->setFlash(__('Bạn có quá trình làm việc, số năm kinh nghiệm không thể nhập 0', true));
			}
			else {
				if ($this->Resume->save($this->data)) {
					$this->Session->write('resumeID', $this->Resume->id);
					$this->Session->write('years_exp', $this->data['Resume']['years_exp']);
					$this->Session->setFlash(__('The resume has been saved', true));
					$this->redirect(array('controller'=>'Resumes','action' => 'preview',$this->data['Resume']['id']));
				}
				else {
					$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
				}
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->read(null, $id);
			$this->Session->write('resumeID', $this->data['Resume']['id']);
		}
	}

	function addJobExp($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$provinces = array();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobCategories', $this->Resume->ResumeJobExp->JobCategory->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if($id){
			$this->Session->write('resumeID', $id);
		}
		$this->set('jobExps', $this->Resume->ResumeJobExp->find('all', array('contain' => false, 'conditions' =>
		array('ResumeJobExp.resume_id' => $this->Session->read('resumeID')))));
		
		if (!empty($this->data)) {
			if ($this->Resume->ResumeJobExp->save($this->data)) {
				$this->Session->setFlash(__('The job exp has been saved', true));
				$this->redirect(array('action' => 'addJobExp'));
			}
			else {
				$this->Session->setFlash(__('The job exp could not be saved. Please, try again.', true));
			}
		}
	}

	function editJobExp($id = null, $isModify = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobCategories', $this->Resume->ResumeJobExp->JobCategory->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		$this->set('isModify', $isModify);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job exp', true));
			//Not found
		}
		if (!empty($this->data)) {
			if ($this->Resume->ResumeJobExp->save($this->data)) {
				$this->Session->setFlash(__('The job exp has been saved', true));
				if(isset($this->params['form']['modify']))
					$this->redirect(array('action'=>'modifyJobExp', $this->data['ResumeJobExp']['resume_id']));
				$this->redirect(array('action'=>'addJobExp', $this->data['ResumeJobExp']['resume_id']));
			} else {
				$this->Session->setFlash(__('The job exp could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->ResumeJobExp->read(null, $id);
			$this->Session->write('resumeID', $this->data['ResumeJobExp']['resume_id']);
		}
		$this->set('jobExps', $this->Resume->ResumeJobExp->find('all', array('contain' => false, 'conditions' =>
		array('ResumeJobExp.resume_id' => $this->Session->read('resumeID')))));
	}

	function deleteJobExp($id = null, $isModify = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job exp', true));
			//Not found
		}
		if ($this->Resume->ResumeJobExp->delete($id)) {
			$this->Session->setFlash(__('Job exp deleted', true));
			if($isModify)
				$this->redirect(array('action'=>'modifyJobExp'));
			$this->redirect(array('action'=>'addJobExp'));
		}
		$this->Session->setFlash(__('Job exp was not deleted', true));
		if($isModify)
				$this->redirect(array('action'=>'modifyJobExp'));
		$this->redirect(array('action'=>'addJobExp'));
	}

	function modifyJobExp($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobCategories', $this->Resume->ResumeJobExp->JobCategory->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if($id){
			$this->Session->write('resumeID', $id);
		}
		$this->set('jobExps', $this->Resume->ResumeJobExp->find('all', array('contain' => false, 'conditions' =>
		array('ResumeJobExp.resume_id' => $this->Session->read('resumeID')))));

		if (!empty($this->data)) {
			if ($this->Resume->ResumeJobExp->save($this->data)) {
				$this->Session->setFlash(__('The job exp has been saved', true));
				$this->redirect(array('action' => 'modifyJobExp',$this->data['ResumeJobExp']['resume_id']));
			}
			else {
				$this->Session->setFlash(__('The job exp could not be saved. Please, try again.', true));
			}		
		}
	}
	
	function addEducation($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('degreeLevels', $this->Resume->ResumeEducation->DegreeLevel->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		if($id){
			$this->Session->write('resumeID', $id);
		}
		$this->set('resumeEducations', $this->Resume->ResumeEducation->find('all', array('contain' => false, 'conditions' =>
		array('ResumeEducation.resume_id' => $this->Session->read('resumeID')))));

		if (!empty($this->data)) {
			if ($this->Resume->ResumeEducation->save($this->data)) {
				$this->Session->setFlash(__('The resume education has been saved', true));
				$this->redirect(array('action' => 'addEducation'));
			}
			else {
				$this->Session->setFlash(__('The resume education could not be saved. Please, try again.', true));
			}
		}
	}

	function editEducation($id = null, $isModify = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('degreeLevels', $this->Resume->ResumeEducation->DegreeLevel->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('isModify', $isModify);
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid education', true));
			//Not found
		}
		if (!empty($this->data)) {
			if ($this->Resume->ResumeEducation->save($this->data)) {
				$this->Session->setFlash(__('The education has been saved', true));
				if(isset($this->params['form']['modify'])) 
					$this->redirect(array('action' => 'modifyEducation', $this->data['ResumeEducation']['resume_id']));
				$this->redirect(array('action' => 'addEducation', $this->data['ResumeEducation']['resume_id']));
			} else {
				$this->Session->setFlash(__('The education could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->ResumeEducation->read(null, $id);
			$this->Session->write('resumeID', $this->data['ResumeEducation']['resume_id']);
			if(empty($this->data)){
				//redirect to not found
			}
		}
		$this->set('resumeEducations', $this->Resume->ResumeEducation->find('all', array('contain' => false, 'conditions' =>
		array('ResumeEducation.resume_id' => $this->Session->read('resumeID')))));

	}

	function deleteEducation($id = null, $isModify = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Education', true));
			//Not found
		}
		if ($this->Resume->ResumeEducation->delete($id)) {
			$this->Session->setFlash(__('Education deleted', true));
			if($isModify)
				$this->redirect(array('action'=>'modifyEducation'));
			$this->redirect(array('action'=>'addEducation'));
		}
		$this->Session->setFlash(__('Education was not deleted', true));
		if($isModify)
				$this->redirect(array('action'=>'modifyEducation'));
		$this->redirect(array('action'=>'addEducation'));
	}

	function modifyEducation($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('degreeLevels', $this->Resume->ResumeEducation->DegreeLevel->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		if($id){
			$this->Session->write('resumeID', $id);
		}
		$this->set('resumeEducations', $this->Resume->ResumeEducation->find('all', array('contain' => false, 'conditions' =>
		array('ResumeEducation.resume_id' => $this->Session->read('resumeID')))));

		if (!empty($this->data)) {
			if ($this->Resume->ResumeEducation->save($this->data)) {
				$this->Session->setFlash(__('The resume education has been saved', true));
				$this->redirect(array('action' => 'modifyEducation',$this->data['ResumeEducation']['resume_id']));
			}
			else {
				$this->Session->setFlash(__('The resume education could not be saved. Please, try again.', true));
			}
		}
	}

	function saveTargetJob(){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Jobseeker->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));

		if (!empty($this->data)) {
			$jobTypes = null;
			$jobLocations = null;
			$jobCategories = null;
			$this->Resume->ResumeTargetJob->set($this->data);
			if($this->Resume->ResumeTargetJob->validates()){
				if(!empty($this->data['ResumeTargetJob']['job_types'])){
					$jobTypes = implode('|', Set::extract($this->data['ResumeTargetJob']['job_types'], '{n}'));
				}
				if(!empty($this->data['ResumeTargetJob']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['ResumeTargetJob']['job_locations'], '{n}'));
				}
				if(!empty($this->data['ResumeTargetJob']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['ResumeTargetJob']['job_categories'], '{n}'));
				}

				$resumeTargetJob =  $this->Resume->ResumeTargetJob->findByResume_id($this->Session->read('resumeID'));
				if(!empty($resumeTargetJob)){
					$this->data['ResumeTargetJob']['id'] = $resumeTargetJob['ResumeTargetJob']['id'];
				}
				$this->data['ResumeTargetJob']['job_types'] = $jobTypes;
				$this->data['ResumeTargetJob']['job_locations'] = $jobLocations;
				$this->data['ResumeTargetJob']['job_categories'] = $jobCategories;
				if ($this->Resume->ResumeTargetJob->save($this->data)) {
					$this->Session->setFlash(__('The resume target job has been saved', true));
					$this->redirect(array('action' => 'addSkill'));
				}
				else {
					$this->Session->setFlash(__('The resume target job could not be saved. Please, try again.', true));
				}
			}
			else {
				$this->Session->setFlash(__('The resume target job could not be saved. Please, try again.', true));
			}
		}
	}

	function editTargetJob($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobTypes', $this->JobType->find('list'));
		$this->set('jobLocations', $this->Jobseeker->Province->find('list'));
		$this->set('jobCategories', $this->JobCategory->find('list'));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid resume', true));
			//Not found
		}
		if (!empty($this->data)) {
			$jobTypes = null;
			$jobLocations = null;
			$jobCategories = null;
			if($this->Resume->ResumeTargetJob->validates()){
				if(!empty($this->data['ResumeTargetJob']['job_types'])){
					$jobTypes = implode('|', Set::extract($this->data['ResumeTargetJob']['job_types'], '{n}'));
				}
				if(!empty($this->data['ResumeTargetJob']['job_locations'])){
					$jobLocations = implode('|', Set::extract($this->data['ResumeTargetJob']['job_locations'], '{n}'));
				}
				if(!empty($this->data['ResumeTargetJob']['job_categories'])){
					$jobCategories = implode('|', Set::extract($this->data['ResumeTargetJob']['job_categories'], '{n}'));
				}
				$this->data['ResumeTargetJob']['job_types'] = $jobTypes;
				$this->data['ResumeTargetJob']['job_locations'] = $jobLocations;
				$this->data['ResumeTargetJob']['job_categories'] = $jobCategories;
				if ($this->Resume->ResumeTargetJob->save($this->data)) {
					$this->Session->setFlash(__('The resume target job has been saved', true));
					$this->redirect(array('action' => 'preview',$this->data['ResumeTargetJob']['resume_id']));
				}
				else {
					$this->Session->setFlash(__('The resume target job could not be saved. Please, try again.', true));
				}
			}
			else {
				$this->Session->setFlash(__('The resume target job could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->Resume->ResumeTargetJob->recursive = -1;
			$resumeTargetJob =  $this->Resume->ResumeTargetJob->findByResume_id($id);
			$this->Session->write('resumeID', $id);
			if(!empty($resumeTargetJob)){
				$temp = $this->Resume->ResumeTargetJob->read(null, $resumeTargetJob['ResumeTargetJob']['id']);
				//Convert string id of JobTypes to array
				$jobTypes = $temp['ResumeTargetJob']['job_types'];
				$token = strtok($jobTypes, "|");
				$i=0;
				while ($token != false)
				{
					$arrJobTypes[$i] = $token;
					$token = strtok("|");
					$i++;
				}
				$temp['ResumeTargetJob']['job_types'] = $arrJobTypes;
				//Convert string id of JobLocations to array
				$jobLocations = $temp['ResumeTargetJob']['job_locations'];
				$token = strtok($jobLocations, "|");
				$i=0;
				while ($token != false)
				{
					$arrJobLocations[$i] = $token;
					$token = strtok("|");
					$i++;
				}
				$temp['ResumeTargetJob']['job_locations'] = $arrJobLocations;
				//Convert string id of JobCategories to array
				$jobCategories = $temp['ResumeTargetJob']['job_categories'];
				$token = strtok($jobCategories, "|");
				$i=0;
				while ($token != false)
				{
					$arrJobCategories[$i] = $token;
					$token = strtok("|");
					$i++;
				}
				$temp['ResumeTargetJob']['job_categories'] = $arrJobCategories;
				$this->data = $temp;
			}
		}
	}

	function addSkill($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$skills = array();
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		if($id){
			$this->Session->write('resumeID', $id);
		}
		$this->set('resumeSkills', $this->Resume->ResumeSkill->find('all', array('conditions' =>
		array('ResumeSkill.resume_id' => $this->Session->read('resumeID')))));
		$this->set('listSkills', $this->Skill->find('list'));
		if (!empty($this->data)) {
			if ($this->Resume->ResumeSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'addSkill'));
			}
			else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
	}

	function editSkill($id = null,$isModify = null){
		$jobseeker = $this->checkJobSeekerSession();
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
			if ($this->Resume->ResumeSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				if(isset($this->params['form']['modify']))
					$this->redirect(array('action' => 'modifySkill',$this->data['ResumeSkill']['resume_id']));
				$this->redirect(array('action' => 'addSkill',$this->data['ResumeSkill']['resume_id']));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->ResumeSkill->read(null, $id);
			$this->Session->write('resumeID', $this->data['ResumeSkill']['resume_id']);
		}
		$this->set('resumeSkills', $this->Resume->ResumeSkill->find('all', array('conditions' =>
		array('ResumeSkill.resume_id' => $this->Session->read('resumeID')))));
	}

	function deleteSkill($id = null, $isModify = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for skill', true));
			//Not found
		}
		if ($this->Resume->ResumeSkill->delete($id)) {
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
		$jobseeker = $this->checkJobSeekerSession();
		$skills = array();
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		if($id){
			$this->Session->write('resumeID', $id);
		}
		$this->set('resumeSkills', $this->Resume->ResumeSkill->find('all', array('conditions' =>
		array('ResumeSkill.resume_id' => $this->Session->read('resumeID')))));
		$this->set('listSkills', $this->Skill->find('list'));
		if (!empty($this->data)) {
			if ($this->Resume->ResumeSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'modifySkill',$this->data['ResumeSkill']['resume_id']));
			}
			else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
	}
	
	function admin_index(){
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->paginate['Resume'] = array('order' => array('Resume.modified DESC'),'recursive' => 1);
		$this->set('resumes', $this->paginate('Resume'));
	}

	function admin_preview($id = null){
		$this->layout='default_admin';
		$this->checkAdminSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('action' => 'index', 'admin'=>true));
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
		$this->set('resume', $this->Resume->read(null,$id));
	}
	
	function admin_delete($id=null) {
		$this->layout='default_admin';
		$this->checkAdminSession();
		if (!$id) {
			$this->Session->setFlash(__('Hồ sơ không hợp lệ.', true));
			$this->redirect(array('action' => 'index', 'admin'=>true));
		}
		if ($this->Resume->delete($id)) {
			$this->Session->setFlash(__('Hồ sơ đã được xóa.', true));
			$this->redirect(array('action' => 'index', 'admin'=>true));
		}else {
			$this->Session->setFlash(__('Không thể xóa hồ sơ.', true));
			$this->redirect(array('action' => 'index', 'admin'=>true));
		}
	}
	
	function admin_approveResume() {
		$this->layout='default_admin';
		$this->checkAdminSession();
		$this->paginate['Resume'] = array('order' => array('Resume.modified DESC'),'conditions' => array('status' => array(0,2,3)),'recursive' => 1);
		$this->set('resumes', $this->paginate('Resume'));
	}
	
	function admin_approve($id = null) {
		$this->layout = 'default_admin';
		$this->checkAdminSession();
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
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('controller'=>'resumes' ,'action' => 'admin_approveResume'));
		}
		if (!empty($this->data)) {
			$this->data['Resume']['approved'] = date('Y-m-d H:i:s', time());
			if ($this->Resume->save($this->data)) {
				$this->Session->setFlash(__('Hồ sơ đã được duyệt', true));
				$this->redirect(array('controller'=>'resumes', 'action' => 'admin_approveResume'));
			} else {
				$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$resume = $this->Resume->read(null,$id);
			if(!empty($resume)){
				$this->set('resume', $resume);
				$this->data = $resume;
			}
			else {
				$this->Session->setFlash(__('Invalid resume', true));
				$this->redirect(array('controller'=>'resume','action' => 'admin_index'));
			}
		}
	}
	
	function getProvinces() {
		if(!empty($this->data['Resume']['country_id'])) {
			$this->set('options',$this->Jobseeker->Province->find('list',array(
				'conditions' => array('Province.country_id' => $this->data['Resume']['country_id']),
				'group' => array('Province.name'))));
			$this->render('/resumes/ajax_dropdown');
		}
		if(!empty($this->data['ResumeJobExp']['country_id'])) {
			$this->set('options',$this->Jobseeker->Province->find('list',array(
				'conditions' => array('Province.country_id' => $this->data['ResumeJobExp']['country_id']),
				'group' => array('Province.name'))));
			$this->render('/resumes/ajax_dropdown');
		}
	}

	function getSkills() {
		if(!empty($this->data['Skill']['skill_group_id'])) {
			$this->set('options',$this->Skill->find('list',array(
				'conditions' => array('Skill.skill_group_id' => $this->data['Skill']['skill_group_id']),
				'group' => array('Skill.name'))));
			$this->render('/resumes/ajax_dropdown');
		}
	}
}