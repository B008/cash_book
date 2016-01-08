<?php
App::uses('AppController', 'Controller');
/**
 * Payees Controller
 *
 * @property Payee $Payee
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PayeesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Payee->recursive = 0;
		$this->set('payees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Payee->exists($id)) {
			throw new NotFoundException(__('Invalid payee'));
		}
		$options = array('conditions' => array('Payee.' . $this->Payee->primaryKey => $id));
		$this->set('payee', $this->Payee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Payee->create();
			if ($this->Payee->save($this->request->data)) {
				$this->Session->setFlash(__('The payee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payee could not be saved. Please, try again.'));
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
		if (!$this->Payee->exists($id)) {
			throw new NotFoundException(__('Invalid payee'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Payee->save($this->request->data)) {
				$this->Session->setFlash(__('The payee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Payee.' . $this->Payee->primaryKey => $id));
			$this->request->data = $this->Payee->find('first', $options);
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
		$this->Payee->id = $id;
		if (!$this->Payee->exists()) {
			throw new NotFoundException(__('Invalid payee'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Payee->delete()) {
			$this->Session->setFlash(__('The payee has been deleted.'));
		} else {
			$this->Session->setFlash(__('The payee could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
