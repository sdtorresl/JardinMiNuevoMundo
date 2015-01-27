<?php
App::uses('AppModel', 'Model');

/**
* Student Model
*
* @property User $User
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
		'id' => array(
			'unique' => array(
				'rule' => array('isUnique'),
			),
		),
		'user_id' => array(
			
		),
		'first_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'last_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'identification' => array(
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'El número de identificación ya ha sido registrado',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'identification_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'identification_town' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'identification_department' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Debe especificar el departamento de expedición',
			),
		),
		'genre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Debe seleccionar un género',
			),
		),
		'born_state' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'born_town' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'born_date' => array(
			'date' => array(
				'rule' => array('notEmpty'),
			),
		),
		'blood_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'social_ensurance' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'neighborhood' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'telephone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_id_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_telephone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_email' => array(
			'email' => array(
				'rule' => array('email'),
			)
		),
		'mother_degree' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_major' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_occupation' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'mother_company' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'father_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'father_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'father_id_type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'father_address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'father_phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'father_telephone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'father_email' => array(
			'email' => array(
				'rule' => array('email'),
			),
		),
		'father_degree' => array(
			
		),
		'father_major' => array(
			
		),
		'father_occupation' => array(
			
		),
		'father_company' => array(
			
		),
		'guardian_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'guardian_phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'guardian_email' => array(
			'email' => array(
				'rule' => array('email'),
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'current_state' => array(
			
		),
		'guardian_relationship' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'observations' => array(
			
		),
		'born_place' => array(
			'date' => array(
				'rule' => array('date'),
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'type' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'live_with' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'brother_number' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'brother_place' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			)
		),
		'school1' => array(
			
		),
		'school1_grade' => array(
			
		),
		'school1_year' => array(
			
		),
		'school2' => array(
			
		),
		'school2_grade' => array(
			
		),
		'transport_service' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'boarding_service' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'visual_deficiency',
		'hearing_deficiency',
		'language_deficiency',
		'motor_deficiency_1',
		'motor_deficiency_2'
	);

	/**
	* Determinates whether or not a student is registered
	* @var user id
	* @return boolean
	**/
	public function isRegistered($user_id) {
	    return $this->field('id', array('user_id' => $user_id)) !== false;
	}

	/**
	* Returns the student ID
	* @var user id
	* @return boolean
	**/
	public function getStudentID($user_id) {
		// if (!$this->isRegistered($user_id)) {
		// 	return null;
		// }
	    return $this->field('id', array('user_id' => $user_id));
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	* belongsTo associations
	*
	* @var array
	*/
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

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
