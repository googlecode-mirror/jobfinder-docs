<?php
class ResumesController extends AppController {
	var $name = 'Resumes';
	var $helpers = array('Html','Form','Ajax','Javascript');
	var $components = array('RequestHandler');
	var $uses = array('Resume','ResumeJobExp','Job','ResumeSkill', 'Skill');

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid resume', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nationalities', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Nationality'))))));
		$this->set('companySizes', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'CompanySize'))))));
		$this->set('jobLevels', $this->Job->JobLevel->find('list'));
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
			$this->data['Resume']['jobseeker_id'] = $jobseeker['Jobseeker']['id'];
			if ($this->Resume->save($this->data)) {
				$this->Session->setFlash(__('The resume has been saved', true));
				$this->Session->write('resumeID', $this->Resume->id);
				$this->Session->write('years_exp', $this->data['Resume']['years_exp']);
				if($this->data['Resume']['years_exp'] == 0){
					if($this->Resume->ResumeJobExp->find('list', 
							array('conditions' => array('ResumeJobExp.resume_id' => $this->Resume->id)))){
						$this->Session->setFlash(__('Bạn có quá trình làm việc, số năm kinh nghiệm không thể nhập 0', true));
					}
					else{
						$this->redirect(array('action' => 'addEducation'));
					}
				}
				else{
					$this->redirect(array('action' => 'addJobExp'));
				}
			} else {
				$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->read(null, $id);
		}
	}

	function addJobExp(){
		$jobseeker = $this->checkJobSeekerSession();
		$provinces = array();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobCategories', $this->Resume->ResumeJobExp->JobCategory->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('jobExps', $this->Resume->ResumeJobExp->find('all', array('contain' => false, 'conditions' =>
		array('ResumeJobExp.resume_id' => $this->Session->read('resumeID')))));

		if (!empty($this->data)) {
			//pr($this->data);
			if ($this->Resume->ResumeJobExp->save($this->data)) {
				$this->Session->setFlash(__('The job exp has been saved', true));
				$this->redirect(array('action' => 'addJobExp'));
			}
			else {
				$this->Session->setFlash(__('The job exp could not be saved. Please, try again.', true));
			}
		}
	}

	function editJobExp($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobCategories', $this->Resume->ResumeJobExp->JobCategory->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		$this->set('jobExps', $this->Resume->ResumeJobExp->find('all', array('contain' => false, 'conditions' =>
		array('ResumeJobExp.resume_id' => $this->Session->read('resumeID')))));

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid job exp', true));
			$this->redirect(array('action' => 'addJobExp'));
		}
		if (!empty($this->data)) {
			if ($this->Resume->ResumeJobExp->save($this->data)) {
				$this->Session->setFlash(__('The job exp has been saved', true));
				$this->redirect(array('action' => 'addJobExp'));
			} else {
				$this->Session->setFlash(__('The job exp could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->ResumeJobExp->read(null, $id);
		}
	}

	function deleteJobExp($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Job exp', true));
			$this->redirect(array('action'=>'addJobExp'));
		}
		if ($this->Resume->ResumeJobExp->delete($id)) {
			$this->Session->setFlash(__('Job exp deleted', true));
			$this->redirect(array('action'=>'addJobExp'));
		}
		$this->Session->setFlash(__('Job exp was not deleted', true));
		$this->redirect(array('action' => 'addJobExp'));
	}

	function addEducation(){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('degreeLevels', $this->Resume->ResumeEducation->DegreeLevel->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
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

	function editEducation($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('degreeLevels', $this->Resume->ResumeEducation->DegreeLevel->find('list'));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('resumeEducations', $this->Resume->ResumeEducation->find('all', array('contain' => false, 'conditions' =>
		array('ResumeEducation.resume_id' => $this->Session->read('resumeID')))));

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid education', true));
			$this->redirect(array('action' => 'addEducation'));
		}
		if (!empty($this->data)) {
			if ($this->Resume->ResumeEducation->save($this->data)) {
				$this->Session->setFlash(__('The education has been saved', true));
				$this->redirect(array('action' => 'addEducation'));
			} else {
				$this->Session->setFlash(__('The education could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->ResumeEducation->read(null, $id);
		}
	}

	function deleteEducation($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Education', true));
			$this->redirect(array('action'=>'addEducation'));
		}
		if ($this->Resume->ResumeEducation->delete($id)) {
			$this->Session->setFlash(__('Education deleted', true));
			$this->redirect(array('action'=>'addEducation'));
		}
		$this->Session->setFlash(__('Education was not deleted', true));
		$this->redirect(array('action' => 'addEducation'));
	}

	function saveTargetJob(){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobLevels', $this->Resume->ResumeJobExp->JobLevel->find('list'));
		$this->set('jobTypes', $this->Job->JobType->find('list'));
		$this->set('jobLocations', $this->Jobseeker->Province->find('list'));
		$this->set('jobCategories', $this->Job->JobCategory->find('list'));
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
		if (empty($this->data)) {
			$this->Resume->ResumeTargetJob->recursive = -1;
			$resumeTargetJob =  $this->Resume->ResumeTargetJob->findByResume_id($this->Session->read('resumeID'));
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

	function addSkill(){
		$jobseeker = $this->checkJobSeekerSession();
		$skills = array();
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
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


	function editSkill($id = null){
		$jobseeker = $this->checkJobSeekerSession();
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('skills', $this->Skill->find('list'));
		$this->set('skillGroups', $this->Skill->SkillGroup->find('list'));
		$this->set('proficiencies', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'Proficiency'))))));
		$this->set('resumeSkills', $this->Resume->ResumeSkill->find('all', array('conditions' =>
		array('ResumeSkill.resume_id' => $this->Session->read('resumeID')))));
		$this->set('listSkills', $this->Skill->find('list'));

		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid skill', true));
			$this->redirect(array('action' => 'addSkill'));
		}
		if (!empty($this->data)) {
			if ($this->Resume->ResumeSkill->save($this->data)) {
				$this->Session->setFlash(__('The skill has been saved', true));
				$this->redirect(array('action' => 'addSkill'));
			} else {
				$this->Session->setFlash(__('The skill could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Resume->ResumeSkill->read(null, $id);
		}
	}

	function deleteSkill($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for skill', true));
			$this->redirect(array('action'=>'addJobExp'));
		}
		if ($this->Resume->ResumeSkill->delete($id)) {
			$this->Session->setFlash(__('Skill deleted', true));
			$this->redirect(array('action'=>'addSkill'));
		}
		$this->Session->setFlash(__('Skill was not deleted', true));
		$this->redirect(array('action' => 'addSkill'));
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