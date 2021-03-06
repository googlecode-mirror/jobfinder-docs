<?php
class ResumeTargetJob extends AppModel {
	var $name = 'ResumeTargetJob';
	var $validate = array(
		'resume_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập mã hồ sơ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập vị trí mong muốn',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_level_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn cấp bậc mong muốn',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'career_objective' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập mục tiêu nghề nghiệp',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_types' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min'=>1, 'max'=>3)),
       			'message' => 'Vui lòng chọn một và tối đa 3 loại hình công việc',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_locations' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min'=>1, 'max'=>3)),
				'message' => 'Vui lòng chọn một và tối đa 3 nơi làm việc',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_categories' => array(
			'multiple' => array(
				'rule' => array('multiple', array('min'=>1, 'max'=>3)),
				'message' => 'Vui lòng chọn một và tối đa 3 ngành nghề',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'current_salary' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'allowEmpty'=> true,
				'message' => 'Vui lòng nhập số tiền',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'desired_salary' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'allowEmpty'=> true,
				'message' => 'Vui lòng nhập số tiền',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Resume' => array(
			'className' => 'Resume',
			'foreignKey' => 'resume_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'JobLevel' => array(
			'className' => 'JobLevel',
			'foreignKey' => 'job_level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>