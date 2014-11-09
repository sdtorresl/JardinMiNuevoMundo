<?php
App::uses('AppModel', 'Model');

/**
* Student Model
*
* @property AchievementSummary $AchievementSummary
* @property Grade $Grade
* @property PeriodPassword $PeriodPassword
* @property Registration $Registration
* @property Course $Course
*/
class Student extends AppModel {

	/**
	* Validation rules
	*
	* @var array
	*/
	public $validate = array(
		'first_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	/**
	 * Determinates whether or not a student is registered
	 * @var user id
	 * @return boolean
	 **/
	public function isRegistered($user) {
	    return $this->field('id', array('user_id' => $user)) !== false;
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	* hasMany associations
	*
	* @var array
	*/
	public $hasMany = array(
		'AchievementSummary' => array(
			'className' => 'AchievementSummary',
			'foreignKey' => 'student_id',
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
		'Grade' => array(
			'className' => 'Grade',
			'foreignKey' => 'student_id',
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
		'PeriodPassword' => array(
			'className' => 'PeriodPassword',
			'foreignKey' => 'student_id',
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
		'Registration' => array(
			'className' => 'Registration',
			'foreignKey' => 'student_id',
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


	/**
	* hasAndBelongsToMany associations
	*
	* @var array
	*/
	public $hasAndBelongsToMany = array(
		'Course' => array(
			'className' => 'Course',
			'joinTable' => 'students_courses',
			'foreignKey' => 'student_id',
			'associationForeignKey' => 'course_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}