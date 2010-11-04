<?php
class JobsController extends AppController {
	var $name = 'Jobs';
	var $helpers = array('Html','Form','Ajax','Javascript');
	var $uses = array('Job','Province');

	function index()
	{
		$jobs = $this->Job->find('all', array('contain' => array('JobContactInformation')));
		$this->set('jobs', $jobs);
	}
    
    function search()
	{
		
	}
    
    function adv_search()
	{
		
	}

	function view($id = null) {
		$this->set('provinces',$this->Province->find('list'));
		if (!$id) {
			$this->Session->setFlash(__('Invalid job', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('job', $this->Job->read(null,$id));
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
}
?>