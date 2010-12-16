<?php
class JobRequirement extends AppModel {
	var $name = 'JobRequirement';
	var $validate = array(
		'job_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn việc làm',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'year_experience' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Vui lòng nhập số năm kinh nghiệm',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'job_level_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập cấp bậc công việc',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'degree_level_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			    'message' => 'Vui lòng nhập bằng cấp',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Job' => array(
			'className' => 'Job',
			'foreignKey' => 'job_id',
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
		),
		'DegreeLevel' => array(
			'className' => 'DegreeLevel',
			'foreignKey' => 'degree_level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>