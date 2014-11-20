<?
// app/Model/User.php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
	public $validate = array(
		'username' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nombre de usuario no puede ser vacío'
			),
			'unique' => array(
				'rule' => 'isUnique',
        		'message' => 'Este usuario ya se encuentra registrado'
			)
		),
		'password' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'La contraseña no puede ser vacía'
			)
		),
		'role' => array(
			'valid' => array(
				'rule' => array('inList', array('admin', 'student', 'teacher')),
				'message' => 'Por favor ingrese un tipo válido',
				'allowEmpty' => false
			)
		),
		'register_code' => array(
			'unique' => array(
				'rule' => 'isUnique',
        		'message' => 'Este código ya se encuentra registrado'
			),
			'userIsStudent' => array(
				'rule' => array('userIsStudent'),
				'message' => 'El código de registro es requerido si el usuario es de tipo estudiante',
				'allowEmpty' => true
			),
		),
		'email'

	);

	// Encript password before save
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new BlowfishPasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}

	public function userIsStudent() {
		if ($this->data['User']['role'] == 'student' && $this->data['User']['register_code'] != "") {
			return true;
		}
		else {
			return false;
		}
	}
}