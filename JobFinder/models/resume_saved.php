<?php
class ResumeSaved extends AppModel {
	var $name = 'ResumeSaved';
	var $validate = array(
		'employer_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập mã nhà tuyển dụng',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
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
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Employer' => array(
			'className' => 'Employer',
			'foreignKey' => 'employer_id',
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