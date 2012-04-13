<?php
App::uses('AppController', 'Controller');
/**
 * HeldenTalenten Controller
 *
 * @property HeldenTalent $HeldenTalent
 */
class HeldenTalentenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->HeldenTalent);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->HeldenTalent, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->HeldenTalent);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->HeldenTalent->id = $id;
		if (!$this->HeldenTalent->exists()) {
			throw new NotFoundException(__('Invalid helden talent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HeldenTalent->save($this->request->data)) {
				$this->Session->setFlash(__('The helden talent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The helden talent could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->HeldenTalent->read(null, $id);
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
		$this->HeldenTalent->id = $id;
		if (!$this->HeldenTalent->exists()) {
			throw new NotFoundException(__('Invalid helden talent'));
		}
		if ($this->HeldenTalent->delete()) {
			$this->Session->setFlash(__('Helden talent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Helden talent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
