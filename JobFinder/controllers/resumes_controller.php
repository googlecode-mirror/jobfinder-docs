<?php
class ResumesController extends AppController {
	var $name = 'Resumes';
	var $helpers = array('Html','Form','Ajax','Javascript');
	var $components = array('RequestHandler');
	var $uses = array('Resume', 'ResumeWorkExp');
	var $id;
	
	function createResume(){
		$jobseeker = $this->checkJobSeekerSession();
		$this->set('jobseeker', $jobseeker);
		$this->set('nationalities', $this->Category->find('list', array(
					'conditions' => array('Category.category_type_id' => $this->CategoryType->field('id', array('name =' => 'nationality'))))));
		$this->set('countries', $this->Jobseeker->Country->find('list'));
		$this->set('provinces', $this->Jobseeker->Province->find('list'));
		if (!empty($this->data)) {
			$this->Resume->create();
			$this->data['Resume']['jobseeker_id'] = $jobseeker['Jobseeker']['id'];
			$this->data['Resume']['birthday'] = $jobseeker['Jobseeker']['birthday'];
			$this->data['Resume']['gender'] = $jobseeker['Jobseeker']['gender'];
			if ($this->Resume->save($this->data)) {
				$this->Session->setFlash(__('The resume has been saved', true));
				$resumeID = $this->Resume->getLastInsertId();
				$this->Session->write('resumeID', $resumeID);
				$this->redirect(array('action' => 'createResumeWorkExp', $resumeID));
			} else {
				$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
			}
		}
	}

	function update_province_select() {
		if(!empty($this->data['Resume']['country_id'])) {
			$options = $this->requestAction('/provinces/getlist/'.$this->data['Resume']['country_id']);
			$this->set('options',$options);
		}
	}

	function createResumeWorkExp($resumeID = null){
		$jobseeker = $this->checkJobSeekerSession();
		if (!$resumeID && !empty($this->data)) {
			$this->ResumeWorkExp->create();
			if ($this->ResumeWorkExp->save($this->data)) {
				$this->Session->setFlash(__('The resume has been saved', true));
				$this->redirect(array('action' => 'createResume', $resumeID));
			} else {
				$this->Session->setFlash(__('The resume could not be saved. Please, try again.', true));
				$this->redirect(array('action' => 'createResumeWorkExp', $this->data['ResumeWorkExp']['resume_id']));
			}
		}
	}
}