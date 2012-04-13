<?php
App::uses('AppController', 'Controller');
/**
 * HeldenZauber Controller
 *
 * @property HeldenZauber $HeldenZauber
 */
class HeldenZauberController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->EigenschaftenHeld);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->EigenschaftenHeld, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->EigenschaftenHeld);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->HeldenZauber->id = $id;
		if (!$this->HeldenZauber->exists()) {
			throw new NotFoundException(__('Invalid helden zauber'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HeldenZauber->save($this->request->data)) {
				$this->Session->setFlash(__('The helden zauber has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The helden zauber could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->HeldenZauber->read(null, $id);
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
		$this->HeldenZauber->id = $id;
		if (!$this->HeldenZauber->exists()) {
			throw new NotFoundException(__('Invalid helden zauber'));
		}
		if ($this->HeldenZauber->delete()) {
			$this->Session->setFlash(__('Helden zauber deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Helden zauber was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
