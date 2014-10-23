<?
// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to logout.
		$this->Auth->allow('logout');
	}

	/**
	 * isAuthorized method
	 * control who’s allowed to access what
	 *
	 * @param array
	 * @return boolean
	 */
	public function isAuthorized($user) {
		// Only administrator user can add, edit or delete other users
		if (in_array($this->action, array('add', 'edit', 'delete'))) {
			if (isset($user['role']) && $user['role'] === 'admin') {
				return true;
			}
			else {
				return false;
			}
		}

		// Users can do logout, login and view your profile
		if (isset($user['id']) && in_array($this->action, array('logout', 'login', 'profile'))) {
			return true;
		}

		return parent::isAuthorized($user);
	}
	
	/**
	 * login method
	 * allow login users
	 *
	 * @return void
	 */
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Usuario y/o contraseña inválidos'));
		}
	}

	/**
	 * logout method
	 * allow users logout
	 *
	 * @return void
	 */
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	public function profile() {
		$id = $this->Auth->user('id');
		$this->view($id);
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('controller' => 'students', 'action' => 'index'));
			}
			$this->Session->setFlash(
				__('The user could not be saved. Please, try again.')
			);
		}
	}

	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(
				__('The user could not be saved. Please, try again.')
			);
		} else {
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
	}

	public function delete($id = null) {
		$this->request->onlyAllow('post');

		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}

}