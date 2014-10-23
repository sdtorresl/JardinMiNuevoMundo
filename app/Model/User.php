<?
// app/Model/User.php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required'
			),
			'unique' => array(
				'rule' => 'isUnique',
        		'message' => 'This username has already been taken.'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A password is required'
			)
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin', 'student', 'teacher')),
				'message' => 'Please enter a valid role',
				'allowEmpty' => false
			)
		),
		'email'

	);

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}

	// public function beforeSave($options = array()) {
	//     if(isset($this->data[$this->alias]['password'])) {
	//         $this->data[$this->alias]['password'] = Security::hash($this->data[$this->alias]['password'], 'blowfish');
	//         unset($this->data['User']['passwd']);
	//     }

	//     return true;
	// }
}