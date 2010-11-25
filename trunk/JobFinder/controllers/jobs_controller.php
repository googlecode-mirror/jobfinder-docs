<?php
class JobsController extends AppController {
	var $name = 'Jobs';
	var $uses = array('Job','Province','DegreeLevel','JobLevel','JobType','JobCategory');
	var $namedArgs = TRUE; 
	
	function index()
	{
		$jobs = $this->Job->find('all', array('contain' => array('JobContactInformation')));
		$this->set('jobs', $jobs);
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
		$this->set('provinces',$this->Province->find('list'));
		$this->set('jobLevels',$this->JobLevel->find('list'));
		$this->set('jobTypes',$this->JobType->find('list'));
		$this->set('jobCategories',$this->JobCategory->find('list'));
		$this->set('degreeLevels',$this->DegreeLevel->find('list'));
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->read(null,$id));
	}

	function postJob(){
		$request_params = Router::getParams();
		$this->Session->write('auth_redirect','/'.$request_params['url']['url']);
		$employer = $this->checkEmployerSession();
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
					$this->Session->setFlash(__('The Job has been saved', true));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The Job could not be saved. Please, try again.', true));
				}
			}
		}
	}
	
	function saveJob($id = null)
	{
		$jobseeker = $this->checkJobSeekerSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$jobSaved = array('JobSaved' => array('jobseeker_id' => $jobseeker['Jobseeker']['id'],
											'job_id' => $id));
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

	function admin_index()
	{
		$this->checkAdminSession();
		$jobs = $this->Job->find('all', array('contain' => array('JobContactInformation')));
		$this->set('jobs', $jobs);
	}

	function admin_view($id = null) {
		$this->checkAdminSession();
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->read(null,$id));
	}

	function admin_approve($id = null) {
		//Status: 0 => "Chờ duyệt",
		//1=> "Đã duyệt",
		//2 => "Không đạt",
		//3 => "Đã chỉnh sửa chờ duyệt"
		$this->checkAdminSession();
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid status', true));
			$this->redirect(array('action' => 'admin_index'));
		}
		if (!empty($this->data)) {
			if ($this->Job->save($this->data, false, array('status'))) {
				$this->Session->setFlash(__('The country has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The country could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Job->read(null, $id);
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
}
?>