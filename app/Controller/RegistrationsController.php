<?php
App::uses('AppController', 'Controller');
/**
 * Registrations Controller
 *
 * @property Registration $Registration
 * @property PaginatorComponent $Paginator
 */
class RegistrationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Registration->recursive = 0;
		$this->set('registrations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Registration->exists($id)) {
			throw new NotFoundException(__('Invalid registration'));
		}
		$options = array('conditions' => array('Registration.' . $this->Registration->primaryKey => $id));
		$this->set('registration', $this->Registration->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Registration->create();
			if ($this->Registration->save($this->request->data)) {
				$this->Session->setFlash(__('The registration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration could not be saved. Please, try again.'));
			}
		}
		$students = $this->Registration->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Registration->exists($id)) {
			throw new NotFoundException(__('Invalid registration'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Registration->save($this->request->data)) {
				$this->Session->setFlash(__('The registration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The registration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Registration.' . $this->Registration->primaryKey => $id));
			$this->request->data = $this->Registration->find('first', $options);
		}
		$students = $this->Registration->Student->find('list');
		$this->set(compact('students'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Registration->id = $id;
		if (!$this->Registration->exists()) {
			throw new NotFoundException(__('Invalid registration'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Registration->delete()) {
			$this->Session->setFlash(__('The registration has been deleted.'));
		} else {
			$this->Session->setFlash(__('The registration could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
