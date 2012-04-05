<?php
App::uses('AppController', 'Controller');
/**
 * Zauber Controller
 *
 * @property Zauber $Zauber
 */
class ZauberController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Zauber->recursive = 0;
		$this->set('zauber', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Zauber->id = $id;
		if (!$this->Zauber->exists()) {
			throw new NotFoundException(__('Invalid zauber'));
		}
		$this->set('zauber', $this->Zauber->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zauber->create();
			if ($this->Zauber->save($this->request->data)) {
				$this->Session->setFlash(__('The zauber has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zauber could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Zauber->id = $id;
		if (!$this->Zauber->exists()) {
			throw new NotFoundException(__('Invalid zauber'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Zauber->save($this->request->data)) {
				$this->Session->setFlash(__('The zauber has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zauber could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Zauber->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Zauber->id = $id;
		if (!$this->Zauber->exists()) {
			throw new NotFoundException(__('Invalid zauber'));
		}
		if ($this->Zauber->delete()) {
			$this->Session->setFlash(__('Zauber deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Zauber was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
