<?php
class JobApply extends AppModel {
	var $name = 'JobApply';
	var $validate = array(
		'jobseeker_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập người tìm việc',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn việc làm việc',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'subject' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập tiêu đề hồ sơ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'resume_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập hồ sơ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Jobseeker' => array(
			'className' => 'Jobseeker',
			'foreignKey' => 'jobseeker_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Resume' => array(
			'className' => 'Resume',
			'foreignKey' => 'resume_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>