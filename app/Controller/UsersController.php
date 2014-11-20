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
		// Only administrator user can add, edit, delete or list other users
		if (in_array($this->action, array('add', 'edit', 'delete', 'index'))) {
			if (isset($user['role']) && $user['role'] === 'admin') {
				return true;
			}
			else {
				return false;
			}
		}

		// Users can do logout, login and view your profile
		if (isset($user['id']) && in_array($this->action, array('logout', 'login', 'profile', 'update'))) {
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
				if ($this->Auth->User('role') == 'admin') {
					return $this->redirect(array('controller' => 'users', 'action' => 'add'));
				}
				if ($this->Auth->User('role') == 'student') {
					return $this->redirect(array('controller' => 'students', 'action' => 'index'));
				}
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
				$this->Session->setFlash(__('El usuario ha sido agregado satisfactoriamente'));
				return $this->redirect(array('controller' => 'users', 'action' => 'add'));
			}
			$this->Session->setFlash(__('El usuario no pudo ser agregado'));
		}
	}

	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Usuario inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(
				__('Los cambios no han sido guardados, por favor intente nuevamente')
			);
		} else {
			$this->set('user', $this->User->read(null, $id));
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
	}

	public function update() {
		$id = $this->Auth->user('id');
      	$user_id = $id;
      	echo "$user_id";

      	if(!empty($this->data)) {
            $old = $this->data['User']['password_old'];
            $old_password = $this->Auth->password($old);
            var_dump($old_password);
            $check_password = $this->User->find('first', array(
				'conditions' => array(
					'User.id' => $user_id)//,
					// 'User.password' => $old_password)
				// 'fields' => array('User.password')
            ));
            var_dump($check_password);
			$new_pass_gen = $this->data['User']['password_new'];
			$new_pass = $this->Auth->password($new_pass_gen);

			if(!empty($check_password)) {
				$new = $this->data['User']['password_new'];
				$re_type_new = $this->data['User']['password_confirm'];

				if(!empty($new) && !empty($re_type_new)) {
					if($new == $re_type_new) {
						$this->data['User']['password']= $new_pass;
						$this->User->id = $user_id;
						if($this->User->save($this->data)) {
							$password_change_successfully = __('password_change_successfully',true);
							$this->Session->setFlash(__($password_change_successfully, true));
							$this->redirect($this->referer());
						}
					}
				}
			}
			else {
				$sorry_your_old_password_is_incorrect = __('sorry_your_old_password_is_incorrect',true);
				$this->Session->setFlash(__($sorry_your_old_password_is_incorrect, true));
			}
		}
	}

	public function delete($id = null) {
		$this->request->onlyAllow('post');

		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Usuario eliminado'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('El usuario no ha sido eliminado'));
		return $this->redirect(array('action' => 'index'));
	}

}