<?php
class ResumeViewLog extends AppModel {
	var $name = 'ResumeViewLog';
	var $validate = array(
		'resume_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn hồ sơ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'employer_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập nhà tuyển dụng',
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
		'Employer' => array(
			'className' => 'Employer',
			'foreignKey' => 'employer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>