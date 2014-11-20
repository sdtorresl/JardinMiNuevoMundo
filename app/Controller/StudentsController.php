<?php
App::uses('AppController', 'Controller');

/**
* Students Controller
*
* @property Student $Student
* @property PaginatorComponent $Paginator
*/
class StudentsController extends AppController {

	/**
	* Components
	*
	* @var array
	*/
	public $components = array('Paginator');

	/**
	* beforeFilter method
	*
	* Allow users acces to controller
	*
	* @return void
	*/
	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to logout
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

	    if (isset($user['role']) && $user['role'] === 'student') {
	    	// Students can view only your own profile
    		if ($this->action == 'view') {
    			$user_id = $this->request->params['pass']['0'];

    			if ($user_id == $user['id']) {
    				return true;
    			}
    			else {
    				return false;
    			}
    		}
	    	// Students can register themeselves
	    	if (in_array($this->action, array('register', 'profile', 'index'))) {
	        	return true;
	    	}
	    	else {
	    		return false;
	    	}
	    }

	    return parent::isAuthorized($user);
	}

	/**
	* index method
	*
	* @return void
	*/
	public function index() {
	}

	/**
	* view method
	*
	* @throws NotFoundException
	* @param string $id
	* @return void
	*/
	public function view($id = null) {
		if (!$this->Student->exists($id)) {
			throw new NotFoundException(__('Estudiante inválido'));
		}
		if (!$this->Student->isRegistered($id)) {
			$this->Session->setFlash('Debe registrar el estudiante antes de imprimir');
			$this->redirect(array('action' => 'register'));
		}

		$user_id = $id;
		$id = $this->Student->getStudentID($user_id);

		$options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
		$this->set('student', $this->Student->find('first', $options));
		$this->pdfCongig = array(
			'download' => true,
			'filename' => 'register.pdf'
		);
	}

	/**
	* registes method
	*
	* @return void
	*/
	public function register() {
		// Get the user id
		$id = $this->Auth->user('id'); 
		$role = $this->Auth->user('role');

		// Only students can register themselves
		if ($role != 'student') {
			$this->Session->setFlash(__('El usuario que se está intentando registrar no es del tipo estudiante'));
			return $this->redirect(array('controller' => 'users', 'action' => 'profile'));;
		}

		if ($this->request->is('post')) {

			$this->Student->create();
			$this->request->data['Student']['user_id'] = $this->Auth->user('id');
			if ($this->Student->save($this->request->data)) {
				$this->Session->setFlash(__('El estudiante ha sido registrado satisfactoriamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estudiante no pudo ser registrado satisfactoriamente'));
			}
		}
		elseif ($this->Student->isRegistered($id)) {
			$this->Session->setFlash(__('El estudiante ya ha sido registrado'));
			$this->set('id', $id);
			return $this->redirect(array('controller' => 'students', 'action' => 'view', $id));
		}
		$this->set('id', $id);
	}

	/**
	* edit method
	*
	* @throws NotFoundException
	* @param string $id
	* @return void
	*/
	public function edit($id = null) {
		if (!$this->Student->exists($id)) {
			throw new NotFoundException(__('Estudiante inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Student->save($this->request->data)) {
				$this->Session->setFlash(__('El estudiante ha sido editado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The student could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Student.' . $this->Student->primaryKey => $id));
			$this->request->data = $this->Student->find('first', $options);
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
		$this->Student->id = $id;
		if (!$this->Student->exists()) {
			throw new NotFoundException(__('Estudiante inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Student->delete()) {
			$this->Session->setFlash(__('El estudiante ha sido borrado satisfactoriamente.'));
		} else {
			$this->Session->setFlash(__('El estudiante no pudo ser borrado. Por favor intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}