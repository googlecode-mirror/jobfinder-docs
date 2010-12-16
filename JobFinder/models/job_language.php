<?php
class JobLanguage extends AppModel {
	var $name = 'JobLanguage';
	var $displayField = 'job_id';
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
		'language' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn Ngoại ngữ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'language_proficiency' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn Trình độ ngoại ngữ',
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
		)
	);
}
?>