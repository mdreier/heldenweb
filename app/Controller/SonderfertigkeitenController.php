<?php
App::uses('AppController', 'Controller');
/**
 * Sonderfertigkeiten Controller
 *
 * @property Sonderfertigkeit $Sonderfertigkeit
 */
class SonderfertigkeitenController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Sonderfertigkeit->recursive = 0;
		$this->set('sonderfertigkeiten', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Sonderfertigkeit->id = $id;
		if (!$this->Sonderfertigkeit->exists()) {
			throw new NotFoundException(__('Invalid sonderfertigkeit'));
		}
		$this->set('sonderfertigkeit', $this->Sonderfertigkeit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sonderfertigkeit->create();
			if ($this->Sonderfertigkeit->save($this->request->data)) {
				$this->Session->setFlash(__('The sonderfertigkeit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sonderfertigkeit could not be saved. Please, try again.'));
			}
		}
		$talente = $this->Sonderfertigkeit->Talent->find('list');
		$this->set(compact('talente'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Sonderfertigkeit->id = $id;
		if (!$this->Sonderfertigkeit->exists()) {
			throw new NotFoundException(__('Invalid sonderfertigkeit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Sonderfertigkeit->save($this->request->data)) {
				$this->Session->setFlash(__('The sonderfertigkeit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sonderfertigkeit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Sonderfertigkeit->read(null, $id);
		}
		$talente = $this->Sonderfertigkeit->Talent->find('list');
		$this->set(compact('talente'));
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
		$this->Sonderfertigkeit->id = $id;
		if (!$this->Sonderfertigkeit->exists()) {
			throw new NotFoundException(__('Invalid sonderfertigkeit'));
		}
		if ($this->Sonderfertigkeit->delete()) {
			$this->Session->setFlash(__('Sonderfertigkeit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Sonderfertigkeit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
