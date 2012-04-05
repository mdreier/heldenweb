<?php
App::uses('AppController', 'Controller');
/**
 * Werte Controller
 *
 * @property Wert $Wert
 */
class WerteController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Wert->recursive = 0;
		$this->set('werte', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Wert->id = $id;
		if (!$this->Wert->exists()) {
			throw new NotFoundException(__('Invalid wert'));
		}
		$this->set('wert', $this->Wert->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wert->create();
			if ($this->Wert->save($this->request->data)) {
				$this->Session->setFlash(__('The wert has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wert could not be saved. Please, try again.'));
			}
		}
		$helden = $this->Wert->Held->find('list');
		$this->set(compact('helden'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Wert->id = $id;
		if (!$this->Wert->exists()) {
			throw new NotFoundException(__('Invalid wert'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Wert->save($this->request->data)) {
				$this->Session->setFlash(__('The wert has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wert could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Wert->read(null, $id);
		}
		$helden = $this->Wert->Held->find('list');
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
		$this->Wert->id = $id;
		if (!$this->Wert->exists()) {
			throw new NotFoundException(__('Invalid wert'));
		}
		if ($this->Wert->delete()) {
			$this->Session->setFlash(__('Wert deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Wert was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
