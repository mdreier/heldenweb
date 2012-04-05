<?php
App::uses('AppController', 'Controller');
/**
 * Beschreibungen Controller
 *
 * @property Beschreibung $Beschreibung
 */
class BeschreibungenController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Beschreibung->recursive = 0;
		$this->set('beschreibungen', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Beschreibung->id = $id;
		if (!$this->Beschreibung->exists()) {
			throw new NotFoundException(__('Invalid beschreibung'));
		}
		$this->set('beschreibung', $this->Beschreibung->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Beschreibung->create();
			if ($this->Beschreibung->save($this->request->data)) {
				$this->Session->setFlash(__('The beschreibung has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beschreibung could not be saved. Please, try again.'));
			}
		}
		$helden = $this->Beschreibung->Held->find('list');
		$this->set(compact('helden'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Beschreibung->id = $id;
		if (!$this->Beschreibung->exists()) {
			throw new NotFoundException(__('Invalid beschreibung'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Beschreibung->save($this->request->data)) {
				$this->Session->setFlash(__('The beschreibung has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beschreibung could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Beschreibung->read(null, $id);
		}
		$helden = $this->Beschreibung->Held->find('list');
		$this->set(compact('helden'));
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
		$this->Beschreibung->id = $id;
		if (!$this->Beschreibung->exists()) {
			throw new NotFoundException(__('Invalid beschreibung'));
		}
		if ($this->Beschreibung->delete()) {
			$this->Session->setFlash(__('Beschreibung deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Beschreibung was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
