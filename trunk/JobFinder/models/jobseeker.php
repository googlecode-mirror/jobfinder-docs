<?php
class Jobseeker extends AppModel {
	var $name = 'Jobseeker';
	function getActivationHash()
	{
		if (!isset($this->id)) {
			return false;
		}
		return substr(Security::hash(Configure::read('Security.salt') . $this->field('created') . date('Ymd')), 0, 8);
	}

	var $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Địa chỉ email không hợp lệ',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
		'isUnique' => array(
			'rule' => array('isUnique'),
		'message' => 'Địa chỉ email này đã được sử sụng',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	)
	),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập Mật khẩu',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
                'message' => 'Vui lòng nhập Tên',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
                'message' => 'Vui lòng nhập Họ',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'gender' => array(
				'notempty' => array(
					'rule' => array('notempty'),
                    'message' => 'Vui lòng nhập giới tính',
		//'allowEmpty' => false,
		//'required' => false,
		//'last' => false, // Stop validation after this rule
		//'on' => 'create', // Limit validation to 'create' or 'update' operations
		),
		),
		'birthday' => array(
			'date' => array(
				'rule' => array('date'),
                'message' => 'Vui lòng nhập ngày sinh',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'country_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
	            'message' => 'Vui lòng nhập Quốc gia',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'province_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
	            'message' => 'Vui lòng nhập Tỉnh/Thành phố',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
		'howknow' => array(
			'notempty' => array(
				'rule' => array('notempty'),
                'message' => 'Vui lòng cho biết làm thế nào bạn biết đến chúng tôi',
	//'allowEmpty' => false,
	//'required' => false,
	//'last' => false, // Stop validation after this rule
	//'on' => 'create', // Limit validation to 'create' or 'update' operations
	),
	),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			),
			);

	var $hasMany = array(
		'JobApply' => array(
			'className' => 'JobApply',
			'foreignKey' => 'jobseeker_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'JobSaved' => array(
			'className' => 'JobSaved',
			'foreignKey' => 'jobseeker_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
			),
		'Resume' => array(
			'className' => 'Resume',
			'foreignKey' => 'jobseeker_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
			)
			);


}
?>