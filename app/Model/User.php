<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nombre de usuario no puede ser vacío'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'La contraseña no puede ser vacía'
			)
		),
		// 'email' => array(
			// 'required' => array(
			// 	'rule' => array('notEmpty'),
			// 	'message' => 'El correo electrónico no puede ser vacío'
			// )
		// ),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('administrator', 'student', 'teacher')),
				'message' => 'Por favor ingrese un rol válido',
				'allowEmpty' => false
			)
		)
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
}