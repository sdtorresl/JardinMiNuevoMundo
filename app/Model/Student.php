<?php
App::uses('AppModel', 'Model');
/**
 * Student Model
 *
 */
class Student extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'first_name';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
		'id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				'on' => 'create',
			),
		),
		'first_name' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'last_name' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'code' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'identification' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
			'isUnique' => array(
				'rule'    => 'isUnique',
				'message' => 'Este NUID ya se encuentra registrado'
			)
		),
		'born_date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
			'date' => array(
				'rule' => array('date'),
			),
		),
		'blood_type' => array(
			'bloodType' => array(
				'rule' => array('custom', '/^[ABO+-]*$/i'),
				'message' => 'El tipo de sangre debe indicarse con una letra y un signo, ejemplo: O-, A+, ...',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'social_ensurance' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'country' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'neighborhood' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9ñ ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
				'required' => false,
			),
		),
		'address' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9#\- ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'phone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo se permiten carácteres numéricos',
			),
		),
		'telephone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo se permiten carácteres numéricos',
			),
		),
		'mother_name' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'mother_phone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo se permiten carácteres numéricos',
			),
		),
		'mother_email' => array(
			'email' => array(
				'rule' => array('email'),
				'allowEmpty' => true,
				'required' => false,
			),
		),
		'father_name' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
		'father_phone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo se permiten carácteres numéricos',
			),
		),
		'father_email' => array(
			'email' => array(
				'rule' => array('email'),
				'allowEmpty' => true,
				'required' => false,
			),
		),
		'guardian_name' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'guardian_phone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo se permiten carácteres numéricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
		'guardian_email' => array(
			'email' => array(
				'rule' => array('email'),
				'allowEmpty' => true,
				'required' => false,
			),
		),
		'current_state' => array(
			'alphaNumeric' => array(
				'rule' => array('custom', '/^[a-z0-9 ]*$/i'),
				'message' => 'Solo se permiten caracteres alfanuméricos',
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede estar vacío',
			),
		),
	);
}