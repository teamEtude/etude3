<?php
class Course extends AppModel {
	var $name = 'Course';
	var $useTable = 'Course';
	var $primaryKey = 'courseID';
	var $displayField = 'courseName';
	var $validate = array(
		'courseID' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'courseName' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasOne = array(
		'Groups' => array(
			'className' => 'Groups',
			'foreignKey' => 'courseID',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Enrolment' => array(
			'className' => 'Enrolment',
			'foreignKey' => 'courseID',
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
