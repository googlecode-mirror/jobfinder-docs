<?php
class ResumeEducation extends AppModel {
	var $name = 'ResumeEducation';
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
		'degree_level_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn Bằng cấp',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'program' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng nhập Trường',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'country_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Vui lòng chọn Quốc gia',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'start_date' => array(
			'startBeforeEnd' => array(
                'rule' => array('startBeforeEnd', 'end_date'),
                'message' => 'Ngày bắt đầu phải trước ngày kết thúc', 
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'date' => array(
				'rule' => array('date'),
				'message' => 'Ngày bắt đầu không hợp lệ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end_date' => array(
			'date' => array(
				'rule' => array('date'),
				'allowEmpty' => true,
				'message' => 'Ngày kết thúc không hợp lệ',
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
		'DegreeLevel' => array(
			'className' => 'DegreeLevel',
			'foreignKey' => 'degree_level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function startBeforeEnd( $field=array(), $compare_field=null ) {
        if(empty($this->data[$this->name][$compare_field])){
        	return true;
        }
		foreach( $field as $key => $value ){
        	$v1 = $value;
            $v2 = $this->data[$this->name][$compare_field];
            if($v1 > $v2) {
                return false;
           	} else {
                continue;
            }
        }
   		return TRUE;
    } 
}
?>