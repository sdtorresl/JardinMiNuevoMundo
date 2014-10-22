<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');

	/**
	 * beforeFilter method
	 *
	 * @return void
	 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'edit', 'index');
	}

	/**
	 * login method
	 *
	 * @return void
	 */
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Usuario y/o contraseña inválidos, por favor intente de nuevo'));
		}
	}

	/**
	 * logout method
	 *
	 * @return void
	 */
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	/**
	 * list students method
	 *
	 * @throws NotFoundException
	 * @return void
	 */
	public function list_students() {
		$this->User->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('role' => 'student')
		);
		$this->set('users', $this->Paginator->paginate());
	}

	/**
	 * list managers method
	 *
	 * @throws NotFoundException
	 * @return void
	 */
	public function list_managers() {
		$this->User->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('role' => 'administrator')
		);
		$this->set('users', $this->Paginator->paginate());
	}

	/**
	 * list teachers method
	 *
	 * @throws NotFoundException
	 * @return void
	 */
	public function list_teachers() {
		$this->User->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('role' => 'teacher')
		);
		$this->set('users', $this->Paginator->paginate());
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->User->id = $id;
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			unset($this->request->data['User']['password']);
		}
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
